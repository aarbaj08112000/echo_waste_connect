<?php
/* Smarty version 4.3.2, created on 2024-08-21 19:15:01
  from '/var/www/html/extra_work/erp_converted/application/views/templates/store/view_supplier_challan_details_part_wise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c5ef5d014ba2_17404975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77fbdffda821ebf0740e3d1a810426d7ad489ce4' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/store/view_supplier_challan_details_part_wise.tpl',
      1 => 1724142425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c5ef5d014ba2_17404975 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    

    <nav aria-label="breadcrumb">
      <div class="sub-header-left pull-left breadcrumb">
        <h1>
        Supplier Challan Details
          <a hijacked="yes" href="javascript:void(0)" class="backlisting-link" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Supplier Challan Details Part Wise</em></a>
            
          </h1>
          <br>
          <span >View Supplier Challan Details Part Wise</span>
        </div>
      </nav>
      <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4> -->

      <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
        <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
        <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
       <!-- <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
        <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button> -->
        <!-- <a class="btn btn-seconday" href="<?php echo base_url('view_supplier_challan');?>
">
        <i class="ti ti-arrow-left" title="Back"></i></a> -->
      </div>



      <!-- Main content -->
      <div class="card p-0 mt-4">
        <div class="table-responsive text-nowrap">
          <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped" style="border-collapse: collapse;" border-color="#e1e1e1" id="view_supplier_challan_details_part_wise">
            <thead>
              <tr>
                <!-- <th>Sr No</th> -->
                <th>Part Number</th>
                <th>Part Description</th>
                <th>Qty </th>
                <th>Process</th>
                <th>HSN</th>
                <th>Value</th>
                <th>Remaining Qty </th>
              </tr>
            </thead>
            <tbody>
              <?php if (($_smarty_tpl->tpl_vars['challan_parts']->value)) {?>
                    <?php $_smarty_tpl->_assignInScope('final_po_amount', 0);?>
                    <?php $_smarty_tpl->_assignInScope('i', 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['challan_parts']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                  <tr>
                   <!-- <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td> -->
                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->part_number;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->part_description;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->process;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->hsn;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->value;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->remaning_qty;?>
</td>
                  </tr>
                  <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </tbody>
            <tfoot>
              <?php if (($_smarty_tpl->tpl_vars['po_parts']->value)) {?>
                <tr>
                  <th colspan="11">Total</th>
                  <th><?php echo $_smarty_tpl->tpl_vars['final_po_amount']->value;?>
</th>
                </tr>
              <?php }?>
            </tfoot>
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
public/js/store/view_supplier_challan_details_part_wise.js"><?php echo '</script'; ?>
>
<?php }
}
