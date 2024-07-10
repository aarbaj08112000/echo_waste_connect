<?php
/* Smarty version 4.3.2, created on 2024-07-01 10:32:54
  from '/var/www/html/extra/erp_converted/application/views/templates/reports/pei_chart_sales_values_in_rs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6682387e852771_80468016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75cdf3e92b3e107555b196832e4099e83f0e840e' => 
    array (
      0 => '/var/www/html/extra/erp_converted/application/views/templates/reports/pei_chart_sales_values_in_rs.tpl',
      1 => 1718630682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6682387e852771_80468016 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Reports : SALES VALUE IN RS</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo (defined('BASE_URL') ? constant('BASE_URL') : null);?>
dashboard">Home</a></li>
                            <li class="breadcrumb-item active">SALES VALUE IN RS</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
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
