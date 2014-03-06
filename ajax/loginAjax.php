<?php
include '../functions/globalClass.php';
$login = new Logins();

$json = file_get_contents('php://input');
$data = json_decode($json, true);



$login->login_get_data($data['username'], $data['password']);