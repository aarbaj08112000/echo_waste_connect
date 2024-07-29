<?php
/* Smarty version 4.3.2, created on 2024-07-26 23:40:18
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\customer\customer_part_documents_by_id.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66a3e68a5cc2c0_58627472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd30d41b01e141b41fc303d0cc525ad66a8a81f2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\customer\\customer_part_documents_by_id.tpl',
      1 => 1721325177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a3e68a5cc2c0_58627472 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['entitlements']->value['isPLMEnabled']) {?>
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
                        <h1>Customer Part Documents</h1>
                    </div>
                    <!-- <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Home</a></li>
                            <li class="breadcrumb-item active">Customer Part</li>
                        </ol>
                    </div>-->
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
                            <div class="row">
                                <h3 class="card-title"></h3>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
customer_master" class="btn btn-danger ">< Back </a>
                                &nbsp;&nbsp;
                                <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleModal">
                                    Add </button> 
                                </div>
                                <!-- Button trigger modal -->
                            </div>
                            <!-- search by part number -->
                            <div class="card-header">
                            <div class="row">
                                    <div class="col-lg-2">
                                    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
customer_part_documents/<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
" method="post">
                                       <div class="form-group">
                                             <label for="Search by Part No">Search by Parts</label>
                                             <select class="form-control select2" name="search_part_id" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="ALL" <?php if ($_smarty_tpl->tpl_vars['search_part_id']->value == 'ALL') {?>selected<?php }?>>ALL</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_part']->value, 'part');
$_smarty_tpl->tpl_vars['part']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['part']->value) {
$_smarty_tpl->tpl_vars['part']->do_else = false;
?>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['search_part_id']->value == $_smarty_tpl->tpl_vars['part']->value->id) {?>selected<?php }?>
                                                        value="<?php echo $_smarty_tpl->tpl_vars['part']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['part']->value->part_number;?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <br><input type="submit" class="btn btn-primary mt-2" value="Search">
                                    </form>
                                    </div>
                                </div>
                                </div>
                                </div>
                            <!-- /.card-header -->
                            
                            <!-- Add Modal -->
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
add_customer_document" method="POST" enctype='multipart/form-data'>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="po_num">Select Customer Name / Customer Code / Part Number / Description </label><span class="text-danger">*</span>
                                                            <select name="customer_master_id" id="" class="from-control select2" required>
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
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="po_num">Document Type </label><span class="text-danger">*</span>
                                                            <select name="type" id="" class="form-control">
                                                                <option value="APQP">APQP</option>
                                                                <option value="PPAP">PPAP</option>
                                                                <option value="QUALITY">QUALITY</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="po_num">Document Name</label>
                                                            <input type="text" name="document_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Document Name" aria-describedby="emailHelp">
                                                            <input type="hidden" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
" class="form-control" id="exampleInputEmail1" placeholder="Enter Document Name" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="po_num">Document <span class="text-danger">*</span></label>
                                                            <input type="file" name="document" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Description" aria-describedby="emailHelp">
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
                            <!-- End of Add modal -->

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Part Number</th>
                                            <th>Part Description</th>
                                            <th>APQP</th>
                                            <th>PPAP</th>
                                            <th>QUALITY </th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Part Number</th>
                                            <th>Part Description</th>
                                            <th>APQP</th>
                                            <th>PPAP</th>
                                            <th>QUALITY </th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php if ($_smarty_tpl->tpl_vars['search_customer_part']->value) {?>
                                            <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search_customer_part']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['customer_id']->value == $_smarty_tpl->tpl_vars['c']->value->customer_id) {?>
                                                    <tr>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['c']->value->part_description;?>
</td>
                                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
part_document/<?php echo $_smarty_tpl->tpl_vars['c']->value->customer_id;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
/APQP" class="btn btn-info">APQP</a></td>
                                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
part_document/<?php echo $_smarty_tpl->tpl_vars['c']->value->customer_id;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
/PPAP" class="btn btn-primary">PPAP</a></td>
                                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
part_document/<?php echo $_smarty_tpl->tpl_vars['c']->value->customer_id;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
/QUALITY" class="btn btn-danger">QUALITY</a></td>
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
<?php }?>
<!-- /.content-wrapper -->
<?php }
}
