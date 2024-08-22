<?php
/* Smarty version 4.3.2, created on 2024-08-20 14:47:45
  from '/var/www/html/extra_work/erp_converted/application/views/templates/sales/new_sales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c45f3923a8e2_84302362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7868e3bdc591a3c3f970b92e95741b4c72329692' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/sales/new_sales.tpl',
      1 => 1724142496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c45f3923a8e2_84302362 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper container-xxl flex-grow-1 container-p-y">
    <!-- Navbar -->
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <!-- Content Wrapper. Contains page content -->

    <nav aria-label="breadcrumb">
      <div class="sub-header-left pull-left breadcrumb">
        <h1>
          Planning & Sales
          <a hijacked="yes"  class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Sales Invoice</em></a>
        </h1>
        <br>
        <span >Generate Sales Invoics</span>
      </div>
    </nav>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       
        <!-- Main content -->
        <section class="content">
            <div class="">
            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
generate_new_sales" method="POST">
                <div class="row">
                    <div class="col-12">
                        <!-- /.card -->
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div id="loading-overlay">
                                        <div id="loading-spinner"></div>
                                    </div>
                                    <div class="col-lg-4">
                                       
                                            <div class="form-group mb-3">
                                                <label for="" class="form-label">Customer <span class="text-danger">*</span></label>
                                                <select name="customer_id" id="customer_tracking"  class="form-control select2">
                                                    <option value=''>Select</option>
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['customer']->value)) {?>
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
                                        <div class="form-group mb-3">
                                            <label for="" class="form-label">Part Number // Description // FG Stock // Rate // Tax Structure
                                            <span class="text-danger">*</span> </label>
                                            <select name="part_id" id="part_id"  class="form-control select2">
                                                <option value=''>Please select</option>
                                            </select>
                                        </div>                            
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for="" class="form-label">Mode Of Transport<span class="text-danger">*</span></label>
                                            <select name="mode" class="form-control" >
                                                <option value="">Select</option>
                                                <option value="1">Road</option>
                                                <option value="2">Rail</option>
                                                <option value="3">Air</option>
                                                <option value="4">Ship</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for="" class="form-label">Transporter<span class="text-danger">*</span></label>
                                            <select name="transporter"  class="form-control select2">
                                                <option value="">Select Transporter</option>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['transporter']->value)) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transporter']->value, 'tr');
$_smarty_tpl->tpl_vars['tr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tr']->value) {
$_smarty_tpl->tpl_vars['tr']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['tr']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['tr']->value->name;?>
 - <?php echo $_smarty_tpl->tpl_vars['tr']->value->transporter_id;?>
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
                                            <label for="" class="form-label">Vehicle No.<span class="text-danger">*</span></label>
                                            <input type="text" 
                                                   placeholder="Enter Vehicle No" 
                                                   value="" 
                                                   name="vehicle_number" 
                                                    class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for="" class="form-label">L.R No </label>
                                            <input type="text" placeholder="Enter L.R No" value="" name="lr_number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 ">
                                        <div class="form-group mb-3">
                                            <label for="" class="form-label">Distance of Transportation<span class="text-danger">*</span></label>
                                            <input type="text" placeholder="Enter Distance of Transportation" value="" name="distance"  class="form-control">
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-4 form-group">
                                        <label class="form-label"   >Shipping Address: </label><br>
                                        <div class="row" style="border:1px;">
                                            <div class="col-lg-5">
                                                <div class="form-group mb-3 mt-2">   
                                                    <input type="radio" name="ship_addressType" checked value="customer" onchange="toggleConsigneeSelection()">
                                                    &nbsp;<label>Same as Customer</label><br>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="form-group mb-3 mt-2">   
                                                    <input type="radio" name="ship_addressType" value="consignee" onchange="toggleConsigneeSelection()">
                                                    &nbsp;<label >Select Consignee Address</label><br>
                                                </div>
                                                <div class="form-group">
                                                    <select name="consignee" id="consigneeSelect"  disabled class="form-control">
                                                        <option value="">Select</option>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['consignee_list']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
                                                                <?php echo $_smarty_tpl->tpl_vars['c']->value->consignee_name;?>
 - <?php echo $_smarty_tpl->tpl_vars['c']->value->location;?>

                                                            </option>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="" class="form-label">Remark</label>
                                            <input type="text" placeholder="Enter Remark" value="" name="remark" class="form-control">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger mt-4">Generate</button>
                                        </div>
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
            </form>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- /.content-wrapper -->

<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    function toggleConsigneeSelection() {
        var consigneeSelect = document.getElementById("consigneeSelect");
        var shipAddressType = document.querySelector('input[name="ship_addressType"]:checked').value;

        if (shipAddressType === "customer") {
             consigneeSelect.disabled = true;
             consigneeSelect.style.display = "none";
             consigneeSelect.value = ''; //change to default value as select.
        } else if (shipAddressType === "consignee") {
            consigneeSelect.disabled = false;
            consigneeSelect.style.display = "block";
        }
    }

    $(document).ready(function() {
        var consigneeSelect = document.getElementById("consigneeSelect");
        consigneeSelect.style.display = "none";
        var customer_id = $("#customer_tracking").val();
        // $('#new_po_id').val(id);
        // var salesno = $('#sales_number').val();
        $.ajax({
            url: '<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
SalesController/get_customer_parts_for_sale',
            type: "POST",
            data: {
                id: customer_id
            },
            cache: false,
            beforeSend: function() {
                // Show the loading icon
                $("#loading-overlay").show();
            },
            success: function(response) {
                 // Hide the loading icon
                if (response) {
                    $('#part_id').html(response);
                } else {
                    $('#part_id').html(response);
                }
            },complete: function() {
                    // Hide the loading overlay
                    $("#loading-overlay").hide();
            }
       });
        $("#customer_tracking").change(function() {
            var customer_id = $("#customer_tracking").val();
            $.ajax({
                url: '<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
SalesController/get_customer_parts_for_sale',
                type: "POST",
                data: {
                    id: customer_id
                    //, salesno: salesno
                },
                cache: false,
                beforeSend: function() {
                     // Show the loading icon
                    $("#loading-overlay").show();
                },
                success: function(response) {
                    if (response) {
                        $('#part_id').html(response);
                    } else {
                        $('#part_id').html(response);
                    }
                },
                complete: function() {
                    // Hide the loading icon
                    $("#loading-overlay").hide();
                }        
            });
        })
    // jqeuery form validation.
        $("form").validate({
                rules: {
                    customer_id: {
                        required: true
                    },
                    part_id: {
                        required: true
                    },
                    mode: {
                        required: true
                    },
                    transporter: {
                        required: true
                    },
                    vehicle_number: {
                        required: true
                    },
                    distance: {
                        required: true
                    },
                    consignee: {
                        required: function() {
                            return $("input[name='ship_addressType']:checked").val() === "consignee";
                        }
                    }
                },
                messages: {
                    customer_id: {
                        required: "Please select a customer."
                    },
                    part_id: {
                        required: "Please select a part."
                    },
                    mode: {
                        required: "Please select a mode of transport."
                    },
                    transporter: {
                        required: "Please select a transporter."
                    },
                    vehicle_number: {
                        required: "Please enter a vehicle number."
                    },
                    distance: {
                        required: "Please enter the distance of transportation."
                    },
                    consignee: {
                        required: "Please select a consignee address."
                    }
                },
                errorPlacement: function(error, element) {
                // error.addClass('error');
                element.closest('.form-group').append(error);
            },
            onkeyup: function(element) {
                $(element).valid();
            },
            onchange: function(element) {
                $(element).valid();
            },
                submitHandler: function(form) {
                    // Prevent the default form submission
                    event.preventDefault();

                    // Perform your AJAX form submission here
                    $.ajax({
                        url: form.action,
                        type: form.method,
                        data: $(form).serialize(),
                        success: function(response) {
                            // Handle the successful form submission here
                            if(response != '' && response != null && typeof response != 'undefined'){
                                let res = JSON.parse(response);
                                if(res['sucess'] == 1){
                                    toastr.success('Sales Invoice generated successfully.')
                                    
                                    setTimeout(function() {
                                        window.location.href = "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" + res['url'];
                                    }, 1000);
                                    
                                }else{
                                    toastr.error('Unable to generate invooice.')
                                }
                                
                            }
                            
                            
                        },
                        error: function() {
                            // Handle the error response here
                            toastr.error("An error occurred while creating the sales invoice.");
                        }
                    });
                }
            });
            $('.select2').on('change', function() {
            $(this).valid();
        });


            $("input[name='ship_addressType']").change(function() {
                if ($(this).val() === "consignee") {
                    $("#consigneeSelect").prop("disabled", false);
                } else {
                    $("#consigneeSelect").prop("disabled", true);
                }
            });

    });
<?php echo '</script'; ?>
>
<?php }
}
