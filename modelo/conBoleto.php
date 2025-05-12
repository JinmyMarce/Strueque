<?php
require('../MODELO/Boleto.php');


error_reporting(0);


if (!empty($_POST['Regis1'])) {
    $Tipo1 = $_POST['tipo'];
    $Preci1 = $_POST['precio'];
    $Canti1 = $_POST['cantidad'];


    $Boletos1 = new Boleto($Tipo1, $Preci1, $Canti1);


    $rEGISTRO_bOLE = $Boletos1->InsertarBoleto($Boletos1);
    $CulBoleto = $Boletos1->ConsultarBoleta();


    if ($rEGISTRO_bOLE) {
        echo "Boletos Registrados";
    } else {
        echo "ERROR AL REGISTRAR";
    }
} else {
    echo "........................................";
}


if (!empty($_POST['Actualizar'])) {
    $Tipo2 = $_POST['tipo'];
    $Boletos2 = new Boleto($Tipo2, '', '');
    $Modificar12 = $Boletos2->ActualizarBoleta($Boletos2);


    if ($Modificar12) {
        echo "Se Actualizo Correctamente";
    } else {
        echo "Error al Actualizar";
    }
}
?>


<form action="" method="post">
    <table border="0" cellpadding="0">
        <tr>
           
            <td>Tipo</td>
            <td>Precio</td>
            <td>Cantidad Disponible</td>
            <td>ACTUALIZAR</td>
        </tr>
        <?php
        if (is_array($CulBoleto)) {
            foreach ($CulBoleto as $Boletos) {
        ?>
                <tr>
                   
                    <td><?php echo $Boletos['tipo']; ?></td>
                    <td><?php echo $Boletos['precio']; ?></td>
                    <td><?php echo $Boletos['cantidad_disponible']; ?></td>
                    <td><input type="submit" name="Actualizar" value="Actualizar"></td>
                    <input type="hidden" name="tipo" value="<?php echo $Boletos['tipo']; ?>">
                </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan='5'>No hay datos disponibles</td></tr>";
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
