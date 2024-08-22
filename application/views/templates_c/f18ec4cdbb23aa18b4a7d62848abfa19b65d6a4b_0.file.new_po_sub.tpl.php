<?php
/* Smarty version 4.3.2, created on 2024-08-21 17:11:13
  from '/var/www/html/extra_work/erp_converted/application/views/templates/purchase/new_po_sub.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c5d2593f2e61_00499859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f18ec4cdbb23aa18b4a7d62848abfa19b65d6a4b' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/purchase/new_po_sub.tpl',
      1 => 1724142425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c5d2593f2e61_00499859 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-wrapper">
   <!-- Content -->
   <div class="container-xxl flex-grow-1 container-p-y">
      <nav aria-label="breadcrumb">
         <div class="sub-header-left pull-left breadcrumb">
            <h1>
               Purchase
               <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
               <i class="ti ti-chevrons-right" ></i>
               <em >Subcon</em></a>
            </h1>
            <br>
            <span >Generate Subcon PO</span>
         </div>
      </nav>
      <div class="card p-0 mt-4">
         <div class="card-header">
         <form  id="generateNewPo" class="mb-3" action="javascript:void(0)" method="POST" enctype='multipart/form-data'>
            <div class="row">
            <div class="col-lg-4">
                <div class="form-group mb-3">
                        <label for=""  class="form-label">Supplier / Number / GST <span class="text-danger">*</span> </label>
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
            <div class="col-lg-4">
                <div class="form-group mb-3">
                    <label for=""  class="form-label">PO Date <span class="text-danger">*</span> </label>
                    <input type="date" readonly value="<?php echo date('Y-m-d');?>
" required name="po_date" class="form-control">
                    <input type="hidden" readonly value="1" required name="process_id" class="form-control">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group mb-3">
                    <label for=""  class="form-label">Expiry Date </label>
                    <input type="date" min="<?php echo date('Y-m-d',strtotime('+ 1 day'));?>
" required name="expiry_po_date" class="form-control">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group mb-3">
                    <label for=""  class="form-label">Remark </label>
                    <input type="text" placeholder="Enter Remark" value="" name="remark" class="form-control">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group mb-3">
                    <label for=""  class="form-label">Billing Address <span class="text-danger">*</span> </label>
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
            <div class="col-lg-4">
                <div class="form-group mb-3">
                    <label for=""  class="form-label">Shipping Address <span class="text-danger">*</span></label>
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
            </div>
         </form>
     </div>
         </div>
      </div>

   </div>
</div>
<?php echo '<script'; ?>
>
   var base_url = <?php echo json_encode($_smarty_tpl->tpl_vars['base_url']->value);?>
;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/purchase/new_po_sub_generate.js"><?php echo '</script'; ?>
>
<!-- /.content-wrapper --><?php }
}
