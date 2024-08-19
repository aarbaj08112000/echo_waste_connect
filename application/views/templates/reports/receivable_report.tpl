<div class="wrapper container-xxl flex-grow-1 container-p-y">

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
            <span class="hide-menu">Select Month</span>
            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
          </li>
          <li class="sidebar-item">
            <div class="input-group">
            <select name="customer_part_id" id="customer_part_id" class="form-control select2" required>
            <option value="">Select Customer</option>
                            <%if $customers%>
                                <%foreach from=$customers item=c%>
                                <option value="<%$c->id%>"
                                    <%if $selected_customer_part_id === $c->id%>selected<%/if%>
                                ><%$c->customer_name%></option>
                                <%/foreach%>
                            <%/if%>
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
          Reports
          <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Receivable Reports</em></a>
        </h1>
        <br>
        <span >Receivable Reports</span>
      </div>
    </nav>
    <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
      <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
      <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
      <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
      <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button>
    </div>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <!-- /.card -->

                        <div class="card">
                        <div class="card-header">
                               
                                <!-- Button trigger modal -->
                                <!-- <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleModal">
                                    Add </button> -->
                            </div>
                            <!-- Modal -->

                            <!-- /.card-header -->
                            <div class="card-body">
                            <div class="table-responsive text-nowrap">
                                <table id="receivable_report" class="table table-bordered table-striped">
                                    <thead>
                                        <%foreach from=$data key=key item=val%>
                                        <th><b>Search <%$val['title']%></b></th>
                                        <%/foreach%>
                                    </tr>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </div>
                                    </tbody>
                                </table>
                                </div>
                            <!-- /.card-body -->
                        </div>
                        <%* <button type="submit" data-bs-toggle="modal" class="btn btn-sm btn-primary"
                                                            data-bs-target="#exampleModal2"> <i class="fas fa-edit"></i></button> *%>

                        <div class="modal fade" id="update_report_data" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <%* <span aria-hidden="true">&times;</span> *%>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form id="updateReceivableForm" method="POST">
                                        <input type="hidden" name="sales_number" id="sales_number" value="<%$po->sales_number%>">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="payment_receipt_date">Payment Receipt Date</label><span
                                                        class="text-danger">*</span>
                                                    <input type="date" name="payment_receipt_date" required
                                                        class="form-control"
                                                        id="payment_date_modal"
                                                        aria-describedby="emailHelp"
                                                        placeholder="Payment Receipt Date" value="">
                                                </div>

                                                <div class="form-group">
                                                    <label for="amount_received">Amount Received</label><span
                                                        class="text-danger">*</span>
                                                    <input type="text"
                                                        name="amount_received" required
                                                        class="form-control"
                                                        id="receivable_amount_modal"
                                                        aria-describedby="emailHelp"
                                                        placeholder="Amount Received" value="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                </div>

                                                <div class="form-group">
                                                    <label for="transaction_details">Trans. Details</label><span
                                                        class="text-danger"></span>
                                                    <input type="text"
                                                        name="transaction_details"
                                                        class="form-control"
                                                        id="transection_detail_modal"
                                                        aria-describedby="emailHelp"
                                                        placeholder="Transaction Details" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit"
                                                class="btn btn-primary">Save
                                                changes</button>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
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
</div>
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
<script src="<%$base_url%>/public/js/reports/receivable_report.js"></script>