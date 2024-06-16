<?php
/* Smarty version 4.3.2, created on 2024-06-14 12:47:08
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/details_production_qty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_666bee742553a2_49009325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc98b3a696afa144c38d13e20d7dcd402b04e21f' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/details_production_qty.tpl',
      1 => 1718349415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666bee742553a2_49009325 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Production Details</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard');?>
">Home</a></li>
                  <li class="breadcrumb-item active">Production</li>
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
                        <div class="col-lg-2">
                           <label for="">status</label>
                           <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['p_q_data']->value[0]->status;?>
"
                              class="form-control">
                        </div>
                        <div class="col-lg-2">
                           <label for="">Accepted Qty</label>
                           <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['p_q_data']->value[0]->accepted_qty;?>
"
                              class="form-control">
                        </div>
                        <div class="col-lg-2">
                           <label for="">Rejection Qty</label>
                           <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['p_q_data']->value[0]->rejected_qty;?>
"
                              class="form-control">
                        </div>
                        <?php if ((!empty($_smarty_tpl->tpl_vars['p_q_data']->value[0]->rejected_qty))) {?>
	                        <div class="col-lg-3">
	                           <label for="">Rejection Remark</label>
	                           <input type="text" readonly
	                              value="<?php echo $_smarty_tpl->tpl_vars['p_q_data']->value[0]->rejection_remark;?>
" class="form-control">
	                        </div>
	                        <div class="col-lg-3">
	                           <label for="">Rejection Reason</label>
	                           <input type="text" readonly
	                              value="<?php echo $_smarty_tpl->tpl_vars['p_q_data']->value[0]->rejection_reason;?>
" class="form-control">
	                        </div>
	                    <?php }?>
                     </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Sr No</th>
                              <th>Input Part Number / Description</th>
                              <th>Total Req Qty</th>
                              <th>Date & Time</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php if (($_smarty_tpl->tpl_vars['p_q_history']->value)) {?>
                                <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p_q_history']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
		                           <tr>
		                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->input_part_number;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->output_part_data[0]->part_number;?>
 /
		                                 <?php echo $_smarty_tpl->tpl_vars['u']->value->output_part_data[0]->part_description;?>

		                              </td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->req_qty;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->created_date;?>
/ <?php echo $_smarty_tpl->tpl_vars['u']->value->created_time;?>
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
