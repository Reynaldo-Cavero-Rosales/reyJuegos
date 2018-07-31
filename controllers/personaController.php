<?php 
class personaController extends Controller{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->view->render('index');
	}
	public function ListaVentaPromo(){
		$persona=$this->loadModel('persona');
		//PRIMERO
		$datos=$persona->filterPlanPromocion();
		$lista=$persona->numListaPromocion($datos);

		for ($i=0; $i < count($lista); $i++) { 
			$datos=$persona->filterPlanPromocion($i+1);
			$lis=$persona->ListaVentaPromocion($datos,$i+1);
			$lis=array_shift($lis);
			$z[$i]=$lis;
		}


		//SEGUNDO
		$datos=$persona->filterPlanPromocion2();
		$lista=$persona->numListaPromocion2($datos);
		for ($j=3; $j < count($lista)+3; $j++) { 
			$datos=$persona->filterPlanPromocion2($j+1);
			$lis=$persona->ListaVentaPromocion($datos,$j+1);
			$lis=array_shift($lis);
			$z[$j]=$lis;
		}

		//TERCERO
		$datos=$persona->filterPlanPromocion3();
		$lista=$persona->numListaPromocion3($datos);

		for ($i=6; $i < count($lista)+6; $i++) { 
			$datos=$persona->filterPlanPromocion3($i+1);
			//echo $datos."<br />";
			
			$lis=$persona->ListaVentaPromocion($datos,$i+1);
			$lis=array_shift($lis);
			$z[$i]=$lis;
		}
		echo json_encode($z);
	}
    public function equipo(){

        $this->view->render('equipo');
    }

    public function ListaVenta(){
		//alcatel--2
		$persona=$this->loadModel('persona');
		$datos=$persona->filterPlan();
		//if (isset($_POST['plan'])) {$datos=$_POST['plan'];}
		$lista=$persona->numLista($datos);
		for ($i=0; $i < count($lista); $i++) { 

			$datos=$persona->filterPlan($i+1);
			//if (isset($_POST['plan'])) {$datos=$_POST['plan'];}
			$lis=$persona->ListaVenta($datos,$i+1);
			$lis=array_shift($lis);
			$z[$i]=$lis;
		}

		echo json_encode($z);
	}

	public function cbxTipoVenta(){
		$persona=$this->loadModel('persona');
		$data=$persona->llenarComboBoxTipoVenta();
		echo json_encode($data);
	}

	/******************llenar combobox************************/
	public function cbxCuota(){
		$persona=$this->loadModel('persona');
		$data=$persona->llenarComboBoxCuota();
		echo json_encode($data);
	}
	public function cbxMarca(){
		$persona=$this->loadModel('persona');
		$data=$persona->llenarComboBoxMarca();
		echo json_encode($data);
	}
	public function cbxPlan(){
		$persona=$this->loadModel('persona');
		$data=$persona->llenarComboBoxPlan();
		echo json_encode($data);
	}
/*************************change combo box*******************************/
	public function seleccionComboBox(){
		$persona=$this->loadModel('persona');

		$count=$persona->countMarca($_POST['intIdMarca']);
		for ($i=0; $i < $count[0]['can']; $i++) { 
			$datos=$persona->filterPlan($count[0]['idEquipo']+$i, $_POST['intIdTipoVenta'], $_POST['intIdCuota']);
			if (isset($_POST['intIdPlan'])) {$datos=$_POST['intIdPlan'];}
			$lis=$persona->ListaVenta($datos,$count[0]['idEquipo']+$i,  $_POST['intIdTipoVenta'], $_POST['intIdCuota']);
			$lis=array_shift($lis);
			$z[$i]=$lis;
		}
		echo json_encode($z);
	}


    public function descripcion($id){
    	$persona=$this->loadModel('persona');
    	//$idEquipo=$_GET['txtIdEquipo'];
		$data=$persona->descripcionEquipo($id);
    	$this->view->data=$data;
    	$this->view->id_equipo=$id;
        $this->view->render('descripcion');
    }

    public function selectTipoVenta(){
    	$persona=$this->loadModel('persona');
		$datos=$persona->mTipoVenta($_POST['tipoVenta'], $_POST['cuota'], $_POST['plan'], $_POST['id_equipo']);
		$planes=$persona->planesClaro($_POST['plan']);
		echo json_encode($datos)."**".json_encode($planes);
    }

    public function carrito($id){
    	echo $id;exit;
    	$this->view->render('carrito');
    }
}