<?php
/* Smarty version 4.3.2, created on 2024-06-18 17:24:54
  from '/var/www/html/extra/erp_converted/application/views/templates/customer/customer_parts_master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6671758e6da041_62832646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd87bdc78e952ea450d48e6819f180084053879c' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/customer/customer_parts_master.tpl',
      1 => 1718711679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6671758e6da041_62832646 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Process Master</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
dashboard">Home</a></li>
                  </ol>
                </div>
              </div>
            </div>
          </div> -->
        <!-- /.content-header -->

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Part Master</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
dashboard">Home</a></li>
                            <li class="breadcrumb-item active">Process</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div>
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12 ml-3">
                                <?php if ($_smarty_tpl->tpl_vars['this']->value->session->flashdata && $_smarty_tpl->tpl_vars['this']->value->session->flashdata('errors')) {?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Error : </strong> <?php echo $_smarty_tpl->tpl_vars['this']->value->session->flashdata('errors');?>

                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['this']->value->session->flashdata && $_smarty_tpl->tpl_vars['this']->value->session->flashdata('success')) {?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Success :</strong> <?php echo $_smarty_tpl->tpl_vars['this']->value->session->flashdata('success');?>

                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="col-lg-12">

                        <!-- Modal -->
                        <div class="modal fade" id="addPromo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Part</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
add_customer_parts_master" method="POST" enctype="multipart/form-data">
                                        </div>
                                        <div class="form-group">
                                            <label for="on click url">Part Number<span class="text-danger">*</span></label> <br>
                                            <input required type="text" name="part_number" placeholder="Enter Part Number" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="on click url">Part Description<span class="text-danger">*</span></label> <br>
                                            <input required type="text" name="part_description" placeholder="Enter Part Description" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="on click url">Rate<span class="text-danger">*</span></label> <br>
                                            <input required type="number" step="any" name="fg_rate" placeholder="Enter Rate" class="form-control" value="0" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">

                            <div class="card-header">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPromo">
                                    Add
                                </button>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr No</th>
                                            <th>Part Number</th>
                                            <th>Part Description</th>
                                            <th>FG Stock</th>
                                            <th>Rate</th>
                                            <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isPlastic'] != null) {?>
                                                <th>Grade</th>
                                            <?php }?>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php if ($_smarty_tpl->tpl_vars['customer_parts_master']->value) {?>
                                            <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_parts_master']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isPlastic'] != null) {?>
                                                    
                                                    <?php $_smarty_tpl->_assignInScope('grade_name', '');?>
                                                    <?php if ($_smarty_tpl->tpl_vars['grades_data']->value) {?>
                                                        <?php $_smarty_tpl->_assignInScope('grade_name', $_smarty_tpl->tpl_vars['grades_data']->value[$_smarty_tpl->tpl_vars['u']->value->grade_id][0]->name);?>
                                                    <?php }?>
                                                <?php }?>

                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['u']->value->part_number;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['u']->value->part_description;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['u']->value->fg_stock;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['u']->value->fg_rate;?>
</td>
                                                    <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isPlastic'] != null) {?>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['grade_name']->value;?>
</td>
                                                    <?php }?>
                                                    <td>
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                            <i class='far fa-edit'></i>
                                                        </button>
                                                        <!-- edit Modal -->
                                                        <div class="modal fade" id="edit<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>

                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
update_customer_parts_master" method="POST" enctype="multipart/form-data">
                                                                                    <div class="form-group">
                                                                                        <label> Part Description</label><span class="text-danger">*</span>
                                                                                        <input type="hidden" readonly value="<?php echo $_smarty_tpl->tpl_vars['u']->value->id;?>
" name="id" required class="form-control" id="exampleInputEmail1" placeholder="Enter Safety/buffer stock" aria-describedby="emailHelp">
                                                                                        <input required type="text" name="part_description" placeholder="Enter Part Description" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->part_description;?>
" id="">
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label>Rate<span class="text-danger">*</span></label> <br>
                                                                                        <input required type="number" step="any" name="fg_rate" placeholder="Enter Rate" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->fg_rate;?>
" required>
                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- edit Modal -->

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
                        <!-- ./col -->
                    </div>

                </div>
                <!-- /.row -->
                <!-- Main row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
</div>
<?php }
}
