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
    $response .= "2. DStv Registered Installer \n";
    $response .= "3. Settings";

} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON My Account \n";
    $response .= "1. Debit Order \n";
    $response .= "2. My Decoder \n";
    $response .= "3. Promotions \n";
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
    
} else if($text == "1*2") { 
    // This is the first request. Note how we start the response with CON
    $response  = "CON My Decoder \n";
    $response .= "1. My DStv Package Deal. \n";
    $response .= "2. View Decoder Information. \n";
    $response .= "3. Add New Decode. \n";
    $response .= "4. Remove Decoder. \n";
    $response .= "5. Suspend Decoder.";
    
} else if ($text == "1*2*1") {
    // Business logic for first level response
    $response = "CON My Package Deal. \n";
    $response .= "1. Please enter your DStv account PIN.";
    
} else if ($text == "1*2*1*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi. Your are On DStv Premium @ R812.00 p/m.";
    
} else if ($text == "1*2*2") {
    // Business logic for first level response
    $response = "CON My Decoder Information. \n";
    $response .= "1. Please enter your DStv account PIN.";
    
} else if ($text == "1*2*2*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi. Decoder ID No: H5689754216. IUC SN: 2659564626.";
    
 } else if ($text == "1*2*3") {
    // Business logic for first level response
    $response = "CON Add Decoder. \n";
    $response .= "1. Please enter your DStv account PIN.";
    
 } else if ($text == "1*2*3*1") {
    // Business logic for first level response
    $response = "CON Add Decoder. \n";
    $response .= "1. Please enter your Decoder ID number.";
    
} else if ($text == "1*2*3*1*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi. Your decoder was successfully added to your DStv account. Please restart decoder and wait for it to finish loading.";
    
 } else if ($text == "1*2*4") {
    // Business logic for first level response
    $response = "CON Remove Decoder. \n";
    $response .= "1. Please enter your DStv account PIN.";
    
 } else if ($text == "1*2*4*1") {
    // Business logic for first level response
    $response = "CON Remove Decoder. \n";
    $response .= "1. Please enter your Decoder ID number.";
    
} else if ($text == "1*2*4*1*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi. Your decoder was successfully removed from your DStv account.";
    
} else if ($text == "1*2*5") {
    // Business logic for first level response
    $response = "CON Suspend Decoder. \n";
    $response .= "1. Please enter your DStv account PIN.";
    
 } else if ($text == "1*2*5*1") {
    // Business logic for first level response
    $response = "CON Suspend Decoder. \n";
    $response .= "1. Please enter your Decoder ID number.";
    
} else if ($text == "1*2*5*1*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi. Your decoder was successfully suspended from your DStv Premium account.";
    
 } else if ($text == "1*3") {
    // Business logic for first level response
    $response = "CON Promotions. \n";
    $response .= "1. Special Deals and Promotions.";
    
} else if ($text == "1*3*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Unfortunately, we have no promotions available.";
    
} else if ($text == "1*4") {
    // Business logic for first level response
    $response = "CON Verify Gift Cards. \n";
    $response .= "1. Please enter Gift Voucher number.";
    
} else if ($text == "1*4*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Unfortunately, the Gift Voucher number is invalid. Please try with another voucher number.";
    
} if ($text == "2.1") {
    // Business logic for first level response
    $response = "CON DStv Registered Installer. \n";
    $response = "1.Find Nearby Installer. \n";
    $response .= "2. Verify DStv Installer.";
    
 } else if ($text == "1*2*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi, a nearby installer will contact you shortly.";
    
 } else if ($text == "2*1*2") {
    // Business logic for first level response
    $response = "CON Verify DStv Installer. \n";
    $response .= "1. Please enter DStv Installer ID number."; 
    
 } else if ($text == "2*1*2*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Your are being served by Tshepo Mazibuko, an accredited and registered DStv Installer.";

} else if($text == "1*5") { 
    // This is the first request. Note how we start the response with CON
    $response  = "CON Welcome Mr T Jwambi to your DStv Premium account. How can we help you? \n";
    $response .= "1. My Account \n";
    $response .= "2. DStv Registered Installer Guide \n";
    $response .= "3. Settings";
    
 } else if ($text == "1*5*1") {
    // Business logic for first level response
    $response = "CON My Account \n";
    $response .= "1. Reverse Debit Order \n";
    $response .= "2. My Decoder \n";
    $response .= "3. Notices \n";
    $response .= "4. Veriy Gift Card \n";
    $response .= "5. Back";
    
 } else if ($text == "1*1*2") {
    // Business logic for first level response
    $response = "CON My Decoder \n";
    $response .= "1. View Decoder Information \n";
    $response .= "2. Add Decoder \n";
    $response .= "3. Remove Decoder \n";
    $response .= "4. Suspend Decoder \n";
    $response .= "5. Back";
    
  } else if ($text == "1*1*2*1") {
    // Business logic for first level response
    $response = "CON Decoder Information. \n";
    $response .= "1. Please enter your DStv account PIN.";
    
 } else if ($text == "1*1*2*1*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi, you are on DStv Premium @ R819.00p/m. Decoder ID: H001283850. IUC SN: 7028026166. Model: 5U. Please note, your premium will increase to R829 effective on 01 March 2021.";
  
}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;

?>
