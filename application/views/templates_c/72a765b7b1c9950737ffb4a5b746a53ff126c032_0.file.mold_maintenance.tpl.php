<?php
/* Smarty version 4.3.2, created on 2024-08-25 16:06:40
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\admin\molding\\mold_maintenance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66cb0938cf8d67_00910558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72a765b7b1c9950737ffb4a5b746a53ff126c032' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\admin\\molding\\\\mold_maintenance.tpl',
      1 => 1724580754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cb0938cf8d67_00910558 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.select2-container--default{
  width:100% !important;
}
</style>

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
                <select name="child_part_id" required class="form-control select2" id="part_id_selected">
                <option value="">Select</option>
                <option <?php if (($_smarty_tpl->tpl_vars['filter_child_part_id']->value === "All")) {?>selected<?php }?> value="All">All</option>
                <?php if (($_smarty_tpl->tpl_vars['part_selection']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['part_selection']->value, 'part');
$_smarty_tpl->tpl_vars['part']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['part']->value) {
$_smarty_tpl->tpl_vars['part']->do_else = false;
?>
                <option <?php if (($_smarty_tpl->tpl_vars['filter_child_part_id']->value === $_smarty_tpl->tpl_vars['part']->value->id)) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['part']->value->customer_name;?>
/<?php echo $_smarty_tpl->tpl_vars['part']->value->part_number;?>
/<?php echo $_smarty_tpl->tpl_vars['part']->value->part_description;?>
">
                  <?php echo $_smarty_tpl->tpl_vars['part']->value->customer_name;?>
/<?php echo $_smarty_tpl->tpl_vars['part']->value->part_number;?>
/<?php echo $_smarty_tpl->tpl_vars['part']->value->part_description;?>

                </option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
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
          Production
          <a hijacked="yes" href="javascript:void(0)" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Mold Master</em></a>
          </h1>
          <br>
          <span >Mold Master</span>
        </div>
      </nav>

      <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
        <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
        <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
        <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
        <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button>

        <button type="button" class="btn btn-seconday" data-bs-toggle="modal" data-bs-target="#addPromo1" title="Add Mold Master">
          <i class="ti ti-plus"></i>
        </button>
      </div>

      <div class="modal fade" id="addPromo1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

              </button>
            </div>
            <form action="<?php echo base_url('add_mold_maintenance');?>
" method="POST" enctype="multipart/form-data" id>
            <div class="modal-body">
              <div class="form-group">
                </div>
                <div class="form-group">
                  <label for="on click url">Select Customer Part<span class="text-danger">*</span></label>
                  <select name="customer_part_id" required id="main_customer_part_id" class="form-control select2">
                    <?php if (($_smarty_tpl->tpl_vars['new_part_selection']->value)) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_part_selection']->value, 'part');
$_smarty_tpl->tpl_vars['part']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['part']->value) {
$_smarty_tpl->tpl_vars['part']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['part']->value->id;?>
">
                      <?php echo $_smarty_tpl->tpl_vars['part']->value->customer_name;?>
/<?php echo $_smarty_tpl->tpl_vars['part']->value->part_number;?>
/<?php echo $_smarty_tpl->tpl_vars['part']->value->part_description;?>

                    </option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="on click url">Mold Name<span class="text-danger">*</span></label>
                  <br>
                  <input  type="text" name="mold_name" placeholder="Enter Mold Name" class="form-control" value="" id="">
                </div>
                <div class="form-group">
                  <label for="on click url">Ownership<span class="text-danger">*</span></label>
                  <select name="ownership" required id="" class="form-control">
                    <option value="Customer">Customer</option>
                    <option value="Client">Client</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="on click url">No Of Cavity<span class="text-danger">*</span></label>
                  <br>
                  <input  type="text" name="no_of_cavity" placeholder="Enter No Of Cavity" class="form-control onlyNumericInput" value="" id="">
                </div>
                <div class="form-group">
                  <label for="on click url">Mold PM Frequency<span class="text-danger">*</span></label>
                  <br>
                  <input required type="text" name="target_life" placeholder="Enter Mold PM Frequency" class="form-control onlyNumericInput" value="" id="">
                </div>
                <div class="form-group">
                  <label for="on click url">Mold Life Over Frequency<span class="text-danger">*</span></label>
                  <br>
                  <input required type="text" name="target_over_life" placeholder="Enter Mold Life Over Frequency" class="form-control onlyNumericInput" value="" id="">
                </div>
             
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Main content -->
      <div class="card p-0 mt-4">
        <div class="ps-3 mt-2">
  
        </div>



        <div class="table-responsive text-nowrap">
          <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped" style="border-collapse: collapse;" border-color="#e1e1e1" id="mold_maintenance">
            <thead>
              <tr>
                <th>Sr No</th>
                <th>Customer Part</th>
                <th>Mold Name</th>
                <th>Ownership</th>
                <th>No Of Cavity</th>
                <th>Mold Life Over Frequency</th>
                <th>Mold PM Frequency</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <assign var='totalQuantity' value= 0 <?php echo '%>'; ?>

                <?php if (($_smarty_tpl->tpl_vars['mold_maintenance_results']->value)) {?>
                <?php $_smarty_tpl->_assignInScope('i', 1);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mold_maintenance_results']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['u']->value->customer_name;?>
/<?php echo $_smarty_tpl->tpl_vars['u']->value->part_number;?>
/<?php echo $_smarty_tpl->tpl_vars['u']->value->part_description;?>

                  </td>
                  <td><?php echo $_smarty_tpl->tpl_vars['u']->value->mold_name;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['u']->value->ownership;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['u']->value->no_of_cavity;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['u']->value->target_over_life;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['u']->value->target_life;?>
</td>
                  <td>
                    <button type="button" class="btn no-btn edit-part" data-bs-toggle="modal"data-value="<?php echo base64_encode(json_encode($_smarty_tpl->tpl_vars['u']->value));?>
" data-bs-target="#addProm">
                      <i class="ti ti-edit"></i>
                    </button>
                   
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

      <div class="modal fade" id="addProm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Update Mold Master</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="<?php echo base_url('update_mold_maintenance');?>
" method="POST" enctype="multipart/form-data" id="update_mold_form">
                  <div class="modal-body">
                      <div class="form-group">
                          <label for="customer_part_id">Select Customer Part<span class="text-danger">*</span></label>
                          <select name="customer_part_id" class="form-control select2" disabled id="selected_customer_part">
                              <?php if (($_smarty_tpl->tpl_vars['part_selection']->value)) {?>
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['part_selection']->value, 'part');
$_smarty_tpl->tpl_vars['part']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['part']->value) {
$_smarty_tpl->tpl_vars['part']->do_else = false;
?>
                              <option <?php if (($_smarty_tpl->tpl_vars['u']->value->customer_part_id == $_smarty_tpl->tpl_vars['part']->value->id)) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['part']->value->id;?>
">
                                  <?php echo $_smarty_tpl->tpl_vars['part']->value->customer_name;?>
/<?php echo $_smarty_tpl->tpl_vars['part']->value->part_number;?>
/<?php echo $_smarty_tpl->tpl_vars['part']->value->part_description;?>

                              </option>
                              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                              <?php }?>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="mold_name">Mold Name<span class="text-danger">*</span></label>
                          <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->mold_name;?>
" name="mold_name" placeholder="Enter Mold Name" class="form-control" id="mod_name">
                      </div>
                      <div class="form-group">
                          <label for="ownership">Select Ownership<span class="text-danger">*</span></label>
                          <select name="ownership" required class="form-control" id="ownership">
                              <option value="Customer" <?php if (($_smarty_tpl->tpl_vars['u']->value->ownership == 'Customer')) {?>selected<?php }?>>Customer</option>
                              <option value="Client" <?php if (($_smarty_tpl->tpl_vars['u']->value->ownership == 'Client')) {?>selected<?php }?>>Client</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="no_of_cavity">No Of Cavity<span class="text-danger">*</span></label>
                          <input required type="text" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->no_of_cavity;?>
" name="no_of_cavity" id="no_of_cavity" placeholder="Enter No Of Cavity" class="form-control onlyNumericInput">
                      </div>
                      <div class="form-group">
                          <label for="target_life">Mold PM Frequency<span class="text-danger">*</span></label>
                          <input required type="text" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->target_life;?>
" name="target_life" id="target_life" placeholder="Enter Mold PM Frequency" class="form-control onlyNumericInput">
                      </div>
                      <div class="form-group">
                          <label for="target_over_life">Mold Life Over Frequency<span class="text-danger">*</span></label>
                          <input required type="text" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->target_over_life;?>
" id="target_over_life" name="target_over_life" placeholder="Enter Mold Life Over Frequency" class="form-control onlyNumericInput">
                          <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->id;?>
" name="id" id="id">
                          <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['filter_child_part_id']->value;?>
" name="filter_child_part_id" id="filter_child_part_id">
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




    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/production/mold_maintenance.js"><?php echo '</script'; ?>
>
<?php }
}
