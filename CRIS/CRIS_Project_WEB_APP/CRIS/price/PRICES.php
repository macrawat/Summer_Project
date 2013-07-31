<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Crop Price System</title>
		<style>

a{
    text-decoration:none;
    color:#fff;
}

select {
    background:#7d7d7d;
    width: 290px;
    font-size: 24px;
    font-weight:bold;
    color:#424242;
    border: 1px solid #ccc;
    /*height: 34px;*/
}



div#header{
    height:90px;
    background:url('/images/header.gif');
    width:100%;
    /*padding:0px;
    margin:0px; */
    vertical-align:middle;
}

div#logo{
    float:left;
    margin:0px;
}

div#states{
    float:left;
    margin-left:4px;
    margin-top:28px;
}
div#container{
    height:100%;
    width:100%;
    clear:both;

}


div#left{
    float:left;
    width:30%;
    height:100%;
    padding:24px;
    /*background:#d6d5d0;*/
}

div#right{
    float:left;
    width:60%;
    margin-left:24px;
}

div#footer{
    clear:both;
    background-color:#b3c93a;
    height:35px;
    border:1px solid #ccc;
    text-align:right;

}

ul#menu{padding:0px;margin:0px;}

ul#menu li{
    list-style:none;
    padding:12px;
    margin:2px;   
    background:#272727;
    color:#716d62;
    font-size:24px;
    font-weight:bold;
}
table{
    width:95%;
    border-collapse:collapse;
    text-align:left;
    }

th{
    padding: 8px 12px;
    background-color:#babf3f;
    border:2px solid #1e1e1e;
    font-size:12px;
   
}
td{
    border:2px solid #1e1e1e;
    font-size:12px;


}
#heading{
    color:#7d7d7d;
    font-weight:bold;
    font-size:25px;
    font-family:serif;
}

@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}
	
	td:before { 
		position: absolute;
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
	}
	
	td:nth-of-type(1):before { content: "District"; }
	td:nth-of-type(2):before { content: "Market"}
	td:nth-of-type(3):before { content: "Commodity"; }
	td:nth-of-type(4):before { content: "Variety"; }
	td:nth-of-type(5):before { content: "Arrival Date"; }
	td:nth-of-type(6):before { content: "Minimum Price"; }
	td:nth-of-type(7):before { content: "Maximum Price"; }
	td:nth-of-type(8):before { content: "Modal Price"; }
	}
	
	form {float:right;}
</style>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","ojasvi","state_crop");
if (mysqli_connect_errno())
	{
	echo "Failed to connect to MYSQL: " . mysqli_connect_error();
	}
$state="haryana";
$crop="apple";
$query= "SELECT * FROM daily_price WHERE State='$state' AND Commodity='$crop' AND Arrival_Date='25/07/2013'";

$result = mysqli_query($con, $query);

echo "<center><label id=heading> Mandi Prices </label></center>";
echo "<table width=100%>
    <tr>
        <th>District</th>
        <th>Market</th>
        <th>Commodity</th>
        <th>Variety</th>
        <th>Arrival Date</th>
        <th>Minimum Price</th>
        <th>Maximum Price</th>
        <th>Modal Price</th>
    </tr>";

while($rowcrop = mysqli_fetch_array($result))
{
echo "<tr>";
  echo "<td>".$rowcrop[1]."</td>";
  echo "<td>".$rowcrop[2]."</td>";
  echo "<td>" . $rowcrop[3] . "</td>";
  echo "<td>" . $rowcrop[4] . "</td>";
  echo "<td>" . $rowcrop[5] . "</td>";
  echo "<td>" . $rowcrop[6] . "</td>";
  echo "<td>" . $rowcrop[7] . "</td>";
  echo "<td>" . $rowcrop[8] . "</td>";
  
  echo "</tr>";
//$test=$rowcrop[0]."\t".$rowcrop[1].$rowcrop[2]."\t".$rowcrop[3]."\t".$rowcrop[4]."\t".$rowcrop[5]."\t".$rowcrop[6]."\t".$rowcrop[7]."\t".$rowcrop[8]."\n";
//echo $test;
}
echo "</table>";

?>
</br>
<form align="right">
<input type="button" value="Print this page" onClick="window.print()">
</form>
 </body>
</html>
     