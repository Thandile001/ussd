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
    $response .= "1. Reverse Debit Order \n";
    $response .= "2. My Decoder \n";
    $response .= "3. Notices \n";
    $response .= "4. Veriy Gift Card \n";
    $response .= "5. Back";

} else if ($text == "2") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Mr Jwambi, your port request has been declined.";

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
