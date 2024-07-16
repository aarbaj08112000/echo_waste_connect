<?php
/* Smarty version 4.3.2, created on 2024-07-12 15:14:39
  from '/var/www/html/extra/erp_converted/application/views/templates/subcom_challan/subcon_supplier_challan_part_report.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6690fb07830c18_25976934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '267e516402f5acbf0e593e880dd5e18ee59868eb' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/subcom_challan/subcon_supplier_challan_part_report.tpl',
      1 => 1718605193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6690fb07830c18_25976934 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="width:100%" class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <!-- <h1></h1> -->
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">subcon supplier-challan part stock report</li>
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
           <div class="card">
                <div class="card-header">
                    <form action="<?php echo (defined('BASE_URL') ? constant('BASE_URL') : null);?>
subcon_supplier_challan_part_report" method="POST">
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="">Select Part Number / Description</label>
                                <select name="selected_customer_part_number" required id="" class="form-control select2">
                                    <option <?php if ($_smarty_tpl->tpl_vars['selected_customer_part_number']->value == 0) {?>selected<?php }?> value="0">NA</option>
                                    <?php if ($_smarty_tpl->tpl_vars['customer_parts_data']->value) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_parts_data']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                            <option <?php if ($_smarty_tpl->tpl_vars['selected_customer_part_number']->value == $_smarty_tpl->tpl_vars['c']->value->part_number) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
 / <?php echo $_smarty_tpl->tpl_vars['c']->value->part_description;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="">Select Supplier</label>
                                <select name="selected_supplier_id" required class="form-control select2">
                                    <option <?php if ($_smarty_tpl->tpl_vars['selected_supplier_id']->value == 0) {?>selected<?php }?> value="0">NA</option>
                                    <?php if ($_smarty_tpl->tpl_vars['supplier']->value) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplier']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                            <option <?php if ($_smarty_tpl->tpl_vars['selected_supplier_id']->value == $_smarty_tpl->tpl_vars['c']->value->id) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->supplier_name;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group mt-1">
                                    <button class="btn btn-danger mt-4">
                                        Search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sr.No.</th>
                                <th>Supplier</th>
                                <th>Child Part</th>
                                <th>Challan No</th>
                                <th>Challan Date</th>   
                        
                                <th>Aging Date</th>
                                <th>Challan Qty</th>
                                <th>Remaning qty</th>
                                <th>Process</th>
                                <th>Value (Challan Qty)</th>
                                <th>Value (Remaining Qty)</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $_smarty_tpl->_assignInScope('i', 1);?>
                             <?php if ($_smarty_tpl->tpl_vars['challan_parts']->value) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['challan_parts']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['display_arr']->value[$_smarty_tpl->tpl_vars['c']->value->id]['show'] == "yes") {?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['supplier_data']->value[$_smarty_tpl->tpl_vars['c']->value->id][0]->supplier_name;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[$_smarty_tpl->tpl_vars['c']->value->id][0]->part_number;?>
 <?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[0]->part_description;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['challan_data']->value[$_smarty_tpl->tpl_vars['c']->value->id][0]->challan_number;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['challan_data']->value[$_smarty_tpl->tpl_vars['c']->value->id][0]->created_date;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['aging']->value[$_smarty_tpl->tpl_vars['c']->value->id];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['c']->value->qty;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['c']->value->remaning_qty;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['c']->value->process;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['value_qty']->value[$_smarty_tpl->tpl_vars['c']->value->id];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['value_qty_remaning']->value[$_smarty_tpl->tpl_vars['c']->value->id];?>
</td>
                                        </tr>
                                        <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="9">Total</td>
                                <td colspan=""><?php echo $_smarty_tpl->tpl_vars['main_total']->value;?>
</td>
                                <td colspan=""><?php echo $_smarty_tpl->tpl_vars['main_total_2']->value;?>
</td>
                            </tr>
                        </tfoot>
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
</div>
<!-- /.content-wrapper --><?php }
}
