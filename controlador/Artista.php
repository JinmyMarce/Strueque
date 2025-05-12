<?php


class Artista {


    private $Nombre_Arti;
    private $Descripcion;


    private $Imagen;
   
    public function __construct($Nom_arti , $Descri , $Ima) {


$this->Nombre_Arti = $Nom_arti;
$this->Descripcion = $Descri;
$this->Imagen = $Ima;


    }
    public function SetNombre($Nombre1) {
        $this->Nombre_Arti = $Nombre1;


    }


    public function GetNombre() {
        return $this->Nombre_Arti;
    }
    public function SetDescripcion($Descripcion1) {
        $this->Descripcion = $Descripcion1;
    }
public function getDescripcion() {
    return $this->Descripcion;
}
public function SetImagen($thisImagen1) {
    $this->Imagen = $thisImagen1;
}
public function getImagen() {
    return $this->Imagen;
}
public function __destruct() {
    $this->Nombre_Arti;
    $this->Descripcion;
    $this->Imagen;
}
public function __toString() {


return $this -> Nombre_Arti . $this->Descripcion.$this->Imagen;
}
public function InsertarArtistas(Artista $Artis) {
    $conn = new mysqli("localhost" , "root" , "" , "venta_boletos");
    $sql = "INSERT INTO artista(nombre, descripcion, imagen)
            VALUES ('{$Artis->GetNombre()}', '{$Artis->getDescripcion()}', '{$Artis->getImagen()}')";
    $consul = mysqli_query($conn , $sql); // Pasar el objeto de conexión como primer argumento
    return $consul;
}
public function ActualizarArtistas(Artista $Artis1) {
    $conn = new mysqli("localhost" , "root" , "" , "venta_boletos");
$sql1 = "UPDATE artista set nombre = '{$Artis1->GetNombre()}';";
$consul1 = mysqli_query($conn , $sql1);


return $consul1;


}


public function EliminarArtistas(Artista $Artis2) {


    $conn = new mysqli("localhost" , "root" , "" , "venta_boletos");
$sql2 = "DELETE FROM artista where nombre = '{$Artis2->GetNombre()}';";


$consul2 = mysqli_query($conn , $sql2);


return $consul2;


}


public function ConsultarArtista() {


    $conn = new mysqli("localhost" , "root" , "" , "venta_boletos");
    $sql3 = "SELECT * FROM artista;";


    $consul3 = mysqli_query($conn , $sql3);
   
    return $consul3;
}
}
?>
