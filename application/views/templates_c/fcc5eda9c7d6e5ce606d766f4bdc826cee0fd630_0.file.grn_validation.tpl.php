<?php
/* Smarty version 4.3.2, created on 2024-06-17 11:30:19
  from '/var/www/html/extra_work/erp_converted/application/views/templates/store/grn_validation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_666fd0f3700f27_69517628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcc5eda9c7d6e5ce606d766f4bdc826cee0fd630' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/store/grn_validation.tpl',
      1 => 1718087530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666fd0f3700f27_69517628 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('isMultiClient', $_smarty_tpl->tpl_vars['session_data']->value['isMultipleClientUnits']);?>
<div class="wrapper">
<!-- Navbar -->
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>GRN Validation</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Insert List</li>
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
                     <!-- Modal -->
                     <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog " role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 <form action="<?php echo base_url('add_invoice_number');?>
" method="POST">
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="form-group">
                                             <label for="tool_number">Invoice Number </label><span class="text-danger">*</span>
                                             <input type="text" name="invoice_number" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Invoice Number">
                                             <input type="hidden" name="new_po_id" value="<?php echo $_smarty_tpl->tpl_vars['new_po_id']->value;?>
" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Invoice Number">
                                          </div>
                                          <div class="form-group">
                                             <label for="tool_number">Invoice Date </label><span class="text-danger">*</span>
                                             <input type="date" name="invoice_date" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Invoice Number">
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
                     </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Sr No</th>
                              <th>PO Number</th>
                              <th>Supplier Name </th>
                              <th>Invoice Number</th>
                              <th>Invoice Date</th>
                              <th>GRN  Number </th>
                              <th>GRN  Date </th>
                              <?php if (($_smarty_tpl->tpl_vars['isMultiClient']->value == "true")) {?>
                                 <th>Delivery Unit</th>
                              <?php }?>    
                              <th>View Details</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $_smarty_tpl->_assignInScope('i', 1);?>
                              <?php if (($_smarty_tpl->tpl_vars['inwarding_data']->value)) {?>
                                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inwarding_data']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
                                 
                                 <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->po_id;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->po_number;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->supplier_name;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->invoice_number;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->invoice_date;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->grn_number;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->grn_date;?>
</td>
                                    <?php if (($_smarty_tpl->tpl_vars['isMultiClient']->value == "true")) {?>
                                       <td><?php echo $_smarty_tpl->tpl_vars['t']->value->delivery_unit;?>
</td>
                                    <?php }?>
                                    <td>
                                       <a href="<?php echo base_url('inwarding_details_validation/');
echo $_smarty_tpl->tpl_vars['t']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['t']->value->po_id;?>
" class="btn btn-danger" href="">Validation Details</a></td>
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
<style type="text/css">
   .dataTables_scrollHeadInner table,.dataTables_scrollBody table{
      width: 100% !important;
   }
   .dataTables_scrollHeadInner{
          width: 99.1%;
   }
</style><?php }
}
