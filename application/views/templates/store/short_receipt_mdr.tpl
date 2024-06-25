<div class="wrapper" style="width:100%">
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>MDR Rejection</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<%base_url() %>">Home</a></li>
                  <li class="breadcrumb-item active">Stock Rejection</li>
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
                  
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Add </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                           </div>
                           <div class="modal-body">
                              <form action="<%base_url('add_rejection_flow') %>" method="POST" enctype='multipart/form-data'>
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                          <label for="po_num">Select Part Number / Description / Stock </label><span class="text-danger">*</span>
                                          <select name="part_id" id="" class="from-control select2">
                                            <%if ($child_part) %>
                                                    <%foreach from=$child_part item=c %>
                                                
	                                                    <%if ($c->stock > 0) %>
			                                             <option value="<%$c->clientId %>"><%$c->part_number %>/<%$c->part_description %>/<%$c->stock %></option>
			                                            <%/if%>
	                                                <%/foreach%>
                                            <%/if%>
                                          </select>
                                       </div>
                                       <div class="form-group">
                                          <label for="po_num">Select Supplier</label><span class="text-danger">*</span>
                                          <select name="supplier_id" id="" class="from-control select2">
                                             <%if ($supplier) %>
                                                    <%foreach from=$supplier item=c %>
			                                             <option value="<%$c->id %>"><%$c->supplier_name %></option>
			                                        <%/foreach%>
                                             <%/if%>
                                          </select>
                                       </div>
                                       <div class="form-group">
                                          <label for="po_num">Enter Reason <span class="text-danger">*</span></label>
                                          <input type="text" name="reason" required placeholder="Enter Reason" class="form-control">
                                       </div>
                                       <div class="form-group">
                                          <label for="po_num">Upload debit note (approved document) <span class="text-danger">*</span></label>
                                          <input type="file" name="uploading_document" required class="form-control">
                                       </div>
                                       <div class="form-group">
                                          <label for="po_num">Enter Qty <span class="text-danger">*</span></label>
                                          <input type="number" name="qty" step="any" placeholder="Enter Qty" name="qty" required class="form-control">
                                       </div>
                                       <div class="form-group">
                                          <label for="po_num">Enter Remark </label>
                                          <input type="text" name="remark" required placeholder="Enter Remark" class="form-control">
                                       </div>
                                    </div>
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
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Sr. No.</th>
                              <th>Part Number / Description</th>
                              <th>Rejection Reason</th>
                              <th>Supplier</th>
                              <th>Remark</th>
                              <th>Uploaded Debit Note</th>
                              <th>Qty</th>
                              <th>Download Debit Note</th>
                           </tr>
                        </thead>
                        <tbody>
                           <%assign var='i' value=1 %>
                            <%if ($rejection_flow) %>
                                  <%foreach from=$rejection_flow item=c %>
                                      <%if ($c->type == "MDR") %>
						                    <tr>
						                              <td><%$i %></td>
						                              <td><%$c->part_number %>/<%$c->part_description %></td>
						                              <td><%$c->reason %></td>
						                              <td><%$c->supplier_name %></td>
						                              <td><%$c->remark %></td>
						                              <td>
						                                 <a class="btn btn-dark" download href="<%base_url('documents/') %><%$c->debit_note %>">Download Uploaded Document</a>
						                              </td>
						                              <td><%$c->qty %></td>
						                              <td>
						                                 <%if ($c->status == "approved" || true) %>
						                                 	<a class="btn btn-success" href="<%base_url('create_debit_note/') %><%$c->id %>">Download</a>
						                                 <%else if ($c->status == "stock_transfered") %>

						                                 <%else %>
						                                        // echo "stock transfered";
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
                  <!-- /.card-header -->
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