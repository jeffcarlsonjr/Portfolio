<?php 
 include 'function.php';
$location = new address();
$result = $location->Get_LatLng_From_Google_Maps();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            <label>
                Add address:
            </label><br/>
            <input type="text" name="address"/>
            <input type="submit" name="checkAddress" value="Check Address"/>
        </form>
        <div>
            <?php  echo $result['lat']." ".$result['lng'] ?>
        </div>
    </body>
</html>
