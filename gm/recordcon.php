<?php 
  
  $servername = "localhost"; 
  $username = "root"; 
  $password = ""; 
  $databasename = "enter"; 
  
  // CREATE CONNECTION 
  $db = new mysqli($servername, 
    $username, $password, $databasename); 
  
  // GET CONNECTION ERRORS 
  if ($db->connect_error) { 
      die("Connection failed: " . $db->connect_error); 
  } 