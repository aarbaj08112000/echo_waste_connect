<?php
/* Smarty version 4.3.2, created on 2024-08-21 19:18:07
  from '/var/www/html/extra_work/erp_converted/application/views/templates/quality/inwarding_details_accept_reject.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c5f017a54e71_93364613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '940d6a03c4ee2b66f74b037175e4edd1c12650b9' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/quality/inwarding_details_accept_reject.tpl',
      1 => 1724142425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c5f017a54e71_93364613 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-wrapper">
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

        <a class="btn btn-primary"
        href="<?php echo base_url('accept_reject_validation');?>
">
        <i class="ti ti-arrow-left" title="Back"></i></a>
      </div>


      <!-- Main content -->
      <div class="card p-0 mt-4">

        <div class="details p-3">
          <div class="row">

            <div class="col-lg-2">
              <div class="form-group">
                <label for="">GRN Number</label>
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
                <input type="text" readonly value="<?php if (($_smarty_tpl->tpl_vars['new_po']->value[0]->status == "accpet")) {?>Released
                <?php } else {
echo $_smarty_tpl->tpl_vars['new_po']->value[0]->status;
}?>" class="form-control">
              </div>
            </div>
            <div class="col-lg-2">
              <div class="form-group">
                <label for="">Supplier Name  </label>
                <input type="text" readonly
                value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value[0]->supplier_name;?>
" class="form-control">
              </div>
            </div>
            <div class="col-lg-2">
              <div class="form-group">
                <label for="">Supplier No</label>
                <input type="text" readonly
                value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value[0]->supplier_number;?>
"
                class="form-control">
              </div>
            </div>
            <div class="col-lg-2">
              <div class="form-group">
                <label for="">Supplier GST </label>
                <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value[0]->gst_number;?>
"
                class="form-control">
              </div>
            </div>
            <!-- </div>
            <div class="row"> -->
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
                <label for="">Invoice Amount  </label>
                <input type="text" readonly
                value="<?php echo $_smarty_tpl->tpl_vars['inwarding_data']->value[0]->invoice_amount;?>
"
                class="form-control">
              </div>
            </div>
            <div class="col-lg-2">
              <div class="form-group">
                <label for="">Software Calculated Amount
                </label>
                <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['actual_price']->value;?>
"
                class="form-control">
              </div>
            </div>
            <div class="col-lg-2">
              <div class="form-group">
                <label for="">Invoice Amount Validate Status</label>
                <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
"
                class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Accept </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                      aria-label="Close">

                    </button>
                  </div>
                  <div class="modal-body">
                    <form
                    action="<?php echo base_url('accept_inwarding_data');?>
"
                    method="POST">
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





<div class="table-responsive text-nowrap">
  <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped" style="border-collapse: collapse;" border-color="#e1e1e1" id="inwarding_details_accept_reject">
    <thead>
      <tr>
        <th>Sr No</th>
        <th>Part Number</th>
        <th>Part Description</th>
        <!-- <th>Tax Strucutre Code</th> -->
        <th>UOM</th>
        <!-- <th>Delivery Date</th> -->
        <!-- <th>Expiry Date</th> -->
        <!-- <th>PO QTY</th> -->
        <!-- <th>Balance QTY</th> -->
        <th>Price</th>
        <th>Inwarding Qty</th>
        <th>GRN Validation Qty</th>
        <th>Accept Qty.</th>
        <th>Reject Qty</th>
        <th>Remark</th>
        <th>Submit </th>
        <th>GRN Rejection</th>
        <th>RM Batch No</th>
        <th>Supplier Report</th>
        <!-- MTC Report -->
        <th>Incoming Inspection Report </th>
        <th>Action</th>
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
        <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['p']->value->child_part_data->part_number;?>
</td>
        <td class="col-lg-2"><?php echo $_smarty_tpl->tpl_vars['p']->value->child_part_data->part_description;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['p']->value->uom_name;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['part_rate_new']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['p']->value->grn_qty;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['p']->value->verified_qty;?>
</td>
        <?php if ((empty($_smarty_tpl->tpl_vars['p']->value->accept_qty))) {?>
        <td class="col-lg-2">
          <form action="<?php echo base_url('update_grn_qty_accept_reject');?>
"
            method="post">
            <input type="number" required min="0" value="" id="searchTxt"
            step="any" required max="<?php echo $_smarty_tpl->tpl_vars['p']->value->verified_qty;?>
"
            placeholder="Accept Qty" name="accept_qty" class="form-control">
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
            <?php } else { ?>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['p']->value->accept_qty;?>

              <?php }?>
            </td>
            <td>
              <?php if ((empty($_smarty_tpl->tpl_vars['p']->value->reject_qty))) {?>
              <?php echo $_smarty_tpl->tpl_vars['p']->value->reject_qty;?>

              <?php } else { ?>
              <?php echo $_smarty_tpl->tpl_vars['p']->value->reject_qty;?>

              <?php }?>
            </td>
            <td class="col-lg-1">
              <?php if ((empty($_smarty_tpl->tpl_vars['p']->value->accept_qty))) {?>
              <input type="text" name="remark" placeholder="Remark"
              class="form-control">
              <?php } else { ?>
              <?php echo $_smarty_tpl->tpl_vars['p']->value->remark;?>

              <?php }?>
            </td>
            <td>
              <?php if ((empty($_smarty_tpl->tpl_vars['p']->value->accept_qty))) {?>
              <button type="submit" class="btn btn-info">Submit</button>
            </form>
            <?php }?>
          </td>
          <td>
            <?php if (($_smarty_tpl->tpl_vars['p']->value->rejection_flow_data)) {?>
            <a class="btn btn-success"
            href="<?php echo base_url('create_debit_note/');
echo $_smarty_tpl->tpl_vars['p']->value->rejection_flow_data->id;?>
">Download
            Debit Note</a>
            <br>
            <br>
            <a class="btn btn-danger"
            href="<?php echo base_url('documents/');
echo $_smarty_tpl->tpl_vars['p']->value->rejection_flow_data->debit_note;?>
"
            download>Download Document </a>
            <?php } else { ?>
            <?php if (($_smarty_tpl->tpl_vars['p']->value)) {?>
            <?php if (($_smarty_tpl->tpl_vars['p']->value->reject_qty != 0)) {?>
            <button type="button" class="btn btn-warning float-left"
            data-bs-toggle="modal" data-bs-target="#exampleModal123<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
            Add Rejection Debit Note
          </button>
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
                  <button type="button" class="btn-close" data-dismiss="modal"
                  aria-label="Close">

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
                        value="<?php echo $_smarty_tpl->tpl_vars['p']->value->child_part_data->part_number;?>
"
                        name="" readonly required="required"
                        id="">
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
                            required placeholder="Reason"
                            class="form-control">
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
                              name="uploading_document" required
                              class="form-control">
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
                                required placeholder="Remark"
                                class="form-control">
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
                <td><?php echo $_smarty_tpl->tpl_vars['p']->value->rm_batch_no;?>
</td>
                <!-- Supplier/MTC Report -->
                <td>
                  <?php if (($_smarty_tpl->tpl_vars['p']->value->mtc_report != '')) {?>
                  <a download href="<?php echo base_url('documents/mtc/');
echo $_smarty_tpl->tpl_vars['p']->value->mtc_report;?>
" id="" class="btn btn-sm btn-primary remove_hoverr "><i class="fas fa-download"></i></a>
                  <?php }?>
                </td>
                <td class='text-center'>
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
              <td >
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
                    action="javascript:void(0)"
                    method="POST" class="update_rm_batch_mtc_report custom-form" enctype="multipart/form-data">
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
        <div style="margin-left: 1200px ;">
          <?php if (($_smarty_tpl->tpl_vars['inwarding_data']->value[0]->status == "accept")) {?>
          <button type="button" disabled class="btn btn-primary mt-4" data-bs-toggle="modal"
          data-bs-target="#exampleModalgenerate">
          Inwarding Already Accepted </button>
          <?php } else { ?>
          <button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal"
          data-target="#exampleModal">
          Accept Inwarding </button>
          <?php }?>
        </div>
      </div>
    </div>
    <!--/ Responsive Table -->
  </div>
  <!-- /.col -->


  <div class="content-backdrop fade"></div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
var base_url = <?php echo json_encode($_smarty_tpl->tpl_vars['base_url']->value);?>

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/quality/inwarding_details_accept_reject.js"><?php echo '</script'; ?>
>
<?php }
}
