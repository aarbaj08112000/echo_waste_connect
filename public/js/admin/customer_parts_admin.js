var table = '';
var file_name = "customer_parts_admin";
var pdf_title = "Cusotomer Part Admin";

$(document).ready(function() {

    // Initialize the DataTable
    table = new DataTable('#customer_parts_admin', {
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

    $(document).on("click",".update_edit",function(){
        var data = $(this).attr("data-value");
        data = JSON.parse(atob(data)); 
        console.log(data)
        
        var option = '';
       
        $("#part_number").val(data.part_number);
        $("#part_id").val(data.id);
        $("#part_desc").val(data.part_description);
        $("#fg_stock").val(data.fg_stock);
        
        // myModal.show();
    })

    // Custom search filter event
    $('.search-filter').on('click', function(e) {
        let part_val = $('#part_id_selected').val();
        // Ensure that the table and column exist before applying the search
        console.log(part_val);
        if (table && part_val) {
            table.column(1).search(part_val).draw();
        }
        $('.close-filter-btn').trigger('click');
    });

    $('.reset-filter').on('click',function(e){
        $('#part_id_selected').val('');
        table.column(1).search('').draw();
        $('.close-filter-btn').trigger('click');
    })
   

    // Form validation and submission
    $('.customer_part_update').validate({
        rules: {
            part_number: {
                required: true
            },
            part_description: {
                required: true
            },
            stock: {
                required: true,
                number: true // Ensures that the stock field is a number
            },
            id: {
                required: true
            }
        },
        messages: {
            part_number: {
                required: "Please enter Part Number"
            },
            part_description: {
                required: "Please enter Part Description"
            },
            stock: {
                required: "Please enter Stock",
                number: "Please enter a valid number"
            },
            id: {
                required: "ID is required"
            }
        },
        submitHandler: function(form) {
            $.ajax({
                url: $(form).attr('action'),
                type: 'POST',
                data: new FormData(form),
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response) {
                        let res = JSON.parse(response);
                        if (res.success == 1) {
                            toastr.success(res.msg);
                            setTimeout(() => {
                                window.location.reload();
                            }, 1000);
                        } else {
                            toastr.error(res.msg);
                        }
                    }
                    $(form)[0].reset();
                    $('.modal').modal('hide');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('An error occurred: ' + errorThrown);
                }
            });
            return false; // Prevent default form submit
        }
    });

});
