<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html ng-app="APP">
    <head>
        <title>Welcome to Jeff's Forms</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./bootstrap/css/bootstrap.css" rel='stylesheet'/>
        <link href="./css/stylesheet.css" rel="stylesheet" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="./js/angular.js"></script>
        <script src="./js/app.js"></script>
        <script src="./js/formCtrl.js"></script>
        <script src="./js/angular-route.js"></script>
    </head>
    <body>
        <div class="container">
            
            <div class="row">
                 <div class="col-lg-12">
                    <h4>This is a simple sign up page using AngularJs and PHP. AngularJs is useful here because I can control the user information from the user. Again this is a simple form to give a quick idea of what can be done. Please fill out the form and there will be an email to you shortly with our new password for the next page.</h4>
                </div>
                <div class=" signupFrom" ng-controller="signupController">
                <form name="signup_form" nonvalidate ng-submit="signupForm(); uploadForm()">
                    
                        <legend>Sign Up Form</legend>
                        <label>Your name</label>
                        <input type="text" placeholder="Name" name="name" ng-model="signup.name" ng-minlength=3 ng-maxlength=20 class="form-control" required />
                        <div class="error" ng-show="signup_form.name.$dirty && signup_form.name.$invalid">
                            <small class="error" ng-show="signup_form.name.$error.required">
                                Your name is required.
                            </small>
                            
                            <small class="error" ng-show="signup_form.name.$error.minlength">Your name is required to be at least 3 characters
                            
                            </small>
                            <small class="error" ng-show="signup_form.name.$error.maxlength">
                                Your name cannot be longer than 20 characters
                            </small>
                        </div>
                        <!--Email -->
                        <label>Your Email</label><br/>
                        <input type="email" placeholder="Email Address" name="email" ng-model="signup.email" ng-minlength=3 ng-maxlength=50 class="form-control" required/>
                        <div class="error" ng-show="signup_form.email.$dirty && signup_form.email.$invalid">
                            <small class="error" ng-show="signup_form.email.$error.required">
                                Your email is required
                            </small>
                            <small class="error" ng-show="signup_form.email.$error.minlength">
                                Your email is required to have at least 3 characters.
                            </small>
                            <small class="error" ng-show="signup_form.email.$error.email">
                                That is not a valid email. Please input a valid email.
                            </small>
                            <small class="error" ng-show="signup_form.email.$error.maxlength">
                                Your email cannot be longer than 20 characters
                            </small>
                        </div>
                            
                       
                        
                        
                        
                            <br><button type="submit" ng-disabled="signup_form.$invalid" class="btn-primary">Submit</button>
                    
                </form>
                    
                </div>
            </div>
        </div>
    </body>
</html>
