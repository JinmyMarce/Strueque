
<?php
class Evento {
private $Nombre_eve;
private $Descripcion;
private $Fecha_Inicio;
private $Fecha_Fin;
private $Precio_Entrada;
private $ImagenA;


public function __construct($Nom_eve , $Descri , $Fech_Inicio , $fech_fin , $preci_entra , $imagen12) {


  $this->ImagenA = $imagen12;
$this->Nombre_eve = $Nom_eve;
$this->Descripcion = $Descri;
$this->Fecha_Inicio = $Fech_Inicio;
$this->Fecha_Fin = $fech_fin;
$this->Precio_Entrada = $preci_entra;
}


public function SetImag($Ima) {
$this->ImagenA = $Ima;
}


public function GetImag() {
return $this->ImagenA;
}


public function SetNombre($Nom1){


  $this->Nombre_eve = $Nom1;


}


public function GetNombre() {
return $this->Nombre_eve;
}
 
public function SetDescripcion($Descrip1) {


  $this->Descripcion = $Descrip1;
}


public function GetDescripcion() {
  return $this->Descripcion;
}


public function SetFecha_Ini($Fecha1) {
  $this->Fecha_Inicio = $Fecha1;
}


public function GetFecha_Ini() {


return $this->Fecha_Inicio;
}




public function SetFecha_fin($fec_fin) {
$this->Fecha_Fin = $fec_fin;
}


public function GetFecha_Fin() {
return $this->Fecha_Fin;
}


public function SetPreci($preci9) {
  $this->Precio_Entrada = $preci9;
}


public function GetPreci() {
return $this->Precio_Entrada;
}


public function __destruct() {


    $this->Nombre_eve;
    $this->Descripcion;
    $this->Fecha_Inicio;
    $this->Fecha_Fin;
    $this->Precio_Entrada;
}
public function __tostring() {
return $this->Nombre_eve.$this->Descripcion. $this->Fecha_Inicio. $this->Fecha_Fin . $this->Precio_Entrada;
}


public function InsertarEvento(Evento $eve1) {
  $connec34 = new mysqli("localhost" , "root" , "" , "venta_boletos");
$sql150 = "INSERT INTO evento(nombre , descripcion , fecha_inicio , fecha_fin , precio_entrada)
VALUES('{$eve1->GetNombre()}' , '{$eve1->GetDescripcion()}' , '{$eve1->GetFecha_Ini()}' , '{$eve1->GetFecha_Fin()}',
{$eve1->GetPreci()});";


$consul150 = mysqli_query($connec34 , $sql150);
return $consul150;


}


public function ActualizarEvento(Evento $eve2) {


  $connec34 = new mysqli("localhost" , "root" , "" , "venta_boletos");
$sql366 = "UPDATE evento set nombre = {$eve2->GetNombre()}";


$consul366 = mysqli_query($connec34 , $sql366);
return $consul366;
}


public function EliminarEvento(Evento $eve3) {


  $connec34 = new mysqli("localhost" , "root" , "" , "venta_boletos");
  $sql400 = "DELETE FROM evento where nombre = {$eve3->GetNombre()}";  


  $consul400 = mysqli_query($connec34 , $sql400);
  return $consul400;
}


public function ConsultarEvento() {


  $connec34 = new mysqli("localhost" , "root" , "" , "venta_boletos");
$sql7010 = "SELECT * FROM evento";


$consul7010 = mysqli_query($connec34 , $sql7010);
return $consul7010;
}
}
?>



