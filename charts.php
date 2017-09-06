 <script type="text/javascript">

    function action_to1(page){
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
        {
            document.getElementById("index_page").innerHTML=xmlhttp.responseText;
        }
        xmlhttp.open("POST",page,true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send();
    };
</script>
   <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="row">
                    <div class="span6">
                        <div class="widget">
                            <div class="widget-header">
                                <i class="icon-bar-chart"></i>
                                <h3>
                                    Bar Chart</h3>
                                    <input type="text" class="search-query" placeholder="查词" name="voc" id="voc" value="">
                                    <button class="add-on search-submited" id = "search_voc" onclick="showUser()"><i class="icon-search"></i></button>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content" id="voc1">
                            <!-- /bar-chart -->
                            </div>
                            <!-- /widget-content -->
                        </div>
                        <!-- /widget -->
                        <div class="widget">
                            <div class="widget-header">
                                <i class="icon-bar-chart"></i>
                                <h3>
                                    Line Chart</h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <canvas id="area-chart" class="chart-holder" width="538" height="250">
                                </canvas>
                                <!-- /line-chart -->
                            </div>
                            <!-- /widget-content -->
                        </div>
                        <!-- /widget -->
                        <div class="widget">
                            <div class="widget-header">
                                <i class="icon-bar-chart"></i>
                                <h3>
                                    Pie Chart</h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <canvas id="pie-chart" class="chart-holder" width="538" height="250">
                                </canvas>
                                <!-- /pie-chart -->
                            </div>
                            <!-- /widget-content -->
                        </div>
                        <!-- /widget -->
                    </div>
                    <!-- /span6 -->
                    <div class="span6">
                        <div class="widget">
                            <div class="widget-header">
                                <i class="icon-bar-chart"></i>
                                <h3>
                                    Donut Chart</h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <canvas id="donut-chart" class="chart-holder" width="538" height="250">
                                </canvas>
                                <!-- /bar-chart -->
                            </div>
                            <!-- /widget-content -->
                        </div>
                        <!-- /widget -->
                        <div class="widget">
                            <div class="widget-header">
                                <i class="icon-bar-chart"></i>
                                <h3>
                                    A Chart</h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <canvas id="line-chart" class="chart-holder" width="538" height="250">
                                </canvas>
                                <!-- /-chart -->
                            </div>
                            <!-- /widget-content -->
                        </div>
                        <!-- /widget -->
                    </div>
                    <!-- /span6 -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /main-inner -->
    </div>
    <!-- /main -->
   <!-- /footer -->
    <!-- Le javascript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script>
            var doughnutData = [
				{
				    value: 30,
				    color: "#F7464A"
				},
				{
				    value: 50,
				    color: "#46BFBD"
				},
				{
				    value: 100,
				    color: "#FDB45C"
				},
				{
				    value: 40,
				    color: "#949FB1"
				},
				{
				    value: 120,
				    color: "#4D5360"
				}

			];

        var myDoughnut = new Chart(document.getElementById("donut-chart").getContext("2d")).Doughnut(doughnutData);


        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    pointColor: "rgba(220,220,220,1)",
				    pointStrokeColor: "#fff",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    pointColor: "rgba(151,187,205,1)",
				    pointStrokeColor: "#fff",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }

        var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }

var myLine = new Chart(document.getElementById("bar-chart").getContext("2d")).Bar(barChartData);

var pieData = [
				{
				    value: 30,
				    color: "#F38630"
				},
				{
				    value: 50,
				    color: "#E0E4CC"
				},
				{
				    value: 100,
				    color: "#69D2E7"
				}

			];

				var myPie = new Chart(document.getElementById("pie-chart").getContext("2d")).Pie(pieData);

				var chartData = [
			{
			    value: Math.random(),
			    color: "#D97041"
			},
			{
			    value: Math.random(),
			    color: "#C7604C"
			},
			{
			    value: Math.random(),
			    color: "#21323D"
			},
			{
			    value: Math.random(),
			    color: "#9D9B7F"
			},
			{
			    value: Math.random(),
			    color: "#7D4F6D"
			},
			{
			    value: Math.random(),
			    color: "#584A5E"
			}
		];
				var myPolarArea = new Chart(document.getElementById("line-chart").getContext("2d")).PolarArea(chartData);
var xmlHttp;
function showUser()
{
    xmlHttp=GetXmlHttpObject();
    if (xmlHttp==null)
    {
        alert ("Browser does not support HTTP Request");
        return

    }
    var url="function/config.php";
    var voc_value = document.getElementById("voc").value;
    console.log(voc_value);
    url=url+"?voc="+voc_value;
    xmlHttp.onreadystatechange=stateChanged;
    xmlHttp.open("GET",url,true);
    xmlHttp.send(null)

}

function stateChanged()
{
    if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
    {
        document.getElementById("voc1").innerHTML=xmlHttp.responseText

    }

}

function GetXmlHttpObject()
{
    var xmlHttp=null;
    try
    {
        // Firefox, Opera 8.0+, Safari
        xmlHttp=new XMLHttpRequest();

    }
    catch (e)
    {
        //Internet Explorer
        try
        {
            xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e)
        {
            xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return xmlHttp;
}

</script>

