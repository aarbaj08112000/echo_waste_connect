<?php
/* Smarty version 4.3.2, created on 2024-08-28 23:04:26
  from '/var/www/html/extra_work/erp_converted/application/views/templates/customer/bom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66cf5fa20361c9_45225928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '943b2922973062e7fa08b34497bf79ba53f55e78' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/customer/bom.tpl',
      1 => 1724866302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cf5fa20361c9_45225928 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="width:100%" class="wrapper">
    <!-- Navbar -->

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div class="wrapper container-xxl flex-grow-1 container-p-y ">
        <!-- Content Header (Page header) -->
        <div class="sub-header-left pull-left breadcrumb">
                <h1>
                    Planning & Sales 
                    <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing">
                        <i class="ti ti-chevrons-right"></i>
                        <em>Customer Part</em></a>
                </h1>
                <br>
                <span>Customer item part </span>
            </div>
        <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5 listing-btn">
            
            <a title="Back To Customer Part" class="btn btn-seconday" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
customer_master" type="button"><i class="ti ti-arrow-left"></i></a>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="">
                <div class="row">
                    <div class="col-12">

                        <!-- /.card -->

                        <div class="card">
                            <div class="">

                                <!-- Button trigger modal -->
                                

                                <!-- <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
                                    Add </button> -->

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog " role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
addbom" method="POST">
                                                    <div class="row">
                                                        <div class="col-lg-12">

                                                            <div class="form-group">
                                                                <label> item part </label><span class="text-danger">*</span>
                                                                <select class="form-control select2" name="child_part_id" style="width: 100%;">
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_part_list']->value, 'c1');
$_smarty_tpl->tpl_vars['c1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c1']->value) {
$_smarty_tpl->tpl_vars['c1']->do_else = false;
?>
                                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['c1']->value->id;?>
">
                                                                            <?php echo $_smarty_tpl->tpl_vars['c1']->value->part_number;?>
/<?php echo $_smarty_tpl->tpl_vars['c1']->value->part_description;?>

                                                                        </option>
                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="po_num">Quantity</label><span class="text-danger">*</span>
                                                                <input type="number" name="quantity" required class="form-control" id="exampleInputEmail1" placeholder="Enter Quantity" aria-describedby="emailHelp">
                                                                <input type="hidden" name="customer_part_id" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->id;?>
" required class="form-control" id="exampleInputEmail1" placeholder="Enter Quantity" aria-describedby="emailHelp">
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
                            <div class="">
                                <table id="bom_part" class="table table-striped w-100">
                                    <thead>
                                        <tr>
                                            <!-- <th>Sr. No.</th>
                                            <th>Customer Part Number</th> -->
                                            <th> Part Number</th>
                                            <th>Part Description</th>
                                            <th>Details</th>
                                            <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isSheetMetal'] != null) {?>
                                             <th>Operations BOM</th>
                                             <?php }?> 
                                             <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isPlastic'] != null) {?>
                                            <!-- <th>Deflashing BOM</th> -->
                                            <?php }?>
                                            <th>Customer Subcon bom </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php if ($_smarty_tpl->tpl_vars['customer_part']->value) {?>
                                            <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_part']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['customer_id']->value == $_smarty_tpl->tpl_vars['c']->value->customer_id) {?>
                                                    <tr>
                                                        <!-- <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td> -->
                                                        <td><?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['c']->value->part_description;?>
</td>
                                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
bom_by_id/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" class="btn btn-info">RM BOM</a></td>
                                                        <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isSheetMetal'] != null) {?>
                                                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
operations_bom/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" class="btn btn-danger">Operations BOM</a></td>
                                                        <?php }?> 
                                                        <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isPlastic'] != null) {?>
                                                        <!-- <td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
deflashing_bom/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" class="btn btn-success">Operations BOM</a></td> -->
                                                        <?php }?>
                                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
subcon_bom/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" class="btn btn-warning">Subcon BOM</a></td>
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
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/public/js/planning_and_sales/bom_parts.js"><?php echo '</script'; ?>
>
<?php }
}
