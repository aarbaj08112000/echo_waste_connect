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
            <h1>Inwarding Details</h1>
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
                     <div class="col-lg-2">
                        <div class="form-group">
                           <label for="">GRN Number</label>
                           <input type="text" readonly value="
                           	<%if ($status == 'verifed') %>
                                  <%$inwarding_data[0]->grn_number %>
                            <%else %>
                                 
                            <%/if%>" class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-2">
                        <div class="form-group">
                           <label for="">PO Number</label>
                           <input type="text" readonly value="<%$new_po[0]->po_number %>"
                              class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-2">
                        <div class="form-group">
                           <label for="">PO Date</label>
                           <input type="text" readonly value="<%$new_po[0]->po_date %>"
                              class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-2">
                        <div class="form-group">
                           <label for="">PO Status</label>
                           <input type="text" readonly value="<%if ($new_po[0]->status == 'accpet') %>Released
                            <%else %><%$new_po[0]->status%><%/if%>" class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-2">
                        <div class="form-group">
                           <label for="">Supplier Name</label>
                           <input type="text" readonly
                              value="<%$supplier[0]->supplier_name %>" class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-2">
                        <div class="form-group">
                           <label for="">Supplier Number</label>
                           <input type="text" readonly
                              value="<%$supplier[0]->supplier_number %>"
                              class="form-control">
                        </div>
                     </div>
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
                     <div class="col-lg-2">
                        <div class="form-group">
                           <label for="">Invoice Number</label>
                           <input type="text" readonly
                              value="<%$inwarding_data[0]->invoice_number %>"
                              class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-2">
                        <div class="form-group">
                           <label for="">Invoice Amount</label>
                           <input type="text" readonly
                              value="<%$inwarding_data[0]->invoice_amount %>"
                              class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="form-group">
                           <label for="">Software Calculated Amount</label>
                           <input type="text" readonly value="<%$actual_price %>"
                              class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="form-group">
                           <label for="">Invoice Amount Validation Status</label>
                           <input type="text" readonly value="<%$status %>"
                              class="form-control">
                        </div>
                     </div>
                     <%if ($isMultiClient == "true") %>
                     <div class="col-lg-2">
                        <div class="form-group">
                           <label for="">Delivery Location</label>
                           <input type="label" readonly value="<%$inwarding_data[0]->delivery_unit %>"
                              class="form-control">
                        </div>
                     </div>
                     <%/if%>
                     <div class="col-lg-3">
                        <div class="form-group">
                           <a class="btn btn-dark mt-4"
                              href="<%base_url('inwarding_invoice/') %><%$new_po_id %>">
                           < Back </a> &nbsp;
                           <%if ($status == "not-verifed") %>
	                           <button type="button" class="btn btn-primary mt-4" data-toggle="modal"
	                              data-target="#exampleModalmatch">
	                           Match Invoice Amount </button>
                           <%/if%>
                              
                            <%if ($inwarding_data[0]->status == "accepted") %>
                              	<button class='btn btn-primary mt-4' disabled>Inwarding Already Accepted</button>
                            <%else if ($status == "verifed") %>
                                  <%if ($inwarding_data[0]->status == "pending" || $inwarding_data[0]->status == "") %>
			                           <button type="button" class="btn btn-danger mt-4" data-toggle="modal"
			                              data-target="#exampleModalgenerate">
			                           Generate GRN </button>
			                       <%/if%>
                           <%/if%>
                           <!-- Modal -->
                           <div class="modal fade" id="exampleModalmatch" tabindex="-1" role="dialog"
                              aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg " role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel">Match Price.
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
                                                   <input type="number" step="any"
                                                      name="invoice_amount"
                                                      placeholder="Invoice Amount"
                                                      value="" class="form-control">
                                                   <input type="hidden" name="inwarding_id"
                                                      value="<%$inwarding_id %>"
                                                      class="form-control">
                                                   <input type="hidden" name="actual_price"
                                                      value="<%$actual_price %>"
                                                      class="form-control">
                                                   <input type="hidden" name="minus_price"
                                                      value="<%$minus_price %>"
                                                      class="form-control">
                                                   <input type="hidden" name="plus_price"
                                                      value="<%$plus_price %>"
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
                                             Changes</button>
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
                                       <h5 class="modal-title" id="exampleModalLabel">Generate GRN
                                       </h5>
                                       <button type="button" class="close" data-dismiss="modal"
                                          aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                       </button>
                                    </div>
                                    <div class="modal-body">
                                       <form
                                          action="<%base_url('generate_grn') %>"
                                          method="POST">
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="form-group">
                                                   <label> Are You Sure Want To Generate GRN ?
                                                   </label>
                                                   <input type="hidden" name="status"
                                                      placeholder="" value="generate_grn"
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
                                             Changes</button>
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
                           <th>UOM</th>
                           <th>PO QTY</th>
                           <th>Balance QTY</th>
                           <th>Price</th>
                           <th>Inwarding Qty</th>
                           <th>Action </th>
                        </tr>
                     </thead>
                     <tbody>
                       	<%if ($po_parts) %>
                               <%assign var="i" value=1%>
                     		   <%assign var="final_po_amount" value=0%>
                               <%foreach from=$po_parts item=p %>
                           		
                                   <%* //It will  select all matching child part master as we have multiple child part master for single child part id *%>
                                   <%assign var="child_part_data" value=$p->child_part_data%>
                                   <%*// $gst_structure_data = $this->Crud->get_data_by_id("gst_structure", $p->tax_id, "id"); *%>
                           		   <%assign var="uom_data" value=$p->uom_data%>
                           		   <%assign var="part_rate_new" value=0%>
                                   <%if (empty($p->rate)) %>
                                   		<%assign var="part_rate_new" value=$child_part_data[0]->part_rate%>
                                   <%else %>
                                   		<%assign var="part_rate_new" value=$p->rate%>
                                   <%/if%>
                           
                                   <%*//here we are only geting rate of only one from above list *%>
                                   <%assign var="total_rate" value=$part_rate_new * $p->qty%>
                                   <%assign var="final_po_amount" value=$final_po_amount + $total_rate%>
                           		   <%assign var="grn_details_data" value=$p->grn_details_data%>
                           		   <%assign var="data_present" value='no'%>
                                   <%if ($grn_details_data) %>
                                   		<%assign var="data_present" value='yes'%>
                                   <%else %>
                                   		<%assign var="data_present" value='no'%>
                                   <%/if%>
                                   <%assign var="subcon_po_inwarding_master" value=$p->subcon_po_inwarding_master%>
                                   <%if (empty($new_po[0]->process_id)) %>
                        <tr>
                           <td><%$p->id %></td>
                           <td><%$child_part_data[0]->part_number %></td>
                           <td><%$child_part_data[0]->part_description %></td>
                           <td><%$uom_data[0]->uom_name %></td>
                           <td><%$p->qty %></td>
                           <td><%$p->pending_qty %></td>
                           <td><%$part_rate_new %></td>
                           <td>
                              <%if ($inwarding_data[0]->status == "accepted") %>
                                    <%$grn_details_data[0]->qty %>
                               <%else if ($data_present == "yes") %>
                                    <%$grn_details_data[0]->qty %>
                               <%else if ($inwarding_data[0]->status == "generate_grn") %>
                                    NA
                               <%else%>
                              <form action="<%base_url('add_grn_qty') %>" method="post">
                                 <input type="number" required step="any"
                                    max="<%$p->pending_qty %>"
                                    placeholder="Inwarding Qty"
                                    name="qty"
                                    class="form-control">
                                 <input type="hidden" name="inwarding_id"
                                    value="<%$inwarding_id  %>" class="form-control">
                                 <input type="hidden" 
                                    name="new_po_id" value="<%$new_po_id %>"
                                    class="form-control">
                                 <input type="hidden" 
                                    name="part_id" value="<%$p->part_id %>"
                                    class="form-control">
                                 <input type="hidden" 
                                    name="invoice_number"
                                    value="<%$inwarding_data[0]->invoice_number %>"
                                    class="form-control">
                                 <input type="hidden" 
                                    name="grn_number"
                                    value="<%$inwarding_data[0]->grn_number %>"
                                    class="form-control">
                                 <input type="hidden" 
                                    name="po_part_id" value="<%$p->id %>"
                                    class="form-control">
                                 <input type="hidden" 
                                    name="pending_qty" value="<%$p->pending_qty %>"
                                    class="form-control">
                                 <input type="hidden" 
                                    name="part_rate" value="<%$part_rate_new %>"
                                    class="form-control">
                                 <input type="hidden"  name="tax_id"
                                    value="<%$p->tax_id %>" class="form-control">
                                 <input type="hidden" name="invoice_number"
                                    value="<%$invoice_number %>" class="form-control">
                                <%/if%>
                           </td>
                           <td>
                           <%if ($data_present == "yes" && $status != "verifed") %>
                           <button type="button" class="btn btn-primary " title="Update" data-toggle="modal" data-target="#exampleModa<%$i %>l">
                           <i class="fa fa-edit"></i>
                           </button>
                           <div class="modal fade" id="exampleModa<%$i %>l" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog " role="document">
                           <div class="modal-content">
                           <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Update Details</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                           </div>
                           <div class="modal-body">
                           <form action="<%base_url('edit_grn_qty') %>" method="POST">
                           <div class="row">
                           <div class="col-lg-12">
                           <div class="form-group">
                           <label> Inwarding Qty </label><span class="text-danger">*</span>
                           <input type="number" required step="any"
                              max="<%$p->pending_qty %>"
                              name="qty"
                              value="<%$grn_details_data[0]->qty %>"
                              class="form-control">
                           <input type="hidden" 
                              name="inwarding_id"
                              value="<%$inwarding_id %>" class="form-control">
                           <input type="hidden" 
                              name="new_po_id" value="<%$new_po_id %>"
                              class="form-control">
                           <input type="hidden" 
                              name="part_id" value="<%$p->part_id %>"
                              class="form-control">
                           <input type="hidden" 
                              name="invoice_number"
                              value="<%$inwarding_data[0]->invoice_number %>"
                              class="form-control">
                           <input type="hidden" 
                              name="grn_number"
                              value="<%$inwarding_data[0]->grn_number %>"
                              class="form-control">
                           <input type="hidden" 
                              name="po_part_id" value="<%$p->id %>"
                              class="form-control">
                           <input type="hidden" 
                              name="part_rate" value="<%$part_rate_new %>"
                              class="form-control">
                           <input type="hidden" 
                              name="pending_qty" value="<%$p->pending_qty %>"
                              class="form-control">
                           <input type="hidden"  
                              name="tax_id"
                              value="<%$p->tax_id %>" class="form-control">
                           </div>
                           <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary">Save</button>
                           </div>
                           </form>
                           </div>
                           </div>
                           </div>
                           </div>
                           <%else if ($status == "not-verifed") %>
                           <button type="submit" class="btn btn-info">Submit</button>
                           </form>
                           <%/if%>
                           </td>
                        </tr>
                        <%else %>
                        <tr>
	                        <td><%$i %></td>
	                        <td><%$child_part_data[0]->part_number %></td>
	                        <td><%$child_part_data[0]->part_description %></td>
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
	                        <%if (empty($subcon_po_inwarding_master[0]->inwarding_qty)) %>
	                        <form action="<%base_url('add_grn_qty_subcon_view') %>"
	                           method="post">
	                        <input type="number" required step="any" 
	                           max="<%$p->pending_qty %>"
	                           placeholder="Inwarding Qty" name="qty"
	                           class="form-control">
	                        <input type="hidden" name="inwarding_id"
	                           value="<%$inwarding_id %>" class="form-control">
	                        <input type="hidden" placeholder="Inwarding Qty"
	                           name="new_po_id" value="<%$new_po_id %>"
	                           class="form-control">
	                        <input type="hidden" placeholder="Inwarding Qty"
	                           name="part_id_new"
	                           value="<%$child_part_data[0]->child_part_id %>"
	                           class="form-control">
	                        <input type="hidden" placeholder="Inwarding Qty"
	                           name="part_id" value="<%$p->part_id %>"
	                           class="form-control">
	                        <input type="hidden" placeholder="number invoice"
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
	                           name="pending_qty" value="<%$p->pending_qty %>"
	                           class="form-control">
	                        <input type="hidden" placeholder="Inwarding Qty"
	                           name="part_rate" value="<%$part_rate_new %>"
	                           class="form-control">
	                        <input type="hidden" placeholder="Inwarding Qty" name="tax_id"
	                           value="<%$p->tax_id %>" class="form-control">
	                        <%else %>
	                               <%$subcon_po_inwarding_master[0]->inwarding_qty %>
	                        <%/if%>
	                        <%/if%>
	                        </td>
	                        <td>
	                        <%if ($subcon_po_inwarding_master) %>
	                        <a class="btn btn-info"
	                           href="<%base_url('grn_subcon_view/') %><%$p->part_id %>/<%$new_po_id %>/<%$inwarding_data[0]->id %>/<%$p->part_id %>"><i class="fas fa-eye"></i></a>
	                        <%else if ($data_present == "yes") %>
	                              
	                        <%else if ($status == "not-verifed") %>
		                        <button type="submit" class="btn btn-info">Submit</button>
		                        </form>
	                        <%/if%>
	                        </td>
                        </tr>
                        <%/if%>
                        <%assign var='i' value=$i+1%>
                           <%/foreach%>
                        <%/if%>
                           
                     </tbody>
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