<?php
/* Smarty version 4.3.2, created on 2024-08-24 16:28:36
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\sales\sales_invoice_released.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c9bcdc2d29c9_13492621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1985c4cb5f430346176f059c522d35acf71ef8c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\sales\\sales_invoice_released.tpl',
      1 => 1724496257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c9bcdc2d29c9_13492621 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper wrapper container-xxl flex-grow-1 container-p-y">
    <!-- Navbar -->
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <!-- Content Wrapper. Contains page content -->

    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme filter-popup-block" style="width: 0px;">
    <div class="app-brand demo justify-content-between">
        <a href="javascript:void(0)" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Filter</span>
        </a>
        <div class="close-filter-btn d-block filter-popup cursor-pointer">
                <i class="ti ti-x fs-8"></i>
            </div>
    </div>
    <form action="<?php echo base_url('sales_invoice_released');?>
" method="post">
    <nav class="sidebar-nav scroll-sidebar filter-block" data-simplebar="init">
      <div class="simplebar-content" >
        <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <div class="filter-row">
              <li class="nav-small-cap">
                <span class="hide-menu">Select Month</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                <select required name="created_month" id="" class="form-control select2">
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
              </li>
            </div>
            <div class="filter-row">
              <li class="nav-small-cap">
                <span class="hide-menu">Select Year</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
              <div class="input-group">
              <select required name="created_year" id="" class="form-control select2">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, range(2022,2027), 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
                  <option <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['created_year']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
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
    </form>
</aside>

    <nav aria-label="breadcrumb">
      <div class="sub-header-left pull-left breadcrumb">
        <h1>
          Planning & Sales
          <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Sales Invoice</em></a>
        </h1>
        <br>
        <span >View Sales Invoice</span>
      </div>
    </nav>
    <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
      <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
      <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
      <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
      <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button>
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
                            

                           
                            <!-- /.card-header -->
                            <div class="">
                            <div class="table-responsive text-nowrap">
                                <table id="example1" class="table  table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>Invoice Date</th>
                                            <th>Vehicle Number</th>
                                            <th>Sales Invoice Number</th>
                                            <th>Customer</th>
                                            <th>View Details</th>
                                            <th>PDI</th>
                                            <th>E-Invoice Details</th>
                                            <th>Status</th>
                                            <th>E-Invoice Status</th>
                                            <th>Is EWay-Bill Available</th>
                                            <th>Total Price (Rs.)</th>
                                            <th style="width: 10%;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $_smarty_tpl->_assignInScope('srNo', 1);?>
                                        <?php if ($_smarty_tpl->tpl_vars['new_sales']->value) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_sales']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                
                                                <?php if ((isset($_smarty_tpl->tpl_vars['c']->value->status))) {?>
                                                    <tr>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['srNo']->value;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['c']->value->created_date;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['c']->value->vehicle_number;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['c']->value->sales_number;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['c']->value->customer_name;?>
</td>
                                                        <td>
                                                            <a class="" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
view_new_sales_by_id/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><i class="ti ti-eye"></i></i></a>
                                                        </td>
                                                        <td>
                                                            <a class="" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
view_PDI_inspection_report/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><i class="ti ti-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <?php if ($_smarty_tpl->tpl_vars['c']->value->status != "pending") {?>
                                                            <a class="" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
view_e_invoice_by_id/<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><i class="ti ti-eye"></i></a>
                                                            <?php }?>
                                                        </td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['c']->value->status;?>
</td>
                                                       
                                                        <td><?php echo $_smarty_tpl->tpl_vars['c']->value->Status;?>
</td>
                                                        <td><?php if ((isset($_smarty_tpl->tpl_vars['c']->value->Status))) {
echo $_smarty_tpl->tpl_vars['c']->value->EwbStatus;
}?></td>
                                                        <?php $_smarty_tpl->_assignInScope('sales_id', $_smarty_tpl->tpl_vars['c']->value->id);?>
                                                        
                                                        <td><?php echo number_format($_smarty_tpl->tpl_vars['final_po_amount']->value[$_smarty_tpl->tpl_vars['sales_id']->value],2);?>
</td>
                                                        <td>
                                                            
                                                            <?php if ($_smarty_tpl->tpl_vars['c']->value->status != "Cancelled" && (empty($_smarty_tpl->tpl_vars['c']->value->Status) || $_smarty_tpl->tpl_vars['c']->value->Status == "CANCELLED")) {?>
                                                            <a type="button" class="" data-bs-toggle="modal" data-bs-target="#cancelInvoice<?php echo $_smarty_tpl->tpl_vars['srNo']->value;?>
"><i class="ti ti-circle-x"></i></a>&nbsp;
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['c']->value->status == "pending") {?>
                                                            <a type="button" data-bs-toggle="modal" class="" data-bs-target="#deleteInvoice<?php echo $_smarty_tpl->tpl_vars['srNo']->value;?>
"><i class="ti ti-trash"></i></a>
                                                            <?php }?>

                                                            <div class="modal fade" id="cancelInvoice<?php echo $_smarty_tpl->tpl_vars['srNo']->value;?>
" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Update Status</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <form action="<?php echo base_url('cancel_sale_invoice');?>
" method="POST">
                                                                                    <div class="col-lg-12">
                                                                                        <div class="form-group">
                                                                                            <label for=""><b>Are you sure want to Cancel this invoice?</b> </label>
                                                                                            <input type="hidden" name="sales_id" value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" required class="form-control">
                                                                                            <input type="hidden" name="sales_number" value="<?php echo $_smarty_tpl->tpl_vars['c']->value->sales_number;?>
" required class="form-control">
                                                                                            <input type="hidden" name="status" value="<?php echo $_smarty_tpl->tpl_vars['c']->value->status;?>
" required class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                                        </div>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            
                                                            <!-- delete model -->
                                                            <div class="modal fade" id="deleteInvoice<?php echo $_smarty_tpl->tpl_vars['srNo']->value;?>
" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Delete Invoice</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <form action="<?php echo base_url('delete_sale_invoice');?>
" method="POST">
                                                                                    <div class="col-lg-12">
                                                                                        <div class="form-group">
                                                                                            <label for=""><b>Are you sure want to Delete this invoice?</b> </label>
                                                                                            <input type="hidden" name="sales_id" value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" required class="form-control">
                                                                                            <input type="hidden" name="status" value="<?php echo $_smarty_tpl->tpl_vars['c']->value->status;?>
" required class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                            <button type="submit" class="btn btn-primary">Delete</button>
                                                                        </div>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php $_smarty_tpl->_assignInScope('srNo', $_smarty_tpl->tpl_vars['srNo']->value+1);?>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php }?>
                                    </tbody>

                                    <!-- Pagination code
                                    
                                    <p><?php echo $_smarty_tpl->tpl_vars['links']->value;?>
</p>
                                    <div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 10 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div>
                                    
                                    -->
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

<?php echo '<script'; ?>
>
var file_name = "report_prod_rejection";
var pdf_title = "Rejection Report";
new DataTable('#example1',{
   
      dom: 'Bfrtip',
      scrollX: true, 
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
