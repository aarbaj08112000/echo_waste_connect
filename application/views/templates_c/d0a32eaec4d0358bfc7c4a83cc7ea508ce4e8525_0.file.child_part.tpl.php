<?php
/* Smarty version 4.3.2, created on 2024-06-07 10:35:16
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/purchase/child_part.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6662950c9a3c26_47280059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0a32eaec4d0358bfc7c4a83cc7ea508ce4e8525' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/purchase/child_part.tpl',
      1 => 1717736711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6662950c9a3c26_47280059 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('entitlements', $_smarty_tpl->tpl_vars['session_data']->value['entitlements']);?>
<div class="wrapper">
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
                        <h1>Add Item</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Item part List</li>
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
                                <h3 class="card-title">

                                </h3>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleModal">
                                    Add Direct Regular Item
                                </button>
                                <button type="button" class="btn btn-secondary float-left  ml-4" data-toggle="modal" data-target="#exampleModalsub">
                                    Add Direct Subcon Item
                                </button>
                                <button type="button" class="btn btn-dark float-left  ml-4" data-toggle="modal" data-target="#exampleModalsubregular">
                                    Add Direct Subcon Regular
                                </button>
                                <button type="button" class="btn btn-danger float-left ml-4" data-toggle="modal" data-target="#exampleModal2">
                                    Add Indirect Consumable Item</button>
                                <button type="button" class="btn btn-success float-left ml-4" data-toggle="modal" data-target="#exampleModal2Asset">
                                    Add Indirect Asset </button>
                                <button type="button" class="btn btn-warning float-left ml-4" data-toggle="modal" data-target="#exampleModal2Assetcustomerbom">
                                    Add Customer Bom Asset </button>

                                <!-- Modal -->
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
                                                <form action="<?php echo base_url('addchildpart');?>
" method="POST" enctype='multipart/form-data' s>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="po_num">Part Number</label><span class="text-danger">*</span>
                                                                <input type="text" name="part_number" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Number" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Part Description </label><span class="text-danger">*</span>
                                                                <input type="text" name="part_desc" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Description" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Safety/buffer stock </label><span class="text-danger">*</span>
                                                                <input type="text" name="safty_buffer_stk" required class="form-control" id="exampleInputEmail1" placeholder="Enter Saftey/buffer stock" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">HSN Code</label>
                                                                <input type="text" name="hsn_code" class="form-control" id="hsn_code" placeholder="Enter HSN Code" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label> Purchase Item Category </label><span class="text-danger">*</span>
                                                                <select class="form-control select2" name="sub_type" style="width: 100%;">
                                                                	<?php if ($_smarty_tpl->tpl_vars['type']->value == "direct") {?>
                                                                		<option value="Regular grn">Regular grn</option>
                                                                        <option value="RM">RM</option>
                                                                	<?php }?>
                                                                </select>
                                                            </div>

                                                            <?php if ($_smarty_tpl->tpl_vars['type']->value != "direct") {?>
                                                                <div class="form-group">
                                                                    <label> Asset </label>
                                                                    <select class="form-control select2" name="asset" style="width: 100%;">
                                                                        <option value="NA">NA</option>
                                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['asset']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
                                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value->id;?>
">
                                                                                <?php echo $_smarty_tpl->tpl_vars['a']->value->name;?>
</option>
                                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                    </select>
                                                                </div>
                                                            <?php }?>


                                                            <div class="form-group">
                                                                <label for="po_num">Store Rack Location</label>
                                                                <input type="text" name="store_rack_location" class="form-control" id="exampleInputEmail1" placeholder="Enter Store Rack Location" aria-describedby="emailHelp">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="po_num">Store Stock Rate</label>
                                                                <input type="number" step="any" name="store_stock_rate" class="form-control" id="exampleInputEmail1" placeholder="Enter Store Stock Rate" aria-describedby="emailHelp">
                                                            </div>
                                                            <?php if (($_smarty_tpl->tpl_vars['entitlements']->value['isSheetMetal'] != null)) {?>
                                                                <div class="form-group">
                                                                    <label for="po_num">Weight</label>
                                                                    <input type="number" step="any" name="weight" class="form-control" id="exampleInputEmail1" placeholder="Enter Weight" aria-describedby="emailHelp">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="po_num">Size</label>
                                                                    <input type="text" step="any" name="size" class="form-control" id="exampleInputEmail1" placeholder="Enter Size" aria-describedby="emailHelp">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="po_num">Thickness</label>
                                                                    <input type="text" step="any" name="thickness" class="form-control" id="exampleInputEmail1" placeholder="Enter Thickness" aria-describedby="emailHelp">
                                                                </div>
                                                            <?php }?>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label> UOM </label><span class="text-danger">*</span>
                                                                <select class="form-control select2" name="uom_id" style="width: 100%;">
                                                                	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['uom']->value, 'c1');
$_smarty_tpl->tpl_vars['c1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c1']->value) {
$_smarty_tpl->tpl_vars['c1']->do_else = false;
?>
                                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['c1']->value->id;?>
">
                                                                            <?php echo $_smarty_tpl->tpl_vars['c1']->value->uom_name;?>
</option>
                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Max PO Quantity </label><span class="text-danger">*</span>
                                                                <input required type="number" step="any" name="max_uom" class="form-control" id="hsn_code" placeholder="Enter Max UOM" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Grade <span class="text-danger">*</span> </label>
                                                                <input type="text" name="grade" class="form-control" id="exampleInputEmail1" placeholder="Enter grade" aria-describedby="emailHelp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                            </div>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalsub" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo base_url('addchildpart');?>
" method="POST" enctype='multipart/form-data' s>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="po_num">Part Number </label><span class="text-danger">*</span>
                                                                <input type="text" name="part_number" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Number" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Part Description </label><span class="text-danger">*</span>
                                                                <input type="text" name="part_desc" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Description" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Safety/buffer stock </label><span class="text-danger">*</span>
                                                                <input type="text" name="safty_buffer_stk" required class="form-control" id="exampleInputEmail1" placeholder="Enter Saftey/buffer stock" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">HSN Code</label>
                                                                <input type="text" name="hsn_code" class="form-control" id="hsn_code" placeholder="Enter HSN Code" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label> Purchase Item Category </label><span class="text-danger">*</span>
                                                                <select class="form-control select2" name="sub_type" style="width: 100%;">
                                                                    <?php if (($_smarty_tpl->tpl_vars['type']->value == "direct" || true)) {?>
                                                                        <option value="Subcon grn">Subcon grn</option>
                                                                    <?php }?>
                                                                </select>
                                                            </div>
                                                            <?php if (($_smarty_tpl->tpl_vars['type']->value != "direct")) {?>
                                                                <div class="form-group">
                                                                    <label> Asset </label>
                                                                    <select class="form-control select2" name="asset" style="width: 100%;">
                                                                        <option value="NA">NA</option>
                                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['asset']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
                                                                        	<option value="<?php echo $_smarty_tpl->tpl_vars['a']->value->id;?>
">
                                                                                <?php echo $_smarty_tpl->tpl_vars['a']->value->name;?>
</option>
                                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                    </select>
                                                                </div>
                                                            <?php }?>
                                                            <div class="form-group">
                                                                <label for="po_num">Store Rack Location</label>
                                                                <input type="text" name="store_rack_location" class="form-control" id="exampleInputEmail1" placeholder="Enter Store Rack Location" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Store Stock Rate</label>
                                                                <input type="number" step="any" name="store_stock_rate" class="form-control" id="exampleInputEmail1" placeholder="Enter Store Stock Rate" aria-describedby="emailHelp">
                                                            </div>
                                                            <?php if (($_smarty_tpl->tpl_vars['entitlements']->value['isSheetMetal'] != null)) {?>
                                                            <div class="form-group">
                                                                <label for="po_num">Weight</label>
                                                                <input type="number" step="any" name="weight" class="form-control" id="exampleInputEmail1" placeholder="Enter Weight" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Size</label>
                                                                <input type="text" step="any" name="size" class="form-control" id="exampleInputEmail1" placeholder="Enter Size" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Thickness</label>
                                                                <input type="text" step="any" name="thickness" class="form-control" id="exampleInputEmail1" placeholder="Enter Thickness" aria-describedby="emailHelp">
                                                            </div>
                                                            <?php }?>
                                                        </div>
                                                        <div class="col-lg-6">
                                                             <div class="form-group">
                                                                <label> UOM </label><span class="text-danger">*</span>
                                                                <select class="form-control select2" name="uom_id" style="width: 100%;">
                                                                	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['uom']->value, 'c1');
$_smarty_tpl->tpl_vars['c1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c1']->value) {
$_smarty_tpl->tpl_vars['c1']->do_else = false;
?>
                                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['c1']->value->id;?>
">
                                                                            <?php echo $_smarty_tpl->tpl_vars['c1']->value->uom_name;?>
</option>
                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Max Stock </label>
                                                                <input type="number" step="any" name="max_uom" class="form-control" id="hsn_code" placeholder="Enter Max UOM" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Grade <span class="text-danger">*</span> </label>
                                                                <input type="text" name="grade" class="form-control" id="exampleInputEmail1" placeholder="Enter grade" aria-describedby="emailHelp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                            </div>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalsubregular" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo base_url('addchildpart');?>
" method="POST" enctype='multipart/form-data' s>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="po_num">Part Number </label><span class="text-danger">*</span>
                                                                <input type="text" name="part_number" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Number" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Part Description </label><span class="text-danger">*</span>
                                                                <input type="text" name="part_desc" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Description" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Safety/buffer stock </label><span class="text-danger">*</span>
                                                                <input type="text" name="safty_buffer_stk" required class="form-control" id="exampleInputEmail1" placeholder="Enter Saftey/buffer stock" aria-describedby="emailHelp">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="po_num">HSN Code</label>
                                                                <input type="text" name="hsn_code" class="form-control" id="hsn_code" placeholder="Enter HSN Code" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label> Purchase Item Category </label><span class="text-danger">*</span>
                                                                <select class="form-control select2" name="sub_type" style="width: 100%;">
                                                                    <?php if (($_smarty_tpl->tpl_vars['type']->value == "direct" || true)) {?>
                                                                        <option value="Subcon Regular">Subcon Regular</option>
                                                                    <?php } else { ?>
                                                                        <option value="consumable">consumable
                                                                        </option>
                                                                        <option value="asset">asset</option>
                                                                    <?php }?>
                                                                </select>
                                                            </div>
                                                            <?php if (($_smarty_tpl->tpl_vars['type']->value != "direct")) {?>
                                                                <div class="form-group">
                                                                    <label> Asset </label>
                                                                    <select class="form-control select2" name="asset" style="width: 100%;">
                                                                        <option value="NA">NA</option>
                                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['asset']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
                                                                        	<option value="<?php echo $_smarty_tpl->tpl_vars['a']->value->id;?>
">
                                                                                <?php echo $_smarty_tpl->tpl_vars['a']->value->name;?>
</option>
                                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                    </select>
                                                                </div>
                                                            <?php }?>


                                                            <div class="form-group">
                                                                <label for="po_num">Store Rack Location</label>
                                                                <input type="text" name="store_rack_location" class="form-control" id="exampleInputEmail1" placeholder="Enter Store Rack Location" aria-describedby="emailHelp">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="po_num">Store Stock Rate</label>
                                                                <input type="number" step="any" name="store_stock_rate" class="form-control" id="exampleInputEmail1" placeholder="Enter Store Stock Rate" aria-describedby="emailHelp">
                                                            </div>
                                                            <?php if (($_smarty_tpl->tpl_vars['entitlements']->value['isSheetMetal'] != null)) {?>
                                                            <div class="form-group">
                                                                <label for="po_num">Weight</label>
                                                                <input type="number" step="any" name="weight" class="form-control" id="exampleInputEmail1" placeholder="Enter Weight" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Size</label>
                                                                <input type="text" step="any" name="size" class="form-control" id="exampleInputEmail1" placeholder="Enter Size" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Thickness</label>
                                                                <input type="text" step="any" name="thickness" class="form-control" id="exampleInputEmail1" placeholder="Enter Thickness" aria-describedby="emailHelp">
                                                            </div>
                                                            <?php }?>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label> UOM </label><span class="text-danger">*</span>
                                                                <select class="form-control select2" name="uom_id" style="width: 100%;">
                                                                	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['uom']->value, 'c1');
$_smarty_tpl->tpl_vars['c1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c1']->value) {
$_smarty_tpl->tpl_vars['c1']->do_else = false;
?>
                                                                        	<option value="<?php echo $_smarty_tpl->tpl_vars['c1']->value->id;?>
">
                                                                                <?php echo $_smarty_tpl->tpl_vars['c1']->value->uom_name;?>
</option>
                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Max Stock </label>
                                                                <input type="number" step="any" name="max_uom" class="form-control" id="hsn_code" placeholder="Enter Max UOM" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Grade <span class="text-danger">*</span> </label>
                                                                <input type="text" name="grade" class="form-control" id="exampleInputEmail1" placeholder="Enter grade" aria-describedby="emailHelp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                            </div>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo base_url('addchildpart');?>
" method="POST" enctype='multipart/form-data' s>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                           <div class="form-group">
                                                                <label for="po_num">Part Number </label><span class="text-danger">*</span>
                                                                <input type="text" name="part_number" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Number" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Part Description </label><span class="text-danger">*</span>
                                                                <input type="text" name="part_desc" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Description" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Safety/buffer stock </label><span class="text-danger">*</span>
                                                                <input type="text" name="safty_buffer_stk" required class="form-control" id="exampleInputEmail1" placeholder="Enter Saftey/buffer stock" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">HSN Code</label>
                                                                <input type="text" name="hsn_code" class="form-control" id="hsn_code" placeholder="Enter HSN Code" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Purchase Item Category </label><span class="text-danger">*</span>
                                                                <select class="form-control select2" name="sub_type" style="width: 100%;">
                                                                        <option value="consumable">Consumable</option>

                                                                </select>
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <label for="po_num">Store Rack Location</label>
                                                                <input type="text" name="store_rack_location" class="form-control" id="exampleInputEmail1" placeholder="Enter Store Rack Location" aria-describedby="emailHelp">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="po_num">Store Stock Rate</label>
                                                                <input type="number" step="any" name="store_stock_rate" class="form-control" id="exampleInputEmail1" placeholder="Enter Store Stock Rate" aria-describedby="emailHelp">
                                                            </div>
                                                            <?php if (($_smarty_tpl->tpl_vars['entitlements']->value['isSheetMetal'] != null)) {?>
                                                            <div class="form-group">
                                                                <label for="po_num">Weight</label>
                                                                <input type="number" step="any" name="weight" class="form-control" id="exampleInputEmail1" placeholder="Enter Weight" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Size</label>
                                                                <input type="text" step="any" name="size" class="form-control" id="exampleInputEmail1" placeholder="Enter Size" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Thickness</label>
                                                                <input type="text" step="any" name="thickness" class="form-control" id="exampleInputEmail1" placeholder="Enter Thickness" aria-describedby="emailHelp">
                                                            </div>
                                                            <?php }?>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label> UOM </label><span class="text-danger">*</span>
                                                                <select class="form-control select2" name="uom_id" style="width: 100%;">
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['uom']->value, 'c1');
$_smarty_tpl->tpl_vars['c1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c1']->value) {
$_smarty_tpl->tpl_vars['c1']->do_else = false;
?>
                                                                        	<option value="<?php echo $_smarty_tpl->tpl_vars['c1']->value->id;?>
">
                                                                                <?php echo $_smarty_tpl->tpl_vars['c1']->value->uom_name;?>
</option>
                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Max Stock </label>
                                                                <input type="number" step="any" name="max_uom" class="form-control" id="hsn_code" placeholder="Enter Max UOM" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Grade <span class="text-danger">*</span> </label>
                                                                <input type="text" name="grade" class="form-control" id="exampleInputEmail1" placeholder="Enter grade" aria-describedby="emailHelp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                            </div>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal2Asset" tabindex="-1" role="dialog" aria-labelledby="exampleModal2" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo base_url('addchildpart');?>
" method="POST" enctype='multipart/form-data' s>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="po_num">Part Number </label><span class="text-danger">*</span>
                                                                <input type="text" name="part_number" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Number" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Part Description </label><span class="text-danger">*</span>
                                                                <input type="text" name="part_desc" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Description" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Safety/buffer stock </label><span class="text-danger">*</span>
                                                                <input type="text" name="safty_buffer_stk" required class="form-control" id="exampleInputEmail1" placeholder="Enter Saftey/buffer stock" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">HSN Code</label>
                                                                <input type="text" name="hsn_code" class="form-control" id="hsn_code" placeholder="Enter HSN Code" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label> Purchase Item Category </label><span class="text-danger">*</span>

                                                                <select class="form-control select2" name="sub_type" style="width: 100%;">
                                                                    <?php if (($_smarty_tpl->tpl_vars['type']->value == "direct" && false)) {?>
                                                                        <option value="Regular grn">Regular grn</option>
                                                                        <option value="Subcon grn">Subcon grn</option>
                                                                    <?php } else { ?>

                                                                        <option value="asset">asset</option>

                                                                    <?php }?>
                                                                </select>
                                                            </div>
                                                            <?php if (($_smarty_tpl->tpl_vars['type']->value != "direct" || true)) {?>
                                                                <div class="form-group">
                                                                    <label> Asset </label>
                                                                    <select class="form-control select2" name="asset" style="width: 100%;">
                                                                        <option value="consumable">Consumable</option>
                                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['asset']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
                                                                        	<option value="<?php echo $_smarty_tpl->tpl_vars['a']->value->id;?>
">
                                                                                <?php echo $_smarty_tpl->tpl_vars['a']->value->name;?>
</option>
                                                                    	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                    </select>
                                                                </div>

                                                            <?php }?>


                                                            <div class="form-group">
                                                                <label for="po_num">Store Rack Location</label>
                                                                <input type="text" name="store_rack_location" class="form-control" id="exampleInputEmail1" placeholder="Enter Store Rack Location" aria-describedby="emailHelp">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="po_num">Store Stock Rate</label>
                                                                <input type="number" step="any" name="store_stock_rate" class="form-control" id="exampleInputEmail1" placeholder="Enter Store Stock Rate" aria-describedby="emailHelp">
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label> UOM </label><span class="text-danger">*</span>
                                                                <select class="form-control select2" name="uom_id" style="width: 100%;">
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['uom']->value, 'c1');
$_smarty_tpl->tpl_vars['c1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c1']->value) {
$_smarty_tpl->tpl_vars['c1']->do_else = false;
?>
                                                                        	<option value="<?php echo $_smarty_tpl->tpl_vars['c1']->value->id;?>
">
                                                                                <?php echo $_smarty_tpl->tpl_vars['c1']->value->uom_name;?>
</option>
                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Max Stock </label>
                                                                <input type="number" step="any" name="max_uom" class="form-control" id="hsn_code" placeholder="Enter Max UOM" aria-describedby="emailHelp">
                                                            </div>
                                                            <?php if (($_smarty_tpl->tpl_vars['entitlements']->value['isSheetMetal'] != null)) {?>
                                                            <div class="form-group">
                                                                <label for="po_num">Weight</label>
                                                                <input type="number" step="any" name="weight" class="form-control" id="exampleInputEmail1" placeholder="Enter Weight" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Size</label>
                                                                <input type="text" step="any" name="size" class="form-control" id="exampleInputEmail1" placeholder="Enter Size" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Thickness</label>
                                                                <input type="text" step="any" name="thickness" class="form-control" id="exampleInputEmail1" placeholder="Enter Thickness" aria-describedby="emailHelp">
                                                            </div>
                                                            <?php }?>
                                                            <div class="form-group">
                                                                <label for="po_num">Grade <span class="text-danger">*</span> </label>
                                                                <input type="text" name="grade" class="form-control" id="exampleInputEmail1" placeholder="Enter grade" aria-describedby="emailHelp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                            </div>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal2Assetcustomerbom" tabindex="-1" role="dialog" aria-labelledby="exampleModal2" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo base_url('addchildpart');?>
" method="POST" enctype='multipart/form-data' s>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="po_num">Part Number </label><span class="text-danger">*</span>
                                                                <input type="text" name="part_number" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Number" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Part Description </label><span class="text-danger">*</span>
                                                                <input type="text" name="part_desc" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Description" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Safety/buffer stock </label><span class="text-danger">*</span>
                                                                <input type="text" name="safty_buffer_stk" required class="form-control" id="exampleInputEmail1" placeholder="Enter Saftey/buffer stock" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">HSN Code</label>
                                                                <input type="text" name="hsn_code" class="form-control" id="hsn_code" placeholder="Enter HSN Code" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label> Purchase Item Category </label><span class="text-danger">*</span>

                                                                <select class="form-control select2" name="sub_type" style="width: 100%;">
                                                                    <?php if (($_smarty_tpl->tpl_vars['type']->value == "direct" && false)) {?>
                                                                        <option value="Regular grn">Regular grn</option>
                                                                        <option value="Subcon grn">Subcon grn</option>
                                                                    <?php } else { ?>
                                                                        <option value="customer_bom">customer bom</option>
                                                                    <?php }?>
                                                                </select>
                                                            </div>
                                                            <?php if (($_smarty_tpl->tpl_vars['type']->value != "direct" || true)) {?>
                                                                <div class="form-group">
                                                                    <label> Asset </label>
                                                                    <select class="form-control select2" name="asset" style="width: 100%;">
                                                                        <option value="consumable">Consumable</option>
                                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['asset']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
                                                                        	<option value="<?php echo $_smarty_tpl->tpl_vars['a']->value->id;?>
">
                                                                                <?php echo $_smarty_tpl->tpl_vars['a']->value->name;?>
</option>
                                                                    	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                    </select>
                                                                </div>

                                                            <?php }?>


                                                            <div class="form-group">
                                                                <label for="po_num">Store Rack Location</label>
                                                                <input type="text" name="store_rack_location" class="form-control" id="exampleInputEmail1" placeholder="Enter Store Rack Location" aria-describedby="emailHelp">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="po_num">Store Stock Rate</label>
                                                                <input type="number" step="any" name="store_stock_rate" class="form-control" id="exampleInputEmail1" placeholder="Enter Store Stock Rate" aria-describedby="emailHelp">
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-6">
                                                              <div class="form-group">
                                                                <label> UOM </label><span class="text-danger">*</span>
                                                                <select class="form-control select2" name="uom_id" style="width: 100%;">
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['uom']->value, 'c1');
$_smarty_tpl->tpl_vars['c1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c1']->value) {
$_smarty_tpl->tpl_vars['c1']->do_else = false;
?>
                                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['c1']->value->id;?>
">
                                                                                <?php echo $_smarty_tpl->tpl_vars['c1']->value->uom_name;?>
</option>
                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Max Stock </label>
                                                                <input type="number" step="any" name="max_uom" class="form-control" id="hsn_code" placeholder="Enter Max UOM" aria-describedby="emailHelp">
                                                            </div>
                                                            <?php if (($_smarty_tpl->tpl_vars['entitlements']->value['isSheetMetal'] != null)) {?>
                                                            <div class="form-group">
                                                                <label for="po_num">Weight</label>
                                                                <input type="number" step="any" name="weight" class="form-control" id="exampleInputEmail1" placeholder="Enter Weight" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Size</label>
                                                                <input type="text" step="any" name="size" class="form-control" id="exampleInputEmail1" placeholder="Enter Size" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="po_num">Thickness</label>
                                                                <input type="text" step="any" name="thickness" class="form-control" id="exampleInputEmail1" placeholder="Enter Thickness" aria-describedby="emailHelp">
                                                            </div>
                                                            <?php }?>
                                                            <div class="form-group">
                                                                <label for="po_num">Grade <span class="text-danger">*</span> </label>
                                                                <input type="text" name="grade" class="form-control" id="exampleInputEmail1" placeholder="Enter grade" aria-describedby="emailHelp">
                                                            </div>
                                                    </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                            </div>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">

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
    <!-- /.content-wrapper --><?php }
}
