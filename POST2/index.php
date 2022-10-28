<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Php incrustado</title>
<link rel="stylesheet" href="estilos2.css">
<link rel="stylesheet" href="lb/css/bootstrap.min.css">
<style>
	.reducir{width: 50%; margin: 0 auto}
</style>
</head>
<body>
<div class="container">
<!--barra de navegación-->
<nav class="navbar navbar-expand-lg navbar-light bg-secondary text-white reducir">
	<div class="container-fluid">
	  <a class="navbar-brand" href="#"><img src="logotipo.png"></logotipo></a>
	  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse text-white" id="navbarNav">
		<ul class="navbar-nav">
		  <li class="nav-item">
			<a class="nav-link active text-white" aria-current="page" href="#">Comprar</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link text-white" href="#">Facturación</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link text-white" href="#">Envios</a>
		  </li>
		  
		</ul>
	  </div>
	</div>
  </nav>

<!--barra de navegación-->
<!--header de la APP-->
<div class="row  text-white d-f justify-content-center">
	<div class="col-sm-12 col-md-8 d-f justify-content-center">
<form action="factura.php" method="post"><!--ENVIA LOS DATOS DE FORMA OCULTA-->
<h1 class="text-center text-white">Calcular pedido</h1>
<label form="">Producto: </label>
<select name="producto" id="">
<!--Value es lo que llegara a la otra pagina-->
	<option value="Arroz">Arroz</option>
	<option value="Leche">Leche</option>
	<option value="Azúcar">Azúcar</option>
	<option value="Yogurt">Yogurt</option>

</select>
<label form="">Precio: </label>
<input type="text" name="precio">
<label form="">Cantidad: </label>
<input type="text" name="cantidad">
<!--Aqui va los campos para el condicional-->
<label for="">Forma de Pago:</label>
<select name="formaPago">
    <option value="Tarjeta">Tarjeta</option>
	<option value="Efectivo">Efectivo</option>
    
</select>
<div class="d-flex justify-content-center mt-3 mb-3">
<button type="submit" class="btn btn-primary btn-lg">CALCULAR</button>
</div>
</form>
</div>
</div>
<!--header de la APP-->
<script src="lb/js/bootstrap.min.js"></script>
</body>
</html>