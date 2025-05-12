<?php
class Boleto {


private $Tipo;
private $Precio;
private $Cantidad_Dispo;


public function __construct($tip , $preci , $canti) {


$this->Tipo = $tip;
$this->Precio = $preci;
$this->Cantidad_Dispo =$canti;
}
public function SetTipo($tip) {
    $this->Tipo = $tip;
}
public function GetTipo() {
return $this->Tipo;
}
public function SetPrecio($Preci) {
$this->Precio = $Preci;
}
public function GetPrecio() {
return $this->Precio;
}
public function SetCanti($canti) {


$this->Cantidad_Dispo = $canti;
}
public function GetCanti() {


return $this->Cantidad_Dispo;
}
public function __destruct() {


    $this->Tipo;
    $this->Precio;
    $this->Cantidad_Dispo;
}


public function __toString() {
    return $this->Tipo . $this->Precio . $this->Cantidad_Dispo;
}
public function InsertarBoleto(Boleto $Bole) {
    $connect = new mysqli("localhost" , "root" , "" , "venta_boletos");


$sql6 = "INSERT INTO Boleto(tipo , precio , cantidad_disponible)
VALUES('{$Bole ->GetTipo()}' , {$Bole ->GetPrecio()} , {$Bole->GetCanti()});";


$consul6 = mysqli_query($connect , $sql6);
return $consul6;
}
public function ActualizarBoleta(Boleto $Bole1) {


    $connect = new mysqli("localhost" , "root" , "" , "venta_boletos");


$sql8 ="UPDATE Boleta set tipo = '{$Bole1->GetTipo()}';";


$consul8 = mysqli_query($connect , $sql8);
return $consul8;


}
public function ConsultarBoleta() {


    $connect = new mysqli("localhost" , "root" , "" , "venta_boletos");
$sql11 = "SELECT * FROM Boleta;";


$consul11 = mysqli_query($connect , $sql11);


return $consul11;
}
}
?>
