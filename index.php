<?php 

require $_SERVER["DOCUMENT_ROOT"] . '/includes/config.php';
$PAGETOTAL=5;

$string = file_get_contents($_SERVER["DOCUMENT_ROOT"] ."/data/hotels.json");
$hotels = json_decode($string, true);

if(isset($_GET['id'])){
    $hotelOnPage=[];
    foreach($hotels as $hotel){
        if($hotel['_id']['$oid']==$_GET['id']){
            $hotelOnPage[]=$hotel;
        }
    
    }
    
    render('hotelView.php',['hotel'=>$hotelOnPage[0]]);
    
}else{

$offset=(isset($_GET['offset']) ? (int)$_GET['offset']:0);
$count=(isset($_GET['count']) ? (int)$_GET['count']:$PAGETOTAL);

$hotelsOnPage=[];
$offCount=0;
$hotelCount=0;
foreach($hotels as $hotel){
    if($offCount>=$offset&&$hotelCount<$count){
        $hotelsOnPage[]=$hotel;
        $hotelCount++;
    }
    
    $offCount++;
}

render("indexView.php",['hotelPage'=>$hotelsOnPage,
                        'prev'=>($offset-$PAGETOTAL),
                        'next'=>(($offset+$PAGETOTAL)>count($hotels)?0:$offset+$PAGETOTAL)]
                    );

}
?>
