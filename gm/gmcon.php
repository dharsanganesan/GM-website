<?php
$conn = mysqli_connect('localhost','root','');
$db = mysqli_select_db($conn,'enter');

if(!$db){
    echo"database not conneted";
}
else{
}
?>