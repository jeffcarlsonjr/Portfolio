<?php
include 'functions/globalClass.php';
$tools = new tools();
if(empty($_SESSION['id']))
{
    $tools->metaRedirect('0', 'login.php');
}
else {}

?>

        <h1>Hello</h1>
    
