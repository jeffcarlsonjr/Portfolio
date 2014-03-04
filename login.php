<?php 
include 'functions/globalClass.php';

$login = new Logins();
if(isset($_POST['Login']))
{
    $login->login_get_data();
}

?>
<html >
    <head>
        <title>Log In Please</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./bootstrap/css/bootstrap.css" rel='stylesheet'/>
        <link href="./css/stylesheet.css" rel="stylesheet" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
       
    </head>
    <body id="login">
        <div class="container">
            <div class="row">
                <div style="margin:40px auto; width:65%; height: auto; border: thin #cccccc solid; padding: 20px">
                    <div style="margin: 0px auto; width:90%">
                        <form method="post"  >
                            <label>
                                Email Address
                            </label><br/>
                            <input type="email" name="username"  placeholder="Email Address" class="form-control" required/>
                             
                            <br/>
                            
                            <label>
                                Password
                            </label><br/>
                            <input type="password" name="password" placeholder="Password" class="form-control" required/><br>
                            <input type="submit" name="Login" value="Login" class="btn-primary"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
