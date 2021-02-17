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
    $response .= "3. Settings";

} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON My Account \n";
    $response .= "1. Debit Order \n";
    $response .= "2. My Decoder \n";
    $response .= "3. Notices \n";
    $response .= "4. Veriy Gift Card \n";
    $response .= "5. Back";
    
} else if($text == "1*1") { 
    // This is the first request. Note how we start the response with CON
    $response  = "CON How can we help you? \n";
    $response .= "1. Revers debit oder. \n";
    $response .= "2. Cancel my DStv subscription.";
    
} else if ($text == "1*1*1") {
    // Business logic for first level response
    $response = "CON Reverse Debit Order. \n";
    $response .= "1. Please enter your DStv account PIN.";
    
 } else if ($text == "1*1*1*1") {
    // Business logic for first level response
    $response = "CON Reverse Debit Order. \n";
    $response .= "1. Please enter amount to be reversed.";
    
} else if ($text == "1*1*1*1*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi, your request has been sucessful. A message with reference number will be sent to your mobile phone number.";
    
 } else if ($text == "1*1*2") {
    // Business logic for first level response
    $response = "CON Cancelling DStv subscription. \n";
    $response .= "1. Please enter your DStv account PIN.";
    
 } else if ($text == "1*1*2*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi, your subscription with DStv has been cancelled. A message with reference number will be sent to your mobile phone number.";

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
    
 } else if ($text == "1*2") {
    // Business logic for first level response
    $response = "CON My Decoder \n";
    $response .= "1. View Decoder Information \n";
    $response .= "2. Add Decoder \n";
    $response .= "3. Remove Decoder \n";
    $response .= "4. Suspend Decoder \n";
    $response .= "5. Back";
    
  } else if ($text == "1*2*1") {
    // Business logic for first level response
    $response = "CON Decoder Information. \n";
    $response .= "1. Please enter your DStv account PIN.";
    
 } else if ($text == "1*2*1*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi, you are on DStv Premium @ R819.00p/m. Decoder ID: H001283850. IUC SN: 7028026166. Model: 5U. Please note, your premium will increase to R829 effective on 01 March 2021.";
 
} else if ($text == "1*2*2") {
    // Business logic for first level response
    $response = "CON Add Decoder. \n";
    $response .= "1. Please enter your DStv account PIN.";
    
 } else if ($text == "1*2*2*1") {
    // Business logic for first level response
    $response = "CON Add Decoder. \n";
    $response .= "1. Please enter your Decoder ID number.";
    
 } else if ($text == "1*2*2*1*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi, your Decoder ID H0012659981 has been successfully added to your acoount. Kindly restart your decoder.";
 
}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;

?>
