<?php
/* Smarty version 4.3.2, created on 2024-06-14 12:02:21
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/details_production_qty_sharing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_666be3f5877853_34726777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df3d7fb6f64113905b6814ca45a35ebf9e45782b' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/details_production_qty_sharing.tpl',
      1 => 1718344246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666be3f5877853_34726777 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Production Details - Sharing</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard');?>
">Home</a></li>
                  <li class="breadcrumb-item active">Assets</li>
               </ol>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>
   <section class="content">
      <div>
         <div class="row">
            <br>
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header">
                     <a class="btn btn-dark" href="<?php echo base_url('sharing_p_q');?>
">
                     < Back </a>
                     <hr>
                     <div class="row">
                        <div class="col-lg-2">
                           <label for="">Status</label>
                           <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['sharing_p_q']->value[0]->status;?>
"
                              class="form-control">
                        </div>
                        <div class="col-lg-2">
                           <label for="">Shifts Data</label>
                           <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['sharing_p_q']->value[0]->shift_name;?>
"
                              class="form-control">
                        </div>
                        <div class="col-lg-2">
                           <label for="">Machine Data</label>
                           <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['sharing_p_q']->value[0]->machine_name;?>
" 
                              class="form-control">
                        </div>
                        <div class="col-lg-2">
                           <label for="">Operator Data</label>
                           <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['sharing_p_q']->value[0]->op_name;?>
" 
                              class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="card-header">
                     <form action="<?php echo base_url('add_sharing_p_q_history');?>
" method="POST">
                        <div class="row">
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label> Select Output Part
                                 </label><span class="text-danger">*</span>
                                 <select class="form-control select2" name="output_part_id"
                                    style="width: 100%;">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_part_list']->value, 'c1');
$_smarty_tpl->tpl_vars['c1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c1']->value) {
$_smarty_tpl->tpl_vars['c1']->do_else = false;
?>
                                           <?php if (($_smarty_tpl->tpl_vars['c1']->value->sub_type != "RM")) {?>
		                                    <option value="<?php echo $_smarty_tpl->tpl_vars['c1']->value->childPartId;?>
">
		                                       <?php echo $_smarty_tpl->tpl_vars['c1']->value->part_number;?>
/<?php echo $_smarty_tpl->tpl_vars['c1']->value->part_description;?>

		                                    </option>
		                                   <?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-3">
                              <div class="form-group">
                                 <label for="operation_name">Enter Qty</label><span class="text-danger">*</span>
                                 <input type="number" step="any" min="1" value="1" name="qty"
                                    class="form-control" required id="exampleInputPassword1"
                                    placeholder="Enter Qty ">
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group">
                                 <label for="operation_name">Scrap
                                 Quantity (kg)
                                 </label><span class="text-danger">*</span>
                                 <input type="number" step="any" min="0" value="0" name="scrap_factor"
                                    class="form-control" required id="exampleInputPassword1"
                                    placeholder="Operation Name ">
                                 <input type="hidden" name="sharing_p_q_id"
                                    value="<?php echo $_smarty_tpl->tpl_vars['sharing_p_q_id']->value;?>
" class="form-control" required
                                    id="exampleInputPassword1" placeholder="Operation Name ">
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label> Select Input Part / sharing qty
                                 </label><span class="text-danger">*</span>
                                 <select class="form-control select2" name="input_part_id"
                                    style="width: 100%;">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_part_list']->value, 'c1');
$_smarty_tpl->tpl_vars['c1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c1']->value) {
$_smarty_tpl->tpl_vars['c1']->do_else = false;
?>
                                           	<?php if (($_smarty_tpl->tpl_vars['c1']->value->sub_type == "RM")) {?>
		                                    <option value="<?php echo $_smarty_tpl->tpl_vars['c1']->value->childPartId;?>
">
		                                       <?php echo $_smarty_tpl->tpl_vars['c1']->value->part_number;?>
/<?php echo $_smarty_tpl->tpl_vars['c1']->value->part_description;?>
 / <?php echo $_smarty_tpl->tpl_vars['c1']->value->{$_smarty_tpl->tpl_vars['sharingQtyColName']->value};?>

		                                    </option>
		                                    <?php }?>
                                       	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-2">
                              <div class="form-group ml-2 mt-4">
                                 <button type="submit" class="btn btn-info" data-dismiss="modal">Add
                                 </button>
                     </form>
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
                              <th>Output Part Number / Description</th>
                              <th>Input Part Number / Description</th>
                              <th>Scrap</th>
                              <th>Qty</th>
                              <th>Qty In Kg</th>
                              <th>Accepted Qty</th>
                              <th>Rejected Qty</th>
                              <th>Onhold Qty</th>
                              <th>Status</th>
                              <th>Actions</th>
                           </tr>
                        </thead>
                        <tbody>
						    <?php if (($_smarty_tpl->tpl_vars['sharing_p_q_history']->value)) {?>
						        <?php $_smarty_tpl->_assignInScope('i', 1);?>
						          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sharing_p_q_history']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
									<tr>
									      <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
									      <td><?php echo $_smarty_tpl->tpl_vars['u']->value->output_part_no;?>
 /
									         <?php echo $_smarty_tpl->tpl_vars['u']->value->output_part_desc;?>

									      </td>
									      <td><?php echo $_smarty_tpl->tpl_vars['u']->value->input_part_no;?>
 /
									         <?php echo $_smarty_tpl->tpl_vars['u']->value->input_part_desc;?>

									      </td>
									      <td><?php echo $_smarty_tpl->tpl_vars['u']->value->scrap_factor;?>
</td>
									      <td><?php echo $_smarty_tpl->tpl_vars['u']->value->qty;?>
</td>
									      <td><?php echo $_smarty_tpl->tpl_vars['u']->value->qty_in_kg;?>
</td>
									      <td><?php echo $_smarty_tpl->tpl_vars['u']->value->accepted_qty;?>
</td>
									      <td><?php echo $_smarty_tpl->tpl_vars['u']->value->rejected_qty;?>
</td>
									      <td>
									         <?php if ((!empty($_smarty_tpl->tpl_vars['u']->value->onhold_qty))) {?>
										         <button type="button" class="btn btn-warning float-left " data-toggle="modal"
										            data-target="#onhold<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
										        	 <?php echo $_smarty_tpl->tpl_vars['u']->value->onhold_qty;?>

										       	 </button>
									         <?php } else { ?>
									            0
									         <?php }?>
									         <div class="modal fade" id="onhold<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" role="dialog"
									            aria-labelledby="exampleModalLabel" aria-hidden="true">
									            <div class="modal-dialog modal-lg" role="document">
									               <div class="modal-content">
									                  <div class="modal-header">
									                     <h5 class="modal-title" id="exampleModalLabel">
									                        Onhold
									                        Update 
									                     </h5>
									                     <button type="button" class="close" data-dismiss="modal"
									                        aria-label="Close">
									                     <span aria-hidden="true">&times;</span>
									                     </button>
									                  </div>
									                  <div class="modal-body">
									                     <form action="<?php echo base_url('update_p_q_onhold_sharing');?>
"
									                        method="POST" enctype='multipart/form-data' s>
									                        <div class="row">
									                           <div class="col-lg-12">
									                              <div class="form-group">
									                                 <label for="">Qty</label>
									                                 <input type="number" step="any"
									                                    value="<?php echo $_smarty_tpl->tpl_vars['u']->value->onhold_qty;?>
" readonly
									                                    class="form-control">
									                              </div>
									                           </div>
									                           <div class="col-lg-12">
									                              <div class="form-group">
									                                 <label for="">Accept Qty <span
									                                    class="text-danger">*</span>
									                                 </label>
									                                 <input type="number" step="any" value=""
									                                    max="<?php echo $_smarty_tpl->tpl_vars['u']->value->onhold_qty;?>
" min="0"
									                                    class="form-control" name="accepted_qty"
									                                    placeholder="Enter Accepted Quantity" required>
									                              </div>
									                           </div>
									                           <div class="col-lg-12">
									                              <div class="form-group">
									                                 <label for="">Rejection
									                                 Reason</label>
									                                 <select name="rejection_reason" id=""
									                                    class="form-control select2">
									                                    <option value="NA">NA</option>
									                                    <?php if (($_smarty_tpl->tpl_vars['reject_remark']->value)) {?>
									                                       	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reject_remark']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
											                                    <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>
">
											                                       <?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>

											                                    </option>
											                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									                                    <?php }?>
									                                 </select>
									                              </div>
									                           </div>
									                           <div class="col-lg-12">
									                              <div class="form-group">
									                                 <label for="">Reject Remark</label>
									                                 <input type="text"
									                                    placeholder="Enter Rejection Remark If any"
									                                    class="form-control" name="rejection_remark">
									                                 <input type="hidden"
									                                    placeholder="Enter Rejection Remark If any"
									                                    readonly class="form-control" name="id"
									                                    value="<?php echo $_smarty_tpl->tpl_vars['u']->value->id;?>
">
									                                 <input type="hidden"
									                                    placeholder="Enter Rejection Remark If any"
									                                    readonly class="form-control" name="qty"
									                                    value="<?php echo $_smarty_tpl->tpl_vars['u']->value->onhold_qty;?>
">
									                                 <input type="hidden"
									                                    placeholder="Enter Rejection Remark If any"
									                                    readonly class="form-control"
									                                    name="output_part_id"
									                                    value="<?php echo $_smarty_tpl->tpl_vars['u']->value->output_part_id;?>
">
									                                 <input type="hidden"
									                                    placeholder="Enter Rejection Remark If any"
									                                    readonly class="form-control"
									                                    name="accepted_qty_old"
									                                    value="<?php echo $_smarty_tpl->tpl_vars['u']->value->accepted_qty;?>
">
									                                 <input type="hidden"
									                                    placeholder="Enter Rejection Remark If any"
									                                    readonly class="form-control"
									                                    name="rejected_qty_old"
									                                    value="<?php echo $_smarty_tpl->tpl_vars['u']->value->rejected_qty;?>
">
									                              </div>
									                           </div>
									                        </div>
									                        <div class="modal-footer">
									                           <button type="button" class="btn btn-secondary"
									                              data-dismiss="modal">Close</button>
									                           <button type="submit" class="btn btn-primary">Save
									                           changes</button>
									                        </div>
									                  </div>
									                  </form>
									               </div>
									            </div>
									         </div>
									      </td>
									      <td><?php echo $_smarty_tpl->tpl_vars['u']->value->status;?>
</td>
									      <td>
									         <?php if (($_smarty_tpl->tpl_vars['u']->value->status == "pending")) {?>
										         <button type="button" class="btn btn-danger float-left" data-toggle="modal"
										            data-target="#acceptReject<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
										         Accept/Reject </button>
										     <?php } else { ?>
									             Completed
									          <?php }?>
									         <div class="modal fade" id="acceptReject<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1"
									            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									            <div class="modal-dialog modal-lg" role="document">
									               <div class="modal-content">
									                  <div class="modal-header">
									                     <h5 class="modal-title" id="exampleModalLabel">Accept/Reject</h5>
									                     <button type="button" class="close" data-dismiss="modal"
									                        aria-label="Close">
									                     <span aria-hidden="true">&times;</span>
									                     </button>
									                  </div>
									                  <div class="modal-body">
									                     <form action="<?php echo base_url('update_p_q_sharing');?>
"
									                        method="POST" enctype='multipart/form-data' s>
									                        <div class="row">
									                           <div class="col-lg-12">
									                              <div class="form-group">
									                                 <label for="">Qty</label>
									                                 <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->qty;?>
"
									                                    readonly class="form-control">
									                              </div>
									                           </div>
									                           <div class="col-lg-12">
									                              <div class="form-group">
									                                 <label for="">Accept Qty <span
									                                    class="text-danger">*</span>
									                                 </label>
									                                 <input type="number" value=""
									                                    max=" <?php echo $_smarty_tpl->tpl_vars['u']->value->qty;?>
" min="0"
									                                    class="form-control" name="accepted_qty"
									                                    placeholder="Enter Accepted Quantity" required>
									                              </div>
									                           </div>
									                           <div class="col-lg-12">
									                              <div class="form-group">
									                                 <label for="">Onhold Qty <span
									                                    class="text-danger">*</span>
									                                 </label>
									                                 <input type="number" value=""
									                                    max=" <?php echo $_smarty_tpl->tpl_vars['u']->value->qty;?>
" min="0"
									                                    class="form-control" name="onhold_qty"
									                                    placeholder="Enter onhold" required>
									                              </div>
									                           </div>
									                           <div class="col-lg-12">
									                              <div class="form-group">
									                                 <label for="">Rejection Reason</label>
									                                 <select name="rejection_reason" id=""
									                                    class="form-control select2">
									                                    <option value="NA">NA</option>
									                                    <?php if (($_smarty_tpl->tpl_vars['reject_remark']->value)) {?>
										                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reject_remark']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
										                                    <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>
">
										                                       <?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>

										                                    </option>
										                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									                                    <?php }?>
									                                 </select>
									                              </div>
									                           </div>
									                           <div class="col-lg-12">
									                              <div class="form-group">
									                                 <label for="">Reject Remark</label>
									                                 <input type="text"
									                                    placeholder="Enter Rejection Remark If any"
									                                    class="form-control" name="rejection_remark">
									                                 <input type="hidden"
									                                    placeholder="Enter Rejection Remark If any"
									                                    readonly class="form-control" name="id"
									                                    value="<?php echo $_smarty_tpl->tpl_vars['u']->value->id;?>
">
									                                 <input type="hidden"
									                                    placeholder="Enter Rejection Remark If any"
									                                    readonly class="form-control" name="qty"
									                                    value="<?php echo $_smarty_tpl->tpl_vars['u']->value->qty;?>
">
									                                 <input type="hidden"
									                                    placeholder="Enter Rejection Remark If any"
									                                    readonly class="form-control"
									                                    name="output_part_id"
									                                    value="<?php echo $_smarty_tpl->tpl_vars['u']->value->output_part_id;?>
">
									                                 <input type="hidden"
									                                    placeholder="Enter Rejection Remark If any"
									                                    readonly class="form-control"
									                                    name="input_part_id"
									                                    value="<?php echo $_smarty_tpl->tpl_vars['u']->value->input_part_id;?>
">
									                                 <input type="hidden"
									                                    placeholder="Enter Rejection Remark If any"
									                                    readonly class="form-control" name="    "
									                                    value="<?php echo $_smarty_tpl->tpl_vars['u']->value->qty_in_kg;?>
">
									                              </div>
									                           </div>
									                        </div>
									                        <div class="modal-footer">
									                           <button type="button" class="btn btn-secondary"
									                              data-dismiss="modal">Close</button>
									                           <button type="submit" class="btn btn-primary">Save
									                           changes</button>
									                        </div>
									                  </div>
									                  </form>
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
               </div>
            </div>
         </div>
      </div>
   </section>
</div><?php }
}
