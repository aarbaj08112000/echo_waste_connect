var table = '';
var file_name = "global_config";
var pdf_title = "Global Config";

$(document).ready(function() {
    // Initialize the DataTable

    $(document).on("click",".edit-part",function(){
        var data = $(this).attr("data-value");
        configData = JSON.parse(atob(data)); 
      
        
        $('#updateConfigForm input[name="display_label"]').val(configData.displayLabel);
        $('#updateConfigForm input[name="config_name"]').val(configData.config_name);
        $('#updateConfigForm input[name="configID"]').val(configData.id);
        $('#updateConfigForm textarea[name="note"]').val(configData.note);
    
        // Handling the config value field
        if (configData.config_name === "companyLogo") {
            $('#updateConfigForm input[name="companyLogo"]').val(configData.config_value);
        } else {
            $('#updateConfigForm input[name="config_value"]').val(configData.config_value);
        }
    
        // Set the checkboxes
        if (configData.ARMUserOnly === "1") {
            $('#updateConfigForm input[name="forAromOnly"]').prop('checked', true);
        } else {
            $('#updateConfigForm input[name="forAromOnly"]').prop('checked', false);
        }
    
        if (configData.canModify === "1") {
            $('#updateConfigForm input[name="canCustomerModify"]').prop('checked', true);
        } else {
            $('#updateConfigForm input[name="canCustomerModify"]').prop('checked', false);
        }
        // myModal.show();
    })


    table = new DataTable('#example1', {
        dom: 'Bfrtip',
        scrollX: true,
        scrollY: true,
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

    $('#updateConfigForm').validate({
            rules: {
                display_label: {
                    required: true,
                    maxlength: 100
                },
                config_value: {
                    required: true
                },
                note: {
                    required: true,
                    maxlength: 255
                }
            },
            messages: {
                display_label: {
                    required: "Please enter the display name",
                    maxlength: "Display name can't exceed 100 characters"
                },
                config_value: {
                    required: "Please enter the config value"
                },
                note: {
                    required: "Please enter a note",
                    maxlength: "Note can't exceed 255 characters"
                }
            },
            submitHandler: function(form) {
                // Perform AJAX form submission
                $.ajax({
                    url: $(form).attr('action'),
                    type: 'POST',
                    data: new FormData(form),
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // Handle successful response
                        $(form).closest('.modal').modal('hide');
                        if(response != '' && response != null && typeof response != 'undefined'){
                            let res = JSON.parse(response);
                            if(res['success'] == 1){
                                toastr.success(res['msg']);
                                setTimeout(() => {
                                    window.location.reload();
                                   
                                    // Optionally, refresh the table or perform other actions
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
    // Custom search filter event
  
   



});
