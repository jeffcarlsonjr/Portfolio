<?php
class photos
{
    
    private $target_path ="./images/"; 
    private $target_path1 = "./images/";

    public function __construct() {
        if(isset($_POST['addPhoto']))
        {
            $this->splitPhotos();
        }
    }
    
    public function addPhoto()
    {

        $checkImage = $_FILES['thePhoto']['name'];

        list($name,$ext) = explode(".", strtolower($checkImage));

        if (($ext == "jpg") || ($ext == "jpeg") || ($ext == "png") || ($ext == "gif") || ($ext == "tiff"))
            {
            $newTargetPath = $this->target_path .basename( $_FILES['thePhoto']['name']);
            if(move_uploaded_file($_FILES['thePhoto']['tmp_name'], $newTargetPath))
                        {
                        list($width,$height) = getimagesize($newTargetPath);
                        $query = "INSERT INTO photos SET path = '".$checkImage."',date = NOW(); ";
                        mysql_query($query);


                        echo "<meta http-equiv='refresh' content='0;url=photos.php' />";
                        }
                    }
    }
    
    public function multipleAddPhoto()
    {
        echo "hello"; 
        foreach($_FILES['thePhoto']['tmp_name'] as $key =>$tmpName)
                {
                    $checkImage = $key.$_FILES['thePhoto']['name'][$key];
                    $checkImage = substr($checkImage, 1);
                    $fileTmp = $_FILES['thePhoto']['tmp_name'][$key];
                    
                    
                    list($name,$ext) = explode(".", strtolower($checkImage));
                    if (($ext == "jpg") || ($ext == "jpeg") || ($ext == "png") || ($ext == "gif") || ($ext == "tiff"))
                        {
                            
                        $newTargetPath = $this->target_path .basename($checkImage);

                            if(move_uploaded_file($fileTmp,$newTargetPath))
                            {
                            list($width,$height) = getimagesize($newTargetPath);
                            mysql_query("INSERT INTO img SET 
                                            gal_id = '".$_SESSION['gal_id']."', 
                                            string = '".$checkImage."', 
                                            width = '".$width."', 
                                            height = '".$height."', 
                                            date_uploaded = NOW(); "
                                    );
                            
                            
                            }
                        }
                }
    }
    
    public function getPhotos() {
        
        $query = mysql_query("SELECT path, alt FROM photos ORDER BY date");
        $data = array();
        while($rows = mysql_fetch_assoc($query))
        {
            $data[] = array('path' => $rows['path'], 'alt'=> $rows['alt']);
        }
        return json_encode($data);
    }
                                      
         
    
    
    
}