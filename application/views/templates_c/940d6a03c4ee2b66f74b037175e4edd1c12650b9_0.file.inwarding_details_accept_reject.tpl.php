<?php
/* Smarty version 4.3.2, created on 2024-08-25 02:21:38
  from '/var/www/html/extra_work/erp_converted/application/views/templates/quality/inwarding_details_accept_reject.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66ca47da9c4d34_74665959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '940d6a03c4ee2b66f74b037175e4edd1c12650b9' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/quality/inwarding_details_accept_reject.tpl',
      1 => 1724532697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ca47da9c4d34_74665959 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-wrapper">
   <!-- Content -->
   <div class="container-xxl flex-grow-1 container-p-y">
      <nav aria-label="breadcrumb">
         <div class="sub-header-left pull-left breadcrumb">
            <h1>
               Quality
               <a hijacked="yes" href="javascript:void(0)" class="backlisting-link" title="Back to Issue Request Listing" >
               <i class="ti ti-chevrons-right" ></i>
               <em >Accept / Reject Validation</em></a>
            </h1>
            <br>
            <span >Accept / Reject Validation</span>
         </div>
      </nav>
      <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
         <a class="btn  btn-seconday"
            href="<?php echo base_url('accept_reject_validation');?>
">
         <i class="ti ti-arrow-left" title="Back"></i></a>
      </div>
      <!-- Main content -->
      <div class="card p-0 mt-4">
         <div class="card-header">
            <div class="row">
               <div class="tgdp-rgt-tp-sect">
                  <p class="tgdp-rgt-tp-ttl">GRN Number</p>
                  <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->grn_number;?>
</p>
               </div>
               <div class="tgdp-rgt-tp-sect">
                  <p class="tgdp-rgt-tp-ttl">PO Number</p>
                  <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->po_number;?>
</p>
               </div>
               <div class="tgdp-rgt-tp-sect">
                  <p class="tgdp-rgt-tp-ttl">PO Date</p>
                  <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->po_date;?>
</p>
               </div>
               <div class="tgdp-rgt-tp-sect">
                  <p class="tgdp-rgt-tp-ttl">PO Status</p>
                  <p class="tgdp-rgt-tp-txt"><?php if (($_smarty_tpl->tpl_vars['new_po']->value[0]->status == "accpet")) {?>Released
                     <?php } else {
echo $_smarty_tpl->tpl_vars['new_po']->value[0]->status;
}?>
                  </p>
               </div>
               <div class="tgdp-rgt-tp-sect">
                  <p class="tgdp-rgt-tp-ttl">Supplier Name</p>
                  <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['supplier']->value[0]->supplier_name;?>
</p>
               </div>
               <div class="tgdp-rgt-tp-sect">
                  <p class="tgdp-rgt-tp-ttl">Supplier No</p>
                  <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['supplier']->value[0]->supplier_number;?>
</p>
               </div>
               <div class="tgdp-rgt-tp-sect">
                  <p class="tgdp-rgt-tp-ttl">Supplier GST</p>
                  <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['supplier']->value[0]->gst_number;?>
</p>
               </div>
               <div class="tgdp-rgt-tp-sect">
                  <p class="tgdp-rgt-tp-ttl">Inwarding Status</p>
                  <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->status;?>
</p>
               </div>
               <?php if (($_smarty_tpl->tpl_vars['isMultiClient']->value == "true")) {?>
               <div class="tgdp-rgt-tp-sect">
                  <p class="tgdp-rgt-tp-ttl">Delivery Location</p>
                  <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->delivery_unit;?>
</p>
               </div>
               <?php }?>
               <div class="tgdp-rgt-tp-sect">
                  <p class="tgdp-rgt-tp-ttl">Invoice Amount</p>
                  <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->invoice_amount;?>
</p>
               </div>
               <div class="tgdp-rgt-tp-sect">
                  <p class="tgdp-rgt-tp-ttl">Software Calculated Amount</p>
                  <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['actual_price']->value;?>
</p>
               </div>
               <div class="tgdp-rgt-tp-sect">
                  <p class="tgdp-rgt-tp-ttl">Invoice Amount Validate Status<</p>
                  <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</p>
               </div>
               <div class="col-lg-12">
                  <div >
               <?php if (($_smarty_tpl->tpl_vars['inwarding_data']->value[0]->status == "accept")) {?>
               <button type="button" disabled class="btn btn-success mt-4" data-bs-toggle="modal"
                  data-bs-target="#exampleModalgenerate">
               Inwarding Already Accepted </button>
               <?php } elseif (($_smarty_tpl->tpl_vars['is_accept_inwarding']->value == 'Yes')) {?>
               <button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
               Accept Inwarding </button>
               <?php }?>
            </div>
               </div>
               <div class="col-lg-4">
                  <div class="form-group">
                     <!-- Modal -->
                     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered " role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Accept </h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                 </button>
                              </div>
                              <form
                                    action="<?php echo base_url('accept_inwarding_data');?>
"
                                    method="POST" id="accept_inwarding_data">
                              <div class="modal-body">
                                 
                                    <div class="row">
                                       <div class="form-group">
                                          <label> Are You Sure Want To Accept This
                                          Inwarding ?</label><span
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
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary"
                                          data-bs-dismiss="modal">Close</button>
                                       <button type="submit" class="btn btn-primary">Save
                                       Changes</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal fade" id="exampleModalmatch" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg " role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Match Price
                                 </h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close">
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
                                             <input type="number" step="any" name="invoice_amount"
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
                                          data-bs-dismiss="modal">Close</button>
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
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Change Status
                                 </h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close">
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
                                          data-bs-dismiss="modal">Close</button>
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
      </div>
      <div class="card p-0 mt-4 table-container">
         <div class="table-responsive text-nowrap ">
            <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped scrollable" style="border-collapse: collapse;" border-color="#e1e1e1" id="inwarding_details_accept_reject">
               <thead>
                  <tr>
                     <!--<th>Sr No</th>-->
                     <th style="width: 9%;">Part Number</th>
                     <th style="width: 9%;">Part Description</th>
                     <!-- <th>Tax Strucutre Code</th> -->
                     <th style="width: 6%;">UOM</th>
                     <!-- <th>Delivery Date</th> -->
                     <!-- <th>Expiry Date</th> -->
                     <!-- <th>PO QTY</th> -->
                     <!-- <th>Balance QTY</th> -->
                     <th style="width: 6%;">Price</th>
                     <th style="width: 6%;">Inwarding Qty</th>
                     <th style="width: 8%;">GRN Validation Qty</th>
                     <th style="width: 6%;">Accept Qty</th>
                     <th style="width: 6%;">Reject Qty</th>
                     <th style="width: 6%;">Remark</th>
                     <th style="width: 6%;">Submit </th>
                     <th style="width: 6%;">GRN Rejection</th>
                     <th style="width: 6%;">RM Batch No</th>
                     <th style="width: 6%;" class='text-center'>Supplier Report</th>
                     <!-- MTC Report -->
                     <th style="width: 8%;" class='text-center'>Incoming Inspection Report </th>
                     <th style="width: 6%;">Action</th>
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
                  <?php $_smarty_tpl->_assignInScope('part_rate_new', 0);?>
                  <?php if ((empty($_smarty_tpl->tpl_vars['p']->value->rate))) {?>
                  <?php $_smarty_tpl->_assignInScope('part_rate_new', $_smarty_tpl->tpl_vars['p']->value->child_part_data->part_rate);?>
                  <?php } else { ?>
                  <?php $_smarty_tpl->_assignInScope('part_rate_new', $_smarty_tpl->tpl_vars['p']->value->rate);?>
                  <?php }?>
                  <?php $_smarty_tpl->_assignInScope('total_rate', $_smarty_tpl->tpl_vars['part_rate_new']->value*$_smarty_tpl->tpl_vars['p']->value->qty);?>
                  <?php $_smarty_tpl->_assignInScope('final_po_amount', $_smarty_tpl->tpl_vars['final_po_amount']->value+$_smarty_tpl->tpl_vars['total_rate']->value);?>
                  <?php if (($_smarty_tpl->tpl_vars['p']->value->grn_details_id > 0)) {?>
                  <?php if (($_smarty_tpl->tpl_vars['p']->value->grn_details_id > 0)) {?>
                  <?php $_smarty_tpl->_assignInScope('data_present', "yes");?>
                  <?php } else { ?>
                  <?php $_smarty_tpl->_assignInScope('data_present', "no");?>
                  <?php }?>

                  <tr>
                     <!--<td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>-->
                     <td style="width: 9%;"><?php echo $_smarty_tpl->tpl_vars['p']->value->child_part_data->part_number;?>
</td>
                     <td style="width: 9%;"><?php echo $_smarty_tpl->tpl_vars['p']->value->child_part_data->part_description;?>
</td>
                     <td style="width: 6%;"><?php echo $_smarty_tpl->tpl_vars['p']->value->uom_name;?>
</td>
                     <td style="width: 6%;"><?php echo $_smarty_tpl->tpl_vars['part_rate_new']->value;?>
</td>
                     <td style="width: 8%;"><?php echo $_smarty_tpl->tpl_vars['p']->value->grn_qty;?>
</td>
                     <td style="width: 6%;"><?php echo $_smarty_tpl->tpl_vars['p']->value->verified_qty;?>
</td>
                     <?php if ((empty($_smarty_tpl->tpl_vars['p']->value->accept_qty))) {?>

                     <td style="width: 6%;">
                        <form action="<?php echo base_url('update_grn_qty_accept_reject');?>
"
                           method="post" class="update_grn_qty_accept_reject update_grn_qty_accept_reject<?php echo $_smarty_tpl->tpl_vars['p']->value->part_id;?>
 custom-form" id="update_grn_qty_accept_reject<?php echo $_smarty_tpl->tpl_vars['p']->value->part_id;?>
">
                           <div class="form-group">
                            <label class="form-label" style="display: none;">Accept Qty</label>
                           <input type="text"  min="0" value="" id="searchTxt"
                              step="any"  max="<?php echo $_smarty_tpl->tpl_vars['p']->value->verified_qty;?>
"
                              placeholder="Accept Qty" name="accept_qty" class="form-control onlyNumericInput required-input">
                           <input type="hidden"
                              value="<?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
"
                              placeholder="GRN Validation Qty4" name="privious_qty"
                              class="form-control">
                           <input type="hidden" name="grn_details_id"
                              value="<?php echo $_smarty_tpl->tpl_vars['p']->value->grn_details_id;?>
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
                              name="verified_qty"
                              value="<?php echo $_smarty_tpl->tpl_vars['p']->value->verified_qty;?>
"
                              class="form-control">
                           <input type="hidden" placeholder="Inwarding Qty"
                              name="part_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->part_id;?>
"
                              class="form-control">
                           <input type="hidden" name="invoice_number"
                              value="<?php echo $_smarty_tpl->tpl_vars['invoice_number']->value;?>
" class="form-control">
                           <input type="hidden" name="deliveryUnit"
                              value="<?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->delivery_unit;?>
" class="form-control">
                              </div>
                           <?php } else { ?>
                     <td style="width: 6%;">
                     <?php echo $_smarty_tpl->tpl_vars['p']->value->accept_qty;?>

                     <?php }?>
                     </td>
                     <td style="width: 6%;">
                     <?php if ((empty($_smarty_tpl->tpl_vars['p']->value->reject_qty))) {?>
                     <?php echo $_smarty_tpl->tpl_vars['p']->value->reject_qty;?>

                     <?php } else { ?>
                     <?php echo $_smarty_tpl->tpl_vars['p']->value->reject_qty;?>

                     <?php }?>
                     </td>
                     <td style="width: 6%;">
                     <?php if ((empty($_smarty_tpl->tpl_vars['p']->value->accept_qty))) {?>
                     <input type="text" name="remark" placeholder="Remark"
                        class="form-control">
                     <?php } else { ?>
                     <?php echo display_no_character();?>

                     <?php echo $_smarty_tpl->tpl_vars['p']->value->remark;?>

                     <?php }?>
                     </td>
                     <td style="width: 6%;">
                     <?php if ((empty($_smarty_tpl->tpl_vars['p']->value->accept_qty))) {?>
                     <button type="submit" class="btn btn-info">Submit</button>
                     </form>
                     <?php }?>
                     </td>
                     <td style="width: 6%;">
                        <?php if (($_smarty_tpl->tpl_vars['p']->value->rejection_flow_data)) {?>
                        <a class=""
                           href="<?php echo base_url('create_debit_note/');
echo $_smarty_tpl->tpl_vars['p']->value->rejection_flow_data->id;?>
" title="Download
                        Debit Note">
                      <i class="ti ti-book-download"></i></a>
                        
                        <a class=""
                           href="<?php echo base_url('documents/');
echo $_smarty_tpl->tpl_vars['p']->value->rejection_flow_data->debit_note;?>
" title="Download Document"
                           download><i class="ti ti-file-download"></i> </a>
                        <?php } else { ?>
                        <?php if (($_smarty_tpl->tpl_vars['p']->value)) {?>
                        <?php if (($_smarty_tpl->tpl_vars['p']->value->reject_qty != 0)) {?>
                        <a type="button" class=" float-left"
                           data-bs-toggle="modal" data-bs-target="#exampleModal123<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" title="Add Rejection Debit Note">
                        
                        <i class="ti ti-clipboard-plus"></i>
                        </a>
                        <?php }?>
                        <?php }?>
                        <?php }?>
                        <div class="modal fade" id="exampleModal123<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
                           tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                           aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                       aria-label="Close">
                                    </button>
                                 </div>
                                  <form
                                       action="<?php echo base_url('add_rejection_flow');?>
"
                                       method="POST" enctype='multipart/form-data' class="add_rejection_flow add_rejection_flow<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 custom-form" id="add_rejection_flow<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                 <div class="modal-body">
                                   
                                       <div class="row">
                                          <div class="col-lg-12">
                                             <div class="form-group">
                                                <label for="po_num">Selected Part Number
                                                / Description / Stock </label><span
                                                   class="text-danger">*</span>
                                                <input type="text" class="form-control required-input"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['p']->value->child_part_data->part_number;?>
"
                                                   name="" readonly >
                                                <input type="hidden"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['p']->value->part_id;?>
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
                                                    placeholder="Reason"
                                                   class="form-control required-input">
                                                <input type="hidden" name="type"
                                                   value="grn_rejection" required
                                                   placeholder="Reason"
                                                   class="form-control">
                                             </div>
                                             <div class="form-group">
                                                <label for="po_num">Upload Rejection
                                                Document <span
                                                   class="text-danger">*</span></label>
                                                <input type="file"
                                                   name="uploading_document" 
                                                   class="form-control required-input" >
                                             </div>
                                             <div class="form-group">
                                                <label for="po_num">Rejection Qty <span
                                                   class="text-danger">*</span></label>
                                                <input type="number" readonly name="qty"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['p']->value->reject_qty;?>
"
                                                   step="any" placeholder="Qty"
                                                   name="qty" required
                                                   class="form-control">
                                                <input type="hidden" name="po_number"
                                                   readonly
                                                   value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->id;?>
"
                                                   class="form-control">
                                             </div>
                                             <div class="form-group">
                                                <label for="po_num">Remark
                                                </label>
                                                <input type="text" name="remark"
                                                    placeholder="Remark"
                                                   class="form-control ">
                                             </div>
                                          </div>
                                       </div>
                                 </div>
                                 <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                 <button type="submit" class="btn btn-primary">Save
                                 Changes</button>
                                 </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </td>
                     <td style="width: 6%;"><?php echo $_smarty_tpl->tpl_vars['p']->value->rm_batch_no;?>
</td>
                     <!-- Supplier/MTC Report -->
                     <td style="width: 8%;" class='text-center'>

                        <?php if (($_smarty_tpl->tpl_vars['p']->value->mtc_report != '')) {?>
                        <a download href="<?php echo base_url('documents/mtc/');
echo $_smarty_tpl->tpl_vars['p']->value->mtc_report;?>
" id="" class=" remove_hoverr "><i class="ti ti-download"></i></a>
                        <?php } else { ?>
                           <?php echo display_no_character();?>

                        <?php }?>
                     </td>
                     <td class='text-center' style="width: 6%;" class='text-center'>
                        <a class="" title="Raw Material Inspection"
                           href="<?php echo base_url('raw_material_inspection_inwarding/');
echo $_smarty_tpl->tpl_vars['p']->value->child_part_data->id;?>
/<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->id;?>
/<?php echo $_smarty_tpl->tpl_vars['supplier']->value[0]->id;?>
/<?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->id;?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value->accept_qty;?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value->reject_qty;?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value->part_id;?>
">
                        <i class="ti ti-file-analytics"></i>
                        </a>
                     </td>
                     <td style="width: 6%;">
                        <button type="button" class='text-center no-btn' data-bs-toggle="modal"
                           data-bs-target="#editRM<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                        <i class="ti ti-edit"></i>
                        </button>
                        <div class="modal fade" id="editRM<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1"
                           role="dialog" aria-labelledby="exampleModalLabel"
                           aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                       aria-label="Close">
                                    </button>
                                 </div>
                                 <div class="modal-body">
                                    <form
                                       action="<?php echo base_url('update_rm_batch_mtc_report');?>
"
                                       method="POST" class="update_rm_batch_mtc_report custom-form update_rm_batch_mtc_report<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" enctype="multipart/form-data" id="update_rm_batch_mtc_report<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                       <div class="form-group">
                                          <label for="">RM Batch No<span
                                             class="text-danger">*</span></label>
                                          <input  value="<?php echo $_smarty_tpl->tpl_vars['p']->value->rm_batch_no;?>
"
                                             type="text" class="form-control required-input"
                                             name="rm_batch_no">
                                          <input type="hidden" name="grn_details_id"
                                             value="<?php echo $_smarty_tpl->tpl_vars['p']->value->grn_details_id;?>
"
                                             class="form-control ">
                                       </div>
                                       <div class="form-group">
                                          <label for="mtcReportFile">MTC Report<span
                                             class="text-danger">*</span></label>
                                          <input  type="file" name="mtc_report" class="form-control required-input" id="mtcReportFile" aria-describedby="mtcReportFileHelp" placeholder="Select File">
                                       </div>
                                 </div>
                                 <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                 <button type="submit" class="btn btn-primary">Save
                                 Changes</button>
                                 </form>
                                 </div>
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
            </table>
            
         </div>
      </div>
      <!--/ Responsive Table -->
   </div>
   <!-- /.col -->
   <div class="content-backdrop fade"></div>
</div>
</div>
<style type="text/css">



</style>
<?php echo '<script'; ?>
 type="text/javascript">
   var base_url = <?php echo json_encode($_smarty_tpl->tpl_vars['base_url']->value);?>

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/quality/inwarding_details_accept_reject.js"><?php echo '</script'; ?>
><?php }
}
