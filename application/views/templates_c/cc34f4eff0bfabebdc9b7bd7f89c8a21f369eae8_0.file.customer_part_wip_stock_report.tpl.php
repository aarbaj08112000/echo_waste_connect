<?php
/* Smarty version 4.3.2, created on 2024-06-17 18:27:34
  from '/var/www/html/extra/erp_converted/application/views/templates/subcom_challan/customer_part_wip_stock_report.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_667032bec59b74_50403780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc34f4eff0bfabebdc9b7bd7f89c8a21f369eae8' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/subcom_challan/customer_part_wip_stock_report.tpl',
      1 => 1718605193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667032bec59b74_50403780 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="width:100%" class="wrapper">
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Customer item part</li>
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
                <form action="<?php echo (defined('BASE_URL') ? constant('BASE_URL') : null);?>
customer_part_wip_stock_report" method="POST">
                  <div class="row">
                    <div class="col-lg-7">
                      <label for="">Select Part Number / Description / Customer</label>
                      <select name="selected_customer_part_number" required id="" class="form-control select2">
                        <option <?php if ($_smarty_tpl->tpl_vars['selected_customer_part_number']->value == 0) {?>selected <?php }?> value="0">NA</option>
                        <?php if ($_smarty_tpl->tpl_vars['customer_parts_data']->value) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_parts_data']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['selected_customer_part_number']->value == $_smarty_tpl->tpl_vars['c']->value->part_number) {?>selected <?php }?> value="
                                                                <?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
">
                          <?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
 /
                          <?php echo $_smarty_tpl->tpl_vars['c']->value->part_description;?>
 /
                          <?php echo $_smarty_tpl->tpl_vars['c']->value->customer_name;?>

                        </option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <div class="form-group">
                        <button class="btn btn-danger mt-4">
                          Search
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Sr. No.</th>
                      <th>Customer Name</th>
                      <th>Customer Part Number</th>
                      <th>item part Number</th>
                      <th>item part Description</th>
                      <th>Inhouse Stock</th>
                      <th>FG Stock</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $_smarty_tpl->_assignInScope('i', 1);?>
                    <?php if ($_smarty_tpl->tpl_vars['operations_bom']->value) {?>
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['operations_bom']->value, 'po');
$_smarty_tpl->tpl_vars['po']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->do_else = false;
?>
                    
                    <tr>
                      <td>
                        <?php echo $_smarty_tpl->tpl_vars['i']->value;?>

                      </td>
                      <td>
                        <?php echo $_smarty_tpl->tpl_vars['customer_data']->value[$_smarty_tpl->tpl_vars['po']->value->id][0]->customer_name;?>

                      </td>
                      <td>
                        <?php echo $_smarty_tpl->tpl_vars['po']->value->customer_part_number;?>

                      </td>
                      <td>
                        <?php echo $_smarty_tpl->tpl_vars['output_part_data']->value[$_smarty_tpl->tpl_vars['po']->value->id][0]->part_number;?>

                      </td>
                      <td>
                        <?php echo $_smarty_tpl->tpl_vars['output_part_data']->value[$_smarty_tpl->tpl_vars['po']->value->id][0]->part_description;?>

                      </td>
                      <td>
                        <?php if ($_smarty_tpl->tpl_vars['type']->value[$_smarty_tpl->tpl_vars['po']->value->id] == "inhouse_parts") {?>
                        <?php echo $_smarty_tpl->tpl_vars['current_stock']->value[$_smarty_tpl->tpl_vars['po']->value->id];?>

                        <?php }?>
                      </td>
                      <td>
                        <?php if ($_smarty_tpl->tpl_vars['type']->value[$_smarty_tpl->tpl_vars['po']->value->id] == "customer_stock") {?>
                        <?php echo $_smarty_tpl->tpl_vars['current_stock']->value[$_smarty_tpl->tpl_vars['po']->value->id];?>

                        <?php }?>
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
      </div>
    </section>
  </div>
</div><?php }
}
