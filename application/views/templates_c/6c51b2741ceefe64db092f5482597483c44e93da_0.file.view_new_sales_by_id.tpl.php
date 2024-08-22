<?php
/* Smarty version 4.3.2, created on 2024-08-21 10:08:49
  from '/var/www/html/extra_work/erp_converted/application/views/templates/sales/view_new_sales_by_id.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c56f594044a0_71040821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c51b2741ceefe64db092f5482597483c44e93da' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/sales/view_new_sales_by_id.tpl',
      1 => 1724166555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c56f594044a0_71040821 (Smarty_Internal_Template $_smarty_tpl) {
?><div  class="wrapper container-xxl flex-grow-1 container-p-y">
<!-- Navbar -->
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<nav aria-label="breadcrumb">
   <div class="sub-header-left pull-left breadcrumb">
      <h1>
         Planning & Sales
         <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
         <i class="ti ti-chevrons-right" ></i>
         <em >Sales Invoice</em></a>
      </h1>
      <br>
      <span >View Sales Invoice</span>
   </div>
</nav>
<div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5 listing-btn">
            <a title="Back To Supplier Po List" class="btn btn-seconday" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
sales_invoice_released" type="button"><i class="ti ti-arrow-left"></i></a>
        </div>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<!-- Main content -->
<section class="content">
   <div class="">
      <div class="row">
         <div class="col-12">
          <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" id="sales_primary_id" class="form-control">
          <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->created_date;?>
" id="invoice_date" class="form-control">
          <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->sales_number;?>
" id="invoice_no" class="form-control">
          <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->sales_number;?>
" id="sales_number" class="form-control">
            <!-- /.card -->
            <?php if (empty($_smarty_tpl->tpl_vars['e_invoice_status']->value) && $_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending") {?>
            <div class="card p-0 mt-4">
               <div class="card-header">
                  <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
generate_new_sales_update" method="POST">
                     <div class="row">
                     </div>
                     <div id="loading-overlay">
                        <div id="loading-spinner"></div>
                     </div>
                     <div class="row">
                        <div class="col-lg-4">
                           <div class="form-group">
                              <label for="">Transport Mode<span class="text-danger">*</span></label>
                              <select name="mode" class="form-control" required>
                                 <option value="">Select</option>
                                 <option value="1" <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '1') {?>selected<?php }?>>Road</option>
                                 <option value="2" <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '2') {?>selected<?php }?>>Rail</option>
                                 <option value="3" <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '3') {?>selected<?php }?>>Air</option>
                                 <option value="4" <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '4') {?>selected<?php }?>>Ship</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="form-group">
                              <label for="">Transporter<span class="text-danger">*</span></label>
                              <select name="transporter" required id="transporter" class="form-control select2">
                                 <option value="">Select</option>
                                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transporter']->value, 'tr');
$_smarty_tpl->tpl_vars['tr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tr']->value) {
$_smarty_tpl->tpl_vars['tr']->do_else = false;
?>
                                 <option value="<?php echo $_smarty_tpl->tpl_vars['tr']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->transporter_id == $_smarty_tpl->tpl_vars['tr']->value->id) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['tr']->value->name;?>
 - <?php echo $_smarty_tpl->tpl_vars['tr']->value->transporter_id;?>
</option>
                                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="form-group">
                              <label for="">Vehicle No.<span class="text-danger">*</span></label>
                              <input type="text" placeholder="Enter Vehicle No" name="vehicle_number" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->vehicle_number;?>
" class="form-control"/>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="form-group">
                              <label for="">Distance<span class="text-danger">*</span></label>
                              <input type="text" placeholder="Enter Distance of Transportation" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->distance;?>
" required name="distance" class="form-control">
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="form-group">
                              <label for="">L.R No</label>
                              <input type="text" placeholder="Enter L.R No" name="lr_number" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->lr_number;?>
" class="form-control">
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="form-group">
                              <label for="">PO Remark </label>
                              <input type="text" placeholder="Enter Remark" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->remark;?>
" name="remark" class="form-control">
                              <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['uri_segment_2']->value;?>
" name="id" class="form-control">
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="form-group">
                              <button type="submit" class="btn btn-danger mt-4">Update</button>
                           </div>
                        </div>
                     </div>
                  </form>
                  
               </div>
            </div>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "Cancelled" || (empty($_smarty_tpl->tpl_vars['e_invoice_status']->value) && $_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending")) {?>
            <div class="card p-0 mt-4">
               <div class="card-header">
                    <div class="row">
                    <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Customer Name - Part Number</p>
                        <p class="tgdp-rgt-tp-txt" title="<?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->customer_name;?>
 - <?php echo $_smarty_tpl->tpl_vars['customer_part_details']->value[0]->part_number;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->customer_name;?>
 - <?php echo $_smarty_tpl->tpl_vars['customer_part_details']->value[0]->part_number;?>

                        </p>
                    </div>
                    <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Sales Invoice Number</p>
                        <p class="tgdp-rgt-tp-txt" title="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->sales_number;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->sales_number;?>

                        </p>
                    </div>
                    <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Current Status</p>
                        <p class="tgdp-rgt-tp-txt" title="<?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "accpet") {?>Released<?php } else {
echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->status;
}?>">
                        <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "accpet") {?>Released<?php } else {
echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->status;
}?>
                        </p>
                       
                    </div>
                    <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">E Invoice Status</p>
                        <p class="tgdp-rgt-tp-txt" title="<?php echo $_smarty_tpl->tpl_vars['e_invoice_status']->value[0]->Status;?>
">
                        <?php echo display_no_character($_smarty_tpl->tpl_vars['e_invoice_status']->value[0]->Status);?>

                        </p>
                    </div>
                    <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">PO Remark</p>
                        <p class="tgdp-rgt-tp-txt" title="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->remark;?>
">
                        <?php echo display_no_character($_smarty_tpl->tpl_vars['new_sales']->value[0]->remark);?>

                        </p>
                    </div>
                    
                   
                    </div>
               </div>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "lock") {?>
            <div class="card p-0 mt-4">
               <div class="card-header">
                  <div class="row">
                     <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Transport Mode</p>
                        <p class="tgdp-rgt-tp-txt">
                           <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '1') {?>Road<?php }?>
                           <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '2') {?>Rail<?php }?>
                           <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '3') {?>Air<?php }?>
                           <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '4') {?>Ship<?php }?>
                        </p>
                     </div>
                     <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Transporter</p>
                        <p class="tgdp-rgt-tp-txt">
                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transporter']->value, 'tr');
$_smarty_tpl->tpl_vars['tr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tr']->value) {
$_smarty_tpl->tpl_vars['tr']->do_else = false;
?>
                           <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->transporter_id == $_smarty_tpl->tpl_vars['tr']->value->id) {
echo $_smarty_tpl->tpl_vars['tr']->value->name;?>
 - <?php echo $_smarty_tpl->tpl_vars['tr']->value->transporter_id;
}?>
                           <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </p>
                     </div>
                     <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Vehicle No.</p>
                        <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->vehicle_number;?>
</p>
                     </div>
                     <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Distance</p>
                        <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->distance;?>
 </p>
                     </div>
                     <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">L.R No</p>
                        <p class="tgdp-rgt-tp-txt"><?php echo display_no_character($_smarty_tpl->tpl_vars['new_sales']->value[0]->lr_number);?>
</p>
                     </div>
                     <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">PO Remark</p>
                        <p class="tgdp-rgt-tp-txt"><?php echo display_no_character($_smarty_tpl->tpl_vars['new_sales']->value[0]->remark);?>
</p>
                     </div>
                     <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Customer Name - Part Number</p>
                        <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->customer_name;?>
 - <?php echo $_smarty_tpl->tpl_vars['customer_part_details']->value[0]->part_number;?>
</p>
                     </div>
                     <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Sales Invoice Number</p>
                        <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->sales_number;?>
</p>

                     </div>
                     <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">Current Status</p>
                        <p class="tgdp-rgt-tp-txt"><?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "accpet") {?>Released<?php } else {
echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->status;
}?></p>
                     </div>
                     <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">E Invoice Status</p>
                        <p class="tgdp-rgt-tp-txt"><?php echo display_no_character($_smarty_tpl->tpl_vars['e_invoice_status']->value[0]->Status);?>
</p>
                     </div>
                     <div class="tgdp-rgt-tp-sect">
                        <p class="tgdp-rgt-tp-ttl">PO Remark</p>
                        <p class="tgdp-rgt-tp-txt"><?php echo display_no_character($_smarty_tpl->tpl_vars['new_sales']->value[0]->remark);?>
</p>
                     </div>
                  </div>
               </div>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "lock" || $_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending") {?>
            <div class="card mt-3">
               <div class="card-header">
                    <div class="row">
                    <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "lock" || $_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending") {?>
                    <div class="col-lg-1" style="    width: 9%;">
                        <div class="form-group">
                            <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
view_generate_sales_invoice/<?php echo $_smarty_tpl->tpl_vars['uri_segment_2']->value;?>
" target="_blank">View Original</a>
                        </div>
                    </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "lock") {?>
                    <div class="col-lg-1" style="    width: 9%;">
                        <div class="form-group">
                            <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
generate_sales_invoice/<?php echo $_smarty_tpl->tpl_vars['uri_segment_2']->value;?>
/ORIGINAL_FOR_RECIPIENT">Original</a>
                        </div>
                    </div>
                    <div class="col-lg-1" style="    width: 9%;">
                        <div class="form-group">
                            <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
generate_sales_invoice/<?php echo $_smarty_tpl->tpl_vars['uri_segment_2']->value;?>
/DUPLICATE_FOR_TRANSPORTER">Duplicate</a>
                        </div>
                    </div>
                    <div class="col-lg-1" style="    width: 9%;">
                        <div class="form-group">
                            <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
generate_sales_invoice/<?php echo $_smarty_tpl->tpl_vars['uri_segment_2']->value;?>
/TRIPLICATE_FOR_SUPPLIER">Triplicate</a>
                        </div>
                    </div>
                    <div class="col-lg-1" style="margin-right: 30px; width: 9%;">
                        <div class="form-group" >
                            <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
generate_sales_invoice/<?php echo $_smarty_tpl->tpl_vars['uri_segment_2']->value;?>
/ACKNOWLEDGEMENT_COPY">Acknowledge</a>
                        </div>
                    </div>
                    <div class="col-lg-1" style="    width: 9%;">
                        <div class="form-group">
                            <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
generate_sales_invoice/<?php echo $_smarty_tpl->tpl_vars['uri_segment_2']->value;?>
/EXTRA_COPY">Extra Invoice</a>
                        </div>
                    </div>
                    <div class="col-lg-1" style="    width: 12%;">
                        <div class="form-group">
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#printForTally" id="printSticker">
                            Packaging Sticker
                            </button>

                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="printForTally" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Packaging Stickers</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <section class="content" id="observationTableData">
                                </section>
                                </div>
                            </div>
                        </div>
                    </div>
               <div>
            </div>
            <!-- Print selection -->
            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
print_sales_invoice/<?php echo $_smarty_tpl->tpl_vars['uri_segment_2']->value;?>
" method="post" class="mt-4">
               <div class="row">
                  <div class="col-lg-1 mt-2">
                     <div class="form-group">    
                        <input type="checkbox" id="original" name="interests[]" value="ORIGINAL_FOR_RECIPIENT">
                        <label for="original">Original</label><br>
                     </div>
                  </div>
                  <div class="col-lg-1  mt-2">
                     <div class="form-group">    
                        <input type="checkbox" id="duplicate" name="interests[]" value="DUPLICATE_FOR_TRANSPORTER">
                        <label for="duplicate">Duplicate</label><br>
                     </div>
                  </div>
                  <div class="col-lg-1 mt-2">
                     <div class="form-group">
                        <input type="checkbox" id="triplicate" name="interests[]" value="TRIPLICATE_FOR_SUPPLIER">
                        <label for="triplicate">Triplicate</label><br>
                     </div>
                  </div>
                  <div class="col-lg-1 mt-2">
                     <div class="form-group" >   
                        <input type="checkbox" id="acknowledge" name="interests[]" value="ACKNOWLEDGEMENT_COPY">
                        <label for="acknowledge">Acknowledge</label><br>
                     </div>
                  </div>
                  <div class="col-lg-1 mt-2">
                     <div class="form-group">   
                        <input type="checkbox" id="extraCopy" name="interests[]" value="EXTRA_COPY">
                        <label for="extraCopy">EXTRA COPY</label><br>
                     </div>
                  </div>
                  <div class="col-lg-1">
                     <div class="form-group">
                        <button type="submit" onclick="this.form.target='_blank';return true;" class="btn btn-info btn"> Print </button>
                     </div>
                  </div>
               </div>
            </form>
            <?php }?>
               </div>
            </div>
            </div>
            <?php }?>
           
            <div class="card mt-3">
               <div class="card-header">
               <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending") {?>
                     <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
add_sales_parts" method="post" id="salesForm">
                        <div class="row">
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="">Select PO no/ PO start date/ PO end date/ PO amendment no<span class="text-danger">*</span> </label>
                                 <select name="po_id" id="customer_tracking"  class="form-control select2">
                                    <?php if ($_smarty_tpl->tpl_vars['po_parts']->value) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_tracking']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['po_parts']->value[0]->po_number == $_smarty_tpl->tpl_vars['c']->value->po_number) {?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->po_number;?>
 // <?php echo $_smarty_tpl->tpl_vars['c']->value->po_start_date;?>
 // <?php echo $_smarty_tpl->tpl_vars['c']->value->po_end_date;?>
 //<?php echo $_smarty_tpl->tpl_vars['c']->value->po_amendment_number;?>
</option>
                                    <?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php } else { ?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_tracking']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                    <option <?php if ($_smarty_tpl->tpl_vars['po_parts']->value && $_smarty_tpl->tpl_vars['po_parts']->value[0]->po_id == $_smarty_tpl->tpl_vars['c']->value->id) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->po_number;?>
 // <?php echo $_smarty_tpl->tpl_vars['c']->value->po_start_date;?>
 // <?php echo $_smarty_tpl->tpl_vars['c']->value->po_end_date;?>
 // <?php echo $_smarty_tpl->tpl_vars['c']->value->po_amendment_number;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="">Select Part NO // Description // FG Stock // Rate // Packing QTY <span class="text-danger">*</span> </label>
                                 <input type="hidden" readonly id="customer_tracking_id" name="customer_tracking_id" class="form-control">
                                 <select name="part_id" id="part_id"  class="form-control select2">
                                    <option value=''>Please select</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <label for="">Enter Qty<span class="text-danger">*</span> </label>
                                 <input type="text" step="any" name="qty" placeholder="Enter QTY"  class="form-control onlyNumericInput">
                                 <input type="hidden" name="sales_number" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->sales_number;?>
" placeholder="Enter QTY " required class="form-control">
                                 <input type="hidden" name="sales_id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" placeholder="Enter QTY " required class="form-control">
                                 <input type="hidden" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->id;?>
" placeholder="Enter QTY " required class="form-control">
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group mt-2">
                                 <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending") {?>
                                 <button type="submit" class="btn btn-info btn mt-3">Add</button>
                                 <?php }?>
                              </div>
                           </div>
                        </div>
                     </form>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending") {?>
                  <div class="mt-3">
                  <?php if ($_smarty_tpl->tpl_vars['po_parts']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['session_type']->value == 'admin' || $_smarty_tpl->tpl_vars['session_type']->value == 'Admin' || $_smarty_tpl->tpl_vars['session_type']->value == 'Sales') {?>
                                <?php $_smarty_tpl->_assignInScope('flag', 0);?>
                                <?php $_smarty_tpl->_assignInScope('final_po_amount', 0);?>
                                <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['po_parts']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                                <?php if (empty($_smarty_tpl->tpl_vars['p']->value->tax_id)) {?>
                                <?php $_smarty_tpl->_assignInScope('flag', 1);?>
                                <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php if ($_smarty_tpl->tpl_vars['flag']->value == 0) {?>
                                <button type="button" class="btn btn-danger ml-1" data-bs-toggle="modal" data-bs-target="#lock">
                                Lock Invoice
                                </button>
                                    <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending") {?>
                                    <button type="button" class="btn btn-danger ml-1" data-bs-toggle="modal" data-bs-target="#deleteInvoice">
                                    Delete Invoice
                                    </button>
                                    <?php }?>
                                <!-- delete model -->
                                <div class="modal fade" id="deleteInvoice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Invoice</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
delete_sale_invoice" method="POST">
                                                    <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for=""><b>Are you sure want to Delete this invoice ?</b> </label>
                                                        <input type="hidden" name="sales_id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" required class="form-control">
                                                        <input type="hidden" name="status" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->status;?>
" required class="form-control">
                                                    </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Delete</button>
                                        </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <?php } else { ?>
                                <div class='alert alert-danger' style='width:400px'>Error : Check GST Of All Parts, to lock this invoice</div>
                                <?php }?>
                        <?php }?>
                  <?php }?>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "lock") {?>
                  <?php if ($_smarty_tpl->tpl_vars['session_type']->value == 'admin' || $_smarty_tpl->tpl_vars['session_type']->value == 'Admin') {?>
                  <button type="button" disabled class="btn btn-success ml-1" data-bs-toggle="modal">
                  Invoice already released
                  </button>
                  <?php }?>
                  <?php } else { ?>
                  <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status != "pending" && $_smarty_tpl->tpl_vars['new_sales']->value[0]->status != "Cancelled") {?>
                  <button type="button" disabled class="btn btn-success ml-1" data-bs-toggle="modal">
                  Invoice already released
                  </button>
                  <?php } elseif ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "Cancelled") {?>
                  <button type="button" disabled class="btn btn-success ml-1" data-bs-toggle="modal">
                  Invoice already Cancelled
                  </button>
                  <?php }?>
                  <?php }?>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="accpet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                           </div>
                           <div class="modal-body">
                              <div class="row">
                                 <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
accept_po" method="POST">
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                          <label for=""><b>Are you sure want to release this invoice?</b> </label>
                                          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" required class="form-control">
                                          <input type="hidden" name="status" value="accpet" required class="form-control">
                                       </div>
                                    </div>
                              </div>
                           </div>
                           <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                           <button type="submit" class="btn btn-primary">Update</button>
                           </div>
                        </div>
                        </form>
                     </div>
                  </div>
                  <!-- Lock Model -->
                  <div class="modal fade" id="lock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                           </div>
                           <div class="modal-body">
                              <div class="row">
                                 <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
lock_invoice" method="POST">
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                          <label for=""><b>Are you sure you want to Lock this invoice?</b> </label>
                                          <input type="hidden" name="new_po_id" id="new_po_id" value="" required class="form-control">
                                          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" required class="form-control">
                                          <input type="hidden" name="status" value="lock" required class="form-control">
                                       </div>
                                    </div>
                              </div>
                           </div>
                           <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                           <button type="submit" class="btn btn-primary">Update</button>
                           </div>
                        </div>
                        </form>
                     </div>
                  </div>
                  <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                           </div>
                           <div class="modal-body">
                              <div class="row">
                                 <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
delete_po" method="POST">
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                          <label for=""><b>Are you sure you want to delete this invoice?</b> </label>
                                          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" required class="form-control">
                                          <input type="hidden" name="status" value="reject" required class="form-control">
                                          <input type="hidden" name="table_name" value="new_po" required class="form-control">
                                       </div>
                                    </div>
                              </div>
                           </div>
                           <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary">Update</button>
                           </div>
                        </div>
                        </form>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
            <div class="card mt-3">
            
                  <div class="table-responsive text-nowrap">
                     <table  width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped scrollable" style="border-collapse: collapse;" border-color="#e1e1e1" id="part_data">
                        <thead>
                           <tr>
                              <th>Sr No</th>
                              <th>Part Number</th>
                              <th>Part Description</th>
                              <th>Tax Structure</th>
                              <th>UOM</th>
                              <th>QTY</th>
                              <th>Price</th>
                              <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending") {?>
                              <th>Actions</th>
                              <?php }?>
                              <th>CGST</th>
                              <th>SGST</th>
                              <th>IGST</th>
                              <th>TCS</th>
                              <th>Sub Total</th>
                              <th>GST</th>
                              <th>Total Price</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php if ($_smarty_tpl->tpl_vars['po_parts']->value) {?>
                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['po_parts']->value, 'p', false, 'srNo');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['srNo']->value => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                           <?php $_smarty_tpl->_assignInScope('subtotal', $_smarty_tpl->tpl_vars['p']->value->total_rate-$_smarty_tpl->tpl_vars['p']->value->gst_amount);?>
                           <?php $_smarty_tpl->_assignInScope('row_total', $_smarty_tpl->tpl_vars['p']->value->total_rate+$_smarty_tpl->tpl_vars['p']->value->tcs_amount);?>
                           <?php $_smarty_tpl->_assignInScope('final_po_amount', $_smarty_tpl->tpl_vars['final_po_amount']->value+$_smarty_tpl->tpl_vars['row_total']->value);?>
                           <?php $_smarty_tpl->_assignInScope('rate', $_smarty_tpl->tpl_vars['subtotal']->value/$_smarty_tpl->tpl_vars['p']->value->qty);?>
                           <?php if ($_smarty_tpl->tpl_vars['p']->value->part_price > 0) {?>
                           <?php $_smarty_tpl->_assignInScope('rate', $_smarty_tpl->tpl_vars['p']->value->part_price);?>
                           <?php }?>
                           <tr>
                              <td><?php echo $_smarty_tpl->tpl_vars['srNo']->value+1;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[$_smarty_tpl->tpl_vars['p']->value->part_id][0]->part_number;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[$_smarty_tpl->tpl_vars['p']->value->part_id][0]->part_description;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['gst_structure2']->value[$_smarty_tpl->tpl_vars['p']->value->part_id][0]->code;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['p']->value->uom_id;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
</td>
                              <td><?php echo number_format($_smarty_tpl->tpl_vars['rate']->value,2);?>
</td>
                              <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending") {?>
                              <td>
                                 <button type="button" class="btn btn-danger ml-1" data-bs-toggle="modal" data-bs-target="#exampleModaldelete<?php echo $_smarty_tpl->tpl_vars['srNo']->value;?>
">
                                 Delete
                                 </button>
                                 <!-- Modal -->
                                 <div class="modal fade" id="exampleModaldelete<?php echo $_smarty_tpl->tpl_vars['srNo']->value;?>
" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                             </button>
                                          </div>
                                          <div class="modal-body">
                                             <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
delete" method="POST" class="delete_form">
                                                <div class="row">
                                                   <div class="col-lg-12">
                                                      <div class="form-group">
                                                         <label for=""><b>Are You Sure Want To Delete This?</b> </label>
                                                         <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" required class="form-control">
                                                         <input type="hidden" name="table_name" value="sales_parts" required class="form-control">
                                                      </div>
                                                   </div>
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">Update</button>
                                          </div>
                                       </div>
                                    </div>
                                    </form>
                                 </div>
                              </td>
                              <?php }?>
                              <td><?php echo number_format($_smarty_tpl->tpl_vars['p']->value->cgst_amount,2);?>
</td>
                              <td><?php echo number_format($_smarty_tpl->tpl_vars['p']->value->sgst_amount,2);?>
</td>
                              <td><?php echo number_format($_smarty_tpl->tpl_vars['p']->value->igst_amount,2);?>
</td>
                              <td><?php echo number_format($_smarty_tpl->tpl_vars['p']->value->tcs_amount,2);?>
</td>
                              <td><?php echo number_format($_smarty_tpl->tpl_vars['subtotal']->value,2);?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['p']->value->gst_amount;?>
</td>
                              <td><?php echo number_format($_smarty_tpl->tpl_vars['row_total']->value,2);?>
</td>
                           </tr>
                           <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                           <?php }?>
                        </tbody>
                        <tfoot>
                           <?php $_smarty_tpl->_assignInScope('noOfColumns', 13);?>
                           <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->status == "pending") {?>
                           <?php $_smarty_tpl->_assignInScope('noOfColumns', 14);?>
                           <?php }?>
                           <?php if ($_smarty_tpl->tpl_vars['po_parts']->value) {?>
                           <tr >
                              <th colspan='<?php echo $_smarty_tpl->tpl_vars['noOfColumns']->value;?>
' style="width: 100%;">Total</th>
                              <th style="width: 7.5%;"><?php echo number_format($_smarty_tpl->tpl_vars['final_po_amount']->value,2);?>
</th>
                           </tr>
                           <?php }?>
                        </tfoot>
                     </table>
                  </div>
                  <!-- /.card-body -->
              
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
<!-- /.content-wrapper -->
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
   $(document).ready(function() {
       var id = $("#customer_tracking").val();
       $('#new_po_id').val(id);
       var salesno = $('#sales_number').val();
       $.ajax({
           url: '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Newcontroller/get_po_sales_parts',
           type: "POST",
           data: {
               id: id,
               salesno: salesno
           },
           cache: false,
           beforeSend: function() {
               // Show the loading icon
               $("#loading-overlay").show();
           },
           success: function(response) {
               if (response) {
                   $('#part_id').html(response);
               } else {
                   $('#part_id').html(response);
               }
           },
           complete: function() {
               // Hide the loading overlay
               $("#loading-overlay").hide();
           }
       });
   
       $("#customer_tracking").change(function() {
           var id = $("#customer_tracking").val();
           var salesno = $('#sales_number').val();
           $.ajax({
               url: '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Newcontroller/get_po_sales_parts',
               type: "POST",
               data: {
                   id: id,
                   salesno: salesno
               },
               cache: false,
               beforeSend: function() {
                   // Show the loading icon
                   $("#loading-overlay").show();
               },
               success: function(response) {
                   if (response) {
                       $('#part_id').html(response);
                   } else {
                       $('#part_id').html(response);
                   }
               },
               complete: function() {
                   // Hide the loading overlay
                   $("#loading-overlay").hide();
               }
           });
       });
   
       $("#printSticker").click(function() {
           var salesId = $('#sales_primary_id').val();
           var invoice_no = $('#invoice_no').val();
           var invoice_date = $('#invoice_date').val();
           $.ajax({
               url: '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
SalesController/getSalesPartPackaging_details',
               type: "POST",
               data: {
                   salesId: salesId,
                   invoice_no: invoice_no,
                   invoice_date: invoice_date
               },
               cache: false,
               beforeSend: function() {},
               success: function(response) {
                let res = JSON.parse(response);
                   if (res.html) {
                       $('#observationTableData').html(res.html);
                   } else {
                      $('#observationTableData').html(res.html);
                   }
               }
           });
       });
   
       $("#salesForm").validate({
           ignore: [],
           rules: {
               po_id: {
                   required: true
               },
               part_id: {
                   required: true
               },
               qty: {
                   required: true,
                   number: true
               }
           },
           messages: {
               po_id: {
                   required: "Please select a PO."
               },
               part_id: {
                   required: "Please select a part."
               },
               qty: {
                   required: "Please enter quantity.",
                   number: "Please enter a valid quantity."
               }
           },
           errorPlacement: function(error, element) {
               error.addClass('error');
               element.closest('.form-group').append(error);
           },
           onkeyup: function(element) {
               $(element).valid();
           },
           onchange: function(element) {
               $(element).valid();
           },
           submitHandler: function(form) {
               event.preventDefault(); // Prevent default form submission
   
               $.ajax({
                   url: form.action,
                   type: form.method,
                   data: $(form).serialize(),
                   success: function(response) {
                       // Handle the successful response here
                      if(response != '' && response != null && typeof response != 'undefined'){
                           let res = JSON.parse(response);
                           console.log(res);
                           if(res['sucess'] == 1){
                               toastr.success(res['msg']);
                               setTimeout(() => {
                                   window.location.reload();
                               }, 1000);
                           }else{
                               toastr.error(res['msg']);
                           }
                      }
                   },
                   error: function(xhr, status, error) {
                       // Handle the error response here
                       alert("An error occurred: " + xhr.responseText);
                   }
               });
           }
       });
   
       // Manually trigger validation on select2 elements change
       $('.select2').on('change', function() {
           $(this).valid();
       });
   
       $('.delete_form').on('submit', function(event) {
       event.preventDefault(); // Prevent the form from submitting via the browser
       var form = $(this);
       var formData = form.serialize();
   
       $.ajax({
           type: 'POST',
           url: form.attr('action'),
           data: formData,
           success: function(response) {
               // Handle success
               toastr.success('part deleted sucessfully.')
               // Optionally, you can close the modal or refresh the page or element
               setTimeout(() => {
                   window.location.reload();
               }, 1000);
           },
           error: function(xhr, status, error) {
               // Handle error
               toastr.success('unable to delete part.')
           }
       });
   });
   
   });
<?php echo '</script'; ?>
><?php }
}
