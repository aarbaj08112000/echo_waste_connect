<?php
/* Smarty version 4.3.2, created on 2024-08-21 19:16:07
  from '/var/www/html/extra_work/erp_converted/application/views/templates/store/view_supplier_challan_details_subcon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c5ef9f8954f2_01065420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '988b363b3128de079b30ba7488bec1752d0a858c' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/store/view_supplier_challan_details_subcon.tpl',
      1 => 1724142425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c5ef9f8954f2_01065420 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
   
    <nav aria-label="breadcrumb">
      <div class="sub-header-left pull-left breadcrumb">
        <h1>
        Challan
          <a hijacked="yes" href="javascript:void(0)" class="backlisting-link" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Supplier Challan Subcon</em></a>
          </h1>
          <br>
          <span >View Supplier Challan Details Subcon</span>
        </div>
      </nav>
      <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4> -->

      <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
       <!--  <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
        <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
        <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
        <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button> -->
        <a class="btn btn-seconday" href="<?php echo base_url('view_supplier_challan_subcon');?>
">
              <i class="ti ti-arrow-left" title="Back"></i></a>
      </div>



      <!-- Main content -->
      <div class="card p-0 mt-4">
        <div class="table-responsive text-nowrap">
          <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped" style="border-collapse: collapse;" border-color="#e1e1e1" id="view_supplier_challan_details_subcon">
            <thead>
              <tr>
                <th>Sr. No.</th>
                <th>Challan Number</th>
                <th>Challan Details</th>
              </tr>
            </thead>
            <tbody>
              <?php $_smarty_tpl->_assignInScope('i', 1);?>
                <?php if (($_smarty_tpl->tpl_vars['challan_data']->value)) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['challan_data']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->challan_number;?>
</td>
                    <td>
                      <a class="btn btn-primary" href="<?php echo base_url('view_supplier_challan_details_part_wise_subcon/');
echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">View Challan Details</a>
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
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/store/view_supplier_challan_details_subcon.js"><?php echo '</script'; ?>
>
<?php }
}
