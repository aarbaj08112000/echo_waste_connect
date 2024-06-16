<?php
/* Smarty version 4.3.2, created on 2024-06-11 14:57:23
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/view_challan_parts_history.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6668187b39c8f3_17500884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0524fcbbf8243d251a8215ee4f6909cda721412' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/view_challan_parts_history.tpl',
      1 => 1718098042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6668187b39c8f3_17500884 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
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
               <h1>Challan History</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <!-- <li class="breadcrumb-item active">Store Stock</li> -->
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
                  <div class="card-header">
                     <h3 class="card-title">History</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Sr. No.</th>
                              <th>Supplier Challan Number</th>
                              <th>Qty</th>
                              <th>Accepted Qty</th>
                              <th>Rejected Qty</th>
                              <th>Status</th>
                              <th>Date & Time </th>
                           </tr>
                        </thead>
                        <tbody>
                              <?php $_smarty_tpl->_assignInScope('i', 1);?>
                              <?php if (($_smarty_tpl->tpl_vars['challan_parts_data']->value)) {?>
                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['challan_parts_data']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
		                           <tr>
		                              <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['s']->value->supplier_challan_number;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['s']->value->qty;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['s']->value->accepeted_qty;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['s']->value->reject_qty;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['s']->value->status;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['s']->value->created_date;?>
/<?php echo $_smarty_tpl->tpl_vars['s']->value->created_time;?>
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
