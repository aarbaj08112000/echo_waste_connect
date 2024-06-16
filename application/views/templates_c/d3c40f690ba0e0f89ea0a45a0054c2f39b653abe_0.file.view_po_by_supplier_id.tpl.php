<?php
/* Smarty version 4.3.2, created on 2024-06-10 17:47:14
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/purchase/view_po_by_supplier_id.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6666eecac82880_49641920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3c40f690ba0e0f89ea0a45a0054c2f39b653abe' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/purchase/view_po_by_supplier_id.tpl',
      1 => 1718021834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6666eecac82880_49641920 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Purchase Orders</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('');?>
">Home</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-1">
                                        <a readonly href="<?php echo base_url('new_po_list_supplier');?>
" type="text" class="btn btn-dark mt-3" required>
                                            < Back </a>
                                    </div>
                                    <div class="col-lg-2">
                                        <label for="">Supplier Name</label>
                                        <input readonly value="<?php echo $_smarty_tpl->tpl_vars['supplier_data']->value[0]->supplier_name;?>
" type="text" class="form-control" required>
                                    </div>
                                    <div class="col-lg-2">
                                        <label for="">Supplier Number</label>
                                        <input readonly value="<?php echo $_smarty_tpl->tpl_vars['supplier_data']->value[0]->supplier_number;?>
" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <h3 class="card-title"></h3>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
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
                                    <tfoot>
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
                                    </tfoot>
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
                                                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                    <td>
                                                    	<?php if ((empty($_smarty_tpl->tpl_vars['s']->value->process_id))) {?>
                                                    		Normal PO 
                                                    	<?php } else { ?>
                                                    		Subcon PO 
                                                    	<?php }?>
                                                    	
                                                    </td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['s']->value->po_number;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['s']->value->po_date;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['s']->value->created_date;?>
</td>
                                                    <td>
                                                        <?php if (($_smarty_tpl->tpl_vars['s']->value->status == "accpet")) {?>
                                                            <a href="<?php echo base_url('download_my_pdf/');
echo $_smarty_tpl->tpl_vars['s']->value->id;?>
" class="btn btn-primary" href="">Download</a>
                                                        <?php }?>
                                                    </td>
                                                    <td><a href="<?php echo base_url('view_new_po_by_id/');
echo $_smarty_tpl->tpl_vars['s']->value->id;?>
" class="btn btn-primary" href="">PO Details</a></td>
                                                    <td>
                                                     <?php if (($_smarty_tpl->tpl_vars['s']->value->expiry_po_date > date('Y-m-d'))) {?>
                                                     	<?php $_smarty_tpl->_assignInScope('expired', 'yes');?>
                                                     <?php } else { ?>
                                                               // echo "no";
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
    <!-- /.content-wrapper --><?php }
}
