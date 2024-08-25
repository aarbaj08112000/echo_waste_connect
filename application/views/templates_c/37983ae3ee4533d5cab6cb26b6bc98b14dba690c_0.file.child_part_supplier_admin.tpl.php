<?php
/* Smarty version 4.3.2, created on 2024-08-24 16:34:46
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\admin\child_part_supplier_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c9be4ebb1313_07546806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37983ae3ee4533d5cab6cb26b6bc98b14dba690c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\admin\\child_part_supplier_admin.tpl',
      1 => 1724497463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c9be4ebb1313_07546806 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="wrapper container-xxl flex-grow-1 container-p-y">

<nav aria-label="breadcrumb">
<div class="sub-header-left pull-left breadcrumb">
  <h1>
	Admin
	<a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
	  <i class="ti ti-chevrons-right" ></i>
	  <em >Approval</em></a>
  </h1>
  <br>
  <span >Supplier Part Price</span>
</div>
</nav>
<div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
<button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
<button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>

</div>

   <div class="content-wrapper" >
      <!-- Content Header (Page header) -->
      
      <!-- Main content -->
      <section class="content">
         <div class="">
            <div class="row">
               <div class="col-12">
                  <div class="card">
                     <!-- /.card-header -->
                     <div class="card-body">
                        <table id="example1" class="table table-striped">
                           <thead>
                              <tr>
                                 <th>Sr. No.</th>
                                 <th>Action</th>
                                 <th>Revision Number</th>
                                 <th>Revision Remark</th>
                                 <th>Revision Date</th>
                                 <th>Part Number</th>
                                 <th>Part Description</th>
                                 <th>Tax Structure</th>
                                 <th>With In State</th>
                                 <th>Supplier</th>
                                 <th>Part Price</th>
                                 <th>Quotation Document </th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                <?php if (($_smarty_tpl->tpl_vars['child_part_list']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_part_list']->value, 'poo');
$_smarty_tpl->tpl_vars['poo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['poo']->value) {
$_smarty_tpl->tpl_vars['poo']->do_else = false;
?>
                                 		<?php $_smarty_tpl->_assignInScope('po', $_smarty_tpl->tpl_vars['poo']->value->po);?>
                                        <?php if (($_smarty_tpl->tpl_vars['po']->value[0]->admin_approve == "no")) {?>
                                         	<?php $_smarty_tpl->_assignInScope('supplier_data', $_smarty_tpl->tpl_vars['poo']->value->supplier_data);?>
                                         	<?php $_smarty_tpl->_assignInScope('uom_data', $_smarty_tpl->tpl_vars['poo']->value->uom_data);?>
                                            <?php $_smarty_tpl->_assignInScope('gst_structure2', $_smarty_tpl->tpl_vars['poo']->value->gst_structure2);?>
				                            <tr>
				                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
				                                <td>
				                                    <button type="submit" data-bs-toggle="modal" class="btn btn-sm " data-bs-target="#exampleModaledit2<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"> <i class="ti ti-edit"></i></button>
				                                    <div class="modal fade" id="exampleModaledit2<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex=" -1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				                                       <div class="modal-dialog " role="document">
				                                          <div class="modal-content">
				                                             <div class="modal-header">
				                                                <h5 class="modal-title" id="exampleModalLabel">Approve Price </h5>
				                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
				                                                <span aria-hidden="true">&times;</span>
				                                                </button>
				                                             </div>
															 <form action="<?php echo base_url('updatechildpart_supplier_admin');?>
" method="POST" enctype='multipart/form-data' class="approve-price">
				                                             <div class="modal-body">
				                                                   <div class="row">
				                                                      <div class="col-lg-12">
				                                                         <input value="<?php echo $_smarty_tpl->tpl_vars['po']->value[0]->id;?>
" type="hidden" name="id" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">
				                                                         <div class="form-group">
				                                                            <label for="po_num">Are You Sure Want to Approve this Price ? </label><span class="text-danger">*</span>
				                                                         </div>
				                                                         <div class="form-group">
				                                                            <label for="po_num">Part Number </label><span class="text-danger">*</span>
				                                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[0]->part_number;?>
" name="upart_number" readonly class="form-control" placeholder="Enter Part Number.">
				                                                         </div>
				                                                         <div class="form-group">
				                                                            <label for="po_num">Part Price </label><span class="text-danger">*</span>
				                                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[0]->part_rate;?>
" name="upart_desc"   class="form-control onlyNumericInput" id="exampleInputEmail1">
				                                                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[0]->id;?>
" name="id"  required class="form-control" id="exampleInputEmail1" >
				                                                         </div>
				                                                      </div>
				                                                   </div>
				                                             </div>
				                                             <div class="modal-footer">
				                                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				                                             <button type="submit" class="btn btn-primary">Save changes</button>
				                                             </div>
				                                             </form>
				                                          </div>
				                                       </div>
				                                    </div>
							                     </div>
							                     </td>
							                     <td><?php echo $_smarty_tpl->tpl_vars['po']->value[0]->revision_no;?>
</td>
							                     <td><?php echo $_smarty_tpl->tpl_vars['po']->value[0]->revision_remark;?>
</td>
							                     <td><?php echo $_smarty_tpl->tpl_vars['po']->value[0]->revision_date;?>
</td>
							                     <td><?php echo $_smarty_tpl->tpl_vars['po']->value[0]->part_number;?>
</td>
							                     <td><?php echo $_smarty_tpl->tpl_vars['po']->value[0]->part_description;?>
</td>
							                     <td><?php echo $_smarty_tpl->tpl_vars['gst_structure2']->value[0]->code;?>
</td>
							                     <td><?php echo $_smarty_tpl->tpl_vars['supplier_data']->value[0]->with_in_state;?>
</td>
							                     <td><?php echo $_smarty_tpl->tpl_vars['supplier_data']->value[0]->supplier_name;?>
</td>
							                     <td><?php echo $_smarty_tpl->tpl_vars['po']->value[0]->part_rate;?>
</td>
							                     <td>
							                     <?php if ((!empty($_smarty_tpl->tpl_vars['po']->value[0]->quotation_document))) {?>
							                     	<a href="<?php echo base_url('documents/');
echo $_smarty_tpl->tpl_vars['po']->value[0]->quotation_document;?>
" download>Download </a>
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

  <?php echo '<script'; ?>
 type="text/javascript">
  var base_url = <?php echo json_encode($_smarty_tpl->tpl_vars['base_url']->value);?>

  <?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/admin/child_part_supplier_admin.js"><?php echo '</script'; ?>
>
<?php }
}
