<?php

    if(isset($_POST['enviar'])){

        $nombre         = $_POST["nombre"];
        $asunto         = $_POST["asunto"]=;
        $email          = $_POST["email"];
        $descripcion    = $_POST["descripcion"];

    }






?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Uinik - Desarrollo de aplicaciones</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles  -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="css/uinik.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="css/animate.min.css">

</head>

<body>

<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand">
            <a href="#top"  onclick = $("#menu-close").click(); >Uinik</a>
        </li>
        <li>
            <a href="#top" onclick = $("#menu-close").click(); >Home</a>
        </li>
        <li>
            <a href="#about" onclick = $("#menu-close").click(); >Nosotros</a>
        </li>
        <li>
            <a href="#services" onclick = $("#menu-close").click(); >Servicios</a>
        </li>
        <li>
            <a href="#process" onclick = $("#menu-close").click(); >Metodología</a>
        </li>
        <li>
            <a href="#contact" onclick = $("#menu-close").click(); >Contacto</a>
        </li>
    </ul>
</nav>

<header id="top" class="header">
    <div class="text-vertical-center">
        <h1 class="blue-1-f "><img class="animated fadeInDownBig" src="img/logo.transparent.png" alt="" width=""/></h1>
        <h3 class="animated fadeInDownBig">Somos Uinik, y hacemos Aplicaciones Tecnológicas</h3>
        <br>
        <a href="#about" class="btn btn-dark btn-lg animated fadeInDownBig">Saber Más</a>
    </div>
</header>

<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <h2>Uinik</h2>
                <hr class="small black">
                <p class="lead">

                    UINIK, es una empresa de consultoría en tecnologías de información, capacitación y
                    desarrollo de aplicaciones móviles y sistemas web,
                    con un enfoque de soluciones a la medida de cada cliente.
                    Basados en la metodología SCRUM desarrollamos proyectos de manera eficiente.

                    Nuestro equipo de trabajo conformado por los más creativos y apasionados programadores
                    es nuestra garantía de satisfacción para usted.
                </p>

                <!--<div class="row">
                    <div class="col-md-6 col-xs-12">
                        <h3>Misión</h3>
                        <p class="lead">

                        </p>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <h3>Visión</h3>
                        <p class="lead">

                        </p>
                    </div>
                </div>-->

                <h3>Nuestros ingenieros</h3>
                <p class="lead">

                    Los ingenieros y creativos que laboran con <strong>Uinik</strong> son profesionales
                    con más de 9 años de experiencia en la industria tecnológica creando diferentes proyectos
                    y cuentan con certificaciones que los avalan como expertos en su campo.
                    Algunas de las certificaciones que poseen son las siguientes:

                    <div class="row cert-logos">
                        <div class="col-md-4 col-md-offset-1 col-sm-12 col-xs-12">
                            <img src="img/cert-php-mcp.jpg" title="Microsoft Certified Professional & PHP Zend Certifies Engineer" alt="Microsoft Certified Professional & PHP Zend Certifies Engineer" class="img-responsive img-rounded">
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <img src="img/cert-scrum.png" title="Certified Scrum Master & Certified Scrum Developer" alt="Certified Scrum Master & Certified Scrum Developer" class="img-responsive img-rounded" style="">
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-6">
                            <img src="img/cert-adobe.png" title="Adobe Certified Associate" alt="Adobe Certified Associate" class="img-responsive img-rounded">
                        </div>
                        <div class="col-md-1">
                            &nbsp;
                        </div>
                    </div>



                </p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Services -->
<!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
<section id="services" class="services">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 col-lg-offset-1">
                <h2>Nuestros servicios</h2>


                <hr class="small">

                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6" >
                        <div class="service-item">
                            <span class="fa-stack fa-5x">
                                <i class="fa fa-circle fa-4x fa-stack-2x"></i>
                                <i class="fa fa-mobile fa-stack-1x blue-3-f uinik-service-icon service-icon"></i>
                            </span>
                            <h4>
                                <strong>Desarrollo Móvil</strong>
                            </h4>
                            <p>Desarrollo de aplicaciones para iPhone, iPad, Android, híbridas.</p>
                            <a href="#contact" class="btn btn-light" >Saber más</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="service-item">
                            <span class="fa-stack fa-5x">
                                <i class="fa fa-circle fa-4x fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-2x fa-stack-1x blue-3-f uinik-service-icon service-icon-2"></i>
                            </span>
                            <h4>
                                <strong>Desarrollo Web</strong>
                            </h4>
                            <p>Aplicaciones en la nube, on site siempre de alta disponibilidad.</p>
                            <a href="#contact" class="btn btn-light" >Saber más</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="service-item">
                            <span class="fa-stack fa-5x">
                                <i class="fa fa-circle fa-4x fa-stack-2x"></i>
                                <i class="fa fa-bar-chart fa-stack-1x blue-3-f uinik-service-icon service-icon-"></i>
                            </span>
                            <h4>
                                <strong>Business Inteligence </strong>
                            </h4>
                            <p>Tableros de gestión para la toma correcta de deciciones.</p>
                            <a href="#contact" class="btn btn-light" >Saber más</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="service-item">
                            <span class="fa-stack fa-5x">
                                <i class="fa fa-circle fa-4x fa-stack-2x"></i>
                                <i class="fa fa-desktop fa-stack-1x blue-3-f uinik-service-icon service-icon-"></i>
                            </span>
                            <h4>
                                <strong>Desarrollo de Escritorio</strong>
                            </h4>
                            <p>Aplicaciones de escritorio a la medida.</p>
                            <a href="#contact" class="btn btn-light" >Saber más</a>
                        </div>
                    </div>
                </div>


                <!-- /.row (nested) -->
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>


<section id="process" class="section text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">

                <h2 class="">Metodología</h2>
                <hr class="small">
                <br>
                <p class="lead">
                    Nuestro principal marco de trabajo para desarrollo es Scrum. Scrum es un
                    framework de desarrollo ágil probado y robusto que ofrece flexibilidad en cambios en el producto,
                    mayor calidad del software y una mayor productividad en el desarrollo del producto final.
                    Nosotros generalmente hacemos sprints de 2 y 4 semanas y contamos con scrums masters capacitados,
                    por lo que garantizamos la ejecución de todo el proceso siguiendo las buenas prácticas.
                </p>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">

                <img src="img/scrum-mod.png" class="img-responsive"  alt="">
            </div>
        </div>

        <div class="row">
            <br>
            <div class="col-lg-12 ">

                <p class="lead">
                    Aunque nuestra metodólogía por preferencia es Scrum, nos ajustamos a requerimientos del cliente,
                    por lo que somos capaces de adaptarnos a distintos entornos de trabajo.
                </p>

            </div>
        </div>

    </div>
</section>


<section id="contact" class="section">

    <div class="container">

        <div class="row">
            <div class="col-lg-12">

                <h2 class="">Contacto</h2>
                <hr class="small">

                <p class="lead">
                    Rellena el siguiente formulario o mándanos un email a <a href="mailto:info@uinik.com">info@uinik.com</a>.
                    Nos comunicaremos a la brevedad posible.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 ">


                <form method="post" action="index.php">
                    <div class="form-group">
                        <input required type="text" min class="form-control" name="nombre" id="contacto-nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input required type="text" class="form-control" name="asunto" id="contacto-asunto" placeholder="Asunto">
                    </div>
                    <div class="form-group">
                        <input required type="email" class="form-control" name="email" id="contacto-email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea style="resize: none;" rows="3" class="form-control" name="descripcion" id="contacto-descripcion" placeholder="Descripión" ></textarea>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <button type="submit" name="enviar" class="btn btn-success btn-lg btn-block">Enviar</button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h4><strong>Uinik</strong></h4>
                <p>Barranco Sur 209 AltosCol. Santa Amalia<br> Comcalcalco, Tabasco, México. CP. 86370</p>
                <ul class="list-unstyled">
                    <!--<li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>-->
                    <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:info@uinik.com">info@uinik.com</a>
                    </li>
                </ul>
                <br>
                <!--<ul class="list-inline">-->
                    <!--<li>-->
                        <!--<a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>-->
                    <!--</li>-->
                <!--</ul>-->
                <hr class="small">
                <p class="text-muted">Copyright &copy; Uinik.com <?php echo date("Y") ?></p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {

        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });


        $(".service-item").hover(function(){
            $icon = $(this).find(".uinik-service-icon");
            $icon.toggleClass("animated bounceIn");
        });

        $('.uinik-tabsx a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })



    });
</script>

</body>
</html>
