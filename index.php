<?php
// Read the variables sent via POST from AT gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_GET["text"];

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Would you like to port your phone number? \n";
    $response .= "1. Yes \n";
    $response .= "2. No";

} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON Please enter you SIM card PIN";
}

    $response = "END Your data has been captured successfully! Thank you for registering for Django online classes at HLAB.";
}

} else if($text == "2") { 
        // This is a terminal request. Note how we start the response with END
    $response = "END Your porting request has been declined.";
    
// Echo the response back to the API
header('Content-type: text/plain');
echo $response;

?>
