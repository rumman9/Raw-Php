<?php

$enc_key = base64_encode("rumman islam nur");
echo $enc_key; //key gula ke enc kore show kore 
echo "<hr/>";
echo base64_decode($enc_key); //ager obosthay fire pabo
?>