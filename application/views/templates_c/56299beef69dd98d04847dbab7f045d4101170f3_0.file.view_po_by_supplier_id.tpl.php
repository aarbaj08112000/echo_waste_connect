<?php
/* Smarty version 4.3.2, created on 2024-08-27 23:59:27
  from '/var/www/html/extra_work/erp_converted/application/views/templates/purchase/view_po_by_supplier_id.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66ce1b0757aed9_02152771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56299beef69dd98d04847dbab7f045d4101170f3' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/purchase/view_po_by_supplier_id.tpl',
      1 => 1724694253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ce1b0757aed9_02152771 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <nav aria-label="breadcrumb">
            <div class="sub-header-left pull-left breadcrumb">
                <h1>
                    Purchase
                    <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link"
                        title="Back to Issue Request Listing">
                        <i class="ti ti-chevrons-right"></i>
                        <em>Supplier PO</em></a>
                </h1>
                <br>
                <span>Generate PO</span>
            </div>
        </nav>
        <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5 listing-btn">
            <a title="Back To Supplier Po List" class="btn btn-seconday" href="<?php echo base_url('new_po_list_supplier');?>
" type="button"><i class="ti ti-arrow-left" ></i></i></a>
        </div>
        <div class="card p-0 mt-4">
            <div class="card-header">
                <div class="row">
                    <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Supplier Name</p>
                        <p class="tgdp-rgt-tp-txt">
                            <?php echo $_smarty_tpl->tpl_vars['supplier_data']->value[0]->supplier_name;?>

                        </p>
                    </div>
                    <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Supplier Number</p>
                        <p class="tgdp-rgt-tp-txt">
                            <?php echo $_smarty_tpl->tpl_vars['supplier_data']->value[0]->supplier_number;?>

                        </p>
                    </div>
                    <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Supplier Location</p>
                        <p class="tgdp-rgt-tp-txt" title="<?php echo $_smarty_tpl->tpl_vars['supplier_data']->value[0]->location;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['supplier_data']->value[0]->location;?>

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card p-0 mt-4">
            <div class="tabTitle position-relative">
                <h2 id="cc_sh_sys_static_field_3">
                    <span>PO Parts</span>
                    <span style="display:none;position:absolute;left:0;right:0;text-align:center;top: 19px;"
                        id="ajax_loader_childModule_stock_intward_details">
                        <i class="fa fa-refresh fa-spin-light fa-1x fa-fw"></i>
                    </span>
                </h2>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped scrollable" id="example1">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Type</th>
                            <th>PO Number</th>
                            <th>PO Date</th>
                            <th>Created Date</th>
                            <th>Download PDF PO</th>
                            <th>View PO Details</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $_smarty_tpl->_assignInScope('i', 1);?>
                            <?php if (count($_smarty_tpl->tpl_vars['new_po']->value) > 0) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_po']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                                    <tr>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['i']->value;?>

                                        </td>
                                        <td>
                                            <?php if ((empty($_smarty_tpl->tpl_vars['s']->value->process_id))) {?>
                                                Normal PO
                                                <?php } else { ?>
                                                    Subcon PO
                                                    <?php }?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['s']->value->po_number;?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['s']->value->po_date;?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['s']->value->created_date;?>

                                        </td>
                                        <td>
                                            <?php if (($_smarty_tpl->tpl_vars['s']->value->status == "accpet")) {?>
                                                <a href="<?php echo base_url('download_my_pdf/');
echo $_smarty_tpl->tpl_vars['s']->value->id;?>
"
                                                    class="btn btn-primary" href="">Download</a>
                                                <?php }?>
                                        </td>
                                        <td><a href="<?php echo base_url('view_new_po_by_id/');
echo $_smarty_tpl->tpl_vars['s']->value->id;?>
"
                                                class="btn btn-primary" href="">PO Details</a></td>
                                        <td>
                                            <?php if (($_smarty_tpl->tpl_vars['s']->value->expiry_po_date > date('Y-m-d'))) {?>
                                                <?php $_smarty_tpl->_assignInScope('expired', 'yes');?>
                                            <?php } else { ?>

                                            <?php }?>

                                            <?php if (($_smarty_tpl->tpl_vars['expired']->value == "no")) {?>
                                                <?php $_smarty_tpl->_assignInScope('statusNew', 'Expired');?>
                                            <?php } elseif (($_smarty_tpl->tpl_vars['s']->value->status == "accpet")) {?>
                                                <?php $_smarty_tpl->_assignInScope('statusNew', 'Released');?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('statusNew', $_smarty_tpl->tpl_vars['s']->value->status);?>
                                            <?php }?>
                                            <?php echo $_smarty_tpl->tpl_vars['statusNew']->value;?>

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
        </div>
    </div>
</div>
<?php }
}
