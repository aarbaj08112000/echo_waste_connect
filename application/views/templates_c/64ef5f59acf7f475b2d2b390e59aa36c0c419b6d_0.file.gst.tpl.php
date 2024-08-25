<?php
/* Smarty version 4.3.2, created on 2024-08-25 18:02:41
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\admin\gst.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66cb246915ba08_45730572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64ef5f59acf7f475b2d2b390e59aa36c0c419b6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\admin\\gst.tpl',
      1 => 1724589152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cb246915ba08_45730572 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
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
                <span class="hide-menu">Part Number</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                  <select name="child_part_id" class="form-control select2" id="part_number_search">
                    <option value="">Select Part Number</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplier_part_list']->value, 'parts');
$_smarty_tpl->tpl_vars['parts']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['parts']->value) {
$_smarty_tpl->tpl_vars['parts']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['parts']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['parts']->value->part_number;?>
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
                <span class="hide-menu">Part Description</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                  <input type="text" id="part_description_search" class="form-control" placeholder="Name">
                </div>
              </li>
            </div>
            <div class="filter-row">
              <li class="nav-small-cap">
                <span class="hide-menu">Name</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                  <input type="text" id="employee_name_search" class="form-control" placeholder="Name">
                </div>
              </li>
            </div>
            <div class="filter-row">
              <li class="nav-small-cap">
                <span class="hide-menu">Name</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                  <input type="text" id="employee_name_search" class="form-control" placeholder="Name">
                </div>
              </li>
            </div>
            <div class="filter-row">
              <li class="nav-small-cap">
                <span class="hide-menu">Name</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                  <input type="text" id="employee_name_search" class="form-control" placeholder="Name">
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
          Admin
          <a hijacked="yes" href="javascript:void(0)" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Master</em></a>
          </h1>
          <br>
          <span >GST</span>
        </div>
      </nav>

      <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
        <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
        <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
               <button type="button" class="btn btn-seconday float-left" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Add Code">
         <i class="ti ti-plus"></i></button>
      </div>

      <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg modal-dialog-centered" role=" document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add GST</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                  </button>
               </div>
               <form action="<?php echo base_url('add_gst');?>
" method="POST" id="add_gst">
               <div class="modal-body">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label for="contractorName">Enter Tax Code </label><span class="text-danger">*</span>
                              <input type="text" name="code" required class="form-control" placeholder="Enter Tax Code">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label for="contractorName">Enter SGST </label><span class="text-danger">*</span>
                              <input type="number" step="any" min="0" max="100" name="sgst" required class="form-control" placeholder="Enter S-GST Value">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label for="contractorName">Enter CGST </label><span class="text-danger">*</span>
                              <input type="number" step="any" min="0" max="100" name="cgst" required class="form-control" placeholder="Enter C-GST Value">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label for="contractorName">Enter IGST </label><span class="text-danger">*</span>
                              <input type="number" step="any" min="0" max="100" name="igst" required class="form-control" placeholder="Enter I-GST Value">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label for="contractorName">Enter TCS </label><span class="text-danger">*</span>
                              <input type="number" step="any" min="0" max="100" name="tcs" required class="form-control" placeholder="Enter TCS Value">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label for="contractorName">TCS on Taxable amount</label><span class="text-danger">*</span>
                              <select name="tcs_on_tax" id="" class="form-control">
                                 <option value="yes">yes</option>
                                 <option value="no">no</option>
                                 <option value="NA">NA</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label>With in State </label><span class="text-danger">*</span>
                           <select class="form-control select2" name="with_in_state" style="width: 100%;">
                              <option <?php if (($_smarty_tpl->tpl_vars['s']->value->with_in_state == "yes")) {?>selected<?php }?> value="yes">Yes</option>
                              <option <?php if (($_smarty_tpl->tpl_vars['s']->value->with_in_state == "no")) {?>selected<?php }?> value="no">No</option>
                           </select>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>


      <!-- Main content -->
      <div class="card p-0 mt-4">


          <div class="table-responsive text-nowrap">
            <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped" style="border-collapse: collapse;" border-color="#e1e1e1" id="gst">
              <thead>
                 <tr>
                    <th>Sr. No.</th>
                    <th>Code</th>
                    <th>S-GST %</th>
                    <th>C-GST %</th>
                    <th>I-GST %</th>
                    <th>TCS %</th>
                    <th>TCS on taxable amount</th>
                    <th>Created Date</th>
                    <th>With In State</th>
                    <th>Actions</th>
                 </tr>
              </thead>
              <tbody>
                 <?php $_smarty_tpl->_assignInScope('i', 1);?>
                  <?php if (($_smarty_tpl->tpl_vars['gst']->value)) {?>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gst']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
                     <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['t']->value->code;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['t']->value->sgst;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['t']->value->cgst;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['t']->value->igst;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['t']->value->tcs;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['t']->value->tcs_on_tax;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['t']->value->created_date;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['t']->value->with_in_state;?>
</td>
                        <td>
                           <!-- Button trigger modal -->
                           <button type="button" class="btn no-btn btn-primary edit-part" data-bs-toggle="modal" data-bs-target="#edit" data-value="<?php echo base64_encode(json_encode($_smarty_tpl->tpl_vars['t']->value));?>
">
                           <i class="ti ti-edit"></i>
                           </button>
                           <!-- edit Modal -->

                           <!-- edit Modal -->
                           <!-- delete Modal -->
                           <div class="modal fade" id="delete<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                       <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                       </button>
                                    </div>
                                    <div class="modal-body">
                                       <form action="<?php echo base_url('delete_customer');?>
" method="POST" enctype="multipart/form-data">
                                          Are You Sure Want To Delete This?
                                          <input required value="<?php echo $_smarty_tpl->tpl_vars['u']->value->id;?>
" type="hidden" class="form-control" name="id">
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                    </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- delete Modal -->
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
        <!--/ Responsive Table -->
      </div>
      <!-- /.col -->

      <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Update</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

               </button>
            </div>
            <form action="<?php echo base_url('update_gst');?>
" method="POST" enctype="multipart/form-data" id="updateGstForm">
            <div class="modal-body">
               <div class="row">
                  <div class="col-lg-6">
                        <div class="form-group">
                           <label for="contractorName">Enter SGST </label><span class="text-danger">*</span>
                           <input type="number" step="any" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->sgst;?>
" min="0" max="100" name="sgst" required class="form-control" placeholder="Enter S-GST Value">
                        </div>
                  </div>
                  <div class="col-lg-6">
                  <div class="form-group">
                  <label for="contractorName">Enter CGST </label><span class="text-danger">*</span>
                  <input type="number" step="any" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->cgst;?>
" min="0" max="100" name="cgst" required class="form-control" placeholder="Enter C-GST Value">
                  </div>
                  </div>
                  <div class="col-lg-6">
                  <div class="form-group">
                  <label for="contractorName">Enter IGST </label><span class="text-danger">*</span>
                  <input type="number" step="any" min="0" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->igst;?>
" max="100" name="igst" required class="form-control" placeholder="Enter I-GST Value">
                  </div>
                  </div>
                  <div class="col-lg-6">
                  <div class="form-group">
                  <label for="contractorName">Enter TCS </label><span class="text-danger">*</span>
                  <input type="number" step="any" min="0" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->tcs;?>
" max="100" name="tcs" required class="form-control" placeholder="Enter TCS Value">
                  <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
" max="100" name="id" required class="form-control" placeholder="Enter TCS Value">
                  </div>
                  </div>
                  <div class="col-lg-6">
                  <div class="form-group">
                  <label for="contractorName">TCS On GST</label><span class="text-danger">*</span>
                  <select name="tcs_on_tax" id="" class="form-control">
                  <option value="yes" <?php if (($_smarty_tpl->tpl_vars['t']->value->tcs == "yes")) {?>selected<?php }?>>yes</option>
                  <option value="no" <?php if (($_smarty_tpl->tpl_vars['t']->value->tcs == "no")) {?>selected<?php }?>>no</option>
                  <option value="no" <?php if (($_smarty_tpl->tpl_vars['t']->value->tcs == "NA")) {?>selected<?php }?>>NA</option>
                  </select>
                  </div>
                  </div>
                  <div class="form-group">
                  <label>With in State </label><span class="text-danger">*</span>
                  <select class="form-control select2" name="with_in_state" style="width: 100%;">
                  <option <?php if (($_smarty_tpl->tpl_vars['t']->value->with_in_state == "yes")) {?>selected<?php }?> value="yes">Yes</option>
                  <option <?php if (($_smarty_tpl->tpl_vars['t']->value->with_in_state == "no")) {?>selected<?php }?> value="no">No</option>
                  </select>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
            </div>
         </div>
      </div>
   </div>


      <div class="content-backdrop fade"></div>
    </div>


    <?php echo '<script'; ?>
 type="text/javascript">
    var base_url = <?php echo json_encode($_smarty_tpl->tpl_vars['base_url']->value);?>

    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/admin/gst.js"><?php echo '</script'; ?>
>
<?php }
}
