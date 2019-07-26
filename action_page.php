<html>
<body>


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


?>



</body>
</html>
