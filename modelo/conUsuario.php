<?php
require('../MODELO/Usuario.php');


if (!empty($_POST['Usuario1'])) {
    $Nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contra = $_POST['contrasena'];


    $Usuario1 = new Usuario($Nombre, $correo, $contra);


    $resultado = $Usuario1->InsertarDatos($Usuario1);
    $resultadoConsulta = $Usuario1->ConsultarDatos();


    if ($resultado) {
        echo "Artista insertado correctamente.";
    } else {
        echo "Hubo un error al insertar el artista.";
    }
} else if (!empty($_POST['Actualizar'])) {
    $Nombre1 = $_POST['nombre'];
    $USUARIO2 = new Usuario($Nombre1, '', '');
    $Modificar = $USUARIO2->ActualizarDatos($USUARIO2);


    if ($Modificar) {
        echo "Se Actualizo Correctamente";
    } else {
        echo "Error al Actualizar";
    }
} else if (!empty($_POST['Eliminar'])) {
    $NombreEliminar = $_POST['nombre'];
    $Usuario3 = new Usuario($NombreEliminar, '', '');
    $Eliminar = $Usuario3->EliminarDatos($Usuario3);


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
            <td>Correo</td>
            <td>Contraseña</td>
            <td>Actualizar</td>
            <td>Eliminar</td>
        </tr>
        <?php
        if (isset($resultadoConsulta)) {
            foreach ($resultadoConsulta as $resultado) {
        ?>
                <tr>
                    <td><?php echo $resultado['nombre']; ?></td>
                    <td><?php echo $resultado['correo']; ?></td>
                    <td><?php echo $resultado['contrasena']; ?></td>
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
