<div class="wrapper container-xxl flex-grow-1 container-p-y">
    <div class="content-wrapper">
        
        <nav aria-label="breadcrumb">
      <div class="sub-header-left pull-left breadcrumb">
        <h1>
          Reports
          <a hijacked="yes" href="javascript:void(0)" class="backlisting-link" title="Back to Issue Request Listing">
            <i class="ti ti-chevrons-right"></i>
            <em>Material Requisition</em></a>
        </h1>
        <br>
        <span>Sharing Issue Request - Completed</span>
      </div>
    </nav>
     <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
        <a class="btn btn-seconday" href="<%base_url('sharing_issue_request_store') %>">View Pending Requests</a>
            <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
      <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
    </div>
        <section class="content">
            <div>
                <div class="row">
                    <br>
                    <div class="col-lg-12">
                        <div class="card">
                            
                            <!-- /.card-header -->
                            <div class="">
                                <table id="sharing_issue_request_store_completed" class="table  table-striped">
                                    <thead>
                                        <tr>
                                            <!-- <th>Sr No</th> -->
                                            <th>Part Number / Description / Thickness / Weight</th>
                                            <th>Status</th>
                                            <th>Date & Time</th>
                                            <th>Actual Store Stock</th>
                                            <th>Required Qty</th>
                                            <th>Accept Qty</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <%if ($sharing_issue_request) %>
                                            <%assign var='i' value=1 %>
                                            <%foreach from=$sharing_issue_request item=u %>
                                                <tr>
                                                    <!-- <td><%$i %></td> -->
                                                    <td><%$u->part_number %> /
                                                        <%$u->part_description %>/
                                                        <%$u->thickness %>/
                                                        <%$u->weight %>
                                                    </td>
                                                    <td><%$u->status %></td>
                                                    <td><%$u->created_date %> / <%$u->created_time %></td>
                                                    <td>
                                                        <%$u->stock %>
                                                    </td>
                                                    <td><%$u->qty %></td>
                                                    <td>
                                                        <%$u->accepted_qty %>
                                                    </td>
                                                </tr>
                                            <%assign var='i' value=$i+1 %>  
                                            <%/foreach%>
                                        <%/if%>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
               </div><!-- /.container-fluid -->
        </section>
 </div>
 <script >
     var file_name = "sharing_issue_request_store";
    var pdf_title = "Sharing Issue Request - Completed";
     var data = {};
        table = $("#sharing_issue_request_store_completed").DataTable({
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
                            values.splice(7, 1);
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
                    // doc.content[1].table.widths = ["19%", "19%", "13%", "13%", "15%", "15%"];
                    doc.content[1].table.body[0].forEach(function (cell) {
                        cell.fillColor = theme_color;
                    });
                    doc.content[1].table.body.forEach(function (row, index) {
                        row.splice(7, 1);
                        row.forEach(function (cell) {
                            // Set alignment for each cell
                            cell.alignment = "center"; // Change to 'left' or 'right' as needed
                        });
                    });
                },
            },
        ],
        searching: true,
        // scrollX: true,
        scrollY: true,
        bScrollCollapse: true,
        // columnDefs: [{ sortable: false, targets: 7 }],
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

        // global searching for datable 
        $('#serarch-filter-input').on('keyup', function() {
            table.search(this.value).draw();
        });
 </script>
