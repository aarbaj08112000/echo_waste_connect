<?php
/* Smarty version 4.3.2, created on 2024-06-13 18:36:59
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/stock_up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_666aeef332cd82_87305264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9885efbc6d67e8d097444def821c877f593cbb8' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/stock_up.tpl',
      1 => 1718283575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666aeef332cd82_87305264 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper" >
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Stock Up</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>
">Home</a></li>
                  <li class="breadcrumb-item active">Stock Up</li>
               </ol>
            </div>
         </div>
      </div>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">
                     </h3>
                     <!-- Button trigger modal -->
                     <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleModal">
                     Add Stock </button>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Add </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                           </div>
                           <div class="modal-body">
                              <form action="<?php echo base_url('add_stock_up');?>
" method="POST" enctype='multipart/form-data'>
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                          <label for="po_num">Select Part Number / Description / Stock </label><span class="text-danger">*</span>
                                          <select name="part_id" id="" class="from-control select2">
                                             <?php if (($_smarty_tpl->tpl_vars['child_part']->value)) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_part']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                        <?php $_smarty_tpl->_assignInScope('stock', $_smarty_tpl->tpl_vars['c']->value->stock);?>
                                                        <?php if ((empty($_smarty_tpl->tpl_vars['stock']->value))) {?>
                                                            $stock = "0.00";
                                                        <?php }?>
			                                             <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->childPartId;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value->part_description;?>
/<?php echo $_smarty_tpl->tpl_vars['stock']->value;?>
</option>
		                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                             <?php }?>
                                          </select>
                                       </div>
                                       <div class="form-group">
                                          <label for="po_num">Enter Reason <span class="text-danger">*</span></label>
                                          <input type="text" name="reason" required placeholder="Enter Reason" class="form-control">
                                       </div>
                                       <div class="form-group">
                                          <label for="po_num">Upload document</label>
                                          <input type="file" name="uploading_document"  class="form-control">
                                       </div>
                                       <div class="form-group">
                                          <label for="po_num">Enter Qty <span class="text-danger">*</span></label>
                                          <input type="number" name="qty" step="any" placeholder="Enter Qty" name="qty" required class="form-control">
                                       </div>
                                    </div>
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
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Sr. No.</th>
                              <th>Part Number / Description</th>
                              <th>Qty</th>
                              <th>UOM</th>
                              <th>Stock Qty</th>
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
                                       <?php if (($_smarty_tpl->tpl_vars['c']->value->type == "addition")) {?>
					                           <tr>
					                              <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
					                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value->part_description;?>
</td>
					                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->qty;?>
</td>
					                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->uom_name;?>
</td>
					                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->stock;?>
</td>
					                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->reason;?>
</td>
					                              <td>
					                                 <?php if ((!empty($_smarty_tpl->tpl_vars['c']->value->uploading_document))) {?>
					                                 <a class="btn btn-dark" download href="<?php echo base_url('documents/');?>
 <?php echo $_smarty_tpl->tpl_vars['c']->value->uploading_document;?>
">Download</a>
					                                <?php }?>
					                              </td>
					                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->created_date;?>
</td>
					                              <td>
					                                 <?php if (($_smarty_tpl->tpl_vars['c']->value->status == "pending")) {?>
					                                 <a class="btn btn-warning" href="<?php echo base_url('add_stock/');
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
            </div>
         </div>
      </div>
   </section>
</div><?php }
}
