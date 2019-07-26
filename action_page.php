<html>
    
<head>

<meta charset="UTF-8">

</head>
<body>


<div id="map" style="width:100%;height:400px;"></div>



<?php
    
$postcode = $_GET['postcode'];

// initialise session
$curlcon = curl_init();

// set options
curl_setopt($curlcon,CURLOPT_URL,"http://postcodes.io/postcodes/$postcode");
curl_setopt($curlcon,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curlcon,CURLOPT_HEADER,false); 

// Fetch data
$output=curl_exec($curlcon);
    
// Close session
curl_close($curlcon);


$output2 = explode(',',$output);

for($x=0; $x <=32; $x++) {
    echo print_r($output2[$x]), '<br>';
} 


$longitude = json_encode($output2[7]);
$latitude = json_encode($output2[8]);

?>


<script>

let longitude = <?php echo $longitude ?>;
let longituden = Number(longitude.slice(12,));

let latitude = <?php echo $latitude ?>;
let latituden = Number(latitude.slice(11,));


function myMap() {
    let mapProp = {
        center:new google.maps.LatLng(latituden, longituden),
        zoom:17,
    };
    let map = new google.maps.Map(document.getElementById("map"),mapProp);
    let marker = new google.maps.Marker({
        position: new google.maps.LatLng(latituden, longituden),
        map: map,
        });
}

    
</script>
    
    
<script src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyDueZA5vlUnCKa5Nx3YTkKn7nZKmS9KCwQ&callback=myMap"></script>

    
</body>
</html>

