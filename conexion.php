<?php



$servername="sql203.epizy.com";

$dbname="epiz_25627557_esp8266";


$username="epiz_25627557";

$password="oYBuIo2WOrlQ6j";




 $conn = new mysqli($servername, $username, $password, $dbname);
 
 
  if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            
        } else {

      // echo "conexion exitosa";
	  
	  
       }




?>