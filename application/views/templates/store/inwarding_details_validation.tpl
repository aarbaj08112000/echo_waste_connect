<%assign var='isMultiClient' value=$session_data['isMultipleClientUnits']%>
<div  class="wrapper">
<!-- Navbar -->
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Validation Details </h1>
         </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="<%base_url('generate_po') %>">Home</a></li>
               <li class="breadcrumb-item active"></li>
            </ol>
         </div>
      </div>
   </div>
   <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <!-- /.card -->
            <div class="card">
               <div class="card-header">
                  <div class="row">
                     <div class="col-lg-1">
                        <div class="form-group">
                           <a class="btn btn-dark" href="<%base_url('grn_validation') %>">
                           < Back</a>
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="form-group">
                           <label for="">GRN Number <span class="text-danger">*</span> </label>
                           <input type="text" readonly
                              value="<%$inwarding_data[0]->grn_number %>"
                              class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-2">
                        <div class="form-group">
                           <label for="">PO Number</label>
                           <input type="text" readonly value="<%$new_po[0]->po_number %>"
                              class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-1">
                        <div class="form-group">
                           <label for="">PO Date</label>
                           <input type="text" readonly value="<%$new_po[0]->po_date %>"
                              class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-1">
                        <div class="form-group">
                           <label for="">PO Status</label>
                           <input type="text" readonly value="<%if ($new_po[0]->status == 'accpet') %>Released <%else %><%$new_po[0]->status %><%/if%>" class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="form-group">
                           <label for="">Supplier Name</label>
                           <input type="text" readonly
                              value="<%$supplier[0]->supplier_name %>" class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-1">
                        <div class="form-group">
                           <label for="">Supplier No</label>
                           <input type="text" readonly
                              value="<%$supplier[0]->supplier_number %>"
                              class="form-control">
                        </div>
                     </div>
                     <div>
                        <div class="row">
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <label for="">Supplier GST</label>
                                 <input type="text" readonly value="<%$supplier[0]->gst_number %>"
                                    class="form-control">
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <label for="">Inwarding Status</label>
                                 <input type="text" readonly
                                    value="<%$inwarding_data[0]->status %>" class="form-control">
                              </div>
                           </div>
                           <%if ($isMultiClient == "true") %>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <label for="">Delivery Location</label>
                                 <input type="text" readonly
                                    value="<%$inwarding_data[0]->delivery_unit %>"
                                    class="form-control">
                              </div>
                           </div>
                           <%/if%>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <label for="">Invoice Amount</label>
                                 <input type="text" readonly
                                    value="<%$inwarding_data[0]->invoice_amount %>"
                                    class="form-control">
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="">Invoice Amount Validation Status <span
                                    class="text-danger">*</span> </label>
                                 <input type="text" readonly value="<%$status %>"
                                    class="form-control">
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg " role="document">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Accept This
                                                Inwarding 
                                             </h5>
                                             <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                             </button>
                                          </div>
                                          <div class="modal-body">
                                             <form
                                                action="<%base_url('accept_inwarding_data') %>"
                                                method="POST">
                                                <div class="row">
                                                   <div class="col-lg-12">
                                                      <div class="form-group">
                                                         <label> Are You Sure Want To Accept This
                                                         Inwarding ? This Data can't be changed
                                                         once it's Submit</label><span
                                                            class="text-danger">*</span>
                                                         <input type="hidden" name="inwarding_id"
                                                            value="<%$inwarding_id %>"
                                                            class="form-control">
                                                         <input type="hidden" name="invoice_number"
                                                            value="<%$invoice_number %>"
                                                            class="form-control">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="modal-footer">
                                                   <button type="button" class="btn btn-secondary"
                                                      data-dismiss="modal">Close</button>
                                                   <button type="submit" class="btn btn-primary">Save
                                                   changes</button>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="modal fade" id="exampleModalmatch" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg " role="document">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Match Price
                                             </h5>
                                             <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                             </button>
                                          </div>
                                          <div class="modal-body">
                                             <form
                                                action="<%base_url('validate_invoice_amount') %>"
                                                method="POST">
                                                <div class="row">
                                                   <div class="col-lg-12">
                                                      <div class="form-group">
                                                         <label> Invoice Amount </label><span
                                                            class="text-danger">*</span>
                                                         <input type="number" name="invoice_amount"
                                                            placeholder="Invoice Amount"
                                                            value="" class="form-control">
                                                         <input type="hidden" name="inwarding_id"
                                                            value="<%$inwarding_id %>"
                                                            class="form-control">
                                                         <input type="hidden" name="actual_price"
                                                            value="<%$actual_price %>"
                                                            class="form-control">
                                                         <input type="hidden" name="actual_price"
                                                            value="<%$status %>"
                                                            class="form-control">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="modal-footer">
                                                   <button type="button" class="btn btn-secondary"
                                                      data-dismiss="modal">Close</button>
                                                   <button type="submit" class="btn btn-primary">Save
                                                   changes</button>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="modal fade" id="exampleModalgenerate" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog " role="document">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Validate GRN
                                             </h5>
                                             <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                             </button>
                                          </div>
                                          <div class="modal-body">
                                             <form
                                                action="<%base_url('update_status_grn_inwarding') %>"
                                                method="POST">
                                                <div class="row">
                                                   <div class="col-lg-12">
                                                      <div class="form-group">
                                                         <label> Are You Sure Want To Validate GRN ?
                                                         </label>
                                                         <input type="hidden" name="status"
                                                            placeholder="" value="validate_grn"
                                                            class="form-control">
                                                         <input type="hidden" name="inwarding_id"
                                                            value="<%$inwarding_id %>"
                                                            class="form-control">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="modal-footer">
                                                   <button type="button" class="btn btn-secondary"
                                                      data-dismiss="modal">Close</button>
                                                   <button type="submit" class="btn btn-primary">Save
                                                   changes</button>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card-body">
                        <table class="table table-bordered table-striped" id="example1">
                           <thead>
                              <tr>
                                 <th>Sr No</th>
                                 <th>Part Number</th>
                                 <th>Part Description</th>
                                 <!-- <th>Tax Strucutre Code</th> -->
                                 <th>UOM</th>
                                 <!-- <th>Delivery Date</th> -->
                                 <!-- <th>Expiry Date</th> -->
                                 <th>PO QTY</th>
                                 <th>Balance QTY</th>
                                 <th>Price</th>
                                 <th>Inwarding Qty</th>
                                 <th>GRN Validation Qty</th>
                                 <th>Submit </th>
                                 <th>MDR</th>
                              </tr>
                           </thead>
                           <tbody>
                              <%assign var="i" value=1%>
                              <%assign var="j" value=1%>
                              <%if ($po_parts) %>
                              <%assign var="final_po_amount" value=0%>
                              <%foreach from=$po_parts item=p %>
                              <%assign var="child_part" value=$p->child_part%>
                              <%assign var="child_part_data" value=$p->child_part_data%>
                              <%assign var="uom_data" value=$p->uom_data%>
                              <%assign var="part_rate_new" value=0%>
                              <%if (empty($p->rate)) %>
                              <%assign var="part_rate_new" value=$child_part_data[0]->part_rate%>
                              <%else %>
                              <%assign var="part_rate_new" value=$p->rate%>
                              <%/if%>
                              <%assign var="total_rate" value=$part_rate_new * $p->qty%>
                              <%assign var="final_po_amount" value=$final_po_amount + $total_rate%>
                              <%assign var="grn_details_data" value=$p->grn_details_data%>
                              <%assign var="rejection_flow_data" value=$p->rejection_flow_data%>
                              <%if ($grn_details_data) %>
                              <%if ($grn_details_data) %>
                              <%assign var="data_present" value='yes'%>
                              <%else %>
                              <%assign var="data_present" value='no'%>
                              <%/if%>
                              <tr>
                                 <td><%$i %></td>
                                 <td><%$child_part[0]->part_number %></td>
                                 <td><%$child_part[0]->part_description %></td>
                                 <td><%$uom_data[0]->uom_name %></td>
                                 <td><%$p->qty %></td>
                                 <td><%$p->pending_qty %></td>
                                 <td><%$part_rate_new %></td>
                                 <td>
                                    <%if ($inwarding_data[0]->status == "accepted") %>
                                    <%$grn_details_data[0]->qty %>
                                    <%else if ($data_present == "yes") %>
                                    <%$grn_details_data[0]->qty %>
                                    <%else %>
                                    <form action="<%base_url('add_grn_qty') %>" method="post">
                                       <input type="number" max="<%$p->pending_qty %>"
                                          placeholder="Inwarding Qty2" name="qty" step="any"
                                          class="form-control">
                                       <input type="hidden" name="inwarding_id"
                                          value="<%$inwarding_id %>" class="form-control">
                                       <input type="text" placeholder="Inwarding Qty"
                                          name="new_po_id" value="<%$new_po_id %>"
                                          class="form-control">
                                       <input type="hidden" placeholder="Inwarding Qty"
                                          name="part_id" value="<%$p->part_id %>"
                                          class="form-control">
                                       <input type="hidden" placeholder="Inwarding Qty"
                                          name="invoice_number"
                                          value="<%$inwarding_data[0]->invoice_number %>"
                                          class="form-control">
                                       <input type="hidden" placeholder="Inwarding Qty"
                                          name="grn_number"
                                          value="<%$inwarding_data[0]->grn_number %>"
                                          class="form-control">
                                       <input type="hidden" placeholder="Inwarding Qty"
                                          name="po_part_id" value="<%$p->id %>"
                                          class="form-control">
                                       <input type="hidden" placeholder="Inwarding Qty"
                                          name="part_rate" value="<%$part_rate_new %>"
                                          class="form-control">
                                       <input type="hidden" placeholder="Inwarding Qty" name="tax_id"
                                          value="<%$p->tax_id %>" class="form-control">
                                       <input type="hidden" placeholder="Inwarding Qty"
                                          name="loading_unloading"
                                          value="<%$new_po[0]->loading_unloading %>"
                                          class="form-control">
                                       <input type="hidden" placeholder="Inwarding Qty"
                                          name="loading_unloading_gst"
                                          value="<%$new_po[0]->loading_unloading_gst %>"
                                          class="form-control">
                                       <input type="hidden" placeholder="Inwarding Qty"
                                          name="freight_amount"
                                          value="<%$new_po[0]->freight_amount %>"
                                          class="form-control">
                                       <input type="hidden" placeholder="Inwarding Qty"
                                          name="freight_amount_gst"
                                          value="<%$new_po[0]->freight_amount_gst %>"
                                          class="form-control">
                                       <%/if%>
                                 </td>
                                 <td>
                                 <%if (empty($grn_details_data[0]->verified_qty)) %>
                                 <form action="<%base_url('update_grn_qty') %>" method="post">
                                 <input style="width: 200px ;" type="number"
                                    max="<%$grn_details_data[0]->qty %>"
                                    step="any" placeholder="Qty" name="verified_qty"
                                    class="form-control input-group-sm">
                                 <input type="hidden"
                                    value="<%$grn_details_data[0]->qty %>"
                                    placeholder="GRN Validation Qty" name="privious_qty"
                                    class="form-control">
                                 <input type="hidden" name="grn_details_id"
                                    value="<%$grn_details_data[0]->id %>"
                                    class="form-control">
                                 <input type="hidden" placeholder="Inwarding Qty"
                                    name="part_rate" value="<%$part_rate_new %>"
                                    class="form-control">
                                 <input type="hidden" placeholder="Inwarding Qty" name="tax_id"
                                    value="<%$p->tax_id %>" class="form-control">
                                 <%else %>
                                 <%$grn_details_data[0]->verified_qty %>
                                 <%/if%>
                                 </td>
                                 <td>
                                 <%assign var='diff' value= (float)$grn_details_data[0]->qty - (float)$grn_details_data[0]->verified_qty%>
                                 <%if (empty($grn_details_data[0]->verified_qty) || $grn_details_data[0]->verified_qty == 0) %>
                                 <button type="submit" class="btn btn-info">Submit</button>
                                 </form>
                                 <%else if ($diff > 0) %>
                                 <%if ($rejection_flow_data) %>
                                 <%assign var='j' value=$j+1%>
                                 <%/if%>
                                 <%else %>
                                 <%assign var='j' value=$j+1%>
                                 <%/if%>
                                 </td>
                                 <td>
                                    <%if ($rejection_flow_data) %>
                                    <a class="btn btn-success"
                                       href="<%base_url('create_debit_note/') %><%$rejection_flow_data[0]->id %>">Download
                                    Debit Note</a>
                                    <br>
                                    <br>
                                    <a class="btn btn-danger"
                                       href="<%base_url('documents/') %><%$rejection_flow_data[0]->debit_note %>"
                                       download>Download Uploaded Ack </a>
                                    <%else %>
                                    <%if ($grn_details_data) %>
                                    <%if ($grn_details_data[0]->qty != $grn_details_data[0]->verified_qty) %>
                                    <button type="button" class="btn btn-warning float-left"
                                       data-toggle="modal" data-target="#exampleModal123<%$i %>">
                                    Add MDR
                                    </button>
                                    <%else %>
                                    Qty Matched
                                    <%/if%>
                                    <%/if%>
                                    <%/if%>
                                    <div class="modal fade" id="exampleModal123<%$i %>"
                                       tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                                   action="<%base_url('add_rejection_flow') %>"
                                                   method="POST" enctype='multipart/form-data'>
                                                   <div class="row">
                                                      <div class="col-lg-12">
                                                         <div class="form-group">
                                                            <label for="po_num">Selected Part Number
                                                            / Description / Stock </label><span
                                                               class="text-danger">*</span>
                                                            <input type="text" class="form-control"
                                                               value="<%$child_part_data[0]->part_number %>"
                                                               name="" readonly required="required"
                                                               id="">
                                                            <input type="hidden"
                                                               value="<%$child_part[0]->id %>"
                                                               name="part_id" readonly
                                                               required="required" id="">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="po_num">Selected
                                                            Supplier</label><span
                                                               class="text-danger">*</span>
                                                            <input type="text" readonly
                                                               value="<%$supplier[0]->supplier_name %>"
                                                               class="form-control">
                                                            <input type="hidden" readonly
                                                               value="<%$supplier[0]->id %>"
                                                               name="supplier_id"
                                                               class="form-control">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="po_num">Reason <span
                                                               class="text-danger">*</span></label>
                                                            <input type="text" name="reason"
                                                               required placeholder="Reason"
                                                               class="form-control">
                                                            <input type="hidden" name="type"
                                                               value="MDR" required
                                                               placeholder="Reason"
                                                               class="form-control">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="po_num">Upload MDR TPT ACK
                                                            <span
                                                               class="text-danger">*</span></label>
                                                            <input type="file"
                                                               name="uploading_document" required
                                                               class="form-control">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="po_num">MDR Qty <span
                                                               class="text-danger">*</span></label>
                                                            <input type="number" readonly name="qty"
                                                               value="<%$grn_details_data[0]->qty - $grn_details_data[0]->verified_qty %>"
                                                               step="any" placeholder="Qty"
                                                               name="qty" required
                                                               class="form-control">
                                                            <input type="hidden" name="po_number"
                                                               readonly
                                                               value="<%$new_po[0]->po_number %>"
                                                               class="form-control">
                                                            <input type="hidden"
                                                               placeholder="Inwarding Qty"
                                                               name="grn_number"
                                                               value="<%$inwarding_data[0]->grn_number %>"
                                                               class="form-control">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="po_num">Remark
                                                            </label>
                                                            <input type="text" name="remark"
                                                               required placeholder="Remark"
                                                               class="form-control">
                                                         </div>
                                                      </div>
                                                   </div>
                                             </div>
                                             <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                             <button type="submit" class="btn btn-primary">Save
                                             changes</button>
                                             </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <%assign var='i' value=$i+1%>
                              <%/if%>
                              <%/foreach%>
                              <%/if%>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <td colspan="10"></td>
                                 <td>
                                    <%if ($inwarding_data[0]->status == "validate_grn") %>
                                    <button type="button" disabled class="btn btn-primary mt-4"
                                       data-toggle="modal">
                                    GRN Already Validated</button>
                                    <%else %>
                                    <%if ($j === $i) %>
                                    <button type="button" class="btn btn-primary mt-4" data-toggle="modal"
                                       data-target="#exampleModalgenerate">
                                    Validate GRN </button>
                                    <%/if%>
                                    <%/if%>
                                 </td>
                              </tr>
                           </tfoot>
                        </table>
                     </div>
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