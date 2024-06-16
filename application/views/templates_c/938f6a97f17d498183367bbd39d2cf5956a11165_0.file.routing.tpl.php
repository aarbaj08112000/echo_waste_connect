<?php
/* Smarty version 4.3.2, created on 2024-06-10 19:10:30
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/purchase/routing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6667024edc5474_37178766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '938f6a97f17d498183367bbd39d2cf5956a11165' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/purchase/routing.tpl',
      1 => 1718026829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6667024edc5474_37178766 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1>Routing</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('');?>
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
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Part Number</th>
                                            <th>Part Description</th>
                                            <th>Weight</th>
                                            <th>Size</th>
                                            <th>Thickness</th>
                                            <th>Add Routing</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $_smarty_tpl->_assignInScope('i', 1);?>
                                        <?php if (count($_smarty_tpl->tpl_vars['child_part_master']->value) > 0) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_part_master']->value, 'poo');
$_smarty_tpl->tpl_vars['poo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['poo']->value) {
$_smarty_tpl->tpl_vars['poo']->do_else = false;
?>
                                                <?php if (($_smarty_tpl->tpl_vars['poo']->value->sub_type == "Subcon grn" || $_smarty_tpl->tpl_vars['poo']->value->sub_type == "Subcon Regular")) {?>
			                                        <tr>
			                                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
			                                            <td><?php echo $_smarty_tpl->tpl_vars['poo']->value->part_number;?>
</td>
			                                            <td><?php echo $_smarty_tpl->tpl_vars['poo']->value->part_description;?>
</td>
			                                            <td><?php echo $_smarty_tpl->tpl_vars['poo']->value->weight;?>
</td>
			                                            <td><?php echo $_smarty_tpl->tpl_vars['poo']->value->size;?>
</td>
			                                            <td><?php echo $_smarty_tpl->tpl_vars['poo']->value->thickness;?>
</td>
			                                            <td>
			                                                <a class="btn btn-primary"
			                                                    href="<?php echo base_url('addrouting/');
echo $_smarty_tpl->tpl_vars['poo']->value->id;?>
">Add
			                                                    Routing</a>
			                                            </td>
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
