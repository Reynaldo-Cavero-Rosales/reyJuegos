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
<div class="container-fluid fondo-arriba">
    <div class="letra-7 col-xs-12 col-sm-12 col-md-12">
        <p>EQUIPOS MAS PEDIDOS</p>
    </div>
</div>
<!--equipos-->
<div class="container-fluid fondo-arriba">
    <div class="col-xs-12 col-sm-3 col-md-3">
        <div class="icono-cel">
            <img src="<?php echo base_url; ?>assets/images/cel-ico.png" alt="" class="img-responsive" align="left">
            <p>Celulares</p>
        </div>
        <div class="celulares-form">
            <p><b>Lo quiero en</b> </p>
        </div>
        <center>
            
                <!-- Left Inputs -->
                <div class="col-xs-12 col-sm-12 col-md-12 wow animated slideInLeft" data-wow-delay=".5s">
                    <div class="form-group" id="panelTipoVenta">
                       <select class="form-control1" id="selectTipoVenta">
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 wow animated slideInLeft" data-wow-delay=".5s">
                    <div class="form-group">
                        <select class="form-control1" id="selectCuota">
                        </select>
                    </div>
                </div>
            
        </center>
        <div class="celulares-form">
            <p><b>Marca</b> </p>
        </div>
        <center>
            
                <!-- Left Inputs -->
                <div class="col-xs-12 col-sm-12 col-md-12 wow animated slideInLeft" data-wow-delay=".5s">
                    <div class="form-group">
                        <select class="form-control1" id="selectMarca">
                        </select>
                    </div>
                </div>
            
        </center>
        <div class="celulares-form">
            <p><b>Plan</b> </p>
        </div>
        <center>
            
                <!-- Left Inputs -->
                <div class="col-xs-12 col-sm-12 col-md-12 wow animated slideInLeft" data-wow-delay=".5s">
                    <div class="form-group">
                        <select class="form-control1" id="selectPlan">
                        </select>
                    </div>
                </div>
            
        </center>
        <div class="celulares-form">
            <p><b>Generación</b> </p>
        </div>
        <center>
           
                <!-- Left Inputs -->
                <div class="col-xs-12 col-sm-12 col-md-12 wow animated slideInLeft" data-wow-delay=".5s">
                    <div class="form-group">
                        <select class="form-control1">
                            <option>4G</option>
                            <option>3.5G</option>
                            <option>3G</option>
                        </select>
                    </div>
                </div>
            
        </center>
        <div class="celulares-form">
            <p><b>Sistema Operativo</b> </p>
        </div>
        <center>
           
                <!-- Left Inputs -->
                <div class="col-xs-12 col-sm-12 col-md-12 wow animated slideInLeft" data-wow-delay=".5s">
                    <div class="form-group">
                        <select class="form-control1">
                            <option>Android (Google)</option>
                            <option>Blackberry (Blackberry)</option>
                            <option>Firefox OS (Mozzila) </option>
                            <option>IOS (Apple)</option>
                            <option>Windows Phone (Microsoft)</option>
                        </select>
                    </div>
                </div>
            
        </center>
    </div>
    <form id="frm" name="frm" onsubmit="return false">
    <input type="text" name="txtIdEquipo" id="txtIdEquipo" value="">
    <div class="col-xs-12 col-sm-9 col-md-9" id="catalogo">
        <!--<div class="col-xs-12 col-sm-6 col-md-3">
            <div class="bloque-cel">
                <center>
                    <img src="<?php echo base_url; ?>assets/images/cell-1.png" alt="" class="img-responsive">
                    <h1>ALCATEL</h1>
                    <p>OT-5045A PIXI 4 (5)</p>
                    <h2><font size="4">S/.</font>99 <font size="4">al mes</font></h2>
                    <span>En plan Postpago Claro MAX 99 <br> con acuerdo a 12 meses</span><br>
                    <br>
                    <a href="<?php echo base_url; ?>persona/descripcion" class="btn btn-primary">Elige tu Plan</a>
                </center>
            </div>
        </div>-->
  
    </div>
    </form>
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
    $(document).ready(function() {
        $('.thumbnail').click(function(){
            $('.modal-body').empty();
            var title = $(this).parent('a').attr("title");
            $('.modal-title').html(title);
            $($(this).parents('div').html()).appendTo('.modal-body');
            $('#myModal').modal({show:true});
        });
    document.getElementById('divPreloader').style.display = 'block';
    document.getElementById('load_screen').style.display = 'block';
        catalogo();
        cbxTipoVenta();
        cbxCuota();
        cbxMarca();
        cbxPlan();
    });

    window.onload = load;
    function load() {
        document.getElementById('load_screen').style.display = 'none';
        document.getElementById('divPreloader').style.display = 'none'; 
    }
    function catalogo(){
        var lista=$('#catalogo');
        lista.html('');
        $.ajax({
                        url: '<?php echo base_url; ?>persona/ListaVenta',
                        type: 'POST',
                        data:'',
                        success:function(resp){
                           var obj=JSON.parse(resp);
                           //alert(obj);
                            //var obj=JSON.parse(resp);
                            $.each(obj , function(key, val){
                              //console.log(val.id);
                              //console.log(val.numClaroMax);

                              var tr=$("<div class='col-xs-12 col-sm-6 col-md-3'>");
                              tr.html(
                                    
                                  '<div class="bloque-cel">'+
                                    '<center>'+
                                    '<img src="<?php echo base_url; ?>assets/'+val.strFoto+'" alt="" class="img-responsive">'+
                                    '<p>'+val.strEquipo+'</p>'+
                                    '<h2><font size="4">S/.</font>'+val.numPrecio+' <font size="4">al mes</font></h2>'+
                                    '<span>En plan Postpago Claro MAX '+val.strPlan+' <br> con acuerdo a 12 meses</span><br>'+
                                    '<br>'+
                                    '<a href="javascript:void(0)"  class="btn btn-primary btnCarrito" id="'+val.intIdEquipo+'">Elige tu Plan</a>'+
                                    '</center>'+
                                    '</div>'
                                    
                                 );
                              lista.append(tr);

                            });
                        }
            });
    }

    /*****************COMBO BOX*********************************/
    function cbxTipoVenta(){
        var combo=$('#selectTipoVenta');
        combo.html('');
        $.ajax({
                        url: '<?php echo base_url; ?>persona/cbxTipoVenta',
                        type: 'POST',
                        data:'',
                        success:function(resp){
                          // console.log(resp);
                           var obj=JSON.parse(resp);

                            $.each(obj , function(key, val){
                             combo.append('<option value="'+val.intIdTipoVenta+'">'+val.strTipoVenta+'</option>');                         
                            });

                        }
            });
    }

    function cbxCuota(){
        var combo=$('#selectCuota');
        combo.html('');
        $.ajax({
                        url: '<?php echo base_url; ?>persona/cbxCuota',
                        type: 'POST',
                        data:'',
                        success:function(resp){
                           //console.log(resp);
                           var obj=JSON.parse(resp);

                            $.each(obj , function(key, val){
                             combo.append('<option value="'+val.intCuotas+'">'+val.strCuota+'</option>');                         
                            });

                        }
            });
    }

    function cbxMarca(){
        var combo=$('#selectMarca');
        combo.html('');
        $.ajax({
                        url: '<?php echo base_url; ?>persona/cbxMarca',
                        type: 'POST',
                        data:'',
                        success:function(resp){
                           //console.log(resp);
                           var obj=JSON.parse(resp);

                            $.each(obj , function(key, val){
                             combo.append('<option value="'+val.intIdMarca+'">'+val.strMarca+'</option>');                         
                            });

                        }
            });
    }

    function cbxPlan(){
        var combo=$('#selectPlan');
        combo.html('');
        $.ajax({
                        url: '<?php echo base_url; ?>persona/cbxPlan',
                        type: 'POST',
                        data:'',
                        success:function(resp){
                           //console.log(resp);
                           var obj=JSON.parse(resp);

                            $.each(obj , function(key, val){
                             combo.append('<option value="'+val.intIdPlan+'">Claro Max '+val.strPlan+'</option>');                         
                            });

                        }
            });
    }
    /***************************************************/

/**************************CAMBIAR COMBO BOX(EVENTO CHANGE)*******************************/

$(document).on('change','#selectTipoVenta',function(){
    changeComboBox();
});
$(document).on('change','#selectCuota',function(){
    changeComboBox();
});
$(document).on('change','#selectMarca',function(){
    changeComboBox();
});

$(document).on('change','#selectPlan',function(){
    changeComboBox();
});



function changeComboBox(){
    document.getElementById('divPreloader').style.display = 'block';
    document.getElementById('load_screen').style.display = 'block';
    var intIdTipoVenta=$('#selectTipoVenta').val();
    var intIdCuota=$('#selectCuota').val();
    var intIdMarca=$('#selectMarca').val();
    var intIdPlan=$('#selectPlan').val();
    var lista=$('#catalogo');
    lista.html('');
            $.ajax({
                        url: '<?php echo base_url; ?>persona/seleccionComboBox',
                        type: 'POST',
                        data:'intIdTipoVenta='+intIdTipoVenta+'&intIdCuota='+intIdCuota+'&intIdMarca='+intIdMarca+'&intIdPlan='+intIdPlan,
                        success:function(resp){
                           console.log(resp);
                           var obj=JSON.parse(resp);

                            $.each(obj , function(key, val){
                              var tr=$("<div class='col-xs-12 col-sm-6 col-md-3'>");
                              tr.html(
                                    
                                  '<div class="bloque-cel">'+
                                    '<center>'+

                                    '<img src="<?php echo base_url; ?>assets/'+val.strFoto+'" alt="" class="img-responsive">'+
                                    '<p>'+val.strEquipo+'</p>'+
                                    '<h2><font size="4">S/.</font>'+val.numPrecio+' <font size="4">al mes</font></h2>'+
                                    '<span>En plan Postpago Claro MAX '+val.strPlan+' <br> con acuerdo a '+val.strCuota+' meses</span><br>'+
                                    '<br>'+
                                    '<span>Tipo Venta '+val.strTipoVenta+'</span><br>'+
                                    '<a href="javascript:void(0)"  class="btn btn-primary btnCarrito" id="'+val.intIdEquipo+'">Elige tu Plan</a>'+
                                    '</center>'+
                                    '</div>'
                                    
                                 );
                              lista.append(tr);                    
                            });
        document.getElementById('load_screen').style.display = 'none';
        document.getElementById('divPreloader').style.display = 'none'; 
                        }
            }); 
}



/*********************************************************/
$(document).on('click','.btnCarrito',function(e){
    var id=$(this).attr('id');
    

    enviarData(id);
});
function enviarData(id){
                /*document.frm.method="get";
                document.frm.txtIdEquipo.value = id;
                document.frm.action="<?php echo base_url; ?>persona/descripcion";
                document.frm.submit();*/


                window.location.href="<?php echo base_url; ?>persona/descripcion/"+id;
}


</script>
<script>

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