<?php
/* Smarty version 4.3.2, created on 2024-08-27 16:42:46
  from '/var/www/html/extra_work/erp_converted/application/views/templates/store/inwarding_invoice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66cdb4aed296b0_16671358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05cb7f56a1aee245f92776ee4f5e126c6b7836b3' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/store/inwarding_invoice.tpl',
      1 => 1724755389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cdb4aed296b0_16671358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('isMultiClient', $_smarty_tpl->tpl_vars['session_data']->value['isMultipleClientUnits']);?>
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
   
    <nav aria-label="breadcrumb">
      <div class="sub-header-left pull-left breadcrumb">
        <h1>
        Inwarding
          <a hijacked="yes" href="javascript:void(0)" class="backlisting-link"  >
            <i class="ti ti-chevrons-right" ></i>
            <em >Part GRN</em></a>
            
          </h1>
          <br>
          <span >Inwarding PO Invoice Numbers</span>
        </div>
      </nav>
      <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4> -->

      <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
       
       
        <button type="button" class="btn btn-seconday" title="Add Invoice Number" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="ti ti-plus"></i></button>
          <a class="btn btn-seconday" type="button" href="<?php echo base_url('inwarding');?>
"><i class="ti ti-arrow-left" title="Back To Item Part List"></i></a>
          <!-- <a class="btn btn-dark" href="<?php echo base_url('inwarding');?>
">Back</a> -->
        <!-- <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button> -->
      </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Invoice Number</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

              </button>
            </div>
            <div class="modal-body">
              <form action="javascript:void(0)" method="POST" class="add_invoice_number custom-form">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="tool_number">Invoice Number </label><span class="text-danger">*</span>
                      <input type="text" name="invoice_number"  class="form-control required-input"  placeholder="Enter Invoice Number">
                      <input type="hidden" name="new_po_id" value="<?php echo $_smarty_tpl->tpl_vars['new_po_id']->value;?>
"  class="form-control"  placeholder="Enter Invoice Number">
                    </div>
                    <div class="form-group">
                      <label for="tool_number">Invoice Date </label><span class="text-danger">*</span>
                      <input type="date" name="invoice_date" max="<?php echo date('Y-m-d');?>
"  class="form-control required-input"  placeholder="Enter Invoice Number">
                    </div>
                    <div class="form-group">
                      <label for="tool_number">GRN Date </label><span class="text-danger">*</span>
                      <input type="date" name="grn_date" readonly value="<?php echo date('Y-m-d');?>
"  class="form-control required-input"  placeholder="Enter Invoice Number">
                    </div>
                    <div class="form-group">
                      <label for="">Vehicle No.</label>
                      <input type="text"
                      placeholder="Enter Vehicle No"
                      value=""
                      name="vehicle_number"
                      pattern="^([A-Z|a-z|0-9]{4,20})"
                      oninvalid="this.setCustomValidity('Please enter a valid vehicle number in the format XX00XX0000')"
                      onchange="this.setCustomValidity('')"
                      class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="tool_number">Transporter ID </label><span class="text-danger">*</span>
                      <input type="text" name="transporter" value="" class="form-control required-input"  placeholder="Enter transporter">
                    </div>
                    <!-- <php if($isMultiClient == "true") { <?php echo '?>'; ?>

                    <div class="form-group">
                    <label>Delivery Location</label><span class="text-danger">*</span><br>
                    <select name="deliveryUnit" required class="form-control select2" id="">
                    <option value="">Select</option>
                    <?php echo '<?php'; ?>

                    foreach ($client_list as $cl) {
                    <?php echo '?>'; ?>

                    <option value="<?php echo '<?php'; ?>
 echo $cl->client_unit <?php echo '?>'; ?>
">
                    <?php echo '<?php'; ?>
 echo $cl->client_unit; <?php echo '?>'; ?>

                  </option>
                  <?php echo '<?php'; ?>

                }
                <?php echo '?>'; ?>

              </select>
            </div>
            <php } <?php echo '?>'; ?>
 -->
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

      <!-- Main content -->
      <div class="card p-0 mt-4">
      
        <div class="table-responsive text-nowrap">
          <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped scrollable" style="border-collapse: collapse;" border-color="#e1e1e1" id="view_add_challan">

              <thead>
                <tr>
                  <!-- <th>Sr No</th> -->
                  <th>Invoice Number</th>
                  <th>Invoice Date</th>
                  <th>GRN Date</th>
                  <th>GRN Time</th>
                  <th>GRN Number </th>
                  <th>Vehicle No</th>
                  <th>Transporter</th>
                  <?php echo '<?php'; ?>
 if($isMultiClient == "true") { <?php echo '?>'; ?>

                    <th>Delivery Location</th>
                  <?php echo '<?php'; ?>
 } <?php echo '?>'; ?>

                  <th class="text-center">View Details</th>
                </tr>
              </thead>
              <tbody style="max-height: 20em;">
                <?php $_smarty_tpl->_assignInScope('i', 1);?>
                <?php if (($_smarty_tpl->tpl_vars['inwarding_data']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inwarding_data']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('grn_number', $_smarty_tpl->tpl_vars['t']->value->grn_number);?>
                <tr>
                  <!-- <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td> -->
                  <td><?php echo $_smarty_tpl->tpl_vars['t']->value->invoice_number;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['t']->value->invoice_date;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['t']->value->grn_date;?>
</td>

                  <?php if (($_smarty_tpl->tpl_vars['t']->value->created_dttm != null)) {?>
                  <?php $_smarty_tpl->_assignInScope('dateTime', convertDateTime($_smarty_tpl->tpl_vars['t']->value->created_dttm));?>
                  <?php $_smarty_tpl->_assignInScope('time', $_smarty_tpl->tpl_vars['dateTime']->value->format('H:i:s'));?>
                  <?php } else { ?>
                  <?php $_smarty_tpl->_assignInScope('time', 'Not available');?>
                  <?php }?>
                  <td><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['grn_number']->value;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['t']->value->vehicle_number;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['t']->value->transporter;?>
</td>
                  <?php if (($_smarty_tpl->tpl_vars['isMultiClient']->value == "true")) {?>
                  <td><?php echo $_smarty_tpl->tpl_vars['t']->value->delivery_unit;?>
</td>
                  <?php }?>
                  <td class="text-center">
                    <a href="<?php echo base_url('inwarding_details/');
echo $_smarty_tpl->tpl_vars['t']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['new_po_id']->value;?>
" class="btn btn-primary" href="">Inwarding Details</a>
                  </td>
                </tr>
                <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php } else { ?>
                <td colspan="9" class="text-center">No Data Found</td>
                <?php }?>
              </tbody>
            </table>


          
        </div>
        
      </div>
      <div class="card p-0 mt-4">
      <div class="tabTitle position-relative">
                <h2 id="cc_sh_sys_static_field_3" style="    width: 98%;
">
                    <span class="d-inline-block mt-3">
                    PO Parts
                    
                    </span>
                    <div class="  d-grid gap-2 d-md-flex justify-content-md-end " style="    float: inline-end;">

                <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
                <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
                
                 
              </div>
                    
                </h2>
                
            </div>
    
      <table id="inwardin_product" class="table table-striped">
      <thead>
        <tr>
          <!--<th>Sr No</th> -->
          <th>Part Number</th>
          <th>Part Description</th>
          <th>Balance QTY </th>
        </tr>
      </thead>

      <tbody>
        <?php $_smarty_tpl->_assignInScope('flag', 0);?>
        <?php if (($_smarty_tpl->tpl_vars['po_parts']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('final_po_amount', 0);?>
        <?php $_smarty_tpl->_assignInScope('i', 1);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['po_parts']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('qty', 0);?>
        <?php $_smarty_tpl->_assignInScope('qty', $_smarty_tpl->tpl_vars['p']->value->pending_qty);?>
        <?php $_smarty_tpl->_assignInScope('flag', $_smarty_tpl->tpl_vars['flag']->value+$_smarty_tpl->tpl_vars['qty']->value);?>
        <tr>
          <!--<td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>-->
          <td><?php echo $_smarty_tpl->tpl_vars['p']->value->child_part_data->part_number;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['p']->value->child_part_data->part_description;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['qty']->value;?>
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
public/js/store/inwarding_invoice.js"><?php echo '</script'; ?>
>
<?php }
}
