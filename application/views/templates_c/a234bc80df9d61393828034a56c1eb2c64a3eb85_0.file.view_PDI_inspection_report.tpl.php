<?php
/* Smarty version 4.3.2, created on 2024-06-18 12:35:16
  from '/var/www/html/extra/erp_converted/application/views/templates/inspection/view_PDI_inspection_report.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_667131ac5ea949_75788858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a234bc80df9d61393828034a56c1eb2c64a3eb85' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/inspection/view_PDI_inspection_report.tpl',
      1 => 1718694260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667131ac5ea949_75788858 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="width:100%" class="wrapper">
    <!-- Navbar -->
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <h1>PDI Details<br></h1><br>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-1">
                        <a style="margin-right:" class="btn btn-dark" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
sales_invoice_released">
                            < Back</a>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="po_num">Customer </label><span class="text-danger">*</span>
                                    <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['sales_parts_for_PDI']->value[0]->customer_name;?>
" name="part_desc" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Description" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="po_num">Sales Invoice Number </label><span class="text-danger">*</span>
                                    <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['sales_parts_for_PDI']->value[0]->sales_number;?>
" name="part_number" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Number" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="po_num">Sales Invoice Date</label><span class="text-danger">*</span>
                                    <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['sales_parts_for_PDI']->value[0]->created_date;?>
" name="part_desc" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Description" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
test" method="post">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="">Select Part NO // Description<span class="text-danger">*</span> </label>
                                        <select name="sales_part_id" id="sales_part_id" required class="form-control select2">
                                            <option value=''>Please select</option>
                                            <?php if ($_smarty_tpl->tpl_vars['sales_parts_for_PDI']->value) {?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sales_parts_for_PDI']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['s']->value->sales_part_id != null) {?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->sales_part_id;?>
,<?php echo $_smarty_tpl->tpl_vars['s']->value->customer_part_id;?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value->part_number;?>
//<?php echo $_smarty_tpl->tpl_vars['s']->value->part_description;?>
</option>
                                                    <?php }?>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-1 m-3">
                                    <div class="form-group">
                                        <input type="button" id="submitByPartId" class="btn btn-primary mt-2" value="Submit">
                                    </div>
                                </div>
                                <div class="col-sm-1 m-3">
                                    <div class="form-group">
                                        <input type="button" id="addNewPartParms" title="This will add any new parameters defined in drawing master." class="btn btn-primary mt-2" value="Add New Parm">
                                    </div>
                                </div>
                                <div class="col-sm-1 m-4">
                                    <div class="form-group">
                                        <a class="btn btn-success" id="getPDILink" target="_blank">View PDI</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" id="observationTableData">
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php echo '<script'; ?>
>
    //on click of submit : to auto submit observation values
    $(document).on("click", "#submitByPartId", function() {
        var sales_part_id_customer_id = $("#sales_part_id").val();
        if (sales_part_id_customer_id == '') {
            alert("Please select Part Number.");
        } else {
            $.ajax({
                url: '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
PartInspectionController/auto_submit_inspection_report_observations',
                type: "POST",
                data: {
                    sales_part_id_customer_id: sales_part_id_customer_id,
                    addNewPartParms: "false"
                },
                cache: false,
                beforeSend: function() {},
                success: function(response) {
                    $('#observationTableData').html(response);
                }
            });
        }
    });

    //on click of add : show this modal change
    $(document).on("click", "#addNewPartParms", function() {
        var sales_part_id_customer_id = $("#sales_part_id").val();
        if (sales_part_id_customer_id == '') {
            alert('Please select Part Number.');
        } else {
            $.ajax({
                url: '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
PartInspectionController/auto_submit_inspection_report_observations',
                type: "POST",
                data: {
                    sales_part_id_customer_id: sales_part_id_customer_id,
                    addNewPartParms: "true"
                },
                cache: false,
                beforeSend: function() {},
                success: function(response) {
                    $('#observationTableData').html(response);
                }
            });
        }
    });

    // JavaScript to handle the Edit button clicks
    $(document).on("click", ".edit-button", function() {
        var itemId = $(this).data("item-id");
        var r_id = $(this).data("item-r-id");
        var sales_part_id = $(this).data("item-sales-part-id");
        // Use AJAX to load the edit form content based on the item ID
        $.ajax({
            url: '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
PartInspectionController/edit_inspection_parm_report_form',
            method: "post",
            data: {
                id: itemId,
                sales_part_id: sales_part_id
            },
            success: function(response) {
                $("#editModal .modal-body").html(response);
                $("#editModal").modal("show");
            }
        });
    });

    // Get a reference to the link and input field
    var getPDILink = document.getElementById('getPDILink');

    // Add a click event listener to the link
    getPDILink.addEventListener('click', function(e) {
        var sales_part_id_customer_id = $("#sales_part_id").val();
        var valuesArray = sales_part_id_customer_id.split(",");
        var sales_part_id = valuesArray[0];
        getPDILink.href = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
view_PDI/' + sales_part_id;
        if (sales_part_id == '') {
            alert('Please select Part Number.');
            e.preventDefault(); // Prevent the link from navigating
        }
    });

    // JavaScript to handle the Edit button clicks
    $(document).on("click", ".submit-button", function() {
        var itemId = $(this).data("item-id");
        var sales_part_id = $(this).data("item-sales-part-id");
        
        const r_id = document.querySelector(`[name="r_id-${itemId}"]`).value;
        const inputValue1 = document.querySelector(`[name="observation1-${itemId}"]`).value;
        const inputValue2 = document.querySelector(`[name="observation2-${itemId}"]`).value;
        const inputValue3 = document.querySelector(`[name="observation3-${itemId}"]`).value;
        const inputValue4 = document.querySelector(`[name="observation4-${itemId}"]`).value;
        const inputValue5 = document.querySelector(`[name="observation5-${itemId}"]`).value;
        const remark = document.querySelector(`[name="remark-${itemId}"]`).value;
        const parameter = document.querySelector(`[name="parameter-${itemId}"]`).value;
        const specification = document.querySelector(`[name="specification-${itemId}"]`).value;
        const evalution_mesaurement_technique = document.querySelector(`[name="evalution_mesaurement_technique-${itemId}"]`).value;
        const lower_spec_limit = document.querySelector(`[name="lower_spec_limit-${itemId}"]`).value;
        const upper_spec_limit = document.querySelector(`[name="upper_spec_limit-${itemId}"]`).value;
        const critical_parm = document.querySelector(`[name="critical_parm-${itemId}"]`).value;

        // Use AJAX to load the update content based on the item ID
        $.ajax({
            url: '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
PartInspectionController/update_inspection_report_observations',
            method: "post",
            data: {
                r_id: r_id,
                sales_part_id: sales_part_id,
                observation1: inputValue1,
                observation2: inputValue2,
                observation3: inputValue3,
                observation4: inputValue4,
                observation5: inputValue5,
                remark: remark,
                parameter: parameter,
                specification: specification,
                evalution_mesaurement_technique: evalution_mesaurement_technique,
                lower_spec_limit: lower_spec_limit,
                upper_spec_limit: upper_spec_limit,
                critical_parm: critical_parm
            },
            success: function(response) {
                $("#editModal .modal-body").html(response);
            }
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
