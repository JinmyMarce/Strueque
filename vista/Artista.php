<!DOCTYPE html>
<html>
<head>
    <title>Registro de Artista</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('https://www.tuexperto.com/wp-content/uploads/2022/02/50-fondos-de-pantalla-para-pc-con-windows-10-o-11-00.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }


        h2 {
            text-align: center;
            color: #007bff;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            font-size: 24px;
        }


        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
            color: #333;
        }


        input[type="text"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }


        textarea {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: none;
        }


        input[type="submit"] {
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 15px 20px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
            width: 100%;
            margin-top: 10px;
            display: block;
        }


        input[type="submit"]:hover {
            background: #0056b3;
        }


        .btn-group {
            margin-top: 20px;
            text-align: center;
        }


        .btn-group a {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 15px 30px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            margin-right: 10px;
            transition: background 0.3s;
        }


        .btn-group a:hover {
            background-color: #0056b3;
        }
    </style>


</head>
<body>
    <div class="container">
        <h2>Registro de Artista</h2>
        <form method="post" action="" enctype="multipart/form-data" >
            <label for="nombre">Nombre del Artista:</label>
            <input type="text" name="nombre" required>


            <label for="descripcion">Descripci�n:</label>
            <textarea name="descripcion"></textarea>


            <label for="imagen">Subir Imagen:</label>
            <input type="file" name="imagen" accept="image/*">


            <input type="submit"  name="Regis" value="Registrar">
        </form>
        <?php       
        include('../CONTROLADOR/conArtista.php');


        ?>    
    </div>
</body>
</html>
