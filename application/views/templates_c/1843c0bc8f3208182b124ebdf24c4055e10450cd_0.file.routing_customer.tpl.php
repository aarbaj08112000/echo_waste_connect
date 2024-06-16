<?php
/* Smarty version 4.3.2, created on 2024-06-10 19:31:10
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/purchase/routing_customer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66670726f02398_57908511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1843c0bc8f3208182b124ebdf24c4055e10450cd' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/purchase/routing_customer.tpl',
      1 => 1718028070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66670726f02398_57908511 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Customer Routing</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo '<?php'; ?>
 echo base_url(''); <?php echo '?>'; ?>
">Home</a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Part Number</th>
                                            <th>Part Description</th>
                                            <th>Add Routing</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                        <?php if (($_smarty_tpl->tpl_vars['customer_part_master']->value)) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_part_master']->value, 'poo');
$_smarty_tpl->tpl_vars['poo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['poo']->value) {
$_smarty_tpl->tpl_vars['poo']->do_else = false;
?>
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['poo']->value->part_number;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['poo']->value->part_description;?>
</td>
                                                <td>
                                                    <a class="btn btn-primary" href="<?php echo base_url('addrouting_customer_subcon/');
echo $_smarty_tpl->tpl_vars['poo']->value->id;?>
">Add
                                                                Routing</a>
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
