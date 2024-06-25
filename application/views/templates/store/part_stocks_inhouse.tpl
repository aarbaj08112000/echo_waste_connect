<div class="wrapper">
<%assign var='role' value=trim($session_data['type']) %>
<!-- done new fg stock -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Inhouse Parts (Item) Stock</h1>
         </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Part Stocks</li>
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
         <div class="card">
            <div class="card-header">
               <h3 class="card-title">
                  <a href="<%base_url('download_stock_variance') %>"
                     class="btn btn-info">Download Stock Variance </a>
               </h3>
            </div>
            <div class="card-body">
               <form action="<%base_url('view_part_stocks_inhouse') %>" method="POST"
                  enctype="multipart/form-data">
                  <div class="row">
                     <div class="col-lg-4">
                        <div style="width: 400px;">
                           <div class="form-group">
                              <label for="on click url">Select Part Number<span
                                 class="text-danger">*</span></label> <br>
                              <select name="part_id" class="form-control select2" id="">
                                 <option value="">Select Part</option>
                                 <%foreach from=$customer_part_list item=c %>
	                                 <option <%if ($filter_part_id == $c->id) %>selected <%/if%>
	                                    value="<%$c->id %>"><%$c->part_number %>
	                                 </option>
                                 <%/foreach%>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <label for="">&nbsp;</label> <br>
                        <button class="btn btn-secondary">Search </button>
                     </div>
                  </div>
               </form>
               <table id="example1" class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>Sr. No.</th>
                        <th>Part Number</th>
                        <th>Part Description</th>
                        <th>UOM</th>
                        <th>Safety Buffer Stock</th>
                        <th>Store Stock</th>
                        <th>Subcon Stock</th>
                        <th>Stock Reserve against Job order</th>
                        <!-- <th>store_scrap</th> -->
                        <th>Store Rejection Stock</th>
                        <th>Production Rejection Stock</th>
                        <th>Under Inspection Stock</th>
                        <th>GRN Rejection Stock</th>
                        <th>Store Rack Location</th>
                        <th>Store Stock Rate</th>
                        <th>Store Stock Value</th>
                        <th>Production Stock</th>
                        <th>Production Scrap</th>
                        <th>Production Rejection</th>
                        <th>Transfer to Fg</th>
                     </tr>
                  </thead>
                  <%* <tfoot>
                     <th colspan="8"></th>
                     <th colspan="2">Total Store Stock Value</th>
                     <th colspan="2"> <input type="number" readonly name="total_value"
                        id="total_value_id" class="form-control">
                     </th>
                  </tfoot> *%>

                  <tbody>
                     <%assign var='i' value=1 %>
                        <%if ($filter_part_id) %>
                            <%if ($filtered_cust_part) %>
                                <%foreach from=$filtered_cust_part item=po %>
                                   	<%assign var='stock' value=$po->stock %>
                                   	<%assign var='prodQtyColName' value=$po->prodQtyColName %>
                                   	<%assign var='uom_data' value=$po->uom_data %>
                                   	<%assign var='underinspection_stock' value=$po->underinspection_stock %>
                                   	<%assign var='scrap_stock' value=$po->scrap_stock %>
                                   	<%assign var='child_part_present' value=$po->child_part_present %>
				                    <tr>
				                        <td><%$po->id %></td>
				                        <td><%$po->part_number %></td>
				                        <td><%$po->part_description %></td>
				                        <td><%$uom_data[0]->uom_name %></td>
				                        <td><%$po->safty_buffer_stk %></td>
				                        <td class="<%if ($po->safty_buffer_stk <= $stock) %>text-success<%else %>text-danger <%/if%>"><%$stock %></td>
				                        <td><%$po->sub_con_stock %></td>
				                        <td><%$po->onhold_stock %></td>

				                        <td><%$po->rejection_stock %></td>
				                        <td><%$po->rejection_prodcution_qty %></td>
				                        <td><%$underinspection_stock %></td>
				                        <td><%$scrap_stock %></td>
				                        <td><%$po->store_rack_location %></td>
				                        <td><%$po->store_stock_rate %></td>
				                        <td><%($stock) * ($po->store_stock_rate) %></td>
				                        <td>
				                           <%if ($child_part_present == "yes") %>
				                                  <%if ($po->$prodQtyColName > 0) %>
							                            <%if ($role == "Admin" || $role == "production" ) %>
								                           <button type="button" class="btn btn-primary" data-toggle="modal"
								                              data-target="#edit<%$i %>">
								                           <%$po->$prodQtyColName %>
								                           </button>
								                           <div class="modal fade" id="edit<%$i %>" tabindex="-1"
								                              role="dialog" aria-labelledby="exampleModalLabel"
								                              aria-hidden="true">
								                              <div class="modal-dialog" role="document">
								                                 <div class="modal-content">
								                                    <div class="modal-header">
								                                       <h5 class="modal-title" id="exampleModalLabel">Transfer
								                                          Production stock to store stock
								                                       </h5>
								                                       <button type="button" class="close" data-dismiss="modal"
								                                          aria-label="Close">
								                                       <span aria-hidden="true">&times;</span>
								                                       </button>
								                                    </div>
								                                    <div class="modal-body">
								                                       <div class="row">
								                                          <div class="col-lg-12">
								                                             <form
								                                                action="<%base_url('update_production_qty') %>"
								                                                method="POST" enctype="multipart/form-data">
								                                                <label for="">Production Qty <span
								                                                   class="text-danger">*</span>
								                                                </label>
								                                                <input type="number" step="any" class="form-control"
								                                                   value=""
								                                                   max="	<%$po->$prodQtyColName %>"
								                                                   name="production_qty" min="1" required
								                                                   placeholder="Enter Transfer Qty">
								                                                <input type="hidden" class="form-control"
								                                                   value="<%$po->part_number %>"
								                                                   name="part_number" required
								                                                   placeholder="Enter Transfer Qty">
								                                          </div>
								                                       </div>
								                                       <div class="modal-footer">
								                                       <button type="button" class="btn btn-secondary"
								                                          data-dismiss="modal">Close</button>
								                                       <button type="submit" class="btn btn-primary">Save
								                                       changes</button>
								                                       </form>
								                                       </div>
								                                    </div>
								                                 </div>
								                              </div>
							                            <%/if%>
							                      <%else %>
							                        <%$po->$prodQtyColName %>
							                      <%/if%>
				                            <%else %>
				                                <%$po->$prodQtyColName %>
				                           	<%/if%>

				                        </td>
				                        <td><%$po->production_rejection %></td>
				                        <td><%$po->production_scrap %></td>
				                        <td>
					                        <%if ($po->$prodQtyColName > 0) %>
					                                <%if ($role == "Admin" || $role == "production") %>
								                        <button type="button" class="btn btn-primary" data-toggle="modal"
								                           data-target="#fgtransfer<%$i %>">
								                        Transfer to FG
								                        </button>
								                        <div class="modal fade" id="fgtransfer<%$i %>" tabindex="-1"
								                           role="dialog" aria-labelledby="exampleModalLabel"
								                           aria-hidden="true">
									                        <div class="modal-dialog" role="document">
									                        <div class="modal-content">
									                        <div class="modal-header">
									                        <h5 class="modal-title" id="exampleModalLabel">Transfer
									                        Production QTY to FG
									                        </h5>
									                        <button type="button" class="close" data-dismiss="modal"
									                           aria-label="Close">
									                        <span aria-hidden="true">&times;</span>
									                        </button>
									                        </div>
									                        <div class="modal-body">
									                        <div class="row">
									                        <div class="col-lg-12">
									                        <form
									                           action="<%base_url('transfer_child_part_to_fg_stock_inhouse') %>"
									                           method="POST" enctype="multipart/form-data">
									                        <label for="">Enter Stock Qty <span
									                           class="text-danger">*</span>
									                        </label>
									                        <input type="number" step="any"
									                           class="form-control" value=""
									                           max="<%$po->$prodQtyColName %>"
									                           name="stock" required
									                           placeholder="Enter Transfer Qty">
									                        <input type="hidden" class="form-control"
									                           value="<%$po->part_number %>"
									                           name="part_number" required
									                           placeholder="Enter Transfer Qty">
									                        <input type="hidden" class="form-control"
									                           value="<%$po->id %>"
									                           name="child_part_id" required
									                           placeholder="Enter Transfer Qty">
									                        </div>
									                        <div class="col-lg-12">
									                        <label for=""><br>Select Customer Part Number /
									                        Customer Name </label>
									                        <select name="customer_part_number" required
									                           id="" class="form-control select2">
									                        <option value="">Select Part</option>
									                        <%if ($transfer_part_list) %>
									                               <%foreach from=$transfer_part_list item=t %>
											                        <option value="<%$t->part_number %>">
											                        	<%$t->part_number %>
											                        </option>
											                        <%/foreach%>
									                        <%/if%>
									                        </select>
									                        </div>
									                        </div>
									                        <div class="modal-footer">
									                        <button type="button"  class="btn btn-secondary" data-dismiss="modal"
									                           aria-label="Close">Close</button>
									                        <button type="submit" class="btn btn-primary">Save
									                        changes</button>
									                        </form>
									                        </div>
									                        </div>
									                        </div>
								                        </div>
							                        <%/if%>
					                        <%else %>
					                           <%$po->$prodQtyColName %>
					                        <%/if%>
				                        </td>
				                    </tr>
		                        <%assign var='i' value=$i+1 %>
		                        <%/foreach%>
                        	<%/if%>
                        <%/if%>
                  </tbody>
               </table>
               </div>
               </div>
            </div>
         </div>
      </div>
</section>
</div>
<script>
   $(function() {
       $("#total_value_id").val(<%$total_value %>);
   });
</script>