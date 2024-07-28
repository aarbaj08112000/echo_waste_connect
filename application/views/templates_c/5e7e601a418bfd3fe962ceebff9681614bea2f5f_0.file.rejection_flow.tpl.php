<?php
/* Smarty version 4.3.2, created on 2024-07-27 15:23:02
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\sales\rejection_flow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66a4c37e2b3622_99107994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e7e601a418bfd3fe962ceebff9681614bea2f5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\sales\\rejection_flow.tpl',
      1 => 1722073908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a4c37e2b3622_99107994 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper container-xxl flex-grow-1 container-p-y">
    <!-- Navbar -->

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    <nav aria-label="breadcrumb">
    <div class="sub-header-left pull-left breadcrumb">
      <h1>
        Planning & Sales
        <a hijacked="yes" href="javascript:void(0)" class="backlisting-link" title="Back to Issue Request Listing">
          <i class="ti ti-chevrons-right"></i>
          <em>Sales Invoice</em>
       </a>
      </h1>
      <br>
      <span >Rejection Flow</span>
    </div>
  </nav>
 
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
     

        <!-- Main content -->
        <section class="content">
            <div class="">
                <div class="row">
                    <div class="col-12">

                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header">

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
generate_rejection_flow" method="POST">
                                                <label for="">Select Customer<span class="text-danger">*</span> </label>
                                                <select name="customer_id" required id="" class="form-control select2">
                                                    <?php if ($_smarty_tpl->tpl_vars['customer']->value) {?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value->customer_name;?>
</option>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php }?>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">

                                            <label for="">Select Part<span class="text-danger">*</span> </label>
                                            <select name="part_number" required id="" class="form-control select2">
                                                <option value="production_rejection">Production Rejection</option>
                                                <!-- <option value="production_scrap">Production Scrap</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">

                                            <label for="">Select Type<span class="text-danger">*</span> </label>
                                            <select name="type" required id="" class="form-control select2">
                                                <option value="store_stock">Store Stock</option>
                                                <option value="FG">FG</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Enter Qty</label>
                                            <input type="number" step="any" placeholder="Enter Qty" value="" name="qty" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Enter Price</label>
                                            <input type="number" step="any" placeholder="Enter Price" value="" name="price" class="form-control">
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Enter HSN Code</label>
                                            <input type="text" placeholder="Enter HSN" value="" name="hsn_code" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Enter Mode Of Transport </label>
                                            <input type="text" placeholder="Enter Mode Of Transport" value="" name="mode" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Enter Transporter </label>
                                            <input type="text" placeholder="Enter Transporter" value="" name="transporter" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Enter Vehicle No. </label>
                                            <input type="text" placeholder="Enter Vehicle No" value="" name="vehicle_number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Enter L.R No </label>
                                            <input type="text" placeholder="Enter L.R No" value="" name="lr_number" class="form-control">
                                        </div>
                                    </div> -->

                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="">Enter Remark </label>
                                            <input type="text" placeholder="Enter Remark" value="" name="remark" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger mt-4">Generate</button>
                                        </div>
                                            </form>
                                    </div>

                                </div>
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
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php }
}
