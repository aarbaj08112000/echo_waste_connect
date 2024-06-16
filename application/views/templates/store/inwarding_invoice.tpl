<%assign var="isMultiClient" value=$session_data['isMultipleClientUnits']%>
<div class="wrapper">
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Inwarding PO Invoice Numbers</h1>
            </div>
            <!--<div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><a href="#">Home</a></li>
                   <li class="breadcrumb-item active">Inwarding</li>
               </ol>
               </div>-->
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
                     <!-- Button trigger modal -->
                     
                    <%if ($flag == 0) %>
		                     <hr>
		                    <div class="alert-warning">
		                        <div class="alert">
		                           Note: Can not add invoice number as all parts balance qty is zero.
		                        </div>
		                     </div>
		                     <a class="btn btn-dark" href="<%base_url('inwarding') %>">
		                     < Back</a>
		            <%else %> 
		                     <a class="btn btn-dark" href="<%base_url('inwarding') %>">
		                     < Back</a>
		                     <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
		                     Add Invoice Number</button>
	                <%/if%>
                     <!-- Modal -->
                    <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog " role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Add Invoice Number</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 <form action="<%base_url('add_invoice_number') %>" method="POST">
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="form-group">
                                             <label for="tool_number">Invoice Number </label><span class="text-danger">*</span>
                                             <input type="text" name="invoice_number" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Invoice Number">
                                             <input type="hidden" name="new_po_id" value="<%$new_po_id %>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Invoice Number">
                                          </div>
                                          <div class="form-group">
                                             <label for="tool_number">Invoice Date </label><span class="text-danger">*</span>
                                             <input type="date" name="invoice_date" max="<%date('Y-m-d') %>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Invoice Number">
                                          </div>
                                          <div class="form-group">
                                             <label for="tool_number">GRN Date </label><span class="text-danger">*</span>
                                             <input type="date" name="grn_date" readonly value="<%date('Y-m-d') %>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Invoice Number">
                                          </div>
                                          <div class="form-group">
                                             <label for="">Vehicle No.</label>
                                             <input type="text" 
                                                placeholder="Enter Vehicle No" 
                                                value="" 
                                                name="vehicle_number" 
                                                pattern="^([A-Z|a-z|0-9]{4,20})$"
                                                oninvalid="this.setCustomValidity('Please enter a valid vehicle number in the format XX00XX0000')" 
                                                onchange="this.setCustomValidity('')"
                                                class="form-control">
                                          </div>
                                          <div class="form-group">
                                             <label for="tool_number">Transporter ID </label><span class="text-danger">*</span>
                                             <input type="text" name="transporter" value="" class="form-control" id="transporter" aria-describedby="emailHelp" placeholder="Enter transporter">
                                          </div>
                                          <!-- <php if($isMultiClient == "true") { ?>
                                             <div class="form-group">
                                                     <label>Delivery Location</label><span class="text-danger">*</span><br>
                                                     <select name="deliveryUnit" required class="form-control select2" id="">
                                                         <option value="">Select</option> 
                                                         <?php
                                                foreach ($client_list as $cl) {
                                                ?>
                                                             <option value="<?php echo $cl->client_unit ?>">
                                                                     <?php echo $cl->client_unit; ?>
                                                             </option>
                                                         <?php
                                                }
                                                ?>
                                                     </select>
                                             </div>
                                             <php } ?> -->
                                       </div>
                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                       <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Sr No</th>
                              <th>Invoice Number</th>
                              <th>Invoice Date</th>
                              <th>GRN Date</th>
                              <th>GRN Time</th>
                              <th>GRN Number </th>
                              <th>Vehicle No</th>
                              <th>Transporter</th>
                              <?php if($isMultiClient == "true") { ?>
                              <th>Delivery Location</th>
                              <?php } ?>
                              <th>View Details</th>
                           </tr>
                        </thead>
                        <tbody>
                        	<%assign var='i' value=1%>
                          <%if ($inwarding_data) %>
                                <%foreach from=$inwarding_data item=t %>
                                    <%assign var='grn_number' value=$t->grn_number %>
		                           <tr>
		                              <td><%$i %></td>
		                              <td><%$t->invoice_number %></td>
		                              <td><%$t->invoice_date %></td>
		                              <td><%$t->grn_date %></td>

		                              <%if ($t->created_dttm !=null) %>
		                             	<%assign var='dateTime' value= convertDateTime($t->created_dttm) %>
		                             	<%assign var='time' value= $dateTime->format('H:i:s') %>
		                              <%else %>
		                              	<%assign var='time' value='Not available' %>
		                              <%/if%>
		                              <td><%$time %></td>
		                              <td><%$grn_number %></td>
		                              <td><%$t->vehicle_number %></td>
		                              <td><%$t->transporter %></td>
		                              <%if ($isMultiClient == "true") %>
		                              	<td><%$t->delivery_unit %></td>
		                              <%/if%>
		                              <td>
		                              	<a href="<%base_url('inwarding_details/') %><%$t->id %>/<%$new_po_id %>" class="btn btn-primary" href="">Inwarding Details</a>
		                             	</td>
		                           </tr>
		                        <%assign var='i' value=$i+1%>
                           		<%/foreach%>
                          <%/if%>
                        </tbody>
                     </table>
                  </div>
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Sr No</th>
                              <th>Part Number</th>
                              <th>Part Description</th>
                              <th>Balance QTY </th>
                           </tr>
                        </thead>
                        <tfoot>
                           <tr>
                              <th>Sr No</th>
                              <th>Part Number</th>
                              <th>Part Description</th>
                              <th>Balance QTY </th>
                           </tr>
                        </tfoot>
                        <tbody>
                        	<%assign var='flag' value=0%>
                              <%if ($po_parts) %>
                              	<%assign var='final_po_amount' value=0%>
                              	<%assign var='i' value=1%>
                                  <%foreach from=$po_parts item=p %>
                                      <%assign var='qty' value=0%>
                                      <%assign var='qty' value=$p->pending_qty%>
                                      <%assign var='flag' value=$flag + $qty%>
			                           	<tr>
			                              <td><%$i %></td>
			                              <td><%$p->child_part_data->part_number %></td>
			                              <td><%$p->child_part_data->part_description %></td>
			                              <td><%$qty %></td>
			                            </tr>
			                            <%assign var='i' value=$i+1%>
                                 <%/foreach%>
                                <%/if%>
                        </tbody>
                     </table>
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