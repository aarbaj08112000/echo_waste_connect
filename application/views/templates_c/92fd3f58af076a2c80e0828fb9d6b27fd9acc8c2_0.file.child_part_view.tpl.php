<?php
/* Smarty version 4.3.2, created on 2024-06-10 10:52:08
  from '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/purchase/child_part_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66668d80b71868_81566554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92fd3f58af076a2c80e0828fb9d6b27fd9acc8c2' => 
    array (
      0 => '/var/www/html/extra_work/ERP_REFRESH_MAIN/application/views/templates/purchase/child_part_view.tpl',
      1 => 1717996922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66668d80b71868_81566554 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- DONE AROUND UNIT -->
<?php $_smarty_tpl->_assignInScope('entitlements', $_smarty_tpl->tpl_vars['session_data']->value['entitlements']);?>
<div class="wrapper" >
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Item Master</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">item part List</li>
               </ol>
            </div>
         </div>
      </div>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <!-- /.card -->
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">
                     </h3>
                  </div>
                  <div class="card-body">
                     <form action="<?php echo base_url('view_child_part_view_by_filter');?>
" method="POST"
                        enctype="multipart/form-data">
                        <div class="row">
                           <div class="col-lg-4">
                              <div style="width: 400px;">
                                 <div class="form-group">
                                    <label for="on click url">Select Part Number <span
                                       class="text-danger">*</span></label> <br>
                                    <select name="child_part_id" class="form-control select2" required>
                                       <option value="ALL">All</option>
                                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplier_part_list']->value, 'supplier_part');
$_smarty_tpl->tpl_vars['supplier_part']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['supplier_part']->value) {
$_smarty_tpl->tpl_vars['supplier_part']->do_else = false;
?>
                                       <option <?php if (($_smarty_tpl->tpl_vars['filter_child_part_id']->value === $_smarty_tpl->tpl_vars['supplier_part']->value->id)) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['supplier_part']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['supplier_part']->value->part_number;?>
/<?php echo $_smarty_tpl->tpl_vars['supplier_part']->value->part_description;?>

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
                              <th>Sr. No.</th>
                              <th>Part Number</th>
                              <th>Part Description</th>
                              <th>Safety/buffer Stock</th>
                              <th>HSN Code</th>
                              <th>Purchase Item Category </th>
                              <th>Store Rack Location</th>
                              <th>UOM</th>
                              <th>Update UOM</th>
                              <th>Max PO QTY </th>
                              <th>Stock Rate </th>
                              <?php if (($_smarty_tpl->tpl_vars['entitlements']->value['isSheetMetal'] != null)) {?>
                              <th>Weight</th>
                              <th>Size</th>
                              <th>Thickness</th>
                              <?php }?>
                              <th>Grade</th>
                              <th>Inward Inspection</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $_smarty_tpl->_assignInScope('i', 1);?>
                           <?php if (count($_smarty_tpl->tpl_vars['child_part_master']->value) > 0) {?>
                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_part_master']->value, 'po');
$_smarty_tpl->tpl_vars['po']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->do_else = false;
?>
                           <tr>
                              <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['po']->value->part_number;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['po']->value->part_description;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['po']->value->safty_buffer_stk;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['po']->value->hsn_code;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['po']->value->sub_type;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['po']->value->store_rack_location;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['po']->value->uom_name;?>
</td>
                              <td>
                                 <!-- Button trigger modal -->
                                 <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#edit<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                 <i class='far fa-edit'></i>
                                 </button>
                                 <!-- edit Modal -->
                                 <div class="modal fade" id="edit<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Update
                                             </h5>
                                             <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                             </button>
                                          </div>
                                          <div class="modal-body">
                                             <div class="row">
                                                <div class="col-lg-6">
                                                   <form
                                                      action="<?php echo base_url('update_uom_report');?>
"
                                                      method="POST" enctype="multipart/form-data">
                                                      <div class="form-group">
                                                         <label> Select UOM</label><span
                                                            class="text-danger">*</span>
                                                         <input type="hidden" readonly
                                                            value="<?php echo $_smarty_tpl->tpl_vars['po']->value->childPartId;?>
"
                                                            name="id" required
                                                            class="form-control"
                                                            id="exampleInputEmail1"
                                                            placeholder="Enter Safty/buffer stock"
                                                            aria-describedby="emailHelp">
                                                         <select class="form-control select2"
                                                            name="uom_id" style="width: 100%;">
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['uom']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                            <option <?php if (($_smarty_tpl->tpl_vars['c']->value->id == $_smarty_tpl->tpl_vars['po']->value->uom_id)) {?>selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
                                                               <?php echo $_smarty_tpl->tpl_vars['c']->value->uom_name;?>

                                                            </option>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                         </select>
                                                      </div>
                                                </div>
                                                <div class="col-lg-6">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary"
                                             data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">Save
                                          changes</button>
                                          </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- edit Modal -->
                              </td>
                              <td><?php echo $_smarty_tpl->tpl_vars['po']->value->max_uom;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['po']->value->store_stock_rate;?>
</td>
                              <?php if (($_smarty_tpl->tpl_vars['entitlements']->value['isSheetMetal'] != null)) {?>                                                    
                              <td><?php echo $_smarty_tpl->tpl_vars['po']->value->weight;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['po']->value->size;?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['po']->value->thickness;?>
</td>
                              <?php }?>
                              <td><?php echo $_smarty_tpl->tpl_vars['po']->value->grade;?>
</td>
                              <td>
                                 <a class="btn btn-info"
                                    href="<?php echo base_url('raw_material_inspection/');
echo $_smarty_tpl->tpl_vars['po']->value->childPartId;?>
">
                                 View Inward Inspection
                                 </a>
                              </td>
                              <td>
                                 <button type="submit" data-toggle="modal" class="btn btn-sm btn-primary"
                                    data-target="#exampleModal2<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"> <i
                                    class="fas fa-edit"></i></button>
                                 <div class="modal fade" id="exampleModal2<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Update
                                             </h5>
                                             <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                             </button>
                                          </div>
                                          <div class="modal-body">
                                             <form
                                                action="<?php echo base_url('update_child_part_view');?>
"
                                                method="POST">
                                                <div class="row">
                                                   <div class="col-lg-12">
                                                      <div class="form-group">
                                                         <label for="part_number">Part
                                                         Number</label><span
                                                            class="text-danger">*</span>
                                                         <input readonly type="text"
                                                            value="<?php echo $_smarty_tpl->tpl_vars['po']->value->part_number;?>
"
                                                            name="part_number" required
                                                            class="form-control"
                                                            id="exampleInputEmail1"
                                                            aria-describedby="emailHelp"
                                                            placeholder="Part Number">
                                                         <input type="hidden" name="id"
                                                            value="<?php echo $_smarty_tpl->tpl_vars['po']->value->childPartId;?>
">
                                                         <input type="hidden" name="filter_child_part_id"
                                                            value="<?php echo $_smarty_tpl->tpl_vars['filter_child_part_id']->value;?>
">
                                                      </div>
                                                      <div class="form-group">
                                                         <label for="Client_name">Part
                                                         Description</label><span
                                                            class="text-danger">*</span>
                                                         <input type="text"
                                                            value="<?php echo $_smarty_tpl->tpl_vars['po']->value->part_description;?>
"
                                                            name="part_description" required
                                                            class="form-control"
                                                            id="exampleInputEmail1"
                                                            aria-describedby="emailHelp"
                                                            placeholder="Part Description">
                                                      </div>
                                                      <div class="form-group">
                                                         <label for="safty_buffer_stk">Safety
                                                         Buffer Stock</label><span
                                                            class="text-danger">*</span>
                                                         <input type="text"
                                                            value="<?php echo $_smarty_tpl->tpl_vars['po']->value->safty_buffer_stk;?>
"
                                                            name="saft__stk" required
                                                            class="form-control"
                                                            id="exampleInputEmail1"
                                                            aria-describedby="emailHelp"
                                                            placeholder="Part Specification">
                                                      </div>
                                                      <div class="form-group">
                                                         <label for="hsn_code">HSN
                                                         Code</label><span
                                                            class="text-danger">*</span>
                                                         <input type="text"
                                                            value="<?php echo $_smarty_tpl->tpl_vars['po']->value->hsn_code;?>
"
                                                            name="hsn_code" required
                                                            class="form-control"
                                                            id="exampleInputEmail1"
                                                            aria-describedby="emailHelp"
                                                            placeholder="Part Specification">
                                                      </div>
                                                      <div class="form-group">
                                                         <label>Purchase Item Category</label><span class="text-danger">*</span>
                                                         <select class="form-control select2" name="sub_type" style="width: 100%;">
                                                            <?php if (($_smarty_tpl->tpl_vars['po']->value->sub_type == "Regular grn" || $_smarty_tpl->tpl_vars['po']->value->sub_type == "RM")) {?>
                                                            <option value="Regular grn" <?php if (($_smarty_tpl->tpl_vars['po']->value->sub_type == "Regular grn")) {?>selected<?php }?> >Regular GRN</option>
                                                            <option value="RM" <?php if (($_smarty_tpl->tpl_vars['po']->value->sub_type == "RM")) {?>selected<?php }?> >RM</option>
                                                            <?php } elseif (($_smarty_tpl->tpl_vars['po']->value->sub_type == "Subcon grn" || $_smarty_tpl->tpl_vars['po']->value->sub_type == "Subcon Regular")) {?>
                                                            <option value="Subcon grn" <?php if (($_smarty_tpl->tpl_vars['po']->value->sub_type == "Subcon grn")) {?>selected<?php }?>>Subcon GRN</option>
                                                            <option value="Subcon Regular" <?php if (($_smarty_tpl->tpl_vars['po']->value->sub_type == "Subcon Regular")) {?> selected<?php }?> >Subcon Regular</option>
                                                            <?php } elseif (($_smarty_tpl->tpl_vars['po']->value->sub_type == "consumable")) {?>
                                                            <option value="consumable" <?php if (($_smarty_tpl->tpl_vars['po']->value->sub_type == "consumable")) {?> selected<?php }?> >Consumable</option>
                                                            <?php } elseif (($_smarty_tpl->tpl_vars['po']->value->sub_type == "customer_bom")) {?>
                                                            <option value="customer_bom" <?php if (($_smarty_tpl->tpl_vars['po']->value->sub_type == "customer_bom")) {?> selected<?php }?> >Customer BOM</option>
                                                            <?php } elseif (($_smarty_tpl->tpl_vars['po']->value->sub_type == "asset")) {?>
                                                            <option value="asset" <?php if (($_smarty_tpl->tpl_vars['po']->value->sub_type == "asset")) {?>selected<?php }?> >Asset</option>
                                                            <?php }?>
                                                         </select>
                                                      </div>
                                                      <div class="form-group">
                                                         <label for="store_rack_location">Store
                                                         Rack Location</label><span
                                                            class="text-danger">*</span>
                                                         <input type="text"
                                                            value="<?php echo $_smarty_tpl->tpl_vars['po']->value->store_rack_location;?>
"
                                                            name="store_rack_location" required
                                                            class="form-control"
                                                            id="exampleInputEmail1"
                                                            aria-describedby="emailHelp"
                                                            placeholder="Part Specification">
                                                      </div>
                                                      <div class="form-group">
                                                         <label for="safty_buffer_stk">UOM
                                                         Name</label><span
                                                            class="text-danger">*</span>
                                                         <input readonly type="text"
                                                            value="<?php echo $_smarty_tpl->tpl_vars['c']->value->uom_name;?>
"
                                                            name="uom_name" required
                                                            class="form-control"
                                                            id="exampleInputEmail1"
                                                            aria-describedby="emailHelp"
                                                            placeholder="Part Specification">
                                                      </div>
                                                      <div class="form-group">
                                                         <label for="max_uom">Max
                                                         UOM</label><span
                                                            class="text-danger">*</span>
                                                         <input type="text"
                                                            value="<?php echo $_smarty_tpl->tpl_vars['po']->value->max_uom;?>
"
                                                            name="max_uom" required
                                                            class="form-control"
                                                            id="exampleInputEmail1"
                                                            aria-describedby="emailHelp"
                                                            placeholder="Part Specification">
                                                      </div>
                                                      <div class="form-group">
                                                         <label for="max_uom">Store Stock
                                                         Rate</label><span
                                                            class="text-danger">*</span>
                                                         <input type="text"
                                                            value="<?php echo $_smarty_tpl->tpl_vars['po']->value->store_stock_rate;?>
"
                                                            name="store_stock_rate" required
                                                            class="form-control"
                                                            id="exampleInputEmail1"
                                                            aria-describedby="emailHelp"
                                                            placeholder="Part Specification">
                                                      </div>
                                                      <div class="form-group">
                                                         <label for="max_uom">Weight</label><span
                                                            class="text-danger">*</span>
                                                         <input type="text"
                                                            value="<?php echo $_smarty_tpl->tpl_vars['po']->value->weight;?>
"
                                                            name="weight" required
                                                            class="form-control"
                                                            id="exampleInputEmail1"
                                                            aria-describedby="emailHelp">
                                                      </div>
                                                      <div class="form-group">
                                                         <label for="max_uom">Size</label><span
                                                            class="text-danger">*</span>
                                                         <input type="text"
                                                            value="<?php echo $_smarty_tpl->tpl_vars['po']->value->size;?>
"
                                                            name="size" required
                                                            class="form-control"
                                                            id="exampleInputEmail1"
                                                            aria-describedby="emailHelp">
                                                      </div>
                                                      <div class="form-group">
                                                         <label
                                                            for="max_uom">Thickness</label><span
                                                            class="text-danger">*</span>
                                                         <input type="text"
                                                            value="<?php echo $_smarty_tpl->tpl_vars['po']->value->thickness;?>
"
                                                            name="thickness" required
                                                            class="form-control"
                                                            id="exampleInputEmail1"
                                                            aria-describedby="emailHelp">
                                                      </div>
                                                      <div class="form-group">
                                                         <label for="max_uom">Grade</label><span
                                                            class="text-danger">*</span>
                                                         <input type="text"
                                                            value="<?php echo $_smarty_tpl->tpl_vars['po']->value->grade;?>
"
                                                            name="grade" required
                                                            class="form-control"
                                                            id="exampleInputEmail1"
                                                            aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="modal-footer">
                                                   <button type="button" class="btn btn-secondary"
                                                      data-dismiss="modal">Close</button>
                                                   <button type="submit"
                                                      class="btn btn-primary">Save
                                                   changes</button>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                           <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value++);?>
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
</div><?php }
}
