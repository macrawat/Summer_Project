<?php
$file_name='Date-Wise-Prices-all-Commodity.xml';
$reader = new XMLReader();
$reader->open($file_name);
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
} //Checking if the </person>tag is reached.
elseif($reader->nodeType == XMLReader::END_ELEMENT AND $reader->name == 'Table')
{
//else content
print_r($data);
}
}

?>
