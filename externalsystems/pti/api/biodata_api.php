<?php
if($_GET["id"]==1){
 
$biodata->FullName = "Ali Nazar Rathore";
$biodata->FullNameUrdu = "علی نذر ڑاٹھور";
$biodata->ImageURL = "https://www.techwrath.com.au/externalsystems/pti/images/person_img/alinazarrathore-14-04-2020-2-34-00.jpg";
$biodata->City = "Lahore";

$apidetails->biodata = $biodata;

$myILW = json_encode($apidetails, JSON_PRETTY_PRINT);
echo $myILW;   
}else{
echo "علی نذر ڑاٹھور" ;
}


;

?>