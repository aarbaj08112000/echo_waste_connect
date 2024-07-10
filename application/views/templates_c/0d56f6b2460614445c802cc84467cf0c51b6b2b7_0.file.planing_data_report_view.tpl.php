<?php
/* Smarty version 4.3.2, created on 2024-07-05 18:11:39
  from '/var/www/html/extra/erp_converted/application/views/templates/reports/planing_data_report_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6687ea03677e66_98749536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d56f6b2460614445c802cc84467cf0c51b6b2b7' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/reports/planing_data_report_view.tpl',
      1 => 1718605193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6687ea03677e66_98749536 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper" style="width:2000px">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Planning Data </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"></h3>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <form action="<?php echo $_SERVER['PHP_SELF'];?>
?action=planing_data_report_view" method="post">
                                            <div class="form-group">
                                                <label for="">Select Customer</label>
                                                <select name="customer_id" id="" class="form-control select2">
                                                    <option value="0">All</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value, 'in', false, 'customer');
$_smarty_tpl->tpl_vars['in']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customer']->value => $_smarty_tpl->tpl_vars['in']->value) {
$_smarty_tpl->tpl_vars['in']->do_else = false;
?>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['c']->value->id == $_smarty_tpl->tpl_vars['customer_id']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->customer_name;?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Select Financial Year</label>
                                            <select name="financial_year" id="" class="form-control select2">
                                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2027+1 - (2020) : 2020-(2027)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 2020, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                <?php $_smarty_tpl->_assignInScope('year', "FY-".((string)$_smarty_tpl->tpl_vars['i']->value));?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
                                                <?php }
}
?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Select Month</label>
                                            <select name="month_id" id="" class="form-control select2">
                                                <option value="MAR">MAR</option>
                                                <option value="APR">APR</option>
                                                <option value="MAY">MAY</option>
                                                <option value="JUN">JUN</option>
                                                <option value="JUL">JUL</option>
                                                <option value="AUG">AUG</option>
                                                <option value="SEP">SEP</option>
                                                <option value="OCT">OCT</option>
                                                <option value="NOV">NOV</option>
                                                <option value="DEC">DEC</option>
                                                <option value="JAN">JAN</option>
                                                <option value="FEB">FEB</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger mt-4">Search</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Customer Part Number</th>
                                            <th>Customer Part Description</th>
                                            <th>Customer Name</th>
                                            <th>Month</th>
                                            <th>Schedule Qty 1</th>
                                            <th>Schedule Qty 2</th>
                                            <th>Job Card Qumulative Qty</th>
                                            <th>Job Card Balance Qty</th>
                                            <th>Job Card Issued</th>
                                            <th>Job Card Closed</th>
                                            <th>Customer Part Price</th>
                                            <th>Dispatch (sales qty)</th>
                                            <th>Balance Schedule qty</th>
                                            <th>Subtotal Schedule</th>
                                            <th>View Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['planing_data']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>

                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['customer_part_data']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->part_number;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['customer_part_data']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->part_description;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['customers_data']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->customer_name;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['t']->value->month;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['planing_data_new']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->schedule_qty;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['planing_data_new']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->schedule_qty_2;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['job_card_qty']->value[$_smarty_tpl->tpl_vars['t']->value->id];?>
</td>
                                            <td>
                                            <?php if (empty($_smarty_tpl->tpl_vars['planing_data_new']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->schedule_qty_2)) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['planing_data_new']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->schedule_qty-$_smarty_tpl->tpl_vars['job_card_qty']->value[$_smarty_tpl->tpl_vars['t']->value->id];?>

                                            <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['planing_data_new']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->schedule_qty_2-$_smarty_tpl->tpl_vars['job_card_qty']->value[$_smarty_tpl->tpl_vars['t']->value->id];?>

                                            <?php }?>
                                            </td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['issued']->value[$_smarty_tpl->tpl_vars['t']->value->id];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['closed']->value[$_smarty_tpl->tpl_vars['t']->value->id];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['rate']->value[$_smarty_tpl->tpl_vars['t']->value->id];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['dispatch_sales_qty']->value[$_smarty_tpl->tpl_vars['t']->value->id];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['balance_s_qty']->value[$_smarty_tpl->tpl_vars['t']->value->id];?>
</td>
                                            <td>
                                            <?php if (empty($_smarty_tpl->tpl_vars['planing_data_new']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->schedule_qty_2)) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['subtotal1']->value[$_smarty_tpl->tpl_vars['t']->value->id];?>

                                                <?php } else { ?>   
                                                <?php echo $_smarty_tpl->tpl_vars['subtotal2']->value[$_smarty_tpl->tpl_vars['t']->value->id];?>

                                            <?php }?>
                                            </td>
                                            <td>
                                            
                                                <a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
view_planing_data/<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
">View Details</a>
                                            </td>
                                        </tr>
                                        <?php if ($_smarty_tpl->tpl_vars['customers_data']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->id == $_smarty_tpl->tpl_vars['customer_id']->value) {?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['customer_part_data']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->part_number;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['customer_part_data']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->part_description;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['customers_data']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->customer_name;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['t']->value->month;?>
</td>
                                            <td>
                                                <a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
view_planing_data/<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
">View Details</a>
                                            </td>
                                        </tr>
                                       <?php }?>
                                       <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                    <tfoot>
                                        <tr style="text-align:right;">
                                            <th colspan="11">Total Sales Value</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['total1']->value;?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['total2']->value;?>
</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
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
