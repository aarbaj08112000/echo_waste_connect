<?php
/* Smarty version 4.3.2, created on 2024-07-28 16:17:04
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\quality\rejection_invoices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66a621a8bad449_65729620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cba73d919b223071c15c64174f0253a4a7b4fefd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\quality\\rejection_invoices.tpl',
      1 => 1722073726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a621a8bad449_65729620 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper container-xxl flex-grow-1 container-p-y">
   <!-- Navbar -->
   <!-- /.navbar -->
   <!-- Main Sidebar Container -->
   <!-- Content Wrapper. Contains page content -->

   <nav aria-label="breadcrumb">
   <div class="sub-header-left pull-left breadcrumb">
     <h1>
       Planning & Sales
       <a hijacked="yes" href="javascript:void(0)" class="backlisting-link" title="Back to Issue Request Listing">
         <i class="ti ti-chevrons-right"></i>
         <em>Sales Invoice</em>
      </a>
     </h1>
     <br>
     <span >Rejection Invoice</span>
   </div>
 </nav>

   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      
      <!-- Main content -->
      <section class="content">
         <div class="">
            <div class="row">
               <div class="col-12">
                  <!-- /.card -->
                  <div class="card">
                     <div class="card-header">
                        <div class="row">
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <form action="<?php echo base_url('generate_rejection_sales_invoice');?>
" method="POST">
                                    <label for="">Select Customer<span class="text-danger">*</span> </label>
                                    <select name="customer_id" required id="" class="form-control select2">
                                       <?php if (($_smarty_tpl->tpl_vars['customer']->value)) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
		                                       <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
">
		                                          <?php echo $_smarty_tpl->tpl_vars['s']->value->customer_name;?>

		                                       </option>
		                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php }?>
                                    </select>
                              </div>
                           </div>
                           <div class="col-lg-2">
                           <div class="form-group">
                           <label for="">Customer Debit Note No</label><span class="text-danger">*</span></label>
                           <input type="text" placeholder="Customer Debit Note No" name="customer_debit_note_no" class="form-control">
                           </div>
                           </div>
                           <div class="col-lg-2">
                           <div class="form-group">
                           <label for="on click url">Customer Debit Note Date
                           <span class="text-danger">*</span></label>
                           <input max="<?php echo date('Y-m-d');?>
" type="date"
                              value="" name="customer_debit_note_date"
                              class="form-control">
                           </div>
                           </div>
                           <div class="col-lg-2">
                           <div class="form-group">
                           <label for="">Client Sales Invoice No</label></label>
                           <input type="text" placeholder="Client Sales Invoice No" name="client_sales_invoice_no" class="form-control">
                           </div>
                           </div>
                           <div class="col-lg-2">
                           <div class="form-group">
                           <label for="on click url">Client Invoice Date
                           </label>
                           <input max="<?php echo date('Y-m-d');?>
" type="date"
                              value="" name="client_invoice_date"
                              class="form-control">
                           </div>
                           </div>
                           <div class="col-lg-2">
                           <div class="form-group">
                           <label for="on click url">Debit Basic Amount<span
                              class="text-danger">*</span></label>
                           <input type="number" step="any" min="0.00" value="0" name="debit_basic_amt"
                              class="form-control">
                           </div>
                           </div>
                           <div class="col-lg-2">
                           <label for="on click url">GST Amount</label>
                           <input type="number" step="any" min="0.00" name="debit_gst_amt"
                              class="form-control">
                           </div>
                           <div class="col-lg-2">
                           <div class="form-group">
                           <label for="">Enter Remark </label>
                           <input type="text" placeholder="Enter Remark" value="" name="remark" class="form-control">
                           </div>
                           </div>
                           <div class="col-lg-2">
                           <div class="form-group">
                           <label for="">Rejection Reason</label>
                           <select name="rejection_reason" id=""
                              class="form-control select2">
                           <?php if (($_smarty_tpl->tpl_vars['reject_remark']->value)) {?>
	                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reject_remark']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
		                            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
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
                           <div class="col-lg-2">
                           <div class="form-group">
                           <button type="submit" class="btn btn-primary mt-4">Generate Request</button>
                           </div>
                           </form>
                           </div>
                        </div>
                     </div>
                     <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th>Sr No</th>
                                 <th>Rejection Invoice No</th>
                                 <th>Customer</th>
                                 <th>Customer Debit Note No</th>
                                 <th>Customer Debit Note Date</th>
                                 <th>Client Sales Invoice No</th>
                                 <th>Client Invoice Date</th>
                                 <th>Basic Amount</th>
                                 <th>GST Amount</th>
                                 <th>View Details</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php if (($_smarty_tpl->tpl_vars['rejection_sales_invoice']->value)) {?>
                                    <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rejection_sales_invoice']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
			                              <tr>
			                                 <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
			                                 <td><?php echo $_smarty_tpl->tpl_vars['u']->value->rejection_invoice_no;?>
</td>
			                                 <td><?php echo $_smarty_tpl->tpl_vars['u']->value->customer_name;?>
</td>
			                                 <td><?php echo $_smarty_tpl->tpl_vars['u']->value->document_number;?>
</td>
			                                 <td><?php echo $_smarty_tpl->tpl_vars['u']->value->debit_note_date;?>
</td>
			                                 <td><?php echo $_smarty_tpl->tpl_vars['u']->value->sales_invoice_number;?>
</td>
			                                 <td><?php echo $_smarty_tpl->tpl_vars['u']->value->client_invoice_date;?>
</td>
			                                 <td><?php echo $_smarty_tpl->tpl_vars['u']->value->debit_basic_amt;?>
</td>
			                                 <td><?php echo $_smarty_tpl->tpl_vars['u']->value->debit_gst_amt;?>
</td>
			                                 <td>
			                                    <a class="btn btn-info" href="<?php echo base_url('view_rejection_sales_invoice_by_id/');
echo $_smarty_tpl->tpl_vars['u']->value->id;?>
">
			                                    <i class="fa fa-history">
			                                    </i>
			                                    </a>
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
