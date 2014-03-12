<?php

include 'functions/globalClass.php';


$json = file_get_contents('php://input');
$data = json_decode($json, true);

$name = $data['name'];
$email = $data['email'];


function rand_string( $length ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	

    $size = strlen( $chars );
    for( $i = 0; $i < $length; $i++ ) {
            $str .= $chars[ rand( 0, $size - 1 ) ];
    }

    return $str;
}

if(!empty($name)){
$password = rand_string(8);
    mysql_query("INSERT INTO `user` SET name = '".$name."', email= '".$email."', password = '".  md5($password)."', date = NOW()");


//Send email now.

$mail = new PHPMailer();

$mail->From = 'jeff.carlsonjr@gmail.com';
$mail->FromName = "Jeff Carlson";
$mail->addAddress($email);
$mail->addReplyTo('jeff.carlsonjr@gmail.com');
$mail->addBCC('jeff.carlsonjr@gmail.com');

$mail->WordWrap = 100;
$mail->isHTML(true);

$mail->Subject = "Email From Jeff's Website";
$mail->Body = "<p>Hello ".$name.",</p><p>Thank you for looking over my site. <br/> Here is your password for the next section:<strong> ".$password."</strong></p><p>Your email address: ".$email. "will be your user name when you log in.</p>";
$mail->Body .= "<p>Thank you,<br/>Jeff</p>";

$mail->send();
}

