<?php
/* Smarty version 4.3.2, created on 2024-07-28 19:06:20
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\customer\customer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66a64954f1b651_99099285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88e3148673f9df404fd7a39a2499fb00eb06a8ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\customer\\customer.tpl',
      1 => 1722168735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a64954f1b651_99099285 (Smarty_Internal_Template $_smarty_tpl) {
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
                <span class="hide-menu">Select Month</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                  <select name="customer_name" class="form-control select2" id="customer_name">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customers']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
                  <option
                      value="<?php echo $_smarty_tpl->tpl_vars['t']->value->customer_name;?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value->customer_name;?>
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
          Planning & sales
          <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Customer</em></a>
        </h1>
        <br>
        <span >Customer</span>
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
                            <div class="card-header">
                                <h3 class="card-title"></h3>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary float-left" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Add Customer
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content modal-lg">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
                                                <button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
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
                                                                <label for="customer_name">Customer Code</label><span class="text-danger">*</span>
                                                                <input type="text" name="customerCode" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Code">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="customer_location">Customer billing address</label><span class="text-danger">*</span>
                                                                <input type="text" name="customerLocation" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Billing Address">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="customer_location">Customer Shipping address</label><span class="text-danger">*</span>
                                                                <input type="text" name="customerSaddress" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Shipping Address">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="customer_location">Add State</label><span class="text-danger">*</span>
                                                                <input type="text" name="state" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add State">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="customer_location">State No </label><span class="text-danger">*</span>
                                                                <input type="text" name="state_no" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add State No">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="customer_location">Add GST Number</label><span class="text-danger">*</span>
                                                                <input type="text" name="gst_no" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add GST Number">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="customer_location">Vendor code No</label><span class="text-danger">*</span>
                                                                <input type="text" name="vendor_code" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add Vendor Code">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="customer_location">PAN No</label><span class="text-danger">*</span>
                                                                <input type="text" name="pan_no" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add PAN No">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="payment_terms">Payment Terms</label><span class="text-danger">*</span>
                                                                <input type="number" min="0" name="paymentTerms" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Payment Terms">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="payment_terms">Pos</label><span class="text-danger">*</span>
                                                                <input type="text" name="pos" required class="form-control" aria-describedby="emailHelp" placeholder="Pos">
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <label for="payment_terms">Address 1</label><span class="text-danger">*</span>
                                                                <input type="text" name="address1" required class="form-control" aria-describedby="emailHelp" placeholder="Address 1">
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <label for="payment_terms">Location</label><span class="text-danger">*</span>
                                                                <input type="text" name="location" required class="form-control" aria-describedby="emailHelp" placeholder="Location">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="payment_terms">Pin</label><span class="text-danger">*</span>
                                                                <input type="text" name="pin" required class="form-control" aria-describedby="emailHelp" placeholder="Pin">
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
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Customer Name</th>
                                            <th>Customer Code</th>
                                            <th>Customer Billing Address</th>
                                            <th>Customer Shipping Address</th>
                                            <th>GST Number</th>
                                            <th>State</th>
                                            <th>State No</th>
                                            <th>Vendor Code</th>
                                            <th>Pan No</th>
                                            <th>Payment Terms</th>
                                            <th>Action</th>
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
                                                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->customer_name;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->customer_code;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->billing_address;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->shifting_address;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->gst_number;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->state;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->state_no;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->vendor_code;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->pan_no;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->payment_terms;?>
</td>
                                                    <td>
                                                        <button type="submit" data-bs-toggle="modal" class="btn btn-sm btn-primary edit-part" data-bs-target="#edit_modal" data-value = "<?php echo $_smarty_tpl->tpl_vars['t']->value->encode_data;?>
">
                                                            <i class="fas fa-edit"></i>
                                                        </button>

                                                       
                                                    
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
<div class="modal fade" id="edit_modal" role="dialog" aria-labelledby="edit_modal" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Tool</h5>
            <button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
               
            </button>
        </div>
        <div class="modal-body">
            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
updateCustomer" method="POST">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="customer_name">Customer Name</label><span class="text-danger">*</span>
                            <input value="<?php echo $_smarty_tpl->tpl_vars['t']->value->customer_name;?>
" readonly type="text" name="ucustomerName" required class="form-control" id="customer_name" aria-describedby="emailHelp" placeholder="Customer Name">
                            <input value="<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
" type="hidden" name="id" required class="form-control" id="customer_id" aria-describedby="emailHelp" placeholder="Customer Name">
                        </div>
                        <div class="form-group">
                            <label for="customer_name">Customer Code</label><span class="text-danger">*</span>
                            <input value="<?php echo $_smarty_tpl->tpl_vars['t']->value->customer_code;?>
" readonly type="text" name="ucustomerCode" required class="form-control" id="customer_code" aria-describedby="emailHelp" placeholder="Customer Code">
                        </div>
                        <div class="form-group">
                            <label for="customer_location">Customer Billing address</label><span class="text-danger">*</span>
                            <input type="text" name="ubillingaddress" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->billing_address;?>
" required class="form-control" id="customer_address" aria-describedby="emailHelp" placeholder="Customer Billing Address">
                        </div>
                        <div class="form-group">
                            <label for="customer_location">Customer Shipping address</label><span class="text-danger">*</span>
                            <input type="text" name="ushiftingAddress" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->shifting_address;?>
" required class="form-control" id="customer_shifting_address" aria-describedby="emailHelp" placeholder="Customer Shipping Address">
                        </div>
                        <div class="form-group">
                            <label for="customer_location">Add State</label><span class="text-danger">*</span>
                            <input type="text" name="ustate" required value="<?php echo $_smarty_tpl->tpl_vars['t']->value->state;?>
" class="form-control" id="customer_state" aria-describedby="emailHelp" placeholder="Add State">
                        </div>
                        <div class="form-group">
                            <label for="customer_location">State No</label><span class="text-danger">*</span>
                            <input type="text" name="state_no" required value="<?php echo $_smarty_tpl->tpl_vars['t']->value->state_no;?>
" class="form-control" id="customer_state_no" aria-describedby="emailHelp" placeholder="Add State No">
                        </div>
                        <div class="form-group">
                            <label for="customer_location">Add GST Number</label><span class="text-danger">*</span>
                            <input type="text" name="ugst_no" required value="<?php echo $_smarty_tpl->tpl_vars['t']->value->gst_number;?>
" class="form-control" id="customer_gst_number" aria-describedby="emailHelp" placeholder="Add GST Number">
                        </div>
                        <div class="form-group">
                            <label for="payment_terms">Payment Terms</label><span class="text-danger">*</span>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->payment_terms;?>
" name="upaymentTerms" required class="form-control" id="payment_terms" aria-describedby="emailHelp" placeholder="Payment Terms">
                        </div>
                        <div class="form-group">
                            <label for="customer_location">Vendor code No</label><span class="text-danger">*</span>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->vendor_code;?>
" name="vendor_code" required class="form-control" id="vendor_code" aria-describedby="emailHelp" placeholder="Add Vendor Code">
                        </div>
                        <div class="form-group">
                            <label for="customer_location">PAN No</label><span class="text-danger">*</span>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->pan_no;?>
" name="pan_no" required class="form-control" id="pan_no" aria-describedby="emailHelp" placeholder="Add PAN No">
                        </div>
                        <div class="form-group">
                            <label for="customer_location">Bank Details</label><span class="text-danger">*</span>
                            <textarea type="text" name="bank_details" required class="form-control" id="bank_details" aria-describedby="emailHelp" placeholder="Add Bank Details"><?php echo $_smarty_tpl->tpl_vars['t']->value->bank_details;?>
</textarea>
                        </div>
                        <div class="form-group">
                            <label for="post">Pos</label><span class="text-danger">*</span>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->pos;?>
" name="pos" id ="pos"required class="form-control" aria-describedby="emailHelp" placeholder="Enter Pos">
                        </div>
                        <div class="form-group">
                            <label for="address1">Address</label><span class="text-danger">*</span>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->address1;?>
" name="address1" required id="address1" class="form-control" aria-describedby="emailHelp" placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label><span class="text-danger">*</span>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->location;?>
" name="location" id="location" required class="form-control" aria-describedby="emailHelp" placeholder="Enter Location">
                        </div>
                        <div class="form-group">
                            <label for="location">Pin</label><span class="text-danger">*</span>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->pin;?>
" name="pin" required class="form-control" aria-describedby="emailHelp" placeholder="Enter Pin" id = "pin">
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
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/public/js/customer.js"><?php echo '</script'; ?>
><?php }
}
