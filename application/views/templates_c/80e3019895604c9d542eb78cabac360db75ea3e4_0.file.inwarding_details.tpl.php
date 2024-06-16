<?php
/* Smarty version 4.3.2, created on 2024-06-11 11:26:05
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/inwarding_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6667e6f55ea198_02677473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80e3019895604c9d542eb78cabac360db75ea3e4' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/inwarding_details.tpl',
      1 => 1718085364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6667e6f55ea198_02677473 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('isMultiClient', $_smarty_tpl->tpl_vars['session_data']->value['isMultipleClientUnits']);?>
<div  class="wrapper">
<!-- Navbar -->
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Inwarding Details</h1>
         </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="<?php echo base_url('generate_po');?>
">Home</a></li>
               <li class="breadcrumb-item active"></li>
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
            <!-- /.card -->
            <div class="card">
               <div class="card-header">
                  <div class="row">
                     <div class="col-lg-2">
                        <div class="form-group">
                           <label for="">GRN Number</label>
                           <input type="text" readonly value="
                           	<?php if (($_smarty_tpl->tpl_vars['status']->value == 'verifed')) {?>
                                  <?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->grn_number;?>

                            <?php } else { ?>
                                 
                            <?php }?>" class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-2">
                        <div class="form-group">
                           <label for="">PO Number</label>
                           <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->po_number;?>
"
                              class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-2">
                        <div class="form-group">
                           <label for="">PO Date</label>
                           <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->po_date;?>
"
                              class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-2">
                        <div class="form-group">
                           <label for="">PO Status</label>
                           <input type="text" readonly value="<?php if (($_smarty_tpl->tpl_vars['new_po']->value[0]->status == 'accpet')) {?>Released
                            <?php } else {
echo $_smarty_tpl->tpl_vars['new_po']->value[0]->status;
}?>" class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-2">
                        <div class="form-group">
                           <label for="">Supplier Name</label>
                           <input type="text" readonly
                              value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value[0]->supplier_name;?>
" class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-2">
                        <div class="form-group">
                           <label for="">Supplier Number</label>
                           <input type="text" readonly
                              value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value[0]->supplier_number;?>
"
                              class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-2">
                        <div class="form-group">
                           <label for="">Supplier GST</label>
                           <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value[0]->gst_number;?>
"
                              class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-2">
                        <div class="form-group">
                           <label for="">Inwarding Status</label>
                           <input type="text" readonly
                              value="<?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->status;?>
" class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-2">
                        <div class="form-group">
                           <label for="">Invoice Number</label>
                           <input type="text" readonly
                              value="<?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->invoice_number;?>
"
                              class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-2">
                        <div class="form-group">
                           <label for="">Invoice Amount</label>
                           <input type="text" readonly
                              value="<?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->invoice_amount;?>
"
                              class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="form-group">
                           <label for="">Software Calculated Amount</label>
                           <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['actual_price']->value;?>
"
                              class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="form-group">
                           <label for="">Invoice Amount Validation Status</label>
                           <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
"
                              class="form-control">
                        </div>
                     </div>
                     <?php if (($_smarty_tpl->tpl_vars['isMultiClient']->value == "true")) {?>
                     <div class="col-lg-2">
                        <div class="form-group">
                           <label for="">Delivery Location</label>
                           <input type="label" readonly value="<?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->delivery_unit;?>
"
                              class="form-control">
                        </div>
                     </div>
                     <?php }?>
                     <div class="col-lg-3">
                        <div class="form-group">
                           <a class="btn btn-dark mt-4"
                              href="<?php echo base_url('inwarding_invoice/');
echo $_smarty_tpl->tpl_vars['new_po_id']->value;?>
">
                           < Back </a> &nbsp;
                           <?php if (($_smarty_tpl->tpl_vars['status']->value == "not-verifed")) {?>
	                           <button type="button" class="btn btn-primary mt-4" data-toggle="modal"
	                              data-target="#exampleModalmatch">
	                           Match Invoice Amount </button>
                           <?php }?>
                              
                            <?php if (($_smarty_tpl->tpl_vars['inwarding_data']->value[0]->status == "accepted")) {?>
                              	<button class='btn btn-primary mt-4' disabled>Inwarding Already Accepted</button>
                            <?php } elseif (($_smarty_tpl->tpl_vars['status']->value == "verifed")) {?>
                                  <?php if (($_smarty_tpl->tpl_vars['inwarding_data']->value[0]->status == "pending" || $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->status == '')) {?>
			                           <button type="button" class="btn btn-danger mt-4" data-toggle="modal"
			                              data-target="#exampleModalgenerate">
			                           Generate GRN </button>
			                       <?php }?>
                           <?php }?>
                           <!-- Modal -->
                           <div class="modal fade" id="exampleModalmatch" tabindex="-1" role="dialog"
                              aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg " role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel">Match Price.
                                       </h5>
                                       <button type="button" class="close" data-dismiss="modal"
                                          aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                       </button>
                                    </div>
                                    <div class="modal-body">
                                       <form
                                          action="<?php echo base_url('validate_invoice_amount');?>
"
                                          method="POST">
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="form-group">
                                                   <label> Invoice Amount </label><span
                                                      class="text-danger">*</span>
                                                   <input type="number" step="any"
                                                      name="invoice_amount"
                                                      placeholder="Invoice Amount"
                                                      value="" class="form-control">
                                                   <input type="hidden" name="inwarding_id"
                                                      value="<?php echo $_smarty_tpl->tpl_vars['inwarding_id']->value;?>
"
                                                      class="form-control">
                                                   <input type="hidden" name="actual_price"
                                                      value="<?php echo $_smarty_tpl->tpl_vars['actual_price']->value;?>
"
                                                      class="form-control">
                                                   <input type="hidden" name="minus_price"
                                                      value="<?php echo $_smarty_tpl->tpl_vars['minus_price']->value;?>
"
                                                      class="form-control">
                                                   <input type="hidden" name="plus_price"
                                                      value="<?php echo $_smarty_tpl->tpl_vars['plus_price']->value;?>
"
                                                      class="form-control">
                                                   <input type="hidden" name="actual_price"
                                                      value="<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
"
                                                      class="form-control">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                             <button type="submit" class="btn btn-primary">Save
                                             Changes</button>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="modal fade" id="exampleModalgenerate" tabindex="-1"
                              role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog " role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel">Generate GRN
                                       </h5>
                                       <button type="button" class="close" data-dismiss="modal"
                                          aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                       </button>
                                    </div>
                                    <div class="modal-body">
                                       <form
                                          action="<?php echo base_url('generate_grn');?>
"
                                          method="POST">
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="form-group">
                                                   <label> Are You Sure Want To Generate GRN ?
                                                   </label>
                                                   <input type="hidden" name="status"
                                                      placeholder="" value="generate_grn"
                                                      class="form-control">
                                                   <input type="hidden" name="inwarding_id"
                                                      value="<?php echo $_smarty_tpl->tpl_vars['inwarding_id']->value;?>
"
                                                      class="form-control">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                             <button type="submit" class="btn btn-primary">Save
                                             Changes</button>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card-body">
                  <table class="table table-bordered table-striped" id="example1">
                     <thead>
                        <tr>
                           <th>Sr No</th>
                           <th>Part Number</th>
                           <th>Part Description</th>
                           <th>UOM</th>
                           <th>PO QTY</th>
                           <th>Balance QTY</th>
                           <th>Price</th>
                           <th>Inwarding Qty</th>
                           <th>Action </th>
                        </tr>
                     </thead>
                     <tbody>
                       	<?php if (($_smarty_tpl->tpl_vars['po_parts']->value)) {?>
                               <?php $_smarty_tpl->_assignInScope('i', 1);?>
                     		   <?php $_smarty_tpl->_assignInScope('final_po_amount', 0);?>
                               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['po_parts']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                           		
                                                                      <?php $_smarty_tpl->_assignInScope('child_part_data', $_smarty_tpl->tpl_vars['p']->value->child_part_data);?>
                                                              		   <?php $_smarty_tpl->_assignInScope('uom_data', $_smarty_tpl->tpl_vars['p']->value->uom_data);?>
                           		   <?php $_smarty_tpl->_assignInScope('part_rate_new', 0);?>
                                   <?php if ((empty($_smarty_tpl->tpl_vars['p']->value->rate))) {?>
                                   		<?php $_smarty_tpl->_assignInScope('part_rate_new', $_smarty_tpl->tpl_vars['child_part_data']->value[0]->part_rate);?>
                                   <?php } else { ?>
                                   		<?php $_smarty_tpl->_assignInScope('part_rate_new', $_smarty_tpl->tpl_vars['p']->value->rate);?>
                                   <?php }?>
                           
                                                                      <?php $_smarty_tpl->_assignInScope('total_rate', $_smarty_tpl->tpl_vars['part_rate_new']->value*$_smarty_tpl->tpl_vars['p']->value->qty);?>
                                   <?php $_smarty_tpl->_assignInScope('final_po_amount', $_smarty_tpl->tpl_vars['final_po_amount']->value+$_smarty_tpl->tpl_vars['total_rate']->value);?>
                           		   <?php $_smarty_tpl->_assignInScope('grn_details_data', $_smarty_tpl->tpl_vars['p']->value->grn_details_data);?>
                           		   <?php $_smarty_tpl->_assignInScope('data_present', 'no');?>
                                   <?php if (($_smarty_tpl->tpl_vars['grn_details_data']->value)) {?>
                                   		<?php $_smarty_tpl->_assignInScope('data_present', 'yes');?>
                                   <?php } else { ?>
                                   		<?php $_smarty_tpl->_assignInScope('data_present', 'no');?>
                                   <?php }?>
                                   <?php $_smarty_tpl->_assignInScope('subcon_po_inwarding_master', $_smarty_tpl->tpl_vars['p']->value->subcon_po_inwarding_master);?>
                                   <?php if ((empty($_smarty_tpl->tpl_vars['new_po']->value[0]->process_id))) {?>
                        <tr>
                           <td><?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
</td>
                           <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[0]->part_number;?>
</td>
                           <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[0]->part_description;?>
</td>
                           <td><?php echo $_smarty_tpl->tpl_vars['uom_data']->value[0]->uom_name;?>
</td>
                           <td><?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
</td>
                           <td><?php echo $_smarty_tpl->tpl_vars['p']->value->pending_qty;?>
</td>
                           <td><?php echo $_smarty_tpl->tpl_vars['part_rate_new']->value;?>
</td>
                           <td>
                              <?php if (($_smarty_tpl->tpl_vars['inwarding_data']->value[0]->status == "accepted")) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['grn_details_data']->value[0]->qty;?>

                               <?php } elseif (($_smarty_tpl->tpl_vars['data_present']->value == "yes")) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['grn_details_data']->value[0]->qty;?>

                               <?php } elseif (($_smarty_tpl->tpl_vars['inwarding_data']->value[0]->status == "generate_grn")) {?>
                                    NA
                               <?php } else { ?>
                              <form action="<?php echo base_url('add_grn_qty');?>
" method="post">
                                 <input type="number" required step="any"
                                    max="<?php echo $_smarty_tpl->tpl_vars['p']->value->pending_qty;?>
"
                                    placeholder="Inwarding Qty"
                                    name="qty"
                                    class="form-control">
                                 <input type="hidden" name="inwarding_id"
                                    value="<?php echo $_smarty_tpl->tpl_vars['inwarding_id']->value;?>
" class="form-control">
                                 <input type="hidden" 
                                    name="new_po_id" value="<?php echo $_smarty_tpl->tpl_vars['new_po_id']->value;?>
"
                                    class="form-control">
                                 <input type="hidden" 
                                    name="part_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->part_id;?>
"
                                    class="form-control">
                                 <input type="hidden" 
                                    name="invoice_number"
                                    value="<?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->invoice_number;?>
"
                                    class="form-control">
                                 <input type="hidden" 
                                    name="grn_number"
                                    value="<?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->grn_number;?>
"
                                    class="form-control">
                                 <input type="hidden" 
                                    name="po_part_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
"
                                    class="form-control">
                                 <input type="hidden" 
                                    name="pending_qty" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->pending_qty;?>
"
                                    class="form-control">
                                 <input type="hidden" 
                                    name="part_rate" value="<?php echo $_smarty_tpl->tpl_vars['part_rate_new']->value;?>
"
                                    class="form-control">
                                 <input type="hidden"  name="tax_id"
                                    value="<?php echo $_smarty_tpl->tpl_vars['p']->value->tax_id;?>
" class="form-control">
                                 <input type="hidden" name="invoice_number"
                                    value="<?php echo $_smarty_tpl->tpl_vars['invoice_number']->value;?>
" class="form-control">
                                <?php }?>
                           </td>
                           <td>
                           <?php if (($_smarty_tpl->tpl_vars['data_present']->value == "yes" && $_smarty_tpl->tpl_vars['status']->value != "verifed")) {?>
                           <button type="button" class="btn btn-primary " title="Update" data-toggle="modal" data-target="#exampleModa<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
l">
                           <i class="fa fa-edit"></i>
                           </button>
                           <div class="modal fade" id="exampleModa<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
l" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog " role="document">
                           <div class="modal-content">
                           <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Update Details</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                           </div>
                           <div class="modal-body">
                           <form action="<?php echo base_url('edit_grn_qty');?>
" method="POST">
                           <div class="row">
                           <div class="col-lg-12">
                           <div class="form-group">
                           <label> Inwarding Qty </label><span class="text-danger">*</span>
                           <input type="number" required step="any"
                              max="<?php echo $_smarty_tpl->tpl_vars['p']->value->pending_qty;?>
"
                              name="qty"
                              value="<?php echo $_smarty_tpl->tpl_vars['grn_details_data']->value[0]->qty;?>
"
                              class="form-control">
                           <input type="hidden" 
                              name="inwarding_id"
                              value="<?php echo $_smarty_tpl->tpl_vars['inwarding_id']->value;?>
" class="form-control">
                           <input type="hidden" 
                              name="new_po_id" value="<?php echo $_smarty_tpl->tpl_vars['new_po_id']->value;?>
"
                              class="form-control">
                           <input type="hidden" 
                              name="part_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->part_id;?>
"
                              class="form-control">
                           <input type="hidden" 
                              name="invoice_number"
                              value="<?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->invoice_number;?>
"
                              class="form-control">
                           <input type="hidden" 
                              name="grn_number"
                              value="<?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->grn_number;?>
"
                              class="form-control">
                           <input type="hidden" 
                              name="po_part_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
"
                              class="form-control">
                           <input type="hidden" 
                              name="part_rate" value="<?php echo $_smarty_tpl->tpl_vars['part_rate_new']->value;?>
"
                              class="form-control">
                           <input type="hidden" 
                              name="pending_qty" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->pending_qty;?>
"
                              class="form-control">
                           <input type="hidden"  
                              name="tax_id"
                              value="<?php echo $_smarty_tpl->tpl_vars['p']->value->tax_id;?>
" class="form-control">
                           </div>
                           <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary">Save</button>
                           </div>
                           </form>
                           </div>
                           </div>
                           </div>
                           </div>
                           <?php } elseif (($_smarty_tpl->tpl_vars['status']->value == "not-verifed")) {?>
                           <button type="submit" class="btn btn-info">Submit</button>
                           </form>
                           <?php }?>
                           </td>
                        </tr>
                        <?php } else { ?>
                        <tr>
	                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
	                        <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[0]->part_number;?>
</td>
	                        <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[0]->part_description;?>
</td>
	                        <td><?php echo $_smarty_tpl->tpl_vars['uom_data']->value[0]->uom_name;?>
</td>
	                        <td><?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
</td>
	                        <td><?php echo $_smarty_tpl->tpl_vars['p']->value->pending_qty;?>
</td>
	                        <td><?php echo $_smarty_tpl->tpl_vars['part_rate_new']->value;?>
</td>
	                        <td>
	                        <?php if (($_smarty_tpl->tpl_vars['inwarding_data']->value[0]->status == "accepted")) {?>
	                               <?php echo $_smarty_tpl->tpl_vars['grn_details_data']->value[0]->qty;?>

	                        <?php } elseif (($_smarty_tpl->tpl_vars['data_present']->value == "yes")) {?>
	                               <?php echo $_smarty_tpl->tpl_vars['grn_details_data']->value[0]->qty;?>

	                        <?php } else { ?>
	                        <?php if ((empty($_smarty_tpl->tpl_vars['subcon_po_inwarding_master']->value[0]->inwarding_qty))) {?>
	                        <form action="<?php echo base_url('add_grn_qty_subcon_view');?>
"
	                           method="post">
	                        <input type="number" required step="any" 
	                           max="<?php echo $_smarty_tpl->tpl_vars['p']->value->pending_qty;?>
"
	                           placeholder="Inwarding Qty" name="qty"
	                           class="form-control">
	                        <input type="hidden" name="inwarding_id"
	                           value="<?php echo $_smarty_tpl->tpl_vars['inwarding_id']->value;?>
" class="form-control">
	                        <input type="hidden" placeholder="Inwarding Qty"
	                           name="new_po_id" value="<?php echo $_smarty_tpl->tpl_vars['new_po_id']->value;?>
"
	                           class="form-control">
	                        <input type="hidden" placeholder="Inwarding Qty"
	                           name="part_id_new"
	                           value="<?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[0]->child_part_id;?>
"
	                           class="form-control">
	                        <input type="hidden" placeholder="Inwarding Qty"
	                           name="part_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->part_id;?>
"
	                           class="form-control">
	                        <input type="hidden" placeholder="number invoice"
	                           name="invoice_number"
	                           value="<?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->invoice_number;?>
"
	                           class="form-control">
	                        <input type="hidden" placeholder="Inwarding Qty"
	                           name="grn_number"
	                           value="<?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->grn_number;?>
"
	                           class="form-control">
	                        <input type="hidden" placeholder="Inwarding Qty"
	                           name="po_part_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
"
	                           class="form-control">
	                        <input type="hidden" placeholder="Inwarding Qty"
	                           name="pending_qty" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->pending_qty;?>
"
	                           class="form-control">
	                        <input type="hidden" placeholder="Inwarding Qty"
	                           name="part_rate" value="<?php echo $_smarty_tpl->tpl_vars['part_rate_new']->value;?>
"
	                           class="form-control">
	                        <input type="hidden" placeholder="Inwarding Qty" name="tax_id"
	                           value="<?php echo $_smarty_tpl->tpl_vars['p']->value->tax_id;?>
" class="form-control">
	                        <?php } else { ?>
	                               <?php echo $_smarty_tpl->tpl_vars['subcon_po_inwarding_master']->value[0]->inwarding_qty;?>

	                        <?php }?>
	                        <?php }?>
	                        </td>
	                        <td>
	                        <?php if (($_smarty_tpl->tpl_vars['subcon_po_inwarding_master']->value)) {?>
	                        <a class="btn btn-info"
	                           href="<?php echo base_url('grn_subcon_view/');
echo $_smarty_tpl->tpl_vars['p']->value->part_id;?>
/<?php echo $_smarty_tpl->tpl_vars['new_po_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->id;?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value->part_id;?>
"><i class="fas fa-eye"></i></a>
	                        <?php } elseif (($_smarty_tpl->tpl_vars['data_present']->value == "yes")) {?>
	                              
	                        <?php } elseif (($_smarty_tpl->tpl_vars['status']->value == "not-verifed")) {?>
		                        <button type="submit" class="btn btn-info">Submit</button>
		                        </form>
	                        <?php }?>
	                        </td>
                        </tr>
                        <?php }?>
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
<!-- /.content-wrapper --><?php }
}
