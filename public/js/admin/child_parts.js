var table = '';
var file_name = "child_parts";
var pdf_title = "child_parts";

$(document).ready(function() {

    // Initialize the DataTable
    table = new DataTable('#child_parts', {
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
                        values.splice(3, 1); // Make sure this logic is correct for your use case
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
                        row.splice(3, 1); // Make sure this logic is correct for your use case
                    });
                }
            },
        ],
    });

    // Custom search filter event
    $('.search-filter').on('click', function(e) {
        let part_val = $('#part_id_selected').val();
        // Ensure that the table and column exist before applying the search
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
    $('.approve-price').validate({
        rules: {
            upart_number: {
                required: true
            },
            upart_desc: {
                required: true
            },
            id: {
                required: true
            }
        },
        messages: {
            upart_number: {
                required: "Part Number is required"
            },
            upart_desc: {
                required: "Please enter part price."
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
