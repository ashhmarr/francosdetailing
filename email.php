<!-- filepath: /Users/ashleymartinez/Desktop/html5up-alpha/send_email.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $category = htmlspecialchars($_POST['category']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "jhonathonpineda88@gmail.com";
    $subject = "Customer Service Inquiry";
    $body = "Name: $name\nEmail: $email\nCategory: $category\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>