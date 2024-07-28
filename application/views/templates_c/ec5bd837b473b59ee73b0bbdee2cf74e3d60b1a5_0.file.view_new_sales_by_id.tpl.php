<?php
/* Smarty version 4.3.2, created on 2024-07-26 23:26:35
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\sales\view_new_sales_by_id.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66a3e35378c298_18027555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec5bd837b473b59ee73b0bbdee2cf74e3d60b1a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\sales\\view_new_sales_by_id.tpl',
      1 => 1721325177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a3e35378c298_18027555 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="width:1700px" class="wrapper">
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
                        <h1>View Sales Invoice</h1>
                    </div>
                    <div class="col-sm-6">
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
                          
                            <?php if (empty($_smarty_tpl->tpl_vars['e_invoice_status']->value) && ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "lock" || $_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending")) {?>
                                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
generate_new_sales_update" method="POST">
                                <div class="row">
                                </div>
                                <div id="loading-overlay">
                                        <div id="loading-spinner"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label for="">Transport Mode<span class="text-danger">*</span></label>
                                            <select name="mode" class="form-control" required>
                                                <option value="">Select</option>
                                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '1') {?>selected<?php }?>>Road</option>
                                                <option value="2" <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '2') {?>selected<?php }?>>Rail</option>
                                                <option value="3" <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '3') {?>selected<?php }?>>Air</option>
                                                <option value="4" <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '4') {?>selected<?php }?>>Ship</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">Transporter<span class="text-danger">*</span></label>
                                            <select name="transporter" required id="transporter" class="form-control select2">
                                                <option value="">Select</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transporter']->value, 'tr');
$_smarty_tpl->tpl_vars['tr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tr']->value) {
$_smarty_tpl->tpl_vars['tr']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['tr']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->transporter_id == $_smarty_tpl->tpl_vars['tr']->value->id) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['tr']->value->name;?>
 - <?php echo $_smarty_tpl->tpl_vars['tr']->value->transporter_id;?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label for="">Vehicle No.<span class="text-danger">*</span></label>
                                            <input type="text" placeholder="Enter Vehicle No" name="vehicle_number" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->vehicle_number;?>
" class="form-control"/>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label for="">Distance<span class="text-danger">*</span></label>
                                            <input type="text" placeholder="Enter Distance of Transportation" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->distance;?>
" required name="distance" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label for="">L.R No</label>
                                            <input type="text" placeholder="Enter L.R No" name="lr_number" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->lr_number;?>
" class="form-control">
                                        </div>
                                    </div>
                                     <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">PO Remark </label>
                                            <input type="text" placeholder="Enter Remark" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->remark;?>
" name="remark" class="form-control">
                                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['uri_segment_2']->value;?>
" name="id" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger mt-4">Update</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            <?php }?>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Customer Name - Part Number</label>
                                        <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->customer_name;?>
 - <?php echo $_smarty_tpl->tpl_vars['customer_part_details']->value[0]->part_number;?>
" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="">Sales Invoice Number</label>
                                        <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->sales_number;?>
" id="sales_number" class="form-control">
                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" id="sales_primary_id" class="form-control">
                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->created_date;?>
" id="invoice_date" class="form-control">
                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->sales_number;?>
" id="invoice_no" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-lg-1">
                                    <div class="form-group">
                                        <label for="">Current Status</label>
                                        <input type="text" readonly value="<?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "accpet") {?>Released<?php } else {
echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->status;
}?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <label for="">E Invoice Status</label>
                                       
                                        <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['e_invoice_status']->value[0]->Status;?>
" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="">PO Remark</label>
                                        <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->remark;?>
" class="form-control">
                                    </div>
                                </div>
                            </div>
                             
                            <div class="row">
                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <a class="btn btn-dark" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
sales_invoice_released">< Back</a>
                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "lock" || $_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending") {?>
                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
view_generate_sales_invoice/<?php echo $_smarty_tpl->tpl_vars['uri_segment_2']->value;?>
" target="_blank">View Original</a>
                                    </div>
                                </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "lock") {?>
                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
generate_sales_invoice/<?php echo $_smarty_tpl->tpl_vars['uri_segment_2']->value;?>
/ORIGINAL_FOR_RECIPIENT">Original</a>
                                    </div>
                                </div>
                                    
                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
generate_sales_invoice/<?php echo $_smarty_tpl->tpl_vars['uri_segment_2']->value;?>
/DUPLICATE_FOR_TRANSPORTER">Duplicate</a>
                                    </div>
                                </div>

                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
generate_sales_invoice/<?php echo $_smarty_tpl->tpl_vars['uri_segment_2']->value;?>
/TRIPLICATE_FOR_SUPPLIER">Triplicate</a>
                                    </div>
                                </div>

                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
generate_sales_invoice/<?php echo $_smarty_tpl->tpl_vars['uri_segment_2']->value;?>
/ACKNOWLEDGEMENT_COPY">Acknowledge</a>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
generate_sales_invoice/<?php echo $_smarty_tpl->tpl_vars['uri_segment_2']->value;?>
/EXTRA_COPY">Extra Invoice</a>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                                    data-target="#printForTally" id="printSticker">
                                                    Packaging Sticker
                                        </button>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="printForTally" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Packaging Stickers</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <section class="content" id="observationTableData">
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>&nbsp;</div>
                            </div>
                                    
                            <!-- Print selection -->
                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
print_sales_invoice/<?php echo $_smarty_tpl->tpl_vars['uri_segment_2']->value;?>
" method="post">
                                <div class="row">
                                    <div class="col-lg-1">
                                        <div class="form-group">    
                                            <input type="checkbox" id="original" name="interests[]" value="ORIGINAL_FOR_RECIPIENT">
                                            <label for="original">Original</label><br>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="form-group">    
                                            <input type="checkbox" id="duplicate" name="interests[]" value="DUPLICATE_FOR_TRANSPORTER">
                                            <label for="duplicate">Duplicate</label><br>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="form-group">
                                            <input type="checkbox" id="triplicate" name="interests[]" value="TRIPLICATE_FOR_SUPPLIER">
                                            <label for="triplicate">Triplicate</label><br>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="form-group">   
                                            <input type="checkbox" id="acknowledge" name="interests[]" value="ACKNOWLEDGEMENT_COPY">
                                            <label for="acknowledge">Acknowledge</label><br>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
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
                            <?php }?>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending") {?>
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
add_sales_parts" method="post">
                                            <label for="">Select PO no/ PO start date/ PO end date/ PO amendment no<span class="text-danger">*</span> </label>
                                            <select name="po_id" id="customer_tracking" required class="form-control select2">
                                                <?php if ($_smarty_tpl->tpl_vars['po_parts']->value) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_tracking']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['po_parts']->value[0]->po_number == $_smarty_tpl->tpl_vars['c']->value->po_number) {?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->po_number;?>
 // <?php echo $_smarty_tpl->tpl_vars['c']->value->po_start_date;?>
 // <?php echo $_smarty_tpl->tpl_vars['c']->value->po_end_date;?>
 //<?php echo $_smarty_tpl->tpl_vars['c']->value->po_amendment_number;?>
</option>
                                                        <?php }?>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php } else { ?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_tracking']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                        <option <?php if ($_smarty_tpl->tpl_vars['po_parts']->value && $_smarty_tpl->tpl_vars['po_parts']->value[0]->po_id == $_smarty_tpl->tpl_vars['c']->value->id) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->po_number;?>
 // <?php echo $_smarty_tpl->tpl_vars['c']->value->po_start_date;?>
 // <?php echo $_smarty_tpl->tpl_vars['c']->value->po_end_date;?>
 // <?php echo $_smarty_tpl->tpl_vars['c']->value->po_amendment_number;?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php }?>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Select Part NO // Description // FG Stock // Rate // Packing QTY <span class="text-danger">*</span> </label>
                                        <input type="hidden" readonly id="customer_tracking_id" name="customer_tracking_id" class="form-control">
                                        <select name="part_id" id="part_id" required class="form-control select2">
                                            <option value=''>Please select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <label for=""><br>Enter Qty<span class="text-danger">*</span> </label>
                                        <input type="number" step="any" name="qty" placeholder="Enter QTY" required class="form-control">
                                        <input type="hidden" name="sales_number" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->sales_number;?>
" placeholder="Enter QTY " required class="form-control">
                                        <input type="hidden" name="sales_id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" placeholder="Enter QTY " required class="form-control">
                                        <input type="hidden" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->id;?>
" placeholder="Enter QTY " required class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group mt-2">
                                        <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending") {?>
                                            <br><button type="submit" class="btn btn-info btn mt-3">Add</button>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending") {?>
                        <div class="card-header">
                            <?php if ($_smarty_tpl->tpl_vars['po_parts']->value) {?>
                                <?php if ($_smarty_tpl->tpl_vars['session_type']->value == 'admin' || $_smarty_tpl->tpl_vars['session_type']->value == 'Admin' || $_smarty_tpl->tpl_vars['session_type']->value == 'Sales') {?>
                                    <?php $_smarty_tpl->_assignInScope('flag', 0);?>
                                    <?php $_smarty_tpl->_assignInScope('final_po_amount', 0);?>
                                    <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['po_parts']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                                        <?php if (empty($_smarty_tpl->tpl_vars['p']->value->tax_id)) {?>
                                            <?php $_smarty_tpl->_assignInScope('flag', 1);?>
                                        <?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php if ($_smarty_tpl->tpl_vars['flag']->value == 0) {?>
                                        <button type="button" class="btn btn-danger ml-1" data-toggle="modal" data-target="#lock">
                                            Lock Invoice
                                        </button>
                                        <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending") {?>
                                            <button type="button" class="btn btn-danger ml-1" data-toggle="modal" data-target="#deleteInvoice">
                                                Delete Invoice
                                            </button>
                                        <?php }?>
                                        <!-- delete model -->
                                        <div class="modal fade" id="deleteInvoice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Invoice</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
delete_sale_invoice" method="POST">
                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label for=""><b>Are you sure want to Delete this invoice ?</b> </label>
                                                                        <input type="hidden" name="sales_id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" required class="form-control">
                                                                        <input type="hidden" name="status" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->status;?>
" required class="form-control">
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary">Delete</button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class='alert alert-danger' style='width:400px'>Error : Check GST Of All Parts, to lock this invoice</div>
                                    <?php }?>
                                <?php }?>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "lock") {?>
                                <?php if ($_smarty_tpl->tpl_vars['session_type']->value == 'admin' || $_smarty_tpl->tpl_vars['session_type']->value == 'Admin') {?>
                                    <button type="button" disabled class="btn btn-success ml-1" data-toggle="modal">
                                        Invoice already released
                                    </button>
                                <?php }?>
                            <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status != "pending" && $_smarty_tpl->tpl_vars['new_sales']->value[0]->status != "Cancelled") {?>
                                    <button type="button" disabled class="btn btn-success ml-1" data-toggle="modal">
                                        Invoice already released
                                    </button>
                                <?php } elseif ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "Cancelled") {?>
                                    <button type="button" disabled class="btn btn-success ml-1" data-toggle="modal">
                                        Invoice already Cancelled
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
                                                            <label for=""><b>Are you sure want to release this invoice?</b> </label>
                                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" required class="form-control">
                                                            <input type="hidden" name="status" value="accpet" required class="form-control">
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Lock Model -->
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
                                                            <label for=""><b>Are you sure you want to Lock this invoice?</b> </label>
                                                            <input type="hidden" name="new_po_id" id="new_po_id" value="" required class="form-control">
                                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" required class="form-control">
                                                            <input type="hidden" name="status" value="lock" required class="form-control">
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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
                                                            <label for=""><b>Are you sure you want to delete this invoice?</b> </label>
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
                                        <th>Tax Structure</th>
                                        <th>UOM</th>
                                        <th>QTY</th>
                                        <th>Price</th>
                                        <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending") {?>
                                        <th>Actions</th>
                                        <?php }?>
                                        <th>CGST</th>
                                        <th>SGST</th>
                                        <th>IGST</th>
                                        <th>TCS</th>
                                        <th>Sub Total</th>
                                        <th>GST</th>
                                        <th>Total Price</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Part Number</th>
                                        <th>Part Description</th>
                                        <th>Tax Structure</th>
                                        <th>UOM</th>
                                        <th>QTY</th>
                                        <th>Price</th>
                                        <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending") {?>
                                        <th>Actions</th>
                                        <?php }?>
                                        <th>CGST</th>
                                        <th>SGST</th>
                                        <th>IGST</th>
                                        <th>TCS</th>
                                        <th>Sub Total</th>
                                        <th>GST</th>
                                        <th>Total Price</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                               <?php if ($_smarty_tpl->tpl_vars['po_parts']->value) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['po_parts']->value, 'p', false, 'srNo');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['srNo']->value => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                                        <?php $_smarty_tpl->_assignInScope('subtotal', $_smarty_tpl->tpl_vars['p']->value->total_rate-$_smarty_tpl->tpl_vars['p']->value->gst_amount);?>
                                        <?php $_smarty_tpl->_assignInScope('row_total', $_smarty_tpl->tpl_vars['p']->value->total_rate+$_smarty_tpl->tpl_vars['p']->value->tcs_amount);?>
                                        <?php $_smarty_tpl->_assignInScope('final_po_amount', $_smarty_tpl->tpl_vars['final_po_amount']->value+$_smarty_tpl->tpl_vars['row_total']->value);?>
                                        <?php $_smarty_tpl->_assignInScope('rate', $_smarty_tpl->tpl_vars['subtotal']->value/$_smarty_tpl->tpl_vars['p']->value->qty);?>
                                        <?php if ($_smarty_tpl->tpl_vars['p']->value->part_price > 0) {?>
                                            <?php $_smarty_tpl->_assignInScope('rate', $_smarty_tpl->tpl_vars['p']->value->part_price);?>
                                        <?php }?>

                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['srNo']->value+1;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[$_smarty_tpl->tpl_vars['p']->value->part_id][0]->part_number;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[$_smarty_tpl->tpl_vars['p']->value->part_id][0]->part_description;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['gst_structure2']->value[$_smarty_tpl->tpl_vars['p']->value->part_id][0]->code;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['p']->value->uom_id;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
</td>
                                            <td><?php echo number_format($_smarty_tpl->tpl_vars['rate']->value,2);?>
</td>
                                            <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending") {?>
                                            <td>
                                                <button type="button" class="btn btn-danger ml-1" data-toggle="modal" data-target="#exampleModaldelete<?php echo $_smarty_tpl->tpl_vars['srNo']->value;?>
">
                                                    Delete
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModaldelete<?php echo $_smarty_tpl->tpl_vars['srNo']->value;?>
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
                                                                                <label for=""><b>Are You Sure Want To Delete This?</b> </label>
                                                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" required class="form-control">
                                                                                <input type="hidden" name="table_name" value="sales_parts" required class="form-control">
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
                                            </td>
                                            <?php }?>
                                            <td><?php echo number_format($_smarty_tpl->tpl_vars['p']->value->cgst_amount,2);?>
</td>
                                            <td><?php echo number_format($_smarty_tpl->tpl_vars['p']->value->sgst_amount,2);?>
</td>
                                            <td><?php echo number_format($_smarty_tpl->tpl_vars['p']->value->igst_amount,2);?>
</td>
                                            <td><?php echo number_format($_smarty_tpl->tpl_vars['p']->value->tcs_amount,2);?>
</td>
                                            <td><?php echo number_format($_smarty_tpl->tpl_vars['subtotal']->value,2);?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['p']->value->gst_amount;?>
</td>
                                            <td><?php echo number_format($_smarty_tpl->tpl_vars['row_total']->value,2);?>
</td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                                </tbody>
                                <tfoot>
                                    <?php $_smarty_tpl->_assignInScope('noOfColumns', 13);?>
                                    <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending") {?>
                                        <?php $_smarty_tpl->_assignInScope('noOfColumns', 14);?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['po_parts']->value) {?>
                                        <tr>
                                            <th colspan='<?php echo $_smarty_tpl->tpl_vars['noOfColumns']->value;?>
'>Total</th>
                                            <th><?php echo number_format($_smarty_tpl->tpl_vars['final_po_amount']->value,2);?>
</th>
                                        </tr>
                                    <?php }?>
                                </tfoot>
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
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        var id = $("#customer_tracking").val();
        $('#new_po_id').val(id);
        var salesno = $('#sales_number').val();
        $.ajax({
            url: '{$site_url}Newcontroller/get_po_sales_parts',
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
                url: '{$site_url}Newcontroller/get_po_sales_parts',
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
                url: '{$site_url}SalesController/getSalesPartPackaging_details',
                type: "POST",
                data: {
                    salesId: salesId,
                    invoice_no: invoice_no,
                    invoice_date: invoice_date
                },
                cache: false,
                beforeSend: function() {},
                success: function(response) {
                    if (response) {
                        $('#observationTableData').html(response);
                    } else {
                       $('#observationTableData').html(response);
                    }
                }
            });
        });
    });
<?php echo '</script'; ?>
>

<?php }
}
