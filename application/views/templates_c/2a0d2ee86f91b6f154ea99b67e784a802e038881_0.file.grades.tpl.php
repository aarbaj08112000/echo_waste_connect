<?php
/* Smarty version 4.3.2, created on 2024-08-24 23:18:08
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\admin\molding\grades.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66ca1cd8563019_05924619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a0d2ee86f91b6f154ea99b67e784a802e038881' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\admin\\molding\\grades.tpl',
      1 => 1724521681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ca1cd8563019_05924619 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    
    <nav aria-label="breadcrumb">
      <div class="sub-header-left pull-left breadcrumb">
        <h1>
          Production
          <a hijacked="yes" href="javascript:void(0)" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Grades</em></a>
          </h1>
          <br>
          <span >Grades</span>
        </div>
      </nav>

      <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
        <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
        <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
        
        <button type="button" class="btn btn-seconday" data-bs-toggle="modal"
        data-bs-target="#addPromo" title="Add Grades">
        <i class="ti ti-plus"></i>
      </button>
    </div>

    <div class="modal fade" id="addPromo" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('add_grades');?>
" method="POST"
            enctype="multipart/form-data" id="gradesForm">
            <div class="form-group">
              <label for="on click url">Grades <span
                class="text-danger">*</span></label> <br>
                <input required type="text" name="name"
                placeholder="Enter Grade Name" class="form-control" value=""
                id="">
              </div>
          
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary"
              data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
          </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <div class="card p-0 mt-4">

      <div class="table-responsive text-nowrap">
        <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped" style="border-collapse: collapse;" border-color="#e1e1e1" id="grades">
          <thead>
            <tr>
              <th>Sr No</th>
              <th>Name</th>
              <th>Rejection Qty</th>
            </tr>
          </thead>
          <tbody>
            <?php $_smarty_tpl->_assignInScope('i', 1);?>
            <?php if (($_smarty_tpl->tpl_vars['grades']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grades']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->name;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->rejection_qty;?>
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
public/js/production/grades.js"><?php echo '</script'; ?>
>
<?php }
}
