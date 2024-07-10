<?php
/* Smarty version 4.3.2, created on 2024-07-01 15:18:50
  from '/var/www/html/extra/erp_converted/application/views/templates/molding/mold_maintenance_history.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66827b823dfb87_80098716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd492ec53642defd31918a2f6e1d6a5e3555de58d' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/molding/mold_maintenance_history.tpl',
      1 => 1718605193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66827b823dfb87_80098716 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="" class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a style="marign-right:" class="btn btn-danger" href="<?php echo base_url('mold_maintenance_report');?>
">< Back</a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home </a></li>
                            <li class="breadcrumb-item active"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="">Customer Part<span class="text-danger">*</span> </label>
                                        <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['customer_part_data']->value[0]->part_number;
echo $_smarty_tpl->tpl_vars['customer_part_data']->value[0]->part_description;?>
" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="">Customer Name<span class="text-danger">*</span> </label>
                                        <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['customer_data']->value[0]->customer_name;?>
" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="">Mold Name <span class="text-danger">*</span> </label>
                                        <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['mld_data']->value[0]->mold_name;?>
" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="">Cavities <span class="text-danger">*</span> </label>
                                        <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['mld_data']->value[0]->no_of_cavity;?>
" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="">Life Over Frequency<span class="text-danger">*</span> </label>
                                        <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['mld_data']->value[0]->target_life;?>
" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="">Total Molding Prod QTY <span class="text-danger">*</span> </label>
                                        <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['mld_data']->value[0]->target_over_life;?>
" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="card-body">
                            <table class="table table-bordered table-striped" id="example1">
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Mold PM Frequency</th>
                                        <th>Molding Prod QTY</th>
                                        <th>Last PM Date</th>
                                        <th>Doc</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($_smarty_tpl->tpl_vars['mold_maintenance_history']->value) {?>
                                        <?php $_smarty_tpl->_assignInScope('final_po_amount', 0);?>
                                        <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                        <?php $_smarty_tpl->_assignInScope('totalQuantity', 0);?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mold_maintenance_history']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                                           
                                            <?php $_smarty_tpl->_assignInScope('totalQuantity', 0);?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['molding_production_quantity_data']->value, 'molding_data');
$_smarty_tpl->tpl_vars['molding_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['molding_data']->value) {
$_smarty_tpl->tpl_vars['molding_data']->do_else = false;
?>
                                                <?php $_smarty_tpl->_assignInScope('totalQuantity', $_smarty_tpl->tpl_vars['totalQuantity']->value+$_smarty_tpl->tpl_vars['molding_data']->value->qty);?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            
                                            <?php if (!empty($_smarty_tpl->tpl_vars['p']->value->doc)) {?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->target_life;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->current_molding_prod_qty;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->pm_date;?>
</td>
                                                    <td>
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['p']->value->doc)) {?>
                                                            <a title="Download" class="btn btn-xs btn-success" download href="<?php echo base_url('documents/');
echo $_smarty_tpl->tpl_vars['p']->value->doc;?>
"><i class="fas fa-download" aria-hidden="true"></i> </a>
                                                        <?php }?>
                                                    </td>
                                                </tr>
                                            <?php }?>
                                            <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                </tbody>

                                <tfoot>
                                    <?php if ($_smarty_tpl->tpl_vars['po_parts']->value) {?>
                                        <tr>
                                            <th colspan="11">Total</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['final_po_amount']->value;?>
</th>
                                        </tr>
                                    <?php }?>
                                </tfoot>

                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div><?php }
}
