<?php
/* Smarty version 4.3.2, created on 2024-08-27 14:30:59
  from '/var/www/html/extra_work/erp_converted/application/views/templates/purchase/new_po_list_supplier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66cd95cbe70959_10545911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6250c344d78c5ff34f786c0ca32758655e548a05' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/purchase/new_po_list_supplier.tpl',
      1 => 1724694253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cd95cbe70959_10545911 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Content wrapper -->
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
        <div class="simplebar-content">
          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <div class="filter-row">
              <li class="nav-small-cap">
                <span class="hide-menu">Supplier Name</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                  <select name="child_part_id" class="form-control select2" id="supplier_search">
                    <option value="">Select Supplier</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplier_list']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->supplier_name;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['s']->value->supplier_name;?>

                      </option>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
              </li>
            </div>
            <!--<div class="filter-row">
              <li class="nav-small-cap">
                <span class="hide-menu">Admin Approval</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                  <select name="child_part_id" class="form-control select2" id="admin_approve_search">
                    <option value="">Select Admin Approve</option>
                    <option value="accept">Accept</option>
                    <option value="pending">Pending</option>
                  </select>
                </div>
              </li>
            </div> -->




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
          Purchase
          <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link"
            title="Back to Issue Request Listing">
            <i class="ti ti-chevrons-right"></i>
            <em>Supplier</em></a>
        </h1>
        <br>
        <span>Supplier PO List</span>
      </div>
    </nav>
    <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4> -->

    <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5 listing-btn">
      <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i
          class="ti ti-file-type-csv"></i></button>
      <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i
          class="ti ti-file-type-pdf"></i></button>
      <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter"></i></i></button>
      <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button>
    </div>
    <!-- Responsive Table -->
    <div class="card p-0 mt-4">
      <div class="table-responsive text-nowrap">

        <table class="table table-striped" id="supplier_po_wise_view">
          <thead>
            <tr>
              <!-- <th>Sr. No.</th> -->
              <th>Supplier Name</th>
              <th>Supplier Number</th>
              <th>Supplier Location</th>
              <th class="text-center">View PO</th>
            </tr>
          </thead>
          <tbody>
            <?php $_smarty_tpl->_assignInScope('i', 1);?>
              <?php if (count($_smarty_tpl->tpl_vars['supplier_list']->value) > 0) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplier_list']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                  <tr>
                    <!-- <td width="5%"> <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td> -->
                    <td width="30%">
                      <?php echo $_smarty_tpl->tpl_vars['s']->value->supplier_name;?>

                    </td>
                    <td width="15%">
                      <?php echo $_smarty_tpl->tpl_vars['s']->value->supplier_number;?>

                    </td>
                    <td width="35%">
                      <?php echo $_smarty_tpl->tpl_vars['s']->value->location;?>

                    </td>
                    <td width="10%" class="text-center"><a href="<?php echo base_url('view_po_by_supplier_id/');
echo $_smarty_tpl->tpl_vars['s']->value->id;?>
"
                        class="btn btn-primary" href="">View PO</a></td>
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
  <!-- / Content -->

  <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
<?php echo '<script'; ?>
>
  var base_url = <?php echo json_encode($_smarty_tpl->tpl_vars['base_url']->value);?>
 ;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/purchase/supplier_po_wise_view.js"><?php echo '</script'; ?>
><?php }
}
