<?php
/* Smarty version 4.3.2, created on 2024-06-11 15:49:13
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/view_add_challan_subcon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_666824a1c9cfa4_08263185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbb6b04a82f8b69e8c906efb0b7d86df8976466e' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/view_add_challan_subcon.tpl',
      1 => 1718101104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666824a1c9cfa4_08263185 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Challan</h1>
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
                      <form action="<?php echo base_url('generate_challan_subcon');?>
" method="post">
                        <!-- <div class="form-group">
                          <label for="Enter Challan Number">Challan Number <span class="text-danger">*</span> </label>
                          <input type="text" name="challan_number" placeholder="Challan Number " required class="form-control">
                          </div> -->
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group">
                              <label for="Enter Challan Number">Select Customer <span class="text-danger">*</span> </label>
                              <select class="form-control select2" name="customer_id" style="width: 100%;">
                                <?php if (($_smarty_tpl->tpl_vars['customer']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
		                                <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
		                                  <?php echo $_smarty_tpl->tpl_vars['c']->value->customer_name;?>

		                                </option>
		                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group">
                              <label for="">Enter Customer Challan Number </label>
                              <input type="text" placeholder="Enter Remark" value="" name="customer_challan_number" class="form-control">
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
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <!-- <th>Action</th> -->
                    <th>Challan Number</th>
                    <th>Remark</th>
                    <th>Vehicle Number</th>
                    <th>Mode Of Transport</th>
                    <th>Transporter</th>
                    <th>L.R number</th>
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
			                    <td>
			                      <a class="btn btn-primary" href="<?php echo base_url('view_challan_by_id_subcon/');
echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">View
			                      Details</a>
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
