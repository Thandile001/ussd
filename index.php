<?php
// Read the variables sent via POST from AT gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Welcome Mr T Jwambi to your DStv Premium account. How can we help you? \n";
    $response .= "1. My Account. \n";
    $response .= "2. DStv Installer. \n";
    $response .= "3. Settings.";

} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON My Account: \n";
    $response .= "1. Debit Order. \n";
    $response .= "2. My Decoder. \n";
    $response .= "3. Promotions. \n";
    $response .= "4. Veriy Gift Card. \n";
    $response .= "5. Lock My Account.";
        
 } else if ($text == "2") {
    // Business logic for first level response
    $response = "CON DStv Installer: \n";
    $response .= "1. Find nearby installer. \n";
    $response .= "2. Verify Installer.";
      
} else if ($text == "2*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi, a DStv accredited installer will contact you shortly.";
 
} else if ($text == "2*2") {
    // Business logic for first level response
    $response = "CON DStv Installer verification: \n";
    $response .= "1. Please enter your DStv Installer ID number.";
    
} else if ($text == "2*2*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi, your accredited DStv Installer is Jabu Dlamini.";
 
    
  } else if ($text == "3") {
    // Business logic for first level response
    $response = "CON Settings: \n";
    $response .= "1. Upgrade DStv Package. \n";
    $response .= "2. Change PIN.";
        
 } else if ($text == "3*1") {
    // Business logic for first level response
    $response = "CON Please select a package of your choice: \n";
    $response .= "1. Premium. \n";
    $response .= "2. Family. \n";
    $response .= "3. Compact. \n";
    $response .= "4. Compact Plus. \n";
    $response .= "5. Access. \n";
    $response .= "6. EasyView. \n";
    $response .= "7. India.";
    
} else if ($text == "3*1*1") {
    // Business logic for first level response
    $response = "CON Premium Package Upgrade: \n";
    $response .= "1. Please enter your DStv account PIN.";
    
} else if ($text == "3*1*1*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi, your are already a Premium Package subscriber.";
    
} else if ($text == "3*1*2") {
    // Business logic for first level response
    $response = "CON Family Package Upgrade: \n";
    $response .= "1. Please enter your DStv account PIN.";
    
} else if ($text == "3*1*2*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi, your account has now been updated to Family Package.";
    
} else if ($text == "3*1*3") {
    // Business logic for first level response
    $response = "CON Compact Package Upgrade: \n";
    $response .= "1. Please enter your DStv account PIN.";
    
} else if ($text == "3*1*3*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi, your account has now been updated to Compact Package.";
    
} else if ($text == "3*1*4") {
    // Business logic for first level response
    $response = "CON Compact Plus Package Upgrade: \n";
    $response .= "1. Please enter your DStv account PIN.";
    
} else if ($text == "3*1*4*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi, your account has now been updated to Compact Plus Package.";
    
} else if ($text == "3*1*5") {
    // Business logic for first level response
    $response = "CON Access Package Upgrade: \n";
    $response .= "1. Please enter your DStv account PIN.";
    
} else if ($text == "3*1*5*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi, your account has now been updated to Family Package.";
    
} else if ($text == "3*1*6") {
    // Business logic for first level response
    $response = "CON EasyView Package Upgrade: \n";
    $response .= "1. Please enter your DStv account PIN.";
    
} else if ($text == "3*1*6*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi, your account has now been updated to EasyView Package.";
    
} else if ($text == "3*1*7") {
    // Business logic for first level response
    $response = "CON India Package Upgrade: \n";
    $response .= "1. Please enter your DStv account PIN.";
    
} else if ($text == "3*1*7*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi, your account has now been updated to India Package.";
    
 } else if ($text == "3*2") {
    // Business logic for first level response
    $response = "CON Change PIN: \n";
    $response .= "1. Please enter your Old DStv account PIN.";
    
 } else if ($text == "3*2*1") {
    // Business logic for first level response
    $response = "CON Change PIN: \n";
    $response .= "1. Please enter your New DStv account PIN.";
    
} else if ($text == "3*2*1*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi, your DStv account PIN was successfully changed.";
        
} else if($text == "1*1") { 
    // This is the first request. Note how we start the response with CON
    $response  = "CON How can we help you? \n";
    $response .= "1. Reverse debit oder. \n";
    $response .= "2. Cancel my DStv subscription.";
    
} else if ($text == "1*1*1") {
    // Business logic for first level response
    $response = "CON Reverse Debit Order: \n";
    $response .= "1. Please enter your DStv account PIN.";
    
 } else if ($text == "1*1*1*1") {
    // Business logic for first level response
    $response = "CON Reverse Debit Order: \n";
    $response .= "1. Please enter amount to be reversed.";
    
} else if ($text == "1*1*1*1*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi, your request has been sucessful. A message with reference number will be sent to your mobile phone number.";
    
 } else if ($text == "1*1*2") {
    // Business logic for first level response
    $response = "CON Cancelling DStv subscription: \n";
    $response .= "1. Please enter your DStv account PIN.";
    
 } else if ($text == "1*1*2*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi, your subscription with DStv has been cancelled. A message with reference number will be sent to your mobile phone number.";
    
} else if($text == "1*2") { 
    // This is the first request. Note how we start the response with CON
    $response  = "CON My Decoder: \n";
    $response .= "1. My DStv Package Deal. \n";
    $response .= "2. View Decoder Information. \n";
    $response .= "3. Add New Decode. \n";
    $response .= "4. Remove Decoder. \n";
    $response .= "5. Suspend Decoder.";
    
} else if ($text == "1*2*1") {
    // Business logic for first level response
    $response = "CON My Package Deal: \n";
    $response .= "1. Please enter your DStv account PIN.";
    
} else if ($text == "1*2*1*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi. Your are On DStv Premium @ R819.00 p/m.";
    
} else if ($text == "1*2*2") {
    // Business logic for first level response
    $response = "CON My Decoder Information: \n";
    $response .= "1. Please enter your DStv account PIN.";
    
} else if ($text == "1*2*2*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi. Decoder ID No: H5689754216. IUC SN: 2659564626.";
    
 } else if ($text == "1*2*3") {
    // Business logic for first level response
    $response = "CON Add Decoder: \n";
    $response .= "1. Please enter your DStv account PIN.";
    
 } else if ($text == "1*2*3*1") {
    // Business logic for first level response
    $response = "CON Add Decoder: \n";
    $response .= "1. Please enter your Decoder ID number.";
    
} else if ($text == "1*2*3*1*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi. Your decoder was successfully added to your DStv account. Please restart decoder and wait for it to finish loading.";
    
 } else if ($text == "1*2*4") {
    // Business logic for first level response
    $response = "CON Remove Decoder: \n";
    $response .= "1. Please enter your DStv account PIN.";
    
 } else if ($text == "1*2*4*1") {
    // Business logic for first level response
    $response = "CON Remove Decoder: \n";
    $response .= "1. Please enter your Decoder ID number.";
    
} else if ($text == "1*2*4*1*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi. Your decoder was successfully removed from your DStv account.";
    
} else if ($text == "1*2*5") {
    // Business logic for first level response
    $response = "CON Suspend Decoder: \n";
    $response .= "1. Please enter your DStv account PIN.";
    
 } else if ($text == "1*2*5*1") {
    // Business logic for first level response
    $response = "CON Suspend Decoder: \n";
    $response .= "1. Please enter your Decoder ID number.";
    
} else if ($text == "1*2*5*1*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi. Your decoder was successfully suspended from your DStv Premium account.";
    
 } else if ($text == "1*3") {
    // Business logic for first level response
    $response = "CON Promotions: \n";
    $response .= "1. Special Deals and Promotions.";
    
} else if ($text == "1*3*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Unfortunately, we have no promotions available.";
    
} else if ($text == "1*4") {
    // Business logic for first level response
    $response = "CON Verify Gift Cards: \n";
    $response .= "1. Please enter Gift Voucher number.";
    
} else if ($text == "1*4*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Unfortunately, the Gift Voucher number is invalid. Please try with another voucher number.";
        
} else if($text == "1*5") { 
    // This is the first request. Note how we start the response with CON
    $response  = "CON Lock My Account: \n";
    $response .= "1. Please enter your account PIN.";
    
 } else if ($text == "1*5*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Thank you Mr Jwambi. Your DStv account has been successfully locked. Please note, In order to transact on it again, you will be required to unlock it again.";
    
 } else if ($text == "1*1*2") {
    // Business logic for first level response
    $response = "CON My Decoder: \n";
    $response .= "1. View Decoder Information. \n";
    $response .= "2. Add Decoder. \n";
    $response .= "3. Remove Decoder. \n";
    $response .= "4. Suspend Decoder. \n";
    $response .= "5. Back.";
    
  } else if ($text == "1*1*2*1") {
    // Business logic for first level response
    $response = "CON Decoder Information: \n";
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
