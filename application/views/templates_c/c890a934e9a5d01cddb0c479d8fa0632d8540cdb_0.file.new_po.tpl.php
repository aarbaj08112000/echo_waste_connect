<?php
/* Smarty version 4.3.2, created on 2024-06-10 17:10:55
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/purchase/new_po.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6666e647b93187_20670184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c890a934e9a5d01cddb0c479d8fa0632d8540cdb' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/purchase/new_po.tpl',
      1 => 1718001380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6666e647b93187_20670184 (Smarty_Internal_Template $_smarty_tpl) {
?><div  class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
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
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <form action="<?php echo base_url('generate_new_po');?>
" method="POST">
                                                <label for="">Supplier / Number / GST <span class="text-danger">*</span> </label>
                                                <select name="supplier_id" required id="" class="form-control select2">
                                                    <?php if (count($_smarty_tpl->tpl_vars['supplier']->value) > 0) {?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplier']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
">
                                                                <?php echo $_smarty_tpl->tpl_vars['s']->value->supplier_name;?>
 / <?php echo $_smarty_tpl->tpl_vars['s']->value->gst_number;?>
 / <?php echo $_smarty_tpl->tpl_vars['s']->value->supplier_number;?>

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
                                            <label for="">PO Date</label>
                                            <input type="date" readonly value="<?php echo date('Y-m-d');?>
" required name="po_date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Expiry Date <span class="text-danger">*</span> </label>
                                            <input type="date" min="<?php echo date('Y-m-d',strtotime('+ 1 day'));?>
" required name="expiry_po_date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Remark </label>
                                            <input type="text" placeholder="Enter Remark" value="" name="remark" class="form-control">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Loading Unloading Amount <span class="text-danger">*</span> </label>
                                            <input type="number" required step="any" placeholder="Enter Loading Unloading" value="" name="loading_unloading" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                                <label for="">Loading Unloading Tax Strucutre <span class="text-danger">*</span> </label>
                                                <select name="loading_unloading_gst" required id="" class="form-control select2">
                                                    <option value="0">NA</option>
                                                    <?php if (count($_smarty_tpl->tpl_vars['gst_structure']->value) > 0) {?>
                                                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gst_structure']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                                                           <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value->code;?>

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
                                            <label for="">Freight Amount <span class="text-danger">*</span> </label>
                                            <input type="number" step="any" required placeholder="Enter Loading Unloading" value="" name="freight_amount" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                                <label for="">Freight Tax Strucutre <span class="text-danger">*</span> </label>
                                                <select name="freight_amount_gst" required id="" class="form-control select2">
                                                    <option value="0">NA</option>

                                                    <?php if (count($_smarty_tpl->tpl_vars['gst_structure']->value) > 0) {?>
                                                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gst_structure']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>                                                            
                                                       	<option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value->code;?>
</option>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php }?>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="">Billing Address <span class="text-danger">*</span> </label>
                                            <select name="billing_address" required id="" class="form-control select2">
                                            <option value="">Select</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['client']->value, 'cli');
$_smarty_tpl->tpl_vars['cli']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cli']->value) {
$_smarty_tpl->tpl_vars['cli']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cli']->value->billing_address;?>
">
                                                        <?php echo $_smarty_tpl->tpl_vars['cli']->value->client_unit;?>
/ <?php echo $_smarty_tpl->tpl_vars['cli']->value->billing_address;?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="">Shipping Address <span class="text-danger">*</span></label>
                                            <select name="shipping_address" required class="form-control select2">
                                            <option value="">Select</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['client']->value, 'cli');
$_smarty_tpl->tpl_vars['cli']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cli']->value) {
$_smarty_tpl->tpl_vars['cli']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cli']->value->shifting_address;?>
">
                                                        <?php echo $_smarty_tpl->tpl_vars['cli']->value->client_unit;?>
/<?php echo $_smarty_tpl->tpl_vars['cli']->value->shifting_address;?>

                                                    </option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php if (count($_smarty_tpl->tpl_vars['supplier']->value) > 0) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplier']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                                                		<option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->location;?>
">
                                                        <?php echo $_smarty_tpl->tpl_vars['s']->value->supplier_name;?>
/<?php echo $_smarty_tpl->tpl_vars['s']->value->location;?>

                                                    	</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php }?>
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label for="">Notes </label>
                                            <textarea height="5em" name="notes" class="form-control">1.PDIR & MTC Required with each lot. Pls mention PO No. on Invoice.<br>
2.Rejection if any will be debited to suppliers account<br>
3. Inspection & Testing Requirements as per Customer drawing/ standard/ quality plan will be done at your end and reports will share to us.<br>
<b> G. S. T.: </b> GST Extra. <br>
<b> Delivery :</b>   Door Delivery. <br>
<b> Validity :</b>  30 Days from date of purchase order
                                            </textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger mt-4">Generate PO</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
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
<!-- /.content-wrapper --><?php }
}
