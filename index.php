<?php
// Read the variables sent via POST from AT gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Welcome Mr T Jwambi to your DStv Premium account. How can we help you? \n";
    $response .= "1. My Account \n";
    $response .= "2. Check DStv Installer ID \n";
    $response .= "2. Settings";

} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON My Account \n";
    $response .= "1. Debit Order \n";
    $response .= "2. My Decoder \n";
    $response .= "3. Notices \n";
    $response .= "4. Veriy Gift Card \n";
    $response .= "5. Back";
    
} else if($text == "2") { 
    // This is the first request. Note how we start the response with CON
    $response  = "CON How can we help you? \n";
    $response .= "1. Revers overcharge debit oder \n";
    $response .= "2. Cancel my DStv subscription";
    
} else if ($text == "2*1") {
    // Business logic for first level response
    $response = "CON Reverse Debit Order \n";
    $response .= "1. Please enter your SIM card PIN";
    
 } else if ($text == "2*1*1") {
    // Business logic for first level response
    $response = "CON Reverse Debit Order \n";
    $response .= "1. Please enter amount to be reversed";
    
} else if ($text == "2*1*1*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi, your request has been sucessful. A message with reference number will be sent to your mobile phone number.";

} else if($text == "1*5") { 
    // This is the first request. Note how we start the response with CON
    $response  = "CON Welcome Mr T Jwambi to your DStv Premium account. How can we help you? \n";
    $response .= "1. My Account \n";
    $response .= "2. Check DStv Installer ID \n";
    $response .= "2. Settings";
    
 } else if ($text == "1*5*1") {
    // Business logic for first level response
    $response = "CON My Account \n";
    $response .= "1. Reverse Debit Order \n";
    $response .= "2. My Decoder \n";
    $response .= "3. Notices \n";
    $response .= "4. Veriy Gift Card \n";
    $response .= "5. Back";
}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;

?>
