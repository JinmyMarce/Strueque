<?php


class Lugar
{
    private $Nombre;
    private $Direccion;
    private $Capacidad;


    private $Imagen;
    private $descripcion1;


    public function __construct($Nom1, $direc12, $cap, $imag, $Descripc)
    {
        $this->descripcion1 = $Descripc;
        $this->Imagen = $imag;
        $this->Nombre = $Nom1;
        $this->Direccion = $direc12;
        $this-> Capacidad = $cap;
    }


    public function __destruct()
    {


        $this->Nombre;
        $this->Direccion;
        $this-> Capacidad;
    }




    public function SetDescripcion($Descrip1)
    {
        $this->descripcion1 = $Descrip1;
    }


    public function GetDescripcioni()
    {
        return $this->descripcion1;
    }


    public function SetImagen1($imag1)
    {
        $this->Imagen = $imag1;
    }


    public function GetImagen()
    {
        return $this->Imagen;
    }


    public function SetNombre($nom10)
    {
        $this->Nombre = $nom10;
    }


    public function GetNombre()
    {
        return $this->Nombre;


    }


    public function SetDireccion($direc100)
    {
        $this->Direccion = $direc100;
    }


    public function GetDireccion()
    {
        return $this->Direccion;
    }


    public function SetCapacidad($cap)
    {
        $this->Capacidad = $cap;
    }


    public function GetCapacidad()
    {
        return $this->Capacidad;
    }


    public function __tostring()
    {
        return $this->Nombre . $this->Direccion . $this->Capacidad;
    }




    public function InsertarLugar(Lugar $lug)
    {
        $connec1209 = new mysqli('localhost', 'root', '', 'venta_boletos');
        $sql1000 = "INSERT INTO lugar(nombre , direccion , capacidad , imagen , descripcion)
VALUES('{$lug->GetNombre()}' , '{$lug->GetDireccion()}' , {$lug->GetCapacidad()} , '{$lug->GetImagen()}' , '{$lug->GetDescripcioni()}');";


        $consul1000 = mysqli_query($connec1209, $sql1000);
        return $consul1000;
    }


    public function ActualizarLugar(Lugar $lug1)
    {
        $connec1209 = new mysqli('localhost', 'root', '', 'venta_boletos');


        $sql1100 = "UPDATE lugar set nombre = {$lug1->GetNombre()}";


        $consul1100 = mysqli_query($connec1209, $sql1100);
        return $consul1100;
    }


    public function EliminarLugar(Lugar $lug2)
    {


        $connec1209 = new mysqli('localhost', 'root', '', 'venta_boletos');
        $sql1500 = "DELETE FROM lugar where nombre = '{$lug2->GetNombre()}';";


        $consul1500 = mysqli_query($connec1209, $sql1500);
        return $consul1500;
    }


    public function ConsulLugar()
    {
        $connec1209 = new mysqli('localhost', 'root', '', 'venta_boletos');
        $sql2000 = 'SELECT * FROM lugar';


        $consul2000 = mysqli_query($connec1209, $sql2000);
        return $consul2000;
    }
}
