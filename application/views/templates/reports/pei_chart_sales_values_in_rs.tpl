<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Reports : SALES VALUE IN RS</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<%$smarty.const.BASE_URL%>dashboard">Home</a></li>
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
                                
                                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                <script type="text/javascript">
                                google.charts.load('current', {'packages': ['bar']});
                                google.charts.setOnLoadCallback(drawStuff);
    function drawStuff() {
        // console.log(series)
        // let series  = parseData(<%$series%>)
        
        $.each(series,function(idex,val){
            console.log(val[0]);
        })
    var data = new google.visualization.arrayToDataTable([
        ['Move', 'Sales Value'],
        
        ]);

    var options = {
        width: 800,
        legend: {position: 'none'},
        chart: {title: 'Sales Value'},
        axes: {x: {0: {side: ' Rs', label: 'Sales Values In Rs'}}},
        bar: {groupWidth: "90%"}
    };

    var chart = new google.charts.Bar(document.getElementById('top_x_div'));
    chart.draw(data, google.charts.Bar.convertOptions(options));
};
function parseData(data) {
    return data.map(item => {
        // Remove the trailing comma and parse the string as a JSON-like array
        const cleanedItem = item.replace(/,$/, '');
        const parsedItem = JSON.parse(cleanedItem.replace(/'/g, '"'));
        return parsedItem;
    });
}
                            </script>
                            <div id="top_x_div" style="width: 800px; height: 600px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>