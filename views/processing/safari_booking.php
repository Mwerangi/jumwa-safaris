<?php

    $to = "sales@jumwaafricansafaris.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $safari = $_REQUEST['safari'];
    $people = $_REQUEST['people'];
    $date = $_REQUEST['date'];
    $minor = $_REQUEST['minor'];
    $message = $_REQUEST['message'];
    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $subject = "You have a message from ". $name ;
    $link = '#';
	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Quotation Request</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Sender name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Safari Name:</strong> {$safari}</td>";
	$body .= "<td style='border:none;'><strong>Number Of People:</strong> {$people}</td>";
	$body .= "<td style='border:none;'><strong>Minor included.?:</strong> {$minor}</td>";
	$body .= "<td style='border:none;'><strong>Expected date of arrival:</strong> {$date}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$message}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";
    $send = mail($to, $subject, $body, $headers);
	
	//redirect
	header("Location:received.php");

?>