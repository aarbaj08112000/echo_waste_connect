<?php
/* Smarty version 4.3.2, created on 2024-07-19 13:15:00
  from '/var/www/html/extra/erp_converted/application/views/templates/customer/customer_master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_669a197c726ce6_08986308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd12d6193547a29479afa5e7e8aaafaed4a6ddc4c' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/customer/customer_master.tpl',
      1 => 1718714244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669a197c726ce6_08986308 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="width: 100%;" class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Customer Master</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Customer</li>
                        </ol>
                    </div>
                </div>
            </div>
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
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
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
                                    <tfoot>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Part</th>
                                            <th>Part price</th>
                                            <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isPLMEnabled']) {?>
                                                <th>Part Drawing </th>
                                                <th>Documents </th>
                                            <?php }?>
                                            <th>Part BOM </th>
                                            <th>Part Operation </th>
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
<?php }
}
