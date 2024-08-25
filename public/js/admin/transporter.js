var table = '';
var file_name = "uom";
var pdf_title = "UOM";

$(document).ready(function() {
    // Initialize the DataTable
    table = new DataTable('#transporter', {
        dom: 'Bfrtip',
        scrollX: true,
        buttons: [
            {     
                extend: 'csv',
                text: '<i class="ti ti-file-type-csv"></i>',
                init: function(api, node, config) {
                    $(node).attr('title', 'Download CSV');
                },
                customize: function(csv) {
                    var lines = csv.split('\n');
                    var modifiedLines = lines.map(function(line) {
                        var values = line.split(',');
                        values.splice(3, 3); // Make sure this logic is correct for your use case
                        return values.join(',');
                    });
                    return modifiedLines.join('\n');
                },
                filename: file_name
            },
            {
                extend: 'pdf',
                text: '<i class="ti ti-file-type-pdf"></i>',
                init: function(api, node, config) {
                    $(node).attr('title', 'Download Pdf');
                },
                filename: file_name,
                customize: function(doc) {
                    doc.pageMargins = [15, 15, 15, 15];
                    doc.content[0].text = pdf_title;
                    doc.content[0].color = theme_color;
                    doc.content[1].table.body[0].forEach(function(cell) {
                        cell.fillColor = theme_color;
                    });
                    doc.content[1].table.body.forEach(function(row) {
                        row.forEach(function(cell) {
                            // Custom alignment logic
                            cell.alignment = 'left'; // Default to left, adjust based on your needs
                        });
                        row.splice(3, 3); // Make sure this logic is correct for your use case
                    });
                }
            },
        ],
    });

    $.validator.addMethod("regex", function(value, element, regexpr) {
        return this.optional(element) || regexpr.test(value);
    }, "Invalid format.");

    $("#addTransporterForm").validate({
        rules: {
            namess: {
                required: true,
                minlength: 3
            },
            transporter_id: {
                required: true,
                regex: /^([0-9]{2}[0-9A-Z]{13})$/
            }
        },
        messages: {
            namess: {
                required: "Please enter the transporter name",
                minlength: "The name must be at least 3 characters long"
            },
            transporter_id: {
                required: "Please enter the transporter ID",
                regex: "Please enter a valid transporter ID"
            }
        },
        submitHandler: function(form) {
            // Perform AJAX form submission
            $.ajax({
                url: $(form).attr('action'),
                type: 'POST',
                data: $(form).serialize(),
                success: function(response) {
                    // Handle successful response
                    if(response !== '' && response !== null && typeof response !== 'undefined'){
                        let res = JSON.parse(response);
                        if(res['success'] === 1){
                            toastr.success(res['msg']);
                            setTimeout(() => {
                                window.location.reload();
                            }, 1000);
                        }else{
                            toastr.error(res['msg']);
                        }
                    }
                    // Optionally, hide the modal
                    $('#addPromo').modal('hide');
                },
                error: function(xhr, status, error) {
                    // Handle errors
                    console.error('Form submission failed:', error);
                }
            });

        }
    });
    // Custom search filter event
  
   



});
