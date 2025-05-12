<?php


require('../MODELO/Evento_Arista.php');
require('../MODELO/Evento.php');
require('../MODELO/Artista.php');


if (!empty($_POST['Asociar'])) {
    $Evento1 = $_POST['evento'];
    $Artista1 = $_POST['artista'];
   
    $Even_Artis = new Evento_Arista($Evento1 , $Artista1);
    $Atista3 = new Evento($Evento1 , '' , '' ,'' ,'' , '');
    $Evevnto3 = new Artista($Artista1 , '' , '');


    $Resul_Inser = $Even_Artis->InsertarEventoArti($Even_Artis);
    $resultado12 = $Even_Artis->ConsultarEventoArti();
    $mostrarEvento = $Even_Artis->ConsultarSegunOpcion1($Evevnto3);
    $mostrarArtista = $Even_Artis->ConsultarSegunOpcion2($Atista3);
   
    if ($Resul_Inser) {
        echo "Artista insertado correctamente.";
    } else {
        echo "Hubo un error al insertar el artista.";
    }
}
?>


<form action="" method="post">
    <table border="0" cellpadding="0">
        <tr>
            <td>Codigo Evento</td>
            <td>Codigo Artista</td>
           
        </tr>
        <?php
        if (isset($resultado12)) {
            foreach ($resultado12 as $resultado100) {
        ?>
                <tr>
                    <td><?php echo $resultado100['evento_id']; ?></td>
                    <td><?php echo $resultado100['artista_id']; ?></td>
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
