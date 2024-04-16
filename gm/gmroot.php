<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
session_start();
require_once('gmcon.php');
$emailid=$_POST['emailid'];
$password=$_POST['password'];
$qry ="INSERT INTO `log`(`emailid`, `password`) VALUES ('$emailid','$password')";
echo $qry;

$result=mysqli_query($conn,$qry);
if($result){
   echo "<script type='text/javascript'> document.location ='gmhome.php'; </script>";
   exit ();
}
else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
?>
 