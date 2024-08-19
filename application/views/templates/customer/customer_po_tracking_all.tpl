<div  class="wrapper container-xxl flex-grow-1 container-p-y">
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
          <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Customer PO QTY Tracking</em></a>
        </h1>
        <br>
        <span >View Pending</span>
      </div>
    </nav>
    <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
      <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
      <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
      <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
      <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button>
    </div>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        

        <!-- Main content -->
        <section class="content">
            <div class="">
                <div class="row">
              

                        <!-- /.card -->

                        <div class="card"><!--
                            <div class="card-header">
                                <div class="row">
                                     <div class="col-lg-2">
                                            <div class="form-group">
                                                <form action="<%$base_url%>inwarding_by_po" method="POST">
                                                <label for="">Enter PO Number <span class="text-danger">*</span> </label>
                                                <input type="text" name="po_number" class="form-control" required placeholder="Enter Valid PO Number : ">
                                            </div>

                                    </div>
                                    <div class="col-lg-2">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success mt-4">Search</button>
                                            </div>
                                            </form>

                                    </div> 
                                </div>

                            </div>-->

                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                         
                                            <th>Customer</th>
                                            <th>PO Number</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Amendment No</th>
                                            <th>Status</th>
                                            <th>View Details</th>
                                            <!-- <th>Close PO</th>-->
                                            <th>PO Document</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>

                                   
                                </table>
                            </div>
                            <!-- /.card-header -->

                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
              
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <div class="modal fade" id="upload_modal" tabindex="-1" role="dialog" aria-labelledby="upload_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload file</h5>
                <button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form action="<%$base_url%>add_part" method="post"id="uploadForm" enctype='multipart/form-data'>
            <div class="modal-body">
                    <div class="text-center">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Upload File<span class="text-danger">*</span>
                            <input required type="file" name="cad_file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Asset Number">
                        </div>
                        <input value="<%$s->id%>" type="hidden" name="uid" required class="form-control" id="uid" aria-describedby="emailHelp" placeholder="Customer Name">
                        <input type="hidden" name="table_name" value="customer_po_tracking">
                        <input type="hidden" name="column_name" value="uploadedDoc">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </div>
                    </form>
        </div>
    </div>
</div>

    <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="edit_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                <button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form action="<%$base_url%>update_customer_po_tracking_all" method="POST" id="updateForm" enctype="multipart/form-data">
            <div class="modal-body">
                    <div class="form-group">
                        <label for="">End Date<span class="text-danger">*</span></label>
                        <input required value="<%$s->po_end_date%>" type="date" class="form-control" name="end_date" id="end_date">
                        <input required value="<%$s->id%>" type="hidden" class="form-control" name="id" id="part_id">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>


    <div class="modal fade" id="close_modal" tabindex="-1" role="dialog" aria-labelledby="close_modal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Close PO</h5>
                        <button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
                            
                        </button>
                    </div>
                    <form action="<%$base_url%>close_po_customer_po_tracking" method="POST" id="closePoForm" enctype="multipart/form-data">
                    <div class="modal-body">
                            <div class="form-group">
                                <label for="">Are you sure to close <u>PO Number : <%$s->po_number%></u> ?</label>
                                <br><br>
                                <input required value="<%$s->id%>" type="hidden" class="form-control" name="id" id='close_id'>
                                <label for="">Remark<span class="text-danger"></span></label>
                                <input type="text" name="remark" placeholder="Enter Remark " class="form-control" id="remarks"/>
                                <label for="">Reason<span class="text-danger">*</span> </label>
                                <select name="reason"  id="reason" class="form-control select2">
                                    <option value="">Select</option>
                                    <option value="Withdraw">Withdraw</option>
                                    <option value="Completed">Completed</option>
                                </select>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <!-- /.content-wrapper -->

    <script>
    var column_details =  <%$data|json_encode%>;
    var page_length_arr = <%$page_length_arr|json_encode%>;
    var is_searching_enable = <%$is_searching_enable|json_encode%>;
    var is_top_searching_enable =  <%$is_top_searching_enable|json_encode%>;
    var is_paging_enable =  <%$is_paging_enable|json_encode%>;
    var is_serverSide =  <%$is_serverSide|json_encode%>;
    var no_data_message =  <%$no_data_message|json_encode%>;
    var is_ordering =  <%$is_ordering|json_encode%>;
    var sorting_column = <%$sorting_column%>;
    var api_name =  <%$api_name|json_encode%>;
    var base_url = <%$base_url|json_encode%>;
</script>

    <script src="<%$base_url%>/public/js/potracking.js"></script>