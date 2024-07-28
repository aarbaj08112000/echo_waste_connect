<?php
/* Smarty version 4.3.2, created on 2024-07-28 16:08:19
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\customer\customer_parts_master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66a61f9b03d7b0_78756204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91bb31e6be02bc6896a5fb008bbc59aeac2abef1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\customer\\customer_parts_master.tpl',
      1 => 1722163097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a61f9b03d7b0_78756204 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper container-xxl flex-grow-1 container-p-y">

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
            <span class="hide-menu">Select Part Number</span>
            <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
          </li>
          <li class="sidebar-item">
            <div class="input-group">
              <select name="part_drop" class="form-control select2" id="part_drop">
              <option value="" selected disabled>Please select part</option>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['part_drop_data']->value, 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
              <option 
                  value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['part'];?>
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
      Planning & Sales
      <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
        <i class="ti ti-chevrons-right" ></i>
        <em >Customer</em></a>
    </h1>
    <br>
    <span >Part Master</span>
  </div>
</nav>
<div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
  <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
  <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
  <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
  <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button>
</div>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Process Master</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
dashboard">Home</a></li>
                  </ol>
                </div>
              </div>
            </div>
          </div> -->
        <!-- /.content-header -->

       

        <!-- Main content -->
        <section class="content">

            <div>
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12 ml-3">
                                <?php if ($_smarty_tpl->tpl_vars['this']->value->session->flashdata && $_smarty_tpl->tpl_vars['this']->value->session->flashdata('errors')) {?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Error : </strong> <?php echo $_smarty_tpl->tpl_vars['this']->value->session->flashdata('errors');?>

                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['this']->value->session->flashdata && $_smarty_tpl->tpl_vars['this']->value->session->flashdata('success')) {?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Success :</strong> <?php echo $_smarty_tpl->tpl_vars['this']->value->session->flashdata('success');?>

                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="col-lg-12">

                        <!-- Modal -->
                        <div class="modal fade" id="addPromo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Part</h5>
                                        <button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
                                           
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
add_customer_parts_master" method="POST" enctype="multipart/form-data">
                                        </div>
                                        <div class="form-group">
                                            <label for="on click url">Part Number<span class="text-danger">*</span></label> <br>
                                            <input required type="text" name="part_number" placeholder="Enter Part Number" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="on click url">Part Description<span class="text-danger">*</span></label> <br>
                                            <input required type="text" name="part_description" placeholder="Enter Part Description" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="on click url">Rate<span class="text-danger">*</span></label> <br>
                                            <input required type="number" step="any" name="fg_rate" placeholder="Enter Rate" class="form-control" value="0" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">

                            <div class="card-header">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPromo">
                                    Add
                                </button>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="customer_part_table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Part Number</th>
                                            <th>Part Description</th>
                                            <th>FG Stock</th>
                                            <th>Rate</th>
                                                                                   <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php if ($_smarty_tpl->tpl_vars['customer_parts_master']->value) {?>
                                            <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_parts_master']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['entitlements']->value['isPlastic'] != null) {?>
                                                    
                                                    <?php $_smarty_tpl->_assignInScope('grade_name', '');?>
                                                    <?php if ($_smarty_tpl->tpl_vars['grades_data']->value) {?>
                                                        <?php $_smarty_tpl->_assignInScope('grade_name', $_smarty_tpl->tpl_vars['grades_data']->value[$_smarty_tpl->tpl_vars['u']->value->grade_id][0]->name);?>
                                                    <?php }?>
                                                <?php }?>

                                                <tr>
                                                   
                                                    <td><?php echo $_smarty_tpl->tpl_vars['u']->value->part_number;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['u']->value->part_description;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['u']->value->fg_stock;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['u']->value->fg_rate;?>
</td>
                                                                                                     <td>
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                            <i class='far fa-edit'></i>
                                                        </button>
                                                        <!-- edit Modal -->
                                                       
                                                        <!-- edit Modal -->

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
                            <div class="modal fade" id="editpart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                        <button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
update_customer_parts_master" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label> Part Description</label><span class="text-danger">*</span>
                                                        <input type="hidden" readonly value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="id" required class="form-control" id="part_id" placeholder="Enter Safety/buffer stock" aria-describedby="emailHelp">
                                                        <input required type="text" name="part_description" placeholder="Enter Part Description" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->part_description;?>
" id="edit-part-des">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Rate<span class="text-danger">*</span></label> <br>
                                                        <input required type="number" step="any" name="fg_rate" placeholder="Enter Rate" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->fg_rate;?>
" id="part-rate"required>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- ./col -->
                    </div>

                </div>
                <!-- /.row -->
                <!-- Main row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
</div>

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
/public/js/customer_part_master.js"><?php echo '</script'; ?>
><?php }
}
