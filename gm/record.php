<?php
 $database = 'enter';
// SQL query to select data from database
$sql = " SELECT * FROM  log ";
$result = mysqli ->query($sql);
mysqli ->close();
?>