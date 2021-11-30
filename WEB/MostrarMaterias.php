<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=.container">
    <link rel="stylesheet" href="navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        table {
            width: 100%;
            border: 1px solid #000;
            margin: 70px auto;
            padding: 50px;
        }

        th,
        td {
            width: 25%;
            text-align: left;
            vertical-align: top;
            border: 1px solid #000;
            border-collapse: collapse;
            padding: 0.3em;
        }

        caption {
            padding: 0.3em;
        }

        body {
            font-family: "Poppins", sans-serif;
            height: 100vh;
            background-color: #0F1926;
        }

        a {
            color: #92badd;
            display: inline-block;
            text-decoration: none;
            font-weight: 400;
        }

        h1 {
            color: white;
            text-align: center;
            font-size: 3em;
            left: 50%;
            top: 100%;
            font-family: "Times New Roman", Times, serif;
            position: absolute;
            left: 1%;
            top: 10%;
        }

        h2 {
            text-align: center;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            display: inline-block;
            margin: 40px 8px 10px 8px;
            color: #cccccc;
        }

        table {
            color: white;
        }
    </style>
    <title>Menu Principal</title>
</head>

<body style="font-family: 'Times New Roman', Times, serif; background-color: #0F1926">
            <nav class="navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" style="color: white;">
                        <img src="img/itiservice.jpg" alt="" width="180" height="150" class="d-inline-block align-text-top">
                    </a>
                    <a class="navbar-brand" style="color: white;" href="home.php">
                        Inicio
                    </a>
                    <a class="navbar-brand" style="color: white;" href="MostrarMaterias.php">
                        Materias
                    </a>
                    <a class="navbar-brand" style="color: white;" href="ProyeccionMaterias.php">
                        Proyeccion de materias
                    </a>
                </div>
                <div class="container mx-auto" style="width: 800px;">
                    <div class="row">
                        <h1>Materias del alumno</h1>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <br><br><br>
                            <h2>Materias aprobadas</h2>
                            <table style="text-align:center">
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Creditos</th>
                                </tr>
                                <?php
                                $conn = mysqli_connect("localhost", "root", "", "itiservice");
                                if ($conn) {

                                    $consulta = "SELECT * FROM materia ORDER BY Codigo DESC LIMIT 5,20";

                                    $datos = mysqli_query($conn, $consulta);
                                    while ($fila = mysqli_fetch_assoc($datos)) {
                                        echo "<tr>";
                                        echo "<td>";
                                        echo $fila["Codigo"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $fila["Nombre"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $fila["Creditos"];
                                        echo "</td>";
                                        echo "<tr>";
                                    }
                                } else {
                                    echo "<p> MySQL no conoce ese usuario y password</p>";
                                }

                                ?>
                            </table>
                        </div>
                        <div class="col-sm">
                            <br><br><br>
                            <h2>Materias cursando</h2>
                            <table style="text-align:center">
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Creditos</th>
                                </tr>
                                <?php
                                $conn = mysqli_connect("localhost", "root", "", "itiservice");
                                if ($conn) {

                                    $consulta = "SELECT * FROM materia ORDER BY Codigo DESC LIMIT 5";

                                    $datos = mysqli_query($conn, $consulta);
                                    while ($fila = mysqli_fetch_assoc($datos)) {
                                        echo "<tr>";
                                        echo "<td>";
                                        echo $fila["Codigo"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $fila["Nombre"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $fila["Creditos"];
                                        echo "</td>";
                                        echo "<tr>";
                                    }
                                } else {
                                    echo "<p> MySQL no conoce ese usuario y password</p>";
                                }

                                ?>
                            </table>
                        </div>
                    </div>
                </div>
                <script src="main.js" charset="utf-8"></script>
</body>