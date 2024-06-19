<?php
/* Smarty version 4.3.2, created on 2024-06-17 17:33:02
  from '/var/www/html/extra/erp_converted/application/views/templates/reports/sales_reports.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_667025f691cdd9_19395261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '250659980b3318e4436ac0ca9432af9ba761e476' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/reports/sales_reports.tpl',
      1 => 1718625778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667025f691cdd9_19395261 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper" style="width:2500px">
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
                        <h1>Sales Reports</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
dashboard">Home</a></li>
                            <li class="breadcrumb-item active">Po Balance Qty</li>
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
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exportForTally">
                                            Sales Export For Tally
                                        </button>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
sales_report" method="post">
                                            <div class="form-group">
                                                <label for="">Select Month <span class="text-danger">*</span></label>
                                                <select required name="created_month" id=""
                                                    class="form-control select2">
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
                                            <label for="">Select Year <span class="text-danger">*</span></label>
                                            <select required name="created_year" id="" class="form-control select2">
                                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2027+1 - (2022) : 2022-(2027)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 2022, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                <option <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['created_year']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                                <?php }
}
?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="submit" name="submit" class="btn btn-primary mt-4" value="Search">
                                        </form>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exportForTally" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Sales Export
                                                            Criteria</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
sales_report" method="POST">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Year:</label>
                                                            <select required name="search_year" id=""
                                                                class="form-control select2">
                                                                
                                                                <?php if ($_smarty_tpl->tpl_vars['created_month']->value < 4) {?>
                                                                    <?php $_smarty_tpl->_assignInScope('year_sel', $_smarty_tpl->tpl_vars['created_year']->value-1);?>
                                                                <?php }?>
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fincYears']->value, 'fyear');
$_smarty_tpl->tpl_vars['fyear']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fyear']->value) {
$_smarty_tpl->tpl_vars['fyear']->do_else = false;
?>
                                                                    <option <?php if ($_smarty_tpl->tpl_vars['fyear']->value->startYear == $_smarty_tpl->tpl_vars['year_sel']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['fyear']->value->startYear;?>
"><?php echo $_smarty_tpl->tpl_vars['fyear']->value->displayName;?>
</option>
                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Month:
                                                                <span class="small"><br>Month will be ignored if Sale
                                                                    Number field is provided.</span>
                                                            </label>
                                                            <select required name="search_month" id=""
                                                                class="form-control select2">
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
                                                        <div class="form-group">
                                                            <label>Sale Number/Range:</label>
                                                            <span class="small">
                                                                <br>For Individual Sale: Use only <b>number</b>,
                                                                example: <b>21</b>
                                                                <br>For Sales number range : Use <b>hyphen</b>, example:
                                                                <b>23-27</b>
                                                                <br>For Specific sales : Use <b>comma</b>, example:
                                                                <b>11,15,17,18</b>
                                                                <br>&nbsp;
                                                            </span>&nbsp;<br>
                                                            <input type="text" value="" name="sale_numbers"
                                                                class="form-control" id="sale_id"
                                                                aria-describedby="emailHelp">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" name="export" class="btn btn-primary"
                                                            value="XML Export">Export</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
add_job_card" method="POST"
                                                    enctype='multipart/form-data'>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="po_num">Select Customer Name / Customer Code
                                                                    / Part Number / Description </label><span
                                                                    class="text-danger">*</span>
                                                                <select name="customer_part_id" id=""
                                                                    class="form-control select2">
                                                                    <?php if ($_smarty_tpl->tpl_vars['customer_part']->value) {?>
                                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_part']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                                                                                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">
                                                                                                                                                            </option>
                                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                    <?php }?>
                                                                </select>

                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Required Quantity </label><span
                                                                    class="text-danger">*</span>
                                                                <input type="number" name="req_qty"
                                                                    placeholder="Enter Quantity" min="1" value=""
                                                                    class="form-control">

                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>CUSTOMER NAME</th>
                                                <th>Customer PO No</th>
                                                <th>SALES INV NO</th>
                                                <th>SALES INV DATE</th>
                                                <th>SALES STATUS</th>
                                                <th>PART NO</th>
                                                <th>PART NAME</th>
                                                <th>HSN</th>
                                                <th>QTY</th>
                                                <th>UOM</th>
                                                <th>Part Price</th>
                                                <th>BASIC AMOUNT TOTAL</th>
                                                <th>SGST</th>
                                                <th>CGST</th>
                                                <th>IGST</th>
                                                <th>TCS</th>
                                                <th>GST TOTAL AMOUNT</th>
                                                <th>TOTAL AMOUNT WITH GST</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                            <?php if ($_smarty_tpl->tpl_vars['sales_parts']->value) {?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sales_parts']->value, 'po');
$_smarty_tpl->tpl_vars['po']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->do_else = false;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['po']->value->basic_total > 0) {?>
                                                <?php $_smarty_tpl->_assignInScope('subtotal', $_smarty_tpl->tpl_vars['po']->value->basic_total);?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('subtotal', round($_smarty_tpl->tpl_vars['po']->value->total_rate-$_smarty_tpl->tpl_vars['po']->value->gst_amount,2));?>
                                                <?php }?>
                                                
                                                <?php if ($_smarty_tpl->tpl_vars['po']->value->part_price > 0) {?>
                                                    <?php $_smarty_tpl->_assignInScope('rate', $_smarty_tpl->tpl_vars['po']->value->part_price);?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('rate', round($_smarty_tpl->tpl_vars['subtotal']->value/$_smarty_tpl->tpl_vars['po']->value->qty,2));?>
                                                <?php }?>
                                                    <?php $_smarty_tpl->_assignInScope('row_total', round($_smarty_tpl->tpl_vars['po']->value->total_rate,2)+round($_smarty_tpl->tpl_vars['po']->value->tcs_amount,2));?>
                                                    <tr>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value->customer_name;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value->po_number;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value->salesNumber;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value->sales_date;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value->status;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value->part_number;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value->part_description;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value->hsn_code;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value->qty;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value->uom_id;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['subtotal']->value;?>
</td>
                                                        <td><?php echo round($_smarty_tpl->tpl_vars['po']->value->sgst_amount,2);?>
</td>
                                                        <td><?php echo round($_smarty_tpl->tpl_vars['po']->value->cgst_amount,2);?>
</td>
                                                        <td><?php echo round($_smarty_tpl->tpl_vars['po']->value->igst_amount,2);?>
</td>
                                                        <td><?php echo round($_smarty_tpl->tpl_vars['po']->value->tcs_amount,2);?>
</td>
                                                        <td><?php echo round($_smarty_tpl->tpl_vars['po']->value->gst_amount,2);?>
</td>
                                                        <td><?php echo round($_smarty_tpl->tpl_vars['row_total']->value,2);?>
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
