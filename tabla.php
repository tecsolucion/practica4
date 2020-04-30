<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Tabla</title>
  </head>
  <body>
  
     <?php include('menu.php'); ?>
	 
	 
	 <div class="container">
  <div class="row">
    <div class="col-sm">
           
		   <h1>Tabla</h1>
		   
		   
		   <!--Table-->
<table id="tablePreview" class="table">
<!--Table head-->
  <thead>
    <tr>
      <th>id</th>
      <th>Dispositivo</th>
      <th>Ubicaci&oacute;n</th>
      <th>Humedad</th>
      <th>Temperatura</th>
      <th>Tiempo</th>

    </tr>
  </thead>
  <!--Table head-->
  <!--Table body-->
  <tbody>
  
  <?php
  
  require('conexion.php');
  
  $sql ="SELECT * FROM datos ";
  
  $result = $conn->query($sql);
  
  
  
  
  
  
   if ($result) {
  
         
		 while ($row = $result->fetch_assoc()) {
  
  
  ?>
  
  
    <tr>
      <th scope="row"><?=$row['id']; ?></th>
      <td><?=$row['dispositivo'];?></td>
      <td><?=$row['ubicacion'];?></td>
      <td><?=$row['humedad'];?></td>
      <td><?=$row['temperatura'];?></td>
      <td><?=$row['tiempo'];?></td>
     
    </tr>
   
   <?php
   
		 } // end while;
		
   }  //end if;
   
   
   ?>
   
  </tbody>
  <!--Table body-->
</table>
<!--Table-->
		   
		   
    </div>
   
  </div>
</div>



  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
