<?php
/* Smarty version 4.3.2, created on 2024-06-18 20:11:28
  from '/var/www/html/extra/erp_converted/application/views/templates/customer/customer_part_by_id.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66719c982f3af0_18255846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79b4496543ff11c2d9b0c208b265d2f8c881ad03' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/customer/customer_part_by_id.tpl',
      1 => 1718721429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66719c982f3af0_18255846 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/extra/erp_converted/application/third_party/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="wrapper" style="width:2500px">
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
                        <h1>Customer Part </h1>
                    </div>
                    <div class="col-sm-6">
                        <!-- <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Home</a></li>
                            <li class="breadcrumb-item active">Customer Part</li>
                        </ol> -->
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
                                    <div class="col-lg-1">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
customer_master" class="btn btn-dark ">
                                            < Back </a>
                                    </div>
                                    <div class="col-lg-1">
                                        <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleAddModal">Add</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Modal -->
                            <div class="modal fade" id="exampleAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Customer Part</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
addcustomerpart" method="POST" enctype='multipart/form-data'>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="">Select Part <span class="text-danger">*</span></label>
                                                            <select name="customer_parts_master_id" required id="" class="form-control select2">
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
                                                        <div class="form-group">
                                                            <label for="po_num">HSN Code </label>
                                                            <input type="text" name="hsn_code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group">
                                                            <label> Part Family </label><span class="text-danger">*</span>
                                                            <select readonly class="form-control select2" name="part_family" style="width: 100%;">
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
                                                        <div class="form-group">
                                                            <label> UOM </label><span class="text-danger">*</span>
                                                            <select readonly class="form-control select2" name="uom" style="width: 100%;">
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
                                                        <div class="form-group">
                                                            <label for="po_num">Packaging QTY </label><span class="text-danger">*</span>
                                                            <input type="number" min="0" step="1" name="packaging_qty" required class="form-control" id="packaging_quantity">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="po_num">Safety Stock </label><span class="text-danger">*</span>
                                                            <input type="number" name="safety_stock" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        </div>

                                                        <div class="form-group">
                                                            <label> Customer List </label><span class="text-danger">*</span>
                                                            <select readonly class="form-control select2" name="customer_id" style="width: 100%;">
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
                                                        <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isPlastic']) {?>
                                                            <div class="form-group">
                                                                <label for="po_num">Gross weight (gram) <span class="text-danger">*</span></label>
                                                                <input type="number" required step="any" name="gross_weight" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Finish weight (gram) <span class="text-danger">*</span></label>
                                                                <input type="number" required step="any" name="finish_weight" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Runner weight (gram) <span class="text-danger">*</span></label>
                                                                <input type="number" required step="any" name="runner_weight" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Cycle Time <span class="text-danger">*</span></label>
                                                                <input type="number" required step="any" name="cycyle_time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Production Target Per Shift <span class="text-danger">*</span></label>
                                                                <input type="number" required step="any" name="production_target_per_shift" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                            </div>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isSheetMetal']) {?>
                                                            <div class="form-group">
                                                                <label for="po_num">RM Grade<span class="text-danger">*</span></label>
                                                                <input type="text" required name="rm_grade" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                            </div>
                                                            <?php if ($_smarty_tpl->tpl_vars['TusharEngg']->value) {?>
                                                                <div class="form-group">
                                                                    <label for="thickness">Thickness<span class="text-danger">*</span></label>
                                                                    <input type="number" step="any" required name="thickness" class="form-control" id="thickness" aria-describedby="thicknessHelp">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="passivationType">Passivation Type<span class="text-danger">*</span></label>
                                                                    <input type="text" required name="passivationType" class="form-control" id="passivationType" aria-describedby="passivationTypeHelp">
                                                                </div>
                                                            <?php }?>
                                                        <?php }?>
                                                        <div class="form-group">
                                                            <label> Select Type </label><span class="text-danger">*</span>
                                                            <select class="form-control select2" name="type" style="width: 100%;">
                                                                <option value="standard_po">Standard PO</option>
                                                                <option value="subcon_po">Subcon Po</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Select Is Service </label><span class="text-danger">*</span>
                                                            <select class="form-control select2" required name="isservice" style="width: 100%;">
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
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                                            <th>Update</th>
                                            <th>Drawing Parameters</th>
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
                                                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPromo">
                                                            Add Production Qty
                                                        </button>
                                                        <div class="modal fade" id="addPromo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
add_production_qty" method="POST" enctype="multipart/form-data">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label required for="on click url">Select Shift Type
                                                                                / Name / Start Time /
                                                                                End Time<span class="text-danger">*</span></label>
                                                                            <select name="shift_id" name="" id="" class="form-control select2">
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
                                                                        <div class="form-group">
                                                                            <label for="on click url">Select Operator<span class="text-danger">*</span></label>
                                                                            <select required name="operator_id" id="" class="form-control select2">
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
                                                                        <div class="form-group">
                                                                            <label for="on click url">Select Machine<span class="text-danger">*</span></label>
                                                                            <select required name="machine_id" id="" class="form-control select2">
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
                                                                        <div class="form-group">
                                                                            <label for="on click url">Select Inhouse Part /
                                                                                Customer Part<span class="text-danger">*</span></label>
                                                                            <select required name="output_part_id" id="" class="form-control select2">
                                                                                <?php if ($_smarty_tpl->tpl_vars['operations_bom']->value) {?>
                                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['operations_bom']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
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
                                                                        <div class="form-group">
                                                                            <label for="on click url">Enter QTY<span class="text-danger">*</span></label>
                                                                            <input type="number" min="1" value="1" name="qty" required class="form-control">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="on click url">Enter Date
                                                                                <span class="text-danger">*</span></label>
                                                                            <input max="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
" type="date" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
" name="date" required class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                                                    <td>
                                                        <button type="submit" data-toggle="modal" class="btn btn-sm btn-primary" data-target="#exampleModaledit2333<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"> <i class="fas fa-edit"></i></button>
                                                        <div class="modal fade" id="exampleModaledit2333<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex=" -1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog " role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Update Part Details</h5>
                                                                      
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
updatecustomerpart_new" method="POST" enctype='multipart/form-data'>
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <input value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->id;?>
" type="hidden" name="id" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">
                                                                                    <div class="form-group">
                                                                                        <label for="po_num">Part Description<span class="text-danger">*</span></label>
                                                                                        <input type="text" name="upart_description" required class="form-control" id="upart_description" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->part_description;?>
" aria-describedby="partDescriptionHelp">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>Select Type </label><span class="text-danger">*</span>
                                                                                        <select class="form-control select2" name="type" style="width: 100%;">
                                                                                            <option value="standard_po" <?php if ($_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->type == 'standard_po') {?>selected<?php }?>>Standard PO</option>
                                                                                            <option value="subcon_po" <?php if ($_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->type == 'subcon_po') {?>selected<?php }?>>Subcon Po</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label> Part Family </label><span class="text-danger">*</span>
                                                                                        <select readonly class="form-control select2" name="part_family" style="width: 100%;">
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

                                                                                    <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isPlastic']) {?>
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Gross weight (gram) <span class="text-danger">*</span></label>
                                                                                            <input type="number" required step="any" name="gross_weight" class="form-control" id="exampleInputEmail1" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->gross_weight;?>
" aria-describedby="emailHelp">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Finish weight (gram) <span class="text-danger">*</span></label>
                                                                                            <input type="number" required step="any" name="finish_weight" class="form-control" id="exampleInputEmail1" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->finish_weight;?>
" aria-describedby="emailHelp">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Runner weight (gram) <span class="text-danger">*</span></label>
                                                                                            <input type="number" required step="any" name="runner_weight" class="form-control" id="exampleInputEmail1" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->runner_weight;?>
" aria-describedby="emailHelp">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Cycle Time <span class="text-danger">*</span></label>
                                                                                            <input type="number" required step="any" name="cycyle_time" class="form-control" id="exampleInputEmail1" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->cycyle_time;?>
" aria-describedby="emailHelp">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Production Target Per Shift <span class="text-danger">*</span></label>
                                                                                            <input type="number" required step="any" name="production_target_per_shift" class="form-control" id="exampleInputEmail1" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->production_target_per_shift;?>
" aria-describedby="emailHelp">
                                                                                        </div>
                                                                                    <?php }?>
                                                                                    <div class="form-group">
                                                                                        <label for="po_num">RM Grade <span class="text-danger">*</span></label>
                                                                                        <input type="text" required name="rm_grade" class="form-control" id="exampleInputEmail1" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->rm_grade;?>
" aria-describedby="emailHelp">
                                                                                    </div>
                                                                                    <?php if ($_smarty_tpl->tpl_vars['TusharEngg']->value) {?>
                                                                                        <div class="form-group">
                                                                                            <label for="thickness">Thickness<span class="text-danger">*</span></label>
                                                                                            <input type="number" step="any" required name="thickness" class="form-control" id="thickness" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->thickness;?>
" aria-describedby="thicknessHelp">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="passivationType">Passivation Type<span class="text-danger">*</span></label>
                                                                                            <input type="text" required name="passivationType" class="form-control" id="passivationType" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->passivationType;?>
" aria-describedby="passivationTypeHelp">
                                                                                        </div>
                                                                                    <?php }?>
                                                                                    <div class="form-group">
                                                                                        <label for="safety_stock">Safety/buffer stock <span class="text-danger">*</span></label>
                                                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->safety_stock;?>
" name="safety_stock" required class="form-control" id="exampleInputEmail1" placeholder="Enter Safety/buffer stock">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="hsn_code">HSN Code<span class="text-danger">*</span></label>
                                                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->hsn_code;?>
" name="hsn_code" required class="form-control" id="exampleInputEmail1" placeholder="Enter HSN Code">
                                                                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->id;?>
" name="id" required class="form-control" id="exampleInputEmail1">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label> Select Tax Structure</label><span class="text-danger">*</span>
                                                                                        <select class="form-control select2" name="gst_id" style="width: 100%;">
                                                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gst_structure']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                                                                <option <?php if ($_smarty_tpl->tpl_vars['c']->value->id == $_smarty_tpl->tpl_vars['gst_structure2']->value[$_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id]][0]->id) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->code;?>
</option>
                                                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label> UOM </label><span class="text-danger">*</span>
                                                                                        <select class="form-control select2" readonly name="uom" style="width: 100%;">
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
                                                                                    <div class="form-group">
                                                                                        <label for="po_num">Packaging QTY </label><span class="text-danger">*</span>
                                                                                        <input type="number" min="0" step="1" name="packaging_qty" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->packaging_qty;?>
" required class="form-control" id="packaging_quantity">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label> Select Is Service </label><span class="text-danger">*</span>
                                                                                        <select class="form-control select2" required name="isservice" style="width: 100%;">
                                                                                            <option value="">Select Is-Service</option>
                                                                                            <option value="Y" <?php if ($_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->isservice == 'Y') {?>selected<?php }?>>YES</option>
                                                                                            <option value="N" <?php if ($_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->id][0]->isservice == 'N') {?>selected<?php }?>>NO</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
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
                                                    <td>
                                                        <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
view_inspection_parm_details/<?php echo $_smarty_tpl->tpl_vars['customer_data']->value[0]->id;?>
/<?php echo $_smarty_tpl->tpl_vars['poo']->value->id;?>
">
                                                            <i class='far fa-eye'></i>
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
