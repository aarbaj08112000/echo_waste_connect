<?php
/* Smarty version 4.3.2, created on 2024-06-18 17:41:06
  from '/var/www/html/extra/erp_converted/application/views/templates/customer/customer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6671795af09bf1_62384338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8589b97da0352b679c24262e1f27dbf887e5f67d' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/customer/customer.tpl',
      1 => 1718712651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6671795af09bf1_62384338 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
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
                        <h1>Customer</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Customer</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"></h3>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleModal">
                                    Add Customer
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content modal-lg">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
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
                                    <tfoot>
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
                                    </tfoot>
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
                                                        <button type="submit" data-toggle="modal" class="btn btn-sm btn-primary" data-target="#exampleModal2<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                            <i class="fas fa-edit"></i>
                                                        </button>

                                                        <div class="modal fade" id="exampleModal2<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Add Tool</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
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
" readonly type="text" name="ucustomerName" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">
                                                                                        <input value="<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
" type="hidden" name="id" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="customer_name">Customer Code</label><span class="text-danger">*</span>
                                                                                        <input value="<?php echo $_smarty_tpl->tpl_vars['t']->value->customer_code;?>
" readonly type="text" name="ucustomerCode" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Code">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="customer_location">Customer Billing address</label><span class="text-danger">*</span>
                                                                                        <input type="text" name="ubillingaddress" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->billing_address;?>
" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Billing Address">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="customer_location">Customer Shipping address</label><span class="text-danger">*</span>
                                                                                        <input type="text" name="ushiftingAddress" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->shifting_address;?>
" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Shipping Address">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="customer_location">Add State</label><span class="text-danger">*</span>
                                                                                        <input type="text" name="ustate" required value="<?php echo $_smarty_tpl->tpl_vars['t']->value->state;?>
" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add State">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="customer_location">State No</label><span class="text-danger">*</span>
                                                                                        <input type="text" name="state_no" required value="<?php echo $_smarty_tpl->tpl_vars['t']->value->state_no;?>
" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add State No">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="customer_location">Add GST Number</label><span class="text-danger">*</span>
                                                                                        <input type="text" name="ugst_no" required value="<?php echo $_smarty_tpl->tpl_vars['t']->value->gst_number;?>
" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add GST Number">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="payment_terms">Payment Terms</label><span class="text-danger">*</span>
                                                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->payment_terms;?>
" name="upaymentTerms" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Payment Terms">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="customer_location">Vendor code No</label><span class="text-danger">*</span>
                                                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->vendor_code;?>
" name="vendor_code" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add Vendor Code">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="customer_location">PAN No</label><span class="text-danger">*</span>
                                                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->pan_no;?>
" name="pan_no" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add PAN No">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="customer_location">Bank Details</label><span class="text-danger">*</span>
                                                                                        <textarea type="text" name="bank_details" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add Bank Details"><?php echo $_smarty_tpl->tpl_vars['t']->value->bank_details;?>
</textarea>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="post">Pos</label><span class="text-danger">*</span>
                                                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->pos;?>
" name="pos" required class="form-control" aria-describedby="emailHelp" placeholder="Enter Pos">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="address1">Address</label><span class="text-danger">*</span>
                                                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->address1;?>
" name="address1" required class="form-control" aria-describedby="emailHelp" placeholder="Enter Address">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="location">Location</label><span class="text-danger">*</span>
                                                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->location;?>
" name="location" required class="form-control" aria-describedby="emailHelp" placeholder="Enter Location">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="location">Pin</label><span class="text-danger">*</span>
                                                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->pin;?>
" name="pin" required class="form-control" aria-describedby="emailHelp" placeholder="Enter Pin">
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
                                                    
                                                        <div class="modal fade" id="exampleModal3<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
delete" method="POST">
                                                                        <div class="modal-body">
                                                                            <input value="<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
" name="id" type="hidden" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Machine Name">
                                                                            <input value="customer" name="table_name" type="hidden" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Machine Name">
                                                                            Are you sure you want to delete?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
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
<?php }
}
