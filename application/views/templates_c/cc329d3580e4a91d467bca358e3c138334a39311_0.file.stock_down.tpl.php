<?php
/* Smarty version 4.3.2, created on 2024-06-12 00:20:40
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/stock_down.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66689c80a646f2_59784547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc329d3580e4a91d467bca358e3c138334a39311' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/stock_down.tpl',
      1 => 1718131840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66689c80a646f2_59784547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('isMultiClient', $_smarty_tpl->tpl_vars['session_data']->value['isMultipleClientUnits']);?>
<div class="wrapper">
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Material Transfer Requests</h1>
          <?php $_smarty_tpl->_assignInScope('role', trim($_smarty_tpl->tpl_vars['session_data']->value['type']));?>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>
">Home</a></li>
            <li class="breadcrumb-item active">Material Transfer Requests</li>
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
              <h3 class="card-title">
              </h3>
              <!-- Button trigger modal -->
              <?php if (($_smarty_tpl->tpl_vars['role']->value == "Admin" || $_smarty_tpl->tpl_vars['role']->value == "production")) {?>
	              <button type="button" class="btn btn-primary float-left" data-toggle="modal"
	                data-target="#exampleModal">
	              New Request</button>
              <?php }?>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Material Transfer Request</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="<?php echo base_url('add_stock_up');?>
" method="POST"
                      enctype='multipart/form-data'>
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label for="po_num">Select Part Number / Description
                            <?php if (($_smarty_tpl->tpl_vars['isMultiClient']->value == "true")) {?>
                              / Stock 
                            <?php }?>
                            </label><span class="text-danger">*</span>
                            <select name="part_id" required class="from-control select2">
                              <option value="">Select</option>
                              <?php if (($_smarty_tpl->tpl_vars['child_part']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_part']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                        <?php if (($_smarty_tpl->tpl_vars['c']->value->stock > 0)) {?>
			                              <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
			                                <?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
/ <?php echo $_smarty_tpl->tpl_vars['c']->value->part_description;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value->stock;?>

			                              </option>
		                                <?php }?>
		                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </select>
                          </div>
                          <?php if (($_smarty_tpl->tpl_vars['isMultiClient']->value == "true")) {?>
	                          <div class="form-group">
	                            <label>Transfer From Unit</label><span class="text-danger">*</span><br>
	                            <select name="clientUnitFrom" id="clientIdFrom" required disabled class="form-control select2">
	                              <option value="">Select</option>
	                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['client_list']->value, 'cl');
$_smarty_tpl->tpl_vars['cl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cl']->value) {
$_smarty_tpl->tpl_vars['cl']->do_else = false;
?>
		                              <option value="<?php echo $_smarty_tpl->tpl_vars['cl']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['cl']->value->client_unit;?>
"
		                                <?php if (($_smarty_tpl->tpl_vars['clintUnitId']->value == $_smarty_tpl->tpl_vars['cl']->value->id)) {?>selected <?php }?>
		                                ><?php echo $_smarty_tpl->tpl_vars['cl']->value->client_unit;?>

		                              </option>
	                              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	                            </select>
	                          </div>
	                          <div class="form-group">
	                            <label for="po_num">Transfer To Unit<span
	                              class="text-danger">*</span></label>
	                            <select name="clientUnitTo" id="clientIdTo" class="form-control select2">
	                            </select>
	                          </div>
                          <?php } else { ?>
	                          <input type="hidden" name="type" value="stock" placeholder="Unit from" name="clientUnitFrom" required
	                            class="form-control">
	                          <input type="hidden" name="type" value="production_qty" placeholder="Unit to" name="clientUnitTo" required
                            class="form-control">
                          <?php }?>
                          <div class="form-group">
                            <label for="po_num">Enter Reason <span
                              class="text-danger">*</span></label>
                            <input type="text" name="reason" required
                              placeholder="Enter Reason" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="po_num">Upload document</label>
                            <input type="file" name="uploading_document"
                              class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="po_num">Enter Qty <span
                              class="text-danger">*</span></label>
                            <input type="number" name="qty" step="any"
                              placeholder="Enter Qty" name="qty" required
                              class="form-control">
                            <input type="hidden" name="type" value="minus" step="any"
                              placeholder="Enter Qty" name="qty" required
                              class="form-control">
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Request Number</th>
                    <th>Part Number / Description</th>
                    <th>Request Qty</th>
                    <th>UOM</th>
                    <th>Reason</th>
                    <th>Document</th>
                    <th>Request Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $_smarty_tpl->_assignInScope('i', 1);?>
                    <?php if (($_smarty_tpl->tpl_vars['stock_changes']->value)) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stock_changes']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
	                            <?php if (($_smarty_tpl->tpl_vars['c']->value->type == "minus")) {?>
					                  <tr>
						                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
						                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
</td>
						                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value->part_description;?>
</td>
						                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->qty;?>
</td>
						                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->uom_name;?>
</td>
						                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->reason;?>
</td>
						                    <td>
						                      <?php if ((empty($_smarty_tpl->tpl_vars['c']->value->uploading_document))) {?>
						                        
						                      <?php } else { ?>
							                      <a class="btn btn-dark" download
							                        href="<?php echo base_url('documents/');
echo $_smarty_tpl->tpl_vars['c']->value->uploading_document;?>
">Download</a>
							                  <?php }?>
						                    </td>
						                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->created_date;?>
</td>
						                    <td>
						                      <?php if (($_smarty_tpl->tpl_vars['c']->value->status == "pending")) {?>
							                      <a class="btn btn-warning"
							                        href="<?php echo base_url('remove_stock/');
echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">Click To Transfer Stock</a>
						                      <?php } else { ?>
						                          stock transferred
						                      <?php }?>
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
>
	var url = <?php echo json_encode(site_url("P_Molding/get_filtered_clientUnit"));?>
;
  $(document).ready(function() {
     // $("#clientIdFrom").change(function() {
      var client_id = $("#clientIdFrom").val();
      $.ajax({
          url: url,
          type: "POST",
          data: {
              clientUnitFrom: client_id
          },
          cache: false,
          beforeSend: function() {},
          success: function(response) {
              if (response) {
                  $('#clientIdTo').html(response);
              } else {
                  $('#clientIdTo').html(response);
              }
  
          }
      });
  
  });
<?php echo '</script'; ?>
><?php }
}
