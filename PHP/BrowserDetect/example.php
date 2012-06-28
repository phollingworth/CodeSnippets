<?php
//include the class file
include('browser_class_inc.php');
//instantiate the class
$b = new browser();
//find out which browser is connecting
print_r($b->whatBrowser());
?>