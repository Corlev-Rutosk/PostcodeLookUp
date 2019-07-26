<html>
<body>


<?php $postcode = $_GET['postcode'];

// Initialise session
$curlcon = curl_init();

// Set options
curl_setopt($curlcon,CURLOPT_URL,"http://postcodes.io/postcodes/$postcode");
curl_setopt($curlcon,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curlcon,CURLOPT_HEADER,false); 

// Fetch data
$output=curl_exec($curlcon);

// Close session
curl_close($curlcon);

echo $output;


?>



</body>
</html>
