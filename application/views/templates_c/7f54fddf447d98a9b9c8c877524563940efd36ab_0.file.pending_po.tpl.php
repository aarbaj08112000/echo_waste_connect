<?php
/* Smarty version 4.3.2, created on 2024-08-21 19:13:08
  from '/var/www/html/extra_work/erp_converted/application/views/templates/purchase/pending_po.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c5eeec4f0bf3_01974106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f54fddf447d98a9b9c8c877524563940efd36ab' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/purchase/pending_po.tpl',
      1 => 1724142425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c5eeec4f0bf3_01974106 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
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
                            <em>Regular PO</em></a>
                    </h1>
                    <br>
                    <span>Pending PO</span>
                </div>
            </nav>
            <div class="card p-0 mt-4">

                <!-- /.card-header -->
                <div class="">
                    <table class="table table-striped" style="border-collapse: collapse;" id="pending_po_view">
                        <thead>
                            <tr>
                                <!-- <th>Sr. No.</th> -->
                                <th>Supplier Name</th>
                                <th>PO Number</th>
                                <th>PO Expiry Date</th>
                                <th>PO Date</th>
                                <th>Created Date</th>
                                <th>Download PDF PO</th>
                                <th>Status</th>
                                <th>View PO Details</th>
                                <th>Close PO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                <?php if (($_smarty_tpl->tpl_vars['new_po']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_po']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                                        <?php $_smarty_tpl->_assignInScope('expired', 'no');?>
                                            <?php if (($_smarty_tpl->tpl_vars['s']->value->expiry_po_date < date('Y-m-d'))) {?>
                                            <?php } else { ?>
                                                <tr>
                                                        <!-- <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td> -->
                                                        <td>
                                                            <?php echo $_smarty_tpl->tpl_vars['s']->value->supplier_name;?>

                                                        </td>
                                                        <td>
                                                            <?php echo $_smarty_tpl->tpl_vars['s']->value->po_number;?>

                                                        </td>
                                                        <td>
                                                            <?php echo $_smarty_tpl->tpl_vars['s']->value->expiry_po_date;?>

                                                        </td>
                                                        <td>
                                                            <?php echo $_smarty_tpl->tpl_vars['s']->value->po_date;?>

                                                        </td>
                                                        <td>
                                                            <?php echo $_smarty_tpl->tpl_vars['s']->value->created_date;?>

                                                        </td>
                                                        <td>
                                                            <?php if (($_smarty_tpl->tpl_vars['s']->value->status == "accept")) {?>
                                                                <a href="<?php echo base_url('download_my_pdf/');
echo $_smarty_tpl->tpl_vars['s']->value->id;?>
"
                                                                    class="btn btn-primary" href="">Download</a>
                                                            <?php } else { ?>
                                                                    --
                                                            <?php }?>
                                                        </td>
                                                        <td>
                                                            <?php echo $_smarty_tpl->tpl_vars['s']->value->status;?>

                                                        </td>
                                                        <td>
                                                            <a href="<?php echo base_url('view_new_po_by_id/');
echo $_smarty_tpl->tpl_vars['s']->value->id;?>
"
                                                                class="btn btn-primary" href="">PO Details</a>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-danger"
                                                                data-bs-toggle="modal" data-bs-target="#edit<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                                Close PO
                                                            </button>
                                                            <div class="modal fade" id="edit<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1"
                                                                role="dialog" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalLabel">Close PO</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close">
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="javascript:void(0)" method="POST" class="close_po_action close_po_action<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
 custom-form"
                                                                                method="POST"
                                                                                enctype="multipart/form-data" data-id="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
">
                                                                                <div class="form-group">

                                                                                    <label for="">Are You Sure Want To
                                                                                        Close <?php echo $_smarty_tpl->tpl_vars['s']->value->po_number;?>
 This
                                                                                            PO? <span
                                                                                                class="text-danger">*</span></label>
                                                                                    <input required value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
"
                                                                                        type="hidden"
                                                                                        class="form-control" name="id">
                                                                                    <input required
                                                                                        value="<?php echo $_smarty_tpl->tpl_vars['s']->value->po_number;?>
"
                                                                                        type="hidden"
                                                                                        class="form-control"
                                                                                        name="po_number">
                                                                                </div>
                                                                                <div class="form-group">

                                                                                    <label for="">Remark<span
                                                                                            class="text-danger">*</span></label>
                                                                                    <input  value=""
                                                                                        placeholder="Enter Remark"
                                                                                        type="text" class="form-control  required-input"
                                                                                        name="remark">
                                                                                </div>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Save
                                                                                changes</button>
                                                                            
                                                                        </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>           

                                                        <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                                                </tr>
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
public/js/purchase/pending_po_view.js"><?php echo '</script'; ?>
>
<!-- /.content-wrapper --><?php }
}
