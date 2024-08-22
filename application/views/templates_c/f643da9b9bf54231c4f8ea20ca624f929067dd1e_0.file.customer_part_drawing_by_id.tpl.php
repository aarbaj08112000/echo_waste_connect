<?php
/* Smarty version 4.3.2, created on 2024-08-21 23:55:03
  from '/var/www/html/extra_work/erp_converted/application/views/templates/customer/customer_part_drawing_by_id.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c630ffaeed21_61938259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f643da9b9bf54231c4f8ea20ca624f929067dd1e' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/customer/customer_part_drawing_by_id.tpl',
      1 => 1724142425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c630ffaeed21_61938259 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['entitlements']->value['isPLMEnabled']) {?>
<div  class="wrapper container-xxl flex-grow-1 container-p-y">
    <!-- Navbar -->

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme filter-popup-block" style="width: 0px;">
    <div class="app-brand demo justify-content-between">
        <a href="javascript:void(0)" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Filter</span>
        </a>
        <div class="close-filter-btn d-block filter-popup cursor-pointer">
                <i class="ti ti-x fs-8"></i>
            </div>
    </div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
customer_part_drawing/<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
" method="post">
    <nav class="sidebar-nav scroll-sidebar filter-block" data-simplebar="init">
      <div class="simplebar-content" >
        <ul class="menu-inner py-1">
            <!-- Dashboard -->
          <div class="filter-row">
              <li class="nav-small-cap">
                <span class="hide-menu">Select Parts</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                <select class="form-control select2" name="search_part_id" style="width: 100%;">
                <option value="">Select</option>
                <option value="ALL">ALL</option>
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
              </li>
             
            </div>
            
            

        </ul>
      </div>
    </nav>
    <div class="filter-popup-btn">
            <button class="btn btn-outline-danger reset-filter">Reset</button>
            <button class="btn btn-primary search-filter">Search</button>
        </div>
        </form>
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
        <span >Customer Part Drawing</span>
      </div>
    </nav>
    <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
      <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
      <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
      <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
      <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button>
    </div>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       

        <!-- Main content -->
        <section class="content">
            <div class="">
                <div class="row">
                    <div class="col">
                        <!-- /.card -->
                            <div class="card">
                            <div class="card-header">
                            <div class="row">
                               
                                <div class="col-lg-1">
                                <br>
                                <button type="button" class="btn btn-primary float-left" data-bs-toggle="modal" data-bs-target="#add_new">
                                    Add </button>   
                                </div>
                                <!-- search by part number -->
                            
                                </div>
                                </div>
                                </div>
                            <!-- /.card-header -->
                            
                            
                            <!-- Modal -->
                            <div class="modal fade" id="add_new" tabindex="-1" role="dialog" aria-labelledby="exampleAddModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleAddModalLabel">Add Drawing</h5>
                                            <button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
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
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                                                            <button type="submit" data-bs-toggle="modal" class="btn btn-sm btn-primary add-revision" data-bs-target="#add_revision" data-value="<?php echo $_smarty_tpl->tpl_vars['poo']->value->encoded_data;?>
">Add</button><br><br>
                                                            
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
view_part_drawing_history/<?php echo $_smarty_tpl->tpl_vars['poo']->value->customer_master_id;?>
/<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
" class="btn btn-primary btn-sm">History</a>
                                                            
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

    <div class="modal fade" id="add_revision" tabindex=" -1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Revision</h5>
                <button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
updatecustomerpartdrwing" method="POST" enctype='multipart/form-data'>
                    <div class="row">
                        <div class="col-lg">
                            <input value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->id;?>
" type="hidden" name="id" required class="form-control" id="customer_part" aria-describedby="emailHelp" placeholder="Customer Name">

                            <div class="form-group">
                                <label for="po_num">Part Number </label><span class="text-danger">*</span>
                                <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->part_number;?>
" name="upart_number" required class="form-control" id="part_number" placeholder="Enter Part Number" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="po_num">Part Description </label><span class="text-danger">*</span>
                                <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->part_description;?>
" name="upart_desc" required class="form-control" id="part_description" placeholder="Enter Part Description" aria-describedby="emailHelp">
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
" name="revision_date" required class="form-control" id="revision_date" placeholder="Enter Part Rate" aria-describedby="emailHelp">
                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['customer_part_drawing_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->customer_master_id;?>
" name="customer_master_id" required class="form-control" id="customer_master_id" placeholder="Enter Part Rate" aria-describedby="emailHelp">
                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['customer_part_drawing_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->cad;?>
" name="cad" required class="form-control" id="cad" placeholder="Enter Part Rate" aria-describedby="emailHelp">
                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['customer_part_drawing_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->model;?>
" name="model" required class="form-control" id="model" placeholder="Enter Part Rate" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="po_num">Revision Number </label><span class="text-danger">*</span>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->revision_no;?>
" name="revision_no" required class="form-control" id="revision_no" placeholder="Enter Safty/buffer stock" aria-describedby="emailHelp">
                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->customer_id;?>
" name="customer_id" required class="form-control" id="customer_id" placeholder="Enter Safty/buffer stock" aria-describedby="emailHelp">
                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->customer_part_id;?>
" name="customer_part_id" required class="form-control" id="customer_part_id" placeholder="Enter Safty/buffer stock" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="po_num">Revision Remark </label><span class="text-danger">*</span>
                                <input type="text" value="" name="revision_remark" required class="form-control" id="revision_remark" placeholder="Enter Safty/buffer stock" aria-describedby="emailHelp">
                            </div>
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

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/public/js/planning_and_sales/customer_part_drawing.js"><?php echo '</script'; ?>
>
    <?php }?>
<!-- /.content-wrapper -->

<?php }
}
