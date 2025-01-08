<!-- filepath: /Users/ashleymartinez/Desktop/html5up-alpha/send_sms.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $time = htmlspecialchars($_POST['time']);
    $vehicle = htmlspecialchars($_POST['vehicle']);
    $message = htmlspecialchars($_POST['message']);

    $to = '3237435057@tmomail.net'; // Replace with your carrier's email-to-SMS gateway address
    $subject = "New Appointment Request";
    $body = "Name: $name\nPhone: $phone\nTime: $time\nVehicle: $vehicle\nMessage: $message";
    $headers = "From: no-reply@yourdomain.com"; // Replace with your domain

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>