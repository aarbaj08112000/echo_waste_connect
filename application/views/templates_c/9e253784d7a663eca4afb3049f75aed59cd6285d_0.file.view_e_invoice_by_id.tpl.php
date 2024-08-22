<?php
/* Smarty version 4.3.2, created on 2024-08-21 15:55:52
  from '/var/www/html/extra_work/erp_converted/application/views/templates/sales/view_e_invoice_by_id.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c5c0b0a52663_67913790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e253784d7a663eca4afb3049f75aed59cd6285d' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/sales/view_e_invoice_by_id.tpl',
      1 => 1724235949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c5c0b0a52663_67913790 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper container-xxl flex-grow-1 container-p-y">
   <!-- Navbar -->
   <!-- /.navbar -->
   <!-- Main Sidebar Container -->
   <!-- Content Wrapper. Contains page content -->

   <nav aria-label="breadcrumb">
      <div class="sub-header-left pull-left breadcrumb">
        <h1>
          Planning & Sales
          <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Sales Invoice</em></a>
        </h1>
        <br>
        <span >E-Invoics</span>
      </div>
    </nav>
     <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5 listing-btn">
            <a title="View Invoice" class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
view_new_sales_by_id/<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
" type="button">View Invoice</a>
            <a title="Back To View Sales Invoice" class="btn btn-seconday" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
sales_invoice_released" type="button"><i class="ti ti-arrow-left"></i></a>

        </div>

   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
     
      </section>
      <!-- Main content -->
      <section class="content">
         <div class="">
            <div class="row">
               <div class="col-12">
                  <!-- /.card -->
                  <div class="card">
                     <div class="card-header">
                        <div class="row">
                        
                        <div class="row">
                              <div class="tgdp-rgt-tp-sect">
                                 <p class="tgdp-rgt-tp-ttl">Customer Name </p>
                                 <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->customer_name;?>
</p>
                              </div>
                              <div class="tgdp-rgt-tp-sect">
                                 <p class="tgdp-rgt-tp-ttl">Sales Invoice Number </p>
                                 <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->sales_number;?>
</p>
                              </div>
                              <div class="tgdp-rgt-tp-sect">
                                 <p class="tgdp-rgt-tp-ttl">Invoice Date </p>
                                 <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->created_date;?>
</p>
                              </div>
                              <div class="tgdp-rgt-tp-sect">
                                 <p class="tgdp-rgt-tp-ttl">E Invoice Status</p>
                                 <p class="tgdp-rgt-tp-txt"><?php echo $_smarty_tpl->tpl_vars['einvoice_res_data']->value[0]->Status;?>
</p>
                              </div>
                          
                           <div class="tgdp-rgt-tp-sect">
                                 <p class="tgdp-rgt-tp-ttl">EWay-Bill Status</p>
                                 <p class="tgdp-rgt-tp-txt"><?php echo display_no_character($_smarty_tpl->tpl_vars['einvoice_res_data']->value[0]->EwbStatus);?>
</p>
                              </div>
                           
                        </div>
                       
                        <div class="row">
                           <?php if (empty($_smarty_tpl->tpl_vars['einvoice_res_data']->value[0]->Status)) {?>
                              <?php if (empty($_smarty_tpl->tpl_vars['einvoice_res_data']->value[0]->Irn)) {?>
                                 <div class="col-lg-2" style="    width: 11%;">
                                    <div class="form-group">
                                       <a class="btn btn-success mt-4" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
generate_E_invoice/<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
/EINVOICE" target="_blank">Create E-Invoice </a>
                                    </div>
                                 </div>
                              <?php } else { ?>
                                 <div class="col-lg-2" style="    width: 11%;">
                                    <div class="form-group">
                                       <a class="btn btn-success mt-4" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
get_E_invoice/<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
">Get E-Invoice Details</a>
                                    </div>
                                 </div>
                              <?php }?>
                           <?php }?>
                           <?php if ((isset($_smarty_tpl->tpl_vars['einvoice_res_data']->value[0]->Status)) && $_smarty_tpl->tpl_vars['einvoice_res_data']->value[0]->Status == "ACT") {?>
                              <div class="col-lg-2" style="    width: 11%;">
                                 <div class="form-group">
                                    <a class="btn btn-success mt-4" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
view_E_invoice/<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
" target="_blank">View E-Invoice </a>
                                 </div>
                              </div>
                              <div class="col-lg-2" style="    width: 11%;">
                                 <div class="form-group">
                                    <button data-bs-toggle="modal" class="btn btn-success mt-4" data-bs-target="#cancelEInvoiceModel<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
">Cancel E-Invoice</i></button>
                                 </div>
                              </div>
                              <!-- Cancel E-Invoice Model -->
                              <div class="modal fade" id="cancelEInvoiceModel<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Cancel E - Invoice</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                       </div>
                                       <div class="modal-body">
                                          <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
cancel_E_invoice_update" method="POST">
                                             <div class="row">
                                                <div class="col-lg-12">
                                                   <div class="form-group">
                                                      <label for="customer_name">Reason</label><span class="text-danger">*</span>
                                                      <select name="CancelReason" required class="form-control">
                                                         <option value="">Select Reason</option>
                                                         <option value="1">Duplicate</option>
                                                         <option value="2">Data Entry Mistake</option>
                                                         <option value="3">Order Cancelled</option>
                                                         <option value="4">Others</option>
                                                      </select>
                                                      <input value="<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
" type="hidden" name="new_sales_id" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">
                                                   </div>
                                                </div>
                                                <div class="col-lg-12">
                                                   <div class="form-group">
                                                      <label for="customer_name">Remark</label><span class="text-danger">*</span>
                                                      <input type="text" name="CancelRemark" required class="form-control" aria-describedby="emailHelp" placeholder="Remark">
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
                              </div>
                           <?php }?>
                        
                           <?php if (empty($_smarty_tpl->tpl_vars['einvoice_res_data']->value[0]->EwbStatus) || $_smarty_tpl->tpl_vars['einvoice_res_data']->value[0]->EwbStatus == "CANCELLED") {?>
                              <div class="col-lg-2" style="    width: 11%;">
                                 <div class="form-group">
                                    <button type="button" class="btn btn-success mt-4" data-bs-toggle="modal" data-bs-target="#createEBill<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
" target="_blank">Create Eway Bill</button>
                                 </div>
                              </div>
                           <?php }?>
                           <?php if ((isset($_smarty_tpl->tpl_vars['einvoice_res_data']->value[0]->EwbStatus)) && $_smarty_tpl->tpl_vars['einvoice_res_data']->value[0]->EwbStatus == "ACTIVE") {?>
                              <div class="col-lg-2" style="    width: 11%;">
                                 <div class="form-group">
                                    <a class="btn btn-success mt-4" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
view_EwayBill/<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
" target="_blank">View EWay-Bill</a>
                                 </div>
                              </div>
                              <div class="col-lg-2 " style="    width: 11%;">
                                 <div class="form-group">
                                    <button type="button" class="btn btn-success mt-4" data-bs-toggle="modal" data-bs-target="#updateEBill<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
">Update Eway Bill</button>
                                 </div>
                              </div>
                              <div class="col-lg-2" style="    width: 11%;">
                                 <div class="form-group">
                                    <button type="button" class="btn btn-success mt-4" data-bs-toggle="modal" data-bs-target="#updateTrans<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
">Update Transporter</button>
                                 </div>
                              </div>
                              <div class="col-lg-2" style="    width: 11%;">
                                 <div class="form-group">
                                    <button type="button" class="btn btn-success mt-4" data-bs-toggle="modal" data-bs-target="#cancelEBill<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
">Cancel Eway-Bill</button>
                                 </div>
                              </div>
                           <?php }?>
                           <!-- edit Modal -->
                           <div class="modal fade" id="createEBill<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel">Create Eway Bill</h5>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                       </button>
                                    </div>
                                    <div class="modal-body">
                                       <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
generate_EwayBill" method="POST" enctype="multipart/form-data">
                                          <input value="<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
" type="hidden" name="new_sales_id" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">
                                          <div class="form-group">
                                             <label for="">Mode Of Transport<span class="text-danger">*</label>
                                             <select name="transMode" class="form-control" required>
                                                <!--<option value="">Select</option>-->
                                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '1') {?>selected<?php }?>>Road</option>
                                                <option value="2" <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '2') {?>selected<?php }?>>Rail</option>
                                                <option value="3" <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '3') {?>selected<?php }?>>Air</option>
                                                <option value="4" <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '4') {?>selected<?php }?>>Ship</option>
                                             </select>
                                          </div>
                                          <div class="form-group">
                                             <label for="">Transporter<span class="text-danger">*</label>
                                             <select name="transporterId" required id="transporter" class="form-control select2" style="width:100%;">
                                                <option value="">Select Transporter</option>
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
                                          <div class="form-group">
                                             <label for="">Enter Vehicle No. <span class="text-danger">*</label>
                                             <input type="text" placeholder="Enter Vehicle No" name="vehicleNo" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->vehicle_number;?>
" 
                                                pattern="^([A-Z|a-z|0-9]{4,20})$"
                                                oninvalid="this.setCustomValidity('Please enter a valid vehicle number in the format XX00XX0000')" 
                                                onchange="this.setCustomValidity('')" required class="form-control">
                                          </div>
                                          <div class="form-group">
                                             <label for="">Distance of Transportation<span class="text-danger">*</label>
                                             <input type="text" placeholder="Enter Distance of Transportation" name="distance" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->distance;?>
" required  class="form-control">
                                          </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Create Eway-Bill</button>
                                    </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Update Modal -->
                        <div class="modal fade" id="updateEBill<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Eway Bill</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                                 <div class="modal-body">
                                    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
update_e_way_bill" method="POST" enctype="multipart/form-data">
                                       <input value="<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
" type="hidden" name="new_sales_id" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">
                                       <div class="form-group">
                                          <label for="on click url">e-Way Bill No</label>
                                          <input readonly type="text" name="eWayBillNo" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['einvoice_res_data']->value[0]->EwbNo;?>
" id="">
                                       </div>
                                       <div class="form-group">
                                          <label for="customer_name">Reason</label><span class="text-danger">*</span>
                                          <select name="reasonCode" required class="form-control">
                                             <option value="">Select Reason</option>
                                             <option value="1">Due to Break Down</option>
                                             <option value="2">Due to Transhipment</option>
                                             <option value="3">Others (Pls. Specify)</option>
                                             <option value="4">First Time</option>
                                          </select>
                                       </div>
                                       <div class="form-group">
                                          <label for="on click url">Reason Remark</label><span class="text-danger">*</span>
                                          <input type="text" id="reasonRem" required maxlength="50" name="reasonRem" placeholder="Reason Remark" 
                                             class="form-control"  value="">
                                       </div>
                                       <div class="form-group">
                                          <label for="">Mode Of Transport<span class="text-danger">*</label>
                                          <select name="transMode" class="form-control" required>
                                             <option value="1" <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '1') {?>selected<?php }?>>Road</option>
                                             <option value="2" <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '2') {?>selected<?php }?>>Rail</option>
                                             <option value="3" <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '3') {?>selected<?php }?>>Air</option>
                                             <option value="4" <?php if ($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '4') {?>selected<?php }?>>Ship</option>
                                          </select>
                                       </div>
                                       <div class="form-group">
                                          <label for="on click url">Vehicle No<span class="text-danger">*</span></label>
                                          <input type="text" id="vehicleNo" placeholder="Enter Vehicle No" name="vehicleNo" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->vehicle_number;?>
" 
                                             pattern="^([A-Z|a-z|0-9]{4,20})$"
                                             oninvalid="this.setCustomValidity('Please enter a valid vehicle number in the format XX00XX0000')" 
                                             onchange="this.setCustomValidity('')" required class="form-control">
                                       </div>
                                 </div>
                                 <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                 <button type="submit" class="btn btn-primary">Update</button>
                                 </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- DONE:  Update Transporter Modal  -->
                        <div class="modal fade" id="updateTrans<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Transporter ID</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                                 <div class="modal-body">
                                    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
update_EWayBill_transporter" method="POST" enctype="multipart/form-data">
                                       <input type="hidden" name="new_sales_id" value="<?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->id;?>
" required class="form-control">
                                       <div class="form-group">
                                          <label for="on click url">e-Way Bill No </label> <br>
                                          <input readonly type="text" name="eWayBillNo" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['einvoice_res_data']->value[0]->EwbNo;?>
" id="">
                                       </div>
                                       <div class="form-group">
                                          <label for="">Transporter<span class="text-danger">*</label>
                                          <select name="transporterId" required id="transporterId" class="form-control select2">
                                             <option value="">Select Transporter</option>
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
                                 <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                 <button type="submit" class="btn btn-primary">Save changes</button>
                                 </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- cancel eway bill -->
                        <div class="modal fade" id="cancelEBill<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                       
                        <div class="modal-dialog modal-lg" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Cancel EWay-Bill</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
cancel_eWayBill" method="POST">
                                    <input type="hidden" name="new_sales_id" value="<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">
                                    <input type="hidden" name="eWayBillNo" value="<?php echo $_smarty_tpl->tpl_vars['einvoice_res_data']->value[0]->EwbNo;?>
" class="form-control" id="ewayBillNo1">
                                    <div class="form-group">
                                       <label for="customer_name">Reason</label><span class="text-danger">*</span>
                                       <select name="cancelReason" required class="form-control">
                                          <option value="">Select Reason</option>
                                          <option value="1">Duplicate</option>
                                          <option value="2">Data Entry Mistake</option>
                                          <option value="3">Order Cancelled</option>
                                          <option value="4">Others</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label for="customer_name">Remark</label><span class="text-danger">*</span>
                                       <input type="text" name="cancelRemark" required class="form-control" aria-describedby="emailHelp" placeholder="Remark">
                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                       <button type="submit" class="btn btn-primary">Cancel E-Way Bill</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
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
           url: '<?php echo '<?php'; ?>
 echo site_url("Newcontroller/get_po_sales_parts"); <?php echo '?>'; ?>
',
           type: "POST",
           data: {
               id: id,
               salesno: salesno
           },
           cache: false,
           beforeSend: function() {},
           success: function(response) {
               if (response) {
                   $('#part_id').html(response);
               } else {
   
                   $('#part_id').html(response);
               }
   
           }
       });
       $("#customer_tracking").change(function() {
   
           var id = $("#customer_tracking").val();
           var salesno = $('#sales_number').val();
           $.ajax({
               url: '<?php echo '<?php'; ?>
 echo site_url("Newcontroller/get_po_sales_parts"); <?php echo '?>'; ?>
',
               type: "POST",
               data: {
                   id: id,
                   salesno: salesno
               },
               cache: false,
               beforeSend: function() {},
               success: function(response) {
                   if (response) {
                       $('#part_id').html(response);
                   } else {
   
                       $('#part_id').html(response);
                   }
   
               }
           });
   
       })
   });
<?php echo '</script'; ?>
>
<?php }
}
