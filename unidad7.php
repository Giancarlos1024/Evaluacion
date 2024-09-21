<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

<div class="container">
    <header>
        <h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
    

    <nav>
        <?php include("botonera.php"); 
        include("recursos.php");?>
    </nav>
    </header>
    <section>
        <h2>Compras</h2>
        <table>
            <tr>
                <td>Código</td>
                <td>Producto</td>
                <td>Descripción</td>
                <td>Precio</td>
                <td>Seleccion</td>
            </tr>
            <?php
            $mostrarProductos = $productos->listar_productos();
            if (is_array($mostrarProductos) && count($mostrarProductos) > 0) {
                for($i=0; $i<count($mostrarProductos); $i++) {
            ?>
               <tr>
                  <td><?php echo $mostrarProductos[$i]['codigo']; ?>
                  </td>
                  <td><?php echo $mostrarProductos[$i]['producto']; ?>
                  </td>
                  <td><?php echo $mostrarProductos[$i]['descripcion']; ?>
                  </td>
                  <td><?php echo $mostrarProductos[$i]['precio']; ?>
                 </td>
                 <td><a href="cargar_carrito.php?
                 codigoProd= <?php echo $mostrarProductos[$i]['codigo']; ?>&
                 nombreProd= <?php echo $mostrarProductos[$i]['producto']; ?>&
                 descProd= <?php echo $mostrarProductos[$i]['descripcion']; ?>&
                 precioProd= <?php echo $mostrarProductos[$i]['precio']; ?>&
                 ">Comprar</a>
                 </td>
                </tr>
            <?php 
                } 
            }
            ?>
        </table>
    </section>
    <aside>
    <h3> Carrito de compras </h3>
        <table>
        <tr>
           <td>Codigo</td>    
            <td>Producto</td>
            <td>Precio</td>
            
        </tr>
        <?php
        $mostrarCarrito = $carrito->listar_compra();
        if (is_array($mostrarCarrito) && count($mostrarCarrito) > 0) {
            for($i=0; $i<count($mostrarCarrito); $i++) {
        ?>
               <tr>
                  <td><?php echo $mostrarCarrito[$i]['codigo']; ?>
                  </td>      
                  <td><?php echo $mostrarCarrito[$i]['producto']; ?>
                  </td>
                  <td><?php echo $mostrarCarrito[$i]['precio']; ?>
                  </td>
                  
                  <td><a href="eliminar_compra.php?cod=<?php echo $mostrarCarrito[$i]['codigo']; ?>">Eliminar</a>
                  </td>
                </tr>
        <?php 
            }
        }
        ?>
        </table>
  </aside>
    <footer>
        <a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
    </footer>

</div>
</body>
</html>
