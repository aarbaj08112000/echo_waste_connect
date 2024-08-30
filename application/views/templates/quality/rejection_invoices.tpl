
<div class="wrapper container-xxl flex-grow-1 container-p-y">
   <!-- Navbar -->
   <!-- /.navbar -->
   <!-- Main Sidebar Container -->
   <!-- Content Wrapper. Contains page content -->
   <nav aria-label="breadcrumb">
      <div class="sub-header-left pull-left breadcrumb">
         <h1>
            Planning & Sales
            <a hijacked="yes" href="javascript:void(0)" class="backlisting-link" title="Back to Issue Request Listing">
            <i class="ti ti-chevrons-right"></i>
            <em>Sales Invoice</em>
            </a>
         </h1>
         <br>
         <span >Rejection Invoice</span>
      </div>
   </nav>
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!-- Main content -->
      <section class="content">
         <div class="">
            <div class="row">
               <div class="col-12">
                  <!-- /.card -->
                  <div class="card">
                     <div class="card-header">
                        <div class="row">
                           <div class="col-lg-4">
                              <div class="form-group mb-3">
                                 <form action="<%base_url('generate_rejection_sales_invoice') %>" method="POST">
                                    <label for="" class="form-label">Select Customer<span class="text-danger">*</span> </label>
                                    <select name="customer_id" required id="" class="form-control select2">
                                       <%if ($customer) %>
                                       <%foreach from=$customer item=s %>
                                       <option value="<%$s->id %>">
                                          <%$s->customer_name %>
                                       </option>
                                       <%/foreach%>
                                       <%/if%>
                                    </select>
                              </div>
                           </div>
                           <div class="col-lg-4">
                           <div class="form-group mb-3">
                           <label for="" class="form-label">Customer Debit Note No</label><span class="text-danger">*</span></label>
                           <input type="text" placeholder="Customer Debit Note No" name="customer_debit_note_no" class="form-control">
                           </div>
                           </div>
                           <div class="col-lg-4">
                           <div class="form-group mb-3">
                           <label for="on click url" class="form-label">Customer Debit Note Date
                           <span class="text-danger">*</span></label>
                           <input max="<%date('Y-m-d')%>" type="date"
                              value="" name="customer_debit_note_date"
                              class="form-control">
                           </div>
                           </div>
                           <div class="col-lg-4">
                           <div class="form-group mb-3" >
                           <label for="" class="form-label">Client Sales Invoice No</label></label>
                           <input type="text" placeholder="Client Sales Invoice No" name="client_sales_invoice_no" class="form-control">
                           </div>
                           </div>
                           <div class="col-lg-4">
                           <div class="form-group" mb-3>
                           <label for="on click url" class="form-label">Client Invoice Date
                           </label>
                           <input max="<%date('Y-m-d')%>" type="date"
                              value="" name="client_invoice_date"
                              class="form-control">
                           </div>
                           </div>
                           <div class="col-lg-4">
                           <div class="form-group mb-3">
                           <label for="on click url" class="form-label">Debit Basic Amount<span
                              class="text-danger">*</span></label>
                           <input type="number" step="any" min="0.00" value="0" name="debit_basic_amt"
                              class="form-control">
                           </div>
                           </div>
                           <div class="col-lg-4">
                           <div class="form-group mb-3">
                           <label for="on click url" class="form-label">GST Amount</label>
                           <input type="number" step="any" min="0.00" name="debit_gst_amt"
                              class="form-control">
                           </div>
                           </div>
                           <div class="col-lg-4">
                           <div class="form-group mb-3">
                           <label for="" class="form-label">Enter Remark </label>
                           <input type="text" placeholder="Enter Remark" value="" name="remark" class="form-control">
                           </div>
                           </div>
                           <div class="col-lg-4">
                           <div class="form-group mb-3">
                           <label for="" class="form-label">Rejection Reason</label>
                           <select name="rejection_reason" id=""
                              class="form-control select2">
                           <%if ($reject_remark) %>
                           <%foreach from=$reject_remark item=r %>
                           <option value="<%$r->id %>">
                           <%$r->name %>
                           </option>
                           <%/foreach%>
                           <%/if%>
                           </select>
                           </div>
                           </div>
                           <div class="col-lg-12">
                           <div class="form-group">
                           <button type="submit" class="btn btn-primary mt-4">Generate Request</button>
                           </div>
                           </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card p-0 mt-4">
                     <div class="">
                     <div class="">
                        <table id="example1" class="table  table-striped">
                           <thead>
                              <tr>
                                 <!-- <th>Sr No</th> -->
                                 <th>Rejection Invoice No</th>
                                 <th>Customer</th>
                                 <th>Customer Debit Note No</th>
                                 <th>Customer Debit Note Date</th>
                                 <th>Client Sales Invoice No</th>
                                 <th>Client Invoice Date</th>
                                 <th>Basic Amount</th>
                                 <th>GST Amount</th>
                                 <th class="text-center">View Details</th>
                              </tr>
                           </thead>
                           <tbody>
                              <%if ($rejection_sales_invoice) %>
                              <%assign var='i' value=1%>
                              <%foreach from=$rejection_sales_invoice item=u %>
                              <tr>
                                <!--  <td><%$i %></td> -->
                                 <td><%$u->rejection_invoice_no %></td>
                                 <td><%$u->customer_name %></td>
                                 <td><%$u->document_number %></td>
                                 <td><%$u->debit_note_date %></td>
                                 <td><%$u->sales_invoice_number %></td>
                                 <td><%$u->client_invoice_date %></td>
                                 <td><%$u->debit_basic_amt %></td>
                                 <td><%$u->debit_gst_amt %></td>
                                 <td class="text-center">
                                    <a class="" href="<%base_url('view_rejection_sales_invoice_by_id/') %><%$u->id %>">
                                    <i class="ti ti-history">
                                    </i>
                                    </a>
                                 </td>
                              </tr>
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
<script type="text/javascript">
   var data = {};
      table = $("#example1").DataTable({
      dom: "Bfrtilp",
     
      searching: true,
      // scrollX: true,
      scrollY: '200px',
      bScrollCollapse: true,
      // columnDefs: [{ sortable: false, targets: 9 }],
      pagingType: "full_numbers",
     
      
  });
      $('.dataTables_length').find('label').contents().filter(function() {
          return this.nodeType === 3; // Filter out text nodes
      }).remove();
      setTimeout(function(){
        $(".dataTables_length select").select2({
            minimumResultsForSearch: Infinity
        });
      },1000)
</script>
<!-- /.content-wrapper -->
