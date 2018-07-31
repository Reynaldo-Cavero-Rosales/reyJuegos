<!--menu-->
<div class="barra-menu">
    <nav class="navbar navbar-default" role="navigation">
        <!-- El logotipo y el icono que despliega el menú se agrupan
para mostrarlos mejor en los dispositivos móviles -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-ex1-collapse">
                <span class="sr-only">Desplegar navegación</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="fondo-2">
                <picture>
                    <source media="(min-width:1024px)" srcset="<?php echo base_url; ?>assets/images/logo.png">
                    <source media="(min-width: 650px)" srcset="<?php echo base_url; ?>assets/images/logo-2.png">
                    <source media="(min-width: 320px)" srcset="<?php echo base_url; ?>assets/images/logo-1.png">
                    <img src="<?php echo base_url; ?>assets/images/logo.png" alt="" class="img-responsive">
                </picture>
            </div>
        </div>
        <!-- Agrupar los enlaces de navegación, los formularios y cualquier
otro elemento que se pueda ocultar al minimizar la barra -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="<?php echo base_url; ?>persona/index"><b>Inicio</b></a></li>
                <li><a href="<?php echo base_url; ?>persona/equipo"><b>Equipos celulares</b></a></li>
                <li class="dropdown">
                    <a href="<?php echo base_url; ?>persona/tiendas" class="dropdown-toggle" data-toggle="dropdown">
                        <b>Ver Nuestras tiendas</b> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><?php echo base_url; ?></a></li>
                        <li><a href="#">Acción #2</a></li>
                        <li><a href="#">Acción #3</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Acción #4</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url; ?>persona/oferta"><b>Ofertas</b></a></li>
                <li><a href="<?php echo base_url; ?>persona/intranet"><b>Intranet</b></a></li>
            </ul>
        </div>
    </nav>
</div>
<!--menu-->
<!--iconos-->
<div class="iconos-menu">
    <div class="iconos container-fluid fondo-1 col-xs-6 col-sm-6 col-md-6">
        <picture>
            <source media="(min-width:1024px)" srcset="<?php echo base_url; ?>assets/images/fac.png">
            <source media="(min-width: 480px)" srcset="<?php echo base_url; ?>assets/images/fac.png">
            <source media="(min-width: 320px)" srcset="<?php echo base_url; ?>assets/images/fac-1.png">
            <img src="<?php echo base_url; ?>assets/images/fac.png" alt="" class="fondo-1" class="img-responsive">
        </picture>
        <picture>
            <source media="(min-width:1024px)" srcset="<?php echo base_url; ?>assets/images/tuw.png">
            <source media="(min-width: 480px)" srcset="<?php echo base_url; ?>assets/images/tuw.png">
            <source media="(min-width: 320px)" srcset="<?php echo base_url; ?>assets/images/tuw-1.png">
            <img src="<?php echo base_url; ?>assets/images/tuw.png" alt="" class="fondo-1" class="img-responsive">
        </picture>
        <picture>
            <source media="(min-width:1024px)" srcset="<?php echo base_url; ?>assets/images/ing.png">
            <source media="(min-width: 480px)" srcset="<?php echo base_url; ?>assets/images/ing.png">
            <source media="(min-width: 320px)" srcset="<?php echo base_url; ?>assets/images/ing-1.png">
            <img src="<?php echo base_url; ?>assets/images/ing.png" alt="" class="fondo-1" class="img-responsive">
        </picture>
    </div>
    <div class="container-fluid fondo-1 col-xs-6 col-sm-6 col-md-6">
        <div class="bloque-letra">
            <center>
                <span>
                    <a href="#">
                        <p>Empresa</p>
                    </a>
                </span>
                <span class="activo">
                    <p><a href="#"><font color="#2EA3BB">Persona</font></a></p>
                </span>
            </center>
        </div>
    </div>
</div>
<!--iconos-->
<div class="container-fluid fondo-3"></div>
<!--galeria-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <picture>
                <source media="(min-width: 650px)" srcset="<?php echo base_url; ?>assets/images/silder-1.png">
                <source media="(min-width: 320px)" srcset="<?php echo base_url; ?>assets/images/silder-11.png">
                <img src="<?php echo base_url; ?>assets/images/silder-1.png" alt="Limpieza" class="img-responsive">
            </picture>
        </div>
        <div class="item">
            <picture>
                <source media="(min-width: 650px)" srcset="<?php echo base_url; ?>assets/images/silder-2.png">
                <source media="(min-width: 320px)" srcset="<?php echo base_url; ?>assets/images/silder-22.png">
                <img src="<?php echo base_url; ?>assets/images/silder-2.png" alt="Limpieza" class="img-responsive">
            </picture>
        </div>
        <div class="item">
            <picture>
                <source media="(min-width: 650px)" srcset="<?php echo base_url; ?>assets/images/silder-3.png">
                <source media="(min-width: 320px)" srcset="<?php echo base_url; ?>assets/images/silder-33.png">
                <img src="<?php echo base_url; ?>assets/images/silder-3.png" alt="Limpieza" class="img-responsive">
            </picture>
        </div>
    </div>
</div>
<!--galeria-->
<div class="container-fluid fondo-3"></div>
<!--buscar-->
<div class="busca">
    <div class="container-fluid letra-4">
        <p>BUSCA TU SMARTPHONE AQUI</p>
    </div>
    <div class="letra-5 col-xs-12 col-sm-12 col-md-12">
        <p>Le ofrecemos información a sus dudas aquí en NETAXXES para brindarle un mejor servicio.</p>
        <div class="letra-5 col-xs-12 col-sm-4 col-md-4">
            <center>
               <a href="<?php echo base_url; ?>persona/#">
                    <img src="<?php echo base_url; ?>assets/images/icono-8.png" alt="" class="img-responsive">
                </a> 
                <br>
                <span>EN 3 SIMPLES PASOS</span>
                <br>
                <br>
            </center>
        </div>
        <div class="letra-5 col-xs-12 col-sm-4 col-md-4">
            <center>
                <a href="<?php echo base_url; ?>persona/#">
                <img src="<?php echo base_url; ?>assets/images/icono-6.png" alt="" class="img-responsive">
                </a>
                <br>
                <span>POR TU ESTILO DE VIDA</span>
                <br>
                <br>
            </center>
        </div>
        <div class="letra-5 col-xs-12 col-sm-4 col-md-4">
            <center>
                <a href="<?php echo base_url; ?>persona/#">
                <img src="<?php echo base_url; ?>assets/images/icono-7.png" alt="" class="img-responsive">
                </a>
                <br>
                <span>COMPARA!</span>
                <br>
                <br>
            </center>
        </div>
    </div>
</div>
<!--buscar-->          
<!--planes-->
<a href="#">
    <div class="col-xs-12 col-sm-6 col-md-6 container-fluid fondo-4 ">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <center>
                <img src="<?php echo base_url; ?>assets/images/icono-1.png" alt="">
            </center>
        </div>
        <p> Ver nuestros planes</p>
    </div>
</a>
<!--planes-->
<!--equipos-->
<a href="#">
    <div class="col-xs-12 col-sm-6 col-md-6 container-fluid fondo-5">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <center>
                <img src="<?php echo base_url; ?>assets/images/icono-2.png" alt="" class="img-responsive">
            </center>
        </div>
        <p>Ver nuestros equipos</p>
    </div>
</a>
<!--equipos-->
<!--SILDER IMGANES-->
<div class="container-fluid">
    <div class="letra-6">
        <p>EQUIPOS MAS PEDIDOS <br>
            <span>Plan de 12 Cuotas mensuales</span>
        </p>
    </div>
    <div id="mixedSlider">
        <div class="MS-content">
            <div class="item">
                <div class="imgTitle">
                    <br>
                    <img src="<?php echo base_url; ?>assets/images/cell-1.png" alt="" class="img-responsive">
                    <br>
                    <br>
                    <br>
                    <br>
                    <h2 class="blogTitle">Apple Iphone 7 32gb</h2>
                </div>
                <br>
                <div class="fondo-azul col-xs-12 col-sm-6 col-md-6">
                    <p> 
                        Claro 289<br>
                        Prepago S/.2949
                    </p>
                    <p> 
                        <a href="#" class="btn-precio btn-primary1">ELIGE TU PLAN</a>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="bloque-precio">
                        <h1><font size="4">S/.</font>99</h1>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="imgTitle">
                    <br>
                    <img src="<?php echo base_url; ?>assets/images/cell-2.png" alt="" class="img-responsive">
                    <br>
                    <br>
                    <br>
                    <br>
                    <h2 class="blogTitle">LG K10 K430T</h2>
                </div>
                <br>
                <div class="fondo-azul col-xs-12 col-sm-6 col-md-6">
                    <p> 
                        Claro 119<br>
                        Prepago S/.649
                    </p>
                    <p> 
                        <a href="#" class="btn-precio btn-primary1">ELIGE TU PLAN</a>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="bloque-precio">
                        <h1><font size="4">S/.</font>3</h1>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="imgTitle">
                    <br>
                    <img src="<?php echo base_url; ?>assets/images/cell-3.png" alt="" class="img-responsive">
                    <br>
                    <br>
                    <br>
                    <br>
                    <h2 class="blogTitle">HTC Desire 10 Lifestyle</h2>
                </div>
                <br>
                <div class="fondo-azul col-xs-12 col-sm-6 col-md-6">
                    <p> 
                        Claro 189<br>
                        Prepago  S/.949
                    </p>
                    <p> 
                        <a href="#" class="btn-precio btn-primary1">ELIGE TU PLAN</a>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="bloque-precio">
                        <h1><font size="4">S/.</font>3</h1>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="imgTitle">
                    <br>
                    <img src="<?php echo base_url; ?>assets/images/cell-4.png" alt="" class="img-responsive">
                    <br>
                    <br>
                    <br>
                    <br>
                    <h2 class="blogTitle">SAMG GALAXY S7 32GB</h2>
                </div>
                <br>
                <div class="fondo-azul col-xs-12 col-sm-6 col-md-6">
                    <p> 
                        Claro 289<br>
                        Prepago S/.2799
                    </p>
                    <p> 
                        <a href="#" class="btn-precio btn-primary1">ELIGE TU PLAN</a>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="bloque-precio">
                        <h1><font size="4">S/.</font>99</h1>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="imgTitle">
                    <br>
                    <img src="<?php echo base_url; ?>assets/images/cell-5.png" alt="" class="img-responsive">
                    <br>
                    <br>
                    <br>
                    <br>
                    <h2 class="blogTitle">Huawei Mate 9</h2>
                </div>
                <br>
                <div class="fondo-azul col-xs-12 col-sm-6 col-md-6">
                    <p> 
                        Claro 289<br>
                        Prepago S/. 0.00
                    </p>
                    <p> 
                        <a href="#" class="btn-precio btn-primary1">ELIGE TU PLAN</a>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="bloque-precio">
                        <h1><font size="4">S/.</font>99</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="MS-controls">
            <button class="MS-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
            <button class="MS-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> 
<script src="<?php echo base_url; ?>assets/js/multislider.js"></script> 
<script>
    $('#basicSlider').multislider({
        continuous: true,
        duration: 2000
    });
    $('#mixedSlider').multislider({
        duration: 750,
        interval: 3000
    });
</script>
<div class="container">
    <br>
    <center>
        <a href="#" class="fondo-azul btn-precio1">VER NUESTRO CATALGO DE EQUIPOS</a>
    </center>
    <div class="letra-6">
        <p>EQUIPOS MAS POPULARES</p>
    </div>
</div>
<!--SILDER IMGANES-->
<div class="container-fluid">
    <div class="col-xs-12 col-sm-12 col-md-12 bloque-fotos">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <img src="<?php echo base_url; ?>assets/images/bloque-1.png" alt="" class="img-responsive">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <img src="<?php echo base_url; ?>assets/images/bloque-2.png" alt="" class="img-responsive">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <img src="<?php echo base_url; ?>assets/images/bloque-3.png" alt="" class="img-responsive">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <img src="<?php echo base_url; ?>assets/images/bloque-2.png" alt="" class="img-responsive">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <img src="<?php echo base_url; ?>assets/images/bloque-3.png" alt="" class="img-responsive">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <img src="<?php echo base_url; ?>assets/images/bloque-1.png" alt="" class="img-responsive">
        </div>
    </div>
</div>
<!--definicion de porta y reno linea nueva-->
<div class="container-fluid fondo-6">
    <div class="bloque-detalles">
        <div class="col-xs-12 col-sm-4 col-md-4">
            <center>
                <div class="iconos-medio">
                    <img src="<?php echo base_url; ?>assets/images/logo-bajo.png" alt="">
                </div>
                <p>Distribuidor Autorizado de CLARO <br> 
                    Ventas de celulares de las <br> 
                    mejores marcas exclusivas siendo <br> 
                    el numero 1 en el mercado. </p>
            </center>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
            <center>
                <div class="iconos-medio">
                    <h3>ACERCA DE POTSPAGO</h3>
                    <br>
                    <p>
                        ¿Como funciona? <br> 
                        Términos & Condiciones <br>
                        Libro de Reclamos <br>
                    </p>
                </div>
            </center>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
            <center>
                <div class="iconos-medio1">
                <h3>SIGUENOS</h3>
                <div class="iconos-medio1">
                        <picture>
                            <source media="(min-width:1024px)" srcset="<?php echo base_url; ?>assets/images/fac.png">
                            <source media="(min-width: 480px)" srcset="<?php echo base_url; ?>assets/images/fac.png">
                            <source media="(min-width: 320px)" srcset="<?php echo base_url; ?>assets/images/fac-1.png">
                            <img src="<?php echo base_url; ?>assets/images/fac.png" alt="" class="fondo-1" class="img-responsive">
                        </picture>
                        <picture>
                            <source media="(min-width:1024px)" srcset="<?php echo base_url; ?>assets/images/tuw.png">
                            <source media="(min-width: 480px)" srcset="<?php echo base_url; ?>assets/images/tuw.png">
                            <source media="(min-width: 320px)" srcset="<?php echo base_url; ?>assets/images/tuw-1.png">
                            <img src="<?php echo base_url; ?>assets/images/tuw.png" alt="" class="fondo-1" class="img-responsive">
                        </picture>
                        <picture>
                            <source media="(min-width:1024px)" srcset="<?php echo base_url; ?>assets/images/ing.png">
                            <source media="(min-width: 480px)" srcset="<?php echo base_url; ?>assets/images/ing.png">
                            <source media="(min-width: 320px)" srcset="<?php echo base_url; ?>assets/images/ing-1.png">
                            <img src="<?php echo base_url; ?>assets/images/ing.png" alt="" class="fondo-1" class="img-responsive">
                        </picture>
                    </div>
                    <p>STATS</p>
                </div>
            </center>
        </div>
    </div>
</div>
<!--galeria-->
<script src="<?php echo base_url; ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url; ?>assets/js/bootstrap.min.js"></script>
<!--galeria-->
<script type="text/javascript">
    $(document).ready(function() {
        $('.thumbnail').click(function(){
            $('.modal-body').empty();
            var title = $(this).parent('a').attr("title");
            $('.modal-title').html(title);
            $($(this).parents('div').html()).appendTo('.modal-body');
            $('#myModal').modal({show:true});
        });
    });
</script>
<script type="text/javascript">

        var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
<!--galeria-->