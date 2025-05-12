<?php


require('../MODELO/Evento.php');
require('../MODELO/Artista.php');


class Evento_Arista {


private $Evento_id;
private $Artista_id;


public function __construct($even , $artis) {
    $this->Evento_id = $even;
    $this->Artista_id = $artis;
}


public function SetEvento_id($eve) {


    $this->Evento_id = $eve;
}




public function GetEvento_id() {
    return $this->Evento_id;
}


public function SetArtista_id($Artis100) {
    $this->Artista_id = $Artis100;
}


public function GetArtista_id() {


return $this->Artista_id;
}


public function __destruct() {


    $this->Evento_id;
    $this->Artista_id;
}


public function __toString() {
return $this->Evento_id . $this->Artista_id;


}


public function InsertarEventoArti(Evento_Arista $Even_Arti) {
    $connec23 = new mysqli("localhost" , "root" , "" , "venta_boletos");
    $sql12345678 = "INSERT INTO evento_artista values({$Even_Arti -> GetEvento_id()} , {$Even_Arti ->GetArtista_id()})";
    $Consul12345678 = mysqli_query($connec23 , $sql12345678);
    return $Consul12345678; 
}
public function ConsultarEventoArti() {
    $connec23 = new mysqli("localhost" , "root" , "" , "venta_boletos");
$sql100 = "SELECT * FROM Evento_Artista;";
$consul100 = mysqli_query($connec23 , $sql100);
return $consul100;
}


public function ConsultarSegunOpcion1(Artista $artista1) {


    $connec23 = new mysqli("localhost" , "root" , "" , "venta_boletos");


    $sql34583947 = "SELECT * FROM Evento_Artista
    inner join Evento on Evento_Artista.id_evento = Evento.id_evento
    inner join Artista on Evento_Artista.id_artista = Artista.id_artista
    where nombre = '{$artista1->GetNombre()}';";


    $consul5345893453 = mysqli_query($connec23 , $sql34583947);
    return $consul5345893453;


}


public function ConsultarSegunOpcion2(Evento $evento1) {


    $connec23 = new mysqli("localhost" , "root" , "" , "venta_boletos");


    $sqlL = "SELECT * FROM Evento_Artista
    inner join Evento on Evento_Artista.id_evento = Evento.id_evento
    inner join Artista on Evento_Artista.id_artista = Artista.id_artista
    where nombre = '{$evento1->GetNombre()}';";


    $consulP = mysqli_query($connec23 , $sqlL);
    return $consulP;
}
}
?>
