<?php
/* Smarty version 4.3.2, created on 2024-06-17 18:19:03
  from '/var/www/html/extra/erp_converted/application/views/templates/reports/report_supplier_parts_stock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_667030bf874ef3_75982260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e16f2d991717fedae0e29d93ec494eff90a88909' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/reports/report_supplier_parts_stock.tpl',
      1 => 1718628542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667030bf874ef3_75982260 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="width:100%" class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Report: Supplier Parts Stock</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Report</li>
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
                        <!-- /.card -->
                        <div class="card">
                            <div class="card-body">
                                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
parts_stock_report" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div style="">
                                                <div class="form-group">
                                                    <label for="on click url">Select Part Number<span class="text-danger">*</span></label> <br>
                                                    <select name="part_id" id="selectPart" class="form-control select2" required>
                                                        <option value="">Select Part ID</option>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_part_data_new_updated2']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['filter_part_id']->value === $_smarty_tpl->tpl_vars['c']->value->id) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
</option>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        <option value="ALL">ALL</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="">&nbsp;</label> <br>
                                            <button class="btn btn-secondary">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Part Number</th>
                                            <th>Part Description</th>
                                            <th>UOM</th>
                                            <th>Store Stock</th>
                                            <th>Stock Rate</th>
                                            <th>Stock Value</th>
                                            <th>Inward Inspection QTY</th>
                                            <th>Prod QTY</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                        <?php if ($_smarty_tpl->tpl_vars['customer_part_list']->value) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_part_list']->value, 'po');
$_smarty_tpl->tpl_vars['po']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->do_else = false;
?>
                                                
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->part_number;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->part_description;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['uom_data']->value[$_smarty_tpl->tpl_vars['po']->value->id][0]->uom_name;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->stock;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->store_stock_rate;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->stock*$_smarty_tpl->tpl_vars['po']->value->store_stock_rate;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['underinspection_stock']->value[$_smarty_tpl->tpl_vars['po']->value->id];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->production_qty;?>
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
    <!-- /.content-wrapper -->
</div>
<?php }
}
