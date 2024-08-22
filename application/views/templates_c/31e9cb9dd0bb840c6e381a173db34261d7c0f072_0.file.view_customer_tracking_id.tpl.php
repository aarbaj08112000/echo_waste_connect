<?php
/* Smarty version 4.3.2, created on 2024-08-21 19:53:36
  from '/var/www/html/extra_work/erp_converted/application/views/templates/customer/view_customer_tracking_id.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c5f868f1c764_10653554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31e9cb9dd0bb840c6e381a173db34261d7c0f072' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/customer/view_customer_tracking_id.tpl',
      1 => 1724249927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c5f868f1c764_10653554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/extra_work/erp_converted/application/third_party/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div  class="wrapper container-xxl flex-grow-1 container-p-y">

<nav aria-label="breadcrumb">
<div class="sub-header-left pull-left breadcrumb">
  <h1>
    Planning & Sales
    <a hijacked="yes"  class="backlisting-link" title="Back to Issue Request Listing" >
      <i class="ti ti-chevrons-right" ></i>
      <em >Customer Po Tracking</em></a>
  </h1>
  <br>
  <span >Customer Po Tracking</span>
</div>
</nav>
<div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5 listing-btn">
            <a title="Back To View Pending List" class="btn btn-seconday" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
customer_po_tracking_all" type="button"><i class="ti ti-arrow-left"></i></a>
             
        </div>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
      
        <section class="content">
            <div class="">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="tgdp-rgt-tp-sect">
                                        <p class="tgdp-rgt-tp-ttl">Customer Name</p>
                                        <p class="tgdp-rgt-tp-txt">
                                            <?php echo $_smarty_tpl->tpl_vars['customer']->value[0]->customer_name;?>

                                        </p>
                                    </div>
                                    <div class="tgdp-rgt-tp-sect">
                                        <p class="tgdp-rgt-tp-ttl">PO Number</p>
                                        <p class="tgdp-rgt-tp-txt">
                                            <?php echo $_smarty_tpl->tpl_vars['customer_po_tracking']->value[0]->po_number;?>

                                        </p>
                                    </div>
                                    <div class="tgdp-rgt-tp-sect">
                                        <p class="tgdp-rgt-tp-ttl">PO Number</p>
                                        <p class="tgdp-rgt-tp-txt">
                                            <?php echo display_no_character($_smarty_tpl->tpl_vars['customer_po_tracking']->value[0]->po_number);?>

                                        </p>
                                    </div>
                                    <div class="tgdp-rgt-tp-sect">
                                        <p class="tgdp-rgt-tp-ttl">PO Start Date</p>
                                        <p class="tgdp-rgt-tp-txt">
                                            <?php echo display_no_character($_smarty_tpl->tpl_vars['customer_po_tracking']->value[0]->po_start_date);?>

                                        </p>
                                    </div>
                                    <div class="tgdp-rgt-tp-sect">
                                        <p class="tgdp-rgt-tp-ttl">PO End Date</p>
                                        <p class="tgdp-rgt-tp-txt">
                                            <?php echo display_no_character($_smarty_tpl->tpl_vars['customer_po_tracking']->value[0]->po_end_date);?>

                                        </p>
                                    </div>
                                    <div class="tgdp-rgt-tp-sect">
                                        <p class="tgdp-rgt-tp-ttl">PO Amendment No</p>
                                        <p class="tgdp-rgt-tp-txt">
                                            <?php echo display_no_character($_smarty_tpl->tpl_vars['customer_po_tracking']->value[0]->po_amedment_number);?>

                                        </p>
                                    </div>
                                    <div class="tgdp-rgt-tp-sect">
                                        <p class="tgdp-rgt-tp-ttl">Status</p>
                                        <p class="tgdp-rgt-tp-txt">
                                            <?php echo display_no_character($_smarty_tpl->tpl_vars['customer_po_tracking']->value[0]->status);?>

                                        </p>
                                    </div>
                                    <div class="tgdp-rgt-tp-sect">
                                        <p class="tgdp-rgt-tp-ttl">Created Date</p>
                                        <p class="tgdp-rgt-tp-txt">
                                            <?php echo display_no_character($_smarty_tpl->tpl_vars['customer_po_tracking']->value[0]->created_date);?>

                                        </p>
                                    </div>
                                    
                                    
                                    <?php if ($_smarty_tpl->tpl_vars['customer_po_tracking']->value[0]->status == 'closed') {?>
                                        <div class="tgdp-rgt-tp-sect">
                                            <p class="tgdp-rgt-tp-ttl">Remark</p>
                                            <p class="tgdp-rgt-tp-txt">
                                                <?php echo display_no_character($_smarty_tpl->tpl_vars['customer_po_tracking']->value[0]->remark);?>

                                            </p>
                                        </div>
                                        <div class="tgdp-rgt-tp-sect">
                                            <p class="tgdp-rgt-tp-ttl">Reason</p>
                                            <p class="tgdp-rgt-tp-txt">
                                                <?php echo display_no_character($_smarty_tpl->tpl_vars['customer_po_tracking']->value[0]->reason);?>

                                            </p>
                                        </div>
                                    
                                    <?php }?>
                                    
                                    <!--<div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="">Expiry Date <span class="text-danger">*</span> </label>
                                                    <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->expiry_po_date;?>
" class="form-control">
                                            </div>
                                        </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="card p-0 mt-4">
                            <div class="card-header">
                                <?php if (true || $_smarty_tpl->tpl_vars['new_po']->value[0]->expiry_po_date <= date('Y-m-d') || true) {?>
                                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
add_parts_customer_trackings" method="post" id='myForm'>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                    <label for="" class="form-label">Select Part Number // Description <span class="text-danger">*</span> </label>
                                                    <select name="part_id" id="" required class="form-control select2">
                                                        <?php if ($_smarty_tpl->tpl_vars['customer_part_data']->value) {?>
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_part_data']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
                                                                    <?php echo $_smarty_tpl->tpl_vars['c']->value->part_number;?>
 // <?php echo $_smarty_tpl->tpl_vars['c']->value->part_description;?>

                                                                </option>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        <?php }?>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="" class="form-label">Enter Qty <span class="text-danger">*</span> </label>
                                                <input type="text" step="any" name="qty" placeholder="Enter QTY "  class="form-control onlyNumericInput">
                                                <input type="hidden" name="customer_po_tracking_id" value="<?php echo $_smarty_tpl->tpl_vars['customer_po_tracking']->value[0]->id;?>
" required class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="" class="form-label"> &nbsp; &nbsp; </label><br>
                                                <button type="submit" class="btn btn-info  ">Add Part to Tracking
                                                </button>
                                               
                                            </div>
                                        </div>
                                        </div>
                                        </form>
                                <?php } else { ?>
                                    Po  Expired!!
                                <?php }?>
                            </div>

                            <div class="card-header pt-0">
                                <?php if ($_smarty_tpl->tpl_vars['parts_customer_trackings']->value) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['new_po']->value[0]->status == "pending") {?>

                                        <?php if ($_SESSION['type'] == 'admin' || $_SESSION['type'] == 'Admin') {?>
                                            <button type="button" class="btn btn-danger ml-1" data-bs-toggle="modal" data-bs-target="#lock">
                                                Lock PO
                                            </button>
                                        <?php }?>
                                    <?php }?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['new_po']->value[0]->status == "lock") {?>
                                    <?php if ($_SESSION['type'] == 'admin' || $_SESSION['type'] == 'Admin') {?>
                                        <button type="button" class="btn btn-success ml-1" data-bs-toggle="modal" data-bs-target="#accpet">
                                            Accept (Released) PO
                                        </button>
                                        <button type="button" class="btn btn-danger ml-1" data-bs-toggle="modal" data-bs-target="#delete">
                                            Reject (delete) PO
                                        </button>
                                    <?php }?>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['new_po']->value[0]->status != "pending") {?>
                                        <button type="button" disabled class="btn btn-success ml-1" data-bs-toggle="modal" data-bs-target="#accpet">
                                            PO Already Released
                                        </button>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
download_my_pdf/<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->id;?>
" class="btn btn-primary" href="">Download</a>
                                    <?php }?>
                                <?php }?>
                                <!-- Modal -->
                                <div class="modal fade" id="accpet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
accept_customer_po_tracking" class="accept_po" method="POST">
                                                <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for=""><b>Are You Sure Want To Released This PO?</b> </label>
                                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->id;?>
" required class="form-control">
                                                                <input type="hidden" name="status" value="accpet" required class="form-control">
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal fade" id="lock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
accept_customer_po_tracking" class="accept_po" method="POST">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for=""><b>Are You Sure Want To Lock This PO?</b></label>
                                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->id;?>
" required class="form-control">
                                                                <input type="hidden" name="status" value="lock" required class="form-control">
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
delete_po" class="delete_po" method="POST">
                                            <div class="modal-body">
                                                <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for=""><b>Are You Sure Want To Delete This PO?</b> </label>
                                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['new_po']->value[0]->id;?>
" required class="form-control">
                                                                <input type="hidden" name="status" value="reject" required class="form-control">
                                                                <input type="hidden" name="table_name" value="new_po" required class="form-control">
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-0 mt-4">
                            <div class="">
                                <table class="table table-striped scrollable" id="example1">
                                    <thead>
                                        <tr>
                                            <th>Sr No</th>
                                            <th>Part Number</th>
                                            <th>Part Description</th>
                                            <th>Part Price</th>
                                            <th>QTY</th>
                                            <th>Cumulative Sales Qty</th>
                                            <th>Balance QTY</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($_smarty_tpl->tpl_vars['parts_customer_trackings']->value) {?>
                                            <?php $_smarty_tpl->_assignInScope('final_po_amount', 0);?>
                                            <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parts_customer_trackings']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                                               
                                                <?php $_smarty_tpl->_assignInScope('start_date', smarty_modifier_date_format($_smarty_tpl->tpl_vars['new_po']->value[0]->po_start_date,"%d-%m-%Y"));?>
                                                <?php $_smarty_tpl->_assignInScope('end_date', smarty_modifier_date_format($_smarty_tpl->tpl_vars['new_po']->value[0]->po_end_date,"%d-%m-%Y"));?>

                                                <?php if ($_smarty_tpl->tpl_vars['sales_qty_data']->value) {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['sales_qty_data']->value[$_smarty_tpl->tpl_vars['p']->value->part_id][0]->MAINSUM > 0) {?>
                                                        <?php $_smarty_tpl->_assignInScope('sales_qty', ((string)$_smarty_tpl->tpl_vars['sales_qty_data']->value[$_smarty_tpl->tpl_vars['p']->value->part_id][0]->MAINSUM));?>
                                                        <?php } else { ?>
                                                        <?php $_smarty_tpl->_assignInScope('sales_qty', "0");?>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->_assignInScope('balance_qty', $_smarty_tpl->tpl_vars['p']->value->qty-$_smarty_tpl->tpl_vars['sales_qty']->value);?>
                                                <?php }?>
                                                
                                                <tr>
                                                    
                                                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[$_smarty_tpl->tpl_vars['p']->value->part_id][0]->part_number;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['child_part_data']->value[$_smarty_tpl->tpl_vars['p']->value->part_id][0]->part_description;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['child_part_rate']->value[$_smarty_tpl->tpl_vars['child_part_data']->value[$_smarty_tpl->tpl_vars['p']->value->part_id][0]->id][0]->rate;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['sales_qty']->value;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['balance_qty']->value;?>
</td>
                                                    <td>
                                                        <?php if ($_smarty_tpl->tpl_vars['new_po']->value[0]->status == "pending") {?>
                                                            <!-- Button trigger modal -->
                                                            <a type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                                <i class="ti ti-edit"></i>
                                                            </a>
                                                            <a type="button" class=" ml-1" data-bs-toggle="modal" data-bs-target="#exampleModaldelete<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                                <i class="ti ti-trash"></i>
                                                            </a>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
update_parts_customer_trackings" method="POST" class="update_qty">
                                                                        <div class="modal-body">
                                                                            <div class="col-lg-12">
                                                                                <div class="form-group">
                                                                                        <label for="">Enter Qty <span class="text-danger">*</span></label>
                                                                                        <input type="text" name="qty" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->qty;?>
" placeholder="Enter QTY " required class="form-control onlyNumericInput">
                                                                                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" required class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    </form>
                                                            </div>
                                                            <div class="modal fade" id="exampleModaldelete<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
delete" method="POST" class="delete_form">
                                                                                    <div class="col-lg-12">
                                                                                        <div class="form-group">
                                                                                            <label for=""> <b>Are You Sure Want To Delete This ? </b> </label>
                                                                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" required class="form-control">
                                                                                            <input type="hidden" name="table_name" value="parts_customer_trackings" required class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                                        </div>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        <?php }?>
                                                    </td>
                                                </tr>
                                                <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php }?>
                                    </tbody>
                                    <tfoot>
                                        <?php if ($_smarty_tpl->tpl_vars['po_parts']->value) {?>
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
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    </div>
   
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php echo '<script'; ?>
>

$("#myForm").validate({
    rules: {
        part_id: "required",
        qty: {
            required: true,
            number: true
        }
    },
    messages: {
        part_id: "Please select a part number",
        qty: {
            required: "Please enter a quantity",
            number: "Please enter a valid number"
        }
    },
    submitHandler: function(form) {
        // Handle form submission
        $.ajax({
            url: form.action,
            type: form.method,
            data: $(form).serialize(),
            success: function(response) {
                // alert('Form submitted successfully!');
                if(response != '' && response != null && typeof response != 'undefined'){
                    let res = JSON.parse(response);
                    if(res['sucess'] == 1){
                        toastr.success(res['msg']);
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    }else{
                        toastr.error(res['msg']);
                    }
                }
                // Handle success response here
            },
            error: function(xhr, status, error) {
                toastr.error('Form submission failed');
                // Handle error response here
            }
        });
    }

    
});

$(".update_qty").validate({
        rules: {
            qty: {
                required: true,
                number: true
            }
        },
        messages: {
            qty: {
                required: "Please enter the quantity",
                number: "Please enter a valid number"
            }
        },
        submitHandler: function(form) {
            // Custom submit handler
            $.ajax({
                url: form.action,
                type: form.method,
                data: $(form).serialize(),
                success: function(response) {
                    // Handle the success response here
                    if(response != '' && response != null && typeof response != 'undefined'){
                        let res = JSON.parse(response);
                        if(res['success'] == 1){
                            toastr.success(res['msg']);
                            setTimeout(() => {
                                window.location.reload();
                            }, 1000);
                        }else{
                            toastr.error(res['msg']);
                        }
                    }
                },
                error: function(xhr, status, error) {
                    // Handle the error response here
                    toastr.error('Form submission failed');
                    // console.error('Form submission failed:', error);
                }
            });
        }
    });

    $(".delete_form").on("submit", function(event) {
        event.preventDefault(); // Prevent the default form submission
        // Perform AJAX request
        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            data: $(this).serialize(),
            success: function(response) {
                // Handle the success response here
                
                
                let res = JSON.parse(response);
                        if(res['success'] == 1){
                            toastr.success(res['message']);
                            setTimeout(() => {
                                window.location.reload();
                            }, 1000);
                        }else{
                            toastr.error(res['message']);
                        }
                
                
            },
            error: function(xhr, status, error) {
                // Handle the error response here
                console.error('Form submission failed:', error);
            }
        });
    });
    $(".delete_po").on("submit", function(event) {
        event.preventDefault(); // Prevent the default form submission
        // Perform AJAX request
        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            data: $(this).serialize(),
            success: function(response) {
                // Handle the success response here
                let res = JSON.parse(response);
                        if(res['success'] == 1){
                            toastr.success(res['messages']);
                            setTimeout(() => {
                                window.location.reload();
                            }, 1000);
                        }else{
                            toastr.error(res['message']);
                        }
                
                
            },
            error: function(xhr, status, error) {
                // Handle the error response here
                console.error('Form submission failed:', error);
            }
        });
    });

    $(".accept_po").on("submit", function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Perform AJAX request
        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            data: $(this).serialize(),
            success: function(response) {
                let res = JSON.parse(response);
                        if(res['success'] == 1){
                            toastr.success(res['message']);
                            setTimeout(() => {
                                window.location.reload();
                            }, 1000);
                        }else{
                            toastr.error(res['message']);
                        }
                
            },
            error: function(xhr, status, error) {
                // Handle the error response here
                console.error('Form submission failed:', error);
            }
        });
    });
<?php echo '</script'; ?>
><?php }
}
