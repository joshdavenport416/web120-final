<?php include "includes/header.php"?>
<?php

if (empty($_POST)) {
	header('Location: '.$_SERVER['HTTP_REFERER']);
	exit();
}


function clear_user_input($value) {
	if (get_magic_quotes_gpc()) $value=stripslashes($value);
	$value= str_replace( "\n", '', trim($value));
	$value= str_replace( "\r", '', $value);
	return $value;
	}


if ($_POST['comments'] == 'Please share any comments you have here') $_POST['comments'] = '';	



$body ="Here is the first message from the website:\n";

foreach ($_POST as $key => $value) {
	if(is_array($value)){ 				
		$value = implode(', ',$value);	
	}

	$key = clear_user_input($key); 
	$value = clear_user_input($value);
	$$key = $value;
	
	$body .= "$key: $value\n";
}


	
	
$from='From: '. $email . "(" . $first-name . ")" . "\r\n" . 'Bcc: joshdavenport416@hotmail.com' . "\r\n";

$subject = 'Email from the website'; 


mail ('joshdavenport416@hotmail.com', $subject, $body, $from);

header('Location: thx.php'); 

//<?php include "includes/footer.php"?> 