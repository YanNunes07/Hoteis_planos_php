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
                    <li><a href="/view/reserva.test.php">Diarias</a></li>

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
            <div class="row">
                <form class="col s12" action="./reserva.resposta.php" method="POST">
                    <div class="row 12">
                        <div class="input-field col s12">
                            <p>Digite seu nome: </p>
                            <input placeholder="Nome:" name="txtnome" type="text" class="validate">

                        </div>
                        <div class="input-field col s12">
                            <p>Digite seu rg: </p>
                            <input placeholder="RG:" name="txtrg" type="number" class="validate">

                        </div>
                        <div class="input-field col s12">
                            <p>Digite seu email: </p>
                            <input placeholder="email:" name="txtemail" type="email" class="validate">

                        </div>
                        <div class="input-field col s12">
                            <p>Digite sua idade: </p>
                            <input placeholder="idade:" name="txtidade" type="number" class="validate">

                        </div>
                        <div class="input-field col s12">
                            <p>Digite seu telefone:</p>
                            <input placeholder="Telefone:" name="txtfone" type="number" class="validate">

                        </div>
                        <div class="input-field col s12">
                            <p>Digite a quantidade de dias:</p>
                            <input placeholder="Quantidade de dias:" name="txtdias" type="number" class="validate">

                        </div>
                        <label>Selecione sua Suíte</label>
                        <select class="browser-default" name="txtplano">
                            <option value="" disabled selected>Planos </option>
                            <option value="1" >Suíte Double Master </option>
                            <option value="2">Suíte Família </option>
                            <option value="3">Suíte Single </option>
                        </select>
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

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

    <script type="text/javascript" src="js/materialize.min.js"></script>

</body>

</html>