<?php
/* Smarty version 4.3.2, created on 2024-06-18 16:05:27
  from '/var/www/html/extra/erp_converted/application/views/templates/sales/view_rejection_sales_invoice_by_id.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_667162efe83c75_91912511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b11dbae3b88855cd0a9a3e2a3627b7e28965b58' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/sales/view_rejection_sales_invoice_by_id.tpl',
      1 => 1718706917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667162efe83c75_91912511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/extra/erp_converted/application/third_party/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a class="btn btn-dark" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
rejection_invoices">
                            < Back </a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
dashboard">Home</a></li>
                            <li class="breadcrumb-item active"></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- /.card -->
                        <div class="card">
                            <div class="card-header">
                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
update_rejection_sales_invoice" method="POST">  
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Rejection Invoice No</label>
                                            <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->rejection_invoice_no;?>
" class="form-control">
                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" required class="form-control">
                                            <input type="hidden" name="rejection_invoice_no" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->rejection_invoice_no;?>
">

                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Customer Name</label>
                                            <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->customer_name;?>
" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Customer Debit Note Date</label>
                                            <input max="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
" type="date"
                                                value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->debit_note_date;?>
" name="customer_debit_note_date" 
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Customer Debit Note No</label>
                                            <input type="text" name="customer_debit_note_no" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->document_number;?>
" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Client Sales Invoice No</label>
                                            <input type="text" name="client_sales_invoice_no" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->sales_invoice_number;?>
" placeholder="Client Sales Invoice No" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Client Invoice Date</label>
                                            <input max="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
" type="date"
                                                value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->client_invoice_date;?>
" name="client_invoice_date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Basic Amount</label>
                                            <input type="number" step="any" min="0.00" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->debit_basic_amt;?>
" required name="debit_basic_amt" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">GST Amount</label>
                                            <input type="number" step="any" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->debit_gst_amt;?>
" required min="0.00" name="debit_gst_amt" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Remark</label>
                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->remark;?>
" name="remark" placeholder="Enter Remark" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Rejection Reason</label>
                                            <select name="rejection_reason" id="" class="form-control select2">
                                                <option value="NA">NA</option>
                                                <?php if ($_smarty_tpl->tpl_vars['reject_remark']->value) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reject_remark']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->rejection_reasonky == $_smarty_tpl->tpl_vars['r']->value->id) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>
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
                                            <label for="">Current Status</label>
                                            <input type="text" disabled value="<?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == 'accpet') {?>Released<?php } else {
echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->status;
}?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary mt-4">Update</button>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                            </form>
                            
                            <div class="card-header">
                                <!-- Modal -->
                                <div class="modal fade" id="accpet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
accept_po" method="POST">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for=""><b>Are You Sure Want To Released This PO?</b></label>
                                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" required class="form-control">
                                                                <input type="hidden" name="status" value="accpet" required class="form-control">
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
lock_parts_rejection_sales_invoice" method="POST">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for=""><b>Are You Sure Want To Lock This Invoice?</b></label>
                                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" required class="form-control">
                                                                <input type="hidden" name="status" value="lock" required class="form-control">
                                                            </div>
                                                       </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
delete_po" method="POST">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for=""><b>Are You Sure Want To Delete This PO?</b></label>
                                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" required class="form-control">
                                                                <input type="hidden" name="status" value="reject" required class="form-control">
                                                                <input type="hidden" name="table_name" value="new_po" required class="form-control">
                                                            </div>
                                                        </div>
                                               </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
add_parts_rejection_sales_invoice" method="post">
                                                <label for="">Select Part Number / Description Tax Structure <span class="text-danger">*</span></label>
                                                <select name="part_id" id="" class="form-control select2">
                                                    <?php if ($_smarty_tpl->tpl_vars['customer_part']->value) {?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_part']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
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
                                            <label for="">Enter Qty <span class="text-danger">*</span></label>
                                            <input type="number" name="qty" placeholder="Enter QTY" required class="form-control">
                                            <input type="hidden" name="sales_id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" required class="form-control">
                                            <input type="hidden" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->id;?>
" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Enter Remark</label>
                                            <input type="text" name="remark" placeholder="Enter Remark" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending") {?>
                                                <button type="submit" class="btn btn-info btn-lg mt-4">Add</button>
                                            <?php }?>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                         
                          
                                <div class="card-header">
                                    <?php if ($_smarty_tpl->tpl_vars['parts_rejection_sales_invoice']->value) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending" && ($_SESSION['type'] == 'admin' || $_SESSION['type'] == 'Admin')) {?>
                                            <button type="button" class="btn btn-danger ml-1" data-toggle="modal" data-target="#lock">Lock Invoice</button>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "lock" && ($_SESSION['type'] == 'admin' || $_SESSION['type'] == 'Admin')) {?>
                                            <!-- <button type="button" class="btn btn-success ml-1" data-toggle="modal" data-target="#accpet">
                                                Accept (Released) Invoice
                                            </button>
                                            <button type="button" class="btn btn-danger ml-1" data-toggle="modal" data-target="#delete">
                                                Reject (delete) Invoice
                                            </button> -->
                                        <?php } else { ?>
                                            <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status != "pending") {?>
                                                <button type="button" disabled class="btn btn-success ml-1" data-toggle="modal" data-target="#accpet">
                                                    Rejection Invoice Already Locked
                                                </button>
                                            <?php }?>
                                        <?php }?>
                                    <?php }?>
                                    <!-- Modal -->
                                    <div class="modal fade" id="accpet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
accept_po" method="POST">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label for=""><b>Are You Sure Want To Released This PO?</b></label>
                                                                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" required class="form-control">
                                                                    <input type="hidden" name="status" value="accpet" required class="form-control">
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
lock_invoice" method="POST">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label for=""><b>Are You Sure Want To Lock This Invoice?</b></label>
                                                                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" required class="form-control">
                                                                    <input type="hidden" name="status" value="lock" required class="form-control">
                                                                </div>
                                                           </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
delete_po" method="POST">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label for=""><b>Are You Sure Want To Delete This PO?</b></label>
                                                                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" required class="form-control">
                                                                    <input type="hidden" name="status" value="reject" required class="form-control">
                                                                    <input type="hidden" name="table_name" value="new_po" required class="form-control">
                                                                </div>
                                                            </div>
                                                   </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                            </form>
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
                                                <th>QTY</th>
                                                <th>Accepted QTY</th>
                                                <th>Rejected QTY</th>
                                                <th>Created Date</th>
                                                <th>Actions</th>
                                                <th>Accept/Reject</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($_smarty_tpl->tpl_vars['parts_rejection_sales_invoice']->value) {?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parts_rejection_sales_invoice']->value, 'p', false, 'i');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                                                    
                                                    <tr>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[$_smarty_tpl->tpl_vars['p']->value->part_id][0]->part_number;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[$_smarty_tpl->tpl_vars['p']->value->part_id][0]->part_description;?>
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
                                                            <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending") {?>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
">Edit</button>
                                                                <button type="button" class="btn btn-danger ml-1" data-toggle="modal" data-target="#exampleModaldelete<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
">Delete</button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12">
                                                                                        <div class="form-group">
                                                                                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
update_parts_rejection_sales_invoice" method="POST">
                                                                                                <label for="">Enter Qty <span class="text-danger">*</span></label>
                                                                                                <input type="number" name="qty" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
" placeholder="Enter QTY" required class="form-control">
                                                                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" required class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <button type="submit" class="btn btn-primary">Update</button>
                                                                            </div>
                                                                        </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModaldelete<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
delete" method="POST">
                                                                                        <div class="col-lg-12">
                                                                                            <div class="form-group">
                                                                                                <label for=""><b>Are You Sure Want To Delete This?</b></label>
                                                                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" required class="form-control">
                                                                                                <input type="hidden" name="table_name" value="parts_rejection_sales_invoice" required class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <button type="submit" class="btn btn-primary">Update</button>
                                                                            </div>
                                                                        </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            <?php } else { ?>
                                                                Can't Update, This is <?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->status;?>

                                                            <?php }?>
                                                        </td>
                                                        <td>
                                                            <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "completed" && $_smarty_tpl->tpl_vars['p']->value->status == "pending") {?>
                                                                <button type="button" class="btn btn-danger float-left" data-toggle="modal" data-target="#acceptReject<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
">Accept/Reject</button>
                                                                <div class="modal fade" id="acceptReject<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
update_parts_rejection_sales_invoice" method="POST" enctype='multipart/form-data'>
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
                                                                                                <label for="">Accept Qty <span class="text-danger">*</span></label>
                                                                                                <input type="number" step="any" value="" max="<?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
" min="0" class="form-control" name="accepted_qty" placeholder="Enter Accepted Quantity" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12">
                                                                                            <div class="form-group">
                                                                                                <label for="">Rejection Reason</label>
                                                                                                <select name="rejection_reason" id="" class="form-control select2">
                                                                                                    <option value="NA">NA</option>
                                                                                                    <?php if ($_smarty_tpl->tpl_vars['reject_remark']->value) {?>
                                                                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reject_remark']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                                                                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>
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
                                                                                                <input type="hidden" readonly class="form-control" name="id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
">
                                                                                                <input type="hidden" readonly class="form-control" name="qty" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
">
                                                                                                <input type="hidden" readonly class="form-control" name="customer_part_id" value="<?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[0]->id;?>
">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                                                    </div>
                                                                            </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php }?>
                                                        </td>
                                                    </tr>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php }?>
                                        </tbody>
                                        <tfoot>
                                            <?php if ($_smarty_tpl->tpl_vars['po_parts']->value) {?>
                                                <tr>
                                                    <th colspan="11">Total</th>
                                                    <th><?php echo $_smarty_tpl->tpl_vars['final_po_amount']->value;?>
</th>
                                                </tr>
                                            <?php }?>
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
    
<?php }
}
