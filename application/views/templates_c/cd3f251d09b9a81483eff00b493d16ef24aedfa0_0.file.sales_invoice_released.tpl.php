<?php
/* Smarty version 4.3.2, created on 2024-06-18 19:05:06
  from '/var/www/html/extra_work/erp_converted/application/views/templates/planning_sales/sales_invoice_released.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66718d0aa72c94_21067493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd3f251d09b9a81483eff00b493d16ef24aedfa0' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/planning_sales/sales_invoice_released.tpl',
      1 => 1718717705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66718d0aa72c94_21067493 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
<div class="content-wrapper">
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <!-- /.card -->
               <div class="card card mt-4">
                  
                  
                  <div class="card">
                     <div class="card-header">
                        <div class="row">
                           <div class="col-lg-2">
                              <form action="<?php echo base_url('sales_invoice_released');?>
" method="post">
                                 <div class="form-group">
                                    <label for="">Select Month  <span class="text-danger">*</span></label>
                                    <select required name="created_month" id="" class="form-control select2">
                                    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['month_arr']->value, 'month', false, 'k');
$_smarty_tpl->tpl_vars['month']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->do_else = false;
?>
                                    		<option <?php if (($_smarty_tpl->tpl_vars['k']->value == $_smarty_tpl->tpl_vars['created_month']->value)) {?>selected<?php }?>
                                          value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</option>
                                    	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                 </div>
                           </div>
                           <div class="col-lg-2">
                           <div class="form-group">
                           <label for="">Select Year  <span class="text-danger">*</span></label>
                           <select required name="created_year" id="" class="form-control select2">
                           	<?php
$_smarty_tpl->tpl_vars['year'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['year']->step = 1;$_smarty_tpl->tpl_vars['year']->total = (int) ceil(($_smarty_tpl->tpl_vars['year']->step > 0 ? 2027+1 - (2022) : 2022-(2027)+1)/abs($_smarty_tpl->tpl_vars['year']->step));
if ($_smarty_tpl->tpl_vars['year']->total > 0) {
for ($_smarty_tpl->tpl_vars['year']->value = 2022, $_smarty_tpl->tpl_vars['year']->iteration = 1;$_smarty_tpl->tpl_vars['year']->iteration <= $_smarty_tpl->tpl_vars['year']->total;$_smarty_tpl->tpl_vars['year']->value += $_smarty_tpl->tpl_vars['year']->step, $_smarty_tpl->tpl_vars['year']->iteration++) {
$_smarty_tpl->tpl_vars['year']->first = $_smarty_tpl->tpl_vars['year']->iteration === 1;$_smarty_tpl->tpl_vars['year']->last = $_smarty_tpl->tpl_vars['year']->iteration === $_smarty_tpl->tpl_vars['year']->total;?>
                           		<option  <?php if (($_smarty_tpl->tpl_vars['year']->value == $_smarty_tpl->tpl_vars['created_year']->value)) {?>selected<?php }?>
                              value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
                           	<?php }
}
?>
                           </select>
                           </div>
                           </div>
                           <div class="col-lg-2">
                           <br><input type="submit" class="btn btn-primary mt-2"value="Search">
                           </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Sr.No.</th>
                              <th>Invoice Date</th>
                              <th>Vehicle Number</th>
                              <th>Sales Invoice Number</th>
                              <th>Customer</th>
                              <th>View Details</th>
                              <th>PDI</th>
                              <th>E-Invoice Details</th>
                              <th>Status</th>
                              <th>E-Invoice Status</th>
                              <th>Is EWay-Bill Available</th>
                              <th>Total Price (Rs.)</th>
                              <th>Actions</th>
                           </tr>
                        </thead>
                        <tbody>
                            <?php $_smarty_tpl->_assignInScope('srNo', 1);?>
                            <?php if (($_smarty_tpl->tpl_vars['new_sales']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_sales']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
	                                    <?php if (((isset($_smarty_tpl->tpl_vars['c']->value->status)))) {?>
				                           <tr>
				                              <td><?php echo $_smarty_tpl->tpl_vars['srNo']->value;?>
</td>
				                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->created_date;?>
</td>
				                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->vehicle_number;?>
</td>
				                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->sales_number;?>
</td>
				                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->customer_name;?>
</td>
				                              <td>
				                                 <a class="btn btn-primary btn-sm" href="<?php echo base_url('view_new_sales_by_id/');
echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><i class="fas fa-eye"></i></a>
				                              </td>
				                              <td>
				                                 <a class="btn btn-primary btn-sm" href="<?php echo base_url('view_PDI_inspection_report/');
echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><i class="fas fa-eye"></i></a>
				                              </td>
				                              <td>
				                                 <?php if (($_smarty_tpl->tpl_vars['c']->value->status != "pending")) {?>
				                                 <a class="btn btn-primary btn-sm" href="<?php echo base_url('view_e_invoice_by_id/');
echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><i class="fas fa-eye"></i></a>
				                                 <?php }?>
				                              </td>
				                              <td>
				                                 <?php echo $_smarty_tpl->tpl_vars['c']->value->status;?>

				                              </td>
				                              <?php $_smarty_tpl->_assignInScope('e_invoice_status', $_smarty_tpl->tpl_vars['c']->value->e_invoice_status);?>
				                              <td>
				                                 <?php echo $_smarty_tpl->tpl_vars['e_invoice_status']->value[0]->Status;?>

				                              </td>
				                              <td>
				                                 <?php if (((isset($_smarty_tpl->tpl_vars['e_invoice_status']->value[0])))) {?>
				                                    <?php echo $_smarty_tpl->tpl_vars['e_invoice_status']->value[0]->EwbStatus;?>

				                                  <?php }?>
				                              </td>
				                              <td>
				                                 <?php echo number_format($_smarty_tpl->tpl_vars['c']->value->final_po_amount,2);?>

				                              </td>
				                              <td>
				                                 <?php if (($_smarty_tpl->tpl_vars['c']->value->status != "Cancelled" && (empty($_smarty_tpl->tpl_vars['e_invoice_status']->value) || $_smarty_tpl->tpl_vars['e_invoice_status']->value[0]->Status == "CANCELLED"))) {?>
				                                 <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#cancelInvoice<?php echo $_smarty_tpl->tpl_vars['srNo']->value;?>
">Cancel</button>&nbsp;
				                                 <?php }?>

				                                 <?php if (($_smarty_tpl->tpl_vars['c']->value->status == "pending")) {?>
				                                 <button type="button" data-toggle="modal" class="btn btn-danger btn-sm" data-target="#deleteInvoice<?php echo $_smarty_tpl->tpl_vars['srNo']->value;?>
"><i class="fas fa-trash"></i></button>
				                                 <?php }?>
				                                 <div class="modal fade" id="cancelInvoice<?php echo $_smarty_tpl->tpl_vars['srNo']->value;?>
" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				                                    <div class="modal-dialog">
				                                       <div class="modal-content">
				                                          <div class="modal-header">
				                                             <h5 class="modal-title" id="exampleModalLabel">Update Status</h5>
				                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                                             <span aria-hidden="true">&times;</span>
				                                             </button>
				                                          </div>
				                                          <div class="modal-body">
				                                             <div class="row">
				                                                <form action="<?php echo base_url('cancel_sale_invoice');?>
" method="POST">
				                                                   <div class="col-lg-12">
				                                                      <div class="form-group">
				                                                         <label for=""><b>Are you sure want to Cancel this invoice?</b> </label>
				                                                         <input type="hidden" name="sales_id" value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" required class="form-control">
				                                                         <input type="hidden" name="sales_number" value="<?php echo $_smarty_tpl->tpl_vars['c']->value->sales_number;?>
" required class="form-control">
				                                                         <input type="hidden" name="status" value="<?php echo $_smarty_tpl->tpl_vars['c']->value->status;?>
" required class="form-control">
				                                                      </div>
				                                                   </div>
				                                             </div>
				                                          </div>
				                                          <div class="modal-footer">
				                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				                                          <button type="submit" class="btn btn-primary">Update</button>
				                                          </div>
				                                       </div>
				                                       </form>
				                                    </div>
				                                 </div>
				                                 <!-- delete model -->
				                                 <div class="modal fade" id="deleteInvoice<?php echo $_smarty_tpl->tpl_vars['srNo']->value;?>
" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				                                    <div class="modal-dialog">
				                                       <div class="modal-content">
				                                          <div class="modal-header">
				                                             <h5 class="modal-title" id="exampleModalLabel">Delete Invoice</h5>
				                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                                             <span aria-hidden="true">&times;</span>
				                                             </button>
				                                          </div>
				                                          <div class="modal-body">
				                                             <div class="row">
				                                                <form action="<?php echo base_url('delete_sale_invoice');?>
" method="POST">
				                                                   <div class="col-lg-12">
				                                                      <div class="form-group">
				                                                         <label for=""><b>Are you sure want to Delete this invoice?</b> </label>
				                                                         <input type="hidden" name="sales_id" value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" required class="form-control">
				                                                         <input type="hidden" name="status" value="<?php echo $_smarty_tpl->tpl_vars['c']->value->status;?>
" required class="form-control">
				                                                      </div>
				                                                   </div>
				                                             </div>
				                                          </div>
				                                          <div class="modal-footer">
				                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				                                          <button type="submit" class="btn btn-primary">Delete</button>
				                                          </div>
				                                       </div>
				                                       </form>
				                                    </div>
				                                 </div>
				                              </td>
				                           </tr>
				                          
										<?php $_smarty_tpl->_assignInScope('srNo', $_smarty_tpl->tpl_vars['srNo']->value+1);?>
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
