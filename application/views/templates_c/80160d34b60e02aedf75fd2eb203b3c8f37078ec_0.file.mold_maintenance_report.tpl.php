<?php
/* Smarty version 4.3.2, created on 2024-07-01 10:31:27
  from '/var/www/html/extra/erp_converted/application/views/templates/molding/mold_maintenance_report.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6682382717fcf2_62058661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80160d34b60e02aedf75fd2eb203b3c8f37078ec' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/molding/mold_maintenance_report.tpl',
      1 => 1718605193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6682382717fcf2_62058661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/extra/erp_converted/application/third_party/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/var/www/html/extra/erp_converted/application/third_party/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Mold Life Report</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
dashboard">Home</a></li>
                            <li class="breadcrumb-item active">Mold Life Report</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
        <div>
            <div class="row">
                <br>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
view_mold_by_filter_report" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div style="width: 400px;">
                                            <div class="form-group">
                                                <label for="on click url">Select Part Number <span class="text-danger">*</span></label> <br>
                                                <select name="child_part_id" class="form-control select2" id="">
                                                    <option <?php if ($_smarty_tpl->tpl_vars['filter_child_part_id']->value == "All") {?>selected<?php }?> value="All">All</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mold_maintenance']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
                                                        <option <?php if ($_smarty_tpl->tpl_vars['filter_child_part_id']->value == $_smarty_tpl->tpl_vars['u']->value['customer_part_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['u']->value['customer_part_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['u']->value['customer_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['u']->value['part_number'];?>
/<?php echo $_smarty_tpl->tpl_vars['u']->value['part_description'];?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="">&nbsp;</label> <br>
                                        <button class="btn btn-secondary">Search </button>
                                    </div>
                                </div>
                            </form>
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
                                                    <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#uplddoc<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                      <i class="fas fa-upload" aria-hidden="true"></i>
                                                    </button>
                    
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['mold_maintenance_docs']->value[$_smarty_tpl->tpl_vars['u']->value['mold_name']][0]->doc)) {?>
                                                        <a title="Download" class="btn btn-xs btn-success" download href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
documents/<?php echo $_smarty_tpl->tpl_vars['mold_maintenance_docs']->value[$_smarty_tpl->tpl_vars['u']->value['mold_name']][0]->doc;?>
"><i class="fas fa-download" aria-hidden="true"></i> </a>
                                                    <?php }?>
                  
                                                    <div class="modal fade" id="uplddoc<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                            <form  id="form111" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
upload_mold_maintenance_doc" method="POST" id="form111" enctype="multipart/form-data">
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
                                                                        <input required type="file" name="doc" class="form-control" value="" id="fileInput111" onchange="checkFileSize(111)">
                                                                        <input type="hidden" name="no_of_cavity" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['no_of_cavity'];?>
" class="form-control">
                                                                        <input type="hidden" name="mold_name" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['mold_name'];?>
" class="form-control">
                                                                        <input type="hidden" name="customer_part_id" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['customer_part_id'];?>
" class="form-control">
                                                                        <input type="hidden" name="target_life" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['target_life'];?>
" class="form-control">         
                                                                        <input type="hidden" name="target_over_life" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['target_over_life'];?>
" class="form-control">
                                                                        <input type="hidden" name="current_molding_prod_qty" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['tot'];?>
" class="form-control">
                                                                        <input required type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
" name="id" placeholder="Enter Mold Life Over Frequency" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
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
</div><?php }
}
