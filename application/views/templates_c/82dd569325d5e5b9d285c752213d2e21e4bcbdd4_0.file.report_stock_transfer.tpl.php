<?php
/* Smarty version 4.3.2, created on 2024-06-17 15:54:40
  from '/var/www/html/extra/erp_converted/application/views/templates/reports/report_stock_transfer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66700ee8e3ba06_71255301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82dd569325d5e5b9d285c752213d2e21e4bcbdd4' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/reports/report_stock_transfer.tpl',
      1 => 1718617465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66700ee8e3ba06_71255301 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Reports : Stock</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
dashboard">Home</a></li>
                            <li class="breadcrumb-item active">Incoming Quality report</li>
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
                        <div class="card-header">
                                <div class="row">
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Part Number From </th>
                                            <th>Part Number To </th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Transferred Stock </th>
                                            <th>Date</th>
                                            <th>Time </th>                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($_smarty_tpl->tpl_vars['stock_report']->value) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stock_report']->value, 'g', false, NULL, 'report', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_report']->value['iteration']++;
?>
                                                <tr>
                                                    <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_report']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_report']->value['iteration'] : null);?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['g']->value->part_number_from;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['g']->value->part_number_to;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['g']->value->from;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['g']->value->to;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['g']->value->actual_stock;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['g']->value->updated_time;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['g']->value->updated_date;?>
</td>
                                                </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php }
}
