   <div class="content-wrapper" >
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
                  <span class="hide-menu">Date</span>
                  <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
               </li>
               <li class="sidebar-item">
                  <div class="input-group">
                     <input type="text" id="date_range_filter" class="form-control" placeholder="Name">
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
            <em >Molding Production
            </em></a>
         </h1>
         <br>
         <span >Molding Production View</span>
      </div>
   </nav>
   <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
   <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
   <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
   <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
   <button class="btn btn-seconday reset-filter" type="button"><i class="ti ti-refresh "></i></button>
   
   
</div>
<div class="w-100">
<input type="text" name="reason" placeholder="Filter Search" class="form-control serarch-filter-input m-3 me-0" id="serarch-filter-input" fdprocessedid="bxkoib">
</div>
      <div class="card p-0 mt-4 w-100">
         <div class="table-responsive text-nowrap">
         <table id="p_q_molding_production_view" width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped" style="border-collapse: collapse;" border-color="#e1e1e1">
         <thead>
            <tr>
               <th>Job Order No</th>
               <th>Part Number / Descriptions </th>
               <th>Date</th>
               <th>Shift</th>
               <th>Machine</th>
               <th>Operator</th>
               <th>Target Production Qty</th>
               <th>Production Ok Qty</th>
               <th>Production Rejection Qty</th>
               <th>Accepted Qty by Quality</th>
               <th>Rejected Qty by Quality</th>
               <th>Onhold Qty</th>
               <th style="word-wrap: break-word;">Wastage / Gattha / Lumps (Kg)</th>
               <th>Status</th>
               <th>Production Minutes</th>
               <th>Downtime In Min</th>
               <!-- <th>Downtime Reason</th> -->
               <th>Setup Time In Min</th>
               <th>Cycle Time In Sec</th>
               <th>Target Prod WT</th>
               <th>Target Runner WT</th>
               <th>Finish Part Weight (gram)</th>
               <th>Runner Weight (gram)</th>
               <!-- <th>Shift Target Qty</th> AROM-105 -->
               <th>Production Efficiency</th>
               <th>Quality Efficiency</th>
               <th>PPM</th>
               <th>OEE</th>
               <!-- <th>Remark</th> -->
               <!-- <th>Accept Reject</th> -->
               <th>Rejection Details</th>
               <th>Downtime Details</th>
               <th>Actions</th>
            </tr>
         </thead>
         <tbody>
            <%if ($molding_production) %>
               <%assign var='i' value=1 %>
                  <%foreach from=$molding_production item=u %>
                     <%assign var='total_pde' value="0" %>
                     <%if $u->production_target_per_shift > 0 %>
                     <%assign var='total_pde' value= (
                        ($u->accepted_qty / $u->production_hours * $u->name) 
                        / $u->production_target_per_shift * 100) * 100 %>
                     <%/if%>
                     
                     <%assign var='total_qe' value=($u->accepted_qty / $u->qty) * 100 %>
                     <%assign var='total_ppm' value=(($u->rejection_qty+$u->rejected_qty)/ $u->qty) * 1000000 %>
                       
                     <%assign var='planned_pt'  value=($u->production_hours - $u->ppt) %>
                     <%assign var='runtime' value=$planned_pt - ($downtime_in_min  + $setup_time_in_min) %>
                     <%assign var='availbility' value=$runtime / $planned_pt %>
                     <%assign var='total_prod_qty' value=$u->rejection_qty + $u->qty %>
                     <%assign var='performance' value= ($u->cycle_time * $total_prod_qty ) / ($runtime * 60) %>
                     <%assign var='quality' value=$u->accepted_qty / $total_prod_qty %>
               
                     <%assign var='total_oee' value=$availbility * $performance * $quality * 100 %>
                     <%assign var='target_production_qty' value=0 %>
                     <%if $u->cycle_time > 0 %>
                     <%assign var='target_production_qty' value= ($u->production_hours * 60)/$u->cycle_time %>
                     <%/if%>
                     <%assign var='target_prod_wt' value=$u->finish_part_weight  * $u->qty %>
                     <%assign var='target_runner_wt' value=$u->runner_weight * $u->qty %>
                  <tr>
                     <td>JO-<%$u->id %></td>
                     <td><%$u->part_number %> /
                        <%$u->part_description %>
                     </td>
                     <td><%$u->date %></td>
                     <td><%$u->shift_type %>/<%$u->name %></td>
                     <td><%$u->machine_name %></td>
                     <td><%$u->operator_name %></td>
                     <td><%round($target_production_qty,2) %></td>
                     <td><%$u->qty %></td>
                     <td><%$u->rejection_qty %></td>
                     <td><%$u->accepted_qty %></td>
                     <td><%$u->rejected_qty %></td>
                     <td>
                        <%if (!empty($u->onhold_qty)) %>
                        <button type="button" class="btn btn-warning float-left "
                           data-toggle="modal" data-target="#onhold<%$i %>">
                        <%$u->onhold_qty %> </button>
                        <%else %>
                           0
                        <%/if%>
                        <div class="modal fade" id="onhold<%$i %>" tabindex="-1"
                           role="dialog" aria-labelledby="exampleModalLabel"
                           aria-hidden="true">
                           <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                       Onhold
                                       Update 
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                       aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                                 <div class="modal-body">
                                    <form
                                       action="<%base_url('update_p_q_onhold_molding') %>"
                                       method="POST" enctype='multipart/form-data' >
                                       <div class="row">
                                          <div class="col-lg-12">
                                             <div class="form-group">
                                                <label for="">Qty</label>
                                                <input type="text"
                                                   value="<%$u->onhold_qty %>"
                                                   readonly class="form-control">
                                             </div>
                                          </div>
                                          <div class="col-lg-12">
                                             <div class="form-group">
                                                <label for="">Accept Qty <span
                                                   class="text-danger">*</span>
                                                </label>
                                                <input type="number" step="any" value=""
                                                   max="<%$u->onhold_qty %>"
                                                   min="0" class="form-control"
                                                   name="accepted_qty"
                                                   placeholder="Enter Accepted Quantity"
                                                   required>
                                             </div>
                                          </div>
                                          <div class="col-lg-12">
                                             <div class="form-group">
                                                <label for="">Rejection
                                                Reason</label>
                                                <select name="rejection_reason" id=""
                                                   class="form-control select2">
                                                   <option value="NA">NA</option>
                                                   <%if ($reject_remark) %>
                                                      <%foreach from=$reject_remark item=r %>
                                                         <option
                                                            value="<%$r->name %>">
                                                            <%$r->name %>
                                                         </option>
                                                      <%/foreach%>
                                                   <%/if%>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-lg-12">
                                             <div class="form-group">
                                                <label for="">Reject Remark</label>
                                                <input type="text"
                                                   placeholder="Enter Rejection Remark If any"
                                                   class="form-control"
                                                   name="rejection_remark">
                                                <input type="hidden"
                                                   placeholder="Enter Rejection Remark If any"
                                                   readonly class="form-control"
                                                   name="id"
                                                   value="<%$u->id %>">
                                                <input type="hidden"
                                                   placeholder="Enter Rejection Remark If any"
                                                   readonly class="form-control"
                                                   name="qty"
                                                   value="<%$u->onhold_qty %>">
                                                <input type="hidden"
                                                   placeholder="Enter Rejection Remark If any"
                                                   readonly class="form-control"
                                                   name="output_part_id"
                                                   value="<%$u->output_part_id %>">
                                                <input type="hidden"
                                                   placeholder="Enter Rejection Remark If any"
                                                   readonly class="form-control"
                                                   name="accepted_qty_old"
                                                   value="<%$u->accepted_qty %>">
                                                <input type="hidden"
                                                   placeholder="Enter Rejection Remark If any"
                                                   readonly class="form-control"
                                                   name="rejected_qty_old"
                                                   value="<%$u->rejected_qty %>">
                                                <input type="text"
                                                   placeholder="Enter Rejection Remark If any"
                                                   readonly class="form-control"
                                                   name="customer_part_id"
                                                   value="<%$u->customer_part_id %>">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary"
                                             data-dismiss="modal">Close</button>
                                          <button type="submit"
                                             class="btn btn-primary">Save
                                          changes</button>
                                       </div>
                                 </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </td>
                     <td><%$u->wastage %></td>
                     <td><%$u->status %></td>
                     <td><%$u->production_hours %></td>
                     <td><%$u->downtime_in_min %></td>
                     <td><%$u->setup_time_in_min %></td>
                     <td><%$u->cycle_time %></td>
                     <td><%$target_prod_wt %></td>
                     <td><%$target_runner_wt %></td>
                     <td><%$u->finish_part_weight %></td>
                     <td><%$u->runner_weight %></td>
                     <td><%round($total_pde,2) %></td>
                     <td><%round($total_qe,2) %></td>
                     <td><%round($total_ppm,2) %></td>
                     <td><%round($total_oee,2) %></td>
                     <td>
                        <a class="btn btn-primary" href="<%base_url('view_rejection_details/')%><%$u->id %>/<%$u->customer_part_id %>/view">
                        <i class='far fa-edit'></i>
                        </a>
                     </td>
                     <td>
                        <a class="btn btn-primary" href="<%base_url('view_downtime_details/')%><%$u->id%>/<%$u->customer_part_id %>/view">
                        <i class='far fa-edit'></i>
                        </a>
                     </td>
                     <td>
                        <%if ($u->status == "pending") %>
                        <button type="button" class="btn btn-danger float-left "
                           data-toggle="modal" data-target="#acceptReject<%$i %>">
                        Accept/Reject </button>
                        <%else %>
                           Completed
                        <%/if%>
                        <div class="modal fade" id="acceptReject<%$i %>" tabindex="-1"
                           role="dialog" aria-labelledby="exampleModalLabel"
                           aria-hidden="true">
                           <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add </h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                       aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                                 <div class="modal-body">
                                    <form
                                       action="<%base_url('update_p_q_molding_production') %>"
                                       method="POST" enctype='multipart/form-data' s>
                                       <div class="row">
                                          <div class="col-lg-12">
                                             <div class="form-group">
                                                <label for="">Date</label>
                                                <input type="text"
                                                   value="<%$u->date %>"
                                                   readonly class="form-control">
                                             </div>
                                          </div>
                                          <div class="col-lg-12">
                                             <div class="form-group">
                                                <label for="">Shift</label>
                                                <br>
                                                <span><%$u->shift_type %>/<%$u->name %></span>
                                             </div>
                                          </div>
                                          <div class="col-lg-12">
                                             <div class="form-group">
                                                <label for="">Qty</label>
                                                <input type="text"
                                                   value="<%$u->qty %>"
                                                   readonly class="form-control">
                                             </div>
                                          </div>
                                          <div class="col-lg-12">
                                             <div class="form-group">
                                                <label for="on click url">Enter Semi
                                                Finished location QTY<span
                                                   class="text-danger">*</span></label>
                                                <input type="number" min="0" value="0"
                                                   max="" name="semi_finished_location"
                                                   required class="form-control">
                                             </div>
                                          </div>
                                          <div class="col-lg-12">
                                             <div class="form-group">
                                                <label for="on click url">Enter Final
                                                Inspection Qty<span
                                                   class="text-danger">*</span></label>
                                                <input type="number" min="0" value="0"
                                                   max=""
                                                   name="final_inspection_location"
                                                   required class="form-control">
                                             </div>
                                          </div>
                                          <div class="col-lg-12">
                                             <div class="form-group">
                                                <label for="">Onhold Qty <span
                                                   class="text-danger">*</span>
                                                </label>
                                                <input type="number" step="any" value=""
                                                   max="<%$u->qty %>" min="0"
                                                   class="form-control"
                                                   name="onhold_qty"
                                                   placeholder="Enter onhold" required>
                                             </div>
                                          </div>
                                          <div class="col-lg-12">
                                             <div class="form-group">
                                                <label for="">Rejection Reason</label>
                                                <select name="rejection_reason" id=""
                                                   class="form-control select2">
                                                   <option value="NA">NA</option>
                                                   <%if ($reject_remark) %>
                                                      
                                                      <%foreach from=$reject_remark item=r %>
                                                      <option
                                                         value="<%$r->name %>">
                                                         <%$r->name %>
                                                      </option>
                                                      <%/foreach%>
                                                   <%/if%>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-lg-12">
                                             <div class="form-group">
                                                <label for="">Reject Remark</label>
                                                <input type="text"
                                                   placeholder="Enter Rejection Remark If any"
                                                   class="form-control"
                                                   name="rejection_remark">
                                                <input type="hidden"
                                                   placeholder="Enter Rejection Remark If any"
                                                   readonly class="form-control"
                                                   name="id"
                                                   value="<%$u->id %>">
                                                <input type="hidden"
                                                   placeholder="Enter Rejection Remark If any"
                                                   readonly class="form-control"
                                                   name="qty"
                                                   value="<%$u->qty %>">
                                                <input type="hidden"
                                                   placeholder="Enter Rejection Remark If any"
                                                   readonly class="form-control"
                                                   name="customer_part_id"
                                                   value="<%$u->customer_part_id %>">
                                                <input type="hidden"
                                                   placeholder="Enter Rejection Remark If any"
                                                   readonly class="form-control"
                                                   name="accepted_qty_old"
                                                   value="<%$u->accepted_qty %>">
                                                <input type="hidden"
                                                   placeholder="Enter Rejection Remark If any"
                                                   readonly class="form-control"
                                                   name="rejected_qty_old"
                                                   value="<%$u->rejected_qty %>">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary"
                                             data-dismiss="modal">Close</button>
                                          <button type="submit"
                                             class="btn btn-primary">Save
                                          changes</button>
                                       </div>
                                 </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </td>
                     <!-- <td></td> -->
                  </tr>
                  <%assign var='i' value=$i+1 %>
                  <%/foreach%>
            <%/if%>
         </tbody>
      </table>
         </div>
      </div>
   </div>
   <!-- /.row -->
   <!-- Main row -->
   <!-- /.row (main row) -->
</div>
<!-- /.container-fluid -->

<!-- /.content -->
</div>
<script type="text/javascript">
    var base_url = <%$base_url|@json_encode%>;
    var start_date = <%$start_date|@json_encode%>;
    var end_date = <%$end_date|@json_encode%>;
  </script>
<script src="<%$base_url%>public/js/production/p_q_molding_production_view.js"></script>