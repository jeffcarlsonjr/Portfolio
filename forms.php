<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor. http://www.ng-newsletter.com/posts/validations.html
-->
<html>
    <head>
        <title>Welcome to Forms</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./bootstrap/css/bootstrap.css" rel='stylesheet'/>
        <link href="./css/stylesheet.css" rel="stylesheet" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="./js/angular.js"></script>
        <script src="./js/formCtrl.js"></script>
  
    </head>
    <body ng-app>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 forms" >
                    
                    <form name="signup_form" class="form-group" ng-submit="signupForm()" novalidate>
                        <fieldset>
                            <legend>Sign Form</legend>
                            <label>First Name</label><br>
                            <input type="text" placeholder="First Name" name="fName" ng-model="user.fname" ng-minlength=3 ng-maxlength=20 class="form-control" required/>
                            <div class="error" ng-show="signup_form.fName.$dirty && signup_form.fName.$invalid">
                                <small class="error" ng-show="signup_form.fName.$error.required">
                                    Your first name is required.
                                </small>
                                <small class="error" ng-show="signup_form.fName.$error.minlength">
                                        Your name is required to be at least 3 characters
                                </small>
                                <small class="error" ng-show="signup_form.fName.$error.maxlength">
                                        Your name cannot be longer than 20 characters
                                </small>
                            </div>
                            
                            <br><button type="submit" class="btn-primary">Sign Up</button>
                        </fieldset>
                    </form>
                    
                </div>
            </div>
        </div>
    </body>
</html>
