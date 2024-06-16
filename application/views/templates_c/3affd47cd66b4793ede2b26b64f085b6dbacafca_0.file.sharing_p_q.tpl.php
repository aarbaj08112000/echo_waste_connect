<?php
/* Smarty version 4.3.2, created on 2024-06-14 10:41:56
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/sharing_p_q.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_666bd11c8b6286_06649565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3affd47cd66b4793ede2b26b64f085b6dbacafca' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/sharing_p_q.tpl',
      1 => 1718341915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666bd11c8b6286_06649565 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Sharing Production Qty</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard');?>
">Home</a></li>
                  <li class="breadcrumb-item active">Production Qty</li>
               </ol>
            </div>
         </div>
      </div>
   </section>
   <section class="content">
      <div>
         <div class="row">
            <br>
            <div class="col-lg-12">
               <div class="modal fade" id="addPromo" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <div class="form-group">
                              <form action="<?php echo base_url('add_production_qty_sharing');?>
"
                                 method="POST" enctype="multipart/form-data">
                           </div>
                           <div class="form-group">
                           <label for="on click url">Select Shift Type / Name / Start Time / End Time<span class="text-danger">*</span></label>
                           <select required name="shift_id" id="shift" class="form-control select2">
                          <option value="">Select</option>
                           <?php if (($_smarty_tpl->tpl_vars['shifts']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shifts']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
		                           <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
">
		                           <?php echo $_smarty_tpl->tpl_vars['s']->value->shift_type;?>
 / <?php echo $_smarty_tpl->tpl_vars['s']->value->name;?>
 / <?php echo $_smarty_tpl->tpl_vars['s']->value->start_time;?>
 / <?php echo $_smarty_tpl->tpl_vars['s']->value->end_time;?>

		                           </option>
		                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                           <?php }?>
                           </select>
                           </div>
                           <div class="form-group">
                           <label for="on click url">Select Operator <span class="text-danger">*</span></label>
                           <select name="operator_id" id="operator" class="form-control select2" required>
                           <option value="">Select</option>
                           <?php if (($_smarty_tpl->tpl_vars['operator']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['operator']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
	                           		<option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value->name;?>
</option>
	                           	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                           </select>
                           </div>
                           <div class="form-group">
                           <label for="on click url">Select Machine<span
                              class="text-danger">*</span></label>
                           <select required name="machine_id" id="machine" class="form-control select2">
                           <option value="">Select</option>
                           <?php if (($_smarty_tpl->tpl_vars['machine']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['machine']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
		                           <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value->name;?>
</option>
		                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                           </select>
                           </div>
                           <div class="form-group">
                           <label for="on click url">Enter Date<span
                              class="text-danger">*</span></label>
                           <input max="<?php echo date("Y-m-d");?>
" type="date"
                              value="<?php echo date('Y-m-d');?>
" name="date" required
                              class="form-control">
                           </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                           data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header">
                     <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#addPromo">
                     Add Sharing Production Qty
                     </button>
                  </div>
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Sr No</th>
                              <th>Date</th>
                              <th>Shift</th>
                              <th>Machine</th>
                              <th>Operator</th>
                              <th>View Details</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php if (($_smarty_tpl->tpl_vars['sharing_p_q']->value)) {?>
                                <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sharing_p_q']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
			                           <tr>
			                              <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
			                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->date;?>
</td>
			                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->shift_type;?>
</td>
			                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->machine_name;?>
</td>
			                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->op_name;?>
</td>
			                              <td>
			                                 <a class="btn btn-info"
			                                    href="<?php echo base_url('details_production_qty_sharing/');
echo $_smarty_tpl->tpl_vars['u']->value->id;?>
">
			                                 Add Output Parts</a>
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
