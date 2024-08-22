<?php
/* Smarty version 4.3.2, created on 2024-08-21 19:13:41
  from '/var/www/html/extra_work/erp_converted/application/views/templates/store/stock_rejection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c5ef0d1948b8_77022871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9848a8b99f496e87b6710a1b950af8cae26184c8' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/store/stock_rejection.tpl',
      1 => 1724142425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c5ef0d1948b8_77022871 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
   
    <nav aria-label="breadcrumb">
      <div class="sub-header-left pull-left breadcrumb">
        <h1>
          Store
          <a hijacked="yes" href="javascript:void(0)" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Stock Rejection</em></a>
          </h1>
          <br>
          <span >Stock Rejection</span>
        </div>
      </nav>
      <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4> -->

      <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
        <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
        <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
        <button type="button" class="btn btn-seconday" title="Add Stock Rejection" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="ti ti-plus"></i> </button>
      </div>


      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Stock Rejection </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                  </button>
               </div>
               <div class="modal-body">
                  <form action="javascript:void(0)" method="POST" class="custom-form add_stock_rejection" enctype='multipart/form-data'>
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="form-group">
                              <label for="po_num">Select Part Number / Description / Stock </label><span class="text-danger">*</span>
                              <select name="part_id" id="" class="from-control form-select required-input">
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
                              <select name="supplier_id" id="" class="from-control form-select required-input">
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
                              <input type="text" name="reason"  placeholder="Enter Reason" class="form-control required-input">
                           </div>
                           <div class="form-group">
                              <label for="po_num">Upload debit note (approved document)</label>
                              <input type="file" name="uploading_document" class="form-control required-input">
                           </div>
                           <div class="form-group">
                              <label for="po_num">Enter Qty <span class="text-danger">*</span></label>
                              <input type="number" name="qty" step="any" placeholder="Enter Qty" name="qty"  class="form-control required-input">
                           </div>
                           <div class="form-group">
                              <label for="po_num">Enter Remark </label>
                              <input type="text" name="remark"  placeholder="Enter Remark" class="form-control required-input">
                           </div>
                        </div>
                     </div>
               </div>
               <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Save changes</button>
               </div>
               </form>
            </div>
         </div>
      </div>
      <!-- Main content -->
      <div class="w-100">
        <input type="text" name="reason" placeholder="Filter Search" class="form-control serarch-filter-input m-3 me-0" id="serarch-filter-input" fdprocessedid="bxkoib">
      </div>
      <div class="card p-0 mt-4 w-100">
        <div class="table-responsive text-nowrap">
          <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped" style="border-collapse: collapse;" border-color="#e1e1e1" id="short_receipt_mdr">
            <thead>
               <tr>
                 <!--  <th>Sr. No.</th> -->
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
                          <!-- <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td> -->
                          <td><?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value->part_description;?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['c']->value->reason;?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['c']->value->supplier_name;?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['c']->value->remark;?>
</td>
                          <td class="text-center">
                             <?php if (($_smarty_tpl->tpl_vars['c']->value->debit_note)) {?>
                             <a  download href="<?php echo base_url('documents/');
echo $_smarty_tpl->tpl_vars['c']->value->debit_note;?>
" title="Download Uploaded Document"><i class="ti ti-file-download"></i></a>
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
                              <p class="text-center"><a  href="<?php echo base_url('create_debit_note/');
echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" title="Download"><i class="ti ti-download"></i></a></p>
                             <?php } elseif (($_smarty_tpl->tpl_vars['c']->value->status == "stock_transfered")) {?>
                               <button type="submit" data-bs-toggle="modal" class="btn btn-sm btn-primary" data-bs-target="#exampleModal2<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">Approve Rejection</button>
                               <div class="modal fade" id="exampleModal2<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                     <div class="modal-content">
                                        <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLabel">Approve Rejection</h5>
                                           <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
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
                                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
public/js/store/stock_rejection.js"><?php echo '</script'; ?>
>
<?php }
}
