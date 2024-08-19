$(document).ready(function() {
    page.init();
});

var table = '';
var file_name = "molding_production_view";
var pdf_title = "Molding Production View";

const page = {
    init: function() {
        this.filter();
        this.dataTable();
        
    },
    dataTable: function() {
        // table = $('#view_add_challan').DataTable();
        var data = {};
        
        table = $("#p_q_molding_production_view").DataTable({
        dom: "Bfrtilp",
        buttons: [
            {
                extend: "csv",
                text: '<i class="ti ti-file-type-csv"></i>',
                init: function (api, node, config) {
                    $(node).attr("title", "Download CSV");
                },
                customize: function (csv) {
                        var lines = csv.split('\n');
                        var modifiedLines = lines.map(function(line) {
                            var values = line.split(',');
                            values.splice(26,3);
                            return values.join(',');
                        });
                        return modifiedLines.join('\n');
                    },
                    filename : file_name
                },
          
            {
                extend: "pdf",
                text: '<i class="ti ti-file-type-pdf"></i>',
                init: function (api, node, config) {
                    $(node).attr("title", "Download Pdf");
                },
                filename: file_name,
                customize: function (doc) {
                    doc.pageMargins = [15, 15, 15, 15];
                    doc.content[0].text = pdf_title;
                    doc.content[0].color = theme_color;
                    doc.content[1].table.widths = ["4.7%", "4.7%", "4.7%", "4.7%", "4.7%", "4.7%","4.7%", "4.7%", "4.7%", "4.7%", "4.7%", "4.7%","4.7%", "4.7%", "4.7%", "4.7%", "4.7%", "4.7%","4.7%", "4.7%", "4.7%", "4.7%", "4.7%", "4.7%","4.7%","4.7%", "4.7%", "4.7%", "4.7%"];
                    doc.content[1].table.body[0].forEach(function (cell) {
                        cell.fillColor = theme_color;
                    });
                    doc.content[1].table.body.forEach(function (row, index) {
                        row.splice(26, 3);
                        row.forEach(function (cell) {
                            // Set alignment for each cell
                            cell.alignment = "center"; // Change to 'left' or 'right' as needed
                        });
                    });
                },
            },
        ],
        searching: true,
        scrollX: true,
        scrollY: true,
        bScrollCollapse: true,
        fixedColumns: {
            leftColumns: 2,
            // end: 1
        },
        columnDefs: [{ sortable: false, targets: 26 },{ sortable: false, targets: 27 },{ sortable: false, targets: 28 }],
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
        // table = $('#example1').DataTable();
        this.serachParams();
        this.serachParams();
  
    },
    filter: function(){
        let that = this;
        $('#date_range_filter').daterangepicker({
            locale: {
            format: 'YYYY/MM/DD' // Example format, adjust as needed
        }
        });
        $('#date_range_filter').data('daterangepicker').setStartDate(start_date);
        $('#date_range_filter').data('daterangepicker').setEndDate(end_date);
        $(".search-filter").on("click",function(){
            that.serachParams();
            $(".close-filter-btn").trigger( "click" )
        })
        $(".reset-filter").on("click",function(){
            that.resetFilter();
        })
        $('#serarch-filter-input').on('keyup', function() {
            table.search(this.value).draw();
        });
    },
    serachParams: function(){
        table.draw(); // Trigger DataTables redraw
        $.fn.dataTable.ext.search.push(
            function(settings, data, dataIndex) {
                var date_range_filter =  $("#date_range_filter").val();
                var dates = date_range_filter.split(' - ');
                var startDate = dates[0].replace(/\//g, '-');
                var endDate = dates[1].replace(/\//g, '-');
                
                var date = data[2]; // Assuming the date is in the 5th column (index 4)

                if (
                    (startDate === '' && endDate === '') ||
                    (startDate === '' && new Date(date) <= new Date(endDate)) ||
                    (new Date(startDate) <= new Date(date) && endDate === '') ||
                    (new Date(startDate) <= new Date(date) && new Date(date) <= new Date(endDate))
                ) {
                    return true;
                }
                return false;
            }
        );
    },
    resetFilter: function(){
        $('#date_range_filter').data('daterangepicker').setStartDate(start_date);
        $('#date_range_filter').data('daterangepicker').setEndDate(end_date);
        this.serachParams();
    },
   
};
