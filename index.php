<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--- Bootstrap --->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--- FontAwesome --->
    <script src="https://kit.fontawesome.com/ef94dd43d5.js"></script>

    <!--- Style.css --->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <!--- Navbar --->
    <nav class="navbar navbar-default" id="principal-navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">BajaXsports</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="#">Can-am</a></li>
                <li><a href="#"></a></li>
                <li><a href="#">Cotizacion</a></li>
                <li><a href="#">Mantenimiento</a></li>
                <li><a href="#">Accesorios/Refacciones</a></li>
            </ul>
        </div>
    </nav>

    <!--- Header --->
    <div class="container-fluid" id="header">
        <div class="welcome-message">
            <h4>Bienvenido al 2020</h4>
            <h2>Estamos hechos para esto</h2>
        </div>
    </div>

    <!--- Introduction --->
    <div class="container-fluid" id="introduction">
        <p>Aventura, desempeño y trabajo. Es aqui donde nos destacamos.</p>
        <h2>Somos BajaXsports</h2>
        <p>Estas listo para esto? Estamos listos para ti: de las dunas a los cultivos, de los senderos lodosos a las tormentas de nieve, no hay limite para tu aventura con can-am, asi que empieza a explorar </p>
    </div>

    <!--- Categories --->
    <div class="container-fluid" id="categories">
        <h2>Que terreno vas a dominar?</h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="assets/img/Modelos/ATV/DS90.png" alt="ATV">
                        <div class="caption">
                            <p>ATV</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="assets/img/Modelos/Side-By-Side/Maverick X3 MAX X RS Turbo RR.png" alt="Side By Side">
                        <div class="caption">
                            <p>Side By Side</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="assets/img/Modelos/On-Road/Ryker.png" alt="On Road">
                        <div class="caption">
                            <p>On Road</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="assets/img/Modelos/Sea-Doo/Fish Pro.png" alt="Sea Doo">
                        <div class="caption">
                            <p>Sea Doo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- location --->
    <div class="container" id="location">
        <h2>Ubicaciones</h2>
        <div class="row">
            <div class="col-sm-6">
                <p>Tijuana</p>
                <img src="assets/img/tijuana-map.png" alt="Mapa Tijuana">
            </div>
            <div class="col-sm-6">
                <p>Mexicali</p>
                <img src="assets/img/mexicali-map.png" alt="Mapa Mexicali">
            </div>
        </div>
        <div class="info-location">
        <i class="fas fa-map-marker-alt"></i> <p>Tijuana &nbsp; Plaza Mundo Divertido: Via rapida poniente #15035 Fracc. San jose 2Da. Etapa Río Tijuana B.C.</p>
                                              <p>Mexicali &nbsp; Blvrd Lázaro Cárdenas 1307, Col del rastro, 21090 Mexicali, B.C.</p>

        <i class="fas fa-phone-alt"></i> <p>TLJ (664) 607 2727 <span>|</span> MXLI (686) 488 7373</p>

        <i class="fas fa-envelope"></i><p>info@bajaxsports.com</p><p>Siguenos en</p><a href="#" class="btn btn-primary"><i class="fab fa-facebook-f"></i></a><a href="#" class="btn btn-primary"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <!--- pictures above footer --->
    <div class="container-fluid">
        <div class="row">
           <img src="assets/img/pasarela/image1.png" alt="">
           <img src="assets/img/pasarela/image2.png" alt="">
           <img src="assets/img/pasarela/image3.png" alt="">
           <img src="assets/img/pasarela/image4.png" alt="">
        </div>
    </div>

    <!--- Footer --->
    <footer class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="assets/img/logo.png" alt="logo">
            </div>
            <div class="col-md-8">
                <div class="links-1">
                    <a href="#">Cotizacion</a> 
                    <a href="#">Mantenimiento</a> 
                    <a href="#">Accesorios/Refacciones</a>
                </div>
                <div class="links-2">
                    <a href="#">ATV</a>
                    <a href="#">Side-By-Side</a>
                    <a href="#">On-Road</a>
                    <a href="#">Sea-Doo</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>