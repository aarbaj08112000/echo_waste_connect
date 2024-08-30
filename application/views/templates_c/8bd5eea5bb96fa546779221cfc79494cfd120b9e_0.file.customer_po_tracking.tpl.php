<?php
/* Smarty version 4.3.2, created on 2024-08-27 10:14:36
  from '/var/www/html/extra_work/erp_converted/application/views/templates/customer/customer_po_tracking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66cd59b49f0343_63888662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bd5eea5bb96fa546779221cfc79494cfd120b9e' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/customer/customer_po_tracking.tpl',
      1 => 1724694253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cd59b49f0343_63888662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/extra_work/erp_converted/application/third_party/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div  class="wrapper container-xxl flex-grow-1 container-p-y">
    <!-- Navbar -->
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <!-- Content Wrapper. Contains page content -->

    <nav aria-label="breadcrumb">
    <div class="sub-header-left pull-left breadcrumb">
      <h1>
        Planning & Sales
        <a hijacked="yes" class="backlisting-link" title="Back to Issue Request Listing" >
          <i class="ti ti-chevrons-right" ></i>
          <em >Customer PO QTY Tracking</em></a>
      </h1>
      <br>
      <span >Create PO QTY Tracking</span>
    </div>
  </nav>
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

                            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
generate_customer_po_tracking" method="POST" id="generate_tracking" enctype='multipart/form-data'>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                                <label for="" class="form-label">Select Customer <span class="text-danger">*</span> </label>
                                                <select name="customer_id" required id="" class="form-control select2">
                                                    <?php if ($_smarty_tpl->tpl_vars['customer_data']->value) {?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_data']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
">
                                                                <?php echo $_smarty_tpl->tpl_vars['p']->value->customer_name;?>

                                                            </option>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php }?>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for=""  class="form-label">Select Start PO Date <span class="text-danger">*</span> </label>
                                            <input type="date" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
" required name="po_start_date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for=""  class="form-label">Select End Date </label>
                                            <input type="date" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
" required name="po_end_date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for=""  class="form-label">Enter PO Number <span class="text-danger">*</span> </label>
                                            <input type="text" placeholder="Enter PO Number" required value="" name="po_number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for=""  class="form-label">Enter PO Amendment No </label>
                                            <input type="text" step="any" placeholder="Enter Amendment PO number" value="" name="po_amedment_number" class="form-control onlyNumericInput">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for=""  class="form-label">Select PO Amendment Date </label>
                                            <input type="date" value="" name="po_amendment_date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for="po_num"  class="form-label">Upload PO</label>
                                            <input type="file" name="uploadedDoc" class="form-control" id="exampleuploadedDoc" placeholder="Upload PO" aria-describedby="uploadDocHelp">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger mt-4">Generate</button>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </form>
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
<?php echo '<script'; ?>
>
$("#generate_tracking").validate({
    rules: {
            customer_id: "required",
            po_start_date: "required",
            po_end_date: "required",
            po_number: "required"
        },
        messages: {
            customer_id: "Please select a customer",
            po_start_date: "Please select a start PO date",
            po_end_date: "Please select an end PO date",
            po_number: "Please enter the PO number"
        },
        submitHandler: function(form) {
            // Create a new FormData object to handle the file upload
            var formData = new FormData(form);

            // Custom submit handler
            $.ajax({
                url: form.action,
                type: form.method,
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    // Handle the success response here
                    if(response != '' && response != null && typeof response != 'undefined'){
                        let res = JSON.parse(response);
                        if(res['sucess'] == 1){
                            toastr.success(res['msg'])
                            setTimeout(() => {
                                window.location.href = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
' + res['url'];
                            }, 1000);
                        }else{
                            toastr.error(res['msg']);
                        }
                       
                    }
                },
                error: function(xhr, status, error) {
                    // Handle the error response here
                    console.error('Form submission failed:', error);
                }
            });
        }
    });

<?php echo '</script'; ?>
><?php }
}
