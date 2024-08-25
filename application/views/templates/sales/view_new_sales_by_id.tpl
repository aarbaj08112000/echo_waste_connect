<div  class="wrapper container-xxl flex-grow-1 container-p-y">
<!-- Navbar -->
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<nav aria-label="breadcrumb">
   <div class="sub-header-left pull-left breadcrumb">
      <h1>
         Planning & Sales
         <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
         <i class="ti ti-chevrons-right" ></i>
         <em >Sales Invoice</em></a>
      </h1>
      <br>
      <span >View Sales Invoice</span>
   </div>
</nav>
<div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5 listing-btn">
            <a title="Back To Supplier Po List" class="btn btn-seconday" href="<%$base_url%>sales_invoice_released" type="button"><i class="ti ti-arrow-left"></i></a>
        </div>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<!-- Main content -->
<section class="content">
   <div class="">
      <div class="row">
         <div class="col-12">
          <input type="hidden" value="<%$new_sales[0]->id %>" id="sales_primary_id" class="form-control">
          <input type="hidden" value="<%$new_sales[0]->created_date %>" id="invoice_date" class="form-control">
          <input type="hidden" value="<%$new_sales[0]->sales_number %>" id="invoice_no" class="form-control">
          <input type="hidden" value="<%$new_sales[0]->sales_number %>" id="sales_number" class="form-control">
            <!-- /.card -->
            <%if empty($e_invoice_status) &&  $new_sales[0]->status == "pending"%>
            <div class="card p-0 mt-4">
               <div class="card-header">
                  <form action="<%$base_url%>generate_new_sales_update" method="POST">
                     <div class="row">
                     </div>
                     <div id="loading-overlay">
                        <div id="loading-spinner"></div>
                     </div>
                     <div class="row">
                        <div class="col-lg-4">
                           <div class="form-group">
                              <label for="">Transport Mode<span class="text-danger">*</span></label>
                              <select name="mode" class="form-control" required>
                                 <option value="">Select</option>
                                 <option value="1" <%if $new_sales[0]->mode == '1'%>selected<%/if%>>Road</option>
                                 <option value="2" <%if $new_sales[0]->mode == '2'%>selected<%/if%>>Rail</option>
                                 <option value="3" <%if $new_sales[0]->mode == '3'%>selected<%/if%>>Air</option>
                                 <option value="4" <%if $new_sales[0]->mode == '4'%>selected<%/if%>>Ship</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="form-group">
                              <label for="">Transporter<span class="text-danger">*</span></label>
                              <select name="transporter" required id="transporter" class="form-control select2">
                                 <option value="">Select</option>
                                 <%foreach from=$transporter item=tr%>
                                 <option value="<%$tr->id%>" <%if $new_sales[0]->transporter_id == $tr->id%>selected<%/if%>><%$tr->name%> - <%$tr->transporter_id%></option>
                                 <%/foreach%>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="form-group">
                              <label for="">Vehicle No.<span class="text-danger">*</span></label>
                              <input type="text" placeholder="Enter Vehicle No" name="vehicle_number" value="<%$new_sales[0]->vehicle_number%>" class="form-control"/>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="form-group">
                              <label for="">Distance<span class="text-danger">*</span></label>
                              <input type="text" placeholder="Enter Distance of Transportation" value="<%$new_sales[0]->distance%>" required name="distance" class="form-control">
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="form-group">
                              <label for="">L.R No</label>
                              <input type="text" placeholder="Enter L.R No" name="lr_number" value="<%$new_sales[0]->lr_number%>" class="form-control">
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="form-group">
                              <label for="">PO Remark </label>
                              <input type="text" placeholder="Enter Remark" value="<%$new_sales[0]->remark%>" name="remark" class="form-control">
                              <input type="hidden" value="<%$uri_segment_2%>" name="id" class="form-control">
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="form-group">
                              <button type="submit" class="btn btn-danger mt-4">Update</button>
                           </div>
                        </div>
                     </div>
                  </form>
                  
               </div>
            </div>
            <%/if%>
            
            <%if $new_sales[0]->status == "Cancelled" || (empty($e_invoice_status) &&  $new_sales[0]->status == "pending")%>
            <div class="card p-0 mt-4">
               <div class="card-header">
                    <div class="row">
                    <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Customer Name - Part Number</p>
                        <p class="tgdp-rgt-tp-txt" title="<%$customer[0]->customer_name%> - <%$customer_part_details[0]->part_number%>">
                        <%$customer[0]->customer_name%> - <%$customer_part_details[0]->part_number%>
                        </p>
                    </div>
                    <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Sales Invoice Number</p>
                        <p class="tgdp-rgt-tp-txt" title="<%$new_sales[0]->sales_number%>">
                        <%$new_sales[0]->sales_number%>
                        </p>
                    </div>
                    <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Current Status</p>
                        <p class="tgdp-rgt-tp-txt" title="<%if $new_sales[0]->status == "accpet"%>Released<%else%><%$new_sales[0]->status%><%/if%>">
                        <%if $new_sales[0]->status == "accpet"%>Released<%else%><%$new_sales[0]->status%><%/if%>
                        </p>
                       
                    </div>
                    <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">E Invoice Status</p>
                        <p class="tgdp-rgt-tp-txt" title="<%$e_invoice_status[0]->Status%>">
                        <%display_no_character($e_invoice_status[0]->Status)%>
                        </p>
                    </div>
                    <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">PO Remark</p>
                        <p class="tgdp-rgt-tp-txt" title="<%$new_sales[0]->remark%>">
                        <%display_no_character($new_sales[0]->remark)%>
                        </p>
                    </div>
                    
                   
                    </div>
               </div>
            </div>
            <%/if%>
            <%if $new_sales[0]->status =="lock" %>
            <div class="card p-0 mt-4">
               <div class="card-header">
                  <div class="row">
                     <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Transport Mode</p>
                        <p class="tgdp-rgt-tp-txt">
                           <%if $new_sales[0]->mode == '1'%>Road<%/if%>
                           <%if $new_sales[0]->mode == '2'%>Rail<%/if%>
                           <%if $new_sales[0]->mode == '3'%>Air<%/if%>
                           <%if $new_sales[0]->mode == '4'%>Ship<%/if%>
                        </p>
                     </div>
                     <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Transporter</p>
                        <p class="tgdp-rgt-tp-txt">
                           <%foreach from=$transporter item=tr%>
                           <%if $new_sales[0]->transporter_id == $tr->id%><%$tr->name%> - <%$tr->transporter_id%><%/if%>
                           <%/foreach%>
                        </p>
                     </div>
                     <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Vehicle No.</p>
                        <p class="tgdp-rgt-tp-txt"><%$new_sales[0]->vehicle_number%></p>
                     </div>
                     <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Distance</p>
                        <p class="tgdp-rgt-tp-txt"><%$new_sales[0]->distance%> </p>
                     </div>
                     <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">L.R No</p>
                        <p class="tgdp-rgt-tp-txt"><%display_no_character($new_sales[0]->lr_number)%></p>
                     </div>
                     <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">PO Remark</p>
                        <p class="tgdp-rgt-tp-txt"><%display_no_character($new_sales[0]->remark)%></p>
                     </div>
                     <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Customer Name - Part Number</p>
                        <p class="tgdp-rgt-tp-txt"><%$customer[0]->customer_name%> - <%$customer_part_details[0]->part_number%></p>
                     </div>
                     <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Sales Invoice Number</p>
                        <p class="tgdp-rgt-tp-txt"><%$new_sales[0]->sales_number%></p>

                     </div>
                     <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Current Status</p>
                        <p class="tgdp-rgt-tp-txt"><%if $new_sales[0]->status == "accpet"%>Released<%else%><%$new_sales[0]->status%><%/if%></p>
                     </div>
                     <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">E Invoice Status</p>
                        <p class="tgdp-rgt-tp-txt"><%display_no_character($e_invoice_status[0]->Status)%></p>
                     </div>
                     <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">PO Remark</p>
                        <p class="tgdp-rgt-tp-txt"><%display_no_character($new_sales[0]->remark)%></p>
                     </div>
                  </div>
               </div>
            </div>
            <%/if%>
            <%if $new_sales[0]->status == "lock" || $new_sales[0]->status == "pending"%>
            <div class="card mt-3">
               <div class="card-header">
                    <div class="row">
                    <%if $new_sales[0]->status == "lock" || $new_sales[0]->status == "pending"%>
                    <div class="col-lg-1" style="    width: 9%;">
                        <div class="form-group">
                            <a class="btn btn-success" href="<%$base_url%>view_generate_sales_invoice/<%$uri_segment_2%>" target="_blank">View Original</a>
                        </div>
                    </div>
                    <%/if%>
                    <%if $new_sales[0]->status == "lock"%>
                    <div class="col-lg-1" style="    width: 9%;">
                        <div class="form-group">
                            <a class="btn btn-success" href="<%$base_url%>generate_sales_invoice/<%$uri_segment_2%>/ORIGINAL_FOR_RECIPIENT">Original</a>
                        </div>
                    </div>
                    <div class="col-lg-1" style="    width: 9%;">
                        <div class="form-group">
                            <a class="btn btn-success" href="<%$base_url%>generate_sales_invoice/<%$uri_segment_2%>/DUPLICATE_FOR_TRANSPORTER">Duplicate</a>
                        </div>
                    </div>
                    <div class="col-lg-1" style="    width: 9%;">
                        <div class="form-group">
                            <a class="btn btn-success" href="<%$base_url%>generate_sales_invoice/<%$uri_segment_2%>/TRIPLICATE_FOR_SUPPLIER">Triplicate</a>
                        </div>
                    </div>
                    <div class="col-lg-1" style="margin-right: 30px; width: 9%;">
                        <div class="form-group" >
                            <a class="btn btn-success" href="<%$base_url%>generate_sales_invoice/<%$uri_segment_2%>/ACKNOWLEDGEMENT_COPY">Acknowledge</a>
                        </div>
                    </div>
                    <div class="col-lg-1" style="    width: 9%;">
                        <div class="form-group">
                            <a class="btn btn-success" href="<%$base_url%>generate_sales_invoice/<%$uri_segment_2%>/EXTRA_COPY">Extra Invoice</a>
                        </div>
                    </div>
                    <div class="col-lg-1" style="    width: 12%;">
                        <div class="form-group">
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#printForTally" id="printSticker">
                            Packaging Sticker
                            </button>

                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="printForTally" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Packaging Stickers</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <section class="content" id="observationTableData">
                                </section>
                                </div>
                            </div>
                        </div>
                    </div>
               <div>
            </div>
            <!-- Print selection -->
            <form action="<%$base_url%>print_sales_invoice/<%$uri_segment_2%>" method="post" class="mt-4">
               <div class="row">
                  <div class="col-lg-1 mt-2">
                     <div class="form-group">    
                        <input type="checkbox" id="original" name="interests[]" value="ORIGINAL_FOR_RECIPIENT">
                        <label for="original">Original</label><br>
                     </div>
                  </div>
                  <div class="col-lg-1  mt-2">
                     <div class="form-group">    
                        <input type="checkbox" id="duplicate" name="interests[]" value="DUPLICATE_FOR_TRANSPORTER">
                        <label for="duplicate">Duplicate</label><br>
                     </div>
                  </div>
                  <div class="col-lg-1 mt-2">
                     <div class="form-group">
                        <input type="checkbox" id="triplicate" name="interests[]" value="TRIPLICATE_FOR_SUPPLIER">
                        <label for="triplicate">Triplicate</label><br>
                     </div>
                  </div>
                  <div class="col-lg-1 mt-2">
                     <div class="form-group" >   
                        <input type="checkbox" id="acknowledge" name="interests[]" value="ACKNOWLEDGEMENT_COPY">
                        <label for="acknowledge">Acknowledge</label><br>
                     </div>
                  </div>
                  <div class="col-lg-1 mt-2">
                     <div class="form-group">   
                        <input type="checkbox" id="extraCopy" name="interests[]" value="EXTRA_COPY">
                        <label for="extraCopy">EXTRA COPY</label><br>
                     </div>
                  </div>
                  <div class="col-lg-1">
                     <div class="form-group">
                        <button type="submit" onclick="this.form.target='_blank';return true;" class="btn btn-info btn"> Print </button>
                     </div>
                  </div>
               </div>
            </form>
            <%/if%>
               </div>
            </div>
            </div>
            <%/if%>
           
            <div class="card mt-3">
               <div class="card-header">
               <%if $new_sales[0]->status == "pending"%>
                     <form action="<%$base_url%>add_sales_parts" method="post" id="salesForm">
                        <div class="row">
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="">Select PO no/ PO start date/ PO end date/ PO amendment no<span class="text-danger">*</span> </label>
                                 <select name="po_id" id="customer_tracking"  class="form-control select2">
                                    <%if $po_parts%>
                                    <%foreach from=$customer_tracking item=c%>
                                    <%if $po_parts[0]->po_number == $c->po_number%>
                                    <option value="<%$c->id%>"><%$c->po_number%> // <%$c->po_start_date%> // <%$c->po_end_date%> //<%$c->po_amendment_number%></option>
                                    <%/if%>
                                    <%/foreach%>
                                    <%else%>
                                    <%foreach from=$customer_tracking item=c%>
                                    <option <%if $po_parts && $po_parts[0]->po_id == $c->id%>selected<%/if%> value="<%$c->id%>"><%$c->po_number%> // <%$c->po_start_date%> // <%$c->po_end_date%> // <%$c->po_amendment_number%></option>
                                    <%/foreach%>
                                    <%/if%>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="">Select Part NO // Description // FG Stock // Rate // Packing QTY <span class="text-danger">*</span> </label>
                                 <input type="hidden" readonly id="customer_tracking_id" name="customer_tracking_id" class="form-control">
                                 <select name="part_id" id="part_id"  class="form-control select2">
                                    <option value=''>Please select</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <label for="">Enter Qty<span class="text-danger">*</span> </label>
                                 <input type="text" step="any" name="qty" placeholder="Enter QTY"  class="form-control onlyNumericInput">
                                 <input type="hidden" name="sales_number" value="<%$new_sales[0]->sales_number%>" placeholder="Enter QTY " required class="form-control">
                                 <input type="hidden" name="sales_id" value="<%$new_sales[0]->id%>" placeholder="Enter QTY " required class="form-control">
                                 <input type="hidden" name="customer_id" value="<%$customer[0]->id%>" placeholder="Enter QTY " required class="form-control">
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group mt-2">
                                 <%if $new_sales[0]->status == "pending"%>
                                 <button type="submit" class="btn btn-info btn mt-3">Add</button>
                                 <%/if%>
                              </div>
                           </div>
                        </div>
                     </form>
                <%/if%>
                <%if $new_sales[0]->status == "pending"%>
                  <div class="mt-3">
                  <%if $po_parts%>
                        <%if $session_type == 'admin' || $session_type == 'Admin' || $session_type == 'Sales'%>
                                <%assign var="flag" value=0%>
                                <%assign var="final_po_amount" value=0%>
                                <%assign var="i" value=1%>
                                <%foreach from=$po_parts item=p%>
                                <%if empty($p->tax_id)%>
                                <%assign var="flag" value=1%>
                                <%/if%>
                                <%/foreach%>
                                <%if $flag == 0%>
                                <button type="button" class="btn btn-danger ml-1" data-bs-toggle="modal" data-bs-target="#lock">
                                Lock Invoice
                                </button>
                                    <%if $new_sales[0]->status == "pending"%>
                                    <button type="button" class="btn btn-danger ml-1" data-bs-toggle="modal" data-bs-target="#deleteInvoice">
                                    Delete Invoice
                                    </button>
                                    <%/if%>
                                <!-- delete model -->
                                <div class="modal fade" id="deleteInvoice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Invoice</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <form action="<%$base_url%>delete_sale_invoice" method="POST">
                                                    <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for=""><b>Are you sure want to Delete this invoice ?</b> </label>
                                                        <input type="hidden" name="sales_id" value="<%$new_sales[0]->id%>" required class="form-control">
                                                        <input type="hidden" name="status" value="<%$new_sales[0]->status%>" required class="form-control">
                                                    </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Delete</button>
                                        </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <%else%>
                                <div class='alert alert-danger' style='width:400px'>Error : Check GST Of All Parts, to lock this invoice</div>
                                <%/if%>
                        <%/if%>
                  <%/if%>
                  <%/if%>
                  <%if $new_sales[0]->status == "lock"%>
                  <%if $session_type == 'admin' || $session_type == 'Admin'%>
                  <button type="button" disabled class="btn btn-success ml-1" data-bs-toggle="modal">
                  Invoice already released
                  </button>
                  <%/if%>
                  <%else%>
                  <%if $new_sales[0]->status != "pending" && $new_sales[0]->status != "Cancelled"%>
                  <button type="button" disabled class="btn btn-success ml-1" data-bs-toggle="modal">
                  Invoice already released
                  </button>
                  <%elseif $new_sales[0]->status == "Cancelled"%>
                  <button type="button" disabled class="btn btn-success ml-1" data-bs-toggle="modal">
                  Invoice already Cancelled
                  </button>
                  <%/if%>
                  <%/if%>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="accpet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                           </div>
                           <div class="modal-body">
                              <div class="row">
                                 <form action="<%$base_url%>accept_po" method="POST">
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                          <label for=""><b>Are you sure want to release this invoice?</b> </label>
                                          <input type="hidden" name="id" value="<%$new_sales[0]->id%>" required class="form-control">
                                          <input type="hidden" name="status" value="accpet" required class="form-control">
                                       </div>
                                    </div>
                              </div>
                           </div>
                           <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                           <button type="submit" class="btn btn-primary">Update</button>
                           </div>
                        </div>
                        </form>
                     </div>
                  </div>
                  <!-- Lock Model -->
                  <div class="modal fade" id="lock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                           </div>
                           <div class="modal-body">
                              <div class="row">
                                 <form action="<%$base_url%>lock_invoice" method="POST">
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                          <label for=""><b>Are you sure you want to Lock this invoice?</b> </label>
                                          <input type="hidden" name="new_po_id" id="new_po_id" value="" required class="form-control">
                                          <input type="hidden" name="id" value="<%$new_sales[0]->id%>" required class="form-control">
                                          <input type="hidden" name="status" value="lock" required class="form-control">
                                       </div>
                                    </div>
                              </div>
                           </div>
                           <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                           <button type="submit" class="btn btn-primary">Update</button>
                           </div>
                        </div>
                        </form>
                     </div>
                  </div>
                  <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                           </div>
                           <div class="modal-body">
                              <div class="row">
                                 <form action="<%$base_url%>delete_po" method="POST">
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                          <label for=""><b>Are you sure you want to delete this invoice?</b> </label>
                                          <input type="hidden" name="id" value="<%$new_sales[0]->id%>" required class="form-control">
                                          <input type="hidden" name="status" value="reject" required class="form-control">
                                          <input type="hidden" name="table_name" value="new_po" required class="form-control">
                                       </div>
                                    </div>
                              </div>
                           </div>
                           <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary">Update</button>
                           </div>
                        </div>
                        </form>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
            <div class="card mt-3">
            
                  <div class="table-responsive text-nowrap">
                     <table  width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped scrollable" style="border-collapse: collapse;" border-color="#e1e1e1" id="part_data">
                        <thead>
                           <tr>
                              <th>Sr No</th>
                              <th>Part Number</th>
                              <th>Part Description</th>
                              <th>Tax Structure</th>
                              <th>UOM</th>
                              <th>QTY</th>
                              <th>Price</th>
                              <%if $new_sales[0]->status == "pending"%>
                              <th>Actions</th>
                              <%/if%>
                              <th>CGST</th>
                              <th>SGST</th>
                              <th>IGST</th>
                              <th>TCS</th>
                              <th>Sub Total</th>
                              <th>GST</th>
                              <th>Total Price</th>
                           </tr>
                        </thead>
                        <tbody>
                           <%if $po_parts%>
                           <%foreach from=$po_parts item=p key=srNo%>
                           <%assign var="subtotal" value=$p->total_rate - $p->gst_amount%>
                           <%assign var="row_total" value=$p->total_rate + $p->tcs_amount%>
                           <%assign var="final_po_amount" value=$final_po_amount + $row_total%>
                           <%assign var="rate" value=$subtotal / $p->qty%>
                           <%if $p->part_price > 0%>
                           <%assign var="rate" value=$p->part_price%>
                           <%/if%>
                           <tr>
                              <td><%$srNo + 1%></td>
                              <td><%$child_part_data[$p->part_id][0]->part_number%></td>
                              <td><%$child_part_data[$p->part_id][0]->part_description%></td>
                              <td><%$gst_structure2[$p->part_id][0]->code%></td>
                              <td><%$p->uom_id%></td>
                              <td><%$p->qty%></td>
                              <td><%number_format($rate, 2)%></td>
                              <%if $new_sales[0]->status == "pending"%>
                              <td>
                                 <button type="button" class="btn btn-danger ml-1" data-bs-toggle="modal" data-bs-target="#exampleModaldelete<%$srNo%>">
                                 Delete
                                 </button>
                                 <!-- Modal -->
                                 <div class="modal fade" id="exampleModaldelete<%$srNo%>" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                             </button>
                                          </div>
                                          <div class="modal-body">
                                             <form action="<%$base_url%>delete" method="POST" class="delete_form">
                                                <div class="row">
                                                   <div class="col-lg-12">
                                                      <div class="form-group">
                                                         <label for=""><b>Are You Sure Want To Delete This?</b> </label>
                                                         <input type="hidden" name="id" value="<%$p->id%>" required class="form-control">
                                                         <input type="hidden" name="table_name" value="sales_parts" required class="form-control">
                                                      </div>
                                                   </div>
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">Update</button>
                                          </div>
                                       </div>
                                    </div>
                                    </form>
                                 </div>
                              </td>
                              <%/if%>
                              <td><%number_format($p->cgst_amount, 2)%></td>
                              <td><%number_format($p->sgst_amount, 2)%></td>
                              <td><%number_format($p->igst_amount, 2)%></td>
                              <td><%number_format($p->tcs_amount, 2)%></td>
                              <td><%number_format($subtotal, 2)%></td>
                              <td><%$p->gst_amount%></td>
                              <td><%number_format($row_total, 2)%></td>
                           </tr>
                           <%/foreach%>
                           <%/if%>
                        </tbody>
                        <tfoot>
                           <%assign var="noOfColumns" value=13%>
                           <%if $new_sales[0]->status == "pending"%>
                           <%assign var="noOfColumns" value=14%>
                           <%/if%>
                           <%if $po_parts%>
                           <tr >
                              <th colspan='<%$noOfColumns%>' style="width: 100%;">Total</th>
                              <th style="width: 7.5%;"><%number_format($final_po_amount, 2)%></th>
                           </tr>
                           <%/if%>
                        </tfoot>
                     </table>
                  </div>
                  <!-- /.card-body -->
              
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
   $(document).ready(function() {
       var id = $("#customer_tracking").val();
       $('#new_po_id').val(id);
       var salesno = $('#sales_number').val();
       $.ajax({
           url: '<%$base_url%>Newcontroller/get_po_sales_parts',
           type: "POST",
           data: {
               id: id,
               salesno: salesno
           },
           cache: false,
           beforeSend: function() {
               // Show the loading icon
               $("#loading-overlay").show();
           },
           success: function(response) {
               if (response) {
                   $('#part_id').html(response);
               } else {
                   $('#part_id').html(response);
               }
           },
           complete: function() {
               // Hide the loading overlay
               $("#loading-overlay").hide();
           }
       });
   
       $("#customer_tracking").change(function() {
           var id = $("#customer_tracking").val();
           var salesno = $('#sales_number').val();
           $.ajax({
               url: '<%$base_url%>Newcontroller/get_po_sales_parts',
               type: "POST",
               data: {
                   id: id,
                   salesno: salesno
               },
               cache: false,
               beforeSend: function() {
                   // Show the loading icon
                   $("#loading-overlay").show();
               },
               success: function(response) {
                   if (response) {
                       $('#part_id').html(response);
                   } else {
                       $('#part_id').html(response);
                   }
               },
               complete: function() {
                   // Hide the loading overlay
                   $("#loading-overlay").hide();
               }
           });
       });
   
       $("#printSticker").click(function() {
           var salesId = $('#sales_primary_id').val();
           var invoice_no = $('#invoice_no').val();
           var invoice_date = $('#invoice_date').val();
           $.ajax({
               url: '<%$base_url%>SalesController/getSalesPartPackaging_details',
               type: "POST",
               data: {
                   salesId: salesId,
                   invoice_no: invoice_no,
                   invoice_date: invoice_date
               },
               cache: false,
               beforeSend: function() {},
               success: function(response) {
                let res = JSON.parse(response);
                   if (res.html) {
                       $('#observationTableData').html(res.html);
                   } else {
                      $('#observationTableData').html(res.html);
                   }
               }
           });
       });
   
       $("#salesForm").validate({
           ignore: [],
           rules: {
               po_id: {
                   required: true
               },
               part_id: {
                   required: true
               },
               qty: {
                   required: true,
                   number: true
               }
           },
           messages: {
               po_id: {
                   required: "Please select a PO."
               },
               part_id: {
                   required: "Please select a part."
               },
               qty: {
                   required: "Please enter quantity.",
                   number: "Please enter a valid quantity."
               }
           },
           errorPlacement: function(error, element) {
               error.addClass('error');
               element.closest('.form-group').append(error);
           },
           onkeyup: function(element) {
               $(element).valid();
           },
           onchange: function(element) {
               $(element).valid();
           },
           submitHandler: function(form) {
               event.preventDefault(); // Prevent default form submission
   
               $.ajax({
                   url: form.action,
                   type: form.method,
                   data: $(form).serialize(),
                   success: function(response) {
                       // Handle the successful response here
                      if(response != '' && response != null && typeof response != 'undefined'){
                           let res = JSON.parse(response);
                           console.log(res);
                           if(res['sucess'] == 1){
                               toastr.success(res['msg']);
                               setTimeout(() => {
                                   window.location.reload();
                               }, 1000);
                           }else{
                               toastr.error(res['msg']);
                           }
                      }
                   },
                   error: function(xhr, status, error) {
                       // Handle the error response here
                       alert("An error occurred: " + xhr.responseText);
                   }
               });
           }
       });
   
       // Manually trigger validation on select2 elements change
       $('.select2').on('change', function() {
           $(this).valid();
       });
   
       $('.delete_form').on('submit', function(event) {
       event.preventDefault(); // Prevent the form from submitting via the browser
       var form = $(this);
       var formData = form.serialize();
   
       $.ajax({
           type: 'POST',
           url: form.attr('action'),
           data: formData,
           success: function(response) {
               // Handle success
               toastr.success('part deleted sucessfully.')
               // Optionally, you can close the modal or refresh the page or element
               setTimeout(() => {
                   window.location.reload();
               }, 1000);
           },
           error: function(xhr, status, error) {
               // Handle error
               toastr.success('unable to delete part.')
           }
       });
   });
   
   });
</script>