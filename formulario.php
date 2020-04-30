<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  
     <?php include('menu.php'); ?>
	 
	 
	 <div class="container">
  <div class="row">
    <div class="col-sm">
           
		   <h1>Formulario</h1>
		   
		   
		   <form  method="POST"  action="insertar_datos.php">
  <div class="form-group row">
    <label for="dispositivo" class="col-4 col-form-label">dispositivo</label> 
    <div class="col-8">
      <input id="dispositivo" name="dispositivo" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="ubicacion" class="col-4 col-form-label">ubicacion</label> 
    <div class="col-8">
      <input id="ubicacion" name="ubicacion" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="humedad" class="col-4 col-form-label">humedad</label> 
    <div class="col-8">
      <input id="humedad" name="humedad" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="temperatura" class="col-4 col-form-label">temperatura</label> 
    <div class="col-8">
      <input id="temperatura" name="temperatura" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="api_key" class="col-4 col-form-label">api_key</label> 
    <div class="col-8">
      <input id="api_key" name="api_key" type="text" class="form-control" value="qwerty12345"  required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
		   
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
