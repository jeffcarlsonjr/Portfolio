<?php
include 'functions/globalClass.php';


$target_path ="./images/"; 
$checkImage = $_FILES['thePhoto']['name'];

list($name,$ext) = explode(".", strtolower($checkImage));

if (($ext == "jpg") || ($ext == "jpeg") || ($ext == "png") || ($ext == "gif") || ($ext == "tiff"))
    {
    $newTargetPath = $target_path .basename( $_FILES['thePhoto']['name']);
    if(move_uploaded_file($_FILES['thePhoto']['tmp_name'], $newTargetPath))
                {
                //list($width,$height) = getimagesize($newTargetPath);
                $query = "INSERT INTO photos SET path = '".$checkImage."',date = NOW(); ";
                mysql_query($query);
                
                
                echo "<meta http-equiv='refresh' content='0;url=photos.php' />";
                }
            }