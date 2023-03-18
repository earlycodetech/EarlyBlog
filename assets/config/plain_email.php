<?php 
    session_start();

    if (!isset($_POST['send'])) {
        //1. Redirect the users if they don't click our button
            $_SESSION['error_msg'] = "Try again!";
            header("Location: ../../contact");
    }else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = "Name: $name \r\nEmail: $email \r\nPhone: $phone\r\nMessage: \r\n". $_POST['message'];
        
        $message = wordwrap($message, 50, "\r\n");

        // $to = "chrisgraham2625@gmail.com";
        $to = "support@earlyblog.frontfinancecapital.com";
        $subject = "Contact Message";
        $headers = "From: Early Blog <support@earlyblog.frontfinancecapital.com>";

        if (mail($to,$subject,$message,$headers)) {
            $_SESSION['success_msg'] = "We have received your mail";
            header("Location: ../../contact");
        }
        else{
            $_SESSION['error_msg'] = "Mail Not Sent!";
            header("Location: ../../contact");
        }
    }