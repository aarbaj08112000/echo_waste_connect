<?php
/* Smarty version 4.3.2, created on 2024-06-10 19:26:27
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/purchase/addrouting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6667060b785ac3_59962222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2b2d136fa16c20d2f5eefe3aa89f9017f638ff9' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/purchase/addrouting.tpl',
      1 => 1718027786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6667060b785ac3_59962222 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
    <div class="content-wrapper" >
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Routing</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Item part List</li>
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
                        <div class="card">
                            <div class="card-header">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleModal">
                                    Add Routing</button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo base_url('addRoutingParts');?>
" method="POST" enctype='multipart/form-data' >
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label> Select Input item part </label><span class="text-danger">*</span>
                                                                <select class="form-control select2" name="routing_part_id" style="width: 100%;">
                                                                    <?php if (count($_smarty_tpl->tpl_vars['child_part_master']->value) > 0) {?>
                                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_part_master']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
</option>
	                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                    <?php }?>
                                                                </select>
                                                            </div>
                                                                                                                        
                                                            <div class="form-group">
                                                                <label for="po_num">Qty</label><span class="text-danger">*</span>
                                                                <input type="number" step="any" value="" name="qty" required class="form-control" id="exampleInputEmail1" placeholder="Enter Qty">
                                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['part_id']->value;?>
" name="part_id" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Price">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Output Part Number</th>
                                            <th>Output Part Description</th>
                                            <th>Input Part Number</th>
                                            <th>Input Part Description</th>
                                            <th>Input Part Qty</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $_smarty_tpl->_assignInScope('i', 1);?>
                                    	<?php if ($_smarty_tpl->tpl_vars['routing']->value != '') {?>
	                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['routing']->value, 'poo');
$_smarty_tpl->tpl_vars['poo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['poo']->value) {
$_smarty_tpl->tpl_vars['poo']->do_else = false;
?>
	                                                <tr>
	                                                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
	                                                    <td><?php echo $_smarty_tpl->tpl_vars['poo']->value->out_partNumber;?>
</td>
	                                                    <td><?php echo $_smarty_tpl->tpl_vars['poo']->value->out_partDesc;?>
</td>
	                                                    <td><?php echo $_smarty_tpl->tpl_vars['poo']->value->in_partNumber;?>
</td>
	                                                    <td><?php echo $_smarty_tpl->tpl_vars['poo']->value->in_partDesc;?>
</td>
	                                                    <td><?php echo $_smarty_tpl->tpl_vars['poo']->value->qty;?>
</td>
	                                                </tr>
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
            </div>
        </section>
    </div><?php }
}
