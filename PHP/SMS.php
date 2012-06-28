<?php

// Include the TextMagic PHP lib
require('textmagic-sms-api-php/TextMagicAPI.php');

// Set the username and password information
$username = 'myusername';
$password = 'mypassword';

// Create a new instance of TM
$router = new TextMagicAPI(array(
	'username' => $username,
	'password' => $password
));

// Send a text message to '999-123-4567'
$result = $router->send('Wake up!', array(9991234567), true);

// result:  Result is: Array ( [messages] => Array ( [19896128] => 9991234567 ) [sent_text] => Wake up! [parts_count] => 1 )

?>