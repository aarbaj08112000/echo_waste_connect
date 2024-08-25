<?php
/* Smarty version 4.3.2, created on 2024-08-25 20:26:40
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\customer\planing_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66cb4628129092_73128681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '493c9077a352ac9f9f99f33cd363115cd79353d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\customer\\planing_data.tpl',
      1 => 1724496254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cb4628129092_73128681 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.select2-container--default{
    width: 100%!important;
}
</style>
<div class="wrapper container-xxl flex-grow-1 container-p-y">

<nav aria-label="breadcrumb">
      <div class="sub-header-left pull-left breadcrumb">
        <h1>
          Planning & Sales
          <a hijacked="yes"  class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Planning data</em></a>
        </h1>
        <br>
        <span >Planning data</span>
      </div>
    </nav>
    <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5 listing-btn">
            <a type="button" class="btn btn-seconday" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Add Planing</a>
            <a type="button" class="btn btn-seconday" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal1212">
                                    Add FG Stock</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
view_all_child_parts_schedule/<?php echo $_smarty_tpl->tpl_vars['financial_year']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
"
                                    class="btn btn-seconday">
                                    Monthly MRP Req</a>
            <a type="button" class="btn  btn-seconday" data-bs-toggle="modal"
                                    data-bs-target="#exportCustomerPartsOnly">
                                    Export Format</a>
            <a type="button" class="btn btn-seconday" data-bs-toggle="modal"
                                    data-bs-target="#importCustomerPartsOnly">
                                    Import Data</a>
        </div>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        

        <!-- Main content -->
        <section class="content">
            <div class="">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header1">
                                <!-- <div class="col-6"> -->
                                
                                <!-- Button trigger modal -->
                                
                                <!-- Button trigger modal -->
                                
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1212" role="dialog"
                                    aria-labelledby="exampleModal1212Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role=" document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModal1212Label">Add FG Stock</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
add_planning_fg_stock" method="POST" id="planningFgStockForm">
                                            <div class="modal-body">
                                                    <div class="row">
                                                    <div class="col-lg-12">
                                                            <div class="form-group">
                                                            <label for="">Customer <span class="text-danger">*</span></label>
                                                            <select name="customer_id" id="customer_tracking1" required id="" class="form-control select2">
                                                                <option value=''>Select</option>
                                                                <?php if ($_smarty_tpl->tpl_vars['customer']->value) {?>
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                                                                   <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value->customer_name;?>
</option>
                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                <?php }?>
                                                            </select> 
                                                            </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                <label for="">Select Customer Part Number / Description
                                                                <span class="text-danger">*</span> </label>
                                                                <select name="customer_part_id1" id="customer_part_id1" required class="form-control select2">
                                                                    <option value=''>Please select</option>
                                                                </select>
                                                            </div>

                                                        <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label for="contractorName">Select Month
                                                                    </label><span class="text-danger">*</span>
                                                                    <select name="month_id" id=""
                                                                        class="form-control select2">
                                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
">
                                                                            <?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</option>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label for="contractorName">Production
                                                                        Quantity</label><span
                                                                        class="text-danger">*</span>
                                                                    <input type="text"  name="fg_stock"
                                                                        class="form-control onlyNumericInput">
                                                                    <input type="hidden" required name="financial_year"
                                                                        value="<?php echo $_smarty_tpl->tpl_vars['financial_year']->value;?>
"
                                                                        class="form-control">
                                                                </div>

                                                            </div>


                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                    </form> 
                                                    </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal End-->

                                
                                <!-- </div>
                                <div class="col-6" style="align:right;"> -->
                                

                                <!-- Export Modal -->
                                <div class="modal fade" id="exportCustomerPartsOnly" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Export Customer Data for Planning Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                             <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
planning_export_customer_part"
                                                    method="POST" id="planning_export_customer_part" class="custom-form">
                                            <div class="modal-body">
                                               
                                                    <div class="row">
                                                        <div class="col-lg-10 form-group">
                                                            <label for="contractorName">Customer</label><span
                                                                class="text-danger">*</span>
                                                            <select name="customer_id" id=""
                                                                class="form-control select2 required-input" >
                                                                <option value="">Select</option>
                                                                <?php if ($_smarty_tpl->tpl_vars['customer']->value) {?>
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
                                                                    <?php echo $_smarty_tpl->tpl_vars['c']->value->customer_name;?>
</option>
                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                <?php }?>
                                                            </select>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['financial_year']->value;?>
"
                                                    class="hidden" name="financial_year">
                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
"
                                                    class="hidden" name="month">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Export</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                
                                
                                 <!-- Import Modal -->
                                 <div class="modal fade" id="importCustomerPartsOnly" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Import Planning Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
import_customer_planning" 
                                                method="POST" enctype='multipart/form-data' id="import_customer_planning" class="custom-form">
                                                    <div class="row">
                                                        <div class="col-lg-10">
                                                            <div class="form-group">
                                                            <label>Customer</label><span
                                                                class="text-danger">*</span>
                                                            <select name="customer_id" id=""
                                                                class="form-control select2 required-input" >
                                                                <option value="">Select</option>
                                                                <?php if ($_smarty_tpl->tpl_vars['customer']->value) {?>
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
                                                                    <?php echo $_smarty_tpl->tpl_vars['c']->value->customer_name;?>
</option>
                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                <?php }?>
                                                            </select>
                                                        </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Upload Plan</label><span
                                                                class="text-danger">*</span>
                                                                <input type="file" name="uploadedDoc"  class="required-input form-control" id="exampleuploadedDoc" placeholder="Upload Plan" aria-describedby="uploadDocHelp">
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['segment_2']->value;?>
"
                                                    class="hidden">
                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['segment_3']->value;?>
"
                                                    class="hidden">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Import</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                   
                                <!-- Add Planning Modal -->
                                <div class="modal fade" id="exampleModal" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role=" document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Planing</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
add_planning_data" method="POST" id="planningForm">
                                            <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                            <label for="">Customer <span class="text-danger">*</span></label>
                                                            <select name="customer_id" id="customer_tracking" required id="" class="form-control select2">
                                                                <option value=''>Select</option>
                                                                <?php if ($_smarty_tpl->tpl_vars['customer']->value) {?>
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                                                                   <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value->customer_name;?>
</option>
                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                <?php }?>
                                                            </select> 
                                                            </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                <label for="">Select Customer Part Number / Description
                                                                <span class="text-danger">*</span> </label>
                                                                <select name="customer_part_id" id="customer_part_id" required class="form-control select2">
                                                                    <option value=''>Please select</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label for="contractorName">Select Month
                                                                    </label><span class="text-danger">*</span>
                                                                    <select name="month_id" id=""
                                                                        class="form-control select2">
                                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
">
                                                                            <?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">

                                                                <div class="form-group">
                                                                    <label for="contractorName">Enter Schedule Qty
                                                                    </label><span class="text-danger">*</span>
                                                                    <input type="text"  name="schedule_qty"
                                                                        class="form-control onlyNumericInput">
                                                                    <input type="hidden" required name="financial_year"
                                                                        value="<?php echo $_smarty_tpl->tpl_vars['financial_year']->value;?>
"
                                                                        class="form-control">
                                                                </div>

                                                            </div>


                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                        </div>
                                                        </form>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="card-header">
                            
                            <!-- Button trigger modal -->
                            <div class="row">
                                <div class="col-lg-2">
                                    <form
                                        action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
planing_data/<?php echo $_smarty_tpl->tpl_vars['financial_year']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
/0"
                                        method="post">
                                        <div class="form-group">
                                            <label for="">Select Customer</label>
                                            <select name="customer_id" id="customer_id" class="form-control select2" required>
                                                 <option value="">Select</option>
                                                <?php if ($_smarty_tpl->tpl_vars['customer']->value) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                <option <?php if ($_smarty_tpl->tpl_vars['c']->value->id == $_smarty_tpl->tpl_vars['customer_id']->value) {?> selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['c']->value->customer_name;?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php }?>
                                                <option value="ALL">ALL</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <input type="hidden" name="financial_year"
                                            value="<?php echo $_smarty_tpl->tpl_vars['financial_year']->value;?>
">
                                        <input type="hidden" name="month" value="<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
">
                                        <button type="submit" class="btn btn-primary mt-4">Search</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class="card p-0 mt-4">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr. No..</th>
                                    <th>Customer Part Number</th>
                                    <th>Customer Part Description</th>
                                    <th>Customer Name</th>
                                    <th>Month </th>
                                    <th>Schedule Qty</th>
                                    <!--<th>Schedule Qty 2</th> -->
                                    <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isJobCard'] != null) {?>
                                    <th>Job Card Qumulative Qty</th>
                                    <th>Job Card Balance Qty</th>
                                    <th>Job Card Issued</th>
                                    <th>Job Card Closed</th>
                                    <?php }?>
                                    <!-- <th>Customer Part Price</th>-->
                                    <th>Dispatch (sales qty) </th>
                                    <th>Balance Schedule qty </th>
                                    <th>Subtotal Schedule </th>
                                    <!-- <th>Subtotal Schedule 2</th> -->
                                    <th class="noExport">View</th>
                                    <th class="noExport">Edit</th>
                                </tr>
                            </thead>
                                       
                            <tbody>
                                <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                <?php $_smarty_tpl->_assignInScope('total1', 0);?>
                                <?php $_smarty_tpl->_assignInScope('total2', 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['planing_data']->value) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['planing_data']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['month']->value == $_smarty_tpl->tpl_vars['t']->value->month) {?>
                                            <?php $_smarty_tpl->_assignInScope('issued', 0);?>
                                            <?php $_smarty_tpl->_assignInScope('closed', 0);?>
                                            <?php $_smarty_tpl->_assignInScope('main_qty', $_smarty_tpl->tpl_vars['planing_data']->value[0]->schedule_qty);?>
                                            <?php $_smarty_tpl->_assignInScope('subtotal1', 0);?>
                                            <?php $_smarty_tpl->_assignInScope('rate', 0);?>
                                            <?php if ($_smarty_tpl->tpl_vars['customer_part_rate']->value[$_smarty_tpl->tpl_vars['t']->value->customer_part_id]) {?>
                                                <?php $_smarty_tpl->_assignInScope('rate', $_smarty_tpl->tpl_vars['customer_part_rate']->value[$_smarty_tpl->tpl_vars['t']->value->customer_part_id][0]->rate);?>
                                                <?php $_smarty_tpl->_assignInScope('subtotal1', $_smarty_tpl->tpl_vars['customer_part_rate']->value[$_smarty_tpl->tpl_vars['t']->value->customer_part_id][0]->rate*$_smarty_tpl->tpl_vars['planing_data']->value[0]->schedule_qty);?>

                                                <?php $_smarty_tpl->_assignInScope('total1', $_smarty_tpl->tpl_vars['total1']->value+$_smarty_tpl->tpl_vars['subtotal1']->value);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_assignInScope('total_dispatched_qty', 0);?>
                                            <?php if ($_smarty_tpl->tpl_vars['sales_invoice']->value[$_smarty_tpl->tpl_vars['t']->value->customer_part_id]) {?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sales_invoice']->value[$_smarty_tpl->tpl_vars['t']->value->customer_part_id], 'sale');
$_smarty_tpl->tpl_vars['sale']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sale']->value) {
$_smarty_tpl->tpl_vars['sale']->do_else = false;
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['sale']->value->dispatched_qty > 0) {?>
                                                        <?php $_smarty_tpl->_assignInScope('dispatch_sales_qty', $_smarty_tpl->tpl_vars['sale']->value->dispatched_qty);?>
                                                    <?php } else { ?>
                                                        <?php $_smarty_tpl->_assignInScope('dispatch_sales_qty', 0);?>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->_assignInScope('total_dispatched_qty', $_smarty_tpl->tpl_vars['total_dispatched_qty']->value+$_smarty_tpl->tpl_vars['dispatch_sales_qty']->value);?>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_assignInScope('balance_s_qty', $_smarty_tpl->tpl_vars['planing_data']->value[0]->schedule_qty-$_smarty_tpl->tpl_vars['total_dispatched_qty']->value);?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['customer_part_data']->value[$_smarty_tpl->tpl_vars['t']->value->customer_part_id][0]->part_number;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['customer_part_data']->value[$_smarty_tpl->tpl_vars['t']->value->customer_part_id][0]->part_description;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['customers_data']->value[0]->customer_name;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->month;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['planing_data']->value[0]->schedule_qty;?>
</td>
                                    <!-- <td><?php echo $_smarty_tpl->tpl_vars['planing_data']->value[0]->schedule_qty_2;?>
</td> -->
                                    <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isJobCard'] != null) {?>
                                    <td></td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['planing_data']->value[0]->schedule_qty-$_smarty_tpl->tpl_vars['job_card_qty']->value;?>

                                    </td>

                                    <td><?php echo $_smarty_tpl->tpl_vars['issued']->value;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['closed']->value;?>
</td>
                                    <?php }?>
                                    <!-- <td><?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
</td> -->
                                    <!-- <td><?php echo $_smarty_tpl->tpl_vars['subtotal1']->value;?>
-->
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['total_dispatched_qty']->value;?>

                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['balance_s_qty']->value;?>

                                    </td>
                                    <td>
                                        Rs. <?php echo $_smarty_tpl->tpl_vars['subtotal1']->value;?>
 
                                    </td>
                                    <td class="noExport">
                                        <a class="btn btn-info"
                                            href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
view_planing_data/<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['customer_part_data']->value[$_smarty_tpl->tpl_vars['t']->value->customer_part_id][0]->customer_id;?>
"><i class="fas fa-eye"></i></a>
                                            <!-- Edit Modal -->
                                    </td>
                                    <td>
                                        <button title="Edit" type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#editenew<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                                                               <div class="modal fade" id="editenew<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
update_planning_data"
                                                            method="POST" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <label for="contractorName">Enter Schedule Qty</label>
                                                                <span class="text-danger">*</span>
                                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['planing_data']->value[0]->schedule_qty;?>
"  name="schedule_qty"
                                                                    class="form-control onlyNumericInput">
                                                                <input required value="<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
"
                                                                    type="hidden" class="form-control"
                                                                    name="planning_id">
                                                                <input required value="<?php echo $_smarty_tpl->tpl_vars['t']->value->customer_part_id;?>
"
                                                                    type="hidden" class="form-control"
                                                                    name="cust_part_id">
                                                                <input required value="<?php echo $_smarty_tpl->tpl_vars['t']->value->month;?>
"
                                                                    type="hidden" class="form-control"
                                                                    name="month_id">
                                                                <input required value="<?php echo $_smarty_tpl->tpl_vars['t']->value->financial_year;?>
"
                                                                    type="hidden" class="form-control"
                                                                    name="financial_year">
                                                                <input required value="<?php echo $_smarty_tpl->tpl_vars['customer_part_data']->value[$_smarty_tpl->tpl_vars['t']->value->customer_part_id][0]->customer_id;?>
"
                                                                    type="hidden" class="form-control"
                                                                    name="customer_id">
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save
                                                            changes</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Edit Modal Ends -->
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
                        <div class="card-header">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"></div>
                                <div class="col-lg-2" style="color: crimson;">
                                    <b>Total Sales Value: Rs. <?php echo $_smarty_tpl->tpl_vars['total1']->value;?>
</b>
                                </div>
                            </div>
                        </div>
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


<?php echo '<script'; ?>
>
    $(document).ready(function() {

    $('#planningForm').validate({
        // Define validation rules
        rules: {
            customer_id: {
                required: true
            },
            customer_part_id: {
                required: true
            },
            month_id: {
                required: true
            },
            schedule_qty: {
                required: true
            }
        },
        // Define validation messages
        messages: {
            customer_id: {
                required: "Please select a customer."
            },
            customer_part_id: {
                required: "Please select a customer part number."
            },
            month_id: {
                required: "Please select a month."
            },
            schedule_qty: {
                required: "Please enter the schedule quantity.",
                number: "Please enter a valid number."
            }
        },

        errorPlacement: function (error, element) {
            
            if (element[0].localName == "select") {
                element.parents(".form-group").append(error)
                // error.insertAfter($(element).parents('div').prev($('.question')));
            } else {
                error.insertAfter(element);
                // something else if it's not a checkbox
            }
        },
        // Handle form submission
        submitHandler: function (form) {
            $.ajax({
                url: $(form).attr('action'), // Get the form action URL
                type: 'POST',                // Set the request type
                data: $(form).serialize(),   // Serialize the form data
                success: function (response) {
                    // Handle success response
                    toastr.success('Planning data added successfully!');
                    // Optionally, close the modal or perform other actions
                    setTimeout(() => {
                        window.location.reload();
                    }, 1000);
                    $('.modal').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Handle error response
                    toastr.error('Error adding planning data: ' + textStatus);
                }
            });
        }
    });


    $('#planningFgStockForm').validate({
        // Define validation rules
        rules: {
            customer_id: {
                required: true
            },
            customer_part_id1: {
                required: true
            },
            month_id: {
                required: true
            },
            fg_stock: {
                required: true,
                number: true
            }
        },
        // Define validation messages
        messages: {
            customer_id: {
                required: "Please select a customer."
            },
            customer_part_id1: {
                required: "Please select a customer part number."
            },
            month_id: {
                required: "Please select a month."
            },
            fg_stock: {
                required: "Please enter the production quantity.",
                number: "Please enter a valid number."
            }
        },
        errorPlacement: function (error, element) {
            
            if (element[0].localName == "select") {
                element.parents(".form-group").append(error)
                // error.insertAfter($(element).parents('div').prev($('.question')));
            } else {
                error.insertAfter(element);
                // something else if it's not a checkbox
            }
        },
        // Handle form submission
        submitHandler: function (form) {
            $.ajax({
                url: $(form).attr('action'), // Get the form action URL
                type: 'POST',                // Set the request type
                data: $(form).serialize(),   // Serialize the form data
                success: function (response) {
                    // Handle success response
                    toastr.success('Planning fg stock added successfully!');
                    // Optionally, close the modal or perform other actions
                    setTimeout(() => {
                        window.location.reload();
                    }, 1000);
                    // Optionally, close the modal or perform other actions
                    $('.modal').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Handle error response
                    toastr.error('Error adding planning FG Stock data: ' + textStatus);
                }
            });
        }
    });

        var customer_id = $("#customer_tracking").val();
        $.ajax({
            url: '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
PlanningController/get_customer_parts_for_planning',
            type: "POST",
            data: {
                id: customer_id
            },
            cache: false,
            beforeSend: function() {},
            success: function(response) {
                if (response) {
                    $('#customer_part_id').html(response);
                } else {
                    $('#customer_part_id').html(response);
                }
            }
        });

        $("#customer_tracking").change(function() {
            var customer_id = $("#customer_tracking").val();
            $.ajax({
                url: '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
PlanningController/get_customer_parts_for_planning',
                type: "POST",
                data: {
                    id: customer_id
                },
                cache: false,
                beforeSend: function() {},
                success: function(response) {
                    if (response) {
                        $('#customer_part_id').html(response);
                    } else {
                        $('#customer_part_id').html(response);
                    }
                }
            });
        });

        var customer_id = $("#customer_tracking1").val();
        $.ajax({
            url: '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
PlanningController/get_customer_parts_for_planning',
            type: "POST",
            data: {
                id: customer_id
            },
            cache: false,
            beforeSend: function() {},
            success: function(response) {
                if (response) {
                    $('#customer_part_id1').html(response);
                } else {
                    $('#customer_part_id1').html(response);
                }
            }
        });

        $("#customer_tracking1").change(function() {
            var customer_id = $("#customer_tracking1").val();
            $.ajax({
                url: '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
PlanningController/get_customer_parts_for_planning',
                type: "POST",
                data: {
                    id: customer_id
                },
                cache: false,
                beforeSend: function() {},
                success: function(response) {
                    if (response) {
                        $('#customer_part_id1').html(response);
                    } else {
                        $('#customer_part_id1').html(response);
                    }
                }
            });
        });

        $("#customerTracking").change(function() {
            var customer_id = $("#customerTracking").val();
            $.ajax({
                url: '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
PlanningController/get_customer_parts_for_planning',
                type: "POST",
                data: {
                    id: customer_id
                },
                cache: false,
                beforeSend: function() {},
                success: function(response) {
                    if (response) {
                        $('#customerPartId').html(response);
                    } else {
                        $('#customerPartId').html(response);
                    }
                }
            });
        });
        $('#planning_export_customer_part').on('submit', function(event) {
            // Prevent the form from submitting via the browser
           var form = $(this);
           var formData = form.serialize();
           let flag = formValidate("planning_export_customer_part");
            if(flag){
                event.preventDefault();
                    return;
            }else{
               
            }
        });
        $('#import_customer_planning').on('submit', function(event) {
            // Prevent the form from submitting via the browser
           var form = $(this);
           var formData = form.serialize();
           let flag = formValidate("import_customer_planning");
            if(flag){
                event.preventDefault();
                    return;
            }else{
               event.preventDefault(); // Prevent the form from submitting via the browser
               var form = $(this);
               var formData = form.serialize();
           
               $.ajax({
                   type: 'POST',
                   url: form.attr('action'),
                   data: formData,
                   success: function(response) {
                       var responseObject = JSON.parse(response);
                        var msg = responseObject.message;
                        var success = responseObject.success;
                        if (success == 1) {
                            toastr.success(msg);
                            setTimeout(function(){
                                window.location.reload();
                            },1000);

                        } else {
                            toastr.error(msg);
                        }
                   },
                   error: function(xhr, status, error) {
                       // Handle error
                       toastr.success('unable to delete part.')
                   }
               });
            }
        });

     function formValidate(form_class = ''){
        let flag = false;
        $(".custom-form#"+form_class+" .required-input").each(function( index ) {
          var value = $(this).val();

          if(value == ''){
            flag = true;
            var label = $(this).parents(".form-group").find("label").contents().filter(function() {
                return this.nodeType === 3; // Filter out non-text nodes (nodeType 3 is Text node)
            }).text().trim();
            var exit_ele = $(this).parents(".form-group").find("label.error");
            if(exit_ele.length == 0){
                var start ="Please enter ";
                if($(this).prop("localName") == "select"){
                    var start ="Please select ";
                }
                label = ((label.toLowerCase()).replace("enter", "")).replace("select", "");
                var validation_message = start+(label.toLowerCase()).replace(/[^\w\s*]/gi, '');
                var label_html = "<label class='error'>"+validation_message+"</label>";
                $(this).parents(".form-group").append(label_html)
            }
            
          }
        });
        return flag;
    }
    });
<?php echo '</script'; ?>
><?php }
}
