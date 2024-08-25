<?php
/* Smarty version 4.3.2, created on 2024-08-25 00:47:20
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\admin\shifts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66ca31c023e9b1_16920385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c12c4d7e995d8e9d4844a05f04d67f75d56cbbc2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\admin\\shifts.tpl',
      1 => 1724527037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ca31c023e9b1_16920385 (Smarty_Internal_Template $_smarty_tpl) {
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
          <span >Shifts</span>
        </div>
      </nav>

      <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
        <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
        <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
               <button type="button" class="btn btn-seconday float-left" data-bs-toggle="modal"
           data-bs-target="#exampleModal" title="Add Shift">
         <i class="ti ti-plus"></i></button>

      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add shift</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"
                     aria-label="Close">

                  </button>
               </div>
               <div class="modal-body">
                  <form action="<?php echo base_url('addShift');?>
" method="POST">
                     <div class="row">
                        <div class="col-lg-6">
                           <!-- Example single danger button -->
                           <div class="form-group">
                              <label> Shift Name </label>
                              <select required class="form-control select2"
                                 id="shiftName" name="shiftName"
                                 style="width: 100%;">
                                 <option value="8">8-hour</option>
                                 <option value="12">12-hour</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <label for="shiftStart">Start Time</label><span
                                 class="text-danger">*</span>
                              <input type="time" name="shiftStart" required
                                 class="form-control" id="exampleInputEmail1"
                                 aria-describedby="emailHelp"
                                 placeholder="Shift Start Time">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label> Shift Type </label>
                              <select required class="form-control select2"
                                 name="shiftType" style="width: 100%;">
                                 <option value="1<sup>st</sup>" selected="selected">
                                    1<sup>st</sup>
                                 </option>
                                 <option value="2<sup>nd</sup>">2<sup>nd</sup>
                                 </option>
                                 <option id='option_3' value="3<sup>rd</sup>">
                                    3<sup>rd</sup>
                                 </option>
                              </select>
                           </div>
                           <div class="form-group">
                              <label for="shiftStart">End Time</label><span
                                 class="text-danger">*</span>
                              <input type="time" name="shiftEnd" required
                                 class="form-control" id="exampleInputEmail1"
                                 aria-describedby="emailHelp"
                                 placeholder="Shift End Time">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label> PPT in min </label><span
                                 class="text-danger">*</span>
                              <input type="number" name="ppt" min="0" value="0" required
                                 class="form-control">
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                           data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save
                        changes</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>

      <!-- Main content -->
      <div class="card p-0 mt-4">
        <div class="p-3">

          <div class="table-responsive text-nowrap">
            <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped" style="border-collapse: collapse;" border-color="#e1e1e1" id="shifts">
              <thead>
                 <tr>
                    <th>Sr. No.</th>
                    <th>Shift Name</th>
                    <th>Shift Type</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>PPT in min</th>
                 </tr>
              </thead>
              <tbody>
                  <?php $_smarty_tpl->_assignInScope('i', 1);?>
                  <?php if (($_smarty_tpl->tpl_vars['shifts']->value)) {?>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shifts']->value, 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
                     <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['m']->value->name;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['m']->value->shift_type;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['m']->value->start_time;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['m']->value->end_time;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['m']->value->ppt;?>
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


      <div class="content-backdrop fade"></div>
    </div>


    <?php echo '<script'; ?>
 type="text/javascript">
    var base_url = <?php echo json_encode($_smarty_tpl->tpl_vars['base_url']->value);?>

    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/admin/shifts.js"><?php echo '</script'; ?>
>
<?php }
}
