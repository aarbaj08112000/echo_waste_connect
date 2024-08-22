<?php
/* Smarty version 4.3.2, created on 2024-08-21 17:07:29
  from '/var/www/html/extra_work/erp_converted/application/views/templates/quality/view_rejection_sales_invoice_by_id.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c5d179ecbba3_04704520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cdfa3dc52b63b427504c12c94c6f5cc6b15ffc2' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/quality/view_rejection_sales_invoice_by_id.tpl',
      1 => 1724240193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c5d179ecbba3_04704520 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
        <a class="btn btn-seconday" href="<?php echo base_url('rejection_invoices');?>
">
          <i class="ti ti-arrow-left" title="Back"></i></a>
        </div>

        <!-- Main content -->
        <div class="card p-0 mt-4">
          <div class="card-header">
            <?php if (($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending")) {?>
            <form action="<?php echo base_url('update_rejection_sales_invoice');?>
" method="POST" class="update_rejection_sales_invoice">
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group mb-3">
                    <label for="" class="form-label">Rejection Invoice No</label>
                    <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->rejection_invoice_no;?>
" class="form-control">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" required class="form-control">
                    <input type="hidden" name="rejection_invoice_no" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->rejection_invoice_no;?>
">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group mb-3">
                    <label for="" class="form-label">Customer Name</label>
                    <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->customer_name;?>
" class="form-control">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group mb-3">
                    <label for="" class="form-label">Customer Debit Note Date</label>
                    <input max="<?php echo date('Y-m-d');?>
" type="date"
                    value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->debit_note_date;?>
" name="customer_debit_note_date"
                    class="form-control">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group mb-3">
                    <label for="" class="form-label">Customer Debit Note No</label>
                    <input type="text" name="customer_debit_note_no" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->document_number;?>
"  class="form-control">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group mb-3">
                    <label for="" class="form-label">Client Sales Invoice No</label>
                    <input type="text"  name="client_sales_invoice_no" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->sales_invoice_number;?>
" placeholder="Client Sales Invoice No"  class="form-control">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group mb-3">
                    <label for="" class="form-label">Client Invoice Date</label>
                    <input max="<?php echo date('Y-m-d');?>
" type="date"
                    value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->client_invoice_date;?>
" name="client_invoice_date"                                                     class="form-control">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group mb-3">
                    <label for="" class="form-label">Basic Amount</label>
                    <input type="test" step="any" min="0.00" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->debit_basic_amt;?>
" required name="debit_basic_amt"
                    class="form-control onlyNumericInput">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group mb-3">
                    <label for="" class="form-label">GST Amount</label>
                    <input type="text" step="any" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->debit_gst_amt;?>
" required min="0.00" name="debit_gst_amt"
                    class="form-control onlyNumericInput">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group mb-3">
                    <label for="" class="form-label">Remark</label>
                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->remark;?>
" name="remark" placeholder="Enter Remark" class="form-control">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group mb-3">
                    <label for="" class="form-label">Rejection Reason</label>
                    <select name="rejection_reason" id=""
                    class="form-control select2">
                    <option value="NA">NA</option>
                    <?php if (($_smarty_tpl->tpl_vars['reject_remark']->value)) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reject_remark']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
" <?php if (($_smarty_tpl->tpl_vars['new_sales']->value[0]->rejection_reasonky == $_smarty_tpl->tpl_vars['r']->value->id)) {?>selected<?php }?>>
                      <?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>

                    </option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                  </select>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group mb-3">
                  <label for="" class="form-label">Current Status</label>
                  <input type="text" disabled
                  value="<?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == 'accpet') {?>Released<?php } else {
echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->status;
}?>" class="form-control">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <button type="submit" class="btn btn-primary mt-4">Update</button>
                </div>
              </div>
            </div>
          </form>
          <?php } else { ?>
              
                  <div class="tgdp-rgt-tp-sect">
                    <p class="tgdp-rgt-tp-ttl">Rejection Invoice No</p>
                    <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->rejection_invoice_no;?>
</p>
                  </div>
                  <div class="tgdp-rgt-tp-sect">
                    <p class="tgdp-rgt-tp-ttl">Customer Name</p>
                    <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->customer_name;?>
</p>
                  </div>
                  <div class="tgdp-rgt-tp-sect">
                    <p class="tgdp-rgt-tp-ttl">Customer Debit Note Date</p>
                    <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->debit_note_date;?>
</p>
                  </div>
                  <div class="tgdp-rgt-tp-sect">
                    <p class="tgdp-rgt-tp-ttl">Customer Debit Note No</p>
                    <p class="tgdp-rgt-tp-txt"><?php echo display_no_character($_smarty_tpl->tpl_vars['new_sales']->value[0]->document_number);?>
</p>
                  </div>
                  <div class="tgdp-rgt-tp-sect">
                    <p class="tgdp-rgt-tp-ttl">Client Sales Invoice No</p>
                    <p class="tgdp-rgt-tp-txt"><?php echo display_no_character($_smarty_tpl->tpl_vars['new_sales']->value[0]->sales_invoice_number);?>
</p>
                  </div>
                  <div class="tgdp-rgt-tp-sect">
                    <p class="tgdp-rgt-tp-ttl">Client Invoice Date</p>
                    <p class="tgdp-rgt-tp-txt"><?php echo display_no_character($_smarty_tpl->tpl_vars['new_sales']->value[0]->client_invoice_date);?>
</p>
                  </div>
                  <div class="tgdp-rgt-tp-sect">
                    <p class="tgdp-rgt-tp-ttl">Basic Amount</p>
                    <p class="tgdp-rgt-tp-txt"><?php echo display_no_character($_smarty_tpl->tpl_vars['new_sales']->value[0]->debit_basic_amt);?>
</p>
                  </div>
                  <div class="tgdp-rgt-tp-sect">
                    <p class="tgdp-rgt-tp-ttl">GST Amount</p>
                    <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->debit_gst_amt;?>
</p>
                  </div>
                  <div class="tgdp-rgt-tp-sect">
                    <p class="tgdp-rgt-tp-ttl">Remark</p>
                    <p class="tgdp-rgt-tp-txt"><?php echo display_no_character($_smarty_tpl->tpl_vars['new_sales']->value[0]->remark);?>
</p>
                  </div>
                  <div class="tgdp-rgt-tp-sect">
                    <p class="tgdp-rgt-tp-ttl">Rejection Reason</p>
                    <p class="tgdp-rgt-tp-txt">
                      <?php if (($_smarty_tpl->tpl_vars['reject_remark']->value)) {?>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reject_remark']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                        <?php if (($_smarty_tpl->tpl_vars['new_sales']->value[0]->rejection_reasonky == $_smarty_tpl->tpl_vars['r']->value->id)) {?>
                            <?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>

                        <?php }?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      <?php }?>
                    </p>
                  </div>
                  <div class="tgdp-rgt-tp-sect">
                    <p class="tgdp-rgt-tp-ttl">Current Status</p>
                    <p class="tgdp-rgt-tp-txt"><?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == 'accpet') {?>Released<?php } else {
echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->status;
}?></p>
                  </div>
                  
                
               
              
          <?php }?>
        </div>
      </div>
      <div class="card p-0 mt-4">
        <div class="card-header">
          <div class="row">
            <div class="col-lg-5">
              <div class="form-group">
                <form action="<?php echo base_url('add_parts_rejection_sales_invoice');?>
" method="post" class="add_parts_rejection_sales_invoice">
                  <label for="">Select Part Number / Description
                    Tax Structure <span class="text-danger">*</span> </label>
                    <select name="part_id" id="" class="form-control select2">
                      <?php if (($_smarty_tpl->tpl_vars['customer_part']->value)) {?>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_part']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
 / <?php echo $_smarty_tpl->tpl_vars['c']->value->part_description;?>

                      </option>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      <?php }?>
                    </select>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="">Enter Qty <span class="text-danger">*</span> </label>
                    <input type="text" name="qty" placeholder="Enter QTY " required class="form-control onlyNumericInput">
                    <input type="hidden" name="sales_id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" placeholder="Enter QTY " required class="form-control">
                    <input type="hidden" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->id;?>
" placeholder="Enter QTY " required class="form-control">
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
                    <?php if (($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending")) {?>
                    <button type="submit" class="btn btn-primary mt-4">Add</button>
                    <?php }?>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card-header">
            <?php if (($_smarty_tpl->tpl_vars['parts_rejection_sales_invoice']->value)) {?>
            <?php if (($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending")) {?>
            <?php if (($_smarty_tpl->tpl_vars['user_type']->value == 'admin' || $_smarty_tpl->tpl_vars['user_type']->value == 'Admin')) {?>
            <button type="button" class="btn btn-danger ml-1" data-bs-toggle="modal" data-bs-target="#lock">
              Lock Invoice
            </button>
            <?php } else { ?>

            <?php }?>
            <?php }?>
            <?php }?>
            <?php if (($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "lock")) {?>
            <?php if (($_smarty_tpl->tpl_vars['user_type']->value == 'admin' || $_smarty_tpl->tpl_vars['user_type']->value == 'Admin')) {?>
            <!-- <button type="button" class="btn btn-success ml-1" data-toggle="modal" data-target="#accpet">
            Accept (Released) Invoice
          </button>
          <button type="button" class="btn btn-danger ml-1" data-toggle="modal" data-target="#delete">
          Reject (delete) Invoice
        </button> -->
        <?php }?>
        <?php } else { ?>
        <?php if (($_smarty_tpl->tpl_vars['new_sales']->value[0]->status != "pending")) {?>
        <button type="button" disabled class="btn btn-success ml-1" data-bs-toggle="modal" data-bs-target="#accpet">
          Rejection Invoice Already Locked
        </button>
        <?php }?>
        <?php }?>
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
                  <form action="<?php echo base_url('accept_po');?>
" method="POST">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label for=""><b>Are You Sure Want To Released This
                          PO?</b> </label>
                          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" required class="form-control">
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
                    <form action="<?php echo base_url('lock_parts_rejection_sales_invoice');?>
" method="POST">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label for=""><b>Are You Sure Want To Lock This
                            Invoice?</b> </label>
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" required class="form-control">
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
                      <form action="<?php echo base_url('delete_po');?>
" method="POST">
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label for=""><b>Are You Sure Want To Delete This
                              PO?</b> </label>
                              <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" required class="form-control">
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
                  <?php if (($_smarty_tpl->tpl_vars['parts_rejection_sales_invoice']->value)) {?>
                  <?php $_smarty_tpl->_assignInScope('i', 1);?>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parts_rejection_sales_invoice']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->part_number;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->part_description;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->accepted_qty;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->rejected_qty;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->created_date;?>
</td>
                    <td>
                      <?php if (($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending")) {?>
                      <!-- Button trigger modal -->
                      <a type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                        <i class="ti ti-edit"></i>
                      </a>
                      <a type="button" class=" ml-1" data-bs-toggle="modal" data-bs-target="#exampleModaldelete<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                        <i class="ti ti-trash"></i>
                      </a>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Update
                              </h5>
                              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">

                              </button>
                            </div>
                             <form action="<?php echo base_url('update_parts_rejection_sales_invoice');?>
" method="POST" class="edit_part">
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="form-group">
                                   
                                      <label for="">Enter Qty <span class="text-danger">*</span>
                                      </label>
                                      <input type="text" name="qty" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
" placeholder="Enter QTY " required class="form-control">
                                      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" placeholder="Enter QTY " required class="form-control">
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
                      <div class="modal fade" id="exampleModaldelete<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" aria-labelledby="" aria-hidden="true">
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
                                <form action="<?php echo base_url('delete');?>
" method="POST" class="delete_part">
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <label for=""> <b>Are You Sure Want To
                                        Delete This ? </b> </label>
                                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" required class="form-control">
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
                        <?php } else { ?>
                        Can't Update , This  is <?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->status;?>

                        <?php }?>
                      </td>
                      <td>
                        <?php if (($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "completed" && $_smarty_tpl->tpl_vars['p']->value->status == "pending")) {?>
                        <button type="button" class="btn btn-danger float-left " data-bs-toggle="modal" data-bs-target="#acceptReject<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                          Accept/Reject </button>
                          <?php } else { ?>

                          <?php }?>
                          <div class="modal fade" id="acceptReject<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Add </h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form action="<?php echo base_url('update_accept_parts_rejection_sales_invoice');?>
" method="POST" enctype='multipart/form-data'  class="update_accept_parts_rejection_sales_invoice">
                                    <div class="row">
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <label for="">Qty</label>
                                          <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
" readonly class="form-control">
                                        </div>
                                      </div>
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <label for="">Accept Qty <span class="text-danger">*</span>
                                          </label>
                                          <input type="text" step="any" value="" max="<?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
" min="0" class="form-control onlyNumericInput" name="accepted_qty" placeholder="Enter Accepted Quantity" required>
                                        </div>
                                      </div>
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <label for="">Rejection Reason</label>
                                          <select name="rejection_reason" id="" class="form-control select2" style="width: 100%">
                                            <option value="NA">NA</option>
                                            <?php if (($_smarty_tpl->tpl_vars['reject_remark']->value)) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reject_remark']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>
">
                                              <?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>

                                            </option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php }?>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <label for="">Reject Remark</label>
                                          <input type="text" placeholder="Enter Rejection Remark If any" class="form-control" name="rejection_remark">
                                          <input type="hidden" placeholder="Enter Rejection Remark If any" readonly class="form-control" name="id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
">
                                          <input type="hidden" placeholder="Enter Rejection Remark If any" readonly class="form-control" name="qty" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
">
                                          <input type="hidden" placeholder="Enter Rejection Remark If any" readonly class="form-control" name="customer_part_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->customer_part_id;?>
">
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
                        <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                      </tbody>
                      <tfoot>
                        <?php if (($_smarty_tpl->tpl_vars['po_parts']->value)) {?>
                        <tr>
                          <th colspan="8">Total</th>
                          <th><?php echo $_smarty_tpl->tpl_vars['final_po_amount']->value;?>
</th>
                        </tr>
                        <?php }?>
                      </tfoot>
                    </table>
                  </div>
                </div>
                <!--/ Responsive Table -->
              </div>
              <!-- /.col -->


              <div class="content-backdrop fade"></div>
            </div>




            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/quality/view_rejection_sales_invoice_by_id.js"><?php echo '</script'; ?>
>
<?php }
}
