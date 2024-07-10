<?php
/* Smarty version 4.3.2, created on 2024-07-04 11:26:37
  from '/var/www/html/extra/erp_converted/application/views/templates/store/stock_rejection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66863995def794_57898873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d9b24ee0f07740968d5f116f412e6f7522a1a54' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/store/stock_rejection.tpl',
      1 => 1718605193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66863995def794_57898873 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper" >
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Stock Rejection</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>
">Home</a></li>
                  <li class="breadcrumb-item active">Stock Rejection</li>
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
                     <!-- Button trigger modal -->
                     <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleModal">
                     Add Stock Rejection </button>
                  </div>
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
                              <form action="<?php echo base_url('add_rejection_flow');?>
" method="POST" enctype='multipart/form-data'>
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                          <label for="po_num">Select Part Number / Description / Stock </label><span class="text-danger">*</span>
                                          <select name="part_id" id="" class="from-control select2">
                                             <?php if (($_smarty_tpl->tpl_vars['child_part']->value)) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_part']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                        <?php if (($_smarty_tpl->tpl_vars['c']->value->stock > 0)) {?>
		                                             		<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->childPartId;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value->part_description;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value->stock;?>
</option>
			                                            <?php }?>
	                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                             <?php }?>
                                          </select>
                                       </div>
                                       <div class="form-group">
                                          <label for="po_num">Select Supplier</label><span class="text-danger">*</span>
                                          <select name="supplier_id" id="" class="from-control select2">
                                             <?php if (($_smarty_tpl->tpl_vars['supplier']->value)) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplier']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
	                                             		<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->supplier_name;?>
</option>
		                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                             <?php }?>
                                          </select>
                                       </div>
                                       <div class="form-group">
                                          <label for="po_num">Enter Reason <span class="text-danger">*</span></label>
                                          <input type="text" name="reason" required placeholder="Enter Reason" class="form-control">
                                       </div>
                                       <div class="form-group">
                                          <label for="po_num">Upload debit note (approved document)</label>
                                          <input type="file" name="uploading_document" class="form-control">
                                       </div>
                                       <div class="form-group">
                                          <label for="po_num">Enter Qty <span class="text-danger">*</span></label>
                                          <input type="number" name="qty" step="any" placeholder="Enter Qty" name="qty" required class="form-control">
                                       </div>
                                       <div class="form-group">
                                          <label for="po_num">Enter Remark </label>
                                          <input type="text" name="remark" required placeholder="Enter Remark" class="form-control">
                                       </div>
                                    </div>
                                 </div>
                           </div>
                           <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary">Save changes</button>
                           </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Sr. No.</th>
                              <th>Part Number / Description</th>
                              <th>Rejection Reason</th>
                              <th>Supplier</th>
                              <th>Remark</th>
                              <th>Uploaded Debit Note</th>
                              <th>Qty</th>
                              <th>Transfer Stock</th>
                              <th>Download Debit Note</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $_smarty_tpl->_assignInScope('i', 1);?>
                              	<?php if (($_smarty_tpl->tpl_vars['rejection_flow']->value)) {?>
                                  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rejection_flow']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
				                           <tr>
				                              <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
				                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value->part_description;?>
</td>
				                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->reason;?>
</td>
				                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->supplier_name;?>
</td>
				                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->remark;?>
</td>
				                              <td>
				                                 <?php if (($_smarty_tpl->tpl_vars['c']->value->debit_note)) {?>
				                                 <a class="btn btn-dark" download href="<?php echo base_url('documents/');
echo $_smarty_tpl->tpl_vars['c']->value->debit_note;?>
">Download Uploaded Document</a>
				                                 <?php }?>
				                              </td>
				                              <td>
				                                 <?php if (($_smarty_tpl->tpl_vars['c']->value->status == "pending")) {?>
				                                 	<a class="btn btn-warning" href="<?php echo base_url('transfer_stock/');
echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">Click To Transfer Stock</a>
				                                 <?php } else { ?>
				                                    stock transfered
				                                 <?php }?>
				                              </td>
				                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->qty;?>
</td>
				                              <td>
				                                 <?php if (($_smarty_tpl->tpl_vars['c']->value->status == "approved")) {?>
				                                 	<a class="btn btn-success" href="<?php echo base_url('create_debit_note/');
echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">Download</a>
				                                 <?php } elseif (($_smarty_tpl->tpl_vars['c']->value->status == "stock_transfered")) {?>
					                                 <button type="submit" data-toggle="modal" class="btn btn-sm btn-primary" data-target="#exampleModal2<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">Approve Rejection</button>
					                                 <div class="modal fade" id="exampleModal2<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					                                    <div class="modal-dialog modal-lg" role="document">
					                                       <div class="modal-content">
					                                          <div class="modal-header">
					                                             <h5 class="modal-title" id="exampleModalLabel">Approve Rejection</h5>
					                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					                                             <span aria-hidden="true">&times;</span>
					                                             </button>
					                                          </div>
					                                          <div class="modal-body">
					                                             <form action="<?php echo base_url('update_rejection_flow_status');?>
" method="POST">
					                                                <div class="row">
					                                                   <div class="col-lg-12">
					                                                      <div class="form-group">
					                                                         <label for="Client_name">Are You Sure Want To Accept This Request ?</label><span class="text-danger">*</span>
					                                                      </div>
					                                                   </div>
					                                                   <div class="col-lg-12">
					                                                      <div class="form-group">
					                                                         <select name="status" id="" required class="form-control">
					                                                            <option value="approved">Accept</option>
					                                                            <option value="reject">Reject</option>
					                                                         </select>
					                                                      </div>
					                                                      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" class="id">
					                                                   </div>
					                                                </div>
					                                                <div class="modal-footer">
					                                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					                                                   <button type="submit" class="btn btn-primary">Accept</button>
					                                                </div>
					                                             </form>
					                                          </div>
					                                       </div>
					                                    </div>
					                                 </div>
				                                 <?php }?>
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
