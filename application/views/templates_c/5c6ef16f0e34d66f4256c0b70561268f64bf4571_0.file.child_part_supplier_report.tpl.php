<?php
/* Smarty version 4.3.2, created on 2024-07-29 23:19:04
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\reports\child_part_supplier_report.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66a7d610eda0a6_13732166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c6ef16f0e34d66f4256c0b70561268f64bf4571' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\reports\\child_part_supplier_report.tpl',
      1 => 1722275060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a7d610eda0a6_13732166 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper container-xxl flex-grow-1 container-p-y">
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
    <nav class="sidebar-nav scroll-sidebar filter-block" data-simplebar="init">
      <div class="simplebar-content" >
        <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <div class="filter-row">
              <li class="nav-small-cap">
                <span class="hide-menu">Select Supplier</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                <select name="supplier_id" class="form-control select2" id="supplier_id">
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
          Reports
          <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Supplier Part Price</em></a>
        </h1>
        <br>
        <span >item part List</span>
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
                    <div class="col-12">

                        <!-- /.card -->

                        <div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive text-nowrap">
                                <table id="child_part_supplier" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                          
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                                        <th><b>Search <?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</b></th>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                                </div>
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

<div class="modal fade" id="add_revison" tabindex=" -1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Revision </h5>
                <button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('updatechildpart_supplier');?>
" method="POST" enctype='multipart/form-data'>
                    <div class="row">
                        <div class="col-lg-12">

                            <input value="<?php echo $_smarty_tpl->tpl_vars['po']->value[0]->id;?>
" type="hidden" name="id" required class="form-control" id="part_id" aria-describedby="emailHelp" placeholder="Customer Name">

                            <div class="form-group">
                                <label for="po_num">Part Number </label><span class="text-danger">*</span>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[0]->part_number;?>
" name="upart_number" readonly id = "part_number" class="form-control" placeholder="Enter Part Number.">
                            </div>
                            <div class="form-group">
                                <label for="po_num">Part Description </label><span class="text-danger">*</span>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[0]->part_description;?>
" name="upart_desc" readonly id= 'part_des' required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Description">
                            </div>
                            <div class="form-group">
                                <label for="po_num">Revision Date </label><span class="text-danger">*</span>
                                <input type="date" value="<?php echo date('Y-m-d');?>
" name="urevision_date" required id = 'revision_date' class="form-control" id="exampleInputEmail1" placeholder="Enter Part Price">
                            </div>
                            <div class="form-group">
                                <label for="po_num">Revision Number </label><span class="text-danger">*</span>
                                <input type="text" value="" name="urevision_no" required class="form-control" id="revision_numer" placeholder="Enter Safty/buffer stock" aria-describedby="emailHelp">
                                <input type="hidden" readonly value="<?php echo $_smarty_tpl->tpl_vars['po']->value[0]->supplier_id;?>
" name="supplier_id" required id='supplier_id' class="form-control" id="exampleInputEmail1" placeholder="Enter Safty/buffer stock" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="po_num">Revision Remark </label><span class="text-danger">*</span>
                                <input type="text" value="" name="revision_remark" required class="form-control" id="revision_remark" placeholder="Enter revision_remark" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="po_num">Part Price </label><span class="text-danger">*</span>
                                <input type="text" value="" name="upart_rate" required class="form-control" id="part_rate" placeholder="Enter Part Price">
                            </div>
                            <div class="form-group">
                                <label for="po_num">Quotation Document</label>
                                <input type="file" name="quotation_document" class="form-control" id="exampleInputEmail1" placeholder="Enter Revision Date" aria-describedby="emailHelp">
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
                                        <option <?php if ($_smarty_tpl->tpl_vars['c']->value->id == $_smarty_tpl->tpl_vars['gst_structure2']->value[0]->id) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
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
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>

    </div>
</div>

<?php echo '<script'; ?>
>
    var column_details =  <?php echo json_encode($_smarty_tpl->tpl_vars['data']->value);?>
;
    var page_length_arr = <?php echo json_encode($_smarty_tpl->tpl_vars['page_length_arr']->value);?>
;
    var is_searching_enable = <?php echo json_encode($_smarty_tpl->tpl_vars['is_searching_enable']->value);?>
;
    var is_top_searching_enable =  <?php echo json_encode($_smarty_tpl->tpl_vars['is_top_searching_enable']->value);?>
;
    var is_paging_enable =  <?php echo json_encode($_smarty_tpl->tpl_vars['is_paging_enable']->value);?>
;
    var is_serverSide =  <?php echo json_encode($_smarty_tpl->tpl_vars['is_serverSide']->value);?>
;
    var no_data_message =  <?php echo json_encode($_smarty_tpl->tpl_vars['no_data_message']->value);?>
;
    var is_ordering =  <?php echo json_encode($_smarty_tpl->tpl_vars['is_ordering']->value);?>
;
    var sorting_column = <?php echo $_smarty_tpl->tpl_vars['sorting_column']->value;?>
;
    var api_name =  <?php echo json_encode($_smarty_tpl->tpl_vars['api_name']->value);?>
;
    var base_url = <?php echo json_encode($_smarty_tpl->tpl_vars['base_url']->value);?>
;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/public/js/reports/child_part_supplier_report.js"><?php echo '</script'; ?>
><?php }
}
