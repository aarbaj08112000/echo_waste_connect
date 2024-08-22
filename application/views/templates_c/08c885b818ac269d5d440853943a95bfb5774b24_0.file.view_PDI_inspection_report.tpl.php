<?php
/* Smarty version 4.3.2, created on 2024-08-21 15:44:40
  from '/var/www/html/extra_work/erp_converted/application/views/templates/inspection/view_PDI_inspection_report.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c5be107ffbc2_49017817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08c885b818ac269d5d440853943a95bfb5774b24' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/inspection/view_PDI_inspection_report.tpl',
      1 => 1724235279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c5be107ffbc2_49017817 (Smarty_Internal_Template $_smarty_tpl) {
?><div  class="wrapper container-xxl flex-grow-1 container-p-y">
    <!-- Navbar -->
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <!-- Content Wrapper. Contains page content -->

    <div class="sub-header-left pull-left breadcrumb">
      <h1>
        Planning & Sales
        <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
          <i class="ti ti-chevrons-right" ></i>
          <em >Sales Invoice</em></a>
      </h1>
      <br>
      <span >PDI Details</span>
    </div>

    <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5 listing-btn">
            <a title="Back To Supplier Po List" class="btn btn-seconday" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
sales_invoice_released" type="button"><i class="ti ti-arrow-left"></i></a>
        </div>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="">
               
                
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="card p-0 mt-4">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="po_num" class="form-label">Customer </label><span class="text-danger">*</span>
                                            <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['sales_parts_for_PDI']->value[0]->customer_name;?>
" name="part_desc" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Description" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="po_num" class="form-label">Sales Invoice Number </label><span class="text-danger">*</span>
                                            <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['sales_parts_for_PDI']->value[0]->sales_number;?>
" name="part_number" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Number" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-3" >
                                            <label for="po_num" class="form-label">Sales Invoice Date</label><span class="text-danger">*</span>
                                            <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['sales_parts_for_PDI']->value[0]->created_date;?>
" name="part_desc" required class="form-control" id="exampleInputEmail1" placeholder="Enter Part Description" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                </div>
                                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
test" method="post">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group mb-3">
                                                <label  class="form-label" for="">Select Part NO // Description<span class="text-danger">*</span> </label>
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
                                        <div class="col-sm-8 mt-3">
                                        </div>

                                        <div class="col-sm-1 mt-3">
                                            <div class="form-group">
                                            <button type="submit" id="submitByPartId" class="btn btn-primary" >Submit</button>
                                                                                          </div>
                                        </div>
                                        <div class="col-sm-1 mt-3">
                                            <div class="form-group">
                                            <button type="submit" id="addNewPartParms" class="btn btn-primary" style="width: max-content;" title="This will add any new parameters defined in drawing master." >Add New Parm</button>
                                                                                          </div>
                                        </div>
                                        <div class="col-sm-1 mt-3">
                                            <div class="form-group">
                                            
                                                <a class="btn btn-success" id="getPDILink" target="_blank" style="width: max-content;margin-left: 52px;">View PDI</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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
