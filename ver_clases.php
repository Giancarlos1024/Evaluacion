<?php
include("componentes/conex.php");

$miconsul=mysqli_query($conexiontab,"SELECT * FROM clases ORDER BY unidad");
while($listclases= mysqli_fetch_assoc($miconsul))
{

?>
<div class="datos">
    <h2>ver_clases</h2>
    <h3><?php echo $listclases['unidad']." ".$listclases['fecha'];?></h3>
    <p><?php echo $listclases['id_clase'];?></p>
    <p><a href ="componentes/eliminar.php? id_clase=<?php echo $listclases['id_clase'];?>">Eliminar</a></p>
    

</div>
<?php } ?> 