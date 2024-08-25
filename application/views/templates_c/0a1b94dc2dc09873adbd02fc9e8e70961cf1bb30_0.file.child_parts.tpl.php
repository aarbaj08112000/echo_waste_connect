<?php
/* Smarty version 4.3.2, created on 2024-08-24 17:26:46
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\admin\child_parts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c9ca7eab9c36_68402853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a1b94dc2dc09873adbd02fc9e8e70961cf1bb30' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\admin\\child_parts.tpl',
      1 => 1724500605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c9ca7eab9c36_68402853 (Smarty_Internal_Template $_smarty_tpl) {
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
                <select name="part_id_selected" class="form-control select2" id="part_id_selected">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['part_select_list']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                <option
                   <?php if (($_smarty_tpl->tpl_vars['part_id_selected']->value === $_smarty_tpl->tpl_vars['c']->value->id)) {?>selected <?php }?>
                   value="<?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value->part_description;?>

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
          Admin
          <a hijacked="yes" href="javascript:void(0)" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Approval</em></a>
          </h1>
          <br>
          <span >Item Master</span>
        </div>
      </nav>

      <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
        <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
        <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
        <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
        <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button>

      </div>



      <!-- Main content -->
      <div class="card p-0 mt-4">
        <div class="p-3">
          <div class="table-responsive text-nowrap">
            <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped" style="border-collapse: collapse;" border-color="#e1e1e1" id="child_parts">
              <thead>
                 <tr>
                    <th>Sr. No.</th>
                    <th>Part Number</th>
                    <th>Part Description</th>
                    <th>Stock</th>
                    <?php if (($_smarty_tpl->tpl_vars['enableStockUpdate']->value == "true")) {?>
                    <th>Actions</th>
                    <?php }?>
                 </tr>
              </thead>
              <tbody>
                 <?php $_smarty_tpl->_assignInScope('i', 1);?>
                  <?php if (($_smarty_tpl->tpl_vars['child_part']->value)) {?>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_part']->value, 'po');
$_smarty_tpl->tpl_vars['po']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->do_else = false;
?>
                     <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value->part_number;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value->part_description;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['po']->value->stock;?>
</td>
                        <?php if (($_smarty_tpl->tpl_vars['enableStockUpdate']->value == "true")) {?>
                        <td>
                           <button type="submit" data-bs-toggle="modal" class="btn no-btn btn-primary"
                              data-bs-target="#exampleModal2<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"> <i class="ti ti-edit"></i></button>
                           <div class="modal fade" id="exampleModal2<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" role="dialog"
                              aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel">Update
                                       </h5>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal"
                                          aria-label="Close">
                                      
                                       </button>
                                    </div>
                                    <div class="modal-body">
                                       <form
                                          action="<?php echo base_url('update_child_stock');?>
"
                                          method="POST">
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="form-group">
                                                   <label for="part_number">Part
                                                   Number</label><span
                                                      class="text-danger">*</span>
                                                   <input readonly type="text"
                                                      value="<?php echo $_smarty_tpl->tpl_vars['po']->value->part_number;?>
"
                                                      name="part_number" required
                                                      class="form-control"
                                                      id="exampleInputEmail1"
                                                      aria-describedby="emailHelp"
                                                      placeholder="Part Number">
                                                   <input type="hidden" name="id"
                                                      value="<?php echo $_smarty_tpl->tpl_vars['po']->value->id;?>
">
                                                </div>
                                                <div class="form-group">
                                                   <label for="Client_name">Part
                                                   Description</label><span
                                                      class="text-danger">*</span>
                                                   <input type="text"
                                                      value="<?php echo $_smarty_tpl->tpl_vars['po']->value->part_description;?>
"
                                                      name="part_description" required
                                                      class="form-control"
                                                      id="exampleInputEmail1"
                                                      aria-describedby="emailHelp"
                                                      placeholder="Part Description">
                                                </div>
                                                <div class="form-group">
                                                   <label for="safty_buffer_stk"> Stock</label><span
                                                      class="text-danger">*</span>
                                                   <input type="number" step="any"
                                                      value="<?php echo $_smarty_tpl->tpl_vars['po']->value->stock;?>
"
                                                      name="stock" required
                                                      class="form-control"
                                                      id="exampleInputEmail1"
                                                      aria-describedby="emailHelp"
                                                      placeholder="Part Specification">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                             <button type="submit"
                                                class="btn btn-primary">Save
                                             changes</button>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </td>
                        <?php }?>
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
public/js/admin/child_parts.js"><?php echo '</script'; ?>
>
<?php }
}
