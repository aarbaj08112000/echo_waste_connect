<?php
/* Smarty version 4.3.2, created on 2024-07-19 13:15:10
  from '/var/www/html/extra/erp_converted/application/views/templates/customer/customer_part_drawing_by_id.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_669a1986854aa5_11036549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d6ed9f780c0538659b1b053a942b17cdf0b8b67' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/customer/customer_part_drawing_by_id.tpl',
      1 => 1718863588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669a1986854aa5_11036549 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['entitlements']->value['isPLMEnabled']) {?>
<div  class="wrapper">
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
                        <h1>Customer Part Drawing - <?php echo $_smarty_tpl->tpl_vars['customer_data']->value[0]->customer_name;?>
</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Home</a></li>
                            <li class="breadcrumb-item active">Customer Part</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <!-- /.card -->
                            <div class="card">
                            <div class="card-header">
                            <div class="row">
                                <div class="col-lg-1">
                                <br>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
customer_master" class="btn btn-danger "> < Back </a> 
                                &nbsp;&nbsp;
                                </div>
                                <div class="col-lg-1">
                                <br>
                                <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleAddModal">
                                    Add </button>   
                                </div>
                                <!-- search by part number -->
                                <div class="col-lg-2">
                                    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
customer_part_drawing/<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
" method="post">
                                       <div class="form-group">
                                             <label for="Search by Part No">Search by Parts</label>
                                             <select class="form-control select2" name="search_part_id" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="ALL" <?php if ($_smarty_tpl->tpl_vars['search_part_id']->value == 'ALL') {?>selected<?php }?>>ALL</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_part']->value, 'part');
$_smarty_tpl->tpl_vars['part']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['part']->value) {
$_smarty_tpl->tpl_vars['part']->do_else = false;
?>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['search_part_id']->value == $_smarty_tpl->tpl_vars['part']->value->id) {?>selected<?php }?>
                                                        value="<?php echo $_smarty_tpl->tpl_vars['part']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['part']->value->part_number;?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <br><input type="submit" class="btn btn-primary mt-2" value="Search">
                                    </form>
                                    </div>
                                </div>
                                </div>
                                </div>
                            <!-- /.card-header -->
                            
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleAddModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleAddModalLabel">Add Drawing</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
add_customer_drawing" method="POST" enctype='multipart/form-data'>
                                                <div class="row">
                                                    <div class="col-lg">
                                                        <div class="form-group">
                                                            <label for="po_num">Customer Name / Customer Code / Part Number / Description </label><span class="text-danger">*</span>
                                                            <select name="customer_master_id" id="" class="from-control select2">
                                                                <?php if ($_smarty_tpl->tpl_vars['customer_part']->value) {?>
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_part']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['customer_data']->value[0]->customer_name;?>
/<?php echo $_smarty_tpl->tpl_vars['customer_data']->value[0]->customer_code;?>
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
                                                            <label for="po_num">Part Drawing </label><span class="text-danger">*</span>
                                                            <input type="file" name="drawing" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="po_num">Cad File </label>
                                                            <input type="file" name="cad"  class="form-control" id="exampleCadFile" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="po_num">3D Model </label>
                                                            <input type="file" name="model"  class="form-control" id="example3DModel" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="po_num">Revision Number </label><span class="text-danger">*</span>
                                                            <input type="text" name="revision_no" required class="form-control" id="exampleInputEmail1" aria-describedby=" emailHelp">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="po_num">Revision Date</label><span class="text-danger">*</span>
                                                            <input type="date" name="revision_date" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="po_num">Revision Remark</label><span class="text-danger">*</span>
                                                            <input type="text" name="revision_remark" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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


                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Add Revision</th>
                                            <th>Revision Number</th>
                                            <th>Revision Date</th>
                                            <th>Revision Remark</th>
                                            <th>Part Number</th>
                                            <th>Part Description</th>
                                            <th>Drawing</th>
                                            <th>Cad File</th>
                                            <th>3D Model</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Add Revision</th>
                                            <th>Revision Number</th>
                                            <th>Revision Date</th>
                                            <th>Revision Remark</th>
                                            <th>Part Number</th>
                                            <th>Part Description</th>
                                            <th>Drawing</th>
                                            <th>Cad File</th>
                                            <th>3D Model</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                        <?php if ($_smarty_tpl->tpl_vars['customer_part_drawing']->value) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_part_drawing']->value, 'poo');
$_smarty_tpl->tpl_vars['poo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['poo']->value) {
$_smarty_tpl->tpl_vars['poo']->do_else = false;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['customer_data']->value[0]->id == $_smarty_tpl->tpl_vars['customer_id']->value) {?>

                                                    <tr>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                        <td>
                                                            <button type="submit" data-toggle="modal" class="btn btn-sm btn-primary" data-target="#exampleModaledit2<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">Add</button><br><br>
                                                            
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
view_part_drawing_history/<?php echo $_smarty_tpl->tpl_vars['poo']->value->customer_master_id;?>
/<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
" class="btn btn-primary btn-sm">History</a>
                                                            <div class="modal fade" id="exampleModaledit2<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex=" -1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog " role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Add Revision</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
updatecustomerpartdrwing" method="POST" enctype='multipart/form-data'>
                                                                                <div class="row">
                                                                                    <div class="col-lg">
                                                                                        <input value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->id;?>
" type="hidden" name="id" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">

                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Part Number </label><span class="text-danger">*</span>
                                                                                            <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->part_number;?>
" name="upart_number" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Number" aria-describedby="emailHelp">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Part Description </label><span class="text-danger">*</span>
                                                                                            <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->part_description;?>
" name="upart_desc" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Description" aria-describedby="emailHelp">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Part Drawing </label><span class="text-danger">*</span>
                                                                                            <input type="file" name="drawing" required class="form-control" id="exampleInputEmail1">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Cad File </label>
                                                                                            <input type="file" name="cad" required class="form-control" id="exampleCadFile">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">3D Model </label>
                                                                                            <input type="file" name="model" required class="form-control" id="example3DModel">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Revision Date </label><span class="text-danger">*</span>
                                                                                            <input type="date" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->revision_date;?>
" name="revision_date" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Rate" aria-describedby="emailHelp">
                                                                                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['customer_part_drawing_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->customer_master_id;?>
" name="customer_master_id" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Rate" aria-describedby="emailHelp">
                                                                                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['customer_part_drawing_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->cad;?>
" name="cad" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Rate" aria-describedby="emailHelp">
                                                                                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['customer_part_drawing_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->model;?>
" name="model" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Rate" aria-describedby="emailHelp">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Revision Number </label><span class="text-danger">*</span>
                                                                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->revision_no;?>
" name="revision_no" required class="form-control" id="exampleInputEmail1" placeholder="Enter Safty/buffer stock" aria-describedby="emailHelp">
                                                                                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->customer_id;?>
" name="customer_id" required class="form-control" id="exampleInputEmail1" placeholder="Enter Safty/buffer stock" aria-describedby="emailHelp">
                                                                                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->customer_part_id;?>
" name="customer_part_id" required class="form-control" id="exampleInputEmail1" placeholder="Enter Safty/buffer stock" aria-describedby="emailHelp">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Revision Remark </label><span class="text-danger">*</span>
                                                                                            <input type="text" value="" name="revision_remark" required class="form-control" id="exampleInputEmail1" placeholder="Enter Safty/buffer stock" aria-describedby="emailHelp">
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
                            </div>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['customer_part_drawing_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->revision_no;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['customer_part_drawing_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->revision_date;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['customer_part_drawing_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->revision_remark;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->part_number;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->part_description;?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['customer_part_drawing_data']->value[0]->drawing != '') {?>
                                    <a title="Download" download href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
documents/<?php echo $_smarty_tpl->tpl_vars['customer_part_drawing_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->drawing;?>
" class="btn btn-sm btn-primary remove_hoverr"><i class="fas fa-download"></i></a>
                                    <a title="View" class="btn btn-xs btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
documents/<?php echo $_smarty_tpl->tpl_vars['customer_part_drawing_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->drawing;?>
" target="_blank"><i class="fas fa-eye" aria-hidden="true"></i> </a>
                                <?php }?>
                                 &nbsp;
                                 <button title="Upload" type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#uploadDocumentDrawing<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><i class="fas fa-upload" style="color:yellow"></i></button>
                                <!-- Upload Modal -->
                                                    <div class="modal fade" id="uploadDocumentDrawing<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Upload file</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
update_drawing" method="post" enctype='multipart/form-data'>
                                                                        <div class="text-center">
                                                                            <div class="form-group">
                                                                                <label for="exampleInputEmail1">Upload File<span class="text-danger">*</span>
                                                                                    <input required type="file" name="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Details">
                                                                            </div>
                                                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['customer_part_drawing_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->id;?>
" required id="exampleInputEmail1">
                                                                            <input type="hidden" class="form-control" required name="type" value="drawing">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                                        </div>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                         
                                <!-- Ends new upload button -->
                               
                            </td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['customer_part_drawing_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->cad != '') {?>
                                    <a title="Download" download href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
documents/<?php echo $_smarty_tpl->tpl_vars['customer_part_drawing_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->cad;?>
" class="btn btn-sm btn-primary remove_hoverr"><i class="fas fa-download"></i></a>
                                    <a title="View" class="btn btn-xs btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
documents/<?php echo $_smarty_tpl->tpl_vars['customer_part_drawing_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->cad;?>
" target="_blank"><i class="fas fa-eye" aria-hidden="true"></i> </a>
                                  
                                <?php }?>
                                <button title="Upload" type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#uploadDocumentCad<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><i class="fas fa-upload" style="color:yellow"></i></button>
                                <!-- Upload Modal -->
                                                    <div class="modal fade" id="uploadDocumentCad<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Upload file</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
update_drawing" method="post" enctype='multipart/form-data'>
                                                                        <div class="text-center">
                                                                            <div class="form-group">
                                                                                <label for="exampleInputEmail1">Upload File<span class="text-danger">*</span>
                                                                                    <input required type="file" name="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Details">
                                                                            </div>
                                                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['customer_part_drawing_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->id;?>
" required id="exampleInputEmail1">
                                                                            <input type="hidden" class="form-control" required name="type" value="cad">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                                        </div>
                                                                    </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                <!-- Ends new upload button -->
                            </td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['customer_part_drawing_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->model != '') {?>
                                    <a title="Download" download href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
documents/<?php echo $_smarty_tpl->tpl_vars['customer_part_drawing_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->model;?>
" class="btn btn-sm btn-primary remove_hoverr"><i class="fas fa-download"></i></a>
                                    <a title="View" class="btn btn-xs btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
documents/<?php echo $_smarty_tpl->tpl_vars['customer_part_drawing_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->model;?>
" target="_blank"><i class="fas fa-eye" aria-hidden="true"></i> </a>
                                <?php }?>
                                <!-- new upload button -->

                                <button title="Upload" type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#uploadDocument<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><i class="fas fa-upload" style="color:yellow"></i></button>
                                <!-- Upload Modal -->
                                                    <div class="modal fade" id="uploadDocument<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Upload file</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
update_drawing" method="post" enctype='multipart/form-data'>
                                                                        <div class="text-center">
                                                                            <div class="form-group">
                                                                                <label for="exampleInputEmail1">Upload File<span class="text-danger">*</span>
                                                                                    <input required type="file" name="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Details">
                                                                            </div>
                                                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['customer_part_drawing_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->id;?>
" required id="exampleInputEmail1">
                                                                            <input type="hidden" class="form-control" required name="type" value="model">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                                        </div>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                <!-- Ends new upload button -->
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
<?php }?>
<!-- /.content-wrapper -->

<?php }
}
