<div style="width: 100%;" class="wrapper">
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>In Warding</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Store</li>
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
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Sr. No.</th>
                              <th>PO Number</th>
                              <th>Supplier Name</th>
                              <th>PO Date</th>
                              <th>Created Date</th>
                              <th>Expiry Date</th>
                              <th>Download PDF PO</th>
                              <th>View PO Details</th>
                              <th>Close PO</th>
                           </tr>
                        </thead>
                        <tbody>
                        	<%assign var='i' value=1%>
                           	<%if ($new_po) %>
                                  <%foreach from=$new_po item=s %>
			                           <tr>
			                              <td><%$i %></td>
			                              <td><%$s->po_number %></td>
			                              <td><%$s->supplier_name %></td>
			                              <td><%$s->po_date %></td>
			                              <td><%$s->created_date %></td>
			                              <td><%$s->expiry_po_date %></td>
			                              <td><a href="<%base_url('download_my_pdf/') %><%$s->id %>" class="btn btn-primary" href="">Download</a></td>
			                              <td><a href="<%base_url('inwarding_invoice/') %><%$s->id %>" class="btn btn-primary" href="">Details</a></td>
			                              <td>
			                                 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#close<%$i %>">
			                                 Close
			                                 </button>
			                                 <div class="modal fade" id="close<%$i %>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			                                    <div class="modal-dialog" role="document">
			                                       <div class="modal-content">
			                                          <div class="modal-header">
			                                             <h5 class="modal-title" id="exampleModalLabel">Close PO</h5>
			                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                                             <span aria-hidden="true">&times;</span>
			                                             </button>
			                                          </div>
			                                          <div class="modal-body">
			                                             <form action="<%base_url('close_po') %>" method="POST" enctype="multipart/form-data">
			                                                <div class="form-group">
			                                                   <label for="">Are You Sure Want To Close <%$s->po_number %> This PO? <span class="text-danger">*</span></label>
			                                                   <input required value="<%$s->id %>" type="hidden" class="form-control" name="id">
			                                                   <input required value="<%$s->po_number %>" type="hidden" class="form-control" name="po_number">
			                                                </div>
			                                          </div>
			                                          <div class="modal-footer">
			                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			                                          <button type="submit" class="btn btn-primary">Close</button>
			                                          </form>
			                                          </div>
			                                       </div>
			                                    </div>
			                                 </div>
			                              </td>
			                           </tr>
	                              <%assign var='i' value=$i+1%>
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