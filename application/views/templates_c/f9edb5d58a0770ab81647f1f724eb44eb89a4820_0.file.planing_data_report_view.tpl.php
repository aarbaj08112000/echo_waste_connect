<?php
/* Smarty version 4.3.2, created on 2024-07-20 23:48:41
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\reports\planing_data_report_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_669bff817917b4_54048838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9edb5d58a0770ab81647f1f724eb44eb89a4820' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\reports\\planing_data_report_view.tpl',
      1 => 1721498114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669bff817917b4_54048838 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper container-xxl flex-grow-1 container-p-y">

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
                <select name="customer_id" id="customers" class="form-control select2">
                <option value="0">All</option>
               
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                <option <?php if ($_smarty_tpl->tpl_vars['c']->value->id == $_smarty_tpl->tpl_vars['customer_id']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->customer_name;?>
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
                <span class="hide-menu">Select Financial Year</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
              <div class="input-group">
              <select name="financial_year" id="year" class="form-control select2">
              <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2027+1 - (2020) : 2020-(2027)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 2020, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
              <?php $_smarty_tpl->_assignInScope('year', "FY-".((string)$_smarty_tpl->tpl_vars['i']->value));?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
              <?php }
}
?>
          </select>
              </div>
            </li>
            </div>  

            <div class="filter-row">
            <li class="nav-small-cap">
              <span class="hide-menu">Select Month</span>
              <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
            </li>
            <li class="sidebar-item">
            <div class="input-group">
            <select name="month_id" id="months" class="form-control select2">
                <option value="MAR">MAR</option>
                <option value="APR">APR</option>
                <option value="MAY">MAY</option>
                <option value="JUN">JUN</option>
                <option value="JUL">JUL</option>
                <option value="AUG">AUG</option>
                <option value="SEP">SEP</option>
                <option value="OCT">OCT</option>
                <option value="NOV">NOV</option>
                <option value="DEC">DEC</option>
                <option value="JAN">JAN</option>
                <option value="FEB">FEB</option>
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
            <em >Planning Data</em></a>
        </h1>
        <br>
        <span >Planning Data</span>
      </div>
    </nav>
    <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
      <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
      <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
      <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
      <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button>
    </div>


    <div class="content-wrapper">
        
        <section class="content">
            <div class="">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            
                            <div class="card-body">
                            <div class="table-responsive text-nowrap">
                                <table id="planning_data" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                                                                      <th>Customer Part Number</th>
                                            <th>Customer Part Description</th>
                                            <th>Customer Name</th>
                                            <th>Month</th>
                                            <th>Schedule Qty 1</th>
                                            <th>Schedule Qty 2</th>
                                            <th>Job Card Qumulative Qty</th>
                                            <th>Job Card Balance Qty</th>
                                            <th>Job Card Issued</th>
                                            <th>Job Card Closed</th>
                                            <th>Customer Part Price</th>
                                            <th>Dispatch (sales qty)</th>
                                            <th>Balance Schedule qty</th>
                                            <th>Subtotal Schedule</th>
                                            <th>View Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['planing_data']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>

                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['customer_part_data']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->part_number;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['customer_part_data']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->part_description;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['customers_data']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->customer_name;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['t']->value->month;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['planing_data_new']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->schedule_qty;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['planing_data_new']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->schedule_qty_2;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['job_card_qty']->value[$_smarty_tpl->tpl_vars['t']->value->id];?>
</td>
                                            <td>
                                            <?php if (empty($_smarty_tpl->tpl_vars['planing_data_new']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->schedule_qty_2)) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['planing_data_new']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->schedule_qty-$_smarty_tpl->tpl_vars['job_card_qty']->value[$_smarty_tpl->tpl_vars['t']->value->id];?>

                                            <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['planing_data_new']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->schedule_qty_2-$_smarty_tpl->tpl_vars['job_card_qty']->value[$_smarty_tpl->tpl_vars['t']->value->id];?>

                                            <?php }?>
                                            </td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['issued']->value[$_smarty_tpl->tpl_vars['t']->value->id];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['closed']->value[$_smarty_tpl->tpl_vars['t']->value->id];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['rate']->value[$_smarty_tpl->tpl_vars['t']->value->id];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['dispatch_sales_qty']->value[$_smarty_tpl->tpl_vars['t']->value->id];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['balance_s_qty']->value[$_smarty_tpl->tpl_vars['t']->value->id];?>
</td>
                                            <td>
                                            <?php if (empty($_smarty_tpl->tpl_vars['planing_data_new']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->schedule_qty_2)) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['subtotal1']->value[$_smarty_tpl->tpl_vars['t']->value->id];?>

                                                <?php } else { ?>   
                                                <?php echo $_smarty_tpl->tpl_vars['subtotal2']->value[$_smarty_tpl->tpl_vars['t']->value->id];?>

                                            <?php }?>
                                            </td>
                                            <td>
                                            
                                                <a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
view_planing_data/<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
">View Details</a>
                                            </td>
                                        </tr>
                                        <?php if ($_smarty_tpl->tpl_vars['customers_data']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->id == $_smarty_tpl->tpl_vars['customer_id']->value) {?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['customer_part_data']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->part_number;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['customer_part_data']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->part_description;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['customers_data']->value[$_smarty_tpl->tpl_vars['t']->value->id][0]->customer_name;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['t']->value->month;?>
</td>
                                            <td>
                                                <a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
view_planing_data/<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
">View Details</a>
                                            </td>
                                        </tr>
                                       <?php }?>
                                       <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                    <tfoot>
                                        <tr style="text-align:right;">
                                            <th colspan="11">Total Sales Value</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['total1']->value;?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['total2']->value;?>
</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
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
/public/js/reports/planning_data_report.js"><?php echo '</script'; ?>
><?php }
}
