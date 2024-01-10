<?php
$host="localhost";
$user="root";
$password="";
$database="from-validation";


$s=new mysqli($host,$user,$password,$database);
if($s->connect_error){
    echo "not connect";
}
else{
    echo "connect";
}
?>