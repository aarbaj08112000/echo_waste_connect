<?php
/* Smarty version 4.3.2, created on 2024-06-10 17:08:41
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/purchase/new_po_list_supplier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6666e5c16a2bc6_43606966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11121c1d1737bb3722ff854490454e2fe41e8e6e' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/purchase/new_po_list_supplier.tpl',
      1 => 1718019520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6666e5c16a2bc6_43606966 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="width:100%;" class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Supplier List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('');?>
">Home</a></li>
                            <li class="breadcrumb-item active">Supplier List</li>
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
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Supplier Name</th>
                                            <th>Supplier Number</th>
                                            <th>Supplier Location</th>
                                            <th class="text-center">View PO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $_smarty_tpl->_assignInScope('i', 1);?>
                                        <?php if (count($_smarty_tpl->tpl_vars['supplier_list']->value) > 0) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplier_list']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                                        	<tr >
                                                    <td width="5%"> <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                    <td width="30%"><?php echo $_smarty_tpl->tpl_vars['s']->value->supplier_name;?>
</td>
                                                    <td width="15%"><?php echo $_smarty_tpl->tpl_vars['s']->value->supplier_number;?>
</td>
                                                    <td width="35%"><?php echo $_smarty_tpl->tpl_vars['s']->value->location;?>
</td>
                                                    <td width="10%" class="text-center"><a href="<?php echo base_url('view_po_by_supplier_id/');
echo $_smarty_tpl->tpl_vars['s']->value->id;?>
" class="btn btn-primary" href="">View PO</a></td>
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
