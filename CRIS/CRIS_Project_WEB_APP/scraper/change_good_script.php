<?php
//$file_name='Date-Wise-Prices-all-Commodity.xml';
$date=date("Y-m-d");
$file="Daily-Price-on-$date.xml";
$url= "http://data.gov.in/sites/default/files/Date-Wise-Prices-all-Commodity.xml";
$homepage= file_get_contents($url);
file_put_contents($file,$homepage);
$file= "Daily-Price-on-$date.xml";
$file_name=$file;
$reader = new XMLReader();
$reader->open($file_name);
//function to print array
//database
//connect to data-base

$con=mysqli_connect("localhost","Mavericks","barfi","Mavericks");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//connect to data-base

function arrayToSqlValues($test)
   {
      $sql = "";
      foreach($test as $val)
      {
         //adding value
         if($val === NULL)
            $sql .= "NULL";
         else
        $sql .= addslashes($val);
	$sql .= "%";
      };
// return "VALUES(" . rtrim($sql, " ,") . ")";
 return  rtrim($sql, "%");
   }
//function to print array

while ($reader->read())
{
// check to ensure nodeType is an Element not attribute or #Text
if ($reader->nodeType == XMLReader::ELEMENT)
{
if ($reader->localName == 'State')
{
$reader->read();
$data["State"] = $reader->value;
}
if ($reader->localName == 'District')
{
$reader->read();
$data["District"] = $reader->value;
}
if ($reader->localName == 'Market')
{
$reader->read();
$data["Market"] = $reader->value;
}
if ($reader->localName == 'Commodity')
{
$reader->read();
$data["Commodity"] = $reader->value;
}
if ($reader->localName ==  'Variety')
{
$reader->read();
$data["Variety"] = $reader->value;
}
if ($reader->localName == 'Arrival_Date')
{
$reader->read();
$data["Arrival_Date"] = $reader->value;
}
if ($reader->localName == 'Min_x0020_Price')
{
$reader->read();
$data["Min_x0020_Price"] = $reader->value;
}
if ($reader->localName == 'Max_x0020_Price')
{
$reader->read();
$data["Max_x0020_Price"] = $reader->value;
}
if ($reader->localName == 'Modal_x0020_Price')
{
$reader->read();
$data["Modal_x0020_Price"] = $reader->value;
}
 //Checking if the </person>tag is reached.
}
elseif($reader->nodeType == XMLReader::END_ELEMENT AND $reader->name == 'Table')
{
$man=arrayToSqlValues($data);
$pieces = explode("%",$man);
$count=count($pieces);
//echo $pieces[8]."\n";
//insert to db
$query=mysqli_query($con,"INSERT INTO `daily_price`(`State`, `District`, `Market`, `Commodity`, `Variety`, `Arrival_Date`, `Min_x0020_Price`, `Max_x0020_Price`, `Modal_x0020_Price`)
VALUES ('$pieces[0]','$pieces[1]','$pieces[2]','$pieces[3]','$pieces[4]','$pieces[5]','$pieces[6]','$pieces[7]','$pieces[8]')");

}
}
mysqli_close($con);
//print_r($man);
?>
