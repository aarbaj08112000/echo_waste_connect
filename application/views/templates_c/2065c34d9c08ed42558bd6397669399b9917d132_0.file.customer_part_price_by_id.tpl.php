<?php
/* Smarty version 4.3.2, created on 2024-07-26 23:29:13
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\customer\customer_part_price_by_id.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66a3e3f14bc6f3_04641472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2065c34d9c08ed42558bd6397669399b9917d132' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\customer\\customer_part_price_by_id.tpl',
      1 => 1721325177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a3e3f14bc6f3_04641472 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
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
                        <h1>Customer Part Price</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Home</a></li>
                            <li class="breadcrumb-item active">Customer Part</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
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
                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
customer_master" class="btn btn-danger ">
                                    Back </a>
                                <br>
                                <br>
                                <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleModal">
                                    Add </button>
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
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
add_customer_price" method="POST" enctype='multipart/form-data'>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="po_num">Select Customer Name / Customer Code / Part Number / Description  </label><span class="text-danger">*</span>
                                                            <select name="customer_master_id" id="" class="from-control select2">
                                                                <?php if ($_smarty_tpl->tpl_vars['customer_part']->value) {?>
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_part']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['customer_id']->value == $_smarty_tpl->tpl_vars['c']->value->customer_id) {?>
                                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['customer']->value[$_smarty_tpl->tpl_vars['c']->value->customer_id][0]->customer_name;?>
/<?php echo $_smarty_tpl->tpl_vars['customer']->value[$_smarty_tpl->tpl_vars['c']->value->customer_id][0]->customer_code;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value->part_description;?>
</option>
                                                                        <?php }?>
                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                <?php }?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="po_num">Part Rate </label><span class="text-danger">*</span>
                                                            <input type="number" step="any" name="rate" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Rate" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="po_num">Revision Number </label><span class="text-danger">*</span>
                                                            <input type="text" name="revision_no" required class="form-control" id="exampleInputEmail1" placeholder="Enter Revision Number" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="po_num">Revision Date</label><span class="text-danger">*</span>
                                                            <input type="date" name="revision_date" required class="form-control" id="exampleInputEmail1" placeholder="Enter Revision Date" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="po_num">Revision Remark</label><span class="text-danger">*</span>
                                                            <input type="text" name="revision_remark" required class="form-control" id="exampleInputEmail1" placeholder="Enter Revision Remark" aria-describedby="emailHelp">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="po_num">Price Uploading Document</label>
                                                            <input type="file" name="uploading_document" class="form-control" id="exampleInputEmail1" placeholder="Enter Price Uploading Document" aria-describedby="emailHelp">
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

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Add Revision</th>
                                            <th>Revision Number</th>
                                            <th>Revision Date</th>
                                            <th>Revision Remark</th>
                                            <th>Customer Name</th>
                                            <th>Part Number</th>
                                            <th>Part Description</th>
                                            <th>Part Rate</th>
                                            <th>Price Supporting Document </th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Add Revision</th>
                                            <th>Revision Number</th>
                                            <th>Revision Date</th>
                                            <th>Revision Remark</th>
                                            <th>Customer Name</th>
                                            <th>Part Number</th>
                                            <th>Part Description</th>
                                            <th>Part Rate</th>
                                            <th>Price Supporting Document </th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                        <?php if ($_smarty_tpl->tpl_vars['customer_part_rate']->value) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_part_rate']->value, 'poo');
$_smarty_tpl->tpl_vars['poo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['poo']->value) {
$_smarty_tpl->tpl_vars['poo']->do_else = false;
?>
                                                
                                                <?php if ($_smarty_tpl->tpl_vars['customer_data']->value[$_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->customer_id][0]->id == $_smarty_tpl->tpl_vars['customer_id']->value) {?>
                                                    <tr>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                        <td>
                                                            <button type="submit" data-toggle="modal" class="btn btn-sm btn-primary" data-target="#exampleModaledit2<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">Add Revision</button>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
view_part_rate_history/<?php echo $_smarty_tpl->tpl_vars['poo']->value->customer_master_id;?>
" class="btn btn-primary btn-sm">history</a>
                                                            <div class="modal fade" id="exampleModaledit2<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex=" -1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog " role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Update Operation</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
updatecustomerpartprice" method="POST" enctype='multipart/form-data'>
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <input value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->id;?>
" type="hidden" name="id" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Part Number </label><span class="text-danger">*</span>
                                                                                            <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->part_number;?>
" name="upart_number" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Number" aria-describedby="emailHelp">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Part Description </label><span class="text-danger">*</span>
                                                                                            <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->part_description;?>
" name="upart_desc" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Description" aria-describedby="emailHelp">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Part Rate </label><span class="text-danger">*</span>
                                                                                            <input type="number" name="rate" step="any" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Rate" aria-describedby="emailHelp">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Revision Date </label><span class="text-danger">*</span>
                                                                                            <input type="date" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[0]->revision_date;?>
" name="revision_date" required class="form-control" id="exampleInputEmail1" placeholder="Enter Revision Date" aria-describedby="emailHelp">
                                                                                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['customer_part_rate_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->customer_master_id;?>
" name="customer_master_id" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Rate" aria-describedby="emailHelp">
                                                                                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['customer_part_rate_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->uploading_document;?>
" name="uploading_document" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Rate" aria-describedby="emailHelp">
                                                                                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['customer_part_rate_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->customer_part_id;?>
" name="customer_part_id" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Rate" aria-describedby="emailHelp">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Revision Number </label><span class="text-danger">*</span>
                                                                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->revision_no;?>
" name="revision_no" required class="form-control" id="exampleInputEmail1" placeholder="Enter Revision Number" aria-describedby="emailHelp">
                                                                                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->customer_id;?>
" name="customer_id" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                                                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->customer_part_id;?>
" name="customer_part_id" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="po_num">Revision Remark </label><span class="text-danger">*</span>
                                                                                            <input type="text" name="revision_remark" required class="form-control" id="exampleInputEmail1" placeholder="Enter Revision Remark" aria-describedby="emailHelp">
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
                                                        </td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['customer_part_rate_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->revision_no;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['customer_part_rate_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->revision_date;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['customer_part_rate_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->revision_remark;?>
</td>
                                                       
                                                        <td><?php echo $_smarty_tpl->tpl_vars['customer_data']->value[$_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->customer_id][0]->customer_name;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->part_number;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->part_description;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['customer_part_rate_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->rate;?>
</td>
                                                        <td>
                                                            <?php if ($_smarty_tpl->tpl_vars['customer_part_rate_data']->value[$_smarty_tpl->tpl_vars['poo']->value->customer_master_id][0]->uploading_document) {?>
                                                                <a download href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
documents/<?php echo $_smarty_tpl->tpl_vars['customer_part_rate_data']->value[0]->uploading_document;?>
" class="btn btn-sm btn-primary">Download</a>
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
    <!-- /.content-wrapper -->
</div>
<?php }
}
