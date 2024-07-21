<?php
/* Smarty version 4.3.2, created on 2024-07-04 10:04:42
  from '/var/www/html/extra/erp_converted/application/views/templates/purchase/approved_supplier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66862662cc0a44_11378219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51e11d6fde0822ba5409ec5e6376f5727b7b6481' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/purchase/approved_supplier.tpl',
      1 => 1720010225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66862662cc0a44_11378219 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper container-xxl flex-grow-1 container-p-y">
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
                <select name="supplier_id" class="form-control select2" id="supplier_id">
                <option value="All"> All </option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplier_list']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?> <option <?php if (($_smarty_tpl->tpl_vars['filter_supplier_id']->value === $_smarty_tpl->tpl_vars['s']->value->id)) {?>selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value->supplier_name;?>
 </option><?php
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
          Reports
          <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Approved Supplier List</em></a>
        </h1>
        <br>
        <span >Approved Supplier List</span>
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
              <div class="card-header">
                <h3 class="card-title"></h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <div class="table-responsive text-nowrap">
                <table id="approved_supplier_table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                  <th><b>Search <?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</b></th>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </tr>
                  </thead>
                  <tbody>
                                         
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
    <div class="modal fade" id="exampleModal2<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Supplier Number </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <form action="<?php echo base_url('updateSupplier');?>
" method="POST" enctype="multipart/form-data">
                                      <div class="form-group">
                                        <label for="machine_name">Supplier Name</label>
                                        <span class="text-danger">*</span>
                                        <input value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
" name="id" type="hidden" required class="form-control" id="updateName" aria-describedby="emailHelp" placeholder="Enter Supplier Name">
                                        <input value="<?php echo $_smarty_tpl->tpl_vars['s']->value->supplier_name;?>
" readonly name="updateName" type="text" required class="form-control" id="updateName" aria-describedby="emailHelp" placeholder="Enter Supplier Name">
                                      </div>
                                      <div class="form-group">
                                        <label for="machine_name">Approve Supplier</label>
                                        <span class="text-danger">*</span>
                                        <select name="admin_approve" required id="" class="form-control">
                                          <option value="accept">accept </option>
                                          <option value="pending">pending </option>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label for="machine_name">Supplier Number</label>
                                        <span class="text-danger">*</span>
                                        <input value="<?php echo $_smarty_tpl->tpl_vars['s']->value->supplier_number;?>
" readonly name="updateNumber" type="text" required class="form-control" id="updateName" aria-describedby="emailHelp" placeholder="Enter Supplier Number">
                                      </div>
                                      <div class="form-group">
                                        <label for="machine_name">Supplier Address</label>
                                        <span class="text-danger">*</span>
                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['s']->value->location;?>
" name="updatesupplierlocation" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Supplier Number">
                                      </div>
                                      <div class="form-group">
                                        <label for="machine_name">Supplier Mobile Number</label>
                                        <span class="text-danger">*</span>
                                        <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['s']->value->mobile_no;?>
" name="updatesupplierMnumber" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Supplier Number">
                                      </div>
                                      <div class="form-group">
                                        <label for="machine_name">Other Document 2</label>
                                        <input type="file" name="other_document_2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Supplier Mobile Number">
                                        <input type="hidden" name="other_document_2_old" value="<?php echo $_smarty_tpl->tpl_vars['s']->value->other_document_2;?>
" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Supplier Mobile Number">
                                      </div>
                                      <div class="form-group">
                                        <label for="machine_name">Other Document 3</label>
                                        <input type="file" name="other_document_3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Supplier Mobile Number">
                                        <input type="hidden" name="other_document_3_old" value="<?php echo $_smarty_tpl->tpl_vars['s']->value->other_document_3;?>
" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Supplier Mobile Number">
                                      </div>
                                      <div class="form-group">
                                        <label for="machine_name">Upload NDA Document</label>
                                        <input type="file" name="nda_document" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Supplier Mobile Number">
                                        <input type="hidden" name="nda_document_old" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['s']->value->nda_document;?>
" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Supplier Mobile Number">
                                      </div>
                                      <div class="form-group">
                                        <label>With in State </label>
                                        <span class="text-danger">*</span>
                                        <select class="form-control select2" name="with_in_state" style="width: 100%;">
                                          <option <?php if (($_smarty_tpl->tpl_vars['s']->value->with_in_state == "yes")) {?>selected<?php }?> value="yes"> Yes </option>
                                          <option <?php if (($_smarty_tpl->tpl_vars['s']->value->with_in_state == "no")) {?>selected <?php }?> value="no">No </option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label for="machine_name">Supplier Email</label>
                                      <span class="text-danger">*</span>
                                      <input type="email" value="<?php echo $_smarty_tpl->tpl_vars['s']->value->email;?>
" name="updatesupplierEmail" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Supplier Number">
                                    </div>
                                    <div class="form-group">
                                      <label for="customer_location">Add State</label>
                                      <span class="text-danger">*</span>
                                      <input type="text" name="ustate" required value="<?php echo $_smarty_tpl->tpl_vars['s']->value->state;?>
" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add State">
                                    </div>
                                    <div class="form-group">
                                      <label for="customer_location">Add GST Number</label>
                                      <span class="text-danger">*</span>
                                      <input type="text" name="ugst_no" required value="<?php echo $_smarty_tpl->tpl_vars['s']->value->gst_number;?>
" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add GST Number">
                                    </div>
                                    <div class="form-group">
                                      <label for="machine_name">Other Document 1</label>
                                      <input type="file" name="other_document_1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Supplier Mobile Number">
                                      <input type="hidden" name="other_document_1_old" value="<?php echo $_smarty_tpl->tpl_vars['s']->value->other_document_1;?>
" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Supplier Mobile Number">
                                    </div>
                                    <div class="form-group">
                                      <label for="payment_terms">Payment Terms</label>
                                      <span class="text-danger">*</span>
                                      <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['s']->value->payment_terms;?>
" name="upaymentTerms" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Payment Terms">
                                    </div>
                                    <div class="form-group">
                                      <label for="machine_name">Upload Registration Document</label>
                                      <input type="file" name="registration_document" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Supplier Mobile Number">
                                      <input type="hidden" name="registration_document_old" value="<?php echo $_smarty_tpl->tpl_vars['s']->value->registration_document;?>
" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Supplier Mobile Number">
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
                        <div class="modal fade" id="exampleModal<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Delete </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="<?php echo base_url('delete');?>
" method="POST">
                                <input value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
" name="id" type="hidden" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Machine Name">
                                <input value="supplier" name="table_name" type="hidden" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Machine Name"> Are you sure you want to delete
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-danger">Delete </button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
  </div>
  <!-- /.content-wrapper -->

  <?php echo '<script'; ?>
>
    var column_details =  <?php echo json_encode($_smarty_tpl->tpl_vars['data']->value);?>
;
    var page_length_arr = <?php echo json_encode($_smarty_tpl->tpl_vars['page_length_arr']->value);?>
;
    var is_searching_enable = <?php echo json_encode($_smarty_tpl->tpl_vars['is_searching_enable']->value);?>
;
    var is_top_searching_enable =  <?php echo json_encode($_smarty_tpl->tpl_vars['is_top_searching_enable']->value);?>
;
    var is_paging_enable =  <?php echo json_encode($_smarty_tpl->tpl_vars['is_paging_enable']->value);?>
;
    var is_serverSide =  <?php echo json_encode($_smarty_tpl->tpl_vars['is_serverSide']->value);?>
;
    var no_data_message =  <?php echo json_encode($_smarty_tpl->tpl_vars['no_data_message']->value);?>
;
    var is_ordering =  <?php echo json_encode($_smarty_tpl->tpl_vars['is_ordering']->value);?>
;
    var sorting_column = <?php echo $_smarty_tpl->tpl_vars['sorting_column']->value;?>
;
    var api_name =  <?php echo json_encode($_smarty_tpl->tpl_vars['api_name']->value);?>
;
    var base_url = <?php echo json_encode($_smarty_tpl->tpl_vars['base_url']->value);?>
;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/public/js/reports/approved_supplier.js"><?php echo '</script'; ?>
><?php }
}
