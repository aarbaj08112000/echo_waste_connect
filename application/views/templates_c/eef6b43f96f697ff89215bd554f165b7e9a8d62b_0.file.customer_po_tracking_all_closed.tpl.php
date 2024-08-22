<?php
/* Smarty version 4.3.2, created on 2024-08-21 20:02:39
  from '/var/www/html/extra_work/erp_converted/application/views/templates/customer/customer_po_tracking_all_closed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c5fa87f22812_40683903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eef6b43f96f697ff89215bd554f165b7e9a8d62b' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/customer/customer_po_tracking_all_closed.tpl',
      1 => 1724250759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c5fa87f22812_40683903 (Smarty_Internal_Template $_smarty_tpl) {
?><div  class="wrapper container-xxl flex-grow-1 container-p-y">
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
                <span class="hide-menu">Select Month</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                  <select name="customer_name" class="form-control select2" id="customer_name">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_data']->value, 'val');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value->customer_name;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value->customer_name;?>
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
          Planning & Sales
          <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Customer PO Tracking</em></a>
        </h1>
        <br>
        <span >Closed Customer PO</span>
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
                <div class="card">
                <div class="row">
                   

                        <!-- /.card -->

                        <!-- <div class="card-header">
                                <h3 class="card-title">Serch PO Number</h3>
                                <div class="row">
                                    <div class="col-lg-2">
                                            <div class="form-group">
                                                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
inwarding_by_po" method="POST">
                                                <label for="">Enter PO Number <span class="text-danger">*</span> </label>
                                                <input type="text" name="po_number" class="form-control" required placeholder="Enter Valid PO Number : ">
                                            </div>

                                    </div>
                                    <div class="col-lg-2">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success mt-4">Search</button>
                                            </div>
                                            </form>
                                    </div> 
                                </div>
                            </div>-->

                            <div class="">
                                <table id="example1" class="table  table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Customer</th>
                                            <th>PO Number</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Amendment No</th>
                                            <th>Reason</th>
                                            <th>Remark</th>
                                            <th>View Details</th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                        <?php if ($_smarty_tpl->tpl_vars['customer_po_tracking']->value) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_po_tracking']->value, 's', false, 'i');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                                                
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['customer_data']->value[$_smarty_tpl->tpl_vars['s']->value->customer_id][0]->customer_name;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['s']->value->po_number;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['s']->value->po_start_date;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['s']->value->po_end_date;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['s']->value->po_amedment_number;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['s']->value->reason;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['s']->value->remark;?>
</td>
                                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
view_customer_tracking_id/<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
" class="btn btn-primary">PO Details</a></td>
                                                </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php }?>
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-header -->

                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                 
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/public/js/planning_and_sales/po_tracking_closed.js"><?php echo '</script'; ?>
><?php }
}
