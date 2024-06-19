<?php
/* Smarty version 4.3.2, created on 2024-06-17 14:50:05
  from '/var/www/html/extra/erp_converted/application/views/templates/reports/child_part_supplier_report.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_666fffc575d4f1_17588472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9560483c73a93cd56c31d78986bca27e1d3c653' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/reports/child_part_supplier_report.tpl',
      1 => 1718616001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666fffc575d4f1_17588472 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/extra/erp_converted/application/third_party/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="wrapper">
    <!-- Navbar -->
    <?php $_smarty_tpl->_assignInScope('role', trim($_smarty_tpl->tpl_vars['session']->value->userdata['type']));?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="width:2000px">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Supplier Part Price </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">item part List</li>
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
view_child_part_supplier_by_filter" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div style="width: 400px;">
                                                <div class="form-group">
                                                    <label for="on click url">Select Supplier <span class="text-danger">*</span></label> <br>
                                                    <select name="supplier_id" class="form-control select2" id="">
                                                        <option <?php if ($_smarty_tpl->tpl_vars['filter_supplier_id']->value === "All") {?> selected <?php }?> value="All">All</option>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplier_list']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                                                            <option <?php if ($_smarty_tpl->tpl_vars['filter_supplier_id']->value === $_smarty_tpl->tpl_vars['s']->value->id) {?> selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value->supplier_name;?>
</option>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="">&nbsp;</label> <br>
                                            <button class="btn btn-secondary">Search </button>
                                        </div>
                                    </div>
                                </form>
                                
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Approval Status </th>
                                            <th>Rev. & History</th>
                                            <th>Revision Number</th>
                                            <th>Revision Remark</th>
                                            <th>Revision Date</th>
                                            <th>Part Number</th>
                                            <th>Part Description</th>
                                            <th>Tax Structure</th>
                                            <th>Supplier</th>
                                            <th>Part Price</th>
                                            <th>Quotation Document </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                        <?php if ($_smarty_tpl->tpl_vars['child_part_master']->value) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_part_master']->value, 'poo');
$_smarty_tpl->tpl_vars['poo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['poo']->value) {
$_smarty_tpl->tpl_vars['poo']->do_else = false;
?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['filter_supplier_id']->value)) && $_smarty_tpl->tpl_vars['filter_supplier_id']->value != "All" && $_smarty_tpl->tpl_vars['filter_supplier_id']->value != $_smarty_tpl->tpl_vars['poo']->value->supplier_id) {?>
                                                    <?php continue 1;?>
                                                <?php }?>
                                               
                            
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->part_number][0][0]->admin_approve;?>
</td>
                                                    <td>
                                                        <?php if ($_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->part_number][0][0]->admin_approve == "accept") {?>
                                                            <button type="submit" data-toggle="modal" class="btn btn-sm btn-primary" data-target="#exampleModaledit2<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"> <i class="fas fa-edit"></i></button>
                                                        <?php }?>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
price_revision/<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->part_number][0][0]->part_number;?>
/<?php echo $_smarty_tpl->tpl_vars['poo']->value->supplier_id;?>
" class="btn btn-primary btn-sm"> <i class="fas fa-history"></i></a>
                                                        <div class="modal fade" id="exampleModaledit2<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Add Revision </h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
updatechildpart_supplier" method="POST" enctype='multipart/form-data'>
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <input value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->part_number][0][0]->id;?>
" type="hidden" name="id" required class="form-control" placeholder="Customer Name">
                                                                                    <div class="form-group">
                                                                                        <label for="po_num">Part Number </label><span class="text-danger">*</span>
                                                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->part_number][0][0]->part_number;?>
" name="upart_number" readonly class="form-control" placeholder="Enter Part Number.">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="po_num">Part Description </label><span class="text-danger">*</span>
                                                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->part_number][0][0]->part_description;?>
" name="upart_desc" readonly required class="form-control" placeholder="Enter Part Description">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="po_num">Revision Date </label><span class="text-danger">*</span>
                                                                                        <input type="date" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" name="urevision_date" required class="form-control" placeholder="Enter Part Price">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="po_num">Revision Number </label><span class="text-danger">*</span>
                                                                                        <input type="text" value="" name="urevision_no" required class="form-control" placeholder="Enter Safty/buffer stock">
                                                                                        <input type="hidden" readonly value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->part_number][0][0]->supplier_id;?>
" name="supplier_id" required class="form-control" placeholder="Enter Safty/buffer stock">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="po_num">Revision Remark </label><span class="text-danger">*</span>
                                                                                        <input type="text" value="" name="revision_remark" required class="form-control" placeholder="Enter revision_remark">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="po_num">Part Price </label><span class="text-danger">*</span>
                                                                                        <input type="text" value="" name="upart_rate" required class="form-control" placeholder="Enter Part Price">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="po_num">Quotation Document</label>
                                                                                        <input type="file" name="quotation_document" class="form-control" placeholder="Enter Revision Date">
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
                                                                                                <option <?php if ($_smarty_tpl->tpl_vars['c']->value->id == $_smarty_tpl->tpl_vars['gst_structure2']->value[$_smarty_tpl->tpl_vars['poo']->value->part_number][0][0]->id) {?> selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->code;?>
</option>
                                                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->part_number][0][0]->revision_no;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->part_number][0][0]->revision_remark;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->part_number][0][0]->revision_date;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->part_number][0][0]->part_number;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->part_number][0][0]->part_description;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['gst_structure2']->value[$_smarty_tpl->tpl_vars['poo']->value->part_number][0][0]->code;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['supplier_data']->value[$_smarty_tpl->tpl_vars['poo']->value->supplier_id][0][0]->supplier_name;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->part_number][0][0]->part_rate;?>
</td>
                                                    <td>
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->part_number][0][0]->quotation_document)) {?>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
documents/<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->part_number][0][0]->quotation_document;?>
" download>Download </a>
                                                        <?php }?>
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
                    </div>
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
<?php }
}
