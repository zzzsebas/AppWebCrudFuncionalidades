<?php

require_once('conexion.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leer archivos</title>
    <link href="../css/estilos.css" rel="stylesheet" type="text/css">
 
</head>
<body>
<header class="header">
        <ul>
            <li id="seccion1" onmouseover="ver(1)" onmouseout="ocultar(1)" >
                <a>USUARIO</a>
                <div id="subseccion1">
                    <p><a href="html/Registrar.html">REGISTRAR</a></p>
                    <p><a href="">LOGIN</a></p>
                </div>
            </li>
            <li id="seccion2" onmouseover="ver(2)" onmouseout="ocultar(2)">
                <a>FUNCIONES</a>
                <div id="subseccion2">
                    <p><a href="html/mru.html">MRU</a></p>
                    <p><a href="html/edad.html">EDAD</a></p>
                    <p><a href="html/numeromayor.html">NUMERO MAYOR</a></p>
                    <p><a href="game/css/game.html">JUEGO</a></p>
                    <p><a href="">ARRAYS</a></p> 
                </div>
            </li>
            <li id="seccion3" onmouseover="ver(3)" onmouseout="ocultar(3)" >
                <a>NOSOTROS</a>
                <div id="subseccion3">
                    <p><a href="">MISIÒN</a></p>
                    <p><a href="">VISION</a></p>
                </div>
            </li>
        </ul>
       
        

    </section>
    <script src="../js/scriptfrontend.js"></script>
    
    </header>
   
    
    

    <section id="contenedor1">
        <h2>REGISTROS</h2>
        <center>
        
        <table border="3" id="tabla">
        <tr>
            <td>nombre</td>
            <td>apellido</td>
            <td>correo</td>
            <td>identificacion</td>
        </tr>
        <?php
        $sql="select * from estudiante";
        //echo $sql
        $resultado=mysqli_query($conn,$sql);

        while($mostrar=mysqli_fetch_array($resultado)){

        
        ?>
        <tr>
            <td><?php echo $mostrar['nombre'] ?>  </td>
            <td><?php echo $mostrar['apellido'] ?>  </td>
            <td><?php echo $mostrar['email'] ?>  </td>
            <td><?php echo $mostrar['identificacion'] ?>  </td>
        </tr>

        <?php
        }
        ?>




        </table>
    </center>

    
    </section>
    
</body>
</html>