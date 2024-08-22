<?php
/* Smarty version 4.3.2, created on 2024-08-21 19:15:48
  from '/var/www/html/extra_work/erp_converted/application/views/templates/purchase/routing_customer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c5ef8c33a3d2_07915133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8667a67b9856b7c924c61ea00b9a499ab343f0bc' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/purchase/routing_customer.tpl',
      1 => 1724142425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c5ef8c33a3d2_07915133 (Smarty_Internal_Template $_smarty_tpl) {
?>
    
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
                        <em>Sub Con</em></a>
                </h1>
                <br>
                <span>Customer Routing</span>
            </div>
        </nav>
        <div class="card p-0 mt-4">

            <!-- /.card-header -->
            <div class="">
                <table class="table table-striped" style="border-collapse: collapse;" id="customer_routing_view">
                <thead>
                <tr>
                    <!-- <th>Sr. No.</th> -->
                    <th>Part Number</th>
                    <th>Part Description</th>
                    <th>Add Routing</th>
                </tr>
            </thead>
            <tbody>
                <?php $_smarty_tpl->_assignInScope('i', 1);?>
                <?php if (($_smarty_tpl->tpl_vars['customer_part_master']->value)) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_part_master']->value, 'poo');
$_smarty_tpl->tpl_vars['poo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['poo']->value) {
$_smarty_tpl->tpl_vars['poo']->do_else = false;
?>
                    <tr>
                        <!-- <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td> -->
                        <td><?php echo $_smarty_tpl->tpl_vars['poo']->value->part_number;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['poo']->value->part_description;?>
</td>
                        <td>
                            <a class="btn btn-primary" href="<?php echo base_url('addrouting_customer_subcon/');
echo $_smarty_tpl->tpl_vars['poo']->value->id;?>
">Add
                                        Routing</a>
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
public/js/purchase/customer_routing_view.js"><?php echo '</script'; ?>
><?php }
}
