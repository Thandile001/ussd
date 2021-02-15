<?php
// Read the variables sent via POST from AT gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $request_GET["text"];

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Would you like to port your mobile number? \n";
    $response .= "1. Yes \n";
    $response .= "2. No";

} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON Please enter your SIM Card PIN;
    
} else if ($text == "1*1") {
    // Business logic for first level response
    $response = "*".$text;

} else if ($text == "2") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Your porting request declined";

}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;

?>
