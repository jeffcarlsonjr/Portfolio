<?php
include 'functions/globalClass.php';
$tools = new tools();
if(empty($_SESSION['id']))
{
    $tools->metaRedirect('0', 'login.php');
}
else {}

?>
<html>
    <head>
        <title>Applications</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./bootstrap/css/bootstrap.css" rel='stylesheet'/>
        <link href="./css/stylesheet.css" rel="stylesheet" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="./js/angular.js"></script>
        <script src="./js/app.js"></script>
        <script src="./js/formCtrl.js"></script>
    </head>
    <body>
        <h1>Hello</h1>
    </body>
</html>
