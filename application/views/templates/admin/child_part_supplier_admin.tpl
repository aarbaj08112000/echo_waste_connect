
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
          Admin
          <a hijacked="yes" href="javascript:void(0)" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Item part List</em></a>
          </h1>
          <br>
          <span >Supplier Part Price</span>
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
        <div class="table-responsive text-nowrap">
          <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped" style="border-collapse: collapse;" border-color="#e1e1e1" id="child_part_supplier_admin">
            <thead>
               <tr>
                  <th>Sr. No.</th>
                  <th>Action</th>
                  <th>Revision Number</th>
                  <th>Revision Remark</th>
                  <th>Revision Date</th>
                  <th>Part Number</th>
                  <th>Part Description</th>
                  <th>Tax Structure</th>
                  <th>With In State</th>
                  <th>Supplier</th>
                  <th>Part Price</th>
                  <th>Quotation Document </th>
               </tr>
            </thead>
            <tbody>
               <%assign var='i' value=1 %>
                 <%if ($child_part_list)  %>
                     <%foreach from=$child_part_list item=poo %>
                     <%assign var='po' value=$poo->po %>
                         <%if ($po[0]->admin_approve == "no") %>
                           <%assign var='supplier_data' value=$poo->supplier_data %>
                           <%assign var='uom_data' value=$poo->uom_data %>
                             <%assign var='gst_structure2' value=$poo->gst_structure2 %>
                     <tr>
                         <td><%$i %></td>
                         <td>
                             <button type="submit" data-bs-toggle="modal" class="btn no-btn btn-primary" data-bs-target="#exampleModaledit2<%$i %>"> <i class="ti ti-edit"></i></button>
                             <div class="modal fade" id="exampleModaledit2<%$i %>" tabindex=" -1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                   <div class="modal-content">
                                      <div class="modal-header">
                                         <h5 class="modal-title" id="exampleModalLabel">Approve Price </h5>
                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                                         </button>
                                      </div>
                                      <div class="modal-body">
                                         <form action="<%base_url('updatechildpart_supplier_admin') %>" method="POST" enctype='multipart/form-data'>
                                            <div class="row">
                                               <div class="col-lg-12">
                                                  <input value="<%$po[0]->id %>" type="hidden" name="id" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">
                                                  <div class="form-group">
                                                     <label for="po_num">Are You Sure Want to Approve this Price ? </label><span class="text-danger">*</span>
                                                  </div>
                                                  <div class="form-group">
                                                     <label for="po_num">Part Number </label><span class="text-danger">*</span>
                                                     <input type="text" value="<%$po[0]->part_number  %>" name="upart_number" readonly class="form-control" placeholder="Enter Part Number.">
                                                  </div>
                                                  <div class="form-group">
                                                     <label for="po_num">Part Price </label><span class="text-danger">*</span>
                                                     <input type="text" value="<%$po[0]->part_rate  %>" name="upart_desc"  required class="form-control" id="exampleInputEmail1">
                                                     <input type="hidden" value="<%$po[0]->id  %>" name="id"  required class="form-control" id="exampleInputEmail1" >
                                                  </div>
                                               </div>
                                            </div>
                                      </div>
                                      <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Save changes</button>
                                      </div>
                                      </form>
                                   </div>
                                </div>
                             </div>
                    </div>
                    </td>
                    <td><%$po[0]->revision_no %></td>
                    <td><%$po[0]->revision_remark %></td>
                    <td><%$po[0]->revision_date %></td>
                    <td><%$po[0]->part_number %></td>
                    <td><%$po[0]->part_description %></td>
                    <td><%$gst_structure2[0]->code %></td>
                    <td><%$supplier_data[0]->with_in_state %></td>
                    <td><%$supplier_data[0]->supplier_name %></td>
                    <td><%$po[0]->part_rate %></td>
                    <td>
                    <%if (!empty($po[0]->quotation_document)) %>
                     <a href="<%base_url('documents/') %><%$po[0]->quotation_document %>" download>Download </a>
                    <%/if%>
                    </td>
               </tr>
                 <%assign var='i' value=$i+1 %>
                 <%/if%>
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


  <script type="text/javascript">
  var base_url = <%$base_url|@json_encode%>
  </script>

  <script src="<%$base_url%>public/js/admin/child_part_supplier_admin.js"></script>
