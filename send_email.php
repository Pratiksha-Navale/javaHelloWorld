<?

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "navalepratiksha16@gmail.com";
    $subject = "Contact Form Submistion";
    $headers = "From:$email\r\n";
    $headers.="Replay-to: $email\r\n";

    $body = "Name: $name\nEmail: $email\n\n$message";

    if (mail($to,$subject,$body,$headers)){
        echo "Message sent successfully";

    }else{
        echo "Failed to send message";
    }

    
}
?>
