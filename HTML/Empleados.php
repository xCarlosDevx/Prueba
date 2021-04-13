
<!doctype html>
<html lang="en">
<?php
include 'basesDeDatos/conexion.php';
$result = mysqli_query($conn, "SELECT ID_Empleado, Nombre, Apellido FROM empleados");
$result2 = mysqli_query($conn, "SELECT `IDPedido`, `IDFactura`, `NCliente`, `ACliente`, `Producto`, `Precio`, `Cantidad`, `Direccion`, `FechaPedido`, `Total` FROM pedido");
$result3 = mysqli_query($conn, "SELECT ID_Usuario, Nombre, Apellido, Correo, Nombre_Usuario, Contraseña, Tipo_Usuario FROM usuarios");
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--    Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />

    <link rel="stylesheet" href="../CSS/Cajas4.css">
    <link rel="stylesheet" href="../CSS/EstilosBase.css">

    <script src="https://kit.fontawesome.com/0458944bda.js" crossorigin="anonymous"></script>

    <title>Cooking Shop</title>
</head>

<header class="header">
    <div class="container logo-nav-container">
        <a href="#" class="logo">Cooking Shop </a>
        <span class="menu-icon">Ver menú</span>

        <nav class="navigation">
            <ul class="show">
                <li><a href="https://cookingshop.herokuapp.com/">Inicio</a></li>
                <li><a href="Categorias.html">Categorias</a></li>
                <li><a href="Nosotros.html">Nosotros</a></li>
                <li><a href="Contáctanos.html">Contáctanos</a></li>
		<li><a href="Empleados.php">Empleados</a></li>
            </ul>
        </nav>
    </div>
</header>

<style>
    table.dataTable thead {
       background: linear-gradient(to right, #ffbf00, #ffc61a);
        color: black;
    }
</style>

</head>
<br>
<br>

<body>

  
    <button id="btn1">Empleado </button>
    <button id="btn2">Pedidos </button>
    <button id="btn3">Usuarios </button>

    <div class="container1" id='container1'>
    <h1 class="text-center">Listado de Empleados</h1>
        <div class="row">
            <div class="col-lg-12">
                <table id="tablaEmpleados" class="table-striped table-bordered dataTable" style="width:100%">
			<br><br>
                    <thead class="text-center">
                        <th>ID de Empleados</th>
                        <th>Nombre de Empleado</th>
                        <th>Apellido de Empleado</th>
                 
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row['ID_Empleado'] ?></td>
                                <td><?php echo $row['Nombre'] ?></td>
                                <td><?php echo $row['Apellido'] ?></td>
                               
                            </tr>
                        <?php
                        }
                        ?>
                        <?php
                        // close connection database
                        mysqli_close($conn);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="container2" id='container2'>
    <h1 class="text-center">Listado de Pedidos</h1>
        <div class="row">
            <div class="col-lg-12">
                <table id="tablaPedidos" class="table-striped table-bordered dataTable" style="width:100%">
			<br><br>
                    <thead class="text-center">
                        <th>ID de Pedido</th>
                        <th>ID Factura</th>
                        <th>Nombre del cliente</th>
                        <th>Apellido del cliente</th>
                        <th>Productos</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Direccion</th>
                        <th>Fecha</th> 
                         <th>Total</th>
                        
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($result2)) {
                        ?>
                            <tr>
                                
                            
                            <td><?php echo $row['IDPedido'] ?></td>
                            <td><?php echo $row['IDFactura'] ?></td>
                            <td><?php echo $row['NCliente'] ?></td>
                            <td><?php echo $row['ACliente'] ?></td>
                            <td><?php echo $row['Producto'] ?></td>
                            <td><?php echo $row['Precio'] ?></td>
                            <td><?php echo $row['Cantidad'] ?></td>
                            <td><?php echo $row['Direccion'] ?></td>
                            <td><?php echo $row['FechaPedido'] ?></td>
                            <td><?php echo $row['Total'] ?></td>
                    
                            </tr>
                        <?php
                        }
                        ?>
                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container3" id='container3'>
    <h1 class="text-center">Listado de Usuarios</h1>
        <div class="row">
            <div class="col-lg-12">
                <table id="tablaUsuarios" class="table-striped table-bordered dataTable" style="width:100%">
			<br><br>
                    <thead class="text-center">
                        <th>ID_Usuario</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Nombre_Usuario</th>
                        <th>Contraseña</th>
                        <th>Tipo_Usuario</th>
                       
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($result3)) {
                        ?>
                            <tr>
                                
                            
                            <td><?php echo $row['ID_Usuario'] ?></td>
                            <td><?php echo $row['Nombre'] ?></td>
                            <td><?php echo $row['Apellido'] ?></td>
                            <td><?php echo $row['Correo'] ?></td>
                            <td><?php echo $row['Nombre_Usuario'] ?></td>
                            <td><?php echo $row['Contraseña'] ?></td>
                            <td><?php echo $row['Tipo_Usuario'] ?></td>
                           
                           
                            </tr>
                        <?php
                        }
                        ?>
                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>

                        

    <script src="../JS/ocultar.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <!--    Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#tablaEmpleados').DataTable();
            $('#tablaPedidos').DataTable();
            $('#tablaUsuarios').DataTable();
        });
    </script>


</body>

</html>
