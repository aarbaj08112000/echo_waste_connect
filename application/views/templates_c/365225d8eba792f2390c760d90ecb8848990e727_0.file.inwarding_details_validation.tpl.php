<?php
/* Smarty version 4.3.2, created on 2024-06-11 13:07:17
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/inwarding_details_validation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6667feadd72b24_29317723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '365225d8eba792f2390c760d90ecb8848990e727' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/inwarding_details_validation.tpl',
      1 => 1718091437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6667feadd72b24_29317723 (Smarty_Internal_Template $_smarty_tpl) {
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
            <h1>Validation Details </h1>
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
                     <div class="col-lg-1">
                        <div class="form-group">
                           <a class="btn btn-dark" href="<?php echo base_url('grn_validation');?>
">
                           < Back</a>
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="form-group">
                           <label for="">GRN Number <span class="text-danger">*</span> </label>
                           <input type="text" readonly
                              value="<?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->grn_number;?>
"
                              class="form-control">
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
                     <div class="col-lg-1">
                        <div class="form-group">
                           <label for="">PO Date</label>
                           <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->po_date;?>
"
                              class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-1">
                        <div class="form-group">
                           <label for="">PO Status</label>
                           <input type="text" readonly value="<?php if (($_smarty_tpl->tpl_vars['new_po']->value[0]->status == 'accpet')) {?>Released <?php } else {
echo $_smarty_tpl->tpl_vars['new_po']->value[0]->status;
}?>" class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="form-group">
                           <label for="">Supplier Name</label>
                           <input type="text" readonly
                              value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value[0]->supplier_name;?>
" class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-1">
                        <div class="form-group">
                           <label for="">Supplier No</label>
                           <input type="text" readonly
                              value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value[0]->supplier_number;?>
"
                              class="form-control">
                        </div>
                     </div>
                     <div>
                        <div class="row">
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
                           <?php if (($_smarty_tpl->tpl_vars['isMultiClient']->value == "true")) {?>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <label for="">Delivery Location</label>
                                 <input type="text" readonly
                                    value="<?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->delivery_unit;?>
"
                                    class="form-control">
                              </div>
                           </div>
                           <?php }?>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <label for="">Invoice Amount</label>
                                 <input type="text" readonly
                                    value="<?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->invoice_amount;?>
"
                                    class="form-control">
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="">Invoice Amount Validation Status <span
                                    class="text-danger">*</span> </label>
                                 <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
"
                                    class="form-control">
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg " role="document">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Accept This
                                                Inwarding 
                                             </h5>
                                             <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                             </button>
                                          </div>
                                          <div class="modal-body">
                                             <form
                                                action="<?php echo base_url('accept_inwarding_data');?>
"
                                                method="POST">
                                                <div class="row">
                                                   <div class="col-lg-12">
                                                      <div class="form-group">
                                                         <label> Are You Sure Want To Accept This
                                                         Inwarding ? This Data can't be changed
                                                         once it's Submit</label><span
                                                            class="text-danger">*</span>
                                                         <input type="hidden" name="inwarding_id"
                                                            value="<?php echo $_smarty_tpl->tpl_vars['inwarding_id']->value;?>
"
                                                            class="form-control">
                                                         <input type="hidden" name="invoice_number"
                                                            value="<?php echo $_smarty_tpl->tpl_vars['invoice_number']->value;?>
"
                                                            class="form-control">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="modal-footer">
                                                   <button type="button" class="btn btn-secondary"
                                                      data-dismiss="modal">Close</button>
                                                   <button type="submit" class="btn btn-primary">Save
                                                   changes</button>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="modal fade" id="exampleModalmatch" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg " role="document">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Match Price
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
                                                         <input type="number" name="invoice_amount"
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
                                                   changes</button>
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
                                             <h5 class="modal-title" id="exampleModalLabel">Validate GRN
                                             </h5>
                                             <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                             </button>
                                          </div>
                                          <div class="modal-body">
                                             <form
                                                action="<?php echo base_url('update_status_grn_inwarding');?>
"
                                                method="POST">
                                                <div class="row">
                                                   <div class="col-lg-12">
                                                      <div class="form-group">
                                                         <label> Are You Sure Want To Validate GRN ?
                                                         </label>
                                                         <input type="hidden" name="status"
                                                            placeholder="" value="validate_grn"
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
                                                   changes</button>
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
                                 <!-- <th>Tax Strucutre Code</th> -->
                                 <th>UOM</th>
                                 <!-- <th>Delivery Date</th> -->
                                 <!-- <th>Expiry Date</th> -->
                                 <th>PO QTY</th>
                                 <th>Balance QTY</th>
                                 <th>Price</th>
                                 <th>Inwarding Qty</th>
                                 <th>GRN Validation Qty</th>
                                 <th>Submit </th>
                                 <th>MDR</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php $_smarty_tpl->_assignInScope('i', 1);?>
                              <?php $_smarty_tpl->_assignInScope('j', 1);?>
                              <?php if (($_smarty_tpl->tpl_vars['po_parts']->value)) {?>
                              <?php $_smarty_tpl->_assignInScope('final_po_amount', 0);?>
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['po_parts']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                              <?php $_smarty_tpl->_assignInScope('child_part', $_smarty_tpl->tpl_vars['p']->value->child_part);?>
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
                              <?php $_smarty_tpl->_assignInScope('rejection_flow_data', $_smarty_tpl->tpl_vars['p']->value->rejection_flow_data);?>
                              <?php if (($_smarty_tpl->tpl_vars['grn_details_data']->value)) {?>
                              <?php if (($_smarty_tpl->tpl_vars['grn_details_data']->value)) {?>
                              <?php $_smarty_tpl->_assignInScope('data_present', 'yes');?>
                              <?php } else { ?>
                              <?php $_smarty_tpl->_assignInScope('data_present', 'no');?>
                              <?php }?>
                              <tr>
                                 <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['child_part']->value[0]->part_number;?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['child_part']->value[0]->part_description;?>
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
                                    <form action="<?php echo base_url('add_grn_qty');?>
" method="post">
                                       <input type="number" max="<?php echo $_smarty_tpl->tpl_vars['p']->value->pending_qty;?>
"
                                          placeholder="Inwarding Qty2" name="qty" step="any"
                                          class="form-control">
                                       <input type="hidden" name="inwarding_id"
                                          value="<?php echo $_smarty_tpl->tpl_vars['inwarding_id']->value;?>
" class="form-control">
                                       <input type="text" placeholder="Inwarding Qty"
                                          name="new_po_id" value="<?php echo $_smarty_tpl->tpl_vars['new_po_id']->value;?>
"
                                          class="form-control">
                                       <input type="hidden" placeholder="Inwarding Qty"
                                          name="part_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->part_id;?>
"
                                          class="form-control">
                                       <input type="hidden" placeholder="Inwarding Qty"
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
                                          name="part_rate" value="<?php echo $_smarty_tpl->tpl_vars['part_rate_new']->value;?>
"
                                          class="form-control">
                                       <input type="hidden" placeholder="Inwarding Qty" name="tax_id"
                                          value="<?php echo $_smarty_tpl->tpl_vars['p']->value->tax_id;?>
" class="form-control">
                                       <input type="hidden" placeholder="Inwarding Qty"
                                          name="loading_unloading"
                                          value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->loading_unloading;?>
"
                                          class="form-control">
                                       <input type="hidden" placeholder="Inwarding Qty"
                                          name="loading_unloading_gst"
                                          value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->loading_unloading_gst;?>
"
                                          class="form-control">
                                       <input type="hidden" placeholder="Inwarding Qty"
                                          name="freight_amount"
                                          value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->freight_amount;?>
"
                                          class="form-control">
                                       <input type="hidden" placeholder="Inwarding Qty"
                                          name="freight_amount_gst"
                                          value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->freight_amount_gst;?>
"
                                          class="form-control">
                                       <?php }?>
                                 </td>
                                 <td>
                                 <?php if ((empty($_smarty_tpl->tpl_vars['grn_details_data']->value[0]->verified_qty))) {?>
                                 <form action="<?php echo base_url('update_grn_qty');?>
" method="post">
                                 <input style="width: 200px ;" type="number"
                                    max="<?php echo $_smarty_tpl->tpl_vars['grn_details_data']->value[0]->qty;?>
"
                                    step="any" placeholder="Qty" name="verified_qty"
                                    class="form-control input-group-sm">
                                 <input type="hidden"
                                    value="<?php echo $_smarty_tpl->tpl_vars['grn_details_data']->value[0]->qty;?>
"
                                    placeholder="GRN Validation Qty" name="privious_qty"
                                    class="form-control">
                                 <input type="hidden" name="grn_details_id"
                                    value="<?php echo $_smarty_tpl->tpl_vars['grn_details_data']->value[0]->id;?>
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
                                 <?php echo $_smarty_tpl->tpl_vars['grn_details_data']->value[0]->verified_qty;?>

                                 <?php }?>
                                 </td>
                                 <td>
                                 <?php $_smarty_tpl->_assignInScope('diff', (float)$_smarty_tpl->tpl_vars['grn_details_data']->value[0]->qty-(float)$_smarty_tpl->tpl_vars['grn_details_data']->value[0]->verified_qty);?>
                                 <?php if ((empty($_smarty_tpl->tpl_vars['grn_details_data']->value[0]->verified_qty) || $_smarty_tpl->tpl_vars['grn_details_data']->value[0]->verified_qty == 0)) {?>
                                 <button type="submit" class="btn btn-info">Submit</button>
                                 </form>
                                 <?php } elseif (($_smarty_tpl->tpl_vars['diff']->value > 0)) {?>
                                 <?php if (($_smarty_tpl->tpl_vars['rejection_flow_data']->value)) {?>
                                 <?php $_smarty_tpl->_assignInScope('j', $_smarty_tpl->tpl_vars['j']->value+1);?>
                                 <?php }?>
                                 <?php } else { ?>
                                 <?php $_smarty_tpl->_assignInScope('j', $_smarty_tpl->tpl_vars['j']->value+1);?>
                                 <?php }?>
                                 </td>
                                 <td>
                                    <?php if (($_smarty_tpl->tpl_vars['rejection_flow_data']->value)) {?>
                                    <a class="btn btn-success"
                                       href="<?php echo base_url('create_debit_note/');
echo $_smarty_tpl->tpl_vars['rejection_flow_data']->value[0]->id;?>
">Download
                                    Debit Note</a>
                                    <br>
                                    <br>
                                    <a class="btn btn-danger"
                                       href="<?php echo base_url('documents/');
echo $_smarty_tpl->tpl_vars['rejection_flow_data']->value[0]->debit_note;?>
"
                                       download>Download Uploaded Ack </a>
                                    <?php } else { ?>
                                    <?php if (($_smarty_tpl->tpl_vars['grn_details_data']->value)) {?>
                                    <?php if (($_smarty_tpl->tpl_vars['grn_details_data']->value[0]->qty != $_smarty_tpl->tpl_vars['grn_details_data']->value[0]->verified_qty)) {?>
                                    <button type="button" class="btn btn-warning float-left"
                                       data-toggle="modal" data-target="#exampleModal123<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                    Add MDR
                                    </button>
                                    <?php } else { ?>
                                    Qty Matched
                                    <?php }?>
                                    <?php }?>
                                    <?php }?>
                                    <div class="modal fade" id="exampleModal123<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
                                       tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                       aria-hidden="true">
                                       <div class="modal-dialog modal-lg" role="document">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                   aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                             </div>
                                             <div class="modal-body">
                                                <form
                                                   action="<?php echo base_url('add_rejection_flow');?>
"
                                                   method="POST" enctype='multipart/form-data'>
                                                   <div class="row">
                                                      <div class="col-lg-12">
                                                         <div class="form-group">
                                                            <label for="po_num">Selected Part Number
                                                            / Description / Stock </label><span
                                                               class="text-danger">*</span>
                                                            <input type="text" class="form-control"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[0]->part_number;?>
"
                                                               name="" readonly required="required"
                                                               id="">
                                                            <input type="hidden"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['child_part']->value[0]->id;?>
"
                                                               name="part_id" readonly
                                                               required="required" id="">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="po_num">Selected
                                                            Supplier</label><span
                                                               class="text-danger">*</span>
                                                            <input type="text" readonly
                                                               value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value[0]->supplier_name;?>
"
                                                               class="form-control">
                                                            <input type="hidden" readonly
                                                               value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value[0]->id;?>
"
                                                               name="supplier_id"
                                                               class="form-control">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="po_num">Reason <span
                                                               class="text-danger">*</span></label>
                                                            <input type="text" name="reason"
                                                               required placeholder="Reason"
                                                               class="form-control">
                                                            <input type="hidden" name="type"
                                                               value="MDR" required
                                                               placeholder="Reason"
                                                               class="form-control">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="po_num">Upload MDR TPT ACK
                                                            <span
                                                               class="text-danger">*</span></label>
                                                            <input type="file"
                                                               name="uploading_document" required
                                                               class="form-control">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="po_num">MDR Qty <span
                                                               class="text-danger">*</span></label>
                                                            <input type="number" readonly name="qty"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['grn_details_data']->value[0]->qty-$_smarty_tpl->tpl_vars['grn_details_data']->value[0]->verified_qty;?>
"
                                                               step="any" placeholder="Qty"
                                                               name="qty" required
                                                               class="form-control">
                                                            <input type="hidden" name="po_number"
                                                               readonly
                                                               value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->po_number;?>
"
                                                               class="form-control">
                                                            <input type="hidden"
                                                               placeholder="Inwarding Qty"
                                                               name="grn_number"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->grn_number;?>
"
                                                               class="form-control">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="po_num">Remark
                                                            </label>
                                                            <input type="text" name="remark"
                                                               required placeholder="Remark"
                                                               class="form-control">
                                                         </div>
                                                      </div>
                                                   </div>
                                             </div>
                                             <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                             <button type="submit" class="btn btn-primary">Save
                                             changes</button>
                                             </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                              <?php }?>
                              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                              <?php }?>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <td colspan="10"></td>
                                 <td>
                                    <?php if (($_smarty_tpl->tpl_vars['inwarding_data']->value[0]->status == "validate_grn")) {?>
                                    <button type="button" disabled class="btn btn-primary mt-4"
                                       data-toggle="modal">
                                    GRN Already Validated</button>
                                    <?php } else { ?>
                                    <?php if (($_smarty_tpl->tpl_vars['j']->value === $_smarty_tpl->tpl_vars['i']->value)) {?>
                                    <button type="button" class="btn btn-primary mt-4" data-toggle="modal"
                                       data-target="#exampleModalgenerate">
                                    Validate GRN </button>
                                    <?php }?>
                                    <?php }?>
                                 </td>
                              </tr>
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
