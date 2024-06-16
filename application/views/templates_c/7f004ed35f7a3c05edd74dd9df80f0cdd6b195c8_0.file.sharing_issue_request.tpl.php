<?php
/* Smarty version 4.3.2, created on 2024-06-14 10:21:06
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/sharing_issue_request.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_666bcc3a335fd9_97853200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f004ed35f7a3c05edd74dd9df80f0cdd6b195c8' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/sharing_issue_request.tpl',
      1 => 1718340664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666bcc3a335fd9_97853200 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Sharing Issue Request</h1>
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
                              <form action="<?php echo base_url('add_sharing_issue_request');?>
"
                                 method="POST" enctype="multipart/form-data">
                           </div>
                           <div class="form-group">
                           <label for="on click url">Select Part
                           Number/Description/Thickness/Weight<span
                              class="text-danger">*</span></label>
                           <select required name="child_part_id" id="" class="form-control select2">
                           <?php if (($_smarty_tpl->tpl_vars['child_part']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_part']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                    <?php if (($_smarty_tpl->tpl_vars['c']->value->sub_type == "RM")) {?>
			                           <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
			                           <?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
 / <?php echo $_smarty_tpl->tpl_vars['c']->value->part_description;?>
 / <?php echo $_smarty_tpl->tpl_vars['c']->value->thickness;?>
 / <?php echo $_smarty_tpl->tpl_vars['c']->value->weight;?>

			                           </option>
		                           <?php }?>
	                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                           <?php }?>
                           </select>
                           </div>
                           <div class="form-group">
                           <label for="on click url">Enter QTY<span
                              class="text-danger">*</span></label>
                           <input type="number" min="1" step="any" value="1" name="qty" required
                              class="form-control">
                           </div>
                           <div class="form-group">
                           <label for="on click url">Sharing Strip</label>
                           <textarea name="sharing_strip" class="form-control" id="" rows="2"
                              placeholder="Enter Sharing Strip"></textarea>
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
                     <div class="row">
                        <div class="col-lg-2">
                           <button type="button" class="btn btn-primary" data-toggle="modal"
                              data-target="#addPromo">Add Request</button>
                        </div>
                        <div class="col-lg-2">
                           <form action="<?php echo base_url('sharing_issue_request');?>
" method="post">
                              <div class="form-group">
                                 <label for="">Select Year <span class="text-danger">*</span></label>
                                 <select required name="created_year" id="" class="form-control select2">
                                 	<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 2027+1 - (2022) : 2022-(2027)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 2022, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
         									    <option <?php if (($_smarty_tpl->tpl_vars['foo']->value == $_smarty_tpl->tpl_vars['created_year']->value)) {?>selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</option>
         									<?php }
}
?>
                                 </select>
                              </div>
                        </div>
                        <div class="col-lg-2">
                        <div class="form-group">
                        <label for="">Select Month <span class="text-danger">*</span></label>
                        <select required name="created_month" id=""
                           class="form-control select2">
                        <option value="ALL">ALL</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['month_arr']->value, 'month');
$_smarty_tpl->tpl_vars['month']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->do_else = false;
?>
                            <option <?php if (($_smarty_tpl->tpl_vars['month']->value['month_number'] == $_smarty_tpl->tpl_vars['created_month']->value)) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['month']->value['month_number'];?>
"><?php echo $_smarty_tpl->tpl_vars['month']->value['month_data'];?>

                        </option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </select>
                        </div>
                        </div>
                        <div class="col-lg-2">
                        <input type="submit" name="submit" class="btn btn-primary mt-4" value="Search">
                        </form>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Sr No</th>
                              <th>Part Number / Description / Thickness / Weight</th>
                              <th>Qty(Kg)</th>
                              <th>Status</th>
                              <th>Date & Time</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php if (($_smarty_tpl->tpl_vars['sharing_issue_request']->value)) {?>
                                 <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sharing_issue_request']->value, 'u');
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
/
                                          <?php echo $_smarty_tpl->tpl_vars['u']->value->thickness;?>
/
                                          <?php echo $_smarty_tpl->tpl_vars['u']->value->weight;?>

                                       </td>
                                       <td><?php echo $_smarty_tpl->tpl_vars['u']->value->qty;?>
</td>
                                       <td><?php echo $_smarty_tpl->tpl_vars['u']->value->status;?>
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
</div><?php }
}
