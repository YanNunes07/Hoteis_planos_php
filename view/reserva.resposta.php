<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Exercicios 02</title>
</head>

<body>

    <header>
        <nav class="menu">
            <div class="nav-wrapper">
                <a href="../index.php" class="brand-logo">Hoteis Alibaba</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="../index.php">Sobre</a></li>
                    <li><a href="../view/reserva.test.php">Diarias</a></li>

                </ul>
            </div>
        </nav>
    </header>
    <section class="conteudo">
        <div class="container7">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Valores</span>
                            <h5>Suíte Double Master: R$ 150,00 a diária.</h5>
                            <h5>Suíte Família: R$ 180,00 a diária.</h5>
                            <h5>Suíte Single: R$ 100,00 a diária.</h5>
                        </div>

                    </div>
                </div>
            </div>

            <?php

            include "../model/reseva.class.php";

            $reser = new Reserva;

            $reser->setNome($_POST["txtnome"]);
            $reser->setEmail($_POST["txtemail"]);
            $reser->setIdade($_POST["txtidade"]);
            $reser->setTelefone($_POST["txtfone"]);
            $reser->setRG($_POST["txtrg"]);
            $reser->setDiaria($_POST["txtdias"]);
            $reser->setRG($_POST["txtrg"]);
            



            echo "Plano" . $reser->__toString();
            ?>

    </section>
    <footer class="page-footer" style="background-color: black;">
        <div class="container1">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Alibaba Hoteis</h5>
                </div>
                <div class="col l4 offset-l2 s12">

                </div>
            </div>
        </div>
        <div class="footer-copyright" style="background-color: rgb(97, 97, 97);">
            <div class="container">
                © 2022 Web PHP
                <a class="grey-text text-lighten-4 right"></a>
            </div>
        </div>
    </footer>
</body>

</html>