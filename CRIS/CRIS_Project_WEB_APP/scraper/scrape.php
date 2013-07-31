<?php

$url = "http://data.gov.in/sites/default/files/Date-Wise-Prices-all-Commodity.xml";
  $returnData = file_get_contents($url);
  $xml = simplexml_load_file($url);

     $csv = 'my.csv';
     $path = '/var/www/html/scraper';

  $domain = $xml->domains->domain;

      $fullpath = $path.$csv;
      $fp = fopen($fullpath, 'w');

    foreach ($xml->domains->domain as $domain) {

        fputcsv($fp, get_object_vars($domain),',','"');

    }

    fclose($fp);

       header('Content-Description: File Transfer');
       header('Content-Type: application/csv');
       header('Content-Disposition: attachment; filename='.basename($csv));
       header('Content-Transfer-Encoding: binary');
       header('Expires: Mon, 26 Jul 2017 05:00:00 GMT');
       header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
       header('Pragma: public');
       header('Content-Length:'.filesize($fullpath));
       readfile($fullpath);

    exit;

var_dump($xml);    


?>
