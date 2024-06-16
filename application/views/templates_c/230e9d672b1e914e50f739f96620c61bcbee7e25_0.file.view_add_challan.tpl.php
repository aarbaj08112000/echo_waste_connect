<?php
/* Smarty version 4.3.2, created on 2024-06-11 14:13:55
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/view_add_challan.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66680e4bc2eeb3_27047614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '230e9d672b1e914e50f739f96620c61bcbee7e25' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/view_add_challan.tpl',
      1 => 1718092798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66680e4bc2eeb3_27047614 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>View Challan</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?php echo base_url('');?>
">Home</a></li>
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
                     <h3 class="card-title">
                     </h3>
                     <!-- Button trigger modal -->
                     <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleModal">
                     Add Challan </button>
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
                                 <form action="<?php echo base_url('generate_challan');?>
" method="post">
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="form-group">
                                             <label for="Enter Challan Number">Select Supplier <span class="text-danger">*</span> </label>
                                             <select class="form-control select2" name="supplier_id" style="width: 100%;" required>
                                                <option value="">Select</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplier']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
	                                                <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
	                                                   <?php echo $_smarty_tpl->tpl_vars['c']->value->supplier_name;?>

	                                                </option>
	                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="form-group">
                                             <label>Shipping Address: </label>
                                             <div class="row">
                                                <div class="col-lg-4">
                                                   <input type="radio" name="ship_addressType" checked value="supplier" onchange="toggleConsigneeSelection()">
                                                   <label>Same as Supplier</label><br>
                                                </div>
                                                <div class="col-lg-4">
                                                   <input type="radio" name="ship_addressType" value="consignee" onchange="toggleConsigneeSelection()">
                                                   <label>Select Consignee Address</label><br>
                                                   <select name="consignee" id="consigneeSelect" required disabled  class="form-control">
                                                      <option value="">Select</option>
                                                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['consignee_list']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
	                                                      <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
	                                                         <?php echo $_smarty_tpl->tpl_vars['c']->value->consignee_name;?>
 - <?php echo $_smarty_tpl->tpl_vars['c']->value->location;?>

	                                                      </option>
                                                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="form-group">
                                             <label for="">Enter Remark </label>
                                             <input type="text" placeholder="Enter Remark" value="" name="remark" class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="form-group">
                                             <label for="">Enter Mode Of Transport </label>
                                             <input type="text" placeholder="Enter Mode Of Transport" value="" name="mode" class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="form-group">
                                             <label for="">Enter Transporter </label>
                                             <input type="text" placeholder="Enter Transporter" value="" name="transpoter" class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="form-group">
                                             <label for="">Enter Vehicle No. </label>
                                             <input type="text" placeholder="Enter Vehicle No" value="" name="vechical_number" class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="form-group">
                                             <label for="">Enter L.R No </label>
                                             <input type="text" placeholder="Enter L.R No" value="" name="l_r_number" class="form-control">
                                          </div>
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
                  <div class="card">
                     <div class="card-header">
                        <div class="row">
                           <div class="col-lg-12">
                              <?php if ((empty($_smarty_tpl->tpl_vars['challan_id']->value) && empty($_smarty_tpl->tpl_vars['supplier_id']->value))) {?> 
                              	<label>By default shows latest 10 records.</label>
                              <?php } else { ?>
                              	<label></label>
                              <?php }?>
                           </div>
                           <div class="col-lg-2">
                              <form action="<?php echo base_url('challan_search');?>
" method="post">
                                 <div class="form-group">
                                    <label for="Enter Challan No">Search by Challan</label>
                                    <select class="form-control select2" name="challan_id" style="width: 100%;">
                                       <option value="">Select</option>
                                       <option value="ALL">ALL</option>
                                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['challanNo_list']->value, 'ch');
$_smarty_tpl->tpl_vars['ch']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ch']->value) {
$_smarty_tpl->tpl_vars['ch']->do_else = false;
?>
											<option <?php if (($_smarty_tpl->tpl_vars['challan_id']->value == $_smarty_tpl->tpl_vars['ch']->value->id)) {?>selected <?php }?>
                                          	value="<?php echo $_smarty_tpl->tpl_vars['ch']->value->id;?>
">
                                          	<?php echo $_smarty_tpl->tpl_vars['ch']->value->challan_number;?>

                                          	</option>
                                       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                                    </select>
                                 </div>
                           </div>
                           <div class="col-lg-2">
                           <div class="form-group">
                           <label for="Enter Supplier No">Search by Supplier</label>
                           <select class="form-control select2" name="supplier_id" style="width: 100%;">
	                           <option value="">Select</option>
	                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplier']->value, 'sup');
$_smarty_tpl->tpl_vars['sup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sup']->value) {
$_smarty_tpl->tpl_vars['sup']->do_else = false;
?>
	                           		<option <?php if (($_smarty_tpl->tpl_vars['supplier_id']->value == $_smarty_tpl->tpl_vars['sup']->value->id)) {?>selected <?php }?>
	                              	value="<?php echo $_smarty_tpl->tpl_vars['sup']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['sup']->value->supplier_name;?>

	                              	</option>
	                           <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
	                       </select>
                           </div>
                           </div>
                           <div class="col-lg-2">
                           <br><input type="submit" class="btn btn-primary mt-2"value="Search">
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
                              <th>Sr. No.</th>
                              <th>Challan Number</th>
                              <th>Remark</th>
                              <th>Vehicle Number</th>
                              <th>Mode Of Transport</th>
                              <th>Transporter</th>
                              <th>L.R number</th>
                              <th>Date</th>
                              <th>Supplier</th>
                              <th>Status</th>
                              <th>View Details</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $_smarty_tpl->_assignInScope('i', 1);?>
                           <?php if (($_smarty_tpl->tpl_vars['challan']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['challan']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
		                           <tr>
		                              <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->challan_number;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->remark;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->vechical_number;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->mode;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->transpoter;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->l_r_number;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->created_date;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->supplier_name;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['c']->value->status;?>
</td>
		                              <td>
		                                 <a class="btn btn-primary" href="<?php echo base_url('view_challan_by_id/');
echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><i class="fas fa-eye"></i></a>
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
<!-- /.content-wrapper -->
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"><?php echo '</script'; ?>
>
<!-- script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
 -->
<?php echo '<script'; ?>
>
   function toggleConsigneeSelection() {
      var consigneeSelect = document.getElementById("consigneeSelect");
      var shipAddressType = document.querySelector('input[name="ship_addressType"]:checked').value;
   
      if (shipAddressType === "supplier") {
           consigneeSelect.disabled = true;
           consigneeSelect.style.display = "none";
          // consigneeSelect.value = ''; //change to default value as select.
      } else if (shipAddressType === "consignee") {
          consigneeSelect.disabled = false;
          consigneeSelect.style.display = "block";
      }
   } 
   
   
   $(document).ready(function() {
      var consigneeSelect = document.getElementById("consigneeSelect");
      consigneeSelect.style.display = "none";
      var customer_id = $("#customer_tracking").val();
   });
<?php echo '</script'; ?>
>
<style type="text/css">
   .dataTables_scrollHeadInner table,.dataTables_scrollBody table{
      width: 100% !important;
   }
   .dataTables_scrollHeadInner{
          width: 99.1%;
   }
</style><?php }
}
