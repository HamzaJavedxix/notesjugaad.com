<?php

ob_start();
if( isset($_GET['email']) and !empty($_GET['email'])){
    $to = 'sharma.ar1234@gmail.com'; // where the email have to send. replace this with your email. just use the same format. "email@xyz.in". don't use "<email@xyz.in>"
    $userEmail = $_GET['email'];
    $from = "support@notesjugaad.com"; // replace with your email address that you were created on your server
    $subject = "Custom subject"; // replace with your own subject
    
    $headers  = "From: MyAlbum " . $from . "\n"; // replace MyAlbum by your site name. do not change the $from variable
// $headers .= "Cc: testsite < mail@testsite.com >\n";
    $headers .= "X-Sender: MyAlbum" . $from . "\n"; // replace MyAlbum by your site name. do not change the var
    $headers .= 'X-Mailer: PHP/' . phpversion(); // optional. but suggested.
    $headers .= "X-Priority: 1\n"; // Urgent message!. setting the priority of the email. 1 is the highest
    $headers .= "Return-Path: sharma.ar1234@gmail.com\n"; // Return path for errors.
    $headers .= "MIME-Version: 1.0\r\n"; // do not m

    $headers .= "Content-Type: text/html; charset=iso-utf-8\n"; // setting email type to html with character encoding type
    
    
    $message = '
        <html>
        <head>
            
        <head>
        <body>
            <h1>' . $_GET['email'] . '</h1>
        </body>
        </html>
    ';




    if( mail($to, $subject, $message, $headers) ){
        if( isset($_GET['redirect'])){
            header("Location: " . $_GET['redirect']);
        }
        else{
            header("Location: https://google.com");
        }
    }
}


?>