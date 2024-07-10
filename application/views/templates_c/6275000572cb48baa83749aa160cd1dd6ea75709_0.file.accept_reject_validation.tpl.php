<?php
/* Smarty version 4.3.2, created on 2024-06-25 22:26:04
  from '/var/www/html/extra_work/erp_converted/application/views/templates/quality/accept_reject_validation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_667af6a4ae38d4_50768540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6275000572cb48baa83749aa160cd1dd6ea75709' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/quality/accept_reject_validation.tpl',
      1 => 1718626155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667af6a4ae38d4_50768540 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Inward Inspection</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Insert List</li>
               </ol>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <!-- /.card -->
               <div class="card">
                 
                  <!-- /.card-header -->
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Sr No</th>
                              <th>GRN Number </th>
                              <th>GRN Date</th>
                              <th>PO Number</th>
                              <th>Supplier Name </th>
                              <th>Invoice Number</th>
                              <th>Date</th>
                              <th>Status</th>
                              <?php if (($_smarty_tpl->tpl_vars['isMultiClient']->value == "true")) {?>
                              <th>Delivery Unit</th>
                              <?php }?>
                              <th>View Details</th>
                           </tr>
                        </thead>
                        
                        <tbody>
                              <?php $_smarty_tpl->_assignInScope('i', 1);?>
                              <?php if (($_smarty_tpl->tpl_vars['inwarding_data']->value)) {?>
                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inwarding_data']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
                                      <?php if (($_smarty_tpl->tpl_vars['t']->value->status == "validate_grn" || $_smarty_tpl->tpl_vars['t']->value->status == "accept")) {?>
				                           <tr>
				                              <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
				                              <td><?php echo $_smarty_tpl->tpl_vars['t']->value->grn_number;?>
</td>
				                              <td><?php echo $_smarty_tpl->tpl_vars['t']->value->invoice_date;?>
</td>
				                              <td><?php echo $_smarty_tpl->tpl_vars['t']->value->po_number;?>
</td>
				                              <td><?php echo $_smarty_tpl->tpl_vars['t']->value->supplier_name;?>
</td>
				                              <td><?php echo $_smarty_tpl->tpl_vars['t']->value->invoice_number;?>
</td>
				                              <td><?php echo $_smarty_tpl->tpl_vars['t']->value->invoice_date;?>
</td>
				                              <td><?php echo $_smarty_tpl->tpl_vars['t']->value->status;?>
</td>
				                              <?php if (($_smarty_tpl->tpl_vars['isMultiClient']->value == "true")) {?>
				                              <td><?php echo $_smarty_tpl->tpl_vars['t']->value->delivery_unit;?>
</td>
				                              <?php }?>
				                              <td><a href="<?php echo base_url('inwarding_details_accept_reject/');
echo $_smarty_tpl->tpl_vars['t']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['t']->value->po_id;?>
" 
				                                 class="btn btn-<?php if (($_smarty_tpl->tpl_vars['t']->value->status == "accept")) {?>success<?php } else { ?>danger <?php }?>" href="">Accept / Reject Details</a></td>
				                           </tr>
		                              <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
		                              <?php }?>
                              	  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                              <?php }?>
                        </tbody>
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
<!-- /.content-wrapper --><?php }
}
