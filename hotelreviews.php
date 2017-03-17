<?php
require $_SERVER["DOCUMENT_ROOT"] . '/includes/config.php';
$PAGETOTAL=5;

$string = file_get_contents($_SERVER["DOCUMENT_ROOT"] ."/data/hotels.json");
$hotels = json_decode($string, true);

$reviews=[];

$id=(isset($_POST['id'])?$_POST['id']:$_GET['id']);

foreach($hotels as $hotel){
    if($hotel['_id']['$oid']==$id){
        $reviews=$hotel['reviews'];
    }

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    header("Content-type: application/json");
     
    
    $reviews[]=$_POST;
    $newHotel=[];
    foreach($hotels as $hotel){
        if($hotel['_id']['$oid']==$id){
            $hotel['reviews']=$reviews;
        }
        $newHotel[]=$hotel;
    }
    
    $newJsonString = json_encode($newHotel);
    file_put_contents($_SERVER["DOCUMENT_ROOT"] ."/data/hotels.json", $newJsonString);
    
    print(json_encode($reviews, JSON_PRETTY_PRINT));
    
}else{

    header("Content-type: application/json");
        
    print(json_encode($reviews, JSON_PRETTY_PRINT));
}

?>