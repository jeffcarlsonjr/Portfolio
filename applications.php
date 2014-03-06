<?php
include 'functions/globalClass.php';
$tools = new tools();
if(empty($_SESSION['id']))
{
    
    $tools->metaRedirect('0', '/login');
}
else {}
echo $_SESSION['id'];
?>

        <h1>Hello</h1>
    
