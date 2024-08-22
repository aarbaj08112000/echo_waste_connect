<?php
/* Smarty version 4.3.2, created on 2024-08-21 18:30:00
  from '/var/www/html/extra_work/erp_converted/application/views/templates/customer/consignee.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c5e4d0737b00_02099124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '488b8624f8e3682c010ca01a7ad4db7152bc39c0' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/customer/consignee.tpl',
      1 => 1724245198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c5e4d0737b00_02099124 (Smarty_Internal_Template $_smarty_tpl) {
?><div  class="wrapper container-xxl flex-grow-1 container-p-y">
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
                  <select name="consignee_name" class="form-control select2" id="consignee_name">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['consignee_list']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
                  <option 
                      value="<?php echo $_smarty_tpl->tpl_vars['t']->value->consignee_name;?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value->consignee_name;?>
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
          <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Customer</em></a>
        </h1>
        <br>
        <span >Consignee</span>
      </div>
    </nav>
    <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
      <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
      <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
      <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
      <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button>
     
      <button type="button" class="btn btn-seconday float-left" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="ti ti-plus "></i></button>
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
                            <div class="">
                               

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header ">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Consignee</h5>
                                                <button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                </button>
                                            </div>
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
add_consignee" method="POST" id="add_consnee">
                                            <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-6">

                                                            <div class="form-group">
                                                                <label for="customer_name">Consignee Name</label><span class="text-danger">*</span>
                                                                <input type="text" name="cconsignee_name" required class="form-control" id="name" aria-describedby="emailHelp" placeholder="Consignee Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="customer_name">Location</label><span class="text-danger">*</span>
                                                                <input type="text" name="clocation" required class="form-control" id="location" aria-describedby="emailHelp" placeholder="Location">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="customer_location">Address</label><span class="text-danger">*</span>
                                                                <input type="text" name="caddress" required class="form-control" id="address" aria-describedby="emailHelp" placeholder="Address">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="customer_location">State</label><span class="text-danger">*</span>
                                                                <input type="text" name="cstate" required class="form-control" id="state" aria-describedby="emailHelp" placeholder="State">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="customer_location">State No </label><span class="text-danger">*</span>
                                                                <input type="text" name="cstate_no" required class="form-control" id="state_num" aria-describedby="emailHelp" placeholder="State No">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                             <div class="form-group">
                                                                <label for="customer_location">PIN</label><span class="text-danger">*</span>
                                                                <input type="text" name="cpin_code" required class="form-control" id="PIN" aria-describedby="emailHelp" placeholder="PIN ">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="customer_location">GST Number</label><span class="text-danger">*</span>
                                                                <input type="text" name="gst_number" required class="form-control" id="gst_no" aria-describedby="emailHelp" placeholder="GST Number">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="customer_location">PAN No</label><span class="text-danger">*</span>
                                                                <input type="text" name="cpan_no" required class="form-control" id="pan" aria-describedby="emailHelp" placeholder="PAN No">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="customer_name">Phone No</label><span class="text-danger">*</span>
                                                                <input type="text" name="cphone_no" required class="form-control" id="phone" aria-describedby="phone" placeholder="Phone No">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                    
                                                    </div>
                                                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="">
                                <table id="example1" class="table  table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Consignee Name</th>
                                            <th>Location</th>
                                            <th>Phone No</th>
                                            <th>Address</th>
                                            <th>State</th>
                                            <th>PIN Code</th>
                                            <th>GST No</th>
                                            <th>PAN No</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        <?php if ($_smarty_tpl->tpl_vars['consignee_list']->value) {?>
                                            <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['consignee_list']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->consignee_name;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->location;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->phone_no;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->address;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->state;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->pin_code;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->gst_number;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->pan_no;?>
</td>
                                                    <td>
                                                        <a type="button" data-bs-toggle="modal" class=" edit-part" data-bs-target="#edit_modal" data-value ='<?php echo $_smarty_tpl->tpl_vars['t']->value->encode_data;?>
'> <i class="ti ti-edit"></i></a>

                                                     
                                                        <div class="modal fade" id="exampleModal3<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
delete" method="POST">
                                                                        <div class="modal-body">
                                                                            <input value="<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
" name="id" type="hidden" required class="form-control" id="delete_id" aria-describedby="emailHelp">
                                                                            <input value="consignee" name="table_name" type="hidden" required class="form-control" id="delete" aria-describedby="emailHelp">
                                                                            Are you sure you want to delete
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-danger">Delete </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

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

    <div class="modal fade" id="edit_modal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Consignee</h5>
                <button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
update_consignee" id="update_form" method="POST">
            <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="customer_name">Consignee Name</label><span class="text-danger">*</span>
                                <input value="<?php echo $_smarty_tpl->tpl_vars['t']->value->consignee_name;?>
" type="text" name="uconsignee_name"  class="form-control" id="uconsignee_name" aria-describedby="emailHelp" placeholder="Consignee Name">
                                <input value="<?php echo $_smarty_tpl->tpl_vars['t']->value->c_id;?>
" type="hidden" name="consignee_id"  class="form-control" id="uconsignee_ref">
                                <input value="<?php echo $_smarty_tpl->tpl_vars['t']->value->address_id;?>
" type="hidden" name="address_id"  class="form-control" id="uaddressRef">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="customer_name">Location</label><span class="text-danger">*</span>
                                <input value="<?php echo $_smarty_tpl->tpl_vars['t']->value->location;?>
" type="text" name="ulocation"  class="form-control" id="ulocation" aria-describedby="location" placeholder="Location">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="customer_location">Address</label><span class="text-danger">*</span>
                                <input type="text" name="uaddress" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->address;?>
"  class="form-control" id="uaddress" aria-describedby="emailHelp" placeholder="Address">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="customer_location">State</label><span class="text-danger">*</span>
                                <input type="text" name="ustate" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->state;?>
"  class="form-control" id="ustate" aria-describedby="emailHelp" placeholder="State">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="customer_location">State No </label><span class="text-danger">*</span>
                                <input type="text" name="ustate_no" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->state_no;?>
"  class="form-control" id="ustate_num" aria-describedby="emailHelp" placeholder="State No">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="customer_location">PIN</label><span class="text-danger">*</span>
                                <input type="text" name="upin_code" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->pin_code;?>
"  class="form-control" id="uPIN" aria-describedby="emailHelp" placeholder="PIN ">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="customer_location">GST Number</label><span class="text-danger">*</span>
                                <input type="text" name="ugst_number" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->gst_number;?>
"  class="form-control" id="ugst_no" aria-describedby="emailHelp" placeholder="GST Number">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="customer_location">PAN No</label><span class="text-danger">*</span>
                                <input type="text" name="upan_no" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->pan_no;?>
"  class="form-control" id="upan" aria-describedby="emailHelp" placeholder="PAN No">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="customer_name">Phone No</label><span class="text-danger">*</span>
                                <input type="text" name="uphone_no" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->phone_no;?>
"  class="form-control" id="uphone" aria-describedby="phone" placeholder="Phone No">
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
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/public/js/consignee.js"><?php echo '</script'; ?>
>
    <!-- /.content-wrapper -->
<?php }
}
