<?php
/* Smarty version 4.3.2, created on 2024-06-25 22:25:36
  from '/var/www/html/extra_work/erp_converted/application/views/templates/purchase/new_po_sub.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_667af688e7ec86_14054912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f18ec4cdbb23aa18b4a7d62848abfa19b65d6a4b' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/purchase/new_po_sub.tpl',
      1 => 1718026168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667af688e7ec86_14054912 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('generate_po');?>
">Home</a></li>
                            <li class="breadcrumb-item active">New PO</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <form action="<?php echo base_url('generate_new_po');?>
" method="POST">
                                                <label for="">Select Supplier / Number / GST <span class="text-danger">*</span> </label>
                                                <select name="supplier_id" required id="" class="form-control select2">
                                                    <?php if (count($_smarty_tpl->tpl_vars['supplier']->value) > 0) {?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplier']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value->supplier_name;?>
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
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Select PO Date <span class="text-danger">*</span> </label>
                                            <input type="date" readonly value="<?php echo date('Y-m-d');?>
" required name="po_date" class="form-control">
                                            <input type="hidden" readonly value="1" required name="process_id" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Select Expiry Date </label>
                                            <input type="date" min="<?php echo date('Y-m-d',strtotime('+ 1 day'));?>
" required name="expiry_po_date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Enter Remark </label>
                                            <input type="text" placeholder="Enter Remark" value="" name="remark" class="form-control">
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
 / <?php echo $_smarty_tpl->tpl_vars['cli']->value->shifting_address;?>

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
 / <?php echo $_smarty_tpl->tpl_vars['s']->value->location;?>

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
