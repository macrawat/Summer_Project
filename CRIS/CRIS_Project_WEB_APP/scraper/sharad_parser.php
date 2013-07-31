<?php
//$xmlDoc = new DOMDocument();
//$xmlDoc->load("Date-Wise-Prices-all-Commodity.xml");

//print $xmlDoc->saveXML();


$filexml='Date-Wise-Prices-all-Commodity.xml';
//if (file_exists($filexml)) {
    $xml = simplexml_load_file("Date-Wise-Prices-all-Commodity.xml");
//$f = fopen('cars.csv', 'w');
//foreach ($xml->table as $table) {
//    fputcsv($f, get_object_vars($table),',','"');
//}
//fclose($f);
//}
//print_r($xml);
echo $xml->asXML();


//$sxe = new SimpleXMLElement('http://data.gov.in/sites/default/files/Date-Wise-Prices-all-Commodity.xml', NULL, TRUE);
//echo $sxe->asXML();
//print_r($sxe);



?>
