<?php
/* Smarty version 4.3.2, created on 2024-06-10 17:50:15
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/purchase/view_new_po_by_id.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6666ef7fe924f6_23396863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '906ce69abb1f16aedee0d9b16ea0da53189fe72f' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/purchase/view_new_po_by_id.tpl',
      1 => 1718022015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6666ef7fe924f6_23396863 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="width:100%" class="wrapper">
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-6">
                  <?php $_smarty_tpl->_assignInScope('expired', 'no');?>
                  <?php if (($_smarty_tpl->tpl_vars['new_po']->value[0]->expiry_po_date > date('Y-m-d'))) {?>
                  <?php $_smarty_tpl->_assignInScope('expired', 'yes');?>
                  <?php }?>
                  <?php if ((empty($_smarty_tpl->tpl_vars['new_po']->value[0]->process_id))) {?>
                  <?php $_smarty_tpl->_assignInScope('type', 'normal');?>
                  <?php } else { ?>
                  <?php $_smarty_tpl->_assignInScope('type', 'Subcon grn');?>
                  <?php }?>
               </div>
               <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="<?php echo base_url('generate_po');?>
">Home </a></li>
                     <li class="breadcrumb-item active"></li>
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
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <label for="">PO Number <span class="text-danger">*</span> </label>
                                 <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->po_number;?>
" class="form-control">
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <label for="">PO Date <span class="text-danger">*</span> </label>
                                 <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->po_date;?>
" class="form-control">
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <label for="">PO Expiry Date <span class="text-danger">*</span> </label>
                                 <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->expiry_po_date;?>
" class="form-control">
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <label for="">PO Remark <span class="text-danger">*</span> </label>
                                 <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->remark;?>
" class="form-control">
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <?php if (($_smarty_tpl->tpl_vars['expired']->value == 'no')) {?>
                                 <?php $_smarty_tpl->_assignInScope('statusNew', 'Expired');?>
                                 <?php } elseif (($_smarty_tpl->tpl_vars['new_po']->value[0]->status == 'accept')) {?>
                                 <?php $_smarty_tpl->_assignInScope('statusNew', 'Released');?>
                                 <?php } else { ?>
                                 <?php $_smarty_tpl->_assignInScope('statusNew', $_smarty_tpl->tpl_vars['new_po']->value[0]->status);?>
                                 <?php }?>
                                 <label for="">Current Status <span class="text-danger">*</span> </label>
                                 <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['statusNew']->value;?>
" class="form-control">
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <label for="">Supplier Name <span class="text-danger">*</span> </label>
                                 <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value[0]->supplier_name;?>
" class="form-control">
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <label for="">Supplier Number <span class="text-danger">*</span> </label>
                                 <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value[0]->supplier_number;?>
" class="form-control">
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <label for="">Supplier GST <span class="text-danger">*</span> </label>
                                 <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value[0]->gst_number;?>
" class="form-control">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card-header">
                        <?php if (($_smarty_tpl->tpl_vars['new_po']->value[0]->expiry_po_date <= date('Y-m-d') || true)) {?>
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <form action="<?php echo base_url('add_po_parts');?>
" method="post">
                                    <label for="">Select Part Number // Description // Supplier // Rate //
                                    Tax Structure // Max Qty<span class="text-danger">*</span> </label>
                                    <select name="part_id" id="" required class="form-control select2">
                                       <?php if (($_smarty_tpl->tpl_vars['child_part']->value)) {?>
                                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_part']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                       <?php if (($_smarty_tpl->tpl_vars['c']->value->c != '')) {?>
                                       <?php if ((empty($_smarty_tpl->tpl_vars['new_po']->value[0]->process_id))) {?>
                                       <?php $_smarty_tpl->_assignInScope('type', 'normal');?>
                                       <?php } else { ?>
                                       <?php $_smarty_tpl->_assignInScope('type', 'Subcon grn');?>
                                       <?php }?>
                                       <?php if (($_smarty_tpl->tpl_vars['type']->value == "normal")) {?>
                                       <?php if (($_smarty_tpl->tpl_vars['c']->value->c2[0]->sub_type != "Subcon grn")) {?>
                                       <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->c2[0]->id;?>
">
                                          <?php echo $_smarty_tpl->tpl_vars['c']->value->c2[0]->part_number;?>
 // <?php echo $_smarty_tpl->tpl_vars['c']->value->c2[0]->part_description;?>
 // <?php echo $_smarty_tpl->tpl_vars['supplier']->value[0]->supplier_name;?>
// <?php echo $_smarty_tpl->tpl_vars['c']->value->c[0]->part_rate;?>
 // <?php echo $_smarty_tpl->tpl_vars['c']->value->gst_structure[0]->code;?>
//<?php echo $_smarty_tpl->tpl_vars['c']->value->c2[0]->max_uom;?>

                                       </option>
                                       <?php } else { ?>
                                       <?php if (($_smarty_tpl->tpl_vars['c']->value->c2[0]->sub_type == "Subcon grn" || $_smarty_tpl->tpl_vars['c']->value->c2[0]->sub_type == "Subcon Regular")) {?>
                                       <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->c2[0]->id;?>
">
                                          <?php echo $_smarty_tpl->tpl_vars['c']->value->c2[0]->part_number;?>
 //
                                          <?php echo $_smarty_tpl->tpl_vars['c']->value->c2[0]->part_description;?>
 //  <?php echo $_smarty_tpl->tpl_vars['supplier']->value[0]->supplier_name;?>
//<?php echo $_smarty_tpl->tpl_vars['c']->value->c[0]->part_rate;?>
 // 
                                       </option>
                                       <?php }?>
                                       <?php }?>
                                       <?php }?>
                                       <?php }?>
                                       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                       <?php }?>
                                    </select>
                              </div>
                           </div>
                           <?php if (($_smarty_tpl->tpl_vars['type']->value != "normal")) {?>
                           <div class="col-lg-2">
                           <div class="form-group">
                           <label for="">Select Process <span class="text-danger">*</span> </label>
                           <select name="process" id="" class="form-control select2">
                           <?php if (count($_smarty_tpl->tpl_vars['process']->value) > 0) {?>
                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['process']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                           <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value->name;?>
</option>
                           <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                           <?php }?>
                           </select>
                           </div>
                           </div>
                           <?php }?>
                           <div class="col-lg-2">
                           <div class="form-group">
                           <label for="">Enter Qty <span class="text-danger">*</span> </label>
                           <input type="number" step="any" name="qty" placeholder="Enter QTY " required class="form-control">
                           <input type="hidden" name="po_number" value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->po_number;?>
" required class="form-control">
                           <input type="hidden" name="po_id" value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->id;?>
" required class="form-control">
                           <input type="hidden" name="supplier_id" value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value[0]->id;?>
" placeholder=" " required class="form-control">
                           <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" placeholder="" required class="form-control">
                           </div>
                           </div>
                           <div class="col-lg-2">
                           <div class="form-group">
                           <?php if (($_smarty_tpl->tpl_vars['new_po']->value[0]->status == "pending")) {?>
                           <?php if (($_smarty_tpl->tpl_vars['expired']->value == "yes")) {?>
                           <button type="submit" class="btn btn-info btn mt-4">Add Child Part</button>
                           <?php } else { ?>
                           PO expired
                           <?php }?>
                           <?php }?>
                           </div>
                           </div>
                           </form>
                        </div>
                        <?php } else { ?>
                        Po  Expired!!
                        <?php }?>
                     </div>
                     <div class="card-header">
                        <?php if (($_smarty_tpl->tpl_vars['po_parts']->value)) {?>
                        <?php if ($_smarty_tpl->tpl_vars['new_po']->value[0]->status == "pending") {?>
                        <?php if (($_smarty_tpl->tpl_vars['session_data']->value['type'] == 'admin' || $_smarty_tpl->tpl_vars['session_data']->value['type'] == 'Admin')) {?>
                        <button type="button" class="btn btn-danger ml-1" data-toggle="modal" data-target="#lock">
                        Lock PO
                        </button>
                        <?php }?>
                        <?php }?>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['new_po']->value[0]->status == "lock")) {?>
                        <?php if (($_smarty_tpl->tpl_vars['session_data']->value['type'] == 'admin' || $_smarty_tpl->tpl_vars['session_data']->value['type'] == 'Admin')) {?>
                        <button type="button" class="btn btn-success ml-1" data-toggle="modal" data-target="#accept">
                        Accept (Released) PO
                        </button>
                        <!-- <button type="button" class="btn btn-danger ml-1" data-toggle="modal" data-target="#delete">
                           Reject (delete) PO
                           </button> -->
                        <?php }?>
                        <?php } else { ?>
                        <?php if (($_smarty_tpl->tpl_vars['new_po']->value[0]->status != "pending")) {?>
                        <button type="button" disabled class="btn btn-success ml-1" data-toggle="modal" data-target="#accept">
                        PO Already Released
                        </button>
                        <a href="<?php echo base_url('download_my_pdf/');
echo $_smarty_tpl->tpl_vars['new_po']->value[0]->id;?>
" class="btn btn-primary" href="">Download</a>
                        <?php }?>
                        <?php }?>
                        <!-- Modal -->
                        <div class="modal fade" id="accept" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                                 <div class="modal-body">
                                    <div class="row">
                                       <form action="<?php echo base_url('accept_po');?>
" method="POST">
                                          <div class="col-lg-12">
                                             <div class="form-group">
                                                <label for=""><b>Are You Sure Want To Released This
                                                PO?</b> </label>
                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->id;?>
" required class="form-control">
                                                <input type="hidden" name="status" value="accept" required class="form-control">
                                             </div>
                                          </div>
                                    </div>
                                 </div>
                                 <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <button type="submit" class="btn btn-primary">Update</button>
                                 </div>
                              </div>
                              </form>
                           </div>
                        </div>
                        <div class="modal fade" id="lock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                                 <div class="modal-body">
                                    <div class="row">
                                       <form action="<?php echo base_url('accept_po');?>
" method="POST">
                                          <div class="col-lg-12">
                                             <div class="form-group">
                                                <label for=""><b>Are You Sure Want To Lock This PO?</b>
                                                </label>
                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->id;?>
" required class="form-control">
                                                <input type="hidden" name="status" value="lock" required class="form-control">
                                             </div>
                                          </div>
                                    </div>
                                 </div>
                                 <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <button type="submit" class="btn btn-primary">Update</button>
                                 </div>
                              </div>
                              </form>
                           </div>
                        </div>
                        <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                                 <div class="modal-body">
                                    <div class="row">
                                       <form action="<?php echo base_url('delete_po');?>
" method="POST">
                                          <div class="col-lg-12">
                                             <div class="form-group">
                                                <label for=""><b>Are You Sure Want To Delete This
                                                PO?</b> </label>
                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->id;?>
" required class="form-control">
                                                <input type="hidden" name="status" value="reject" required class="form-control">
                                                <input type="hidden" name="table_name" value="new_po" required class="form-control">
                                             </div>
                                          </div>
                                    </div>
                                 </div>
                                 <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <button type="submit" class="btn btn-primary">Update</button>
                                 </div>
                              </div>
                              </form>
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
                                 <th>GST Strucutre Code</th>
                                 <th>UOM</th>
                                 <th>QTY</th>
                                 <?php if (($_smarty_tpl->tpl_vars['type']->value != "normal")) {?>
                                 <th>Process</th>
                                 <?php }?>
                                 <th>Price</th>
                                 <th>Created Date</th>
                                 <th>Actions</th>
                                 <th>Sub Total</th>
                                 <th>GST</th>
                                 <th>Total Price</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php if (($_smarty_tpl->tpl_vars['po_parts']->value)) {?>
                              <?php $_smarty_tpl->_assignInScope('final_po_amount', 0);?>
                              <?php $_smarty_tpl->_assignInScope('i', 1);?>
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['po_parts']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                                  <?php $_smarty_tpl->_assignInScope('child_part_data', $_smarty_tpl->tpl_vars['p']->value->child_part_data);?>
	                              <?php $_smarty_tpl->_assignInScope('part_rate_new', 0);?>
	                              <?php if ($_smarty_tpl->tpl_vars['p']->value->rate == '') {?>
	                              <?php $_smarty_tpl->_assignInScope('part_rate_new', $_smarty_tpl->tpl_vars['child_part_data']->value[0]->part_rate);?>
	                              <?php } else { ?>
	                              <?php $_smarty_tpl->_assignInScope('part_rate_new', $_smarty_tpl->tpl_vars['p']->value->rate);?>
	                              <?php }?>
	                              <?php $_smarty_tpl->_assignInScope('uom_data', $_smarty_tpl->tpl_vars['p']->value->uom_data);?>
	                              <?php $_smarty_tpl->_assignInScope('total_rate_old', $_smarty_tpl->tpl_vars['part_rate_new']->value*$_smarty_tpl->tpl_vars['p']->value->qty);?>
	                              <?php $_smarty_tpl->_assignInScope('gst_structure', $_smarty_tpl->tpl_vars['p']->value->gst_structure);?>
	                              <?php $_smarty_tpl->_assignInScope('cgst_amount', ($_smarty_tpl->tpl_vars['total_rate_old']->value*$_smarty_tpl->tpl_vars['gst_structure']->value[0]->cgst)/100);?>
	                              <?php $_smarty_tpl->_assignInScope('sgst_amount', ($_smarty_tpl->tpl_vars['total_rate_old']->value*$_smarty_tpl->tpl_vars['gst_structure']->value[0]->sgst)/100);?>
	                              <?php $_smarty_tpl->_assignInScope('igst_amount', ($_smarty_tpl->tpl_vars['total_rate_old']->value*$_smarty_tpl->tpl_vars['gst_structure']->value[0]->igst)/100);?>
	                              <?php $_smarty_tpl->_assignInScope('gst_amount', $_smarty_tpl->tpl_vars['cgst_amount']->value+$_smarty_tpl->tpl_vars['sgst_amount']->value+$_smarty_tpl->tpl_vars['igst_amount']->value);?>
	                              <?php $_smarty_tpl->_assignInScope('total_rate', $_smarty_tpl->tpl_vars['total_rate_old']->value+$_smarty_tpl->tpl_vars['cgst_amount']->value+$_smarty_tpl->tpl_vars['sgst_amount']->value+$_smarty_tpl->tpl_vars['igst_amount']->value);?>
	                              <?php $_smarty_tpl->_assignInScope('final_po_amount', $_smarty_tpl->tpl_vars['final_po_amount']->value+$_smarty_tpl->tpl_vars['total_rate']->value);?>
                              <tr>
                                 <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[0]->part_number;?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[0]->part_description;?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['gst_structure']->value[0]->code;?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['uom_data']->value[0]->uom_name;?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
</td>
                                 <?php if (($_smarty_tpl->tpl_vars['type']->value != "normal")) {?>
                                 <td><?php echo $_smarty_tpl->tpl_vars['p']->value->process;?>
</td>
                                 <?php }?>
                                 <td><?php echo $_smarty_tpl->tpl_vars['part_rate_new']->value;?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['p']->value->created_date;?>
</td>
                                 <td>
                                    <?php if (($_smarty_tpl->tpl_vars['new_po']->value[0]->status == "pending")) {?>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                    Edit
                                    </button>
                                    <button type="button" class="btn btn-danger ml-1" data-toggle="modal" data-target="#exampleModaldelete<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                    Delete
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                             </div>
                                             <div class="modal-body">
                                                <div class="row">
                                                   <form action="<?php echo base_url('update_po_parts');?>
" method="POST">
                                                      <div class="col-lg-12">
                                                         <div class="form-group">
                                                            <label for="">Enter Qty <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="number" name="qty" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
" placeholder="Enter QTY " required class="form-control">
                                                            <input type="hidden" name="part_number" value="<?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[0]->part_number;?>
" placeholder="Enter part_number " required class="form-control">
                                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" required class="form-control">
                                                         </div>
                                                      </div>
                                                </div>
                                             </div>
                                             <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                             <button type="submit" class="btn btn-primary">Update</button>
                                             </div>
                                          </div>
                                          </form>
                                       </div>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModaldelete<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                       <div class="modal-dialog">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                             </div>
                                             <div class="modal-body">
                                                <div class="row">
                                                   <form action="<?php echo base_url('delete');?>
" method="POST">
                                                      <div class="col-lg-12">
                                                         <div class="form-group">
                                                            <label for=""> <b>Are You Sure Want To
                                                            Delete This ? </b> </label>
                                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" required class="form-control">
                                                            <input type="hidden" name="table_name" value="po_parts" required class="form-control">
                                                         </div>
                                                      </div>
                                                </div>
                                             </div>
                                             <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                             <button type="submit" class="btn btn-primary">Update</button>
                                             </div>
                                          </div>
                                          </form>
                                       </div>
                                    </div>
                                    <?php } else { ?>
                                    <?php if (($_smarty_tpl->tpl_vars['session_data']->value['type'] == 'admin' || $_smarty_tpl->tpl_vars['session_data']->value['type'] == 'Admin')) {?>
                                    <?php if (($_smarty_tpl->tpl_vars['statusNew']->value)) {?>
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal123123123<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                    PO Amendment
                                    </button>
                                    <div class="modal fade" id="exampleModal123123123<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">PO
                                                   Amendment
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                             </div>
                                             <div class="modal-body">
                                                <div class="row">
                                                   <div class="col-lg-12">
                                                      <div class="form-group">
                                                         <form action="<?php echo base_url('update_po_parts_amendment');?>
" method="POST">
                                                            <label for="">Enter Qty <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="number" name="qty" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->new_po_qty;?>
" placeholder="Enter QTY " required class="form-control">
                                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" required class="form-control">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                             <button type="submit" class="btn btn-primary">Update</button>
                                             </div>
                                          </div>
                                          </form>
                                       </div>
                                    </div>
                                    <?php if (($_smarty_tpl->tpl_vars['p']->value->po_approved_updated == "pending")) {?>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalapproved<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                    Approve Amendment
                                    </button>
                                    <div class="modal fade" id="exampleModalapproved<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">PO
                                                   Amendment Approval 
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                             </div>
                                             <div class="modal-body">
                                                <div class="row">
                                                   <div class="col-lg-12">
                                                      <div class="form-group">
                                                         <form action="<?php echo base_url('update_po_parts_amendment_approve');?>
" method="POST">
                                                            <label for="">Are You Sure Want To
                                                            Approve this Amendment ? <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="number" name="qty" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->new_po_qty;?>
" placeholder="Enter QTY " required class="form-control">
                                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" required class="form-control">
                                                            <input type="hidden" name="new_po_id" value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->id;?>
" required class="form-control">
                                                      </div>
                                                      <div class="form-group">
                                                      <label for="">Enter PO Amendment Number
                                                      <span class="text-danger">*</span>
                                                      </label>
                                                      <input type="text" name="po_a_number" placeholder="Enter Po Amendment Number " required class="form-control">
                                                      </div>
                                                      <div class="form-group">
                                                      <label for="">Privious Qty <span class="text-danger">*</span>
                                                      </label>
                                                      <input type="number" name="qty" readonly value="<?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
" placeholder="Enter QTY " required class="form-control">
                                                      </div>
                                                      <div class="form-group">
                                                      <label for="">New Qty <span class="text-danger">*</span>
                                                      </label>
                                                      <input type="number" name="new_qty" readonly value="<?php echo $_smarty_tpl->tpl_vars['p']->value->new_po_qty;?>
" placeholder="Enter QTY " required class="form-control">
                                                      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" required class="form-control">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                             <button type="submit" class="btn btn-primary">Update</button>
                                             </div>
                                          </div>
                                          </form>
                                       </div>
                                    </div>
                                    <?php }?>
                                    <?php if (($_smarty_tpl->tpl_vars['p']->value->po_a_number != '')) {?>
                                    <br>
                                    Amendment No : <?php echo $_smarty_tpl->tpl_vars['p']->value->po_a_number;?>

                                    <br>
                                    Amendment Date  <?php echo $_smarty_tpl->tpl_vars['p']->value->date;?>

                                    <?php }?>
                                    <?php }?>
                                    <?php }?>
                                    <?php }?>
                                 </td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['total_rate_old']->value;?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['gst_amount']->value;?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['total_rate']->value;?>
</td>
                              </tr>
                              <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                              <?php }?>
                           </tbody>
                           <tfoot>
                              <?php if (($_smarty_tpl->tpl_vars['po_parts']->value)) {?>
                              <tr>
                                 <th colspan="11">Total</th>
                                 <th><?php echo $_smarty_tpl->tpl_vars['final_po_amount']->value;?>
</th>
                              </tr>
                              <?php }?>
                           </tfoot>
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
