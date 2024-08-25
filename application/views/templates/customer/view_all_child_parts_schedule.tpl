<div class="wrapper container-xxl flex-grow-1 container-p-y">
    <!-- Navbar -->

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme filter-popup-block" style="width: 0px;">
    <div class="app-brand demo justify-content-between">
        <a href="javascript:void(0)" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Filter</span>
        </a>
        <div class="close-filter-btn d-block filter-popup cursor-pointer">
                <i class="ti ti-x fs-8"></i>
            </div>
    </div>
    <nav class="sidebar-nav scroll-sidebar filter-block" data-simplebar="init">
      <div class="simplebar-content" >
        <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <div class="filter-row">
              <li class="nav-small-cap">
                <span class="hide-menu">Select Customer</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                  <select name="customer_name" class="form-control select2" id="customer_name">
                  <%foreach $customer_data as $key => $val%>
                  <option 
                      value="<%$key%>"><%$val%></option>
                   <%/foreach%>
                  </select>
                </div>
              </li>
            </div>
          
            

        </ul>
      </div>
    </nav>
    <div class="filter-popup-btn">
            <button class="btn btn-outline-danger reset-filter">Reset</button>
            <button class="btn btn-primary search-filter">Search</button>
        </div>
</aside>

    <nav aria-label="breadcrumb">
      <div class="sub-header-left pull-left breadcrumb">
        <h1>
          Planning & Sales
          <a hijacked="yes"  class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Customer PO QTY Tracking</em></a>
        </h1>
        <br>
        <span >Monthly MRP Req</span>
      </div>
    </nav>
    <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
      <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
      <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
      <%*<button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button> *%>
      <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button>
    </div>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    
        <!-- Main content -->
        <section class="content">
            <div class="">
                <div class="row">
                    <div class="col-12">
                        <!-- /.card -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"></h3>
                                <a class="btn btn-dark" href="<%$base_url%>planing_data/<%$financial_year%>/<%$month%>/0">Back</a>
                                <!-- <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
                                    Update Schedule Qty 2 </button> -->
                                <!-- Button trigger modal -->
                                <!-- <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
                                    Add Planing</button> -->
                                <!-- Modal -->
                              
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                   <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Item part Number</th>
                                            <th>Item part Description</th>                                         
                                            <th>Actual Stock</th>
                                            <th>Net MRP Req</th>
                                            <th>Required Qty </th>
                                            <th>Part Rate</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <%assign var="i" value=1%>
                                        <%assign var="total" value=0%>
                                     
                                        <%if $child_part_master%>
                                            <%foreach from=$child_part_master_main item=t%>
                                                <%assign var="subtotal" value=0%>
                                                <%assign var="shortage_qty" value=0%>
                                                <%assign var="actual_stock" value=0%>
                                                <%if $child_part_master[$t->part_number]%>
                                                    
                                                    <%assign var="req_qty" value=0%>
                                                    <%if $planing_data[$child_part_master[$t->part_number][0]->child_part_id]%>
                                                        <%foreach from=$planing_data[$child_part_master[$t->part_number][0]->child_part_id] item=t1%>
                                                            <%assign var="schedule_qty_2" value=$t1->schedule_qty_2%>
                                                            <%assign var="schedule_qty" value=$t1->schedule_qty%>
                                                            <%assign var="net_schedule" value=0%>

                                                            <%if $schedule_qty_2 != 0%>
                                                                <%assign var="net_schedule" value=$schedule_qty_2 - $schedule_qty%>
                                                                <%assign var="req_qty" value=$req_qty + $t1->required_qty + ($net_schedule * $t1->bom_qty)%>
                                                            <%else%>
                                                                <%assign var="req_qty" value=$req_qty + ($t1->schedule_qty * $t1->bom_qty)%>
                                                            <%/if%>
                                                            
                                                            <%assign var="actual_stock" value=$actual_stock + $t1->actual_stock%>
                                                            <%assign var="shortage_qty" value=$shortage_qty + ($req_qty - $child_part_data[$t->part_number][0]->stock)%>
                                                            <%assign var="subtotal" value=$child_part_master[$t->part_number][0]->part_rate * $req_qty%>
                                                            <%assign var="total" value=$total + $subtotal%>
                                                            <%assign var="net_mrp_req" value=$req_qty - $child_part_data[$t->part_number][0]->stock%>
                                                            <%/foreach%>
                                                    <%/if%>
                                                    
                                                <%/if%>
                                                
                                                
                                                <tr>
                                                    <td><%$i%></td>
                                                    <td><%$child_part_data[$t->part_number][0]->part_number%></td>
                                                    <td><%$child_part_data[$t->part_number][0]->part_description%></td>
                                                    <td><%$child_part_data[$t->part_number][0]->stock%></td>
                                                    <td class="<%if $net_mrp_req > 0%> text-danger <%else%> text-success <%/if%>"><%$net_mrp_req%></td>
                                                    <td><%$req_qty%></td>
                                                    <td><%$child_part_master[$t->part_number][0]->part_rate%></td>
                                                    <td><%$subtotal%></td>
                                                </tr>
                                                <%assign var="i" value=$i+1%>
                                            <%/foreach%>
                                        <%/if%>
                                    </tbody>
                                    <tfoot>
                                        <tr style="text-align:right">
                                            <th colspan="7">Total Purchase Value</th>
                                            <th><%$total%></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<script>
var file_name = "monthly_mrp_req";
var pdf_title = "Monthly MRP Req";
   
   // datatable initilization.
   new DataTable('#example1',{
      dom: 'Bfrtip',
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
                                values.splice(13, 1);
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
                            row.splice(14, 1);
                        });
                    }
                },
            ],
   });
</script>