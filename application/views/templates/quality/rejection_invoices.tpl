
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
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
                <span class="hide-menu">Part Number</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                  <select name="child_part_id" class="form-control select2" id="part_number_search">
                    <option value="">Select Part Number</option>
                    <%foreach from=$supplier_part_list item=parts%>
                    <option value="<%$parts->id%>"><%$parts->part_number %></option>
                    <%/foreach%>
                  </select>
                </div>
              </li>
            </div>
            <div class="filter-row">
              <li class="nav-small-cap">
                <span class="hide-menu">Part Description</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                  <input type="text" id="part_description_search" class="form-control" placeholder="Name">
                </div>
              </li>
            </div>
            <div class="filter-row">
              <li class="nav-small-cap">
                <span class="hide-menu">Name</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                  <input type="text" id="employee_name_search" class="form-control" placeholder="Name">
                </div>
              </li>
            </div>
            <div class="filter-row">
              <li class="nav-small-cap">
                <span class="hide-menu">Name</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                  <input type="text" id="employee_name_search" class="form-control" placeholder="Name">
                </div>
              </li>
            </div>
            <div class="filter-row">
              <li class="nav-small-cap">
                <span class="hide-menu">Name</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                  <input type="text" id="employee_name_search" class="form-control" placeholder="Name">
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
          Quality
          <a hijacked="yes" href="javascript:void(0)" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Rejection Invoice</em></a>
          </h1>
          <br>
          <span >Rejection Invoice</span>
        </div>
      </nav>

      <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
        <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
        <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
        <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
        <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button>
      </div>


        <!-- Main content -->
      <div class="card p-0 mt-4">
        <div class="card-header">
           <div class="row">
              <div class="col-lg-4">
                 <div class="form-group">
                    <form action="<%base_url('generate_rejection_sales_invoice') %>" method="POST">
                       <label for="">Select Customer<span class="text-danger">*</span> </label>
                       <select name="customer_id" required id="" class="form-control select2">
                          <%if ($customer) %>
                               <%foreach from=$customer item=s %>
                              <option value="<%$s->id %>">
                                 <%$s->customer_name %>
                              </option>
                           <%/foreach%>
                           <%/if%>
                       </select>
                 </div>
              </div>
              <div class="col-lg-2">
              <div class="form-group">
              <label for="">Customer Debit Note No</label><span class="text-danger">*</span></label>
              <input type="text" placeholder="Customer Debit Note No" name="customer_debit_note_no" class="form-control">
              </div>
              </div>
              <div class="col-lg-2">
              <div class="form-group">
              <label for="on click url">Customer Debit Note Date
              <span class="text-danger">*</span></label>
              <input max="<%date('Y-m-d')%>" type="date"
                 value="" name="customer_debit_note_date"
                 class="form-control">
              </div>
              </div>
              <div class="col-lg-2">
              <div class="form-group">
              <label for="">Client Sales Invoice No</label></label>
              <input type="text" placeholder="Client Sales Invoice No" name="client_sales_invoice_no" class="form-control">
              </div>
              </div>
              <div class="col-lg-2">
              <div class="form-group">
              <label for="on click url">Client Invoice Date
              </label>
              <input max="<%date('Y-m-d')%>" type="date"
                 value="" name="client_invoice_date"
                 class="form-control">
              </div>
              </div>
              <div class="col-lg-2">
              <div class="form-group">
              <label for="on click url">Debit Basic Amount<span
                 class="text-danger">*</span></label>
              <input type="number" step="any" min="0.00" value="0" name="debit_basic_amt"
                 class="form-control">
              </div>
              </div>
              <div class="col-lg-2">
              <label for="on click url">GST Amount</label>
              <input type="number" step="any" min="0.00" name="debit_gst_amt"
                 class="form-control">
              </div>
              <div class="col-lg-2">
              <div class="form-group">
              <label for="">Enter Remark </label>
              <input type="text" placeholder="Enter Remark" value="" name="remark" class="form-control">
              </div>
              </div>
              <div class="col-lg-2">
              <div class="form-group">
              <label for="">Rejection Reason</label>
              <select name="rejection_reason" id=""
                 class="form-control select2">
              <%if ($reject_remark) %>
                <%foreach from=$reject_remark item=r %>
                   <option value="<%$r->id %>">
                     <%$r->name %>
                   </option>
               <%/foreach%>
              <%/if%>
              </select>
              </div>
              </div>
              <div class="col-lg-2">
              <div class="form-group">
              <button type="submit" class="btn btn-primary mt-4">Generate Request</button>
              </div>
              </form>
              </div>
           </div>
        </div>

        <div class="table-responsive text-nowrap">
          <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped" style="border-collapse: collapse;" border-color="#e1e1e1" id="rejection_invoices">
            <thead>
               <tr>
                  <th>Sr No</th>
                  <th>Rejection Invoice No</th>
                  <th>Customer</th>
                  <th>Customer Debit Note No</th>
                  <th>Customer Debit Note Date</th>
                  <th>Client Sales Invoice No</th>
                  <th>Client Invoice Date</th>
                  <th>Basic Amount</th>
                  <th>GST Amount</th>
                  <th>View Details</th>
               </tr>
            </thead>
            <tbody>
               <%if ($rejection_sales_invoice) %>
                     <%assign var='i' value=1%>
                     <%foreach from=$rejection_sales_invoice item=u %>
                     <tr>
                        <td><%$i %></td>
                        <td><%$u->rejection_invoice_no %></td>
                        <td><%$u->customer_name %></td>
                        <td><%$u->document_number %></td>
                        <td><%$u->debit_note_date %></td>
                        <td><%$u->sales_invoice_number %></td>
                        <td><%$u->client_invoice_date %></td>
                        <td><%$u->debit_basic_amt %></td>
                        <td><%$u->debit_gst_amt %></td>
                        <td>
                           <a title="View Details" href="<%base_url('view_rejection_sales_invoice_by_id/') %><%$u->id %>">
                           <!-- <i class="fa fa-history"> -->
                           <i class="ti ti-eye"></i>
                           </i>
                           </a>
                        </td>
                     </tr>
                   <%assign var='i' value=$i+1%>
                   <%/foreach%>
                <%/if%>
            </tbody>
         </table>
        </div>
      </div>
      <!--/ Responsive Table -->
    </div>
    <!-- /.col -->


    <div class="content-backdrop fade"></div>
  </div>




  <script src="<%$base_url%>public/js/quality/rejection_invoices.js"></script>
