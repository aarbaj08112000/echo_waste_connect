<?php
/* Smarty version 4.3.2, created on 2024-08-21 23:36:30
  from '/var/www/html/extra_work/erp_converted/application/views/templates/purchase/new_po.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c62ca62dbd31_57808060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '478ce50c61fee07372c3f6d115ed840ab3f027d1' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/purchase/new_po.tpl',
      1 => 1724142425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c62ca62dbd31_57808060 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Content wrapper -->
<?php $_smarty_tpl->_assignInScope('entitlements', $_smarty_tpl->tpl_vars['session_data']->value['entitlements']);?>
<div class="content-wrapper">
   <!-- Content -->
   <div class="container-xxl flex-grow-1 container-p-y">
      <nav aria-label="breadcrumb">
         <div class="sub-header-left pull-left breadcrumb">
            <h1>
               Purchase
               <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
               <i class="ti ti-chevrons-right" ></i>
               <em >Regular PO</em></a>
            </h1>
            <br>
            <span >Generate PO</span>
         </div>
      </nav>
      <!-- Responsive Table -->
      <div class="card p-0 mt-4">
         <div class="card-header">
            <form  id="generateNewPo" class="mb-3" action="javascript:void(0)" method="POST" enctype='multipart/form-data'>
               <div class="row">
                  <div class="col-lg-4">
                     <div class="form-group mb-3">
                        <label for="" class="form-label">Supplier / Number / GST <span class="text-danger">*</span> </label>
                        <select name="supplier_id"  class="form-control select2-init">
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
                  <div class="col-lg-4">
                     <div class="form-group mb-3">
                        <label for="" class="form-label">PO Date</label>
                        <input type="date" readonly value="<?php echo date('Y-m-d');?>
"  name="po_date" class="form-control">
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="form-group mb-3">
                        <label for="" class="form-label">Expiry Date <span class="text-danger">*</span> </label>
                        <input type="date" min="<?php echo date('Y-m-d',strtotime('+ 1 day'));?>
"  name="expiry_po_date" class="form-control">
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="form-group mb-3">
                        <label for="" class="form-label">Remark </label>
                        <input type="text" placeholder="Enter Remark" value="" name="remark" class="form-control">
                     </div>
                  </div>
               
                  <div class="col-lg-4">
                     <div class="form-group mb-3">
                        <label for="" class="form-label">Loading Unloading Amount <span class="text-danger">*</span> </label>
                        <input type="text"  step="any" placeholder="Enter Loading Unloading" value="" name="loading_unloading" class="form-control onlyNumericInput">
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="form-group mb-3">
                        <label for="" class="form-label">Loading Unloading Tax Strucutre <span class="text-danger">*</span> </label>
                        <select name="loading_unloading_gst"   class="form-control select2-init">
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
                  <div class="col-lg-4">
                     <div class="form-group mb-3">
                        <label for="" class="form-label">Freight Amount <span class="text-danger">*</span> </label>
                        <input type="text" step="any"  placeholder="Enter Loading Unloading" value="" name="freight_amount" class="form-control onlyNumericInput">
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="form-group mb-3">
                        <label for="" class="form-label">Freight Tax Strucutre <span class="text-danger">*</span> </label>
                        <select name="freight_amount_gst"   class="form-control select2-init">
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
                  <div class="col-lg-4">
                     <div class="form-group mb-3">
                        <label for="" class="form-label">Billing Address <span class="text-danger">*</span> </label>
                        <select name="billing_address"   class="form-control select2-init">
                           <option value="">Select Billing Address</option>
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
                        <label for="" class="form-label">Shipping Address <span class="text-danger">*</span></label>
                        <select name="shipping_address"  class="form-control select2-init">
                           <option value="">Select Shipping Address</option>
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
                  <div class="col-lg-9">
                     <div class="form-group mb-3">
                        <label class="form-label" for="">Notes </label>
                        <textarea cols="50" rows="4" name="notes" class="form-control">1.PDIR & MTC Required with each lot. Pls mention PO No. on Invoice.<br>
                        2.Rejection if any will be debited to suppliers account<br>
                        3. Inspection & Testing Requirements as per Customer drawing/ standard/ quality plan will be done at your end and reports will share to us.<br>
                        <b> G. S. T.: </b> GST Extra. <br>
                        <b> Delivery :</b>   Door Delivery. <br>
                        <b> Validity :</b>  30 Days from date of purchase order
                        </textarea>
                     </div>
                  </div>
                  <div class="form-group">
                     <button type="submit" class="btn btn-danger mt-4">Generate PO</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <!--/ Responsive Table -->
   </div>
</div>
<!-- Content wrapper -->
<style type="text/css">
   .table th {
   text-transform: none ; 
   font-size: .75rem;
   letter-spacing: 1px;
   }
</style>
<?php echo '<script'; ?>
>
   var base_url = <?php echo json_encode($_smarty_tpl->tpl_vars['base_url']->value);?>
;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/purchase/new_po_generate.js"><?php echo '</script'; ?>
><?php }
}
