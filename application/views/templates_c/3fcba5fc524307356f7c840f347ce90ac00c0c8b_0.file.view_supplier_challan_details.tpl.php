<?php
/* Smarty version 4.3.2, created on 2024-06-11 15:24:17
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/view_supplier_challan_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66681ec949fe36_14301448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fcba5fc524307356f7c840f347ce90ac00c0c8b' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/view_supplier_challan_details.tpl',
      1 => 1718099655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66681ec949fe36_14301448 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Supplier Challan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('');?>
">Home</a></li>
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
                    <th>Sr. No.</th>
                    <th>Challan Number</th>
                    <th>Challan Details</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $_smarty_tpl->_assignInScope('i', 1);?>
                    <?php if (($_smarty_tpl->tpl_vars['challan_data']->value)) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['challan_data']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
		                  <tr>
		                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
		                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->challan_number;?>
</td>
		                    <td>
		                      <a class="btn btn-primary" href="<?php echo base_url('view_supplier_challan_details_part_wise/');
echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">View Challan Details</a>
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
