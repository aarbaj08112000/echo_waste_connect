<?php
/* Smarty version 4.3.2, created on 2024-07-05 10:59:30
  from '/var/www/html/extra/erp_converted/application/views/templates/reports/reports_grn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_668784ba06b322_72038742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '480c9d840b3f1e8467ae5df8171fcae50bef0622' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/reports/reports_grn.tpl',
      1 => 1720157368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668784ba06b322_72038742 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper container-xxl flex-grow-1 container-p-y">
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
                <span class="hide-menu">Select Month</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                <select required name="created_month" id="months" class="form-control select2">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['month_data']->value, 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                <option <?php if ($_smarty_tpl->tpl_vars['month_number']->value[$_smarty_tpl->tpl_vars['key']->value] == $_smarty_tpl->tpl_vars['created_month']->value) {?>selected<?php }?>
                    value="<?php echo $_smarty_tpl->tpl_vars['month_number']->value[$_smarty_tpl->tpl_vars['key']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                </div>
              </li>
            </div>
            <div class="filter-row">
              <li class="nav-small-cap">
                <span class="hide-menu">Select Year</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
              <div class="input-group">
              <select required name="created_year" id="year" class="form-control select2">
              <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2027+1 - (2022) : 2022-(2027)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 2022, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                  <option <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['created_year']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
              <?php }
}
?>
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
            <em >GRN Report</em></a>
        </h1>
        <br>
        <span >GRN Report</span>
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
        <!-- 
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Reports : GRN Reports</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo '<?php'; ?>
 echo base_url('dashboard'); <?php echo '?>'; ?>
">Home</a></li>
                            <li class="breadcrumb-item active">GRN Reports</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section> 
        -->

        <!-- Main content -->
        <section class="content">
            <div class="">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <button type="button" class="btn btn-dark mt-4" data-bs-toggle="modal" data-bs-target="#exportForTally">Export For Tally</button>
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="col-sm-2">
                                        <?php if ($_smarty_tpl->tpl_vars['showDocRequestDetails']->value == "true") {?>
                                            Format No: STR-F-03 <br>
                                            Rev.Date : 11/10/2017 <br>
                                            Rev.No.  : 00
                                        <?php }?>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="exportForTally" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Export Criteria</h5>
                                        <button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                                    </button>
                                    </div>
                                    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
grn_excel_export" method="POST">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Only Accepted Status GRN will be exported.</label>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Year:</label>
                                                <select required name="search_year" id="" class="form-control select2">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fincYears']->value, 'fyear');
$_smarty_tpl->tpl_vars['fyear']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fyear']->value) {
$_smarty_tpl->tpl_vars['fyear']->do_else = false;
?>
                                                        <option <?php if ($_smarty_tpl->tpl_vars['fyear']->value->startYear == $_smarty_tpl->tpl_vars['created_year']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['fyear']->value->startYear;?>
"><?php echo $_smarty_tpl->tpl_vars['fyear']->value->displayName;?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Month:</label>
                                                <span class="small"><br>Month will be ignored if GRN Number field is provided.</span>
                                                <select required name="search_month" id="" class="form-control select2">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['month_data']->value, 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                                                        <option <?php if ($_smarty_tpl->tpl_vars['month_number']->value[$_smarty_tpl->tpl_vars['key']->value] == $_smarty_tpl->tpl_vars['created_month']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['month_number']->value[$_smarty_tpl->tpl_vars['key']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>GRN Number/Range:</label>
                                                <span class="small">
                                                    <br>For Individual GRN: Use only <b>number</b>, example: <b>21</b>
                                                    <br>For GRN number range: Use <b>hyphen</b>, example: <b>23-27</b>
                                                    <br>For Specific GRN: Use <b>comma</b>, example: <b>11,15,17,18</b>
                                                    <br>&nbsp;
                                                </span>&nbsp;<br>
                                                <input type="text" value="" name="grn_numbers" class="form-control" id="grn_id" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="export" class="btn btn-primary" value="XML Export">Export</button>
                                        </div>
                                        </div>
                                        </form>
                            </div>
                        </div>
                        

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
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
add_job_card" method="POST" enctype='multipart/form-data'>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="po_num">Select Customer Name / Customer Code / Part Number / Description </label><span class="text-danger">*</span>
                                                            <select name="customer_part_id" id="customer_part_id" class="from-control select2">
                                                                <?php if ($_smarty_tpl->tpl_vars['customer_part']->value) {?>
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_part']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                                        <?php $_smarty_tpl->_assignInScope('customer', $_smarty_tpl->tpl_vars['Crud']->value->get_data_by_id("customer",$_smarty_tpl->tpl_vars['c']->value->customer_id,"id"));?>
                                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->customer_name;?>
/<?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->customer_code;?>
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
                                                            <label for="po_num">Required Quantity </label><span class="text-danger">*</span>
                                                            <input type="number" name="req_qty" placeholder="Enter Quantity" min="1" value="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                            <div class="table-responsive text-nowrap">
                                <table id="gn_report" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            
                                            <th>Supplier name</th>
                                            <th>Part No</th>
                                            <th>Part Description</th>
                                            <th>Part Rate</th>
                                            <th>HSN</th>
                                            <th>UOM</th>
                                            <th>PO No</th>
                                            <th>PO Date</th>
                                            <th>GRN No</th>
                                            <th>GRN Date</th>
                                            <th>Invoice Number</th>
                                            <th>Invoice Date</th>
                                            <th>PO Qty</th>
                                            <th>Accepted QTY</th>
                                            <th>Basic Amount</th>
                                            <th>SGST</th>
                                            <th>CGST</th>
                                            <th>IGST</th>
                                            <th>TCS</th>
                                            <th>GST Total</th>
                                            <th>Total Amount With GST</th>
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
            </div>
        </section>
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
/public/js/reports/gn_report.js"><?php echo '</script'; ?>
><?php }
}
