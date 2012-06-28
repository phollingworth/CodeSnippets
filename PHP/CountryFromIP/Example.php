<?php

require_once('CountryFromIP.inc.php');

$ip ='202.164.32.81';
//$ip ='210.25.55.2';

$object = new CountryFromIP();

$countryName =  $object->GetCountryName($ip);
$flagPath =  $object->ReturnFlagPath();

echo "<BR> <B>Country: </B>".$countryName;
echo "<BR> <B>Flag: </B> <img src=".$flagPath." border='0'>";
?>