<?php
/* Smarty version 4.3.2, created on 2024-06-11 18:33:45
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/view_supplier_challan_details_subcon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66684b31f20f83_17236002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dc48f31531df16323b8abe5acc50cac41854954' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/view_supplier_challan_details_subcon.tpl',
      1 => 1718109644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66684b31f20f83_17236002 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Customer  Challan</h1>
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
              <!-- <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleModal">
                Add Challan </button> -->
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
                        <div class="form-group">
                          <label for="Enter Challan Number">Challan Number <span class="text-danger">*</span> </label>
                          <input type="text" name="challan_number" placeholder="Challan Number " required class="form-control">
                        </div>
                        <label for="Enter Challan Number">Select Supplier <span class="text-danger">*</span> </label>
                        <select class="form-control select2" name="supplier_id" style="width: 100%;">
                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplier']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                          	<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->supplier_name;?>
</option>
                          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
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
                    <th>Challan Details</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $_smarty_tpl->_assignInScope('i', 1);?>
                    <?php if (($_smarty_tpl->tpl_vars['challan_data']->value)) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['challan_data']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
		                  <tr>
		                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
		                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->challan_number;?>
</td>
		                    <td>
		                      <a class="btn btn-primary" href="<?php echo base_url('view_supplier_challan_details_part_wise_subcon/');
echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">View Challan Details</a>
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
<!-- /.content-wrapper --><?php }
}
