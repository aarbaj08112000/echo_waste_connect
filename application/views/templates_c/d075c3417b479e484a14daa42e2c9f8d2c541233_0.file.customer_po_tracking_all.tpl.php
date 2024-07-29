<?php
/* Smarty version 4.3.2, created on 2024-07-28 20:06:13
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\customer\customer_po_tracking_all.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66a6575db24f08_28899123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd075c3417b479e484a14daa42e2c9f8d2c541233' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\customer\\customer_po_tracking_all.tpl',
      1 => 1722177371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a6575db24f08_28899123 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="width: 2000px" class="wrapper">
    <!-- Navbar -->

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Customer PO QTY Tracking</h1>
                    </div>
                    <!-- <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Customer</li>
                        </ol>
                    </div> -->
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-9">

                        <!-- /.card -->

                        <div class="card"><!--
                            <div class="card-header">
                                <div class="row">
                                     <div class="col-lg-2">
                                            <div class="form-group">
                                                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
inwarding_by_po" method="POST">
                                                <label for="">Enter PO Number <span class="text-danger">*</span> </label>
                                                <input type="text" name="po_number" class="form-control" required placeholder="Enter Valid PO Number : ">
                                            </div>

                                    </div>
                                    <div class="col-lg-2">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success mt-4">Search</button>
                                            </div>
                                            </form>

                                    </div> 
                                </div>

                            </div>-->

                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                         
                                            <th>Customer</th>
                                            <th>PO Number</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Amendment No</th>
                                            <th>Status</th>
                                            <th>View Details</th>
                                            <!-- <th>Close PO</th>-->
                                            <th>PO Document</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>

                                   
                                </table>
                            </div>
                            <!-- /.card-header -->

                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <div class="modal fade" id="upload_modal" tabindex="-1" role="dialog" aria-labelledby="upload_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload file</h5>
                <button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
add_part" method="post" enctype='multipart/form-data'>
                    <div class="text-center">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Upload File<span class="text-danger">*</span>
                            <input required type="file" name="cad_file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Asset Number">
                        </div>
                        <input value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
" type="hidden" name="uid" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">
                        <input type="hidden" name="table_name" value="customer_po_tracking">
                        <input type="hidden" name="column_name" value="uploadedDoc">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="edit_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                <button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
update_customer_po_tracking_all" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">End Date<span class="text-danger">*</span></label>
                        <input required value="<?php echo $_smarty_tpl->tpl_vars['s']->value->po_end_date;?>
" type="date" class="form-control" name="end_date">
                        <input required value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
" type="hidden" class="form-control" name="id">
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


    <div class="modal fade" id="close_modal" tabindex="-1" role="dialog" aria-labelledby="close_modal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Close PO</h5>
                        <button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
                            
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
close_po_customer_po_tracking" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Are you sure to close <u>PO Number : <?php echo $_smarty_tpl->tpl_vars['s']->value->po_number;?>
</u> ?</label>
                                <br><br>
                                <input required value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
" type="hidden" class="form-control" name="id">
                                <label for="">Remark<span class="text-danger"></span></label>
                                <input type="text" name="remark" placeholder="Enter Remark " class="form-control"/>
                                <label for="">Reason<span class="text-danger">*</span> </label>
                                <select name="reason" required id="" class="form-control select2">
                                    <option value="">Select</option>
                                    <option value="Withdraw">Withdraw</option>
                                    <option value="Completed">Completed</option>
                                </select>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <!-- /.content-wrapper -->

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
/public/js/potracking.js"><?php echo '</script'; ?>
><?php }
}
