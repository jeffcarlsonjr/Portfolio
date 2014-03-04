<?php
include 'functions/globalClass.php';


$errors=0;

$image =$_FILES["file"]["name"];

$uploadedfile = $_FILES['file']['tmp_name'];

if ($image) 
    {
    list($name,$extension) = explode(".", strtolower($image));
    if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
        {
        echo ' Unknown Image extension ';
        $errors=1;
        }

        else
         {
         $size=filesize($_FILES['file']['tmp_name']);

          if($extension=="jpg" || $extension=="jpeg" )
              {
              $uploadedfile = $_FILES['file']['tmp_name'];
              $src = imagecreatefromjpeg($uploadedfile);
              }
              else if($extension == "png")
                  {
                  $uploadedfile = $_FILES['file']['tmp_name'];
                  $src = imagecreatefrompng($uploadedfile);
                  }
                  else 
                      {
                      $src = imagecreatefromgif($uploadedfile);
                      }
                      list($width,$height) = getimagesize($uploadedfile);
                      $newwidth = 640;
                      $newheight = ($height/$width)*$newwidth;
                      $tmp = imagecreatetruecolor($newwidth,$newheight);

                      $newwidth1 = 150;
                      $newheight1 = ($height/$width)*$newwidth1;
                      $tmp1 = imagecreatetruecolor($newwidth1,$newheight1);

                      imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
                      imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1, $width,$height);
                      

                      $filename = "images/". $_FILES['file']['name'];
                      $filename1 = "imageThumbs/". $_FILES['file']['name'];
                      
                      imagejpeg($tmp,$filename,100);
                      imagejpeg($tmp1,$filename1,100);
                      
                      $query = "INSERT INTO photos SET path = '".$image."',alt = '".filter_input(INPUT_POST, 'location')."',date = NOW(); ";
                      mysql_query($query) or die(mysql_error());
                     
                      imagedestroy($src);
                      imagedestroy($tmp);
                      imagedestroy($tmp1);
                      
                       echo "<meta http-equiv='refresh' content='0;url=photos.php' />";
                      }
                      }
                                      