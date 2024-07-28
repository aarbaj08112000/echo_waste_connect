<?php
/* Smarty version 4.3.2, created on 2024-07-27 14:09:26
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\quality\grn_rejection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66a4b23e3a4f23_76662582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77e3c9f056067068f4c13048e279fd52e27ce097' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\quality\\grn_rejection.tpl',
      1 => 1721325177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a4b23e3a4f23_76662582 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper" style="width:100%">
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>GRN Rejection</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>
">Home</a></li>
                  <li class="breadcrumb-item active">Stock Rejection</li>
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
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Sr. No.</th>
                              <th>Part Number / Description</th>
                              <th>Rejection Reason</th>
                              <th>Supplier</th>
                              <th>Remark</th>
                              <th>Uploaded Debit Note</th>
                              <th>Qty</th>
                              <th>Download Debit Note</th>
                           </tr>
                        </thead>
                        <tbody>
                              <?php $_smarty_tpl->_assignInScope('i', 1);?>
                              <?php if (($_smarty_tpl->tpl_vars['rejection_flow']->value)) {?>
                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rejection_flow']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
			                           <tr>
			                              <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
			                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value->part_description;?>
</td>
			                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->reason;?>
</td>
			                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->supplier_name;?>
</td>
			                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->remark;?>
</td>
			                              <td>
			                                 <a class="btn btn-dark" download href="<?php echo base_url('documents/');
echo $_smarty_tpl->tpl_vars['c']->value->debit_note;?>
">Download Uploaded Document</a>
			                              </td>
			                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->qty;?>
</td>
			                              <td>
			                                 <?php if (($_smarty_tpl->tpl_vars['c']->value->status == "approved" || true)) {?>
				                                 <a class="btn btn-success" href="<?php echo base_url('create_debit_note/');
echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">Download</a>

			                                <?php } elseif (($_smarty_tpl->tpl_vars['c']->value->status == "stock_transfered")) {?>
			                                <?php echo '<%'; ?>
 else <?php echo '%>'; ?>

			                                       
			                                <?php }?>
			                              </td>
			                           </tr>
	                              <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
	                              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                              <?php }?>
                        </tbody>
                     </table>
                  </div>
                  <!-- /.card-header -->
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
