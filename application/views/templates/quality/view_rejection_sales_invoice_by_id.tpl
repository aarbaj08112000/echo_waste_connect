
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">

    <nav aria-label="breadcrumb">
      <div class="sub-header-left pull-left breadcrumb">
        <h1>
          Quality
          <a hijacked="yes" href="javascript:void(0)" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Rejection Sales Invoice</em></a>
          </h1>
          <br>
          <span >Rejection Sales Invoice</span>
        </div>
      </nav>

      <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
        <a class="btn btn-seconday" href="<%base_url('rejection_invoices') %>">
          <i class="ti ti-arrow-left" title="Back"></i></a>
        </div>

        <!-- Main content -->
        <div class="card p-0 mt-4">
          <div class="card-header">
            <%if ($new_sales[0]->status == "pending") %>
            <form action="<%base_url('update_rejection_sales_invoice') %>" method="POST" class="update_rejection_sales_invoice">
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group mb-3">
                    <label for="" class="form-label">Rejection Invoice No</label>
                    <input type="text" readonly value="<%$new_sales[0]->rejection_invoice_no  %>" class="form-control">
                    <input type="hidden" name="id" value="<%$new_sales[0]->id %>" required class="form-control">
                    <input type="hidden" name="rejection_invoice_no" value="<%$new_sales[0]->rejection_invoice_no %>">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group mb-3">
                    <label for="" class="form-label">Customer Name</label>
                    <input type="text" readonly value="<%$customer[0]->customer_name %>" class="form-control">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group mb-3">
                    <label for="" class="form-label">Customer Debit Note Date</label>
                    <input max="<%date('Y-m-d') %>" type="date"
                    value="<%$new_sales[0]->debit_note_date %>" name="customer_debit_note_date"
                    class="form-control">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group mb-3">
                    <label for="" class="form-label">Customer Debit Note No</label>
                    <input type="text" name="customer_debit_note_no" value="<%$new_sales[0]->document_number %>"  class="form-control">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group mb-3">
                    <label for="" class="form-label">Client Sales Invoice No</label>
                    <input type="text"  name="client_sales_invoice_no" value="<%$new_sales[0]->sales_invoice_number %>" placeholder="Client Sales Invoice No"  class="form-control">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group mb-3">
                    <label for="" class="form-label">Client Invoice Date</label>
                    <input max="<%date('Y-m-d') %>" type="date"
                    value="<%$new_sales[0]->client_invoice_date %>" name="client_invoice_date"                                                     class="form-control">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group mb-3">
                    <label for="" class="form-label">Basic Amount</label>
                    <input type="test" step="any" min="0.00" value="<%$new_sales[0]->debit_basic_amt %>" required name="debit_basic_amt"
                    class="form-control onlyNumericInput">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group mb-3">
                    <label for="" class="form-label">GST Amount</label>
                    <input type="text" step="any" value="<%$new_sales[0]->debit_gst_amt %>" required min="0.00" name="debit_gst_amt"
                    class="form-control onlyNumericInput">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group mb-3">
                    <label for="" class="form-label">Remark</label>
                    <input type="text" value="<%$new_sales[0]->remark %>" name="remark" placeholder="Enter Remark" class="form-control">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group mb-3">
                    <label for="" class="form-label">Rejection Reason</label>
                    <select name="rejection_reason" id=""
                    class="form-control select2">
                    <option value="NA">NA</option>
                    <%if ($reject_remark) %>
                    <%foreach from=$reject_remark item=r %>
                    <option value="<%$r->id %>" <%if ($new_sales[0]->rejection_reasonky == $r->id) %>selected<%/if%>>
                      <%$r->name  %>
                    </option>
                    <%/foreach%>
                    <%/if%>
                  </select>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group mb-3">
                  <label for="" class="form-label">Current Status</label>
                  <input type="text" disabled
                  value="<%if $new_sales[0]->status == 'accpet' %>Released<%else %><%$new_sales[0]->status %><%/if%>" class="form-control">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <button type="submit" class="btn btn-primary mt-4">Update</button>
                </div>
              </div>
            </div>
          </form>
          <%else%>
              
                  <div class="tgdp-rgt-tp-sect">
                    <p class="tgdp-rgt-tp-ttl">Rejection Invoice No</p>
                    <p class="tgdp-rgt-tp-txt"><%$new_sales[0]->rejection_invoice_no  %></p>
                  </div>
                  <div class="tgdp-rgt-tp-sect">
                    <p class="tgdp-rgt-tp-ttl">Customer Name</p>
                    <p class="tgdp-rgt-tp-txt"><%$customer[0]->customer_name %></p>
                  </div>
                  <div class="tgdp-rgt-tp-sect">
                    <p class="tgdp-rgt-tp-ttl">Customer Debit Note Date</p>
                    <p class="tgdp-rgt-tp-txt"><%$new_sales[0]->debit_note_date %></p>
                  </div>
                  <div class="tgdp-rgt-tp-sect">
                    <p class="tgdp-rgt-tp-ttl">Customer Debit Note No</p>
                    <p class="tgdp-rgt-tp-txt"><%display_no_character($new_sales[0]->document_number) %></p>
                  </div>
                  <div class="tgdp-rgt-tp-sect">
                    <p class="tgdp-rgt-tp-ttl">Client Sales Invoice No</p>
                    <p class="tgdp-rgt-tp-txt"><%display_no_character($new_sales[0]->sales_invoice_number) %></p>
                  </div>
                  <div class="tgdp-rgt-tp-sect">
                    <p class="tgdp-rgt-tp-ttl">Client Invoice Date</p>
                    <p class="tgdp-rgt-tp-txt"><%display_no_character($new_sales[0]->client_invoice_date) %></p>
                  </div>
                  <div class="tgdp-rgt-tp-sect">
                    <p class="tgdp-rgt-tp-ttl">Basic Amount</p>
                    <p class="tgdp-rgt-tp-txt"><%display_no_character($new_sales[0]->debit_basic_amt) %></p>
                  </div>
                  <div class="tgdp-rgt-tp-sect">
                    <p class="tgdp-rgt-tp-ttl">GST Amount</p>
                    <p class="tgdp-rgt-tp-txt"><%$new_sales[0]->debit_gst_amt %></p>
                  </div>
                  <div class="tgdp-rgt-tp-sect">
                    <p class="tgdp-rgt-tp-ttl">Remark</p>
                    <p class="tgdp-rgt-tp-txt"><%display_no_character($new_sales[0]->remark) %></p>
                  </div>
                  <div class="tgdp-rgt-tp-sect">
                    <p class="tgdp-rgt-tp-ttl">Rejection Reason</p>
                    <p class="tgdp-rgt-tp-txt">
                      <%if ($reject_remark) %>
                      <%foreach from=$reject_remark item=r %>
                        <%if ($new_sales[0]->rejection_reasonky == $r->id) %>
                            <%$r->name  %>
                        <%/if%>
                      <%/foreach%>
                      <%/if%>
                    </p>
                  </div>
                  <div class="tgdp-rgt-tp-sect">
                    <p class="tgdp-rgt-tp-ttl">Current Status</p>
                    <p class="tgdp-rgt-tp-txt"><%if $new_sales[0]->status == 'accpet' %>Released<%else %><%$new_sales[0]->status %><%/if%></p>
                  </div>
                  
                
               
              
          <%/if%>
        </div>
      </div>
      <div class="card p-0 mt-4">
        <div class="card-header">
          <div class="row">
            <div class="col-lg-5">
              <div class="form-group">
                <form action="<%base_url('add_parts_rejection_sales_invoice') %>" method="post" class="add_parts_rejection_sales_invoice">
                  <label for="">Select Part Number / Description
                    Tax Structure <span class="text-danger">*</span> </label>
                    <select name="part_id" id="" class="form-control select2">
                      <%if ($customer_part) %>
                      <%foreach from=$customer_part item=c %>
                      <option value="<%$c->id %>">
                        <%$c->part_number %> / <%$c->part_description %>
                      </option>
                      <%/foreach %>
                      <%/if%>
                    </select>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="">Enter Qty <span class="text-danger">*</span> </label>
                    <input type="text" name="qty" placeholder="Enter QTY " required class="form-control onlyNumericInput">
                    <input type="hidden" name="sales_id" value="<%$new_sales[0]->id %>" placeholder="Enter QTY " required class="form-control">
                    <input type="hidden" name="customer_id" value="<%$customer[0]->id %>" placeholder="Enter QTY " required class="form-control">
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="">Enter Remark </label>
                    <input type="text" name="remark" placeholder="Enter Remark " class="form-control">
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group">
                    <%if ($new_sales[0]->status == "pending") %>
                    <button type="submit" class="btn btn-primary mt-4">Add</button>
                    <%/if%>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card-header">
            <%if ($parts_rejection_sales_invoice) %>
            <%if ($new_sales[0]->status == "pending") %>
            <%if ($user_type == 'admin' || $user_type == 'Admin') %>
            <button type="button" class="btn btn-danger ml-1" data-bs-toggle="modal" data-bs-target="#lock">
              Lock Invoice
            </button>
            <%else %>

            <%/if%>
            <%/if%>
            <%/if%>
            <%if ($new_sales[0]->status == "lock") %>
            <%if ($user_type == 'admin' || $user_type == 'Admin') %>
            <!-- <button type="button" class="btn btn-success ml-1" data-toggle="modal" data-target="#accpet">
            Accept (Released) Invoice
          </button>
          <button type="button" class="btn btn-danger ml-1" data-toggle="modal" data-target="#delete">
          Reject (delete) Invoice
        </button> -->
        <%/if%>
        <%else %>
        <%if ($new_sales[0]->status != "pending") %>
        <button type="button" disabled class="btn btn-success ml-1" data-bs-toggle="modal" data-bs-target="#accpet">
          Rejection Invoice Already Locked
        </button>
        <%/if%>
        <%/if%>
        <!-- Modal -->
        <div class="modal fade" id="accpet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                <button type="button" class="btn-close" data-bs-bs-dismiss="modal" aria-label="Close">

                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <form action="<%base_url('accept_po') %>" method="POST">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label for=""><b>Are You Sure Want To Released This
                          PO?</b> </label>
                          <input type="hidden" name="id" value="<%$new_sales[0]->id %>" required class="form-control">
                          <input type="hidden" name="status" value="accpet" required class="form-control">
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
          <div class="modal fade" id="lock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <form action="<%base_url('lock_parts_rejection_sales_invoice') %>" method="POST">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label for=""><b>Are You Sure Want To Lock This
                            Invoice?</b> </label>
                            <input type="hidden" name="id" value="<%$new_sales[0]->id %>" required class="form-control">
                            <input type="hidden" name="status" value="lock" required class="form-control">
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
            <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <form action="<%base_url('delete_po') %>" method="POST">
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label for=""><b>Are You Sure Want To Delete This
                              PO?</b> </label>
                              <input type="hidden" name="id" value="<%$new_sales[0]->id %>" required class="form-control">
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
        <div class="card p-0 mt-4">
            <div class="table-responsive text-nowrap">
              <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped scrollable" style="border-collapse: collapse;" border-color="#e1e1e1" id="view_rejection_sales_invoice_by_id">
                <thead>
                  <tr>
                    <th>Sr No</th>
                    <th>Part Number</th>
                    <th>Part Description</th>
                    <th>QTY</th>
                    <th>Accepted QTY</th>
                    <th>Rejected QTY</th>
                    <th>Created Date</th>
                    <th>Actions</th>
                    <th>Accept/Reject</th>
                  </tr>
                </thead>
                <tbody>
                  <%if ($parts_rejection_sales_invoice) %>
                  <%assign var='i' value= 1 %>
                  <%foreach from=$parts_rejection_sales_invoice item=p %>
                  <tr>
                    <td><%$i %></td>
                    <td><%$p->part_number %></td>
                    <td><%$p->part_description %></td>
                    <td><%$p->qty %></td>
                    <td><%$p->accepted_qty %></td>
                    <td><%$p->rejected_qty %></td>
                    <td><%$p->created_date %></td>
                    <td>
                      <%if ($new_sales[0]->status == "pending") %>
                      <!-- Button trigger modal -->
                      <a type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal<%$i %>">
                        <i class="ti ti-edit"></i>
                      </a>
                      <a type="button" class=" ml-1" data-bs-toggle="modal" data-bs-target="#exampleModaldelete<%$i %>">
                        <i class="ti ti-trash"></i>
                      </a>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal<%$i %>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Update
                              </h5>
                              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">

                              </button>
                            </div>
                             <form action="<%base_url('update_parts_rejection_sales_invoice') %>" method="POST" class="edit_part">
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="form-group">
                                   
                                      <label for="">Enter Qty <span class="text-danger">*</span>
                                      </label>
                                      <input type="text" name="qty" value="<%$p->qty %>" placeholder="Enter QTY " required class="form-control">
                                      <input type="hidden" name="id" value="<%$p->id %>" placeholder="Enter QTY " required class="form-control">
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
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModaldelete<%$i %>" tabindex="-1" aria-labelledby="" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Update
                              </h5>
                              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">

                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <form action="<%base_url('delete') %>" method="POST" class="delete_part">
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <label for=""> <b>Are You Sure Want To
                                        Delete This ? </b> </label>
                                        <input type="hidden" name="id" value="<%$p->id %>" required class="form-control">
                                        <input type="hidden" name="table_name" value="parts_rejection_sales_invoice" required class="form-control">
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
                        <%else %>
                        Can't Update , This  is <%$new_sales[0]->status %>
                        <%/if%>
                      </td>
                      <td>
                        <%if ($new_sales[0]->status == "completed" && $p->status == "pending") %>
                        <button type="button" class="btn btn-danger float-left " data-bs-toggle="modal" data-bs-target="#acceptReject<%$i %>">
                          Accept/Reject </button>
                          <%else %>

                          <%/if%>
                          <div class="modal fade" id="acceptReject<%$i %>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Add </h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form action="<%base_url('update_accept_parts_rejection_sales_invoice') %>" method="POST" enctype='multipart/form-data'  class="update_accept_parts_rejection_sales_invoice">
                                    <div class="row">
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <label for="">Qty</label>
                                          <input type="text" value="<%$p->qty %>" readonly class="form-control">
                                        </div>
                                      </div>
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <label for="">Accept Qty <span class="text-danger">*</span>
                                          </label>
                                          <input type="text" step="any" value="" max="<%$p->qty %>" min="0" class="form-control onlyNumericInput" name="accepted_qty" placeholder="Enter Accepted Quantity" required>
                                        </div>
                                      </div>
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <label for="">Rejection Reason</label>
                                          <select name="rejection_reason" id="" class="form-control select2" style="width: 100%">
                                            <option value="NA">NA</option>
                                            <%if ($reject_remark) %>
                                            <%foreach from=$reject_remark item=r %>
                                            <option value="<%$r->name %>">
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
                                          <input type="text" placeholder="Enter Rejection Remark If any" class="form-control" name="rejection_remark">
                                          <input type="hidden" placeholder="Enter Rejection Remark If any" readonly class="form-control" name="id" value="<%$p->id %>">
                                          <input type="hidden" placeholder="Enter Rejection Remark If any" readonly class="form-control" name="qty" value="<%$p->qty %>">
                                          <input type="hidden" placeholder="Enter Rejection Remark If any" readonly class="form-control" name="customer_part_id" value="<%$p->customer_part_id %>">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Save
                                        changes</button>
                                      </div>
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
                      <tfoot>
                        <%if ($po_parts) %>
                        <tr>
                          <th colspan="8">Total</th>
                          <th><%$final_po_amount %></th>
                        </tr>
                        <%/if%>
                      </tfoot>
                    </table>
                  </div>
                </div>
                <!--/ Responsive Table -->
              </div>
              <!-- /.col -->


              <div class="content-backdrop fade"></div>
            </div>




            <script src="<%$base_url%>public/js/quality/view_rejection_sales_invoice_by_id.js"></script>
