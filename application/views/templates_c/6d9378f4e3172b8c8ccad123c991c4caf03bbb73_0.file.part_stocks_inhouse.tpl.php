<?php
/* Smarty version 4.3.2, created on 2024-07-01 10:13:36
  from '/var/www/html/extra/erp_converted/application/views/templates/store/part_stocks_inhouse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_668233f844e876_32440204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d9378f4e3172b8c8ccad123c991c4caf03bbb73' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/store/part_stocks_inhouse.tpl',
      1 => 1718605193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668233f844e876_32440204 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
<?php $_smarty_tpl->_assignInScope('role', trim($_smarty_tpl->tpl_vars['session_data']->value['type']));?>
<!-- done new fg stock -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Inhouse Parts (Item) Stock</h1>
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
   <div class="container-fluid">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="card-header">
               <h3 class="card-title">
                  <a href="<?php echo base_url('download_stock_variance');?>
"
                     class="btn btn-info">Download Stock Variance </a>
               </h3>
            </div>
            <div class="card-body">
               <form action="<?php echo base_url('view_part_stocks_inhouse');?>
" method="POST"
                  enctype="multipart/form-data">
                  <div class="row">
                     <div class="col-lg-4">
                        <div style="width: 400px;">
                           <div class="form-group">
                              <label for="on click url">Select Part Number<span
                                 class="text-danger">*</span></label> <br>
                              <select name="part_id" class="form-control select2" id="">
                                 <option value="">Select Part</option>
                                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_part_list']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
	                                 <option <?php if (($_smarty_tpl->tpl_vars['filter_part_id']->value == $_smarty_tpl->tpl_vars['c']->value->id)) {?>selected <?php }?>
	                                    value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>

	                                 </option>
                                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
                        <!-- <th>store_scrap</th> -->
                        <th>Store Rejection Stock</th>
                        <th>Production Rejection Stock</th>
                        <th>Under Inspection Stock</th>
                        <th>GRN Rejection Stock</th>
                        <th>Store Rack Location</th>
                        <th>Store Stock Rate</th>
                        <th>Store Stock Value</th>
                        <th>Production Stock</th>
                        <th>Production Scrap</th>
                        <th>Production Rejection</th>
                        <th>Transfer to Fg</th>
                     </tr>
                  </thead>
                  
                  <tbody>
                     <?php $_smarty_tpl->_assignInScope('i', 1);?>
                        <?php if (($_smarty_tpl->tpl_vars['filter_part_id']->value)) {?>
                            <?php if (($_smarty_tpl->tpl_vars['filtered_cust_part']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filtered_cust_part']->value, 'po');
$_smarty_tpl->tpl_vars['po']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->do_else = false;
?>
                                   	<?php $_smarty_tpl->_assignInScope('stock', $_smarty_tpl->tpl_vars['po']->value->stock);?>
                                   	<?php $_smarty_tpl->_assignInScope('prodQtyColName', $_smarty_tpl->tpl_vars['po']->value->prodQtyColName);?>
                                   	<?php $_smarty_tpl->_assignInScope('uom_data', $_smarty_tpl->tpl_vars['po']->value->uom_data);?>
                                   	<?php $_smarty_tpl->_assignInScope('underinspection_stock', $_smarty_tpl->tpl_vars['po']->value->underinspection_stock);?>
                                   	<?php $_smarty_tpl->_assignInScope('scrap_stock', $_smarty_tpl->tpl_vars['po']->value->scrap_stock);?>
                                   	<?php $_smarty_tpl->_assignInScope('child_part_present', $_smarty_tpl->tpl_vars['po']->value->child_part_present);?>
				                    <tr>
				                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value->id;?>
</td>
				                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value->part_number;?>
</td>
				                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value->part_description;?>
</td>
				                        <td><?php echo $_smarty_tpl->tpl_vars['uom_data']->value[0]->uom_name;?>
</td>
				                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value->safty_buffer_stk;?>
</td>
				                        <td class="<?php if (($_smarty_tpl->tpl_vars['po']->value->safty_buffer_stk <= $_smarty_tpl->tpl_vars['stock']->value)) {?>text-success<?php } else { ?>text-danger <?php }?>"><?php echo $_smarty_tpl->tpl_vars['stock']->value;?>
</td>
				                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value->sub_con_stock;?>
</td>
				                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value->onhold_stock;?>
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
				                        <td><?php echo ($_smarty_tpl->tpl_vars['stock']->value)*($_smarty_tpl->tpl_vars['po']->value->store_stock_rate);?>
</td>
				                        <td>
				                           <?php if (($_smarty_tpl->tpl_vars['child_part_present']->value == "yes")) {?>
				                                  <?php if (($_smarty_tpl->tpl_vars['po']->value->{$_smarty_tpl->tpl_vars['prodQtyColName']->value} > 0)) {?>
							                            <?php if (($_smarty_tpl->tpl_vars['role']->value == "Admin" || $_smarty_tpl->tpl_vars['role']->value == "production")) {?>
								                           <button type="button" class="btn btn-primary" data-toggle="modal"
								                              data-target="#edit<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
								                           <?php echo $_smarty_tpl->tpl_vars['po']->value->{$_smarty_tpl->tpl_vars['prodQtyColName']->value};?>

								                           </button>
								                           <div class="modal fade" id="edit<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1"
								                              role="dialog" aria-labelledby="exampleModalLabel"
								                              aria-hidden="true">
								                              <div class="modal-dialog" role="document">
								                                 <div class="modal-content">
								                                    <div class="modal-header">
								                                       <h5 class="modal-title" id="exampleModalLabel">Transfer
								                                          Production stock to store stock
								                                       </h5>
								                                       <button type="button" class="close" data-dismiss="modal"
								                                          aria-label="Close">
								                                       <span aria-hidden="true">&times;</span>
								                                       </button>
								                                    </div>
								                                    <div class="modal-body">
								                                       <div class="row">
								                                          <div class="col-lg-12">
								                                             <form
								                                                action="<?php echo base_url('update_production_qty');?>
"
								                                                method="POST" enctype="multipart/form-data">
								                                                <label for="">Production Qty <span
								                                                   class="text-danger">*</span>
								                                                </label>
								                                                <input type="number" step="any" class="form-control"
								                                                   value=""
								                                                   max="	<?php echo $_smarty_tpl->tpl_vars['po']->value->{$_smarty_tpl->tpl_vars['prodQtyColName']->value};?>
"
								                                                   name="production_qty" min="1" required
								                                                   placeholder="Enter Transfer Qty">
								                                                <input type="hidden" class="form-control"
								                                                   value="<?php echo $_smarty_tpl->tpl_vars['po']->value->part_number;?>
"
								                                                   name="part_number" required
								                                                   placeholder="Enter Transfer Qty">
								                                          </div>
								                                       </div>
								                                       <div class="modal-footer">
								                                       <button type="button" class="btn btn-secondary"
								                                          data-dismiss="modal">Close</button>
								                                       <button type="submit" class="btn btn-primary">Save
								                                       changes</button>
								                                       </form>
								                                       </div>
								                                    </div>
								                                 </div>
								                              </div>
							                            <?php }?>
							                      <?php } else { ?>
							                        <?php echo $_smarty_tpl->tpl_vars['po']->value->{$_smarty_tpl->tpl_vars['prodQtyColName']->value};?>

							                      <?php }?>
				                            <?php } else { ?>
				                                <?php echo $_smarty_tpl->tpl_vars['po']->value->{$_smarty_tpl->tpl_vars['prodQtyColName']->value};?>

				                           	<?php }?>

				                        </td>
				                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value->production_rejection;?>
</td>
				                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value->production_scrap;?>
</td>
				                        <td>
					                        <?php if (($_smarty_tpl->tpl_vars['po']->value->{$_smarty_tpl->tpl_vars['prodQtyColName']->value} > 0)) {?>
					                                <?php if (($_smarty_tpl->tpl_vars['role']->value == "Admin" || $_smarty_tpl->tpl_vars['role']->value == "production")) {?>
								                        <button type="button" class="btn btn-primary" data-toggle="modal"
								                           data-target="#fgtransfer<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
								                        Transfer to FG
								                        </button>
								                        <div class="modal fade" id="fgtransfer<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1"
								                           role="dialog" aria-labelledby="exampleModalLabel"
								                           aria-hidden="true">
									                        <div class="modal-dialog" role="document">
									                        <div class="modal-content">
									                        <div class="modal-header">
									                        <h5 class="modal-title" id="exampleModalLabel">Transfer
									                        Production QTY to FG
									                        </h5>
									                        <button type="button" class="close" data-dismiss="modal"
									                           aria-label="Close">
									                        <span aria-hidden="true">&times;</span>
									                        </button>
									                        </div>
									                        <div class="modal-body">
									                        <div class="row">
									                        <div class="col-lg-12">
									                        <form
									                           action="<?php echo base_url('transfer_child_part_to_fg_stock_inhouse');?>
"
									                           method="POST" enctype="multipart/form-data">
									                        <label for="">Enter Stock Qty <span
									                           class="text-danger">*</span>
									                        </label>
									                        <input type="number" step="any"
									                           class="form-control" value=""
									                           max="<?php echo $_smarty_tpl->tpl_vars['po']->value->{$_smarty_tpl->tpl_vars['prodQtyColName']->value};?>
"
									                           name="stock" required
									                           placeholder="Enter Transfer Qty">
									                        <input type="hidden" class="form-control"
									                           value="<?php echo $_smarty_tpl->tpl_vars['po']->value->part_number;?>
"
									                           name="part_number" required
									                           placeholder="Enter Transfer Qty">
									                        <input type="hidden" class="form-control"
									                           value="<?php echo $_smarty_tpl->tpl_vars['po']->value->id;?>
"
									                           name="child_part_id" required
									                           placeholder="Enter Transfer Qty">
									                        </div>
									                        <div class="col-lg-12">
									                        <label for=""><br>Select Customer Part Number /
									                        Customer Name </label>
									                        <select name="customer_part_number" required
									                           id="" class="form-control select2">
									                        <option value="">Select Part</option>
									                        <?php if (($_smarty_tpl->tpl_vars['transfer_part_list']->value)) {?>
									                               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transfer_part_list']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
											                        <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value->part_number;?>
">
											                        	<?php echo $_smarty_tpl->tpl_vars['t']->value->part_number;?>

											                        </option>
											                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									                        <?php }?>
									                        </select>
									                        </div>
									                        </div>
									                        <div class="modal-footer">
									                        <button type="button"  class="btn btn-secondary" data-dismiss="modal"
									                           aria-label="Close">Close</button>
									                        <button type="submit" class="btn btn-primary">Save
									                        changes</button>
									                        </form>
									                        </div>
									                        </div>
									                        </div>
								                        </div>
							                        <?php }?>
					                        <?php } else { ?>
					                           <?php echo $_smarty_tpl->tpl_vars['po']->value->{$_smarty_tpl->tpl_vars['prodQtyColName']->value};?>

					                        <?php }?>
				                        </td>
				                    </tr>
		                        <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
		                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        	<?php }?>
                        <?php }?>
                  </tbody>
               </table>
               </div>
               </div>
            </div>
         </div>
      </div>
</section>
</div>
<?php echo '<script'; ?>
>
   $(function() {
       $("#total_value_id").val(<?php echo $_smarty_tpl->tpl_vars['total_value']->value;?>
);
   });
<?php echo '</script'; ?>
><?php }
}
