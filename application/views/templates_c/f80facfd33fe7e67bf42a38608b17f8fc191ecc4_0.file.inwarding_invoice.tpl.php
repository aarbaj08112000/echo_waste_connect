<?php
/* Smarty version 4.3.2, created on 2024-06-11 10:01:11
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/inwarding_invoice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6667d30f0b97b7_34645354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f80facfd33fe7e67bf42a38608b17f8fc191ecc4' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/inwarding_invoice.tpl',
      1 => 1718080262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6667d30f0b97b7_34645354 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('isMultiClient', $_smarty_tpl->tpl_vars['session_data']->value['isMultipleClientUnits']);?>
<div class="wrapper">
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Inwarding PO Invoice Numbers</h1>
            </div>
            <!--<div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><a href="#">Home</a></li>
                   <li class="breadcrumb-item active">Inwarding</li>
               </ol>
               </div>-->
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
                     <!-- Button trigger modal -->
                     
                    <?php if (($_smarty_tpl->tpl_vars['flag']->value == 0)) {?>
		                     <hr>
		                    <div class="alert-warning">
		                        <div class="alert">
		                           Note: Can not add invoice number as all parts balance qty is zero.
		                        </div>
		                     </div>
		                     <a class="btn btn-dark" href="<?php echo base_url('inwarding');?>
">
		                     < Back</a>
		            <?php } else { ?> 
		                     <a class="btn btn-dark" href="<?php echo base_url('inwarding');?>
">
		                     < Back</a>
		                     <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
		                     Add Invoice Number</button>
	                <?php }?>
                     <!-- Modal -->
                    <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog " role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Add Invoice Number</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 <form action="<?php echo base_url('add_invoice_number');?>
" method="POST">
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="form-group">
                                             <label for="tool_number">Invoice Number </label><span class="text-danger">*</span>
                                             <input type="text" name="invoice_number" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Invoice Number">
                                             <input type="hidden" name="new_po_id" value="<?php echo $_smarty_tpl->tpl_vars['new_po_id']->value;?>
" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Invoice Number">
                                          </div>
                                          <div class="form-group">
                                             <label for="tool_number">Invoice Date </label><span class="text-danger">*</span>
                                             <input type="date" name="invoice_date" max="<?php echo date('Y-m-d');?>
" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Invoice Number">
                                          </div>
                                          <div class="form-group">
                                             <label for="tool_number">GRN Date </label><span class="text-danger">*</span>
                                             <input type="date" name="grn_date" readonly value="<?php echo date('Y-m-d');?>
" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Invoice Number">
                                          </div>
                                          <div class="form-group">
                                             <label for="">Vehicle No.</label>
                                             <input type="text" 
                                                placeholder="Enter Vehicle No" 
                                                value="" 
                                                name="vehicle_number" 
                                                pattern="^([A-Z|a-z|0-9]{4,20})$"
                                                oninvalid="this.setCustomValidity('Please enter a valid vehicle number in the format XX00XX0000')" 
                                                onchange="this.setCustomValidity('')"
                                                class="form-control">
                                          </div>
                                          <div class="form-group">
                                             <label for="tool_number">Transporter ID </label><span class="text-danger">*</span>
                                             <input type="text" name="transporter" value="" class="form-control" id="transporter" aria-describedby="emailHelp" placeholder="Enter transporter">
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
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                       <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Sr No</th>
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

                              <th>View Details</th>
                           </tr>
                        </thead>
                        <tbody>
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
		                              <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
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
		                              <td>
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
                          <?php }?>
                        </tbody>
                     </table>
                  </div>
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Sr No</th>
                              <th>Part Number</th>
                              <th>Part Description</th>
                              <th>Balance QTY </th>
                           </tr>
                        </thead>
                        <tfoot>
                           <tr>
                              <th>Sr No</th>
                              <th>Part Number</th>
                              <th>Part Description</th>
                              <th>Balance QTY </th>
                           </tr>
                        </tfoot>
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
			                              <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
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
