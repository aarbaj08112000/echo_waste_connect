<?php
/* Smarty version 4.3.2, created on 2024-06-13 18:56:01
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/sharing_issue_request_store.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_666af369823cf1_14531224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3bd5ff74b0aa35539ebf0cf52324c0f4a0de0b7' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/sharing_issue_request_store.tpl',
      1 => 1718285159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666af369823cf1_14531224 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="wrapper">
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Sharing Issue Request - Pending</h1>
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
         <!-- Small boxes (Stat box) -->
         <div class="row">
            <br>
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header">
                     <a class="btn btn-info" href="<?php echo base_url('sharing_issue_request_store_completed');?>
"> View Completed Requests</a>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Sr No</th>
                              <th>Part Number / Description / Thickness / Weight</th>
                              <th>Status</th>
                              <th>Date & Time</th>
                              <th>Actual Store Stock</th>
                              <th>Required Qty</th>
                              <th>Enter Accept Qty</th>
                              <th>Submit</th>
                              <th>Delete</th>
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
				                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->status;?>
</td>
				                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->created_date;?>
 / <?php echo $_smarty_tpl->tpl_vars['u']->value->created_time;?>
</td>
				                              <td>
				                                 <?php echo $_smarty_tpl->tpl_vars['u']->value->stock;?>

				                              </td>
				                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->qty;?>
</td>
				                              <td>
				                                 <?php if (((int)$_smarty_tpl->tpl_vars['u']->value->qty > (int)$_smarty_tpl->tpl_vars['u']->value->stock)) {?>
				                                        Store Stock Not Available
				                                  <?php } else { ?>
						                                <form action="<?php echo base_url('accept_sharing_request');?>
" method="post">
						                                    <input  name="accepted_qty" max="<?php echo $_smarty_tpl->tpl_vars['u']->value->qty;?>
" min="0.001" type="number" step="any" required class="form-control">
						                                    <input  name="id" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->id;?>
" min="1" type="hidden" required class="form-control">
						                                    <input  name="child_part_id" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->child_part_id;?>
" type="hidden" required class="form-control">
						                                    <input  name="actual_stock" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->stock;?>
" type="hidden" required class="form-control">
						                                    <input  name="sharing_qty" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->sharing_qty;?>
" type="hidden" required class="form-control">
				                                  <?php }?>
				                              </td>
				                              <td>
				                              <?php if (((int)$_smarty_tpl->tpl_vars['u']->value->qty > (int)$_smarty_tpl->tpl_vars['u']->value->stock)) {?>
				                              <?php } else { ?>
					                              <button type="submit" class="btn btn-danger">Submit</button>
					                              </form>
					                          <?php }?>
				                              </td>
				                              <td>
				                                 <button type="button" class="btn btn-danger ml-1" data-toggle="modal" data-target="#exampleModaldelet213123e<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
				                                 Delete
				                                 </button>
				                              </td>
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
				                                                      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->id;?>
" required class="form-control">
				                                                      <input type="hidden" name="table_name" value="sharing_issue_request" required class="form-control">
				                                                   </div>
				                                                </div>
				                                          </div>
				                                       </div>
				                                       <div class="modal-footer">
				                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				                                       <button type="submit" class="btn btn-danger">Delete</button>
				                                       </div>
				                                    </div>
				                                    </form>
				                                 </div>
				                              </div>
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
