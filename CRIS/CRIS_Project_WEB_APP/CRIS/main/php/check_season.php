<?php

$today=date("M");
$season="";
if ($today=="Jul"||"Aug"||"Sep")
	{
	$season = "Kharif";
//	echo $season;
	}	

else if ($today=="Oct"||"Nov"||"Dec"||"Jan"||"Feb")
	{
	$season = "Rabi";
	}
// store session data
$_SESSION['season']=$season;


?>
