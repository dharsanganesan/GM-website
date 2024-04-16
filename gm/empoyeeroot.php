<?php

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
// session_start();

require_once('gmcon.php');
if(isset($date)||isset($ename)||isset($salary)||isset($amount)){
$date=$_POST['date'];  
$ename=$_POST['ename'];
$salary=$_POST['salary'];
$amount=$_POST['amount'];
}
if(!isset($date)){
  $date=$_POST['date'];}
if(!isset($ename)){
  $ename=$_POST['ename'];}
  if(!isset($salary)){
    $salary=$_POST['salary'];}
    if(!isset($amount)){
      //$amount=$_POST['amount'];
    }

      $amount = 250;

$qry ="INSERT INTO employee(entry_date,ename, salary,amount) VALUES ('".$date."','".$ename."','".$salary."','".$amount."')";
echo $qry;
$result=mysqli_query($conn,$qry);
if($result){
   echo "<script type='text/javascript'> document.location ='empoyee.php'; </script>";
   exit ();
}
else
    {
      // echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
?>