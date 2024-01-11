<?php

$baglan = mysqli_connect("localhost","root","","filmdizi");


if (!$baglan) 
{
    die("connection failed". mysqli_connect_error());
}
else
{
    echo "bağlantımız gerçekleşti";
}
?>