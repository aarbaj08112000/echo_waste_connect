<?php
/* Smarty version 4.3.2, created on 2024-06-14 12:23:08
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/view_p_q.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_666be8d4e02552_34093455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cb76c5dea92bceccd55e678b88c6418c1e933b2' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/view_p_q.tpl',
      1 => 1718346906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666be8d4e02552_34093455 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Production Qty</h1>
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
                     <div class="row">
                        <div class="col-lg-4">
                           <div class="form-group">
                              <form action="<?php echo base_url('view_p_q');?>
" method="post">
                                 <label for="">Select Inhouse Part Number / Description</label>
                                 <select name="inhouse_part_id" id="" class="form-control select2">
                                    <option value="">SELECT</option>
                                    <?php if (($_smarty_tpl->tpl_vars['inhouse_parts']->value)) {?>
                                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inhouse_parts']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
		                                    <option 
		                                       <?php if (($_smarty_tpl->tpl_vars['inhouse_part_id']->value == $_smarty_tpl->tpl_vars['i']->value->id)) {?>
		                                            selected 
		                                       <?php }?>
		                                       value="<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value->part_number;?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value->part_description;?>
</option>
		                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	                                <?php }?>
                                    <option <?php if (($_smarty_tpl->tpl_vars['inhouse_part_id']->value == "ALL")) {?>selected <?php }?> value="ALL">ALL</option>
                                 </select>
                           </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                        <label for="">Select Machine</label>
                        <select name="machine_id" id="" class="form-control select2">
                        <option value="">SELECT</option>
                        <?php if (($_smarty_tpl->tpl_vars['machine_data']->value)) {?>
                               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['machine_data']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
		                        <option 
		                           <?php if (($_smarty_tpl->tpl_vars['machine_id']->value == $_smarty_tpl->tpl_vars['i']->value->id)) {?>
		                              selected 
		                           <?php }?>
		                           value="<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value->name;?>
</option>
		                       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                        <option <?php if (($_smarty_tpl->tpl_vars['machine_id']->value == "ALL")) {?>selected <?php }?> value="ALL">ALL</option>
                        </select>
                        </div>
                        </div>
                        <div class="col-lg-2">
                        <div class="form-group mt-4">
                        <button class="btn btn-danger">
                        Search
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
                              <th>Output Part Number / Descriptions </th>
                              <th>Date</th>
                              <th>Shift</th>
                              <th>Machine</th>
                              <th>Operator</th>
                              <th>Qty</th>
                              <th>Scrap</th>
                              <th>Accepted Qty</th>
                              <th>Rejected Qty</th>
                              <th>Onhold Qty</th>
                              <th>Status</th>
                              <th>Actions</th>
                              <th>View Details</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php if (($_smarty_tpl->tpl_vars['p_q']->value)) {?>
                                <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p_q']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
		                           <tr>
		                              <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->part_number;?>
 /
		                                 <?php echo $_smarty_tpl->tpl_vars['u']->value->part_description;?>

		                              </td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->date;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->shift_type;?>
/<?php echo $_smarty_tpl->tpl_vars['u']->value->shift_name;?>

		                              </td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->machine_name;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->op_name;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->qty;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->scrap_factor;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->accepted_qty;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->rejected_qty;?>
</td>
		                              <td>
		                                 <?php if ((!empty($_smarty_tpl->tpl_vars['u']->value->onhold_qty))) {?>
		                                 <button type="button" class="btn btn-warning float-left " data-toggle="modal" data-target="#onhold<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
		                                 <?php echo $_smarty_tpl->tpl_vars['u']->value->onhold_qty;?>
 </button>
		                                 <?php } else { ?>
		                                    0
		                                 <?php }?>
		                                 <div class="modal fade" id="onhold<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		                                    <div class="modal-dialog modal-lg" role="document">
		                                       <div class="modal-content">
		                                          <div class="modal-header">
		                                             <h5 class="modal-title" id="exampleModalLabel">
		                                                Onhold
		                                                Update 
		                                             </h5>
		                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                                             <span aria-hidden="true">&times;</span>
		                                             </button>
		                                          </div>
		                                          <div class="modal-body">
		                                             <form action="<?php echo base_url('update_p_q_onhold');?>
" method="POST" enctype='multipart/form-data' s>
		                                                <div class="row">
		                                                   <div class="col-lg-12">
		                                                      <div class="form-group">
		                                                         <label for="">Qty</label>
		                                                         <input type="number" step="any" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->onhold_qty;?>
" readonly class="form-control">
		                                                      </div>
		                                                   </div>
		                                                   <div class="col-lg-12">
		                                                      <div class="form-group">
		                                                         <label for="">Accept Qty <span class="text-danger">*</span>
		                                                         </label>
		                                                         <input type="number" step="any" value="" max="<?php echo $_smarty_tpl->tpl_vars['u']->value->onhold_qty;?>
" min="0" class="form-control" name="accepted_qty" placeholder="Enter Accepted Quantity" required>
		                                                      </div>
		                                                   </div>
		                                                   <div class="col-lg-12">
		                                                      <div class="form-group">
		                                                         <label for="">Rejection
		                                                         Reason</label>
		                                                         <select name="rejection_reason" id="" class="form-control select2">
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
		                                                         <input type="text"  class="form-control" name="rejection_remark">
		                                                         <input type="hidden"  readonly class="form-control" name="id" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->id;?>
">
		                                                         <input type="hidden"  readonly class="form-control" name="qty" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->onhold_qty;?>
">
		                                                         <input type="hidden"  readonly class="form-control" name="output_part_id" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->output_part_id;?>
">
		                                                         <input type="hidden"  readonly class="form-control" name="accepted_qty_old" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->accepted_qty;?>
">
		                                                         <input type="hidden"  readonly class="form-control" name="rejected_qty_old" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->rejected_qty;?>
">
		                                                      </div>
		                                                   </div>
		                                                </div>
		                                                <div class="modal-footer">
		                                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
		                                 <button type="button" class="btn btn-danger float-left " data-toggle="modal" data-target="#acceptReject<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
		                                 Accept/Reject </button>
		                                 <?php } else { ?>
		                                 	Completed
		                                 <?php }?>
		                                 <div class="modal fade" id="acceptReject<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		                                    <div class="modal-dialog modal-lg" role="document">
		                                       <div class="modal-content">
		                                          <div class="modal-header">
		                                             <h5 class="modal-title" id="exampleModalLabel">Add </h5>
		                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                                             <span aria-hidden="true">&times;</span>
		                                             </button>
		                                          </div>
		                                          <div class="modal-body">
		                                             <form action="<?php echo base_url('update_p_q');?>
" method="POST" enctype='multipart/form-data' s>
		                                                <div class="row">
		                                                   <div class="col-lg-12">
		                                                      <div class="form-group">
		                                                         <label for="">Qty</label>
		                                                         <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->qty;?>
" readonly class="form-control">
		                                                      </div>
		                                                   </div>
		                                                   <div class="col-lg-12">
		                                                      <div class="form-group">
		                                                         <label for="">Accept Qty <span class="text-danger">*</span>
		                                                         </label>
		                                                         <input type="number" step="any" value="" max="<?php echo $_smarty_tpl->tpl_vars['u']->value->qty;?>
" min="0" class="form-control" name="accepted_qty" placeholder="Enter Accepted Quantity" required>
		                                                      </div>
		                                                   </div>
		                                                   <div class="col-lg-12">
		                                                      <div class="form-group">
		                                                         <label for="">Onhold Qty <span class="text-danger">*</span>
		                                                         </label>
		                                                         <input type="number" step="any" value="" max="<?php echo $_smarty_tpl->tpl_vars['u']->value->qty;?>
" min="0" class="form-control" name="onhold_qty" placeholder="Enter onhold" required>
		                                                      </div>
		                                                   </div>
		                                                   <div class="col-lg-12">
		                                                      <div class="form-group">
		                                                         <label for="">Rejection Reason</label>
		                                                         <select name="rejection_reason" id="" class="form-control select2">
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
		                                                         <input type="text"  class="form-control" name="rejection_remark">
		                                                         <input type="hidden"  readonly class="form-control" name="id" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->id;?>
">
		                                                         <input type="hidden"  readonly class="form-control" name="qty" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->qty;?>
">
		                                                         <input type="hidden"  readonly class="form-control" name="output_part_id" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->output_part_id;?>
">
		                                                         <input type="hidden"  readonly class="form-control" name="scrap_factor" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->scrap_factor;?>
">
		                                                      </div>
		                                                   </div>
		                                                </div>
		                                                <div class="modal-footer">
		                                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		                                                   <button type="submit" class="btn btn-primary">Save
		                                                   changes</button>
		                                                </div>
		                                          </div>
		                                          </form>
		                                       </div>
		                                    </div>
		                                 </div>
		                              </td>
		                              <td>
		                                 <a class="btn btn-info" href="<?php echo base_url('details_production_qty/');
echo $_smarty_tpl->tpl_vars['u']->value->id;?>
">
		                                 View Details</a>
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
      <!-- /.container-fluid -->
   </section>
   <!-- /.content -->
</div><?php }
}
