<?php
/*validar la entrada de datos */
if (!$_REQUEST) {
    /**funcion para redirigir a otro archivo */
    header('Location: index.php');
}
//guardar los datos de los formularios en las variables
$producto = $_REQUESTT['producto'];
$cantidad = $_REQUEST['cantidad'];
$precio = $_REQUEST['precio'];
$formaPago = $_REQUEST['formaPago'];
$subtotal = $cantidad * $precio;
$iva = $subtotal * 0.21;
$moneda = '$';
/*A la hora de calcular la factura debemos de conocer lo siguiente
        Los usuarios que paguen con tarjeta tendran descuento del 20%
        Los usuarios que paguen con Paypal tendran un descuento del 15%
        Los usuario que paguen con efectivo tendran un descuento del 10%      
    */
if ($formaPago == 'Tarjeta') {
    $descuento = $subtotal * 0.20;
} else if ($formaPago == 'Paypal') {
    $descuento = $subtotal * 0.15;
} else {
    $descuento = $subtotal * 0.10;
}

$total = $subtotal - $descuento + $iva;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <table class="table table-success table-striped">
        <h1 class='text-center text-dark'>FACTURA DE COMPRA</h1>
        <p>PRODUCTO <?php echo $producto ?></p>
        <p>CANTIDAD <?php echo $cantidad ?></p>
        <p>PRECIO <?php echo $precio ?></p>
        <p>DESCUENTO <?php echo $descuento ?></p>
        <p>IVA <?php echo $iva ?></p>
        <p><strong>TOTAL <?php echo $total ?></strong></p>
    </table>

    <table class="table table-dark">
        <thead>
            <tr>


            <th class="table-active">
                PRODUCTO
            </th>
            <th>
                CANTIDAD
            </th>
            <th>
                PRECIO
            </th>
            <th>
                DESCUENTO
            </th>
            <th>
                IVA
            </th>
            <th>
                TOTAL
            </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">3</th>
                <td colspan="1" class="table-active"><?php echo $producto ?></td>
                <td><?php echo $cantidad ?></td>
                <td><?php echo $precio ?></td>
                <td><?php echo $descuento ?></td>
                <td><?php echo $iva ?></td>
                <td><?php echo $total ?></td>

            </tr>
        </tbody>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>