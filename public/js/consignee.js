var file_name = "Consignee";
var pdf_title = "Consignee";
var table = '';
var myModal = new bootstrap.Modal(document.getElementById('edit_modal'))
const datatable = {
    init:function(){
        let that = this;
        $('#consignee_name').select2();
        that.dataTable();
        $(document).on('click','.search-filter',function(e){
            let consignee_name = $("#consignee_name").val();
            table.column(1).search(consignee_name).draw();
        })
        $(document).on('click','.reset-filter',function(e){
           that.resetFilter();
        })
        $(document).on("click",".edit-part",function(){
            var data = $(this).attr("data-value");
          
            data = JSON.parse(atob(data)); 
            console.log(data)
           
            $("#uconsignee_name").val(data['consignee_name']);
            $("#consignee_id").val(data.c_id);
            $("#address_id").val(data.address_id);
            $("#state_num").val(data.state_no);
            $("#state").val(data.state);
            $("#gst_no").val(data.gst_number);
            $("#phone").val(data.phone_no);
            $("#pan").val(data.pan_no);
            $("#address").val(data.address);
            $("#location").val(data.location);
            $("#PIN").val(data.pin_code);
            myModal.show();
        })
    },
    dataTable:function(){
      table =  new DataTable('#example1',{
        dom: 'Bfrtip',
        scrollX: false, 
        buttons: [
                {     
                    extend: 'csv',
                        text: '<i class="ti ti-file-type-csv"></i>',
                        init: function(api, node, config) {
                        $(node).attr('title', 'Download CSV');
                        },
                        customize: function (csv) {
                            var lines = csv.split('\n');
                            var modifiedLines = lines.map(function(line) {
                                var values = line.split(',');
                                values.splice(9, 1);
                                return values.join(',');
                            });
                            return modifiedLines.join('\n');
                        },
                        filename : file_name
                    },
                
                    {
                    extend: 'pdf',
                    text: '<i class="ti ti-file-type-pdf"></i>',
                    init: function(api, node, config) {
                        $(node).attr('title', 'Download Pdf');
                        
                    },
                    filename: file_name,
                    
                    customize: function (doc) {
                        doc.pageMargins = [15, 15, 15, 15];
                        doc.content[0].text = pdf_title;
                        doc.content[0].color = theme_color;
                        // doc.content[1].table.widths = ['15%', '19%', '13%', '13%','15%', '15%', '10%'];
                        doc.content[1].table.body[0].forEach(function(cell) {
                            cell.fillColor = theme_color;
                        });
                        doc.content[1].table.body.forEach(function(row, rowIndex) {
                            row.forEach(function(cell, cellIndex) {
                                var alignmentClass = $('#example1 tbody tr:eq(' + rowIndex + ') td:eq(' + cellIndex + ')').attr('class');
                                var alignment = '';
                                if (alignmentClass && alignmentClass.includes('dt-left')) {
                                    alignment = 'left';
                                } else if (alignmentClass && alignmentClass.includes('dt-center')) {
                                    alignment = 'center';
                                } else if (alignmentClass && alignmentClass.includes('dt-right')) {
                                    alignment = 'right';
                                } else {
                                    alignment = 'left';
                                }
                                cell.alignment = alignment;
                            });
                            row.splice(9, 1);
                        });
                    }
                },
            ],
    });
    },
    resetFilter:function(){
        table.column(1).search('').draw();
    }

}

$(document).ready(function () {
    datatable.init();    
})