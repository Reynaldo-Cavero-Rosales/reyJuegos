      <header>
         <div class="container">
            <div class="mani row">
               <div class="bloque-azul col-xs-6 col-sm-6 col-md-6">
                  <p class="fondo-azul1 col-xs-6 col-md-2"><a href="<?php echo base_url; ?>persona/"><b>Personas</b></a></p>
                  <p class="fondo-azul2 col-xs-6 col-md-2"><a href="<?php echo base_url; ?>empresa/"><font color="#212121">Empresas</font></a></p>
               </div>
                <div class=" col-xs-6 col-sm-6 col-md-6">
                   <p class="fondo-azul3"><a href="<?php echo base_url; ?>empresa/"><font color="#212121">Llámanos
                       <b><a href="tel://01612-9181"><font color="#212121">612-9181</font></a></b></font></a></p>

                </div>
            </div>
         </div>
      </header>
            <!-- Cabezera -->
      <header>
         <div class="container">
            <div class="mani row fondo-claro">
               <div class="col-xs-4 col-md-6">
                  <p class="iconos">
                     <a href="http://fb.me/netaxxessac" target="_blank"><i class="iconos fa fa-facebook"></i></a>
                     <a href=""><i class="iconos fa fa-twitter"></i></a>
                     <a href=""><i class="iconos fa fa-instagram"></i></a>
                  </p>
               </div>
               <div class="col-xs-8 col-md-6">
                  <p class="texto-barra">
                     Ver Carrito
                     <b><a href="<?php echo base_url; ?>persona/view_carrito"><b><i class="glyphicon glyphicon-shopping-cart"></i></b></a></b>
                     <b><a href="<?php echo base_url; ?>persona/view_carrito"></a></b>
                     <b><a href="<?php echo base_url; ?>login">intranet</a></b>
                  </p>
               </div>
            </div>
         </div>
      </header>
      <header>
         <div class="container">
            <div class="mani row contenedor-blanco">
               <div class="col-xs-12 col-sm-4 col-md-4">
                  <a href="<?php echo base_url; ?>persona/index">
                     <div class="logo">
                        <img src="<?php echo base_url; ?>assets/imagenes/logo.png" alt="" class="img-responsive">
                     </div>
                  </a>
               </div>
               <div class="col-xs-12 col-sm-4 col-md-4 ">
                  <div class="logo-claro"></div>
               </div>
               <div class="col-xs-12 col-sm-4 col-md-4">
                  <div class="logo-cell">
                     <img src="<?php echo base_url; ?>assets/imagenes/cel.png" alt="" class="img-responsive">
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Menu -->
      <header>
         <div class="container">
            <div class="mani row fondo-claro menu">
               <nav class="navbar">
                  <div class="container-fluid">
                     <!-- Brand and toggle get grouped for better mobile display -->
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                     </div>
                     <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                           <li>
                              <a class="navbar-brand iconos-1" href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
                           </li>
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ofertas<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url; ?>persona/promocion">Promociones</a></li>
                                    </ul>
                           </li>
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ver nuestras Tiendas <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url; ?>persona/vistageneral">UBICACION DE TIENDAS </a></li>
                                <li role="separator" class="divider"></li>
                                 <li><a href="<?php echo base_url; ?>persona/vista_ubicacion/1">MALL AVENTURA PLAZA - Santa Anita </a></li>
                                 <li role="separator" class="divider"></li>
                                 <li><a href="<?php echo base_url; ?>persona/vista_ubicacion/2">REAL PLAZA - Chorrillos</a></li>
                                 <li role="separator" class="divider"></li>
                                 <li><a href="<?php echo base_url; ?>persona/vista_ubicacion/3">OPEN PLAZA - Angamos</a></li>
                                 <li role="separator" class="divider"></li>
                                 <li><a href="<?php echo base_url; ?>persona/vista_ubicacion/4">MEGA PLAZA - Independencia</a></li>
                                 <li role="separator" class="divider"></li>
                                 <li><a href="<?php echo base_url; ?>persona/vista_ubicacion/5">PLAZA NORTE - Los Olivos</a></li>
                                 <li role="separator" class="divider"></li>
                                 <li><a href="<?php echo base_url; ?>persona/vista_ubicacion/6">VIAMIX MALVINAS PLAZA - Lima </a></li>
                              </ul>
                           </li>
                           <li class="active"><a href="<?php echo base_url; ?>persona/equipo">Equipos de Celulares</a></li>
                        </ul>
                     </div>
                     <!-- /.navbar-collapse -->
                  </div>
                  <!-- /.container-fluid -->
               </nav>
            </div>
         </div>
      </header>

      <?php

class ClassBase1{
    var $conexion;
    # -----
    public function __construct($h='db.netaxxes.com',$u='root',$p='r0squ3t3',$b='claro'){
       $this->host=$h;
       $this->user=$u;
       $this->pass=$p;
       $this->base=$b;
    }
    # -----
    private function base_conectar(){
        $this->conexion=new mysqli(
                $this->host,
                $this->user,
                $this->pass,
                $this->base);
    }
    # -----

    public function base_consultar($sql){
        $this->base_conectar();
        $datos=$this->conexion->query($sql);
        while($fila=$datos->fetch_assoc()){
            $resultado[]=$fila;
        }
        return $resultado;
    }
    # -----
}


?>
