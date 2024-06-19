<?php
/* Smarty version 4.3.2, created on 2024-06-17 11:52:09
  from '/var/www/html/extra/erp_converted/application/views/templates/reports/reports_grn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_666fd6115ba577_41384943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '480c9d840b3f1e8467ae5df8171fcae50bef0622' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/reports/reports_grn.tpl',
      1 => 1718605308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666fd6115ba577_41384943 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- 
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Reports : GRN Reports</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo '<?php'; ?>
 echo base_url('dashboard'); <?php echo '?>'; ?>
">Home</a></li>
                            <li class="breadcrumb-item active">GRN Reports</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section> 
        -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
reports_grn" method="post">
                                            <div class="form-group">
                                                <label for="">Select Month <span class="text-danger">*</span></label>
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
                                    <div class="col-lg-1">
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
                                        <input type="submit" class="btn btn-primary mt-4" value="Search">
                                    </div>
                                    </form>
                                    <div class="col-lg-3">
                                        <button type="button" class="btn btn-dark mt-4" data-toggle="modal" data-target="#exportForTally">Export For Tally</button>
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="col-sm-2">
                                        <?php if ($_smarty_tpl->tpl_vars['showDocRequestDetails']->value == "true") {?>
                                            Format No: STR-F-03 <br>
                                            Rev.Date : 11/10/2017 <br>
                                            Rev.No.  : 00
                                        <?php }?>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="exportForTally" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Export Criteria</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
grn_excel_export" method="POST">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Only Accepted Status GRN will be exported.</label>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Year:</label>
                                                <select required name="search_year" id="" class="form-control select2">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fincYears']->value, 'fyear');
$_smarty_tpl->tpl_vars['fyear']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fyear']->value) {
$_smarty_tpl->tpl_vars['fyear']->do_else = false;
?>
                                                        <option <?php if ($_smarty_tpl->tpl_vars['fyear']->value->startYear == $_smarty_tpl->tpl_vars['created_year']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['fyear']->value->startYear;?>
"><?php echo $_smarty_tpl->tpl_vars['fyear']->value->displayName;?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Month:</label>
                                                <span class="small"><br>Month will be ignored if GRN Number field is provided.</span>
                                                <select required name="search_month" id="" class="form-control select2">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['month_data']->value, 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                                                        <option <?php if ($_smarty_tpl->tpl_vars['month_number']->value[$_smarty_tpl->tpl_vars['key']->value] == $_smarty_tpl->tpl_vars['created_month']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['month_number']->value[$_smarty_tpl->tpl_vars['key']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>GRN Number/Range:</label>
                                                <span class="small">
                                                    <br>For Individual GRN: Use only <b>number</b>, example: <b>21</b>
                                                    <br>For GRN number range: Use <b>hyphen</b>, example: <b>23-27</b>
                                                    <br>For Specific GRN: Use <b>comma</b>, example: <b>11,15,17,18</b>
                                                    <br>&nbsp;
                                                </span>&nbsp;<br>
                                                <input type="text" value="" name="grn_numbers" class="form-control" id="grn_id" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" name="export" class="btn btn-primary" value="XML Export">Export</button>
                                        </div>
                                        </div>
                                        </form>
                            </div>
                        </div>
                        

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
add_job_card" method="POST" enctype='multipart/form-data'>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="po_num">Select Customer Name / Customer Code / Part Number / Description </label><span class="text-danger">*</span>
                                                            <select name="customer_part_id" id="" class="from-control select2">
                                                                <?php if ($_smarty_tpl->tpl_vars['customer_part']->value) {?>
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_part']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                                        <?php $_smarty_tpl->_assignInScope('customer', $_smarty_tpl->tpl_vars['Crud']->value->get_data_by_id("customer",$_smarty_tpl->tpl_vars['c']->value->customer_id,"id"));?>
                                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->customer_name;?>
/<?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->customer_code;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value->part_description;?>
</option>
                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                <?php }?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="po_num">Required Quantity </label><span class="text-danger">*</span>
                                                            <input type="number" name="req_qty" placeholder="Enter Quantity" min="1" value="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                            </form>
                                        </div>
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
                                            <th>Part Rate</th>
                                            <th>HSN</th>
                                            <th>UOM</th>
                                            <th>PO No</th>
                                            <th>PO Date</th>
                                            <th>GRN No</th>
                                            <th>GRN Date</th>
                                            <th>Invoice Number</th>
                                            <th>Invoice Date</th>
                                            <th>PO Qty</th>
                                            <th>Accepted QTY</th>
                                            <th>Basic Amount</th>
                                            <th>SGST</th>
                                            <th>CGST</th>
                                            <th>IGST</th>
                                            <th>TCS</th>
                                            <th>GST Total</th>
                                            <th>Total Amount With GST</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grn_details']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
                                            <?php $_smarty_tpl->_assignInScope('gst_amount', $_smarty_tpl->tpl_vars['g']->value->sgst_amount+$_smarty_tpl->tpl_vars['g']->value->cgst_amount+$_smarty_tpl->tpl_vars['g']->value->igst_amount+$_smarty_tpl->tpl_vars['g']->value->tcs_amount);?>
                                            <?php $_smarty_tpl->_assignInScope('total_with_gst', $_smarty_tpl->tpl_vars['gst_amount']->value+$_smarty_tpl->tpl_vars['g']->value->base_amount);?>
                                            <?php $_smarty_tpl->_assignInScope('tcs_amount', 0);?>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['g']->value->tcs_amount)) {?>
                                                <?php $_smarty_tpl->_assignInScope('tcs_amount', $_smarty_tpl->tpl_vars['g']->value->tcs_amount);?>
                                            <?php }?>
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['g']->value->supplier_name;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['g']->value->part_number;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['g']->value->part_description;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['g']->value->rate;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['g']->value->hsn_code;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['g']->value->uom_name;?>
</td>
                                                <td style="white-space: nowrap;"><?php echo $_smarty_tpl->tpl_vars['g']->value->poNumber;?>
</td>
                                                <td style="white-space: nowrap;"><?php echo $_smarty_tpl->tpl_vars['po_date']->value[$_smarty_tpl->tpl_vars['g']->value->poNumber];?>
</td>
                                                <td style="white-space: nowrap;"><?php echo $_smarty_tpl->tpl_vars['g']->value->grn_number;?>
</td>
                                                <td style="white-space: nowrap;"><?php echo $_smarty_tpl->tpl_vars['g']->value->grn_created_date;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['g']->value->invoice_number;?>
</td>
                                                <td style="white-space: nowrap;"><?php echo $_smarty_tpl->tpl_vars['invoice_date']->value[$_smarty_tpl->tpl_vars['g']->value->invoice_date];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['g']->value->po_qty;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['g']->value->accept_qty;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['g']->value->base_amount;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['g']->value->sgst_amount;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['g']->value->cgst_amount;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['g']->value->igst_amount;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['tcs_amount']->value;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['gst_amount']->value;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['total_with_gst']->value;?>
</td>
                                            </tr>
                                            <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
