<?php
/* Smarty version 4.3.2, created on 2024-06-17 16:34:13
  from '/var/www/html/extra/erp_converted/application/views/templates/reports/receivable_report.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6670182d1f73c9_78089297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21368537732e00cd55627b0265080d0078b831e4' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/reports/receivable_report.tpl',
      1 => 1718622224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6670182d1f73c9_78089297 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/extra/erp_converted/application/third_party/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="wrapper" style="width:2500px">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Receivable Reports</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
dashboard">Home</a></li>
                            <li class="breadcrumb-item active">Receivable Reports</li>
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
                                <div class="row">
                                    <div class="col-lg-2">
                                        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
receivable_report" method="post">
                                        <div class="form-group">
                                            <label for="">Select Customer  <span class="text-danger">*</span></label>
                                            <select name="customer_part_id" id="" class="form-control select2" required>
                                                <option value="">Select Customer</option>
                                                                <?php if ($_smarty_tpl->tpl_vars['customers']->value) {?>
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customers']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"
                                                                        <?php if ($_smarty_tpl->tpl_vars['selected_customer_part_id']->value === $_smarty_tpl->tpl_vars['c']->value->id) {?>selected<?php }?>
                                                                    ><?php echo $_smarty_tpl->tpl_vars['c']->value->customer_name;?>
</option>
                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                <?php }?>
                                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="submit" class="btn btn-primary mt-4" value="Search">
                                     </form>
                                    </div>
                                </div>
                                <!-- Button trigger modal -->
                                <!-- <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleModal">
                                    Add </button> -->
                            </div>
                            <!-- Modal -->

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>

                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Customer Name</th>
                                            <th>Sales Inv No</th>
                                            <th>Sales Inv Date</th>
                                            <th>Basic Amount Total</th>
                                            <th>GST Total Amount</th>
                                            <th>Total Amount With GST</th>
                                            <th>Payment Terms in Days</th>
                                            <th>Due Date</th>
                                            <th>Due Days</th>
                                            <th>Payment Receipt Date</th>
                                            <th>Amount Received</th>
                                            <th>Transaction Details</th>
                                            <th>Balance Amount to Receive</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($_smarty_tpl->tpl_vars['sales_parts']->value) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sales_parts']->value, 'po', false, NULL, 'report', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['po']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_report']->value['iteration']++;
?>
                                               
                                                <?php $_smarty_tpl->_assignInScope('subtotal', round($_smarty_tpl->tpl_vars['po']->value->ttlrt-$_smarty_tpl->tpl_vars['po']->value->gstamnt,2));?>
                                                <?php $_smarty_tpl->_assignInScope('row_total', round($_smarty_tpl->tpl_vars['po']->value->ttlrt,2)+round($_smarty_tpl->tpl_vars['po']->value->tcsamnt,2));?>
                                                <tr>
                                                    <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_report']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_report']->value['iteration'] : null);?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->customer_name;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->sales_number;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->created_date;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['subtotal']->value;?>
</td>
                                                    <td><?php echo number_format($_smarty_tpl->tpl_vars['po']->value->gst,2);?>
</td>
                                                    <td><?php echo number_format($_smarty_tpl->tpl_vars['row_total']->value,2);?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->payment_terms;?>
</td>
                                                    <td>
                                                        <?php echo $_smarty_tpl->tpl_vars['po']->value->due_date;?>

                                                    </td>
                                                  
                                                    <?php if ($_smarty_tpl->tpl_vars['po']->value->due_days <= 0 && !$_smarty_tpl->tpl_vars['po']->value->payment_receipt_date) {?>
                                                        <td style="background-color: red;"><?php echo $_smarty_tpl->tpl_vars['po']->value->due_days;?>
</td>
                                                    <?php } else { ?>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value->due_days;?>
</td>
                                                    <?php }?>
                                                    <td><?php if ($_smarty_tpl->tpl_vars['po']->value->payment_receipt_date) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['po']->value->payment_receipt_date,"%d/%m/%Y");
}?></td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->amount_received;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->transaction_details;?>
</td>
                                                    <td>
                                                        <?php $_smarty_tpl->_assignInScope('bal_amnt', $_smarty_tpl->tpl_vars['row_total']->value-$_smarty_tpl->tpl_vars['po']->value->amount_received);?>
                                                        <?php echo number_format($_smarty_tpl->tpl_vars['bal_amnt']->value,2);?>

                                                    </td>
                                                    <td>
                                                        <button type="submit" data-toggle="modal" class="btn btn-sm btn-primary"
                                                            data-target="#exampleModal2<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_report']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_report']->value['iteration'] : null);?>
"> <i class="fas fa-edit"></i></button>

                                                        <div class="modal fade" id="exampleModal2<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_report']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_report']->value['iteration'] : null);?>
" role="dialog"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Update
                                                                        </h5>
                                                                        <button type="button" class="close" data-dismiss="modal"
                                                                            aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
update_receivable_report" method="POST">
                                                                            <input type="hidden" name="sales_number" required value="<?php echo $_smarty_tpl->tpl_vars['po']->value->sales_number;?>
">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="form-group">
                                                                                        <label for="payment_receipt_date">Payment Receipt Date</label><span
                                                                                            class="text-danger">*</span>
                                                                                        <input type="date" name="payment_receipt_date" required
                                                                                            class="form-control"
                                                                                            id="exampleInputEmail1"
                                                                                            aria-describedby="emailHelp"
                                                                                            placeholder="Payment Receipt Date" value="<?php echo $_smarty_tpl->tpl_vars['po']->value->payment_receipt_date;?>
">
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="amount_received">Amount Received</label><span
                                                                                            class="text-danger">*</span>
                                                                                        <input type="text"
                                                                                            name="amount_received" required
                                                                                            class="form-control"
                                                                                            id="exampleInputEmail1"
                                                                                            aria-describedby="emailHelp"
                                                                                            placeholder="Amount Received" value="<?php echo $_smarty_tpl->tpl_vars['po']->value->amount_received;?>
" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="transaction_details">Trans. Details</label><span
                                                                                            class="text-danger"></span>
                                                                                        <input type="text"
                                                                                            name="transaction_details"
                                                                                            class="form-control"
                                                                                            id="exampleInputEmail1"
                                                                                            aria-describedby="emailHelp"
                                                                                            placeholder="Transaction Details" value="<?php echo $_smarty_tpl->tpl_vars['po']->value->transaction_details;?>
">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary"
                                                                                    data-dismiss="modal">Close</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Save
                                                                                    changes</button>
                                                                            </div>
                                                                        </form>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
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
