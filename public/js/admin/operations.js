var table = '';
var file_name = "operations";
var pdf_title = "Operations";

$(document).ready(function() {

    // Initialize the DataTable
    table = new DataTable('#operations', {
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
                        values.splice(4, 4); // Make sure this logic is correct for your use case
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
                        row.splice(4, 4); // Make sure this logic is correct for your use case
                    });
                }
            },
        ],
    });

    $('#add_opration').validate({
        rules: {
            namess: {
                required: true
            }
        },
        messages: {
            namess: {
                required: "Please Enter Operation Number."
            }
        },
        submitHandler: function(form) {
            // Submit the form via AJAX
            $.ajax({
                url: $(form).attr('action'), // Use the form's action attribute as the URL
                type: 'POST',
                data: new FormData(form), // Send the form data
                processData: false,
                contentType: false,
                success: function(response) {
                    // Parse the JSON response
                    let res = JSON.parse(response);

                    if(res.success == 1){
                        // Show success message
                        toastr.success(res.msg);
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                        // Optionally close the modal
                        $('#addPromo').modal('hide');
                        // Optionally reset the form
                        form.reset();
                    } else {
                        // Show error message
                        toastr.error(res.msg);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Handle the error
                    toastr.error('An error occurred: ' + errorThrown);
                }
            });
            return false; // Prevent the default form submission
        }
    });

    $('#update_operation').validate({
        rules: {
            namess: {
                required: true
            }
        },
        messages: {
            namess: {
                required: "please enter Operation Numner."
            }
        },
        submitHandler: function(form) {
            $.ajax({
                url: $(form).attr('action'), // Form action URL
                type: 'POST',
                data: new FormData(form), // Form data
                processData: false,
                contentType: false,
                success: function(response) {
                    // Handle the response here
                    let res = JSON.parse(response);
                    if (res.success == 1) {
                        toastr.success(res.msg);
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    } else {
                        toastr.error(res.msg);
                    }
                    // Close the modal and reset the form
                    $(form)[0].reset();
                    $('#edit').modal('hide');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Handle errors here
                    alert('An error occurred: ' + errorThrown);
                }
            });
            return false; // Prevent the default form submit
        }
    });


    // Custom search filter event
  
   



});
