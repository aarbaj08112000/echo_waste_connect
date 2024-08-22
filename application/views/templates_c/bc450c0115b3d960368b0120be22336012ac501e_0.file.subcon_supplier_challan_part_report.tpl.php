<?php
/* Smarty version 4.3.2, created on 2024-08-21 22:43:41
  from '/var/www/html/extra_work/erp_converted/application/views/templates/subcom_challan/subcon_supplier_challan_part_report.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c620456b0809_51508364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc450c0115b3d960368b0120be22336012ac501e' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/subcom_challan/subcon_supplier_challan_part_report.tpl',
      1 => 1724142425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c620456b0809_51508364 (Smarty_Internal_Template $_smarty_tpl) {
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
            <span class="hide-menu">Select Part Number / Description</span>
            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
          </li>
          <li class="sidebar-item">
            <div class="input-group">
            <select name="selected_customer_part_number"  id="part_number" class="form-control select2">
                <option  value="0">NA</option>
                <?php if ($_smarty_tpl->tpl_vars['box_data']->value) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['box_data']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                        <option  value="<?php echo $_smarty_tpl->tpl_vars['c']->value['part_number'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['part_number'];?>
 / <?php echo $_smarty_tpl->tpl_vars['c']->value['part_description'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </select>
            </div>
          </li>
        </div>
        <div class="filter-row">
          <li class="nav-small-cap">
            <span class="hide-menu">Select Supplier</span>
            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
          </li>
          <li class="sidebar-item">
          <div class="input-group">
          <select name="selected_supplier_id"  class="form-control select2" id="suppler">
          <option value="0">NA</option>
          <?php if ($_smarty_tpl->tpl_vars['box_data']->value) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['box_data']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['supplier_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['supplier_name'];?>
</option>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php }?>
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
        <em >subcon supplier-challan part stock report</em></a>
    </h1>
    <br>
    <span >subcon supplier-challan part stock report</span>
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
           <div class="card">
                
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                                                <th>Supplier</th>
                                <th>Child Part</th>
                                <th>Challan No</th>
                                <th>Challan Date</th>   
                        
                                <th>Aging Date</th>
                                <th>Challan Qty</th>
                                <th>Remaning qty</th>
                                <th>Process</th>
                                <th>Value (Challan Qty)</th>
                                <th>Value (Remaining Qty)</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $_smarty_tpl->_assignInScope('i', 1);?>
                             <?php if ($_smarty_tpl->tpl_vars['challan_parts']->value) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['challan_parts']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['display_arr']->value[$_smarty_tpl->tpl_vars['c']->value->id]['show'] == "yes") {?>
                                        <tr>
                                                                                       <td><?php echo $_smarty_tpl->tpl_vars['supplier_data']->value[$_smarty_tpl->tpl_vars['c']->value->id][0]->supplier_name;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[$_smarty_tpl->tpl_vars['c']->value->id][0]->part_number;?>
 <?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[0]->part_description;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['challan_data']->value[$_smarty_tpl->tpl_vars['c']->value->id][0]->challan_number;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['challan_data']->value[$_smarty_tpl->tpl_vars['c']->value->id][0]->created_date;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['aging']->value[$_smarty_tpl->tpl_vars['c']->value->id];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['c']->value->qty;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['c']->value->remaning_qty;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['c']->value->process;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['value_qty']->value[$_smarty_tpl->tpl_vars['c']->value->id];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['value_qty_remaning']->value[$_smarty_tpl->tpl_vars['c']->value->id];?>
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
</div>
<!-- /.content-wrapper -->

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
/public/js/reports/subcom_report.js"><?php echo '</script'; ?>
><?php }
}
