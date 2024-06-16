<?php
/* Smarty version 4.3.2, created on 2024-06-11 17:35:11
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/view_challan_by_id_subcon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66683d776fd267_77725634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0993e69a298da81d8ac7b684a923cd69c8af1a2d' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/view_challan_by_id_subcon.tpl',
      1 => 1718107510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66683d776fd267_77725634 (Smarty_Internal_Template $_smarty_tpl) {
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
          <div class="col-sm-6">
            <a href="<?php echo base_url('view_add_challan_subcon');?>
" class="btn btn-danger">
            < Back </a>
            <?php $_smarty_tpl->_assignInScope('expired', "no");?>
            <?php if (($_smarty_tpl->tpl_vars['new_po']->value[0]->expiry_po_date > date('Y-m-d'))) {?>
                <?php $_smarty_tpl->_assignInScope('expired', "yes");?>
            <?php } else { ?>
                 
            <?php }?>
          </div>
          <div class="col-sm-6">
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
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label for="">Challan Number <span class="text-danger">*</span> </label>
                      <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['challan_data']->value[0]->challan_number;?>
" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">Customer Name <span class="text-danger">*</span> </label>
                      <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->customer_name;?>
" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label for="">Challan Date & Time <span class="text-danger">*</span>
                      </label>
                      <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['challan_data']->value[0]->created_date;?>
 / <?php echo $_smarty_tpl->tpl_vars['challan_data']->value[0]->created_time;?>
" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <?php if (($_smarty_tpl->tpl_vars['challan_data']->value[0]->status != "completed")) {?>
	                    <button type="submit" data-toggle="modal" class="btn btn-sm btn-dark mt-4" data-target="#challanCOmplete">
	                    Complete Challan
	                    </button>
                    <?php }?>
                    <div class="modal fade" id="challanCOmplete" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Change Status Of
                              Challan 
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="<?php echo base_url('change_challan_status_subcon');?>
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
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save
                                changes</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-5">
                    <div class="form-group">
                      <form action="<?php echo base_url('add_challan_parts_subcon');?>
" method="post">
                        <label for="">Select Part Number // Description // Current Stock<span class="text-danger">*</span> </label>
                        <select name="part_id" id="" required class="form-control select2">
                          <?php if (($_smarty_tpl->tpl_vars['challan_data']->value[0]->status == "completed")) {?>
                                Challan Completed
                          <?php } else { ?>
		                        <?php if (($_smarty_tpl->tpl_vars['child_part']->value)) {?>
		                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_part']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
		                                    <?php if (($_smarty_tpl->tpl_vars['c']->value->sub_type == "customer_bom")) {?>
					                          <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
					                            <?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
 // <?php echo $_smarty_tpl->tpl_vars['c']->value->part_description;?>
/ <?php echo $_smarty_tpl->tpl_vars['c']->value->child_part_data[0]->stock;?>

					                          </option>
				                            <?php }?>
		                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		                        <?php }?>
		                            
                         <?php }?>
                        </select>
                    </div>
                  </div>
                  <div class="col-lg-2">
                  <div class="form-group">
                  <label for="">Enter input Qty <span class="text-danger">*</span> </label>
                  <input type="number" step="any" name="qty" placeholder="Enter QTY " required class="form-control">
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
                  <div class="col-lg-2">
                  <div class="form-group">
                  <?php if (($_smarty_tpl->tpl_vars['challan_data']->value[0]->status == "completed")) {?>
                       Challan Completed
                  <?php } else { ?>
	                  <button type="submit" class="btn btn-info btn-lg mt-4">Add Part TO
	                  challan</button>
                  <?php }?>
                  </div>
                  </div>
                  </form>
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
                      <th>Edit / Delete</th>
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
			                    <tr>
			                      <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
			                      <td><?php echo $_smarty_tpl->tpl_vars['p']->value->part_number;?>
</td>
			                      <td><?php echo $_smarty_tpl->tpl_vars['p']->value->part_description;?>
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
					                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModa123123123123l<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
					                        Edit
					                        </button>
					                        <button type="button" class="btn btn-danger ml-1" data-toggle="modal" data-target="#exampleModaldelet213123e<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
					                        Delete
					                        </button>
					                        <!-- Modal -->
					                        <div class="modal fade" id="exampleModa123123123123l<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					                          <div class="modal-dialog">
					                            <div class="modal-content">
					                              <div class="modal-header">
					                                <h5 class="modal-title" id="exampleModalLabel">Update
					                                </h5>
					                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					                                <span aria-hidden="true">&times;</span>
					                                </button>
					                              </div>
					                              <div class="modal-body">
					                                <div class="row">
					                                  <div class="col-lg-12">
					                                    <div class="form-group">
					                                      <form action="<?php echo base_url('update_challan_parts_subcon');?>
" method="POST">
					                                        <label for="">Enter Qty <span class="text-danger">*</span>
					                                        </label>
					                                        <input type="number" name="qty" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
" placeholder="Enter QTY " required class="form-control">
					                                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" placeholder="Enter QTY " required class="form-control">
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
					                        <!-- Modal -->
					                        <div class="modal fade" id="exampleModaldelet213123e<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" aria-labelledby="" aria-hidden="true">
					                          <div class="modal-dialog">
					                            <div class="modal-content">
					                              <div class="modal-header">
					                                <h5 class="modal-title" id="exampleModalLabel">Delete
					                                </h5>
					                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					                                <span aria-hidden="true">&times;</span>
					                                </button>
					                              </div>
					                              <div class="modal-body">
					                                <div class="row">
					                                  <form action="<?php echo base_url('delete');?>
" method="POST">
					                                    <div class="col-lg-12">
					                                      <div class="form-group">
					                                        <label for=""> <b>Are You Sure Want To
					                                        Delete This ? </b> </label>
					                                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" required class="form-control">
					                                        <input type="hidden" name="table_name" value="challan_parts_subcon" required class="form-control">
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
			                        <?php } else { ?>
			                          Can't Update , This  is <?php echo $_smarty_tpl->tpl_vars['new_sales']->value[0]->status;?>

			                        <?php }?>
			                      </td>
			                      <td>
			                        <?php if (($_smarty_tpl->tpl_vars['p']->value->challan_parts_history_id != '')) {?>
			                              <?php if (($_smarty_tpl->tpl_vars['p']->value->challan_parts_history_status == "completed")) {?>
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
			                                  Qty 
			                                </h5>
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
			                                        <input type="text" disabled value="<?php echo $_smarty_tpl->tpl_vars['p']->value->challan_parts_history_qty;?>
" name="123" required class="form-control" placeholder="Supplier Challan Number">
			                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->challan_parts_history_qty;?>
" name="qty_main" required class="form-control" placeholder="Supplier Challan Number">
			                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->challan_parts_history_id;?>
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
			                                        <input type="number" max="<?php echo $_smarty_tpl->tpl_vars['p']->value->challan_parts_history_accepeted_qty;?>
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
			                                  Qty 
			                                </h5>
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
			                        <a class="btn btn-info" href="<?php echo base_url('view_challan_parts_history_subcon/');
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
