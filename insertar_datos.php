<?php

require('conexion.php');


$llave = "qwerty12345";  


$api_key="";
$dispositivo ="";
$ubicacion="";
$humedad ="";
$temperatura ="";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	
	$api_key = test_input($_POST["api_key"]);  //  llave recibida del nodemcu o formulario
	
	
	
	        if($api_key == $llave) { 
			
			
			
	    $dispositivo = test_input($_POST["dispositivo"]);
        $ubicacion = test_input($_POST["ubicacion"]);
        $humedad = test_input($_POST["humedad"]);
        $temperatura = test_input($_POST["temperatura"]);
		
		
		
		 $sql = "INSERT INTO datos (dispositivo, ubicacion, humedad, temperatura)
        VALUES ('" . $dispositivo . "', '" . $ubicacion . "', '" . $humedad . "', '" . $temperatura . "')";
		
		
		if ($conn->query($sql) === TRUE) {
			
            echo "Insertado correctamente";

            header('Location: tabla.php');
            
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
		
			
			
			
			}  else {
				
				
				echo "Llave erronea";
				
			}
	
	
	
	
	
	
	
	
	
}





function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
























?>