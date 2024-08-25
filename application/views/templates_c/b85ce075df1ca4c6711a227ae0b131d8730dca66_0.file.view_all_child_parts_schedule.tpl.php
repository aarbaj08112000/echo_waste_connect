<?php
/* Smarty version 4.3.2, created on 2024-08-25 20:26:50
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\customer\view_all_child_parts_schedule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66cb463254ade1_61265773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b85ce075df1ca4c6711a227ae0b131d8730dca66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\customer\\view_all_child_parts_schedule.tpl',
      1 => 1724496254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cb463254ade1_61265773 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper container-xxl flex-grow-1 container-p-y">
    <!-- Navbar -->

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme filter-popup-block" style="width: 0px;">
    <div class="app-brand demo justify-content-between">
        <a href="javascript:void(0)" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Filter</span>
        </a>
        <div class="close-filter-btn d-block filter-popup cursor-pointer">
                <i class="ti ti-x fs-8"></i>
            </div>
    </div>
    <nav class="sidebar-nav scroll-sidebar filter-block" data-simplebar="init">
      <div class="simplebar-content" >
        <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <div class="filter-row">
              <li class="nav-small-cap">
                <span class="hide-menu">Select Customer</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                  <select name="customer_name" class="form-control select2" id="customer_name">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_data']->value, 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                  <option 
                      value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
                   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
              </li>
            </div>
          
            

        </ul>
      </div>
    </nav>
    <div class="filter-popup-btn">
            <button class="btn btn-outline-danger reset-filter">Reset</button>
            <button class="btn btn-primary search-filter">Search</button>
        </div>
</aside>

    <nav aria-label="breadcrumb">
      <div class="sub-header-left pull-left breadcrumb">
        <h1>
          Planning & Sales
          <a hijacked="yes"  class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Customer PO QTY Tracking</em></a>
        </h1>
        <br>
        <span >Monthly MRP Req</span>
      </div>
    </nav>
    <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
      <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
      <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
            <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button>
    </div>

    <!-- Content Wrapper. Contains page content -->
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
                                <a class="btn btn-dark" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
planing_data/<?php echo $_smarty_tpl->tpl_vars['financial_year']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
/0">Back</a>
                                <!-- <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
                                    Update Schedule Qty 2 </button> -->
                                <!-- Button trigger modal -->
                                <!-- <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
                                    Add Planing</button> -->
                                <!-- Modal -->
                              
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                   <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Item part Number</th>
                                            <th>Item part Description</th>                                         
                                            <th>Actual Stock</th>
                                            <th>Net MRP Req</th>
                                            <th>Required Qty </th>
                                            <th>Part Rate</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                        <?php $_smarty_tpl->_assignInScope('total', 0);?>
                                     
                                        <?php if ($_smarty_tpl->tpl_vars['child_part_master']->value) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_part_master_main']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
                                                <?php $_smarty_tpl->_assignInScope('subtotal', 0);?>
                                                <?php $_smarty_tpl->_assignInScope('shortage_qty', 0);?>
                                                <?php $_smarty_tpl->_assignInScope('actual_stock', 0);?>
                                                <?php if ($_smarty_tpl->tpl_vars['child_part_master']->value[$_smarty_tpl->tpl_vars['t']->value->part_number]) {?>
                                                    
                                                    <?php $_smarty_tpl->_assignInScope('req_qty', 0);?>
                                                    <?php if ($_smarty_tpl->tpl_vars['planing_data']->value[$_smarty_tpl->tpl_vars['child_part_master']->value[$_smarty_tpl->tpl_vars['t']->value->part_number][0]->child_part_id]) {?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['planing_data']->value[$_smarty_tpl->tpl_vars['child_part_master']->value[$_smarty_tpl->tpl_vars['t']->value->part_number][0]->child_part_id], 't1');
$_smarty_tpl->tpl_vars['t1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t1']->value) {
$_smarty_tpl->tpl_vars['t1']->do_else = false;
?>
                                                            <?php $_smarty_tpl->_assignInScope('schedule_qty_2', $_smarty_tpl->tpl_vars['t1']->value->schedule_qty_2);?>
                                                            <?php $_smarty_tpl->_assignInScope('schedule_qty', $_smarty_tpl->tpl_vars['t1']->value->schedule_qty);?>
                                                            <?php $_smarty_tpl->_assignInScope('net_schedule', 0);?>

                                                            <?php if ($_smarty_tpl->tpl_vars['schedule_qty_2']->value != 0) {?>
                                                                <?php $_smarty_tpl->_assignInScope('net_schedule', $_smarty_tpl->tpl_vars['schedule_qty_2']->value-$_smarty_tpl->tpl_vars['schedule_qty']->value);?>
                                                                <?php $_smarty_tpl->_assignInScope('req_qty', $_smarty_tpl->tpl_vars['req_qty']->value+$_smarty_tpl->tpl_vars['t1']->value->required_qty+($_smarty_tpl->tpl_vars['net_schedule']->value*$_smarty_tpl->tpl_vars['t1']->value->bom_qty));?>
                                                            <?php } else { ?>
                                                                <?php $_smarty_tpl->_assignInScope('req_qty', $_smarty_tpl->tpl_vars['req_qty']->value+($_smarty_tpl->tpl_vars['t1']->value->schedule_qty*$_smarty_tpl->tpl_vars['t1']->value->bom_qty));?>
                                                            <?php }?>
                                                            
                                                            <?php $_smarty_tpl->_assignInScope('actual_stock', $_smarty_tpl->tpl_vars['actual_stock']->value+$_smarty_tpl->tpl_vars['t1']->value->actual_stock);?>
                                                            <?php $_smarty_tpl->_assignInScope('shortage_qty', $_smarty_tpl->tpl_vars['shortage_qty']->value+($_smarty_tpl->tpl_vars['req_qty']->value-$_smarty_tpl->tpl_vars['child_part_data']->value[$_smarty_tpl->tpl_vars['t']->value->part_number][0]->stock));?>
                                                            <?php $_smarty_tpl->_assignInScope('subtotal', $_smarty_tpl->tpl_vars['child_part_master']->value[$_smarty_tpl->tpl_vars['t']->value->part_number][0]->part_rate*$_smarty_tpl->tpl_vars['req_qty']->value);?>
                                                            <?php $_smarty_tpl->_assignInScope('total', $_smarty_tpl->tpl_vars['total']->value+$_smarty_tpl->tpl_vars['subtotal']->value);?>
                                                            <?php $_smarty_tpl->_assignInScope('net_mrp_req', $_smarty_tpl->tpl_vars['req_qty']->value-$_smarty_tpl->tpl_vars['child_part_data']->value[$_smarty_tpl->tpl_vars['t']->value->part_number][0]->stock);?>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php }?>
                                                    
                                                <?php }?>
                                                
                                                
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[$_smarty_tpl->tpl_vars['t']->value->part_number][0]->part_number;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[$_smarty_tpl->tpl_vars['t']->value->part_number][0]->part_description;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[$_smarty_tpl->tpl_vars['t']->value->part_number][0]->stock;?>
</td>
                                                    <td class="<?php if ($_smarty_tpl->tpl_vars['net_mrp_req']->value > 0) {?> text-danger <?php } else { ?> text-success <?php }?>"><?php echo $_smarty_tpl->tpl_vars['net_mrp_req']->value;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['req_qty']->value;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['child_part_master']->value[$_smarty_tpl->tpl_vars['t']->value->part_number][0]->part_rate;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['subtotal']->value;?>
</td>
                                                </tr>
                                                <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php }?>
                                    </tbody>
                                    <tfoot>
                                        <tr style="text-align:right">
                                            <th colspan="7">Total Purchase Value</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</th>
                                        </tr>
                                    </tfoot>
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
>
var file_name = "monthly_mrp_req";
var pdf_title = "Monthly MRP Req";
   
   // datatable initilization.
   new DataTable('#example1',{
      dom: 'Bfrtip',
      buttons: [
              {     
                    extend: 'csv',
                      text: '<i class="ti ti-file-type-csv"></i>',
                      init: function(api, node, config) {
                      $(node).attr('title', 'Download CSV');
                      },
                      customize: function (csv) {
                            var lines = csv.split('\n');
                            var modifiedLines = lines.map(function(line) {
                                var values = line.split(',');
                                values.splice(13, 1);
                                return values.join(',');
                            });
                            return modifiedLines.join('\n');
                        },
                        filename : file_name
                    },
                
                  {
                    extend: 'pdf',
                    text: '<i class="ti ti-file-type-pdf"></i>',
                    init: function(api, node, config) {
                        $(node).attr('title', 'Download Pdf');
                        
                    },
                    filename: file_name,
                   
                    customize: function (doc) {
                      doc.pageMargins = [15, 15, 15, 15];
                      doc.content[0].text = pdf_title;
                      doc.content[0].color = theme_color;
                        // doc.content[1].table.widths = ['15%', '19%', '13%', '13%','15%', '15%', '10%'];
                        doc.content[1].table.body[0].forEach(function(cell) {
                            cell.fillColor = theme_color;
                        });
                        doc.content[1].table.body.forEach(function(row, rowIndex) {
                            row.forEach(function(cell, cellIndex) {
                                var alignmentClass = $('#example1 tbody tr:eq(' + rowIndex + ') td:eq(' + cellIndex + ')').attr('class');
                                var alignment = '';
                                if (alignmentClass && alignmentClass.includes('dt-left')) {
                                    alignment = 'left';
                                } else if (alignmentClass && alignmentClass.includes('dt-center')) {
                                    alignment = 'center';
                                } else if (alignmentClass && alignmentClass.includes('dt-right')) {
                                    alignment = 'right';
                                } else {
                                    alignment = 'left';
                                }
                                cell.alignment = alignment;
                            });
                            row.splice(14, 1);
                        });
                    }
                },
            ],
   });
<?php echo '</script'; ?>
><?php }
}
