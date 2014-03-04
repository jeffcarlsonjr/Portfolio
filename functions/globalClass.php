<?php
session_start();
require 'functions.php';
require 'photoClass.php';
require 'PHPMailer/PHPMailerAutoload.php';
require 'userClass.php';

$db = new db();
$db->connect();

