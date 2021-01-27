<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];



    $email_from = 'juliaan_44@outlook.com';

    $email_subject = "Nueva consulta";

    $email_body = "Nombre y apellido: $name.\n". 
                    "Correo: $visitor_email.\n". 
                    "mensaje: $message.";

    $to = "ekko.-@hotmail.com";   

    $headers = "From: $email_from \r\n";       
    $headers .= "Reply-To: $visitor_email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");

?>