<div id="load_screen"><div id="divPreloader" class="preloader" style="display: none;"></div></div>
<article class="container-fluid fondo-1">
    <section class="col-xs-4 col-sm-6 col-md-6 col-lg-6">
        <img src="<?php echo base_url; ?>assets/images/fac-nuevo.png" alt="" class="img-responsive">
    </section>
    <section class="col-xs-8 col-sm-6 col-md-6 col-lg-6">
        <h3 id="letra-1">Llámanos 612-9181</h3>
    </section>
</article>
<article class="container-fluid">
    <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <center>
            <img src="<?php echo base_url; ?>assets/images/logo-final.png" alt="" class="img-responsive">
        </center>
    </section>
</article>
<article>
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse js-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url; ?>persona/">INICIO</a></li>
                <li><a href="<?php echo base_url; ?>persona/equipo">EQUIPOS CELULARES</a></li>
                <li><a href="#">OFERTAS</a></li>
                <li><a href="#">NUESTRAS TIENDAS</a></li>
            </ul>
        </div>
        <!-- /.nav-collapse -->
    </nav>
</article>


<!--iconos-->
<div class="container-fluid fondo-3"></div>
<div class="container-fluid fondo-arriba">
    <div class="fondo-arriba1 col-xs-12 col-sm-12 col-md-12">
        <p>Equipos Celulares <span>Personas</span></p>
    </div>
</div>
<div class="container-fluid letra-4">
    <p>BUSCA TU SMARTPHONE AQUI</p>
</div>
<!--equipos-->
<div class="container-fluid titulo">
    <div id="titulo">
        
<?php foreach ($this->data as $key => $value) {?>
        <b><?php echo $value['strEquipo']; ?></b>
    </div>
</div>
<br> 
<div class="container-fluid fondo-arriba">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="col-xs-12 col-sm-12 col-md-5">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-picture"></span>FOTO</a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-wrench"></span>ESPECIFICACIONES</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                             <center>
                                <img src="<?php echo base_url; ?>assets/<?php echo $value['strFoto']; ?>" alt="" class="img-responsive">
                            </center>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                        <div class="bloque-inf col-xs-12 col-sm-12 col-md-12">


                            <div class="box-eq-txt">
                                <h2>Alcatel</h2>
                                <h1><b><?php echo $value['strEquipo']; ?></b></h1>
                                <p>El Alcatel Pixi 4 (5) es un smartphone Android con una pantalla FWVGA de 5 pulgadas, procesador quad-core a 1.3GHz, 1GB de RAM, 8GB de almacenamiento interno expandible, cámaras de 8 y 5 megapixels y batería de 2000 mAh.</p>
                                <br>
                                <h2>Especificaciones técnicas</h2>
                                <div class="info-espec col-xs-12 col-sm-4 col-md-3">
                                    <center>
                                        <img src="<?php echo base_url; ?>assets/images/icon-pantalla.png" alt="" class="img-responsive">
                                    </center>
                                    <p>Pantalla</p>
                                    <span>5.0"</span>
                                </div>
                                <div class="info-espec col-xs-12 col-sm-4 col-md-3">
                                    <center>
                                        <img src="<?php echo base_url; ?>assets/images/icon-procesador.png" alt="" class="img-responsive">
                                    </center>
                                    <p>Cámara Principal</p>
                                    <span>8MP</span>
                                </div>
                                <div class="info-espec col-xs-12 col-sm-4 col-md-3">
                                    <center>
                                        <img src="<?php echo base_url; ?>assets/images/icon-procesador.png" alt="" class="img-responsive">
                                    </center>
                                    <p>Memoria Interna</p>
                                    <span>8GB</span>
                                </div>
                                <div class="info-espec col-xs-12 col-sm-4 col-md-3">
                                    <center>
                                        <img src="<?php echo base_url; ?>assets/images/icon-procesador.png" alt="" class="img-responsive">
                                    </center>
                                    <p>Sistema Operativo</p>
                                    <span>Android</span>
                                </div>
                            </div>
                             <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<form id="frm" name="frm" onsubmit="return false">-->
        <input type="hidden" name="txtCodigo" id="txtCodigo" value="<?php echo $this->id_equipo; ?>">
        <div class="bloque top col-xs-12 col-sm-12 col-md-7">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="col-xs-12 col-sm-12 col-md-5">
                    <div class="plan col-xs-12 col-sm-12 col-md-12">
                        <h2><b>UBICA TU PLAN</b></h2>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form">
                            <label for="usr">Tipo de Linea:</label>
                            <select class="form-control2" id="selectTipoVenta">
                                <option value="2">PORTABILIDAD</option>
                                <option value="3">RENOVACION</option>
                                <option value="1">LINEA NUEVA </option>
                            </select>
                            <br>
                            <label for="usr">Tipo de Pago:</label>
                            <select class="form-control2" id="selectCuota">
                                <option value="1">SIN CUOTAS</option>
                                <option value="2">12 CUOTAS</option>
                                <option value="3">18 CUOTAS </option>
                            </select>
                            <br>
                            <label for="usr">Tipo de Plan:</label>
                            <select class="form-control2" id="selectPlan">
                                <option value="1">Claro Max 29</option>
                                <option value="2">Claro Max 39</option>
                                <option value="3">Claro Max 49</option>
                                <option value="4">Claro Max 59</option>
                                <option value="5">Claro Max 69</option>
                                <option value="6">Claro Max 79</option>
                                <option value="7">Claro Max 99</option>
                                <option value="8">Claro Max 119</option>
                                <option value="9">Claro Max 149</option>
                                <option value="10">Claro Max 189</option>
                                <option value="11">Claro Max 289</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7">
                    <div class="plan1 col-xs-12 col-sm-12 col-md-12">
                        <h2><b>PRECIO DEL EQUIPO</b></h2>
                    </div>
                    <div class="precio-equipo col-xs-12 col-sm-12 col-md-12">
                        <h2><font size="7">S/.</font><strong id="precio_equipo"></strong></h2>
                        <p>En plan postpago Claro MAX <strong class="txtPlanes"></strong><br> con acuerdo de equipos a 12 meses.</p>
                        <center>
                            <a href="javascript:void(0);" class="btn btn-primary carrito" id="carrito">Agregar al Carrito</a>
                        </center>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="bloque-planes">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="box-eq-txt">
                                <h1><b>INFORMACIÓN DEL PLAN <span>CLARO MAX <strong class="txtPlanes"></strong></span></b></h1>   
                            </div>
                            <div class="box-eq-txt col-xs-12 col-sm-6 col-md-3">
                                <center>
                                    <img src="<?php echo base_url; ?>assets/images/icon-internet-in.png" alt="" class="img-responsive">
                                    <h1>
                                    <b id="txtInternet"></b><br>
                                    Internet
                                    </h1>   
                                </center>
                            </div>
                            <div class="box-eq-txt col-xs-12 col-sm-6 col-md-3">
                                <center>
                                    <img src="<?php echo base_url; ?>assets/images/icon-call-in.png" alt="" class="img-responsive">
                                    <h1>
                                        <b id="txtLlamada">200</b><br>
                                        Minutos
                                    </h1>   
                                </center>
                            </div>
                            <div class="box-eq-txt col-xs-12 col-sm-6 col-md-3">
                                <center>
                                    <img src="<?php echo base_url; ?>assets/images/icon-call-in.png" alt="" class="img-responsive">
                                    <h1>
                                        <b id="txtTipo">RPC</b><br>
                                        Ilimitado
                                    </h1>   
                                </center>
                            </div>
                            <div class="box-eq-txt col-xs-12 col-sm-6 col-md-3">
                                <center>
                                    <img src="<?php echo base_url; ?>assets/images/icon-sms-in.png" alt="" class="img-responsive">
                                    <h1>
                                        <b id="txtMensaje">500</b><br>
                                        SMS
                                    </h1>   
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--</form>-->

    </div>
    <div class="bloque-1 col-xs-12 col-sm-6 col-md-6">
        <div class="col-md-12">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section4" aria-controls="home" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-picture"></span> BENEFICIOS</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section4">
                        <img src="<?php echo base_url; ?>assets/images/bloque-1.png" alt="" class="img-responsive">
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section5">
                        <div class="precio-equipo1 col-xs-12 col-sm-6 col-md-6">
                            <div class="info-espec col-xs-12 col-sm-6 col-md-3">
                                <center>
                                    <img src="<?php echo base_url; ?>assets/images/icon-procesador.png" alt="" class="img-responsive">
                                </center>
                                <p>Pantalla</p>
                                <span>4.7"</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bloque-1 col-xs-12 col-sm-6 col-md-6"> 
        <div class="video-1 embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZHxiDdfgRAI"></iframe>
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
                    el numero 1 en el mercado. 
                </p>
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
    var d=[];
    $(document).ready(function() {
        $('.thumbnail').click(function(){
            $('.modal-body').empty();
            var title = $(this).parent('a').attr("title");
            $('.modal-title').html(title);
            $($(this).parents('div').html()).appendTo('.modal-body');
            $('#myModal').modal({show:true});
        });
    });

    window.onload = load;
    function load() {
        descarga();
    }

    $(document).on('ready',function(e){
        var tipoVenta=$('#selectTipoVenta').val();
        var cuota=$('#selectCuota').val();
        var plan=$('#selectPlan').val();
        lista(tipoVenta,cuota,plan);
    });

   $(document).on('change','#selectTipoVenta',function(){
        var tipoVenta=$('#selectTipoVenta').val();
        var cuota=$('#selectCuota').val();
        var plan=$('#selectPlan').val();
        lista(tipoVenta,cuota,plan);
    });
    $(document).on('change','#selectCuota',function(){
        var tipoVenta=$('#selectTipoVenta').val();
        var cuota=$('#selectCuota').val();
        var plan=$('#selectPlan').val();
        lista(tipoVenta,cuota,plan);
    });
    $(document).on('change','#selectPlan',function(){
        var tipoVenta=$('#selectTipoVenta').val();
        var cuota=$('#selectCuota').val();
        var plan=$('#selectPlan').val();
        lista(tipoVenta,cuota,plan);
    });
    function lista(tipoVenta,cuota,plan){
        carga();
        var tipoVentax=tipoVenta;
        var cuotax=cuota;
        var planx=plan;
        var lista=$('#precio_equipo');
        var planeClaroMax=$('.txtPlanes');
        var id_equipo=$('#txtCodigo').val();
        var internet=$('#txtInternet');
        var llamada=$('#txtLlamada');
        var tipo=$('#txtTipo');
        var mensage=$('#txtMensaje');
            lista.html('');
            $.ajax({
                        url: "<?php echo base_url; ?>"+"persona/selectTipoVenta",
                        type: 'POST',
                        data:'tipoVenta='+tipoVentax+'&cuota='+cuotax+'&plan='+planx+'&id_equipo='+id_equipo,
                        success:function(resp){

                            d=resp.split("**");

                            var contenido=d[0];
                            console.log(contenido);
                            var obj=JSON.parse(contenido);
                            $.each(obj , function(key, val){
                                if (val.numPrecio == 'ND') {
                                    $('#carrito').attr('disabled',true);
                                }else{
                                    $('#carrito').attr('disabled',false);
                                }
                                lista.html(val.numPrecio);
                                planeClaroMax.html(val.strPlan);
                                
                            })

                            var contenido=d[1];
                            console.log(contenido);
                            var obj=JSON.parse(contenido);
                            $.each(obj , function(key, val){
                                internet.html(val.internet);
                                llamada.html(val.llamada);
                                tipo.html(val.tipo);
                                mensage.html(val.mensaje);
                            })


                             descarga();
                         }

            });
           
           // load();
    }


$(document).on('click','#carrito',function(){

                /*document.frm.method="get";
                document.frm.txtCodigo.value;
                document.frm.action="<?php echo base_url; ?>persona/carrito";
                document.frm.submit();*/
                var id=$('#txtCodigo').val();
                window.location.href="<?php echo base_url; ?>persona/carrito/"+id;
});













    function descarga(){
        document.getElementById('load_screen').style.display = 'none';
        document.getElementById('divPreloader').style.display = 'none';
    }

    function carga(){
        document.getElementById('load_screen').style.display = 'block';
        document.getElementById('divPreloader').style.display = 'block';
    }
</script>

