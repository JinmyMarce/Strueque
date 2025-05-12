<?php

$conex = new mysql('localhost', 'root', '', 'Venta_Boletos');


if ($conex == true) {
    echo 'Conectado';
} else {
    echo 'ERROR';
}
