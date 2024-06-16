<?php
/* Smarty version 4.3.2, created on 2024-06-16 19:24:54
  from '/var/www/html/extra_work/test_git/application/views/templates/reports/reports_incoming_quality.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_666eeeae7262f8_91915528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '941b68fdafb6ebbef567f6437a8f44da94839546' => 
    array (
      0 => '/var/www/html/extra_work/test_git/application/views/templates/reports/reports_incoming_quality.tpl',
      1 => 1718289303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666eeeae7262f8_91915528 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1>Reports : Incoming Quality report</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo (defined('BASE_URL') ? constant('BASE_URL') : null);?>
dashboard">Home</a></li>
                            <li class="breadcrumb-item active">Incoming Quality report</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <form action="<?php echo (defined('BASE_URL') ? constant('BASE_URL') : null);?>
reports_incoming_quality" method="post">

                                            <div class="form-group">
                                                <label for="">Select Month <span class="text-danger">*</span></label>
                                                <select required name="created_month" id=""
                                                    class="form-control select2">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['month_data']->value, 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                                                        <option <?php if ($_smarty_tpl->tpl_vars['month_number']->value[$_smarty_tpl->tpl_vars['key']->value] == $_smarty_tpl->tpl_vars['created_month']->value) {?>selected<?php }?>
                                                            value="<?php echo $_smarty_tpl->tpl_vars['month_number']->value[$_smarty_tpl->tpl_vars['key']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Select Year <span class="text-danger">*</span></label>
                                                <select required name="created_year" id="" class="form-control select2">
                                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2027+1 - (2022) : 2022-(2027)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 2022, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                <option <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['created_year']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                                 <?php }
}
?>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="col-lg-2">

                                        <input type="submit" class="btn btn-primary mt-4" value="Search">

                                    </div>
                                    </form>
                                </div>
                                <!-- Button trigger modal -->
                                <!-- <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleModal">
                            Add </button> -->
                            </div>
                            <!-- Modal -->
                           

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>

                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Supplier name</th>
                                            <th>Part No</th>
                                            <th>Part Description</th>
                                            <th>GRN No</th>
                                            <th>GRN Date</th>
                                            <th>Received Qty</th>
                                            <th>Validation QTY</th>
                                            <th>Accepted QTY</th>
                                            <th>Rejected QTY</th>
                                            <th>Rejection Remark</th>

                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                    <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                   
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grn_details']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['supplier_data']->value[$_smarty_tpl->tpl_vars['g']->value->supplier_id][0]->supplier_name;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[$_smarty_tpl->tpl_vars['g']->value->part_id][0]->part_number;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[$_smarty_tpl->tpl_vars['g']->value->part_id][0]->part_description;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['inwarding']->value[$_smarty_tpl->tpl_vars['g']->value->inwarding_id][0]->grn_number;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['g']->value->created_date;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['g']->value->qty;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['g']->value->verified_qty;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['g']->value->accept_qty;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['g']->value->reject_qty;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['g']->value->remark;?>
</td>
                                            </tr>
                                            <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
