var table = '';
var file_name = "grades";
var pdf_title = "grades";
$(document).ready(function() {

    $('#gradesForm').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        var formData = new FormData(this); // Create a FormData object from the form

        $.ajax({
            url: $(this).attr('action'), // Use the form's action attribute as the URL
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // Handle the successful response here
                if (response != '' && response != null && typeof response != 'undefined') {
                    let res = JSON.parse(response);
                    console.log(res);
                    if (res['success'] == 1) {
                        toastr.success(res['msg']);
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    } else {
                        toastr.error(res['msg']);
                    }
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Handle any errors here
                alert('An error occurred: ' + errorThrown);
            }
        });
    });


    table = new DataTable('#grades', {
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
});




