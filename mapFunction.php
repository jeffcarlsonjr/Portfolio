<?php

class address
{
    
    public function __construct()
    {
        if(isset($_POST['checkAddress'])){
            $this->Get_LatLng_From_Google_Maps();
        }
    }
    
    public function Get_LatLng_From_Google_Maps() {
        $address = $_POST['address'];
        $address = str_replace(" ", "+",$address);

        $url = "http://maps.googleapis.com/maps/api/geocode/json?address=$address&sensor=false";

        $source = file_get_contents($url);
        $obj = json_decode($source);
        $LATITUDE = $obj->results[0]->geometry->location->lat;
        $long = $obj->results[0]->geometry->location->lng;
        
        return array("lat" =>$LATITUDE, "lng"=>$long);
    
    }

}