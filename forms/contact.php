<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "sayemtransportandlogistics@gmail.com";
    
    // Subject of the email
    $subject = $_POST["subject"];
    
    // Extract form fields
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Compose email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message\n";
    
    // Send email
    $headers = "From: $email\r\n";
    if (mail($to, $subject, $email_message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    header("Location: index.html#contact");
    exit;
}
?>
