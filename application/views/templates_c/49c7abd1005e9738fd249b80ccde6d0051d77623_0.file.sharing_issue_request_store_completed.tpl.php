<?php
/* Smarty version 4.3.2, created on 2024-06-13 19:23:24
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/sharing_issue_request_store_completed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_666af9d421fd01_34829183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49c7abd1005e9738fd249b80ccde6d0051d77623' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/store/sharing_issue_request_store_completed.tpl',
      1 => 1718286781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666af9d421fd01_34829183 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Sharing Issue Request - Completed</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard');?>
">Home</a></li>
                            <li class="breadcrumb-item active">Assets</li>
                        </ol>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div>
                <div class="row">
                    <br>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="btn btn-info"
                                    href="<?php echo base_url('sharing_issue_request_store');?>
">View Pending Requests</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr No</th>
                                            <th>Part Number / Description / Thickness / Weight</th>
                                            <th>Status</th>
                                            <th>Date & Time</th>
                                            <th>Actual Store Stock</th>
                                            <th>Required Qty</th>
                                            <th>Accept Qty</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (($_smarty_tpl->tpl_vars['sharing_issue_request']->value)) {?>
                                            <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sharing_issue_request']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['u']->value->part_number;?>
 /
                                                        <?php echo $_smarty_tpl->tpl_vars['u']->value->part_description;?>
/
                                                        <?php echo $_smarty_tpl->tpl_vars['u']->value->thickness;?>
/
                                                        <?php echo $_smarty_tpl->tpl_vars['u']->value->weight;?>

                                                    </td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['u']->value->status;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['u']->value->created_date;?>
 / <?php echo $_smarty_tpl->tpl_vars['u']->value->created_time;?>
</td>
                                                    <td>
                                                        <?php echo $_smarty_tpl->tpl_vars['u']->value->stock;?>

                                                    </td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['u']->value->qty;?>
</td>
                                                    <td>
                                                        <?php echo $_smarty_tpl->tpl_vars['u']->value->accepted_qty;?>

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
                    </div>
                </div>
               </div><!-- /.container-fluid -->
        </section>
 </div><?php }
}
