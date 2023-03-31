<?php
if(isset($_POST['submit'])){
    $to = "icsd22034@aegean.gr"; // replace with your email address
    $subject = "New Contact Message";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $headers = "From: ".$name." <".$email.">\r\n";
    $headers .= "Reply-To: ".$email."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $body = "Name: ".$name."<br>";
    $body .= "Email: ".$email."<br>";
    $body .= "Message: ".$message;

    mail($to, $subject, $body, $headers);
}
?>
