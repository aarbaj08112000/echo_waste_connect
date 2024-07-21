<?php
/* Smarty version 4.3.2, created on 2024-07-21 14:37:20
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\reports\view_planning_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_669ccfc8963b25_50677777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5a382eaf0441215813620098117726d655b5852' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\reports\\view_planning_data.tpl',
      1 => 1721550169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669ccfc8963b25_50677777 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper container-xxl flex-grow-1 container-p-y">
<nav aria-label="breadcrumb">
<div class="sub-header-left pull-left breadcrumb">
  <h1>
    Reports
    <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
      <i class="ti ti-chevrons-right" ></i>
      <em >View Planning Data</em></a>
  </h1>
  <br>
  <span >View Planning Data</span>
</div>
</nav>
<div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
<button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
<button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>

</div>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <div class="">
                <div class="row">
                    <div class="col-12">
                        <!-- /.card -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"></h3>
                                <!-- <a class="btn btn-dark" href="<?php echo base_url();?>
planing_data/<?php echo $_smarty_tpl->tpl_vars['financial_year']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
">< Back </a> -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                            <div class="table-responsive text-nowrap">
                                <table id="view-planning-data" class="table table-bordered table-striped">
                                    <thead>
                                    
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Item part Number</th>
                                            <th>Item part Description</th>
                                            <th>BOM Qty</th>
                                            <th>Schedule Qty</th>
                                            <!-- <th>Schedule 2 Qty</th>
                                            <th>Change In Schedule Qty</th> -->
                                            <th>Required Qty</th>
                                            <th>Actual Stock</th>
                                            <th>Shortage Stock</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['planing_data']->value, 't', false, 'index');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
                                        
                                            <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['index']->value+1);?>
                                            <?php $_smarty_tpl->_assignInScope('net_schedule', 0);?>
                                            <?php $_smarty_tpl->_assignInScope('req_qty', $_smarty_tpl->tpl_vars['t']->value->schedule_qty*$_smarty_tpl->tpl_vars['t']->value->bom_qty);?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['t']->value->schedule_qty_2)) && $_smarty_tpl->tpl_vars['t']->value->schedule_qty_2 != 0) {?>
                                                <?php $_smarty_tpl->_assignInScope('net_schedule', $_smarty_tpl->tpl_vars['t']->value->schedule_qty_2-$_smarty_tpl->tpl_vars['t']->value->schedule_qty);?>
                                                <?php $_smarty_tpl->_assignInScope('req_qty', $_smarty_tpl->tpl_vars['t']->value->required_qty+($_smarty_tpl->tpl_vars['t']->value->schedule_qty*$_smarty_tpl->tpl_vars['t']->value->bom_qty)+($_smarty_tpl->tpl_vars['net_schedule']->value*$_smarty_tpl->tpl_vars['t']->value->bom_qty));?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_assignInScope('shortage_qty', $_smarty_tpl->tpl_vars['req_qty']->value-$_smarty_tpl->tpl_vars['t']->value->stock);?>
                                            
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['t']->value->part_number;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['t']->value->part_description;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['t']->value->bom_qty;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['t']->value->schedule_qty;?>
</td>
                                                <!-- <td><?php echo $_smarty_tpl->tpl_vars['t']->value->schedule_qty_2;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['net_schedule']->value;?>
</td> -->
                                                <td><?php echo $_smarty_tpl->tpl_vars['req_qty']->value;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['t']->value->stock;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['shortage_qty']->value;?>
</td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                                </div>
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
<?php echo '<script'; ?>
>
// $('#view-planning-data').DataTable({
//     $('.dataTables_length').find('label').contents().filter(function() {
//             return this.nodeType === 3; // Filter out text nodes
//         }).remove();
// });

$(document).ready(function() {
    var table = $('#view-planning-data').DataTable({
        dom: "Bfrtilp",
    });

    // Move the length dropdown to the footer
    $('.dataTables_length').appendTo('#table-footer');
    $('.dataTables_length').appendTo('#pagination');
    // Remove text nodes from length dropdown
    $('.dataTables_length').find('label').contents().filter(function() {
        return this.nodeType === 3; // Filter out text nodes
    }).remove();
});
<?php echo '</script'; ?>
><?php }
}
