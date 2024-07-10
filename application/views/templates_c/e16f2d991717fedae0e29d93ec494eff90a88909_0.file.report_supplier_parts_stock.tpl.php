<?php
/* Smarty version 4.3.2, created on 2024-07-09 17:21:23
  from '/var/www/html/extra/erp_converted/application/views/templates/reports/report_supplier_parts_stock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_668d243bd1b0b4_36947062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e16f2d991717fedae0e29d93ec494eff90a88909' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/reports/report_supplier_parts_stock.tpl',
      1 => 1720088631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668d243bd1b0b4_36947062 (Smarty_Internal_Template $_smarty_tpl) {
?><div  class="wrapper container-xxl flex-grow-1 container-p-y">

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
            <span class="hide-menu">Select Month</span>
            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
          </li>
          <li class="sidebar-item">
            <div class="input-group">
            <select name="part_id" id="selectPart" class="form-control select2">
            <option value="">Select Part ID</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_part_data_new_updated2']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['filter_part_id']->value === $_smarty_tpl->tpl_vars['c']->value->id) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <option value="ALL">ALL</option>
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
        <em >Supplier Parts Stock</em></a>
    </h1>
    <br>
    <span >Supplier Parts Stock</span>
  </div>
</nav>
<div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
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
                            <div class="card-body">
                            <div class="table-responsive text-nowrap">
                                <table id="parts_stock_report" class="table table-bordered table-striped">
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
/public/js/reports/parts_stock_report.js"><?php echo '</script'; ?>
><?php }
}
