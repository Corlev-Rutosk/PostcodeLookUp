<html>
<body>

The postcode is 
<?php echo $_GET['postcode']; ?> <br> <br>

<?php


// initialise session
$curlcon = curl_init();

// set options
curl_setopt($curlcon,CURLOPT_URL,"http://postcodes.io/postcodes/ng243ng");
curl_setopt($curlcon,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curlcon,CURLOPT_HEADER,false); 

$output=curl_exec($curlcon);

curl_close($curlcon);

echo $output;



?>



</body>
</html>
