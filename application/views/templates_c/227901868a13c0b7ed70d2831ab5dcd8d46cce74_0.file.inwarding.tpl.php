<?php
/* Smarty version 4.3.2, created on 2024-06-10 20:07:25
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/inwarding.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66670fa52d1637_71860244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '227901868a13c0b7ed70d2831ab5dcd8d46cce74' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/inwarding.tpl',
      1 => 1718030244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66670fa52d1637_71860244 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="width: 100%;" class="wrapper">
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>In Warding</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Store</li>
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
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Sr. No.</th>
                              <th>PO Number</th>
                              <th>Supplier Name</th>
                              <th>PO Date</th>
                              <th>Created Date</th>
                              <th>Expiry Date</th>
                              <th>Download PDF PO</th>
                              <th>View PO Details</th>
                              <th>Close PO</th>
                           </tr>
                        </thead>
                        <tbody>
                        	<?php $_smarty_tpl->_assignInScope('i', 1);?>
                           	<?php if (($_smarty_tpl->tpl_vars['new_po']->value)) {?>
                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_po']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
			                           <tr>
			                              <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
			                              <td><?php echo $_smarty_tpl->tpl_vars['s']->value->po_number;?>
</td>
			                              <td><?php echo $_smarty_tpl->tpl_vars['s']->value->supplier_name;?>
</td>
			                              <td><?php echo $_smarty_tpl->tpl_vars['s']->value->po_date;?>
</td>
			                              <td><?php echo $_smarty_tpl->tpl_vars['s']->value->created_date;?>
</td>
			                              <td><?php echo $_smarty_tpl->tpl_vars['s']->value->expiry_po_date;?>
</td>
			                              <td><a href="<?php echo base_url('download_my_pdf/');
echo $_smarty_tpl->tpl_vars['s']->value->id;?>
" class="btn btn-primary" href="">Download</a></td>
			                              <td><a href="<?php echo base_url('inwarding_invoice/');
echo $_smarty_tpl->tpl_vars['s']->value->id;?>
" class="btn btn-primary" href="">Details</a></td>
			                              <td>
			                                 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#close<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
			                                 Close
			                                 </button>
			                                 <div class="modal fade" id="close<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			                                    <div class="modal-dialog" role="document">
			                                       <div class="modal-content">
			                                          <div class="modal-header">
			                                             <h5 class="modal-title" id="exampleModalLabel">Close PO</h5>
			                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                                             <span aria-hidden="true">&times;</span>
			                                             </button>
			                                          </div>
			                                          <div class="modal-body">
			                                             <form action="<?php echo base_url('close_po');?>
" method="POST" enctype="multipart/form-data">
			                                                <div class="form-group">
			                                                   <label for="">Are You Sure Want To Close <?php echo $_smarty_tpl->tpl_vars['s']->value->po_number;?>
 This PO? <span class="text-danger">*</span></label>
			                                                   <input required value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
" type="hidden" class="form-control" name="id">
			                                                   <input required value="<?php echo $_smarty_tpl->tpl_vars['s']->value->po_number;?>
" type="hidden" class="form-control" name="po_number">
			                                                </div>
			                                          </div>
			                                          <div class="modal-footer">
			                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			                                          <button type="submit" class="btn btn-primary">Close</button>
			                                          </form>
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
                  <!-- /.card-header -->
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
