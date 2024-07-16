<?php
/* Smarty version 4.3.2, created on 2024-07-16 21:34:49
  from '/var/www/html/extra_work/erp_converted/application/views/templates/purchase/child_part_supplier_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66969a214a1943_73183630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b7b685afd0a501de2bf3c46616a95fe919d7cfb' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/purchase/child_part_supplier_view.tpl',
      1 => 1720702240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66969a214a1943_73183630 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Content wrapper -->
<?php $_smarty_tpl->_assignInScope('entitlements', $_smarty_tpl->tpl_vars['session_data']->value['entitlements']);?>
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
                        <span class="hide-menu">Select Part Number / Description</span>
                        <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
                     </li>
                     <li class="sidebar-item">
                        <div class="input-group">
                           <select name="child_part_id" class="form-control select2" id="part_number_search">
                              <option value="">Select Part Number / Description</option>
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_part_list_filter']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                              <option <?php if (($_smarty_tpl->tpl_vars['filter_child_part_id']->value == $_smarty_tpl->tpl_vars['c']->value->child_part_id)) {?>selected <?php }?> value="
                                 <?php echo $_smarty_tpl->tpl_vars['c']->value->child_part_id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
 / <?php echo $_smarty_tpl->tpl_vars['c']->value->part_description;?>

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
               Purchase
               <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
               <i class="ti ti-chevrons-right" ></i>
               <em >Supplier Parts</em></a>
            </h1>
            <br>
            <span >Supplier Part Price</span>
         </div>
      </nav>
      <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4> -->
      <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5 listing-btn">
         <a class="btn btn-seconday action-button-box" type="button"  title="Add Supplier Part Price" href="child_part_supplier">
         <span>Add Supplier Part Price</span>
         </a>
         <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
         <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
         <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
         <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button>
      </div>
      <!-- Responsive Table -->
      <div class="card p-0 mt-4">
         <div class="table-responsive text-nowrap">
            <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped" style="border-collapse: collapse;" border-color="#e1e1e1" id="supplier_part_price">
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
               <tbody></tbody>
            </table>
         </div>
      </div>
      <!--/ Responsive Table -->
   </div>
   <!-- / Content -->
   <div class="modal fade" id="addRevision" tabindex=" -1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
         <div class="modal-content ">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Add Revision </h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <!-- updatechildpart_supplier -->
               <form id="addRevPart" class="mb-3" action="javascript:void(0)" method="POST" enctype='multipart/form-data'>
                  <input value="=" type="hidden" name="id" id="id" required class="form-control" aria-describedby="emailHelp" placeholder="Customer Name">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label for="po_num">Part Number </label><span class="text-danger">*</span>
                           <input type="text" value="" name="upart_number" id="upart_number" readonly class="form-control" placeholder="Enter Part Number">
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label for="po_num">Part Description </label><span class="text-danger">*</span>
                           <input type="text" value="" name="upart_desc" id="upart_desc" readonly required class="form-control" placeholder="Enter Part Description">
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label for="po_num">Revision Date </label><span class="text-danger">*</span>
                           <input type="date" value="" name="urevision_date" id="urevision_date" required class="form-control"  placeholder="Enter Part Price">
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label for="po_num">Revision Number </label><span class="text-danger">*</span>
                           <input type="text" value="" name="urevision_no" id="urevision_no" required class="form-control"  placeholder="Enter Safty/buffer stock" aria-describedby="emailHelp">
                           <input type="hidden" readonly value="" name="supplier_id" id="supplier_id" required class="form-control"  placeholder="Enter Safty/buffer stock" aria-describedby="emailHelp">
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label for="po_num">Revision Remark </label><span class="text-danger">*</span>
                           <input type="text" value="" name="revision_remark" id="revision_remark" required class="form-control"  placeholder="Enter revision_remark" aria-describedby="emailHelp">
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label for="po_num">Part Price </label><span class="text-danger">*</span>
                           <input type="text" value="" name="upart_rate" id="upart_rate" required class="form-control" placeholder="Enter Part Price">
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label for="po_num">Quotation Document</label>
                           <input type="file" name="quotation_document" id="quotation_document" class="form-control" placeholder="Enter Revision Date" aria-describedby="emailHelp">
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label> Select Tax Structure </label><span class="text-danger">*</span>
                           <select class="form-control select2-init" name="gst_id" id="gst_id" style="width: 100%;">
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gst_structure']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                              <option 
                                 value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->code;?>
</option>
                              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                           </select>
                        </div>
                     </div>
                  </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>
<!-- Content wrapper -->
<style type="text/css">
   .table th {
   text-transform: none ; 
   font-size: .75rem;
   letter-spacing: 1px;
   }
</style>
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
public/js/purchase/child_part_supplier_view.js"><?php echo '</script'; ?>
><?php }
}
