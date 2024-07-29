<?php

// include Imap.Class
include_once('lib/class.imap.php');

$email = new Imap();
$connect = $email->connect(
	'{mail.shreenathjibuilders.com:143/notls}INBOX.Sent', //host
	'sunil@shreenathjibuilders.com', //username
	'shar@780299' //password
);

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
if($connect){
	if(isset($_POST['inbox'])){
		// inbox array
		$inbox = $email->getMessages('html');
		echo json_encode($inbox);
	}else if(!empty($_POST['uid']) && !empty($_POST['part']) && !empty($_POST['file']) && !empty($_POST['encoding'])){
		// attachments
		$inbox = $email->getFiles($_POST);
		echo json_encode($inbox);
	}else {
		echo json_encode(array("status" => "error", "message" => "Not connect."));
	}
}else{
	echo json_encode(array("status" => "error", "message" => "Not connect."));
}