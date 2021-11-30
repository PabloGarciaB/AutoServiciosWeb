<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=.container">
    <link rel="stylesheet" href="navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Menu Principal</title>
    <style>

    </style>
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
    </nav>
    <div class="container">
        <h1 style="color: white; font-family:'Times New Roman', Times, serif; text-align: center;">Bienvenido alumno!</h1>
    </div>
    <div class="container">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="img/mapa1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Mapa grafico página 1</h3>
                        <p >Materias que cursaras de acuerdo al progreso en la carrera</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/mapa2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Mapa grafico optativas</h3>
                        <p>Materias optativas y DESIT, consulta oferta academica.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <script src="main.js" charset="utf-8"></script>

</body>

</html>