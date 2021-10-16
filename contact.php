<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'rheket@gmail.com';

    $email_subject = 'Portfolio site contact';

    $email_body =  "User Name: $name.\n".
                        "User Email: $email.\n".
                        "User Message: $message.\n";

    $to = "andresv9911@gmail.com";

    $headers = "From" $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html");

?>