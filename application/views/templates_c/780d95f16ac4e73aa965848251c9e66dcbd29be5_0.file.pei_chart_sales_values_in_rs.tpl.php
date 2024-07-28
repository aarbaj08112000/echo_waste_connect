<?php
/* Smarty version 4.3.2, created on 2024-07-26 23:06:07
  from 'C:\xampp\htdocs\erp_converted\application\views\templates\reports\pei_chart_sales_values_in_rs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66a3de87080c79_11885094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '780d95f16ac4e73aa965848251c9e66dcbd29be5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_converted\\application\\views\\templates\\reports\\pei_chart_sales_values_in_rs.tpl',
      1 => 1722015355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a3de87080c79_11885094 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper container-xxl flex-grow-1 container-p-y">


<nav aria-label="breadcrumb">
<div class="sub-header-left pull-left breadcrumb">
  <h1>
    Reports
    <a hijacked="yes" href="#stock/issue_request/index" class="backlisting-link" title="Back to Issue Request Listing" >
      <i class="ti ti-chevrons-right" ></i>
      <em >SALES VALUE IN RS</em></a>
  </h1>
  <br>
  <span> SALES VALUE IN RS</span>
</div>
</nav>

    <div class="content-wrapper">
        <section class="content">
            <div class="">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h1>SALES VALUE IN RS</h1>
                            </div>
                            <div class="card-body">
                                <?php echo '<script'; ?>
 type="text/javascript" src="https://www.gstatic.com/charts/loader.js"><?php echo '</script'; ?>
>
                                <?php echo '<script'; ?>
 type="text/javascript">
                                    google.charts.load('current', {'packages': ['bar']});
                                    google.charts.setOnLoadCallback(drawStuff);

                                    function drawStuff() {
                                        let series = <?php echo $_smarty_tpl->tpl_vars['series']->value;?>
;
                                        series = series.map(item => [item[0], parseFloat(item[1])]);
                                        var data = new google.visualization.arrayToDataTable([
                                            ['Move', 'Sales Value'],
                                            ...series  // Spread the series array into the data table
                                        ]);

                                        var options = {
                                            width: 800,
                                            legend: { position: 'none' },
                                            chart: { title: 'Sales Value' },
                                            axes: { x: { 0: { side: ' Rs', label: 'Sales Values In Rs' } } },
                                            bar: { groupWidth: "90%" }
                                        };

                                        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
                                        chart.draw(data, google.charts.Bar.convertOptions(options));
                                    }
                                <?php echo '</script'; ?>
>
                                <div id="top_x_div" style="width: 800px; height: 600px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php }
}
