<?php
/* Smarty version 4.3.2, created on 2024-06-18 21:19:30
  from '/var/www/html/extra_work/erp_converted/application/views/templates/planning_sales/view_e_invoice_by_id.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6671ac8a134018_42345082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a186dc37a52fde977f4f2edefbff774965c58e5f' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/planning_sales/view_e_invoice_by_id.tpl',
      1 => 1718721822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6671ac8a134018_42345082 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
   <!-- Navbar -->
   <!-- /.navbar -->
   <!-- Main Sidebar Container -->
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-4">
                  <!-- <h1></h1> -->
               </div>
               <div class="col-sm-5">
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
                                 <a class="btn btn-dark" href="<?php echo base_url('sales_invoice_released');?>
">< Back </a>
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <a class="btn btn-dark" href="<?php echo base_url('view_new_sales_by_id/');
echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
">View Invoice </a>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <label for="">Customer Name <span class="text-danger"></span></label>
                                 <br><span class="text-info"><label><?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->customer_name;?>
</label></span>
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <label>Sales Invoice Number <span class="text-danger"></span></label>
                                 <br><span class="text-info"><label>%$new_sales[0]->sales_number <?php echo '%>'; ?>
</label></span>
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <label for="">Invoice Date <span class="text-danger"></span> </label>
                                 <br><span class="text-info"><label><?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->created_date;?>
</label></span>
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <label for="">E Invoice Status <span class="text-danger"></span> </label>
                                 <br><span class="text-info"><label><?php echo $_smarty_tpl->tpl_vars['einvoice_res_data']->value[0]->Status;?>
</label></span>
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <label for="">EWay-Bill Status <span class="text-danger"></span> </label>
                                 <br><span class="text-info"><label><?php echo $_smarty_tpl->tpl_vars['einvoice_res_data']->value[0]->EwbStatus;?>
</label></span>
                              </div>
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           	<assign var='new_sales_id' value=$sales_id <?php echo '%>'; ?>

                           	<assign var='status' value=$einvoice_res_data[0]->Status <?php echo '%>'; ?>

                           	<assign var='irnNo' value=$einvoice_res_data[0]->Irn <?php echo '%>'; ?>

                            <?php if ((empty($_smarty_tpl->tpl_vars['status']->value))) {?>
                                <?php if ((empty($_smarty_tpl->tpl_vars['irnNo']->value))) {?>
			                           <div class="col-lg-2">
			                              <div class="form-group">
			                                 <a class="btn btn-success mt-4" href="<?php echo base_url('generate_E_invoice/');
echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
/EINVOICE" target="_blank">Create E-Invoice </a>
			                              </div>
			                           </div>
			                    <?php } else { ?>
			                           <div class="col-lg-2">
			                              <div class="form-group">
			                                 <a class="btn btn-success mt-4" href="<?php echo base_url('get_E_invoice/');
echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
">Get E-Invoice Details</a>
			                              </div>
			                           </div>
			                    <?php }?>
                            <?php }?>
                              
                        <?php if (((isset($_smarty_tpl->tpl_vars['status']->value)) && ($_smarty_tpl->tpl_vars['status']->value == "ACT"))) {?>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <a class="btn btn-success mt-4" href="<?php echo base_url('view_E_invoice/');
echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
" target="_blank">View E-Invoice </a>
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <button data-toggle="modal" class="btn btn-success mt-4" data-target="#cancelEInvoiceModel<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
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
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                       </button>
                                    </div>
                                    <div class="modal-body">
                                       <form action="<?php echo base_url('cancel_E_invoice_update');?>
" method="POST">
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
                                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                             <button type="submit" class="btn btn-primary">Save changes</button>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                        <?php }?>
                        </div>
                        <div class="row">
                           <?php $_smarty_tpl->_assignInScope('ew_sales_id', $_smarty_tpl->tpl_vars['sales_id']->value);?>
                           <?php $_smarty_tpl->_assignInScope('ewbStatus', $_smarty_tpl->tpl_vars['einvoice_res_data']->value[0]->EwbStatus);?>
                           <?php if (((empty($_smarty_tpl->tpl_vars['ewbStatus']->value) || ($_smarty_tpl->tpl_vars['ewbStatus']->value == "CANCELLED")))) {?>
	                           <div class="col-lg-2">
	                              <div class="form-group">
	                                 <button type="button" class="btn btn-success mt-4" data-toggle="modal" data-target="#createEBill<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
" target="_blank">Create Eway Bill</button>
	                              </div>
	                           </div>
                           <?php }?> 
                           <?php if (((isset($_smarty_tpl->tpl_vars['ewbStatus']->value)) && ($_smarty_tpl->tpl_vars['ewbStatus']->value == "ACTIVE"))) {?>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <a class="btn btn-success mt-4" href="<?php echo base_url('view_EwayBill/');
echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
" target="_blank">View EWay-Bill</a>
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <button type="button" class="btn btn-success mt-4" data-toggle="modal" data-target="#updateEBill<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
">Update Eway Bill</button>
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <button type="button" class="btn btn-success mt-4" data-toggle="modal" data-target="#updateTrans<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
">Update Transporter</button>
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <button type="button" class="btn btn-success mt-4" data-toggle="modal" data-target="#cancelEBill<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
">Cancel Eway-Bill</button>
                              </div>
                           </div>
                           <?php }?>
                           <!-- edit Modal -->
                           <div class="modal fade" id="createEBill<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel">Create Eway Bill</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                       </button>
                                    </div>
                                    <div class="modal-body">
                                       <form action="<?php echo base_url('generate_EwayBill');?>
" method="POST" enctype="multipart/form-data">
                                          <input value="<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
" type="hidden" name="new_sales_id" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">
                                          <div class="form-group">
                                             <label for="">Mode Of Transport<span class="text-danger">*</label>
                                             <select name="transMode" class="form-control" required>
                                                <!--<option value="">Select</option>-->
                                                <option value="1" <?php if (($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '1')) {?>selected  <?php }?>>Road</option>
                                                <option value="2" <?php if (($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '2')) {?>selected<?php }?>>Rail</option>
                                                <option value="3" <?php if (($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '3')) {?>selected <?php }?>>Air</option>
                                                <option value="4" <?php if (($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '4')) {?>selected <?php }?>>Ship</option>
                                             </select>
                                          </div>
                                          <div class="form-group">
                                             <label for="">Transporter<span class="text-danger">*</label>
                                             <select name="transporterId" required id="transporter" class="form-control select2">
                                                <option value="">Select Transporter</option>
                                                <?php if (($_smarty_tpl->tpl_vars['transporter']->value)) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transporter']->value, 'tr');
$_smarty_tpl->tpl_vars['tr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tr']->value) {
$_smarty_tpl->tpl_vars['tr']->do_else = false;
?>
	                                                <option value="<?php echo $_smarty_tpl->tpl_vars['tr']->value->id;?>
" <?php if (($_smarty_tpl->tpl_vars['new_sales']->value[0]->transporter_id == $_smarty_tpl->tpl_vars['tr']->value->id)) {?>selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['tr']->value->name;?>
 - <?php echo $_smarty_tpl->tpl_vars['tr']->value->transporter_id;?>
</option>
	                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php }?>
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
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                                 <div class="modal-body">
                                    <form action="<?php echo base_url('update_e_way_bill');?>
" method="POST" enctype="multipart/form-data">
                                       <input value="<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
" type="hidden" name="new_sales_id" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">
                                       <div class="form-group">
                                          <label for="on click url">e-Way Bill No</label>
                                          <input readonly type="text" name="eWayBillNo" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['einvoice_res_data']->value[0]->EwbNo;?>
" id="">
                                       </div>
                                       <!--<div class="form-group">
                                          <label for="on click url">From Place</label>
                                          <input type="text" name="fromPlace" class="form-control" value="<?php echo '<?php'; ?>
 echo $einvoice_res_data[0]->EwbDt; <?php echo '?>'; ?>
" id="">
                                          </div>
                                          <div class="form-group">
                                          <label for="on click url">From State<span class="text-danger">*</span></label>
                                          <input type="text" name="fromState" placeholder="State code" class="form-control" value="<?php echo '<?php'; ?>
 echo $einvoice_res_data[0]->e_way_bill_remark; <?php echo '?>'; ?>
" id="">
                                          </div> -->
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
                                             <!-- <option value="">Select</option> -->
                                             <option value="1" <?php if (($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '1')) {?>selected <?php }?>>Road</option>
                                             <option value="2" <?php if (($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '2')) {?>selected <?php }?>>Rail</option>
                                             <option value="3" <?php if (($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '3')) {?>selected <?php }?>>Air</option>
                                             <option value="4" <?php if (($_smarty_tpl->tpl_vars['new_sales']->value[0]->mode == '4')) {?>selected <?php }?>>Ship</option>
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
                                       <!-- <div class="form-group">
                                          <label for="on click url">Transaction Doc No<span class="text-danger"></span></label>
                                          <input type="text" id="transDocNo" name="transDocNo" maxLength="15" placeholder="Document No" class="form-control" value="">
                                          </div>
                                          <div class="form-group">
                                          <label for="on click url">Transaction Doc Date<span class="text-danger"></span></label>
                                          <input type="text" id="transDocDate" name="transDocDate" placeholder="Document Date" class="form-control" value="" 
                                          pattern="[0-3][0-9]/[0-1][0-9]/[2][0][1-2][0-9]"
                                          oninvalid="this.setCustomValidity('Transaction Document Date')" 
                                          onchange="this.setCustomValidity('')">
                                          </div> -->
                                 </div>
                                 <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                                 <div class="modal-body">
                                    <form action="<?php echo base_url('update_EWayBill_transporter');?>
" method="POST" enctype="multipart/form-data">
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
                                             <?php if (($_smarty_tpl->tpl_vars['transporter']->value)) {?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transporter']->value, 'tr');
$_smarty_tpl->tpl_vars['tr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tr']->value) {
$_smarty_tpl->tpl_vars['tr']->do_else = false;
?>
	                                             <option value="<?php echo $_smarty_tpl->tpl_vars['tr']->value->id;?>
" 
	                                                <?php if (($_smarty_tpl->tpl_vars['new_sales']->value[0]->transporter_id == $_smarty_tpl->tpl_vars['tr']->value->id)) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['tr']->value->name;?>
 - <?php echo $_smarty_tpl->tpl_vars['tr']->value->transporter_id;?>
</option>
	                                             <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>       
                                              <?php }?>
                                          </select>
                                       </div>
                                 </div>
                                 <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                                 <div class="modal-body">
                                    <form action="<?php echo base_url('cancel_eWayBill');?>
" method="POST">
                                       <input type="hidden" name="new_sales_id" value="<?php echo $_smarty_tpl->tpl_vars['sales_id']->value;?>
"   required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">
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
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	var base_url = <?php echo json_encode(base_url());?>

   $(document).ready(function() {
   
       var id = $("#customer_tracking").val();
       $('#new_po_id').val(id);
       var salesno = $('#sales_number').val();
       $.ajax({
           url: base_url+'Newcontroller/get_po_sales_parts',
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
               url: base_url+'Newcontroller/get_po_sales_parts',
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
><?php }
}
