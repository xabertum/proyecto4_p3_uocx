<?php
include '../../datos/conexion.php';

$cnx = Conexion::conectar();
$id_news = $_GET['nid'];

$query = "SELECT * FROM noticias_publicadas WHERE id = '$id_news'";

$resultado = $cnx->query($query);

$noticias = $resultado->fetchAll(PDO::FETCH_ASSOC);

?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>World News - Homepage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/bootstrap-grid.css" rel="stylesheet">
        <link href="../css/bootstrap-reboot.css" rel="stylesheet">

        <!-- Custom CSS Stylesheets -->
        <link href="../css/index-style.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/news-style.css">
        <link rel="stylesheet" href="css/overhang.css">
    </head>

    <body>

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="../index.php">World News</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active li-sign-in">
                            <a class="nav-link" href="cerrar-sesion.php">
                                <img class="icon-position" src="../img/exit_delete_close_remove_door-48.png" height="24px" alt="Sign-In Icon">
                                <span id="sign-position">Sign in</span>
                            </a>
                        </li>

                        <li class="nav-item active li-wrapper li-color-1">
                            <a class="nav-link" href="">
                                <span>Home</span>
                            </a>
                        </li>

                        <li class="nav-item active li-wrapper">
                            <a class="nav-link" href="">
                                <span>News</span>
                            </a>
                        </li>

                        <li class="nav-item active li-wrapper">
                            <a class="nav-link" href="">
                                <span>Sports</span>
                            </a>
                        </li>

                        <li class="nav-item active li-wrapper">
                            <a class="nav-link" href="">
                                <span>Weather</span>
                            </a>
                        </li>

                        <li class="nav-item active li-wrapper">
                            <a class="nav-link" href="">
                                <span>Shop</span>
                            </a>
                        </li>

                        <li class="nav-item active li-wrapper">
                            <a class="nav-link" href="">
                                <span>Earth</span>
                            </a>
                        </li>

                        <li class="nav-item active li-wrapper">
                            <a class="nav-link" href="">
                                <span>Travel</span>
                            </a>
                        </li>

                        <li class="nav-item active li-wrapper">
                            <a class="nav-link" href="">
                                <span>Capital</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- NEWS -->

        <div class="container">
            <div class="wrapper-news">
                <header>
                    <h2 id="titulo"><?php echo $noticias[0]['titulo'] ?></h2>
                    <h4><?php echo $noticias[0]['subtitulo'] ?></h4>
                    <div class="fecha">
                        <i class="fas fa-paragraph icon-color"></i>
                        <span>By <?php echo $noticias[0]['autor'] ?></span>

                        <i class="fas fa-clock icon-color"></i>
                        <span><?php echo $noticias[0]['fecha'] ?></span>
                    </div>
                </header>

                <div>
                    <div class="container-news">
                        <div>
                            <p id="editor1" class="news-text"><?php echo $noticias[0]['texto'] ?></p>
                        </div>

                        <div>
                            <p id="editor2" class="news-text"><?php echo $noticias[0]['texto_2'] ?></p>
                        </div>

                        <div class="img-padding-top">
                            <img class="img-fluid" src="<?php echo $noticias[0]['imagen'] ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- FOOTER -->

        <footer>

            <div class="container-fluid">
                <div class="container">
                    <div class="row">

                        <div class="col-3">
                            <p>© World News, 2018</p>
                        </div>
                        <div class="col-3">

                            <ul class="footer-ul">
                                <li>About Us</li>
                                <li>Contact</li>
                                <li>Terms & Conditions</li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <ul class="footer-ul">
                                <li>
                                    <img src="img/Path 38.png" width="10" alt=""> Facebook </li>
                                <li>
                                    <img src="img/Path 39.png" width="10" alt=""> Twitter </li>
                                <li>
                                    <img src="img/Path 40.png" width="10" alt=""> Instagram </li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <form action="">
                                Subscribe to our newsletter
                                <input class="input-footer" type="text" placeholder="Email Address">
                                <button>OK</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </footer>


        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <!-- CDN's -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
            crossorigin="anonymous"></script>
        <script src="https://cdn.ckeditor.com/4.9.2/standard-all/ckeditor.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>

        <!-- CUSTOM SCRIPTS -->
        <script src="js/overhang.js"></script>
        <script src="js/app.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>

    </html>