<?php
/* Smarty version 4.3.2, created on 2024-06-17 12:06:02
  from '/var/www/html/extra/erp_converted/application/views/templates/reports/reports_po_balance_qty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_666fd9528ea476_64402346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c17af2e4d7bb02afac64a5a768b0fec2340d20e' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/reports/reports_po_balance_qty.tpl',
      1 => 1718606158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666fd9528ea476_64402346 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>PO Summary Report</h1>
                    </div>
                    <!-- <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
dashboard">Home</a></li>
                            <li class="breadcrumb-item active">PO Balance Qty</li>
                        </ol>
                    </div>-->
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
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
reports_po_balance_qty" method="post">
                                            <div class="form-group">
                                                <label for="">Select Month  <span class="text-danger">*</span></label>
                                                <select required name="created_month" id="" class="form-control select2">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['month_data']->value, 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                                                <option <?php if ($_smarty_tpl->tpl_vars['month_number']->value[$_smarty_tpl->tpl_vars['key']->value] == $_smarty_tpl->tpl_vars['created_month']->value) {?>selected<?php }?>
                                                    value="<?php echo $_smarty_tpl->tpl_vars['month_number']->value[$_smarty_tpl->tpl_vars['key']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Select Year  <span class="text-danger">*</span></label>
                                            <select required name="created_year" id="" class="form-control select2">
                                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2027+1 - (2022) : 2022-(2027)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 2022, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['created_year']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                                <?php }
}
?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="submit" class="btn btn-primary mt-4" value="Search">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Supplier name</th>
                                            <th>Part No</th>
                                            <th>Part Description</th>
                                            <th>PO Number</th>
                                            <th>Date</th>
                                            <th>Expiry Date</th>
                                            <th>Status</th>
                                            <th>Qty</th>
                                            <th>Received QTY</th>
                                            <th>Balance QTY</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                        <?php if ($_smarty_tpl->tpl_vars['po_data']->value) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['po_data']->value, 'po');
$_smarty_tpl->tpl_vars['po']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->do_else = false;
?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->supplier_name;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->part_number;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->part_description;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->po_number;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->created_date;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->expiry_po_date;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->status;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->qty;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->qty-$_smarty_tpl->tpl_vars['po']->value->pending_qty;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->pending_qty;?>
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
