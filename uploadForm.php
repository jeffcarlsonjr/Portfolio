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

$mail->WordWrap = 50;
$mail->isHTML(true);

$mail->Subject = "Email From Jeff's Website";
$mail->Body = "Hello ".$name.",<br> Thank you for looking over my site. <br/> Here is your password for the next section:".$password;
$mail->Body .= "<br/><br/>Thank you,<br/>Jeff";

$mail->send();
}

