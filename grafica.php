<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Grafica</title>
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  	<script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>


  </head>
  <body>
  
     <?php include('menu.php'); ?>
	 
	 
	 <div class="container">
  <div class="row">
    <div class="col-sm">
           
		   <h1>Grafica</h1>
    
	
	     <script type="text/javascript">
 
    //get Data it from a SQLite Database
    var datos =
	<?php   
	
	           require("conexion.php");
			   
				    
					$sql = "SELECT dispositivo,ubicacion,humedad, temperatura,tiempo FROM datos ORDER BY tiempo ASC";
					
				
					$result = $conn->query($sql);
					
					
					$numero_resultados = $result->num_rows;
					
					
					
					
				if( $numero_resultados  == 0){
					$json[]='';
				}else{
					while($row = $result->fetch_assoc()){
					
					$json2[] = $row;
					
					}						
				
				}
				
								
        $json=json_encode($json2);

        echo $json; 
    ?>;
    
   
    $(function () {
		
	var datosTemperatura = [];
	
	var datosHumedad = [];
    
	var test = datos;
	  
	      
		  
		  
      for (k = 0; k < test.length; k++) {
		  
		 // var time = (new Date(test[k].tiempo)).getTime();
		  
		  
  var time = ((new Date(test[k].tiempo)).getTime() + (new Date(test[k].tiempo)).getTimezoneOffset()*60*1000 -(3600000*12) );
		 
		 
		/// var newDate = new Date(date.getTime()+date.getTimezoneOffset()*60*1000);

	
	//alert(hours);



    //return newDate;   
	

        datosTemperatura.push([time, parseFloat(test[k].temperatura)]);
        datosHumedad.push([time, parseFloat(test[k].humedad)]);
     
      }
        
		Highcharts.setOptions({
    time: {
        timezone: 'America/Mexico_City'
    }
});

        $('#container').highcharts({
            title: {
                text: 'Temperatura y Humedad',
                x: -20 //center
            },
            subtitle: {
                text: '',
                x: -20
            },
            xAxis: {
                type: 'datetime'
            },
            yAxis: {
                title: {
                    text: 'Datos'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: ' C'
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },
            series: [{
                name: 'Temperature C',
                data: datosTemperatura
            }, {
                name: 'Humedad %',
                data: datosHumedad
            }]
        });
    });

    </script>
	



<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
     </div>
  </div>
</div>

  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    


  </body>
</html>
