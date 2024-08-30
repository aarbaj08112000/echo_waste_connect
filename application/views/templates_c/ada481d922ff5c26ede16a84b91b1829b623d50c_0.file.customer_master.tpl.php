<?php
/* Smarty version 4.3.2, created on 2024-08-27 23:55:31
  from '/var/www/html/extra_work/erp_converted/application/views/templates/customer/customer_master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66ce1a1b81d334_98639545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ada481d922ff5c26ede16a84b91b1829b623d50c' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/customer/customer_master.tpl',
      1 => 1724783088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ce1a1b81d334_98639545 (Smarty_Internal_Template $_smarty_tpl) {
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
              <select name="customer_name" class="form-control select2" id="customer_name">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customers']->value, 'val');
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
      <em >Customer Master</em></a>
  </h1>
  <br>
  <span >Customer Master</span>
</div>
</nav>
<div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
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
                            <div class="">
                                
                                <!-- Button trigger modal -->
                                <!-- <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleModal">
                                    Add Customer</button> -->

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content modal-lg">
                                            <div class="modal-header ">
                                                <!-- <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5> -->
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
addCustomer" method="POST">
                                                    <div class="row">
                                                        <div class="col-lg-12">

                                                            <div class="form-group">
                                                                <label for="customer_name">Customer Name</label><span class="text-danger">*</span>
                                                                <input type="text" name="customerName" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="customer_code">Customer Code</label><span class="text-danger">*</span>
                                                                <input type="text" name="customerCode" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Code">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="customer_location">Customer billing address</label><span class="text-danger">*</span>
                                                                <input type="text" name="customerLocation" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Billing Address">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="customer_saddress">Customer shifting address</label><span class="text-danger">*</span>
                                                                <input type="text" name="customerSaddress" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Shifting Address">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="state">Add State</label><span class="text-danger">*</span>
                                                                <input type="text" name="state" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add State">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="state_no">State No</label><span class="text-danger">*</span>
                                                                <input type="text" name="state_no" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add ">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="gst_no">Add GST Number</label><span class="text-danger">*</span>
                                                                <input type="text" name="gst_no" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add GST Number">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="vendor_code">Vendor code No</label><span class="text-danger">*</span>
                                                                <input type="text" name="vendor_code" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add ">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pan_no">PAN No</label><span class="text-danger">*</span>
                                                                <input type="text" name="pan_no" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add ">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="payment_terms">Payment Terms</label><span class="text-danger">*</span>
                                                                <input type="number" min="0" name="paymentTerms" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Payment Terms">
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
                            </div>
                            <!-- /.card-header -->
                            <div class="">
                                <table id="example1" class="table  table-striped">
                                    <thead>
                                        <tr>
                                            <!-- <th>Sr. No.</th> -->   
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Part</th>
                                            <th>Part price</th>
                                            <!-- show PLM if enabled -->
                                            <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isPLMEnabled']) {?>
                                                <th>Part Drawing </th>
                                                <th>Documents </th>
                                            <?php }?>
                                            <th>Part BOM </th>
                                            <th>Part Operation </th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                        <?php if ($_smarty_tpl->tpl_vars['customers']->value) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customers']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
                                                <tr>
                                                    <!-- <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td> -->
                                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->customer_name;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->customer_code;?>
</td>
                                                    <td>
                                                        <a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
customer_part/<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
">
                                                            Parts</a>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
customer_part_price/<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
">
                                                            Part Price</a>
                                                    </td>
                                                    <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isPLMEnabled']) {?>
                                                        <td>
                                                            <a class="btn btn-secondary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
customer_part_drawing/<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
">
                                                                Part Drawing</a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
customer_part_documents/<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
">
                                                                Documents</a>
                                                        </td>
                                                    <?php }?>
                                                    <td>
                                                        <a class="btn btn-warning" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
bom/<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
">
                                                            Part BOM</a>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
customer_part_main/<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
">
                                                            Part Operations</a>
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
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/public/js/planning_and_sales/customer_master.js"><?php echo '</script'; ?>
>
<?php }
}
