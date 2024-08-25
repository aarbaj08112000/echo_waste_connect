var file_name = "customer_master";
var pdf_title = "Customer Master";
var table = '';
const datatable = {
    init:function(){
        let that = this;
        that.dataTable();
        $(document).on('click','.search-filter',function(e){
            let customer_name = $("#customer_name").val();
            table.column(1).search(customer_name).draw();
        })
        $(document).on('click','.reset-filter',function(e){
           that.resetFilter();
        })
        $(document).on("click",".add-revision",function(){
            var data = $(this).attr("data-value");
            data = JSON.parse(atob(data)); JBM
            console.log(data);
            $('#part_number').val(data[1]['part_number']);
            $('#revision_no').val(data[0].revision_no);
            $('#part_description').val(data[1].part_description);
            $('#revision_remark').val(data[0].revision_remark);
            
            $('#revision_date').val(data[0]['revision_date']);
        })
    },
    dataTable:function(){
      table =  new DataTable('#example1',{
        dom: "Bfrtilp",
        // scrollX: true, 
        columnDefs: [
            { orderable: false, targets: [3,4,5,6,7,8] } // Disable ordering for the first and third columns
        ],
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
                                values.splice(2, 1);
                                values.splice(9, 1);
                                values.splice(8, 1);
                                values.splice(7, 1);
                                values.splice(6, 1);
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
                    
                    

                },
            ],
        searching: true,
      // scrollX: true,
      scrollY: true,
      bScrollCollapse: true,
      columnDefs: [{ sortable: false, targets: 3 },{ sortable: false, targets: 4 },{ sortable: false, targets: 5 },{ sortable: false, targets: 6},{ sortable: false, targets: 7 },{ sortable: false, targets: 2}],
      pagingType: "full_numbers",
    });
      $('.dataTables_length').find('label').contents().filter(function() {
          return this.nodeType === 3; // Filter out text nodes
      }).remove();
      setTimeout(function(){
        $(".dataTables_length select").select2({
            minimumResultsForSearch: Infinity
        });
      },1000)

    },
    resetFilter:function(){
        table.column(1).search('').draw();
    }

}

$(document).ready(function () {
    datatable.init();    
})