<?php
/* Smarty version 4.3.2, created on 2024-08-28 00:53:22
  from '/var/www/html/extra_work/erp_converted/application/views/templates/purchase/supplier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66ce27aae550b2_25560926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00a76d500c5cb588906daa454321f8b656f76c2d' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/purchase/supplier.tpl',
      1 => 1724694253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ce27aae550b2_25560926 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('entitlements', $_smarty_tpl->tpl_vars['session_data']->value['entitlements']);?>
<!-- Content wrapper -->
<div class="container-xxl flex-grow-1 container-p-y">
   <nav aria-label="breadcrumb">
      <div class="sub-header-left pull-left breadcrumb">
         <h1>
            Purchase
            <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Supplier</em></a>
         </h1>
         <br>
         <span >Add Supplier</span>
      </div>
   </nav>
   <div class="dt-top-btn d-grid gap-2 d-md-flex  mb-5 listing-btn">
      <a class="btn btn-seconday" type="button" href="<?php echo base_url('approved_supplier');?>
" title="Back To Supplier List"><i class="ti ti-arrow-left" ></i></a>
   </div>
   <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4> -->
   <div class="row">
      <div class="col-xl-12">
      </div>
   </div>
   <!-- Basic Layout -->
   <div class="row">
      <div class="col-xl">
         <div class="card mb-4 px-3">
            <div class="card-body">
               <form id="addsupplier" class="mb-3" action="javascript:void(0)" method="POST" enctype='multipart/form-data'>
                  <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
" name="mode">
                  <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="supplier_id">
                  <div class="row">
                     <div class="col-lg-6 ">
                        <div class="form-group mb-3">
                           <label for="machine_name" class="form-label">Supplier Name</label><span
                              class="text-danger">*</span>
                           <input type="text" name="supplierName" value="<?php echo $_smarty_tpl->tpl_vars['supplier_name']->value;?>
" 
                              class="form-control" 
                              placeholder="Enter Supplier Name">
                        </div>
                     </div>
                     <div class="col-lg-6 ">
                        <div class="form-group mb-3">
                           <label for="machine_name" class="form-label">Supplier Email</label>
                           <input type="text" name="supplierEmail" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"
                              class="form-control" 
                              placeholder="Enter Supplier Email">
                        </div>
                     </div>
                     <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>
                     <div class="col-lg-6 ">
                        <div class="form-group mb-3">
                           <label for="machine_name" class="form-label">Approve Supplier</label>
                            <select class="form-control select2" name="admin_approve"
                              style="width: 100%;">
                              <option value="yes" <?php if ($_smarty_tpl->tpl_vars['admin_approve']->value == 'pending') {?>selected<?php }?>>Pending</option>
                              <option value="no" <?php if ($_smarty_tpl->tpl_vars['admin_approve']->value == 'accept') {?>selected<?php }?>>Accept</option>
                           </select>
                        </div>
                     </div>
                     <?php }?>
                     <div class="col-lg-6 ">
                        <div class="form-group mb-3">
                           <label for="machine_name" class="form-label">Supplier Code</label><span
                              class="text-danger">*</span>
                           <input type="text" name="supplierNumber" value="<?php echo $_smarty_tpl->tpl_vars['supplier_number']->value;?>
"
                              class="form-control" <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Update') {?>readonly<?php }?> 
                              placeholder="Enter Supplier Number">
                        </div>
                     </div>
                     <div class="col-lg-6 ">
                        <div class="form-group mb-3">
                           <label class="form-label">With in State </label><span
                              class="text-danger">*</span>
                           <select class="form-control select2" name="with_in_state"
                              style="width: 100%;">
                              <option value="yes" <?php if ($_smarty_tpl->tpl_vars['with_in_state']->value == 'yes') {?>selected<?php }?>>Yes</option>
                              <option value="no" <?php if ($_smarty_tpl->tpl_vars['with_in_state']->value == 'no') {?>selected<?php }?>>No</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-6 ">
                        <div class="form-group mb-3">
                           <label for="machine_name" class="form-label">Supplier Address</label><span
                              class="text-danger">*</span>
                           <input type="text" name="supplierlocation" value="<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
"
                              class="form-control"
                              placeholder="Enter Supplier Location">
                        </div>
                     </div>
                     <div class="col-lg-6 ">
                        <div class="form-group mb-3">
                           <label for="customer_location" class="form-label">State</label><span
                              class="text-danger">*</span>
                           <input type="text" name="state" value="<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
"
                              class="form-control"  placeholder="Enter State">
                        </div>
                     </div>
                     <div class="col-lg-6 ">
                        <div class="form-group mb-3">
                           <label for="machine_name" class="form-label">Supplier Mobile Number</label>
                           <input type="text" name="supplierMnumber" value="<?php echo $_smarty_tpl->tpl_vars['mobile_no']->value;?>
"
                              class="form-control onlyNumericInput" 
                              placeholder="Enter Supplier Mobile Number">
                        </div>
                     </div>
                     <div class="col-lg-6 ">
                        <div class="form-group mb-3">
                           <label for="customer_location" class="form-label">GST Number</label><span
                              class="text-danger">*</span>
                           <input type="text" name="gst_no" value="<?php echo $_smarty_tpl->tpl_vars['gst_number']->value;?>
"
                              class="form-control" 
                              placeholder="Enter GST Number">
                        </div>
                     </div>
                     <div class="col-lg-6 ">
                        <div class="form-group mb-3">
                           <label for="machine_name" class="form-label">Supplier Pan</label>
                           <input type="text" name="pan_card" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pan_card']->value;?>
"
                              placeholder="Enter Supplier pan card">
                        </div>
                     </div>
                     <div class="col-lg-6 ">
                        <div class="form-group mb-3">
                           <label for="payment_terms" class="form-label">Payment Terms</label><span
                              class="text-danger">*</span>
                           <input type="text" step="any"  name="paymentTerms" value="<?php echo $_smarty_tpl->tpl_vars['payment_terms']->value;?>
"
                              class="form-control" 
                              placeholder="Payment Terms">
                        </div>
                     </div>
                     <div class="col-lg-6 ">
                        <div class="form-group mb-3">
                           <label for="machine_name" class="form-label">Upload NDA Document</label>
                           <input type="file" name="nda_document" 
                              class="form-control"
                              placeholder="Enter Upload NDA Document">
                        </div>
                     </div>
                     <div class="col-lg-6 ">
                        <div class="form-group mb-3">
                           <label for="machine_name" class="form-label">Other Document 2</label>
                           <input type="file" name="other_document_2"
                              class="form-control" 
                              placeholder="Enter Supplier Mobile Number">
                        </div>
                     </div>
                     <div class="col-lg-6 ">
                        <div class="form-group mb-3">
                           <label for="machine_name" class="form-labelorm">Upload Registration
                           Document</label>
                           <input type="file" name="registration_document"
                              class="form-control" 
                              placeholder="Enter Supplier Mobile Number">
                        </div>
                     </div>
                     <div class="col-lg-6 ">
                        <div class="form-group mb-3">
                           <label for="machine_name" class="form-label">Other Document 3</label>
                           <input type="file" name="other_document_3"
                              class="form-control" 
                              placeholder="Enter Supplier Mobile Number">
                        </div>
                     </div>
                     <div class="col-lg-6 ">
                        <div class="form-group mb-3">
                           <label for="machine_name" class="form-label">Other Document 1</label>
                           <input type="file" name="other_document_1"
                              class="form-control" 
                              placeholder="Enter Supplier Mobile Number">
                        </div>
                     </div>
                     
                  </div>
            <button type="submit" class="btn btn-primary">Submit</button>
         </div>

         </div>
         

         </form>
         </div>
      </div>
   </div>
</div>
</div>
</div>
<!-- / Content -->
<div class="content-backdrop fade"></div>
<?php echo '<script'; ?>
 type="text/javascript">
   var base_url = <?php echo json_encode($_smarty_tpl->tpl_vars['base_url']->value);?>

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/purchase/add_supplier.js"><?php echo '</script'; ?>
>
<!-- Content wrapper --><?php }
}
