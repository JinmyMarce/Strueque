<?php


class Usuario
{
    private $Nombre_Usu;
    private $Correo;
    private $Contrasena;


    public function __construct($Nom50, $Corr, $contra)
    {


        $this->Nombre_Usu = $Nom50;
        $this->Correo = $Corr;
        $this->Contrasena = $contra;
    }


    public function SetNombre($nomD)
    {
        $this->Nombre_Usu = $nomD;
    }


    public function GetNombre()
    {
        return $this->Nombre_Usu;
    }


    public function SetCorreo($correo1)
    {
        $this->Correo = $correo1;
    }


    public function GetCorreo()
    {
        return $this->Correo;
    }




    public function SetContrasena($contra12)
    {
        $this->Contrasena = $contra12;
    }


    public function GetContrasena()
    {
        return $this->Contrasena;
    }


    public function __destruct()
    {
        $this->Nombre_Usu;
        $this->Correo;
        $this->Contrasena;
    }


    public function __tostring()
    {


        return
        $this->Nombre_Usu.
        $this->Correo.
        $this->Contrasena;
    }


    public function InsertarDatos(Usuario $usu1)
    {


        $connec1 = new mysqli('localhost', 'root', '', 'venta_boletos');
        $sql560 = "INSERT into usuario(nombre , correo , contrasena)
VALUES('{$usu1->GetNombre()}' , '{$usu1->GetCorreo()}' , '{$usu1->GetContrasena()}');";


        $consul560 = mysqli_query($connec1, $sql560);
        return $consul560;
    }


    public function ActualizarDatos(Usuario $usu2)
    {
        $connec1 = new mysqli('localhost', 'root', '', 'venta_boletos');


        $sql1000000 = "UPDATE usuario set nombre = '{$usu2->GetNombre()}'";


        $consul1100000 = mysqli_query($connec1, $sql1000000);
        return $consul1100000;
    }


    public function EliminarDatos(Usuario $usu3)
    {


        $connec1 = new mysqli('localhost', 'root', '', 'venta_boletos');
        $sql1555 = "DELETE FROM usuario where nombre = '{$usu3->GetNombre()}'";


        $consul1555 = mysqli_query($connec1, $sql1555);
        return $consul1555;
    }


    public function ConsultarDatos()
    {


        $connec1 = new mysqli('localhost', 'root', '', 'venta_boletos');
        $sqlN = 'SELECT  * FROM usuario';


        $ConsulN = mysqli_query($connec1, $sqlN);
        return $ConsulN;
    }
}
