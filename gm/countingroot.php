<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
session_start();
require_once('gmcon.php');
if(isset($indate)||isset($outdate)||isset($lotno)||isset($box)||isset($textiles)||isset($process)||isset($bending)||isset($choice)){
$indate=$_POST['indate'];
$outdate=$_POST['outdate'];
$lotno=$_POST['lotno'];
$box=$_POST['box'];
$textiles=$_POST['textiles'];
$process=$_POST['process'];
$bending=$_POST['bending'];
$choice=$_POST['choice'];
}
if(!isset($indate)){
  $indate=$_POST['indate'];}
  if(!isset($outdate)){
    $outdate=$_POST['outdate'];}
    if(!isset($lotno)){
      $lotno=$_POST['lotno'];}
      if(!isset($box)){
        $box=$_POST['box'];}
        if(!isset($textiles)){
          $textiles=$_POST['textiles'];}
          if(!isset($process)){
            $process=$_POST['process'];}
            if(!isset($bending)){
              $bending=$_POST['bending'];}
              if(!isset($choice)){
                $choice=$_POST['choice'];}
$qry ="INSERT INTO `counting`(`indate`, `outdate`,`lotno`, `box`,`textiles`, `process`,`bending`, `choice`) VALUES ('$indate','$outdate','$lotno','$box','$textiles','$process','$bending','$choice')";
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