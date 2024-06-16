<?php
/* Smarty version 4.3.2, created on 2024-06-11 14:58:06
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/view_challan_by_id.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_666818a65bfd86_38635727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8ee9b56571f32aa875ebea4ee28643f8bfe7cd9' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/view_challan_by_id.tpl',
      1 => 1718097771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666818a65bfd86_38635727 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper" >

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
						<h1>View Challan</h1>
			        </div>
                </div>
            </div><!-- /.container-fluid -->
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
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Challan Number</label>
                                            <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['challan_data']->value[0]->challan_number;?>
" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Supplier Name</label>
                                            <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value[0]->supplier_name;?>
"class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Challan Date & Time</label>
                                            <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['challan_data']->value[0]->created_date;?>
 / <?php echo $_smarty_tpl->tpl_vars['challan_data']->value[0]->created_time;?>
" class="form-control">
                                        </div>
                                    </div>
									<div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['challan_data']->value[0]->status;?>
" class="form-control">
                                        </div>
                                    </div>
                                </div>
								<div class="row">
								<div class="col-lg-1">
                                        <div class="form-group">
                                            <a id="viewOriginal" class="btn btn-success mt-4" href="<?php echo base_url('view_challan_invoice/');
echo $_smarty_tpl->tpl_vars['challan_id']->value;?>
" target="_blank">View</a>
                                        </div>
                                </div>
                               
								<?php if (($_smarty_tpl->tpl_vars['challan_data']->value[0]->status == "completed")) {?>
                                    
                                    <div class="col-lg-1">
                                        <div class="form-group">
                                            <a id="orignalInvoice" class="btn btn-success mt-4" href="<?php echo base_url('view_challan_pdf/');
echo $_smarty_tpl->tpl_vars['challan_id']->value;?>
/ORIGINAL_FOR_RECIPIENT">Original</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="form-group">
                                            <a id="duplicateInvoice" class="btn btn-success mt-4" href="<?php echo base_url('view_challan_pdf/');
echo $_smarty_tpl->tpl_vars['challan_id']->value;?>
 /DUPLICATE_FOR_TRANSPORTER">Duplicate</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-1">
                                        <div class="form-group">
                                            <a id="triplicateInvoice" class="btn btn-success mt-4" href="<?php echo base_url('view_challan_pdf/');
echo $_smarty_tpl->tpl_vars['challan_id']->value;?>
/TRIPLICATE_FOR_SUPPLIER">Triplicate</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="form-group">
                                            <a id="ackInvoice" class="btn btn-success mt-4" href="<?php echo base_url('view_challan_pdf/');
echo $_smarty_tpl->tpl_vars['challan_id']->value;?>
/ACKNOWLEDGEMENT_COPY">Acknowledge</a>
                                        </div>
                                    </div>
									<div class="col-lg-1">
                                        <div class="form-group">
                                            <a id="extraaInvoice" class="btn btn-success mt-4" href="<?php echo base_url('view_challan_pdf/');
echo $_smarty_tpl->tpl_vars['challan_id']->value;?>
/EXTRA_COPY">Extra</a>
                                        </div>
                                    </div> 
                                    
							        </div>
                                    </div> <div class="card-header">
                                     <!-- Print selection -->
                                     <form action="<?php echo base_url('print_challan_invoice/');
echo $_smarty_tpl->tpl_vars['challan_id']->value;?>
" method="post">
                                     <div class="row" >  
                                     <div class="col-lg-1">
                                                <div class="form-group" style="margin-right: 2em;">    
                                                    <input type="checkbox" id="original" name="interests[]" value="ORIGINAL_FOR_RECIPIENT">
                                                    <label for="original">Original</label><br>
                                                </div> </div>
                                            <div class="col-lg-1">
                                                <div class="form-group" style="margin-right: 0em;">    
                                                    <input type="checkbox" id="duplicate" name="interests[]" value="DUPLICATE_FOR_TRANSPORTER">
                                                    <label for="duplicate">Duplicate</label><br>
                                                </div> </div>
                                            <div class="col-lg-1">
                                                <div class="form-group" style="margin-right: 0em;">   
                                                    <input type="checkbox" id="triplicate" name="interests[]" value="TRIPLICATE_FOR_SUPPLIER">
                                                    <label for="triplicate">Triplicate</label><br>
                                                </div> </div>
                                            <div>                                                                                      
                                                <div class="form-group" style="margin-right: 2em;">   
                                                    <input type="checkbox" id="acknowledge" name="interests[]" value="ACKNOWLEDGEMENT_COPY">
                                                    <label for="acknowledge">Acknowledge</label><br>
                                                </div> </div>
                                            <div class="col-lg-2">
                                                <div class="form-group" style="margin-right: 0em;">   
                                                    <input type="checkbox" id="extraCopy" name="interests[]" value="EXTRA_COPY">
                                                    <label for="extraCopy">EXTRA COPY</label><br>
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
							<!-- part add flow -->
							<?php if (($_smarty_tpl->tpl_vars['challan_data']->value[0]->status != "completed")) {?>
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <form action="<?php echo base_url('add_challan_parts');?>
" method="post">
                                                <label for="">Select Part Number // Description // Current Stock<span class="text-danger">*</span> </label>
                                                <select name="part_id" id="" required class="form-control select2">
                                                        <?php if (($_smarty_tpl->tpl_vars['child_part']->value)) {?>
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_part']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                            	<?php $_smarty_tpl->_assignInScope('part_stock', "0.00");?>
                                                            	<?php if (!empty($_smarty_tpl->tpl_vars['c']->value->stock)) {?>
                                                            		<?php $_smarty_tpl->_assignInScope('part_stock', $_smarty_tpl->tpl_vars['c']->value->stock);?>
                                                            	<?php }?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
                                                                        <?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
 // <?php echo $_smarty_tpl->tpl_vars['c']->value->part_description;?>
/<?php echo $_smarty_tpl->tpl_vars['part_stock']->value;?>

                                                                    </option>
                                                        
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        <?php }?>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Enter Qty <span class="text-danger">*</span> </label>
                                            <input type="number" step="any" name="qty" placeholder="Enter Qty " required class="form-control">
                                            <input type="hidden" name="challan_id" value="<?php echo $_smarty_tpl->tpl_vars['challan_data']->value[0]->id;?>
" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Select Process <span class="text-danger">*</span> </label>
                                            <select name="process" required id="" class="form-control select2">
                                                <?php if (($_smarty_tpl->tpl_vars['process']->value)) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['process']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value->name;?>
</option>
                                                   	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php }?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="form-group">
                                            <?php if (($_smarty_tpl->tpl_vars['challan_data']->value[0]->status != "completed")) {?>
                                                <button type="submit" class="btn btn-info mt-4">Add Part</button>
                                            <?php }?>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                           	<?php }?> <!-- end of part add flow --> 
								<div class="row">
									<div class="col-lg-2">
										<div class="form-group">
										<a href="<?php echo base_url('view_add_challan');?>
" class="btn btn-dark mt-4">
											< Back </a>
										</div>
									</div>
									<div class="col-lg-2">
										<div class="form-group">
								        <?php if (($_smarty_tpl->tpl_vars['challan_data']->value[0]->status != "completed" && !empty($_smarty_tpl->tpl_vars['challan_parts']->value))) {?>
                                            <button type="submit" data-toggle="modal" class="btn btn-danger mt-4" data-target="#challanCOmplete">
                                                Complete Challan
                                            </button>
											<div class="modal fade" id="challanCOmplete" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Change Status Of
                                                            Challan </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?php echo base_url('change_challan_status');?>
" method="POST">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label for="payment_terms">Are You Sure Want To
                                                                            Complete This Challan ? </label><span class="text-danger">*</span>
                                                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['challan_id']->value;?>
" name="challan_id" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bank Details">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-primary">Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }?>
							        </div>
								</div>
								</div>
							</div>				
                            <div class="card-header">
                                <?php if (($_smarty_tpl->tpl_vars['po_parts']->value)) {?>
                                    <?php if (($_smarty_tpl->tpl_vars['new_po']->value[0]->status == "pending")) {?>

                                        <?php if (($_smarty_tpl->tpl_vars['this']->value->session->userdata['type'] == 'admin' || $_smarty_tpl->tpl_vars['this']->value->session->userdata['type'] == 'Admin')) {?>
		                                    <button type="button" class="btn btn-danger ml-1" data-toggle="modal" data-target="#lock">
		                                                Lock PO
		                                            </button>
		                                <?php }?>
                                    <?php }?>
                                <?php }?>
                                <?php if (($_smarty_tpl->tpl_vars['new_po']->value[0]->status == "lock")) {?>
                                    <?php if (($_smarty_tpl->tpl_vars['this']->value->session->userdata['type'] == 'admin' || $_smarty_tpl->tpl_vars['this']->value->session->userdata['type'] == 'Admin')) {?>
                                        <button type="button" class="btn btn-success ml-1" data-toggle="modal" data-target="#accpet">
                                            Accept (Released) PO
                                        </button>
                                        <button type="button" class="btn btn-danger ml-1" data-toggle="modal" data-target="#delete">
                                            Reject (delete) PO
                                        </button>
                                    <?php }?>
                                <?php } else { ?>
                                    <?php if (($_smarty_tpl->tpl_vars['new_po']->value[0]->status != "pending")) {?>
                                      
                                	<?php }?>
                                <?php }?>
                                <!-- Modal -->
                                <div class="modal fade" id="accpet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <form action="<?php echo base_url('accept_po_sub');?>
" method="POST">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">

                                                                <label for=""><b>Are You Sure Want To Released This
                                                                        PO?</b> </label>
                                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->id;?>
" required class="form-control">
                                                                <input type="hidden" name="status" value="accpet" required class="form-control">
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update</button>

                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal fade" id="lock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="row">
                                                    <form action="<?php echo base_url('accept_po_sub');?>
" method="POST">

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for=""><b>Are You Sure Want To Lock This PO?</b>
                                                                </label>
                                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->id;?>
" required class="form-control">
                                                                <input type="hidden" name="status" value="lock" required class="form-control">
                                                            </div>
                                                        </div>
												</div>
											</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="row">
                                                    <form action="<?php echo base_url('delete_po');?>
" method="POST">

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for=""><b>Are You Sure Want To Delete This
                                                                        PO?</b> </label>
                                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->id;?>
" required class="form-control">
                                                                <input type="hidden" name="status" value="reject" required class="form-control">
                                                                <input type="hidden" name="table_name" value="new_po_sub" required class="form-control">
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update</button>

                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped" id="example1">
                                    <thead>

                                        <tr>
                                            <th>Sr No</th>
                                            <th>Part Number</th>
                                            <th>Part Description</th>
                                            <th>Qty </th>
                                            <th>Process</th>
                                            <th>HSN</th>
                                            <th>Value</th>
                                            <th>Remaining Qty </th>
                                            <th>Delete</th>
                                            <th>Action</th>
                                            <th>History</th>
                                        </tr>

                                    </thead>


                                    <tbody>

                                        <?php if (($_smarty_tpl->tpl_vars['challan_parts']->value)) {?>
                                            <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                            <?php $_smarty_tpl->_assignInScope('final_po_amount', 0);?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['challan_parts']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                                            	<?php $_smarty_tpl->_assignInScope('child_part_data', $_smarty_tpl->tpl_vars['p']->value->child_part_data);?>
                                                <?php $_smarty_tpl->_assignInScope('challan_parts_history_data', $_smarty_tpl->tpl_vars['p']->value->challan_parts_history_data);?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[0]->part_number;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[0]->part_description;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->process;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->hsn;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->value;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->remaning_qty;?>
</td>
                                                    <td>
                                                        <?php if (($_smarty_tpl->tpl_vars['challan_data']->value[0]->status != "completed")) {?>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-danger ml-1" data-toggle="modal" data-target="#deletePart<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                                Delete
                                                            </button>
                                                            <!-- Delete Modal -->
                                                            <div class="modal fade" id="deletePart<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Delete Part
                                                                            </h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <form action="<?php echo base_url('delete_challan_part');?>
" method="POST">
                                                                                    <div class="col-lg-12">
                                                                                        <div class="form-group">
                                                                                            <label for=""> <b>Are you sure want to
                                                                                                    delete this ? </b> </label>
                                                                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" required class="form-control">
                                                                                            <input type="hidden" name="table_name" value="challan_parts" required class="form-control">
																							<input type="hidden" name="part_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->part_id;?>
" required class="form-control">
																							<input type="hidden" name="partQty" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
" required class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                            <button type="submit" class="btn btn-primary">Delete</button>
                                                                        </div>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>


                                                        <?php } else { ?>
                                                            NA <?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->status;?>

                                                        <?php }?>


                                                    </td>
                                                    <td>
                                                        <?php if (($_smarty_tpl->tpl_vars['challan_parts_history_data']->value)) {?>
                                                            <?php if (($_smarty_tpl->tpl_vars['challan_parts_history_data']->value[0]->status == "completed")) {?>
                                                                Stock updated
                                                            <?php } else { ?>
                                                       			<button type="submit" data-toggle="modal" class="btn btn-sm btn-danger" data-target="#exampleModal2123<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                                    Accept Challan Qty
                                                                </button>
                                                            <?php }?>
                                                        <?php } else { ?>
                                                            <?php if (($_smarty_tpl->tpl_vars['p']->value->remaning_qty > 1)) {?>
                                                            	<button type="submit" data-toggle="modal" class="btn btn-sm btn-primary" data-target="#exampleModal2<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                                    Challan Return Qty
                                                                </button>

                                                         	<?php }?>
                                                        <?php }?>
                                                        
                                                        <div class="modal fade" id="exampleModal2123<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Accept
                                                                            Qty </h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <form action="<?php echo base_url('update_challan_parts_history_challan');?>
" method="POST">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="form-group">
                                                                                        <label for="payment_terms">Qty</label><span class="text-danger">*</span>
                                                                                        <input type="text" disabled value="<?php echo $_smarty_tpl->tpl_vars['challan_parts_history_data']->value[0]->qty;?>
" name="123" required class="form-control" placeholder="Supplier Challan Number">
                                                                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['challan_parts_history_data']->value[0]->qty;?>
" name="qty_main" required class="form-control" placeholder="Supplier Challan Number">
                                                                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['challan_parts_history_data']->value[0]->id;?>
" name="challan_parts_history_id" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bank Details">
                                                                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->part_id;?>
" name="part_id" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bank Details">
                                                                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->challan_id;?>
" name="challan_id" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bank Details">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-12">
                                                                                    <div class="form-group">
                                                                                        <label for="payment_terms">Enter Accept
                                                                                            Qty</label><span class="text-danger">*</span>
                                                                                        <input type="number" max="<?php echo $_smarty_tpl->tpl_vars['challan_parts_history_data']->value[0]->accepeted_qty;?>
" name="accepeted_qty" required class="form-control" placeholder="Enter Qty">
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <button type="submit" class="btn btn-primary">Save
                                                                                    changes</button>
                                                                            </div>
                                                                        </form>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal fade" id="exampleModal2<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Return
                                                                            Qty </h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <form action="<?php echo base_url('add_challan_parts_history_challan');?>
" method="POST">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="form-group">
                                                                                        <label for="payment_terms">Supplier
                                                                                            Challan Number</label><span class="text-danger">*</span>
                                                                                        <input type="text" name="supplier_challan_number" required class="form-control" placeholder="Supplier Challan Number">
                                                                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['challan_id']->value;?>
" name="challan_id" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bank Details">
                                                                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->part_id;?>
" name="part_id" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bank Details">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-12">
                                                                                    <div class="form-group">
                                                                                        <label for="payment_terms">Enter
                                                                                            Qty</label><span class="text-danger">*</span>
                                                                                        <input type="number" max="<?php echo $_smarty_tpl->tpl_vars['p']->value->remaning_qty;?>
" min="1" name="qty" required class="form-control" placeholder="Enter Qty">
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <button type="submit" class="btn btn-primary">Save
                                                                                    changes</button>
                                                                            </div>
                                                                        </form>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <a class="btn btn-info" href="<?php echo base_url('view_challan_parts_history/');
echo $_smarty_tpl->tpl_vars['p']->value->challan_id;?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value->part_id;?>
">History</a>
                                                    </td>
                                                </tr>
                                          <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php }?>


                                    </tbody>

                                    <tfoot>
                                        <?php if (($_smarty_tpl->tpl_vars['po_parts']->value)) {?>
                                        <tr>
                                                <th colspan="11">Total</th>
                                                <th><?php echo $_smarty_tpl->tpl_vars['final_po_amount']->value;?>
</th>

                                            </tr>
                                        <?php }?>
                                    </tfoot>

                                </table>

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
<!-- /.content-wrapper --><?php }
}
