
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
            <em >Rejection Details
            </em></a>
          </h1>
          <br>
          <span >Rejection Details</span>
        </div>
      </nav>

      <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
        <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
        <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
        <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
        <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button>

        <button type="button" title="Add Rejection" class="btn btn-seconday float-left" data-bs--toggle="modal" data-bs-target="#exampleModal">
          <i class="ti ti-plus"></i>
        </button>
        <%assign var='base_url' value='p_q_molding_production' %>
        <%if ($view_page != 'add' ) %>
        <%assign var='base_url' value='view_p_q_molding_production' %>
        <%/if%>
        <a class="btn btn-seconday" href="<%base_url($base_url) %>"><i class="ti ti-arrow-left"></i> </a>

      </div>

      <div class="modal fade" id="addPromo" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Molding Production Quantity</h5>
            <button type="button" class="btn-close" data-bs--dismiss="modal" aria-label="Close">

            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <form
              action="<%base_url('add_production_qty_molding_production') %>"
              method="POST" enctype="multipart/form-data">
            </div>
            <div class="form-group">
              <label for="on click url">Customer Name / Part Number / Part Description<span
                class="text-danger">*</span></label>
                <select required name="customer_part_id" id="" class="form-control select2">
                  <option value="">Select</option>
                  <%if ($customer_part_new) %>
                  <%foreach from=$customer_part_new item=s %>
                  <option value="<%$s->id %>">
                    <%$s->customer_name %> / <%$s->part_number %> / <%$s->part_description %>
                  </option>
                  <%/foreach%>
                  <%/if%>
                </select>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="on click url">Machine<span
                      class="text-danger">*</span></label>
                      <select required name="machine_id" id="" class="form-control select2">
                        <option value="">Select</option>
                        <%if ($machine) %>
                        <%foreach from=$machine item=s %>
                        <option value="<%$s->id %>"><%$s->name %></option>
                        <%/foreach%>
                        <%/if%>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="on click url">Select Customer Part / Mold Name / Cavity<span class="text-danger">*</span></label>
                      <select required name="mold_id" id="" class="form-control select2">
                        <%if ($mold_maintenance) %>
                        <%foreach from=$mold_maintenance item=s %>
                        <option value="<%$s->id %>">
                          <%$s->part_number %>/<%$s->part_description %>/<%$s->mold_name %>/<%$s->no_of_cavity %>
                        </option>
                        <%/foreach%>
                        <%/if%>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="on click url">Date
                        <span class="text-danger">*</span></label>
                        <input max="<%date('Y-m-d') %>" type="date"
                        value="<%date('Y-m-d') %>" name="date" required
                        class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label required for="on click url">Shift Type / Name / Start Time /
                          End Time<span class="text-danger">*</span></label>
                          <select name="shift_id" name="" id="" class="form-control select2">
                            <option value="">Select</option>
                            <%if ($shifts) %>
                            <%foreach from=$shifts item=s %>
                            <option value="<%$s->id %>">
                              <%$s->shift_type %> / <%$s->name %> / <%$s->start_time %> / <%$s->end_time %>
                            </option>
                            <%/foreach%>
                            <%/if%>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="on click url">Production OK Quantity<span
                            class="text-danger">*</span></label>
                            <input type="number" min="1" value="0" name="qty" required
                            class="form-control">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="on click url">Production Rejection<span
                              class="text-danger">*</span></label>
                              <input type="number" min="0" value="0" name="rejection_qty" required
                              class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label for="on click url">Production Minutes<span
                                class="text-danger">*</span></label>
                                <input type="number" step="any" name="production_hours" required
                                class="form-control">
                              </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="form-group">
                                <label for="on click url">Downtime in min <span
                                  class="text-danger">*</span></label>
                                  <input type="number" step="any" name="downtime_in_min" required
                                  class="form-control">
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label for="on click url">Setup in min <span
                                    class="text-danger">*</span></label>
                                    <input type="number" step="any" name="setup_time_in_min" required
                                    class="form-control">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-lg-4">
                                  <div class="form-group">
                                    <label for="on click url">Finish Part Weight <span
                                      class="text-danger">*</span></label>
                                      <input type="number" step="any" name="finish_part_weight" required
                                      class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label for="on click url">Runner Weight <span
                                        class="text-danger">*</span></label>
                                        <input type="number" step="any" name="runner_weight" required
                                        class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-lg-4">
                                      <div class="form-group">
                                        <label for="on click url">Wastage / Gattha / Lumps (Kg)<span
                                          class="text-danger">*</span></label>
                                          <input type="number" step="any" name="wastage" required
                                          class="form-control">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                          <label for="on click url">Cycle Time Per Shot (sec) <span
                                            class="text-danger">*</span></label>
                                            <input type="number" step="any" name="cycle_time" required
                                            class="form-control">
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <label for="on click url">Operator<span
                                              class="text-danger">*</span></label>
                                              <select required name="operator_id" id="" class="form-control select2">
                                                <option value="">Select</option>
                                                <%if ($operator) %>
                                                <%foreach from=$operator item=s %>
                                                <option value="<%$s->id %>"><%$s->name %></option>
                                                <%/foreach%>
                                                <%/if%>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label for="on click url">Remark</label>
                                          <input type="text" name="remark" class="form-control">
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
                                <div class="row">
                                  <div class="col-lg-3">
                                    <div class="form-group">
                                      <label for="po_num">Customer Name</label>
                                      <input type="text" readonly value="<%$customer_part_details[0]->customer_name %>" required class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-lg-2">
                                    <div class="form-group">
                                      <label for="po_num">Part Number</label>
                                      <input type="text" readonly value="<%$customer_part_details[0]->part_number %>" required class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-lg-2">
                                    <div class="form-group">
                                      <label for="po_num">Part Description</label>
                                      <input type="text" readonly value="<%$customer_part_details[0]->part_description %>" required class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-lg-2">
                                    <div class="form-group">
                                      <label for="date">Date</label>
                                      <input type="text" readonly value="<%$molding_prod_details[0]->date %>" required class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-lg-1">
                                    <div class="form-group">
                                      <label for="po_num">Shift</label><br>
                                      <label for="po_num">

                                        <%$molding_prod_details[0]->shift_type %>/<%$molding_prod_details[0]->shift_name %>
                                      </div>
                                    </div>
                                    <div class="col-lg-2">
                                      <div class="form-group">
                                        <label for="po_num">Machine</label>
                                        <input type="text" readonly value="<%$molding_prod_details[0]->name %>" required class="form-control">
                                      </div>
                                    </div>

                                  </div>
                                  <div class="table-responsive text-nowrap">
                                    <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped" style="border-collapse: collapse;" border-color="#e1e1e1" id="rejection_details">
                                      <thead>
                                        <tr>
                                          <th>Sr. No.</th>
                                          <th>Rejection Reason</th>
                                          <th>Rejection Quantity</th>
                                          <th>Cavity</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <%assign var='i' value=1 %>
                                        <%if ($rejection_details) %>
                                        <%foreach from=$rejection_details item=r %>
                                        <tr>
                                          <td><%$i %></td>
                                          <td><%$r->name %></td>
                                          <td><%$r->rejection_qty %></td>
                                          <td><%$r->cavity %></td>
                                          <td>
                                            <button type="submit" data-bs-toggle="modal" class="btn btn-sm btn-primary" data-bs-target="#exampleModal2<%$i %>"> <i class="fas fa-edit"></i></button>
                                            <div class="modal fade" id="exampleModal2<%$i %>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Rejection</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cancel">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    <form action="<%base_url('update_rejection_details') %>" method="POST">
                                                      <div class="form-group">
                                                        <label for="">Rejection Reason<span
                                                          class="text-danger">*</span></label>
                                                          <select name="rejection_reason" id=""
                                                          class="form-control select2" required>
                                                          <%foreach from=$reject_remark item=rr %>
                                                          <option
                                                          value="<%$rr->id %>"
                                                          <%if ($r->rejection_reasonKy == $rr->id)
                                                          %>selected <%/if%> >
                                                          <%$rr->name %>
                                                        </option>
                                                        <%/foreach%>
                                                      </select>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="">Rejection Qty<span
                                                        class="text-danger">*</span></label>
                                                        <input type="text"
                                                        name="rejection_qty"
                                                        required
                                                        value="<%$r->rejection_qty %>"
                                                        class="form-control">
                                                        <input type="hidden"
                                                        readonly class="form-control"
                                                        name="molding_production_id"
                                                        value="<%$molding_production_id %>">
                                                        <input type="hidden"
                                                        readonly class="form-control"
                                                        name="id"
                                                        value="<%$r->id %>">
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="">Cavity</label>
                                                        <input type="text"
                                                        name="cavity"
                                                        value="<%$r->cavity %>"
                                                        class="form-control">
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                      </div>
                                                    </form>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <button type="submit" data-bs-toggle="modal" class="btn btn-sm btn-danger ml-4" data-bs-target="#exampleModal3<%$i %>"> <i class="far fa-trash-alt"></i></button>
                                            <!-- Button trigger modal -->
                                            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Launch demo modal
                                          </button> -->
                                          <!-- Modal -->
                                          <div class="modal fade" id="exampleModal3<%$i %>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cancel">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <form action="<%base_url('delete') %>" method="POST">
                                                  <div class="modal-body">
                                                    <input value="<%$r->id %>" name="id" type="hidden" required class="form-control">
                                                    <input value="mold_production_rejection_details" name="table_name" type="hidden" required class="form-control">
                                                    Are you sure you want to delete
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-danger">Delete </button>
                                                  </div>
                                                </form>
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

                          <script src="<%$base_url%>public/js/production/rejection_details.js"></script>
