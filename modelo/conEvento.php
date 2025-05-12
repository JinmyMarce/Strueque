<?php
require('../MODELO/Evento.php');


if (!empty($_POST['Registrar12'])) {
    $Nombre = $_POST['nombre'];
    $Descripcion = $_POST['descripcion'];
    $fecha_Inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];
    $Id_lugar = $_POST['lugar_id'];
    $Imagen = $_FILES['imagen']['tmp_name'];
    $NombreImagen = $_FILES['imagen']['name'];
    $TipoImagen = strtolower(pathinfo($NombreImagen, PATHINFO_EXTENSION));
    $directorio = "../img/";


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


    $even = new Evento($Nombre , $Descripcion , $fecha_Inicio , $fecha_fin , $Preci1 , $Imagen);


    $resultadoQ = $even->InsertarEvento($even);
    $resultadoConsultaQ = $even->ConsultarEvento();


    if ($resultadoQ) {
        echo "Artista insertado correctamente.";
    } else {
        echo "Hubo un error al insertar el artista.";
    }
} else if (!empty($_POST['Actualizar'])) {
    $Nombre1 = $_POST['nombre'];
    $eve1 = new Evento($Nombre1, '', '' , '' , '' , '');
    $ModificarA = $eve1->ActualizarEvento($eve1);


    if ($ModificarA) {
        echo "Se Actualizo Correctamente";
    } else {
        echo "Error al Actualizar";
    }
} else if (!empty($_POST['Eliminar'])) {
    $NombreEliminar = $_POST['nombre'];
    $eve3 = new Evento($NombreEliminar, '', '' , '' , '' , '');
    $Eliminar = $eve3->EliminarEvento($eve3);


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
            <td>Descripcion</td>
            <td>Fecha Inicio</td>
             <td>Fecha Fin</td>
            <td>Imagen</td>
            <td>Precio</td>
            <td>Actualizar</td>
            <td>Eliminar</td>
        </tr>
        <?php
        if (isset($resultadoConsulta)) {
            foreach ($resultadoConsulta as $resultado) {
        ?>
                <tr>
                    <td><?php echo $resultado['nombre']; ?></td>
                    <td><?php echo $resultado['descripcion']; ?></td>
                    <td><?php echo $resultado['fecha_inicio']; ?></td>
                    <td><?php echo $resultado['fecha_fin']; ?></td>
                    <td>
               
                <!-- Muestra la imagen usando la ruta completa -->
                <img src="<?php echo $directorio . $resultado['imagen']; ?>" alt ="30" width="30">
         
          </td>
                    <td><?php echo $resultado['precio entrada']; ?></td>
                    <td><input type="submit" name="Actualizar" value="Actualizar"></td>
                    <td><input type="submit" name="Eliminar" value="Eliminar"></td>
                    <input type="hidden" name="nombre" value="<?php echo $resultado['nombre']; ?>">
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
