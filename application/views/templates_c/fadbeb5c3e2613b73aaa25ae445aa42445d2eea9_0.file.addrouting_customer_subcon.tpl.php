<?php
/* Smarty version 4.3.2, created on 2024-08-21 19:15:50
  from '/var/www/html/extra_work/erp_converted/application/views/templates/purchase/addrouting_customer_subcon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c5ef8e60e589_27202340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fadbeb5c3e2613b73aaa25ae445aa42445d2eea9' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/purchase/addrouting_customer_subcon.tpl',
      1 => 1724142425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c5ef8e60e589_27202340 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">

    <!-- /.content-wrapper -->

    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
                <nav aria-label="breadcrumb">
                    <div class="sub-header-left pull-left breadcrumb">
                        <h1>
                            Purchase
                            <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link"
                                title="Back to Issue Request Listing">
                                <i class="ti ti-chevrons-right"></i>
                                <em>Customer Routing </em></a>
                        </h1>
                        <br>
                        <span>All Item Parts</span>
                    </div>
                </nav>
                <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5 listing-btn">
                    <button title="Add Routing" class="btn btn-seconday" type="button" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Add Routing</button>
                    <a title="Back To Customer Routing" class="btn btn-seconday"
                        href="http://localhost/extra_work/erp_converted/child_part_supplier_view" type="button"><i
                            class="ti ti-arrow-left"></i></a>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="javascript:void(0)" method="POST" class="addrouting_customer_subcon_form custom-form" 
                                    enctype='multipart/form-data' >
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label> Select Input item part </label><span
                                                    class="text-danger">*</span>
                                                <select class="form-control select2 required-input" name="routing_part_id"
                                                    style="width: 100%;">
                                                    <?php if (($_smarty_tpl->tpl_vars['item_arr']->value)) {?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_arr']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">
                                                                <?php echo $_smarty_tpl->tpl_vars['c']->value['part_number'];?>

                                                            </option>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="po_num">Qty</label><span class="text-danger">*</span>
                                                <input type="text" step="any" value="" name="qty" 
                                                    class="form-control required-input onlyNumericInput" id="exampleInputEmail1"
                                                    placeholder="Enter Qty">
                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['part_id']->value;?>
" name="part_id"
                                                    required class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter Part Price">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card p-0 mt-4">

                    <!-- /.card-header -->
                    <div class="">
                        <table class="table table-striped" style="border-collapse: collapse;"
                            id="add_routing_customer_view">
                            <thead>
                                <tr>
                                    <!-- <th>Sr. No.</th> -->
                                    <th>Output Part Number</th>
                                    <th>Output Part Description</th>
                                    <th>Input Part Number</th>
                                    <th>Input Part Description</th>
                                    <th>Input Part Qty</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                    <?php if (($_smarty_tpl->tpl_vars['routing']->value)) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['routing']->value, 'poo');
$_smarty_tpl->tpl_vars['poo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['poo']->value) {
$_smarty_tpl->tpl_vars['poo']->do_else = false;
?>
                                            <tr>
                                                <!-- <td>
                                                    <?php echo $_smarty_tpl->tpl_vars['i']->value;?>

                                                </td> -->
                                                <td>
                                                    <?php echo $_smarty_tpl->tpl_vars['poo']->value->out_partNumber;?>

                                                </td>
                                                <td>
                                                    <?php echo $_smarty_tpl->tpl_vars['poo']->value->out_partDesc;?>

                                                </td>
                                                <td>
                                                    <?php echo $_smarty_tpl->tpl_vars['poo']->value->in_partNumber;?>

                                                </td>
                                                <td>
                                                    <?php echo $_smarty_tpl->tpl_vars['poo']->value->in_partDesc;?>

                                                </td>
                                                <td>
                                                    <?php echo $_smarty_tpl->tpl_vars['poo']->value->qty;?>

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
            </div>


            <!-- Main content -->

        </div>
        <?php echo '<script'; ?>
>
            var base_url = <?php echo json_encode($_smarty_tpl->tpl_vars['base_url']->value);?>
 ;
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/purchase/add_routing_customer_view.js"><?php echo '</script'; ?>
>
<!-- /.content-wrapper --><?php }
}
