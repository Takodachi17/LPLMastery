<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
   
    $to = "halconlance17@gmail.com"; 
    
    $subject = "New message from LPL Mastery contact form";
    
    $emailContent = "Name: $name\n";
    $emailContent .= "Email: $email\n\n";
    $emailContent .= "Message:\n$message";
    
    $headers = "From: $name <$email>\r\n";
    
    if (mail($to, $subject, $emailContent, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
    
    {
        "disposable": false
}
}
?>
