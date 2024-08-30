<?php
/* Smarty version 4.3.2, created on 2024-08-23 15:18:14
  from '/var/www/html/extra_work/erp_converted/application/views/templates/admin/molding/report_prod_rejection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c85adebf2421_69165357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98b3dbdaa02982ea18df47c07488d18510f3c87d' => 
    array (
      0 => '/var/www/html/extra_work/erp_converted/application/views/templates/admin/molding/report_prod_rejection.tpl',
      1 => 1724406494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c85adebf2421_69165357 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper container-xxl flex-grow-1 container-p-y">
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme filter-popup-block" style="width: 0px;">
    <div class="app-brand demo justify-content-between">
        <a href="javascript:void(0)" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Filter</span>
        </a>
        <div class="close-filter-btn d-block filter-popup cursor-pointer">
                <i class="ti ti-x fs-8"></i>
            </div>
    </div>
</aside>

    <nav aria-label="breadcrumb">
      <div class="sub-header-left pull-left breadcrumb">
        <h1>
          Reports
          <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
            <i class="ti ti-chevrons-right" ></i>
            <em >Rejection report</em></a>
        </h1>
        <br>
        <span >Rejection report</span>
      </div>
    </nav>
<!-- Navbar -->
<div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-5">
      <button class="btn btn-seconday" type="button" id="downloadCSVBtn" title="Download CSV"><i class="ti ti-file-type-csv"></i></button>
      <button class="btn btn-seconday" type="button" id="downloadPDFBtn" title="Download PDF"><i class="ti ti-file-type-pdf"></i></button>
    </div>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->

   <!-- Main content -->
   <section class="content">
      <div class="">
         <div class="row">
            <div class="col-12">
               <!-- /.card -->
               <div class="card p-0 ">
                  <div class="card-header">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label for="">
                                 <span class="text-danger">Data Analysis </span>
                                 <div style="padding-left: 10px;padding-top:10px">
                                    <li>Total rejection across all the customers : <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['total_rejection']->value[0]->total_rejection_qty;?>
</span></li>
                                    <li>Maximum rejections are for reason <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['max_rejection_reason']->value[0]->name;?>
</span> with Quantity: <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['max_rejection_reason']->value[0]->total_rejection_qty;?>
</span></li>
                                    <li>Maximum rejection on machine : <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['machine_analysis']->value[0]->machine_name;?>
</span> for reason <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['machine_analysis']->value[0]->name;?>
</span> with Quantity: <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['machine_analysis']->value[0]->total_rejection_qty;?>
</span></li>
                                 </div>
                              </label>
                           </div>
                        </div>
                     </div>
                     <span class="text-info"> Display more details</span>
                     <i id="showIcon" class="ti ti-eye fs-4" style="cursor: pointer; display: none;"></i>
                     <i id="hideIcon" class="ti ti-eye-off fs-4" style="cursor: pointer; display: inline;"></i>
                     <div id="dataAnalysis" style="display: none;">
                        <div class="row">
                           <div class="col-lg-4 mt-3">
                              <div class="table-bordered-box" style="text-wrap:nowrap;">
                                 <table id="exa" class="table  border-primary table-striped me-4" >
                                    <thead>
                                       <tr>
                                          <th>Top Rejection Reason</th>
                                          <th>Total Rejection QTY</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       	<?php $_smarty_tpl->_assignInScope('i', 1);?>
                                        <?php if (($_smarty_tpl->tpl_vars['max_rejection_reason']->value)) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['max_rejection_reason']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
		                                       <tr>
		                                          <td><?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>
</td>
		                                          <td><?php echo $_smarty_tpl->tpl_vars['r']->value->total_rejection_qty;?>
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
                           <div class="col-lg-7 mt-3">
                              <div class=" table-bordered-box mt-3" style="text-wrap:nowrap;">
                                 <table id="exa" class="table  table-striped">
                                    <thead>
                                       <tr>
                                          <th>Machine Name</th>
                                          <th>Rejection Reason</th>
                                          <th>Total Rejection QTY</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                        <?php if (($_smarty_tpl->tpl_vars['machine_analysis']->value)) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['machine_analysis']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
		                                       <tr>
		                                          <td><?php echo $_smarty_tpl->tpl_vars['r']->value->machine_name;?>
</td>
		                                          <td><?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>
</td>
		                                          <td><?php echo $_smarty_tpl->tpl_vars['r']->value->total_rejection_qty;?>
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
                </div>
                <div class="card p-0 mt-4">
                  <div class="">
                

                  <div class="">
                  <div class="table-responsive text-nowrap">
                     <table id="example1" class="table  table-striped">
                        <thead>
                           <tr>
                              <!-- <th>Sr. No.</th> -->
                              <th>Rejection Reason</th>
                              <th>Rejection QTY</th>
                              <th>Customer</th>
                              <th>Part Details</th>
                              <th>Date/Shift</th>
                              <th>Machine</th>
                              <th>Operator</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $_smarty_tpl->_assignInScope('i', 1);?>
                            <?php if (($_smarty_tpl->tpl_vars['report_prod_rejection']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['report_prod_rejection']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
		                           <tr>
		                              <!-- <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td> -->
		                              <td><?php echo $_smarty_tpl->tpl_vars['r']->value->rejection_reason;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['r']->value->rejection_qty;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['r']->value->customer_name;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['r']->value->part_number;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['r']->value->prod_date;?>
/ <?php echo $_smarty_tpl->tpl_vars['r']->value->shift_type;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['r']->value->machine_name;?>
</td>
		                              <td><?php echo $_smarty_tpl->tpl_vars['r']->value->operator_name;?>
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
<style >
  .table-bordered-box {
    margin: .25rem !important;
    border: 1px solid var(--bs-theme-color);
  }
</style>
<?php echo '<script'; ?>
>
var file_name = "report_prod_rejection";
var pdf_title = "Rejection Report";
   document.getElementById("showIcon").addEventListener("click", function() {
       document.getElementById("dataAnalysis").style.display = "none";
       document.getElementById("showIcon").style.display = "none";
       document.getElementById("hideIcon").style.display = "inline";
   });
   
   document.getElementById("hideIcon").addEventListener("click", function() {
       document.getElementById("dataAnalysis").style.display = "block";
       document.getElementById("showIcon").style.display = "inline";
       document.getElementById("hideIcon").style.display = "none";
   });
   // datatable initilization.
  
 
      table =  new DataTable('#example1',{
        dom: 'Bfrtilp',
        scrollX: false, 
        buttons: [
                {     
                    extend: 'csv',
                        text: '<i class="ti ti-file-type-csv"></i>',
                        init: function(api, node, config) {
                        $(node).attr('title', 'Download CSV');
                        },
                        customize: function (csv) {
                            var lines = csv.split('\n');
                            var modifiedLines = lines.map(function(line) {
                                var values = line.split(',');
                                values.splice(8, 1);
                                return values.join(',');
                            });
                            return modifiedLines.join('\n');
                        },
                        filename : file_name
                    },
                
                    {
                    extend: 'pdf',
                    text: '<i class="ti ti-file-type-pdf"></i>',
                    init: function(api, node, config) {
                        $(node).attr('title', 'Download Pdf');
                        
                    },
                    filename: file_name,
                    
                    
                },
            ],
            searching: true,
    // scrollX: true,
    scrollY: true,
    bScrollCollapse: true,
    pagingType: "full_numbers",
    });
      $('.dataTables_length').find('label').contents().filter(function() {
            return this.nodeType === 3; // Filter out text nodes
        }).remove();
        setTimeout(function(){
          $(".dataTables_length select").select2({
              minimumResultsForSearch: Infinity
          });
        },1000)
    
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
