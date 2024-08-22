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
          Store
          <a hijacked="yes" href="javascript:void(0)" class="backlisting-link"  >
            <i class="ti ti-chevrons-right" ></i>
            <em >Stocks</em></a>
          </h1>
          <br>
          <span >FG Stocks</span>
        </div>
      </nav>
      <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4> -->

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
            <div class="col-lg-3">
              <form action="<%base_url('fw_stock') %>" method="post">
                <div class="form-group">
                  <label for="">Select Part <span class="text-danger">*</span></label>
                  <select class="form-control select2" name="part_id">
                    <%if ($customer_parts) %>
                    <%foreach from=$customer_parts item=c %>
                    <option <%if $part_id ==$c->id %>selected<%/if%> value="<%$c->id %>"><%$c->part_number %></option>
                    <%/foreach%>
                    <%/if%>
                  </select>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group mt-4">
                  <button type="submit" class="btn btn-danger mt-1">
                    Search
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="table-responsive text-nowrap">
          <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped" style="border-collapse: collapse;" border-color="#e1e1e1" id="fg_stock_tbl">
            <thead>
              <tr>
                <th>Sr. No.</th>
                <th>Part Number</th>
                <th>Part Description</th>
                <th>Stock</th>
                <th>Molding Production Qty</th>
                <th>Production Rejection</th>
                <th>Production Scrap</th>
                <!--<th>Semi Finished Location</th>
                <th>Deflashing Assembly</th> -->
                <th>Final Inspection Location</th>
                <th>Transfer To Inhouse Part</th>
              </tr>
            </thead>
            <tbody>
              <%assign var='i' value=1 %>
              <%if ($customer_parts_master) %>
              <%foreach from=$customer_parts_master item=po %>
              <tr>
                <td><%$i %></td>
                <td><%$po->part_number %></td>
                <td><%$po->part_description %></td>
                <td><%$po->fg_stock %></td>
                <td><%$po->molding_production_qty %></td>
                <td><%$po->production_rejection %></td>
                <td><%$po->production_scrap %></td>
                <td><%$po->final_inspection_location %></td>
                <td>
                  <%if ($po->fg_stock > 0) %>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fgtransfer222<%$i %>">
                    Transfer To Inhouse
                  </button>
                  <%else %>
                  <%$po->fg_stock %>
                  <%/if%>
                  <div class="modal fade" id="fgtransfer222<%$i %>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">
                            Transfer FG Stock to Inhouse Production Stock
                          </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-lg-12">
                              <form action="javascript:void(0)" class="custom-form fg_stock_form" method="POST" enctype="multipart/form-data">
                                <label for="">Enter Stock Qty <span class="text-danger">*</span>
                                </label>
                                <input type="number" step="any" class="form-control required-input" value="" max="<%$po->stock %>" name="stock" placeholder="Enter Transfer Qty">
                                <input type="hidden" class="form-control" value="<%$po->part_number %>" name="part_number" required placeholder="Enter Transfer Qty">
                                <input type="hidden" class="form-control" value="<%$po->id %>" name="customer_parts_master_id" required placeholder="Enter Transfer Qty">
                              </div>
                              <div class="col-lg-12 mb-3">
                                <label for="">Select Inhouse Part Number <span class="text-danger">*</span>
                                </label>
                                <select name="inhouse_part_number"  class="form-control required-input">
                                  <option value="">Select Inhouse Part Number</option>
                                  <%if ($inhouse_parts) %>
                                  <%foreach from=$inhouse_parts item=tt %>
                                  <option value="<%$tt->part_number %>">
                                    <%$tt->part_number %></option>
                                    <%/foreach%>
                                    <%/if%>
                                  </select>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss=" modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>
                              </div>
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
      <script type="text/javascript">
      var base_url = <%$base_url|@json_encode%>
      </script>
      <script src="<%$base_url%>public/js/store/fw_stock.js"></script>
