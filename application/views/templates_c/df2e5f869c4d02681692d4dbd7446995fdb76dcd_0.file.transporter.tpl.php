<?php
/* Smarty version 4.3.2, created on 2024-08-25 18:32:00
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\admin\transporter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66cb2b48067219_29398798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df2e5f869c4d02681692d4dbd7446995fdb76dcd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\admin\\transporter.tpl',
      1 => 1724590708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cb2b48067219_29398798 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">


    <nav aria-label="breadcrumb">
      <div class="sub-header-left pull-left breadcrumb">
        <h1>
          Admin
          <a hijacked="yes" href="javascript:void(0)" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Master</em></a>
          </h1>
          <br>
          <span >Transporter</span>
        </div>
      </nav>

      <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
        <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
        <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
            <button type="button" class="btn btn-seconday" data-bs-toggle="modal" data-bs-target="#addPromo" title="Add Transporter">
         <i class="ti ti-plus"></i>
        </button>

      </div>
      <div class="modal fade" id="addPromo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form id="addTransporterForm" action="<?php echo base_url('add_transporter');?>
" method="POST" enctype="multipart/form-data">
      <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <div class="form-group">
                          <label for="name">Transporter Name <span class="text-danger">*</span></label> <br>
                          <input required type="text" name="namess" placeholder="Enter Transporter" class="form-control" id="nameda">
                      </div>
                      <div class="form-group">
                          <label for="transporter_id">Transporter ID <span class="text-danger">*</span></label> <br>
                          <input required type="text" name="transporter_id" placeholder="Enter Transporter ID" class="form-control" pattern="^([0-9]{2}[0-9A-Z]{13})$" oninvalid="this.setCustomValidity('Please enter a valid Transporter no')" onchange="this.setCustomValidity('')" id="transporter_id">
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
              </div>
              </div>
              </form>
  </div>
  


      <!-- Main content -->
      <div class="card p-0 mt-4">
        <div class="p-3">

          <div class="table-responsive text-nowrap">
            <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped" style="border-collapse: collapse;" border-color="#e1e1e1" id="transporter">
              <thead>
                 <tr>
                    <th>Sr No</th>
                    <th>Transporter Name</th>
                    <th>Transporter ID</th>
                    <!-- <th>Action</th> -->
                 </tr>
              </thead>
              <tbody>
                    <?php $_smarty_tpl->_assignInScope('i', 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transporter']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
                     <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['u']->value->name;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['u']->value->transporter_id;?>
</td>
                     </tr>
                    <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
public/js/admin/transporter.js"><?php echo '</script'; ?>
>
<?php }
}
