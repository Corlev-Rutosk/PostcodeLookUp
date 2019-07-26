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

echo print_r($output2[0]);
echo '<br>';
echo print_r($output2[1]);
echo '<br>';
echo print_r($output2[2]);
echo '<br>';
echo print_r($output2[3]);
echo '<br>';
echo print_r($output2[4]);
echo '<br>';
echo print_r($output2[5]);
echo '<br>';
echo print_r($output2[6]);
echo '<br>';
echo print_r($output2[7]);
echo '<br>';
echo print_r($output2[8]);
echo '<br>';


?>



</body>
</html>
