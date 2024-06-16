<?php
/* Smarty version 4.3.2, created on 2024-06-11 15:47:06
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/view_supplier_challan_details_part_wise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66682422bb1333_19847332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee01c61b4a9022289f07b62a363724a38fcd16bd' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/view_supplier_challan_details_part_wise.tpl',
      1 => 1718100717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66682422bb1333_19847332 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('generate_po');?>
">Home</a></li>
              <li class="breadcrumb-item active"></li>
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
                <table class="table table-bordered table-striped" id="example1">
                  <thead>
                    <tr>
                      <th>Sr No</th>
                      <th>Part Number</th>
                      <th>Part Description</th>
                      <th>Qty </th>
                      <th>Process</th>
                      <th>HSN</th>
                      <th>Value</th>
                      <th>Remaining Qty </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (($_smarty_tpl->tpl_vars['challan_parts']->value)) {?>
                          <?php $_smarty_tpl->_assignInScope('final_po_amount', 0);?>
                          <?php $_smarty_tpl->_assignInScope('i', 1);?>
                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['challan_parts']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
		                    <tr>
		                      <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
		                      <td><?php echo $_smarty_tpl->tpl_vars['p']->value->part_number;?>
</td>
		                      <td><?php echo $_smarty_tpl->tpl_vars['p']->value->part_description;?>
</td>
		                      <td><?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
</td>
		                      <td><?php echo $_smarty_tpl->tpl_vars['p']->value->process;?>
</td>
		                      <td><?php echo $_smarty_tpl->tpl_vars['p']->value->hsn;?>
</td>
		                      <td><?php echo $_smarty_tpl->tpl_vars['p']->value->value;?>
</td>
		                      <td><?php echo $_smarty_tpl->tpl_vars['p']->value->remaning_qty;?>
</td>
		                    </tr>
		                    <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
		                   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      <?php }?>
                  </tbody>
                  <tfoot>
                    <?php if (($_smarty_tpl->tpl_vars['po_parts']->value)) {?>
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
<!-- /.content-wrapper --><?php }
}
