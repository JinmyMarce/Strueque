<?php


error_reporting(0);


require('../MODELO/Lugar.php');


if (!empty($_POST['lugRegis'])) {
    $Nombre = $_POST['nombre'];
    $Direcc = $_POST['direccion'];
    $capaci = $_POST['capacidad'];
    $descripcion = $_POST['descripcion'];
    $Imagen = $_FILES['imagen']['tmp_name'];
    $NombreImagen = $_FILES['imagen']['name'];
    $TipoImagen = strtolower(pathinfo($NombreImagen, PATHINFO_EXTENSION));
    $directorio ="../img/";


    // Verificamos que sea una extensión de imagen válida
    $extensionesValidas = array("jpg", "jpeg", "png", "gif");
    if (!in_array($TipoImagen, $extensionesValidas)) {
        echo "Solo se permiten archivos de imagen.";
        exit;
    }


    // Generamos un nombre único para la imagen
    $NombreImagenUnico = uniqid('', true) . '.' . $TipoImagen;


    // Movemos la imagen a su ubicación final
    $ruta = $directorio . $NombreImagenUnico;
    if (!move_uploaded_file($Imagen, $ruta)) {
        echo "Hubo un error al subir la imagen.";
        exit;
    }


    $Lugar1 = new Lugar($Nombre,$Direcc , $capaci ,  $descripcion, $Imagen);


    $resulLug = $Lugar1->InsertarLugar($Lugar1);
    $resul12334 = $Lugar1->ConsulLugar();


    if ($resulLug) {
        echo "Lugar insertado correctamente.";
    } else {
        echo "Hubo un error al insertar el lugar.";
    }
} else if (!empty($_POST['Actualizar'])) {
    $Nombre1 = $_POST['nombre'];
    $resul34 = new Lugar($Nombre1, '', '' , '' , '');
    $Modificar100 = $resul34->ActualizarLugar($resul34);


    if ($Modificar100) {
        echo "Se Actualizo Correctamente";
    } else {
        echo "Error al Actualizar";
    }
} else if (!empty($_POST['Eliminar'])) {
    $NombreEliminar = $_POST['nombre'];
    $resulH = new Lugar($NombreEliminar, '', '' , '' ,'');
    $Eliminar = $resulH->EliminarLugar($resulH);


    if ($Eliminar) {
        echo "Se Elimino correctamente";
    } else {
        echo "Error al Eliminar";
    }
}
?>


<form action="" method="post">
    <table border="0" cellpadding="0">
        <tr>
            <td>Nombre</td>
            <td>Imagen</td>
            <td>Descripcion</td>
            <td>Actualizar</td>
            <td>Eliminar</td>
        </tr>


        <?php
        if (isset($resul12334)) {
            foreach ($resul12334 as $resultadoL) {
        ?>
                <tr>
                    <td><?php echo $resultadoL['nombre']; ?></td>
                    <td><?php echo $resultadoL['descripcion']; ?></td>
                    <td>
               
                <!-- Muestra la imagen usando la ruta completa -->
                <img src="<?php echo $directorio . $resultado['imagen']; ?>" alt ="30" width="30">
         
          </td>
                    <td><input type="submit" name="Actualizar" value="Actualizar"></td>
                    <td><input type="submit" name="Eliminar" value="Eliminar"></td>
                    <input type="hidden" name="nombre" value="<?php echo $resultadoL['nombre']; ?>">
                </tr>
        <?php
            }
        }
        ?>
    </table>
</form>


<style>
table {
    border-collapse: collapse;
    width: 100%;
}


table, th, td {
    border: 1px solid black;
}


th, td {
    padding: 8px;
    text-align: left;
}


tr:nth-child(even) {
    background-color: #f2f2f2;
}


input[type="submit"] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 8px 12px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
}


input[type="submit"]:hover {
    background-color: #45a049;
}


td {
    padding: 10px;
}
</style>
