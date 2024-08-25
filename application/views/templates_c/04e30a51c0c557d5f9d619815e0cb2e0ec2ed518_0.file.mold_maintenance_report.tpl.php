<?php
/* Smarty version 4.3.2, created on 2024-08-24 17:20:39
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\molding\mold_maintenance_report.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c9c90fdf9027_85431602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04e30a51c0c557d5f9d619815e0cb2e0ec2ed518' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\molding\\mold_maintenance_report.tpl',
      1 => 1724496254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c9c90fdf9027_85431602 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\erp_converted\\application\\third_party\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\erp_converted\\application\\third_party\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="wrapper container-xxl flex-grow-1 container-p-y">

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
                <span class="hide-menu">Select Customer_part</span>
                <span class="search-show-hide float-right"><i class="ti ti-minus"></i></span>
              </li>
              <li class="sidebar-item">
                <div class="input-group">
                <select name="customer_name" class="form-control select2" id="customer_name">
                <option <?php if ($_smarty_tpl->tpl_vars['filter_child_part_id']->value == "All") {?>selected<?php }?> value="All">All</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_part_filter_data']->value, 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
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
          Reports
          <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Mold Life Report</em></a>
        </h1>
        <br>
        <span >Mold Life Report</span>
      </div>
    </nav>
    <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
      <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
      <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
      <button class="btn btn-seconday filter-icon" type="button"><i class="ti ti-filter" ></i></i></button>
      <button class="btn btn-seconday" type="button"><i class="ti ti-refresh reset-filter"></i></button>
    </div>

    <div class="content-wrapper">
       
        <section class="content">
        <div>
            <div class="row">
                <br>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Customer Part</th>
                                        <th>Mold Name</th>
                                        <th>No Of Cavity</th>
                                        <th>Mold Life Over Frequency</th>
                                        <th>Mold PM Frequency</th>
                                        <th>Molding Prod QTY</th>    
                                        <th style="width:100px">Last PM Date</th>    
                                        <th>PM Report</th>
                                        <th>Mold History</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($_smarty_tpl->tpl_vars['mold_maintenance']->value) {?>
                                        <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mold_maintenance']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['filter_child_part_id']->value)) && $_smarty_tpl->tpl_vars['filter_child_part_id']->value != "All" && $_smarty_tpl->tpl_vars['filter_child_part_id']->value != $_smarty_tpl->tpl_vars['u']->value['customer_part_id']) {?>
                                                <?php continue 1;?>
                                            <?php }?>
                                           
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['u']->value['customer_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['u']->value['part_number'];?>
/<?php echo $_smarty_tpl->tpl_vars['u']->value['part_description'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['u']->value['mold_name'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['u']->value['no_of_cavity'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['u']->value['target_over_life'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['u']->value['target_life'];?>
</td>
                                                <?php if ($_smarty_tpl->tpl_vars['u']->value['tot'] > $_smarty_tpl->tpl_vars['u']->value['target_life']) {?>
                                                    <td style="background-color:red;color:white"><?php echo $_smarty_tpl->tpl_vars['u']->value['tot'];?>
</td>
                                                <?php } else { ?>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['u']->value['tot'];?>
</td>
                                                <?php }?>
                                                <td><?php echo $_smarty_tpl->tpl_vars['mold_maintenance_docs']->value[$_smarty_tpl->tpl_vars['u']->value['mold_name']][0]->pm_date;?>
</td>
                                                
                                                <td> 
                                                    <button type="button" class="btn btn-xs btn-primary doc_upload" data-bs-toggle="modal" data-bs-target="#uplddoc" data-value = "<?php echo $_smarty_tpl->tpl_vars['u']->value['encrpted_data'];?>
">
                                                      <i class="fas fa-upload" aria-hidden="true"></i>
                                                    </button>
                    
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['mold_maintenance_docs']->value[$_smarty_tpl->tpl_vars['u']->value['mold_name']][0]->doc)) {?>
                                                        <a title="Download" class="btn btn-xs btn-success" download href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
documents/<?php echo $_smarty_tpl->tpl_vars['mold_maintenance_docs']->value[$_smarty_tpl->tpl_vars['u']->value['mold_name']][0]->doc;?>
"><i class="fas fa-download" aria-hidden="true"></i> </a>
                                                    <?php }?>
                  
                                                    
                                                </td>
                                                <td>
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['mold_maintenance_docs']->value[$_smarty_tpl->tpl_vars['u']->value['mold_name']][0]->doc)) {?>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
mold_maintenance_history/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['u']->value['mold_name'],' ','_');?>
/<?php echo $_smarty_tpl->tpl_vars['u']->value['customer_part_id'];?>
" class="btn btn-primary" href=""><i class="fa fa-history" aria-hidden="true"></i></a>
                                                    <?php }?>
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
                </div>
            </div>
        </div>
    </section>
</div>
</div>
<div class="modal fade" id="uplddoc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                        
                                                                    </button>
                                                                </div>
                                                            <form  id="form111"  method="POST"  enctype="multipart/form-data">
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="on click url">PM Date<span class="text-danger">*</span></label>
                                                                        <br>
                                                                        <input required type="date" name="pm_date" class="form-control" max="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="on click url">Document<span class="text-danger">*</span></label>
                                                                        <br>
                                                                        <input required type="file" name="doc" class="form-control" value="" id="fileInput111" >
                                                                        <input type="hidden" name="no_of_cavity" id="no_of_cavity" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['no_of_cavity'];?>
" class="form-control">
                                                                        <input type="hidden" name="mold_name"  id="mold_name" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['mold_name'];?>
" class="form-control">
                                                                        <input type="hidden" name="customer_part_id" id="customer_part_id" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['customer_part_id'];?>
" class="form-control">
                                                                        <input type="hidden" name="target_life" id="target_life" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['target_life'];?>
" class="form-control">         
                                                                        <input type="hidden" name="target_over_life" id="target_over_life" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['target_over_life'];?>
" class="form-control">
                                                                        <input type="hidden" name="current_molding_prod_qty" id="current_molding_prod_qty" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['tot'];?>
" class="form-control">
                                                                        <input required type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
" id="mold_id" name="id" placeholder="Enter Mold Life Over Frequency" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/public/js/reports/mold_maintainance_report.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
let base_url = "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
";
<?php echo '</script'; ?>
><?php }
}
