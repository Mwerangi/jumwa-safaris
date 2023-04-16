<?php

    $to = "booking@jumwaafricansafaris.com";
    $name = $_REQUEST['name'];
    $gender = $_REQUEST['gender'];
    $age = $_REQUEST['age'];
    $phone = $_REQUEST['phone'];
    $from = $_REQUEST['email'];
    $start_date = $_REQUEST['start_date'];
    $end_date = $_REQUEST['end_date'];
    $address = $_REQUEST['address'];
    $street = $_REQUEST['street'];
    $district = $_REQUEST['district'];
    $region = $_REQUEST['region'];
    $country = $_REQUEST['country'];
    $experience = $_REQUEST['experience'];
    $skills = $_REQUEST['skills'];
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
	$body .= "</td></tr></thead><tbody>";
	$body .= "<tr><td style='border:none;'><strong>Candidate name:</strong> {$name}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Gender:</strong> {$gender}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Age:</strong> {$age}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Phone Number:</strong> {$phone}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Expected date to start:</strong> {$start_date}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Planned date to finish:</strong> {$end_date}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Home Address:</strong> {$address}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Street:</strong> {$street}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>District:</strong> {$district}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Region:</strong> {$region}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Country:</strong> {$country}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Does Have experience?:</strong> {$experience}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Any additional Skills:</strong> {$skills}</td></tr>";
    // Add selected volunteering categories to email body
	if(isset($_REQUEST['volunteering'])) {
		$body .= "<tr><td style='border:none;'><strong>Volunteering Categories:</strong> " . implode(', ', $_REQUEST['volunteering']) . "</td></tr>";
	}
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$message}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";
    $send = mail($to, $subject, $body, $headers);
	
	//redirect
	header("Location:received.php");

?>