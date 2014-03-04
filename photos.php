<?php
include 'functions/globalClass.php';

$photo = new photos();

?>
<!DOCTYPE html>

<html ng-app="APP">
    <head>
        <title>Welcome to Jeff's Photo Uploader</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./bootstrap/css/bootstrap.css" rel='stylesheet'/>
        <link href="./css/stylesheet.css" rel="stylesheet" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="./js/angular.js"></script>
        <script src="./js/app.js"></script>
    </head>
    <body class="photo" ng-controller="photoCtrl">
        <nav class="navbar navbar-inverse" role="navigation">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="photos.php">Photos</a></li>
                <li><a href="forms.php">Forms</a></li>
            </ul>
        </nav>
        <div class="container" id="photo" >
            <div class="row">
                <div class="col-lg-12">
                    <h4>This page is designed with Bootstrap and I am using a PHP uploader with the Pictures are being displayed using AngularJS through Json. My photo uploader takes one photo and resizes it twice. Once is 640 x 480 and the second is a thumb 150 x 112. This way we save a ton of load time. Please click on the photos on the right and they will display on the left. Feel free to add a photo.</h4>
                </div>
                <div class="col-lg-7">
                    <div class="displayPhoto" >
                        <img ng-src="./images/{{first}}"/>
                    </div>
                    <div class="addPhoto col-lg-5">
                      <h2>Add New Photos</h2>
                      <form method="post" enctype="multipart/form-data" action="addphotos.php">
                            <label>Please select a photo to upload</label><br/>
                            <input type="file" name="file" class="form-control"/><br/>
                            <label>Location of Photo</label><br>
                            <input type="type" name="location" class="form-control"/>
                            <input type="submit" name="addPhoto" value="Add a Photo" class="btn-primary"/>
                        </form>  
                    </div>
                </div>
                <div class="photoDisplay col-lg-5">
                    <ul>
                        <li ng-repeat="photos in photo"><img ng-src="./imageThumbs/{{photos.path}}" width="100" ng-click="setImage(photos.path)" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
