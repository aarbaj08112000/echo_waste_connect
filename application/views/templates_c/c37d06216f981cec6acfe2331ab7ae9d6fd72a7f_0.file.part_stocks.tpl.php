<?php
/* Smarty version 4.3.2, created on 2024-06-16 22:25:44
  from '/var/www/html/extra_work/erp_converted/application/views/templates/store/part_stocks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_666f19102efea9_09742450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c37d06216f981cec6acfe2331ab7ae9d6fd72a7f' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/store/part_stocks.tpl',
      1 => 1718116785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f19102efea9_09742450 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper" style="width:2400px">
<?php $_smarty_tpl->_assignInScope('role', trim($_smarty_tpl->tpl_vars['session_data']->value['type']));?>
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Supplier Parts (Item) Stock.</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Part Stocks</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
  <div>
  <div class="row">
  <div class="col-12">
    <!-- /.card -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <a href="<?php echo base_url('download_stock_variance');?>
" class="btn btn-info">Download Stock Variance </a>
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form action="<?php echo base_url('view_part_stocks');?>
" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-2">
              <div style="">
                <div class="form-group">
                  <label for="on click url">Select Part Number<span class="text-danger">*</span></label> <br>
                  <select name="part_id" id="selectPart" class="form-control select2" required id="">
                    <option value="ALL">All</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplier_part_select_list']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
	                    <option <?php if (($_smarty_tpl->tpl_vars['filter_part_id']->value == $_smarty_tpl->tpl_vars['c']->value->childPartId)) {?>selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['c']->value->childPartId;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>

	                    </option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <!-- <option value="ALL">ALL</option> -->
                  </select>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <label for="">&nbsp;</label> <br>
              <button class="btn btn-secondary">Search </button>
            </div>
          </div>
        </form>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Sr. No.</th>
                <th>Part Number</th>
                <th>Part Description</th>
                <th>UOM</th>
                <th>Safety Buffer Stock</th>
                <th>Store Stock</th>
                <th>Subcon Stock</th>
                <th>Stock Reserve against Job order</th>
                <th>Production Rejection Stock</th>
                <th>Store Rejection Stock</th>
                <th>Production Stock</th>
                <th> Under Inspection Stock</th>
                <th>GRN Rejection Stock</th>
                <th>Store Rack Location</th>
                <th>Store Stock Rate</th>
                <th>Store Stock Value</th>
                <th>Production Stock</th>
                <th>Sharing Stock</th>
                <th>Machine Mold Stock</th>
                <th>Production Scrap</th>
                <th>Production Rejection</th>
                <th>Deflashing Location</th>
                <th>Transfer To FG</th>
              </tr>
            </thead>
            <tbody>
              <?php $_smarty_tpl->_assignInScope('i', 1);?>
                <?php if (($_smarty_tpl->tpl_vars['child_part_list']->value)) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_part_list']->value, 'po');
$_smarty_tpl->tpl_vars['po']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->do_else = false;
?>
                		<?php $_smarty_tpl->_assignInScope('stock', $_smarty_tpl->tpl_vars['po']->value->stock);?>
                        <?php $_smarty_tpl->_assignInScope('uom_data', $_smarty_tpl->tpl_vars['po']->value->uom_data);?>
                        <?php $_smarty_tpl->_assignInScope('child_part_id', $_smarty_tpl->tpl_vars['po']->value->child_part_id);?>
                        <?php $_smarty_tpl->_assignInScope('store_scrap', $_smarty_tpl->tpl_vars['po']->value->store_scrap);?>
                        <?php $_smarty_tpl->_assignInScope('store_stock', $_smarty_tpl->tpl_vars['po']->value->store_stock);?>
                        <?php $_smarty_tpl->_assignInScope('underinspection_stock', $_smarty_tpl->tpl_vars['po']->value->underinspection_stock);?>
                        <?php $_smarty_tpl->_assignInScope('scrap_stock', $_smarty_tpl->tpl_vars['po']->value->scrap_stock);?>
			            <tr>
			                <td><?php echo $_smarty_tpl->tpl_vars['po']->value->childPartId;?>
</td>
			                <td><?php echo $_smarty_tpl->tpl_vars['po']->value->part_number;?>
</td>
			                <td><?php echo $_smarty_tpl->tpl_vars['po']->value->part_description;?>
</td>
			                <td><?php echo $_smarty_tpl->tpl_vars['uom_data']->value[0]->uom_name;?>
</td>
			                <td class="<?php if (($_smarty_tpl->tpl_vars['po']->value->safty_buffer_stk <= $_smarty_tpl->tpl_vars['stock']->value)) {?>text-success<?php } else { ?>text-danger<?php }?>">
			                  <?php echo $_smarty_tpl->tpl_vars['po']->value->safty_buffer_stk;?>

			                </td>
			                <td>
			                  <?php if (($_smarty_tpl->tpl_vars['stock']->value > 0)) {?>
				                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#storeToStore<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
				                  <?php echo $_smarty_tpl->tpl_vars['stock']->value;?>

				                  </button>
				                  <div class="modal fade" id="storeToStore<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				                    <div class="modal-dialog" role="document">
				                      <div class="modal-content">
				                        <div class="modal-header">
				                          <h5 class="modal-title" id="exampleModalLabel">Transfer Stock Store to Store
				                          </h5>
				                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                          <span aria-hidden="true">&times;</span>
				                          </button>
				                        </div>
				                        <div class="modal-body">
				                          <div class="row">
				                            <div class="col-lg-12">
				                              <form action="<?php echo base_url('transfer_child_store_to_store_stock');?>
" method="POST" enctype="multipart/form-data">
				                                <label for="">Stock Qty <span class="text-danger">*</span>
				                                </label>
				                                <input type="number" step="any" class="form-control" value="" max="<?php echo $_smarty_tpl->tpl_vars['po']->value->{$_smarty_tpl->tpl_vars['stock_column_name']->value};?>
" name="stock" required placeholder="Transfer Qty">
				                                <input type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['po']->value->part_number;?>
" name="part_number" required>
				                                <input type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['po']->value->childPartId;?>
" name="child_part_id" required>
				                            </div>
				                            <div class="col-lg-12">
				                            <br>
				                            <label for="">Supplier Part no / Description </label>
				                            <select name="customer_part_number" required id="" class="form-control select2">
				                            <option value="">Select Part</option>
				                            <?php if (($_smarty_tpl->tpl_vars['supplier_part_select_list']->value)) {?>
				                                  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplier_part_select_list']->value, 'ccc');
$_smarty_tpl->tpl_vars['ccc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ccc']->value) {
$_smarty_tpl->tpl_vars['ccc']->do_else = false;
?>
								                            <?php if (($_smarty_tpl->tpl_vars['filter_part_id']->value != $_smarty_tpl->tpl_vars['ccc']->value->id)) {?> 
									                            <option value="<?php echo $_smarty_tpl->tpl_vars['ccc']->value->id;?>
">
									                            <?php echo $_smarty_tpl->tpl_vars['ccc']->value->part_number;?>
/<?php echo $_smarty_tpl->tpl_vars['ccc']->value->part_description;?>

									                            </option>
							                              <?php }?>
						                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				                            <?php }?>
				                            </select>
				                            </div>
				                          </div>
				                          <div class="modal-footer">
				                          <button type="button" class="btn btn-second"     data-dismiss="modal">Close</button>
				                          <button type="submit" class="btn btn-primary">Save
				                          changes</button>
				                          </form>
				                          </div>
				                        </div>
				                      </div>
				                    </div>
				                  </div>
			                  <?php } else { ?>
			                  	<?php echo $_smarty_tpl->tpl_vars['stock']->value;?>

			                  <?php }?>
			                </td>
			                <td><?php echo $_smarty_tpl->tpl_vars['po']->value->sub_con_stock;?>
</td>
			                <td><?php echo $_smarty_tpl->tpl_vars['po']->value->onhold_stock;?>
</td>
			                <td><?php echo $_smarty_tpl->tpl_vars['store_scrap']->value;?>
</td>
			                <td><?php echo $_smarty_tpl->tpl_vars['po']->value->rejection_stock;?>
</td>
			                <td><?php echo $_smarty_tpl->tpl_vars['po']->value->rejection_prodcution_qty;?>
</td>
			                <td><?php echo $_smarty_tpl->tpl_vars['underinspection_stock']->value;?>
</td>
			                <td><?php echo $_smarty_tpl->tpl_vars['scrap_stock']->value;?>
</td>
			                <td><?php echo $_smarty_tpl->tpl_vars['po']->value->store_rack_location;?>
</td>
			                <td><?php echo $_smarty_tpl->tpl_vars['po']->value->store_stock_rate;?>
</td>
			                <td> <?php echo ($_smarty_tpl->tpl_vars['stock']->value)*($_smarty_tpl->tpl_vars['po']->value->store_stock_rate);?>
</td>
			                <td>
			                  <?php if (($_smarty_tpl->tpl_vars['po']->value->{$_smarty_tpl->tpl_vars['sheet_prod_column_name']->value} > 0)) {?>
				                    <?php if (($_smarty_tpl->tpl_vars['role']->value == "Admin")) {?>
					                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#prodToStore<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
					                  <?php echo $_smarty_tpl->tpl_vars['po']->value->{$_smarty_tpl->tpl_vars['sheet_prod_column_name']->value};?>

					                  </button>
				                   <?php }?>
			                   <?php } else { ?>
			                        <?php echo $_smarty_tpl->tpl_vars['po']->value->{$_smarty_tpl->tpl_vars['sheet_prod_column_name']->value};?>

			                   <?php }?>
			                  <div class="modal fade" id="prodToStore<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			                    <div class="modal-dialog" role="document">
			                      <div class="modal-content">
			                        <div class="modal-header">
			                          <h5 class="modal-title" id="exampleModalLabel">Transfer Production Stock to Store Stock
			                          </h5>
			                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                          <span aria-hidden="true">&times;</span>
			                          </button>
			                        </div>
			                        <div class="modal-body">
			                          <div class="row">
			                            <div class="col-lg-12">
			                              <form action="<?php echo base_url('update_production_qty_child_part_production_qty');?>
" method="POST" enctype="multipart/form-data">
			                                <label for="">Production Qty <span class="text-danger">*</span>
			                                </label>
			                                <input type="number" step="any" class="form-control" value="" max="<?php echo $_smarty_tpl->tpl_vars['po']->value->{$_smarty_tpl->tpl_vars['sheet_prod_column_name']->value};?>
" name="production_qty" min="1" required placeholder="Enter Transfer Qty">
			                                <input type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['po']->value->part_number;?>
" name="part_number" required>
			                                <input type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['po']->value->childPartId;?>
" name="child_part_id" required>
			                            </div>
			                          </div>
			                          <div class="modal-footer">
			                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			                          <button type="submit" class="btn btn-primary">Save
			                          changes</button>
			                          </form>
			                          </div>
			                        </div>
			                      </div>
			                    </div>
			                </td>
			                <td><?php echo $_smarty_tpl->tpl_vars['po']->value->{$_smarty_tpl->tpl_vars['sharingQtyColName']->value};?>
</td>
			                <td>
			                <?php if (($_smarty_tpl->tpl_vars['po']->value->{$_smarty_tpl->tpl_vars['plastic_prod_column_name']->value} > 0)) {?>
			                     <?php if (($_smarty_tpl->tpl_vars['role']->value == "Admin")) {?>
					                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#prodToStorePlastic<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
					                <?php echo $_smarty_tpl->tpl_vars['po']->value->{$_smarty_tpl->tpl_vars['plastic_prod_column_name']->value};?>

					                </button>
				                  <?php }?>
			               	<?php } else { ?>
			                  <?php echo $_smarty_tpl->tpl_vars['po']->value->{$_smarty_tpl->tpl_vars['plastic_prod_column_name']->value};?>

			                <?php }?>
			                <!-- edit Plastic Modal -->
			                <div class="modal fade" id="prodToStorePlastic<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			                <div class="modal-dialog" role="document">
			                <div class="modal-content">
			                <div class="modal-header">
			                <h5 class="modal-title" id="exampleModalLabel">Transfer Production Qty to Store Stock
			                </h5>
			                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
			                </button>
			                </div>
			                <div class="modal-body">
			                <div class="row">
			                <div class="col-lg-12">
			                <form action="<?php echo base_url('update_production_qty_child_part');?>
" method="POST" enctype="multipart/form-data">
			                <label for="">Machine Mold Stock Qty <span class="text-danger">*</span>
			                </label>
			                <input type="number" step="any" class="form-control" value="" max="<?php echo $_smarty_tpl->tpl_vars['po']->value->{$_smarty_tpl->tpl_vars['plastic_prod_column_name']->value};?>
" name="machine_mold_issue_stock" min="1" required placeholder="Enter Transfer Qty">
			                <input type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['po']->value->part_number;?>
" name="part_number" required >
			                <input type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['po']->value->childPartId;?>
" name="child_part_id" required >
			                </div>
			                </div>
			                <div class="modal-footer">
			                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			                <button type="submit" class="btn btn-primary">Save</button>
			                </form>
			                </div>
			                </div>
			                </div>
			                </div>
			                </td>
			                <td><?php echo $_smarty_tpl->tpl_vars['po']->value->production_rejection;?>
</td>
			                <td><?php echo $_smarty_tpl->tpl_vars['po']->value->production_scrap;?>
</td>
			                <td><?php echo $_smarty_tpl->tpl_vars['po']->value->deflashing_stock;?>
</td>
			                <td>
				                <?php if (($_smarty_tpl->tpl_vars['po']->value->{$_smarty_tpl->tpl_vars['stock_column_name']->value} > 0)) {?>
				                      <?php if (($_smarty_tpl->tpl_vars['role']->value == "Admin" || $_smarty_tpl->tpl_vars['role']->value == "stores")) {?>
						                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fgtransfer<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
						                Transfer FG Stock
						                </button>
					                  <?php }?>
				                <?php } else { ?>
				                  <?php echo $_smarty_tpl->tpl_vars['po']->value->{$_smarty_tpl->tpl_vars['stock_column_name']->value};?>

				                <?php }?>
				                <!-- FG Transfer Modal -->
					            <div class="modal fade" id="fgtransfer<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					                <div class="modal-dialog" role="document">
					                <div class="modal-content">
					                <div class="modal-header">
					                <h5 class="modal-title" id="exampleModalLabel"> Transfer Store Stock to FG Stock
					                </h5>
					                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					                <span aria-hidden="true">&times;</span>
					                </button>
					                </div>
					                <div class="modal-body">
					                <div class="row">
					                <div class="col-lg-12">
					                <form action="<?php echo base_url('transfer_child_part_to_fg_stock');?>
" method="POST" enctype="multipart/form-data">
					                <label for="">Enter Stock Qty <span class="text-danger">*</span>
					                </label>
					                <input type="number" step="any" class="form-control" value="" max="<?php echo $_smarty_tpl->tpl_vars['po']->value->{$_smarty_tpl->tpl_vars['stock_column_name']->value};?>
" name="stock" required placeholder="Enter Transfer Qty">
					                <input type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['po']->value->part_number;?>
" name="part_number" required>
					                <input type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['po']->value->childPartId;?>
" name="child_part_id" required>
					                </div>
					                <div class="col-lg-12">
					                <label for="">Select Customer Part Number /
					                Customer Name </label>
					                <select name="customer_part_number" required id="" class="form-control select2">
					                <option value="">Select Part</option>
					                <?php if (($_smarty_tpl->tpl_vars['customer_part_data_new_updated']->value)) {?>
					                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_part_data_new_updated']->value, 'ccc');
$_smarty_tpl->tpl_vars['ccc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ccc']->value) {
$_smarty_tpl->tpl_vars['ccc']->do_else = false;
?>
							                <option value="<?php echo $_smarty_tpl->tpl_vars['ccc']->value->id;?>
">
							                	<?php echo $_smarty_tpl->tpl_vars['ccc']->value->part_number;?>

							                </option>
						                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					                <?php }?>
					                </select>
					                </div>
					                </div>
					                <div class="modal-footer">
					                <button type="button" class="btn btn-second" data-dismiss="modal">Close</button>
					                <button type="submit" class="btn btn-primary">Save
					                changes</button>
					                </form>
					                </div>
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
<?php }
}
