<?php
/* Smarty version 4.3.2, created on 2024-08-25 18:02:07
  from '/var/www/html/extra_work/erp_converted/application/views/templates/purchase/routing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66cb2447f0c839_21553303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cae9ad0ee121ba0f4b3a4b91c42abf364556f6a' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/purchase/routing.tpl',
      1 => 1724589127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cb2447f0c839_21553303 (Smarty_Internal_Template $_smarty_tpl) {
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
                <span>Subcon Routing</span>
            </div>
        </nav>
        <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5 listing-btn">
            
                                    <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
        <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
           
        </div>
        <div class="card p-0 mt-4">

            <!-- /.card-header -->
            <div class="">
                <table class="table table-striped" style="border-collapse: collapse;" id="routing_view">
                <thead>
                <tr>
                    <!-- <th>Sr. No.</th> -->
                    <th>Part Number</th>
                    <th>Part Description</th>
                    <th>Weight</th>
                    <th>Size</th>
                    <th>Thickness</th>
                    <th>Add Routing</th>
                </tr>
            </thead>
            <tbody>
                <?php $_smarty_tpl->_assignInScope('i', 1);?>
                <?php if (count($_smarty_tpl->tpl_vars['child_part_master']->value) > 0) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_part_master']->value, 'poo');
$_smarty_tpl->tpl_vars['poo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['poo']->value) {
$_smarty_tpl->tpl_vars['poo']->do_else = false;
?>
                        <?php if (($_smarty_tpl->tpl_vars['poo']->value->sub_type == "Subcon grn" || $_smarty_tpl->tpl_vars['poo']->value->sub_type == "Subcon Regular")) {?>
                            <tr>
                                <!-- <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td> -->   
                                <td><?php echo $_smarty_tpl->tpl_vars['poo']->value->part_number;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['poo']->value->part_description;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['poo']->value->weight;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['poo']->value->size;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['poo']->value->thickness;?>
</td>
                                <td>
                                    <a class="btn btn-primary"
                                        href="<?php echo base_url('addrouting/');
echo $_smarty_tpl->tpl_vars['poo']->value->id;?>
">Add
                                        Routing</a>
                                </td>
                            </tr>
                            <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
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
public/js/purchase/routing_view.js"><?php echo '</script'; ?>
><?php }
}
