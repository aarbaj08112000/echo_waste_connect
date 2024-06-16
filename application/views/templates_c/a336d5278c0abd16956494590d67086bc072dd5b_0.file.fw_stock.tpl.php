<?php
/* Smarty version 4.3.2, created on 2024-06-13 20:09:56
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/fw_stock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_666b04bc419c09_77389780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a336d5278c0abd16956494590d67086bc072dd5b' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/fw_stock.tpl',
      1 => 1718130178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666b04bc419c09_77389780 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
<div class="content-wrapper">
  <section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>FG Stocks</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">FW Stocks</li>
        </ol>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
              </h3>
            </div>
            <div class="card-header">
              <div class="row">
                <div class="col-lg-3">
                  <form action="<?php echo base_url('fw_stock');?>
" method="post">
                    <div class="form-group">
                      <label for="">Select Part <span class="text-danger">*</span></label>
                      <select class="form-control select2" name="part_id">
                        <?php if (($_smarty_tpl->tpl_vars['customer_parts']->value)) {?>
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_parts']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
		                        <option <?php if ($_smarty_tpl->tpl_vars['part_id']->value == $_smarty_tpl->tpl_vars['c']->value->id) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
</option>
		                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                      </select>
                    </div>
                </div>
                <div class="form-group mt-4">
                <button type="submit" class="btn btn-danger mt-1">
                Search
                </button>
                </form>  
                </div>
              </div>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Part Number</th>
                    <th>Part Description</th>
                    <th>Stock</th>
                    <th>Molding Production Qty</th>
                    <th>Production Rejection</th>
                    <th>Production Scrap</th>
                    <!--<th>Semi Finished Location</th>
                      <th>Deflashing Assembly</th> -->
                    <th>Final Inspection Location</th>
                    <th>Transfer To Inhouse Part</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $_smarty_tpl->_assignInScope('i', 1);?>
                    <?php if (($_smarty_tpl->tpl_vars['customer_parts_master']->value)) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_parts_master']->value, 'po');
$_smarty_tpl->tpl_vars['po']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->do_else = false;
?>
		                <tr>
		                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
		                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->part_number;?>
</td>
		                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->part_description;?>
</td>
		                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->fg_stock;?>
</td>
		                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->molding_production_qty;?>
</td>
		                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->production_rejection;?>
</td>
		                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->production_scrap;?>
</td>
		                    <td><?php echo $_smarty_tpl->tpl_vars['po']->value->final_inspection_location;?>
</td>
		                    <td>
		                      <?php if (($_smarty_tpl->tpl_vars['po']->value->fg_stock > 0)) {?>
				                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fgtransfer222<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
				                      Transfer To Inhouse
				                      </button>
		                      <?php } else { ?>
		                            <?php echo $_smarty_tpl->tpl_vars['po']->value->fg_stock;?>

		                      <?php }?>
		                      <div class="modal fade" id="fgtransfer222<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		                        <div class="modal-dialog" role="document">
		                          <div class="modal-content">
		                            <div class="modal-header">
		                              <h5 class="modal-title" id="exampleModalLabel">Transfer
		                                FG Stock to Inhouse Production Stock
		                              </h5>
		                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                              <span aria-hidden="true">&times;</span>
		                              </button>
		                            </div>
		                            <div class="modal-body">
		                              <div class="row">
		                                <div class="col-lg-12">
		                                  <form action="<?php echo base_url('transfer_fg_stock_to_inhouse_stock');?>
" method="POST" enctype="multipart/form-data">
		                                    <label for="">Enter Stock Qty <span class="text-danger">*</span>
		                                    </label>
		                                    <input type="number" step="any" class="form-control" value="" max="<?php echo $_smarty_tpl->tpl_vars['po']->value->stock;?>
" name="stock" required placeholder="Enter Transfer Qty">
		                                    <input type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['po']->value->part_number;?>
" name="part_number" required placeholder="Enter Transfer Qty">
		                                    <input type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['po']->value->id;?>
" name="customer_parts_master_id" required placeholder="Enter Transfer Qty">
		                                </div>
		                                <div class="col-lg-12">
		                                <label for="">Select Inhouse Part Number
		                                </label>
		                                <select name="inhouse_part_number" required id="" class="form-control select2">
		                                  <?php if (($_smarty_tpl->tpl_vars['inhouse_parts']->value)) {?>
		                                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inhouse_parts']->value, 'tt');
$_smarty_tpl->tpl_vars['tt']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tt']->value) {
$_smarty_tpl->tpl_vars['tt']->do_else = false;
?>
				                                <option value="<?php echo $_smarty_tpl->tpl_vars['tt']->value->part_number;?>
">
				                                <?php echo $_smarty_tpl->tpl_vars['tt']->value->part_number;?>
</option>
				                               <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			                               <?php }?>
		                                </select>
		                                </div>
		                              </div>
		                              <div class="modal-footer">
		                              <button type="button" class="btn btn-second" data-dismiss=" modal">Close</button>
		                              <button type="submit" class="btn btn-primary">Save
		                              changes</button>
		                              </form>
		                              </div>
		                            </div>
		                          </div>
		                        </div>
		                      </div>
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
