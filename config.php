<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conStr="host=phpheena.ap-south-1.elasticbeanstalk.com port=5432 dbname=aa1mm33h0jmsxct user=AKIAJPLWUDF4ESWQFM6A password=uv2VE2exI1KAbeRzaCgkf8Sug/kVT4Vux41rulV2";
$connection = mysqli_connect($conStr);
 
// Check connection
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>