<html>
<?php

$filename="export.tsv";
$fest="year"."\t"."pa"."\n";

$state=$_POST['state'];
$state=strtoupper($state);
$year=$_POST['year'];
$crop=$_POST['crop'];

if($state=="HARYANA HARSH")
{
$state="HARYANA";
}
echo "Highest Production(Quintal) Per Unit Area (Hectare) recorded in ".$state." "."in year : "."$year"." "." for crop :"." "."$crop"."\n";

//connect to database
$con=mysqli_connect("localhost","Mavericks","barfi","Mavericks");
if (mysqli_connect_errno())
	{
	echo "Failed to connect to MYSQL: " . mysqli_connect_error();
	}
//connection made

//check variables
if((empty($state))&&(empty($crop))&&(empty($year)))
{
	echo "Please enter a choice";
	exit();
}

elseif((empty($state))&&(empty($crop))&&(isset($year)))
{	//display production , landuse & prices data for the selected year for all the crops and all the states 
	$query= "SELECT YEAR,PA FROM map_data WHERE YEAR='$year'";
}
elseif((empty($state))&&(isset($crop))&&(empty($year)))
{
	//display production data for a particular crop every year in every state
	$query= "SELECT YEAR,PA FROM map_data WHERE CROP='$crop'";
}
elseif((empty($state))&&(isset($crop))&&(isset($year)))
{
	//display production and land use data for a particular crop in a particular year across the country
	$query= "SELECT YEAR,PA FROM map_data WHERE YEAR='$year' AND CROP='$crop'";
}
elseif((isset($state))&&(empty($crop))&&(empty($year)))
{	//display production stats of every crop in a state for all the years
	$query= "SELECT YEAR,PA FROM map_data WHERE STATE='$state'";
}
elseif((isset($state))&&(empty($crop))&&(isset($year)))
{
	//display production stats of all crops in a particular state in a particular year
	$query= "SELECT YEAR,PA FROM map_data WHERE STATE='$state' AND YEAR='$year'";
}
elseif((isset($state))&&(isset($crop))&&(empty($year)))
{	//display production stats of a crop in a particular state in for every year
	$query= "SELECT YEAR,PA FROM map_data WHERE STATE='$state' AND CROP='$crop'";
}
//elseif((isset($state))&&(isset($crop))&&(isset($year)))
else
{
	//display production stats of a crop in a particular state in a particular year
	$query= "SELECT YEAR,PA FROM map_data WHERE STATE='$state' AND YEAR='$year' AND CROP='$crop'";
}

$res = mysqli_query($con, $query);
while($rowcrop = mysqli_fetch_array($res))
{
//$pa=round($rowcrop[5]*10);
//$trim_state=rtrim($rowcrop[1]);
$test=$rowcrop['YEAR']."\t".$rowcrop['PA']."\n";
$fest.=$test;
}
file_put_contents($filename, $fest);
?>
<style>

body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  position: relative;
  width: 80%;
}

.axis text {
  font: 10px sans-serif;
}

.axis path,
.axis line {
  fill: none;
  stroke: #000;
  shape-rendering: crispEdges;
}

.bar {
  fill: #2E5CE6;
  fill-opacity: .9;
}

.x.axis path {
  display: none;
}

label {
  float:right;
  top: 10px;
  right: 10px;
}

</style>
<label><input type="checkbox"> Sort values</label>
<script src="d3.v3.min.js"></script>
<script>

var margin = {top: 40, right: 60, bottom: 50, left: 100},
    width = 900 - margin.left - margin.right,
    height = 400 - margin.top - margin.bottom;

var formatPercent = d3.format("");

var x = d3.scale.ordinal()
    .rangeRoundBands([0, width], .1, 1);

var y = d3.scale.linear()
    .range([height, 0]);

var xAxis = d3.svg.axis()
    .scale(x)
    .orient("bottom");

var yAxis = d3.svg.axis()
    .scale(y)
    .orient("left")
    .tickFormat(formatPercent);

var svg = d3.select("body").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

d3.tsv("export.tsv", function (error, data) {

  data.forEach(function (d) {
    d.pa = +d.pa;
  });

  x.domain(data.map(function (d) { return d.year; }));
  y.domain([0, d3.max(data, function (d) { return d.pa; })]);

  svg.append("g")
      .attr("class", "x axis")
      .attr("transform", "translate(0," + height + ")")
      .call(xAxis);

  svg.append("g")
      .attr("class", "y axis")
      .call(yAxis)
    .append("text")
      .attr("transform", "rotate(-90)")
      .attr("y", 6)
      .attr("dy", ".71em")
      .style("text-anchor", "end")
      .text("Production/Area(Quintal/Hectare)");

  svg.selectAll(".bar")
      .data(data)
    .enter().append("rect")
      .attr("class", "bar")
      .attr("x", function (d) { return x(d.year); })
      .attr("width", x.rangeBand())
      .attr("y", function (d) { return y(d.pa); })
      .attr("height", function (d) { return height - y(d.pa); });

  d3.select("input").on("change", change);

  var sortTimeout = setTimeout(function() {
    d3.select("input").property("checked", true).each(change);
  }, 2000);

  function change() {
    clearTimeout(sortTimeout);

    // Copy-on-write since tweens are evaluated after a delay.
    var x0 = x.domain(data.sort(this.checked
        ? function (a, b) { return b.pa - a.pa; }
        : function (a, b) { return d3.ascending(a.year, b.year); })
        .map(function (d) { return d.year; }))
        .copy();

    var transition = svg.transition().duration(750),
        delay = function(d, i) { return i * 10; };

    transition.selectAll(".bar")
        .delay(delay)
        .attr("x", function (d) { return x0(d.year); });

    transition.select(".x.axis")
        .call(xAxis)
      .selectAll("g")
        .delay(delay);
  }
});

</script>

