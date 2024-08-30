<?php
/* Smarty version 4.3.2, created on 2024-08-26 23:17:19
  from '/var/www/html/extra_work/erp_converted/application/views/templates/customer/customer_part_by_id.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66ccbfa77a6064_12603223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d3e168a8495dc938898f729902a151a10e4e7ff' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/customer/customer_part_by_id.tpl',
      1 => 1724694253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ccbfa77a6064_12603223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/extra_work/erp_converted/application/third_party/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="wrapper container-xxl flex-grow-1 container-p-y">
    <!-- Navbar -->
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <!-- Content Wrapper. Contains page content -->

    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme filter-popup-block" style="width: 0px;">
<div class="app-brand demo justify-content-between">
    <a href="javascript:void(0)" class="app-brand-link">
        <span class="app-brand-text demo menu-text fw-bolder ms-2">Filter</span>
    </a>
    <div class="close-filter-btn d-block filter-popup cursor-pointer">
            <i class="ti ti-x fs-8"></i>
        </div>
</div>
<nav class="sidebar-nav scroll-sidebar filter-block" data-simplebar="init">
  <div class="simplebar-content" >
    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <div class="filter-row">
          <li class="nav-small-cap">
            <span class="hide-menu">Select Customer</span>
            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
          </li>
          <li class="sidebar-item">
            <div class="input-group">
              <select name="customer_name" class="form-control select2" id="customer_name">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customers']->value, 'val');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
              <option 
                  value="<?php echo $_smarty_tpl->tpl_vars['val']->value->customer_name;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value->customer_name;?>
</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            </div>
          </li>
        </div>
          
        

    </ul>
  </div>
</nav>

<div class="filter-popup-btn">
        <button class="btn btn-outline-danger reset-filter">Reset</button>
        <button class="btn btn-primary search-filter">Search</button>
    </div>
</aside>

<nav aria-label="breadcrumb">
<div class="sub-header-left pull-left breadcrumb">
  <h1>
    Planning & Sales
    <a hijacked="yes" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
customer_master" class="backlisting-link" title="Back to Issue Request Listing" >
      <i class="ti ti-chevrons-right" ></i>
      <em >Customer Master</em></a>
  </h1>
  <br>
  <span >Customer Part</span>
</div>
</nav>
<div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
     <button type="submit" data-bs-toggle="modal" class="btn btn-seconday" data-bs-target="#exampleAddModal"> Customer Part
</button>
<button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
<button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
<button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
<button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button>
</div>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
      
        <!-- Main content -->
        <section class="content">
            <div class="">
                <div class="row">
                    <div class="col-12">
                        <!-- /.card -->
                        <div class="card">
                           
                            <!-- Add Modal -->
                            <div class="modal fade" id="exampleAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Customer Part</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
addcustomerpart" id="addcustomerpart" class="custom-form addcustomerpart" method="POST" enctype='multipart/form-data'>
                                                <div class="row" >
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="">Select Part <span class="text-danger">*</span></label>
                                                            <select name="customer_parts_master_id" class="required-input form-control select2" style="width: 100%;">
                                                                <?php if ($_smarty_tpl->tpl_vars['customer_parts_master']->value) {?>
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_parts_master']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
 / <?php echo $_smarty_tpl->tpl_vars['c']->value->part_description;?>
</option>
                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                <?php }?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="po_num">HSN Code </label>
                                                            <input type="text" name="hsn_code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label> Part Family </label><span class="text-danger">*</span>
                                                            <select readonly class="form-control select2 required-input" name="part_family" style="width: 100%;">
                                                                <?php if ($_smarty_tpl->tpl_vars['part_family']->value) {?>
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['part_family']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value->name;?>
</option>
                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                <?php }?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label> Select Tax Structure </label><span class="text-danger">*</span>
                                                            <select class="form-control select2" name="gst_id" style="width: 100%;">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gst_structure']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->code;?>
</option>
                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label> UOM </label><span class="text-danger">*</span>
                                                            <select  class="form-control select2 required-input" name="uom" style="width: 100%;">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['uom']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->uom_name;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->uom_name;?>
 - <?php echo $_smarty_tpl->tpl_vars['c']->value->uom_description;?>
</option>
                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="po_num">Packaging QTY </label><span class="text-danger">*</span>
                                                            <input type="text" data-min="0" step="1" name="packaging_qty"  class="form-control required-input onlyNumericInput"  id="packaging_quantity">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="po_num">Safety Stock </label><span class="text-danger">*</span>
                                                            <input type="text" name="safety_stock"  class="onlyNumericInput required-input form-control"  aria-describedby="emailHelp">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label> Customer List </label><span class="text-danger">*</span>
                                                            <select readonly class="form-control select2 required-input" name="customer_id" style="width: 100%;">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customers']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['customer_id']->value == $_smarty_tpl->tpl_vars['c']->value->id) {?>
                                                                        <option <?php if ($_smarty_tpl->tpl_vars['customer_id']->value == $_smarty_tpl->tpl_vars['c']->value->id) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->customer_name;?>
</option>
                                                                    <?php }?>
                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                        <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isPlastic']) {?>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="po_num">Gross weight (gram) <span class="text-danger">*</span></label>
                                                                <input type="text"  step="any" name="gross_weight" class="form-control onlyNumericInput required-input" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="po_num">Finish weight (gram) <span class="text-danger">*</span></label>
                                                                <input type="text"  step="any" name="finish_weight" class="form-control onlyNumericInput required-input" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="po_num">Runner weight (gram) <span class="text-danger">*</span></label>
                                                                <input type="text"  step="any" name="runner_weight" class="form-control onlyNumericInput required-input" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="po_num">Cycle Time <span class="text-danger">*</span></label>
                                                                <input type="text"  step="any" name="cycyle_time" class="form-control onlyNumericInput required-input" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="po_num">Production Target Per Shift <span class="text-danger">*</span></label>
                                                                <input type="text"  step="any" name="production_target_per_shift" class="form-control onlyNumericInput required-input" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                            </div>
                                                        </div>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isSheetMetal']) {?>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="po_num">RM Grade<span class="text-danger">*</span></label>
                                                                <input type="text"  name="rm_grade" class="form-control  required-input" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                            </div>
                                                        </div>
                                                            <?php if ($_smarty_tpl->tpl_vars['TusharEngg']->value) {?>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="thickness">Thickness<span class="text-danger">*</span></label>
                                                                    <input type="text" step="any"  name="thickness" class="form-control onlyNumericInput required-input" id="thickness" aria-describedby="thicknessHelp">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="passivationType">Passivation Type<span class="text-danger">*</span></label>
                                                                    <input type="text"  name="passivationType" class="form-control  required-input" id="passivationType" aria-describedby="passivationTypeHelp">
                                                                </div>
                                                            </div>
                                                            <?php }?>
                                                        <?php }?>
                                                        <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label> Select Type </label><span class="text-danger">*</span>
                                                            <select class="form-control select2 required-input" name="type" style="width: 100%;">
                                                                <option value="standard_po">Standard PO</option>
                                                                <option value="subcon_po">Subcon Po</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Select Is Service </label><span class="text-danger">*</span>
                                                            <select class="form-control select2  required-input"  name="isservice" style="width: 100%;">
                                                                <option value="">Select</option>
                                                                <option value="Y">YES</option>
                                                                <option value="N">NO</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="">
                            <div class="table-responsive text-nowrap">
                                <table id="example1" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <!-- <th>Sr. No.</th> -->
                                            <th>Add Production</th>
                                            <th>Customer Name</th>
                                            <th>Part Number</th>
                                            <th>Part Description</th>
                                            <th>PO Type</th>
                                            <th>Part Family</th>
                                            <th>Tax Structure</th>
                                            <th>UOM</th>
                                            <th>Packaging QTY</th>
                                            <th>HSN</th>
                                            <th>Safety Stock</th>
                                            <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isPlastic']) {?>
                                                <th>Gross Weight (gram)</th>
                                                <th>Finish Weight(gram)</th>
                                                <th>Runner Weight(gram)</th>
                                                <th>Cycyle time(sec)</th>
                                                <th>Production target per shift</th>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isSheetMetal']) {?>
                                                <th>RM Grade</th>
                                                <?php if ($_smarty_tpl->tpl_vars['TusharEngg']->value) {?>
                                                    <th>Thickness</th>
                                                    <th>Passivation Type</th>
                                                <?php }?>
                                            <?php }?>
                                            <th>Is Service</th>
                                            <th class="text-center">Update</th>
                                            <th class="text-center">Drawing Parameters</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                        <?php if ($_smarty_tpl->tpl_vars['customer_part_list']->value) {?>
                                            
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_part_list']->value, 'poo');
$_smarty_tpl->tpl_vars['poo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['poo']->value) {
$_smarty_tpl->tpl_vars['poo']->do_else = false;
?>
                                               
                                                <tr>
                                                    <!--<td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td> -->
                                                    <td>
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPromo">
                                                            Add Production Qty
                                                        </button>
                                                        <div class="modal fade" id="addPromo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Add Production Qty</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
add_production_qty" method="POST" enctype="multipart/form-data" class="add_production_qty add_production_qty<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 custom-form" id="add_production_qty<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                        <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label  for="on click url">Select Shift Type
                                                                                / Name / Start Time /
                                                                                End Time<span class="text-danger">*</span></label>
                                                                            <select name="shift_id" name="" id="" class="form-control select2 required-input" style="width: 100%;">
                                                                                <?php if ($_smarty_tpl->tpl_vars['shifts']->value) {?>
                                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shifts']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                                                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value->shift_type;?>
 / <?php echo $_smarty_tpl->tpl_vars['s']->value->name;?>
 / <?php echo $_smarty_tpl->tpl_vars['s']->value->start_time;?>
 / <?php echo $_smarty_tpl->tpl_vars['s']->value->end_time;?>
</option>
                                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                                <?php }?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="on click url">Select Operator<span class="text-danger">*</span></label>
                                                                            <select  name="operator_id" id="" class="form-control select2 required-input" style="width: 100%;">
                                                                                <?php if ($_smarty_tpl->tpl_vars['operator']->value) {?>
                                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['operator']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                                                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value->name;?>
</option>
                                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                                <?php }?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="on click url">Select Machine<span class="text-danger">*</span></label>
                                                                            <select  name="machine_id" id="" class="form-control select2 required-input" style="width: 100%;">
                                                                                <?php if ($_smarty_tpl->tpl_vars['machine']->value) {?>
                                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['machine']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                                                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value->name;?>
</option>
                                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                                <?php }?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="on click url">Select Inhouse Part /
                                                                                Customer Part<span class="text-danger">*</span></label>
                                                                            <select  name="output_part_id" id="" class="form-control select2 required-input" style="width: 100%;">
                                                                                <?php if ($_smarty_tpl->tpl_vars['operations_bom']->value) {?>
                                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['operations_bom']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                                                                                    <?php echo pr($_smarty_tpl->tpl_vars['s']->value->customer_part_number);?>

                                                                                        <?php if ($_smarty_tpl->tpl_vars['s']->value->customer_part_number == $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->part_number) {?>
                                                                                            <?php if ($_smarty_tpl->tpl_vars['operations_bom_inputs_data']->value[$_smarty_tpl->tpl_vars['s']->value->id]) {?>
                                                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value->customer_part_number;?>
 / <?php echo $_smarty_tpl->tpl_vars['output_part_data']->value[$_smarty_tpl->tpl_vars['s']->value->output_part_id][0]->part_number;?>
 / <?php echo $_smarty_tpl->tpl_vars['output_part_data']->value[$_smarty_tpl->tpl_vars['s']->value->output_part_id][0]->part_description;?>
 / <?php echo $_smarty_tpl->tpl_vars['s']->value->customer_part_number;?>
 / <?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
</option>
                                                                                            <?php }?>
                                                                                        <?php }?>
                                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                                <?php }?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="on click url">Enter QTY<span class="text-danger">*</span></label>
                                                                            <input type="text" data-min="1" value="1" name="qty"  class="onlyNumericInput form-control required-input">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="on click url">Enter Date
                                                                                <span class="text-danger">*</span></label>
                                                                            <input max="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
" type="date" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
" name="date" required class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save
                                                                            changes</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['customer_data']->value[0]->customer_name;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->part_number;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->part_description;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->type;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->part_family;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['gst_structure2']->value[$_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->gst_id][0]->code;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->uom;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->packaging_qty;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->hsn_code;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->safety_stock;?>
</td>
                                                    <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isPlastic']) {?>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->gross_weight;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->finish_weight;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->runner_weight;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->cycyle_time;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->production_target_per_shift;?>
</td>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isSheetMetal']) {?>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->rm_grade;?>
</td>
                                                        <?php if ($_smarty_tpl->tpl_vars['TusharEngg']->value) {?>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->thickness;?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->passivationType;?>
</td>
                                                        <?php }?>
                                                    <?php }?>
                                                    <td><?php if ($_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->isservice == 'Y') {?>YES<?php } else { ?>NO<?php }?></td>
                                                    <td class="text-center">
                                                        <a type="button" data-bs-toggle="modal" class="" data-bs-target="#exampleModaledit2333<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"> <i class="ti ti-edit"></i></a>
                                                        <div class="modal fade" id="exampleModaledit2333<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex=" -1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Update Part Details</h5>
                                                                      
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
updatecustomerpart_new" method="POST" enctype='multipart/form-data' id="updatecustomerpart_new<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="updatecustomerpart_new custom-form updatecustomerpart_new<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <input value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->id;?>
" type="hidden" name="id" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">
                                                                                    <div class="form-group">
                                                                                        <label for="po_num">Part Description<span class="text-danger">*</span></label>
                                                                                        <input type="text" name="upart_description"  class="form-control required-input" id="upart_description" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->part_description;?>
" aria-describedby="partDescriptionHelp">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label>Select Type </label><span class="text-danger">*</span>
                                                                                        <select class="form-control select2 required-input" name="type" style="width: 100%;">
                                                                                            <option value="standard_po" <?php if ($_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->type == 'standard_po') {?>selected<?php }?>>Standard PO</option>
                                                                                            <option value="subcon_po" <?php if ($_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->type == 'subcon_po') {?>selected<?php }?>>Subcon Po</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label> Part Family </label><span class="text-danger">*</span>
                                                                                        <select readonly class="form-control select2" name="part_family required-input" style="width: 100%;">
                                                                                            <?php if ($_smarty_tpl->tpl_vars['part_family']->value) {?>
                                                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['part_family']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                                                                                                
                                                                                                
                                                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value->name;?>
" <?php if (($_smarty_tpl->tpl_vars['p']->value->name == $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->part_family)) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value->name;?>
</option>
                                                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                                            <?php }?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                    <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isPlastic']) {?>
                                                                                        <div class="col-lg-6">
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Gross weight (gram) <span class="text-danger">*</span></label>
                                                                                            <input type="text"  step="any" name="gross_weight" class="form-control onlyNumericInput required-input" id="exampleInputEmail1" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->gross_weight;?>
" aria-describedby="emailHelp">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Finish weight (gram) <span class="text-danger">*</span></label>
                                                                                            <input type="text"  step="any" name="finish_weight" class="form-control required-input onlyNumericInput" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->finish_weight;?>
" aria-describedby="emailHelp">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Runner weight (gram) <span class="text-danger">*</span></label>
                                                                                            <input type="text"  step="any" name="runner_weight" class="form-control required-input onlyNumericInput" id="exampleInputEmail1" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->runner_weight;?>
" aria-describedby="emailHelp">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Cycle Time <span class="text-danger">*</span></label>
                                                                                            <input type="text"  step="any" name="cycyle_time" class="form-control required-input onlyNumericInput" id="exampleInputEmail1" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->cycyle_time;?>
" aria-describedby="emailHelp">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Production Target Per Shift <span class="text-danger">*</span></label>
                                                                                            <input type="text" required step="any" name="production_target_per_shift" class="required-input form-control onlyNumericInput" id="exampleInputEmail1" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->production_target_per_shift;?>
" aria-describedby="emailHelp">
                                                                                        </div>
                                                                                    </div>
                                                                                    <?php }?>
                                                                                    <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label for="po_num">RM Grade <span class="text-danger">*</span></label>
                                                                                        <input type="text"  name="rm_grade" class="form-control required-input" id="exampleInputEmail1" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->rm_grade;?>
" aria-describedby="emailHelp">
                                                                                    </div>
                                                                                </div>

                                                                                    <?php if ($_smarty_tpl->tpl_vars['TusharEngg']->value) {?>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group">
                                                                                            <label for="thickness">Thickness<span class="text-danger">*</span></label>
                                                                                            <input type="text" step="any"  name="thickness" class="form-control required-input" id="thickness" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->thickness;?>
" aria-describedby="thicknessHelp">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group">
                                                                                            <label for="passivationType">Passivation Type<span class="text-danger">*</span></label>
                                                                                            <input type="text"  name="passivationType" class="form-control required-input" id="passivationType" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->passivationType;?>
" aria-describedby="passivationTypeHelp">
                                                                                        </div>
                                                                                    </div>
                                                                                    <?php }?>
                                                                                    <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label for="safety_stock">Safety/buffer stock <span class="text-danger">*</span></label>
                                                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->safety_stock;?>
" name="safety_stock"  class="form-control required-input onlyNumericInput" id="exampleInputEmail1" placeholder="Enter Safety/buffer stock">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label for="hsn_code">HSN Code<span class="text-danger">*</span></label>
                                                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->hsn_code;?>
" name="hsn_code"  class="form-control required-input" id="exampleInputEmail1" placeholder="Enter HSN Code">
                                                                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->id;?>
" name="id" required class="form-control" id="exampleInputEmail1">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label> Select Tax Structure</label><span class="text-danger">*</span>
                                                                                        <select class="form-control select2 required-input" name="gst_id" style="width: 100%;">
                                                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gst_structure']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                                                                <option <?php if ($_smarty_tpl->tpl_vars['c']->value->id == $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->gst_id) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->code;?>
</option>
                                                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label> UOM </label><span class="text-danger">*</span>
                                                                                        <select class="form-control select2 required-input" readonly name="uom" style="width: 100%;">
                                                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['uom']->value, 'c1');
$_smarty_tpl->tpl_vars['c1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c1']->value) {
$_smarty_tpl->tpl_vars['c1']->do_else = false;
?>
                                                                                                <option <?php if ($_smarty_tpl->tpl_vars['c1']->value->uom_name == $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->uom) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['c1']->value->uom_name;?>
"><?php echo $_smarty_tpl->tpl_vars['c1']->value->uom_name;?>
</option>
                                                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label for="po_num">Packaging QTY </label><span class="text-danger">*</span>
                                                                                        <input type="text" min="0" step="1" name="packaging_qty" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->packaging_qty;?>
"  class="form-control required-input onlyNumericInput" id="packaging_quantity">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label> Select Is Service </label><span class="text-danger">*</span>
                                                                                        <select class="form-control select2 required-input "  name="isservice" style="width: 100%;">

                                                                                            <option value="">Select Is-Service</option>
                                                                                            <option value="Y" <?php if ($_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->isservice == 'Y') {?>selected<?php }?>>YES</option>
                                                                                            <option value="N" <?php if ($_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->isservice != 'Y') {?>selected<?php }?>>NO</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                               
                                                                            </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            </div>
                                                      
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
view_inspection_parm_details/<?php echo $_smarty_tpl->tpl_vars['customer_data']->value[0]->id;?>
/<?php echo $_smarty_tpl->tpl_vars['poo']->value->id;?>
">
                                                            <i class='ti ti-eye'></i>
                                                        </a>
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



<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/public/js/planning_and_sales/customer_part.js"><?php echo '</script'; ?>
>
<?php }
}
