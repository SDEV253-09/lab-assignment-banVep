<?php

//echo "is this working . </br>";



$website = "http//www.sdev253.net/home.html";
//echo $website;

$stringStart = 0;
$stringEnd = 0;

$urlString = "";


$stringStart = strpos($website, ".");


//echo $stringStart;


$stringEnd = strpos($website, "/", $stringStart);

//echo $stringStart;
//echo $stringEnd;

$urlString = substr($website, ($stringStart + 1), $stringEnd);

echo "domain name is: $urlString";



?>