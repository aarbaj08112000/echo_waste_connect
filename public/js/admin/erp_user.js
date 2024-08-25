var table = '';
var file_name = "erp_users";
var pdf_title = "ERP Users";

$(document).ready(function() {

    $("#addTransporterForm").validate({
        rules: {
            user_name: {
                required: true,
                minlength: 3
            },
            user_email: {
                required: true,
                email: true
            },
            user_password: {
                required: true,
                minlength: 6
            },
            user_role: {
                required: true
            }
        },
        messages: {
            user_name: {
                required: "Please enter the user full name",
                minlength: "The name must be at least 3 characters long"
            },
            user_email: {
                required: "Please enter the user email",
                email: "Please enter a valid email address"
            },
            user_password: {
                required: "Please enter the password",
                minlength: "The password must be at least 6 characters long"
            },
            user_role: {
                required: "Please select a role"
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
                    if(response != '' && response != null && typeof response != 'undefined'){
                        let res = JSON.parse(response);
                        if(res['success'] == 1){
                            toastr.success(res['msg']);
                            setTimeout(() => {
                                $('#addPromo').modal('hide');
                                // Optionally, refresh the table or perform other actions
                                window.location.reload();
                            }, 1000);
                        }else{
                            toastr.error(res['msg']);
                        }
                    }
                },
                error: function(xhr, status, error) {
                    // Handle errors
                    console.error('Form submission failed:', error);
                }
            });
        }
    });


    // Initialize the DataTable
    table = new DataTable('#erp_users', {
        dom: 'Bfrtip',
        scrollX: true,
        responsive: true,
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


    // Custom search filter event
  
   



});
