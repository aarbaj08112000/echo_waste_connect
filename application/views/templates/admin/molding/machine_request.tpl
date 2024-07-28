
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
          Production
          <a hijacked="yes" href="javascript:void(0)" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Material Request</em></a>
          </h1>
          <br>
          <span >Material Request</span>
        </div>
      </nav>

      <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
        <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
        <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
        <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
        <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button>
        <button type="button" class="btn btn-seconday" data-bs-toggle="modal"
           data-bs-target="#addPromo">
        <i class="ti ti-plus"></i>
        </button>
      </div>

      <div class="modal fade" id="addPromo" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Machine Request
                     <span style="font-style:normal;color:blue;">
                     <%if ($isMultiClient == "true") %> - <%$this->session->userdata['clientUnitName'] %><%/if%></span>
                  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                  </button>
               </div>
               <div class="modal-body">
                  <div class="form-group">
                     <form action="<%base_url('add_machine_request') %>" method="POST"
                        enctype="multipart/form-data">
                  </div>
                  <div class="form-group">
                  <label for="on click url">Select Operator<span
                     class="text-danger">*</span></label>
                  <select name="operator_id" required id="" class="form-control select2">
                   <%if ($operator) %>
                       <%foreach from=$operator item=c %>
                      <option value="<%$c->id %>"><%$c->name %>
                      </option>
                   <%/foreach%>
                   <%/if%>
                  </select>
                  </div>
                  <div class="form-group">
                  <label for="on click url">Select Machine<span
                     class="text-danger">*</span></label>
                  <select name="machine_id" required id="" class="form-control select2">
                  <%if ($machine) %>
                       <%foreach from=$machine item=c %>
                      <option value="<%$c->id %>">
                      <%$c->name %>
                      </option>
                   <%/foreach%>
                   <%/if%>
                  </select>
                  </div>
                  <div class="form-group">
                  <label for="on click url">Select Customer/Part Number/Part Description<span
                     class="text-danger">*</span></label>
                  <br><span style="font-style:italic;color:blue;">Note: This is list of parts which are defined in BOM</span>
                  <select name="customer_part_id" required class="form-control select2">
                  <option value="">Select</option>
                  <%if ($customer_part) %>
                       <%foreach from=$customer_part item=c %>
                      <option value="<%$c->id %>">
                      <%$c->customer_name %>/<%$c->part_number %>/<%$c->part_description %>
                      </option>
                    <%/foreach%>
                   <%/if%>
                  </select>
                  </div>
               </div>
               <div class="modal-footer">
               <button type="button" class="btn btn-secondary"
                  data-bs-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Save changes</button>
               </form>
               </div>
            </div>
         </div>
      </div>

        <!-- Main content -->
      <div class="card p-0 mt-4">
        <div class="col-sm-2">
           <%if ($showDocRequestDetails=="true") %>
           Format No: STR-F-02 <br>
           Rev.Date : 3/3/2017 <br>
           Rev.No.  : 00
           <%/if%>
        </div>
        <div class="table-responsive text-nowrap">
          <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped" style="border-collapse: collapse;" border-color="#e1e1e1" id="machine_request">
            <thead>
               <tr>
                  <th style="word-wrap;">Request No</th>
                  <th>Machine Mold </th>
                  <th>Operator</th>
                  <th>Customer Part</th>
                  <th>Date & Time</th>
                  <th>Status</th>
                  <th>Details</th>
                  <th>Actions</th>
               </tr>
            </thead>
            <tbody>
               <%if ($machine_request) %>
                    <%assign var='i' value=1 %>
                    <%foreach from=$machine_request item=c %>
                        <%if ($c->req_parts) %>
                          <%assign var='delete' value=false %>
                        <%else %>
                            <%assign var='delete' value=true %>
                        <%/if%>
                   <tr>
                      <td>MR-<%$c->id %></td>
                      <td><%$c->machine_name %></td>
                      <td><%$c->operator_name %></td>
                      <td><%$c->part_number %>/<%$c->part_description %></td>
                      <td><%$c->created_date %>/<%$c->created_time %></td>
                      <td><%$c->status %></td>
                      <td>
                         <a class="text-center"
                            href="<%base_url('machine_request_details/') %><%$c->id %>"><i class="ti ti-eye"></i></a>
                      </td>
                      <td>
                         <%if ($delete == true) %>
                           <button type="button" class="no-btn text-center" data-bs-toggle="modal" data-bs-target="#addPromo<%$i %>">
                           <i class="ti ti-trash"></i>
                           </button>
                         <%/if%>
                         <div class="modal fade" id="addPromo<%$i %>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                               <div class="modal-content">
                                  <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                     </button>
                                  </div>
                                  <div class="modal-body">
                                     <form action="<%base_url('delete') %>" method="POST" enctype="multipart/form-data">
                                        <label for="">Are You Sure Want To Delete This ?</label>
                                        <input type="hidden" value="<%$c->id %>" name="id" class="form-control">
                                        <input type="hidden" value="machine_request" name="table_name" class="form-control">
                                  </div>
                                  <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-danger">Delete </button>
                                  </form>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </td>
                   </tr>
                <%assign var='i' value=$i+1 %>
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




  <script src="<%$base_url%>public/js/production/machine_request.js"></script>
