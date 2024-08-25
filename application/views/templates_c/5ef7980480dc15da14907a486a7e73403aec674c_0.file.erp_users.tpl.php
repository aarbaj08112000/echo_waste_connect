<?php
/* Smarty version 4.3.2, created on 2024-08-25 19:39:55
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\admin\erp_users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66cb3b33bea6c8_07127303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ef7980480dc15da14907a486a7e73403aec674c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\admin\\erp_users.tpl',
      1 => 1724594993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cb3b33bea6c8_07127303 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper container-xxl flex-grow-1 container-p-y">
<nav aria-label="breadcrumb">
      <div class="sub-header-left pull-left breadcrumb">
        <h1>
        Admin
          <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >ERP Users</em></a>
        </h1>
        <br>
        <span >ERP Users</span>
      </div>
    </nav>
    <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
    
  <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
  <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
  </div>
<div class="content-wrapper" >


   <!-- Main content -->
   <section class="content">
      <div>
         <!-- Small boxes (Stat box) -->
         <div class="row">
            <br>
            <div class="col-lg-12">
               <!-- Modal -->
               <div class="modal fade" id="addPromo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Add EPR Users</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <form action="<?php echo base_url('add_users_data');?>
" method="POST" enctype="multipart/form-data" id="addTransporterForm"> 
                        <div class="modal-body">
                           <div class="form-group">
                           </div>
                           <div class="form-group">
                           <label for="on click url">User Full Name<span class="text-danger">*</span></label> <br>
                           <input required type="text" name="user_name" placeholder="Enter Full Name" class="form-control" value="" id="">
                           </div>
                           <div class="form-group">
                           <label for="on click url">User Email<span class="text-danger">*</span></label> <br>
                           <input required type="email" name="user_email" placeholder="Enter Email" class="form-control" value="" id="">
                           </div>
                           <div class="form-group">
                           <label for="on click url">User Password<span class="text-danger">*</span></label> <br>
                           <input required type="password" name="user_password" placeholder="Enter Password" class="form-control" value="" id="">
                           </div>
                           <div class="form-group">
                           <label for="on click url">Select Role<span class="text-danger">*</span></label> <br>
                           <select name="user_role" class="form-control" id="">
                           <option value="Admin">Admin</option>
                           <option value="Purchase">Purchase</option>
                           <option value="Approver">Approver</option>
                           <option value="inward_stores">inward stores </option>
                           <option value="stores">stores </option>
                           <option value="production">production</option>
                           <option value="FG_stores">FG stores</option>
                           <option value="Marketing">Marketing</option>
                           <option value="Development">Development</option>
                           <option value="Quality">Quality</option>
                           <option value="Inward_Quality">Inward Quality</option>
                           <option value="Sales">Sales</option>
                           </select>
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
               <div class="card">
                  <div class="card-header">
                     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPromo">
                     Add ERP Users
                     </button>
                  </div>
                  <!-- /.card-header -->
                  <div class="table-responsive text-nowrap">
                     <table id="erp_users" class="table table-striped w-100">
                        <thead>
                           <tr>
                              <th>Sr No</th>
                              <th>Full Name</th>
                              <th>Email</th>
                              <th>Password</th>
                              <th>Role</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php if ((true)) {?>
                                <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_info']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
		                           <tr>
		                              <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->user_name;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->user_email;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->user_password;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['u']->value->type;?>
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
                  <!-- /.card-body -->
               </div>
               <!-- ./col -->
            </div>
         </div>
         <!-- /.row -->
         <!-- Main row -->
         <!-- /.row (main row) -->
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- /.content -->
</div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/admin/erp_user.js"><?php echo '</script'; ?>
>
<?php }
}
