<?php
/*echo "hello";
$url = 'http://www.iic.ac.in';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
echo $output;

$url = 'http://www.iic.ac.in';
$output = file_get_contents($url); 
echo $output;
*/
//$file = 'Date-Wise-Prices-all-Commodity.xml'; 
$data = file_get_contents('http://data.gov.in/sites/default/files/Date-Wise-Prices-all-Commodity.xml');
//file_put_contents($file, $data);
$regex = '/\<state\>(.+?)\<state\>/';
preg_match($regex,$data,$match);
var_dump($match);
//echo $match[];
//print_r($match);


//$xml = simplexml_load_file("Date-Wise-Prices-all-Commodity.xml");

//$result = $xml->xpath("a");

//print_r($xml);





?>
