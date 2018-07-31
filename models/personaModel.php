<?php 
class personaModel extends Model{
	public function __construct(){
		parent::__construct();
	}

	public function listaPromocion(){
		$query=$this->db->prepare('CALL promocion()');
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		$data=$query->fetchAll();
		return $data;
	}

	public function filterPlanPromocion($mIdEquipo=1,$mIdTipoVenta=2,$mIdCuota=3){

		$query=$this->db->prepare(
				"SELECT * FROM utb_precio_persona_promo x WHERE x.intIdEquipo = '".$mIdEquipo."' AND x.intIdTipoVenta = '".$mIdTipoVenta."' and x.intCuotas = '".$mIdCuota."'");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		$data=$query->fetchAll();
		$menor=$data[0]['numPrecio'];
		for ($i=1; $i < count($data) ; $i++) { 
			if ($data[$i]['numPrecio']<$menor) {
				$menor=$data[$i]['numPrecio'];
			}
			
		}
		$query=$this->db->prepare(
				"SELECT * FROM utb_precio_persona_promo x WHERE x.intIdEquipo = '".$mIdEquipo."' AND x.intIdTipoVenta='".$mIdTipoVenta."' and x.intCuotas='".$mIdCuota."' and x.numPrecio='".$menor."' LIMIT 1");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		$data=$query->fetchAll();
		$arr=$data[0]['intIdPlan'];
		return $arr;
	}

	public function numListaPromocion($mPlan,$modelo=1){
		$query=$this->db->prepare(
			"SELECT utvp.strTipoVenta,upep.numPrecio,uep.strEquipo,ucp.strCuota,upp.strPlan,uep.precioprepago,uep.intIdEquipo,strFoto,strFoto1 from utb_precio_persona_promo upep 
				inner join utb_equipo_persona_promo uep on upep.intIdEquipo = uep.intIdEquipo 
				inner join utb_marca_persona ump on uep.intIdMarca = ump.intIdMarca 
				inner join utb_tipo_venta_persona utvp on upep.intIdTipoVenta = utvp.intIdTipoVenta 
				inner join utb_cuotas_persona ucp on upep.intCuotas = ucp.intCuotas 
				inner join utb_plan_persona upp on upp.intIdPlan = upep.intIdPlan
				where utvp.strTipoVenta='PORTABILIDAD' and ucp.strCuota='18_CUOTA' and ump.intIdMarca='".$modelo."' and upep.intIdPlan = '".$mPlan."' ");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		$data=$query->fetchAll();
		//print_r($data);exit();
		return $data;
	}

	public function filterPlanPromocion2($mIdEquipo=1,$mIdTipoVenta=2,$mIdCuota=3){
		//echo $mIdEquipo.$mIdTipoVenta.$mIdCuota;exit;
		/****************precio menor******alcatel********/
		$query=$this->db->prepare(
"SELECT * FROM utb_precio_persona_promo x WHERE x.intIdEquipo = '".$mIdEquipo."' and x.intIdTipoVenta='".$mIdTipoVenta."' and x.intCuotas='".$mIdCuota."'");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		$data=$query->fetchAll();
		$menor=$data[0]['numPrecio'];
		for ($i=1; $i < count($data) ; $i++) { 
			if ($data[$i]['numPrecio']<$menor) {
				$menor=$data[$i]['numPrecio'];
			}
			
		}

		//echo $menor;exit;
		$query=$this->db->prepare(
"SELECT * FROM utb_precio_persona_promo x WHERE x.intIdEquipo = '".$mIdEquipo."' and x.intIdTipoVenta='".$mIdTipoVenta."' and x.intCuotas='".$mIdCuota."' and x.numPrecio='".$menor."' limit 1");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		$data=$query->fetchAll();
		$arr=$data[0]['intIdPlan'];
		//print_r($arr);exit();
		/********************$arr= menor plan************/
		return $arr;
	}

	public function numListaPromocion2($mPlan,$modelo=2){
		$query=$this->db->prepare(
"select utvp.strTipoVenta,upep.numPrecio,uep.strEquipo,ucp.strCuota,upp.strPlan,uep.precioprepago,uep.intIdEquipo,strFoto,strFoto1 from utb_precio_persona_promo upep 
inner join utb_equipo_persona_promo uep on upep.intIdEquipo = uep.intIdEquipo 
inner join utb_marca_persona ump on uep.intIdMarca = ump.intIdMarca 
inner join utb_tipo_venta_persona utvp on upep.intIdTipoVenta = utvp.intIdTipoVenta 
inner join utb_cuotas_persona ucp on upep.intCuotas = ucp.intCuotas 
inner join utb_plan_persona upp on upp.intIdPlan = upep.intIdPlan
where utvp.strTipoVenta='PORTABILIDAD' and ucp.strCuota='18_CUOTA' and ump.intIdMarca='".$modelo."' and upep.intIdPlan = '".$mPlan."' ");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		$data=$query->fetchAll();
		//print_r($data);exit();
		return $data;
	}


	public function numListaPromocion3($mPlan,$modelo=3){
		$query=$this->db->prepare(
"select utvp.strTipoVenta,upep.numPrecio,uep.strEquipo,ucp.strCuota,upp.strPlan,uep.precioprepago,uep.intIdEquipo,strFoto,strFoto1 from utb_precio_persona_promo upep 
inner join utb_equipo_persona_promo uep on upep.intIdEquipo = uep.intIdEquipo 
inner join utb_marca_persona ump on uep.intIdMarca = ump.intIdMarca 
inner join utb_tipo_venta_persona utvp on upep.intIdTipoVenta = utvp.intIdTipoVenta 
inner join utb_cuotas_persona ucp on upep.intCuotas = ucp.intCuotas 
inner join utb_plan_persona upp on upp.intIdPlan = upep.intIdPlan
where utvp.strTipoVenta='PORTABILIDAD' and ucp.strCuota='18_CUOTA' and ump.intIdMarca='".$modelo."' and upep.intIdPlan = '".$mPlan."' ");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		$data=$query->fetchAll();
		//print_r($data);exit();
		return $data;
	}
		public function filterPlanPromocion3($mIdEquipo=1,$mIdTipoVenta=2,$mIdCuota=3){
		//echo $mIdEquipo.$mIdTipoVenta.$mIdCuota;exit;
		/****************precio menor******alcatel********/
		$query=$this->db->prepare(
"select * from utb_precio_persona_promo x where x.intIdEquipo = '".$mIdEquipo."' and x.intIdTipoVenta='".$mIdTipoVenta."' and x.intCuotas='".$mIdCuota."'");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		$data=$query->fetchAll();
		$menor=$data[0]['numPrecio'];
		for ($i=1; $i < count($data) ; $i++) { 
			if ($data[$i]['numPrecio']<$menor) {
				$menor=$data[$i]['numPrecio'];
			}
			
		}

		//echo $menor;exit;
		$query=$this->db->prepare(
"select * from utb_precio_persona_promo x where x.intIdEquipo = '".$mIdEquipo."' and x.intIdTipoVenta='".$mIdTipoVenta."' and x.intCuotas='".$mIdCuota."' and x.numPrecio='".$menor."' limit 1");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		$data=$query->fetchAll();
		$arr=$data[0]['intIdPlan'];
		//print_r($arr);exit();
		/********************$arr= menor plan************/
		return $arr;
	}

		public function ListaVentaPromocion($mPlan,$mMarca,$mTipoVenta=2,$mCuota=3){
		$query=$this->db->prepare(
"SELECT utvp.strTipoVenta,upep.numPrecio,uep.strEquipo,ucp.strCuota,upp.strPlan,uep.precioprepago,uep.intIdEquipo,strFoto,strFoto1 from utb_precio_persona_promo upep 
inner join utb_equipo_persona_promo uep on upep.intIdEquipo = uep.intIdEquipo 
inner join utb_marca_persona ump on uep.intIdMarca = ump.intIdMarca 
inner join utb_tipo_venta_persona utvp on upep.intIdTipoVenta = utvp.intIdTipoVenta 
inner join utb_cuotas_persona ucp on upep.intCuotas = ucp.intCuotas 
inner join utb_plan_persona upp on upp.intIdPlan = upep.intIdPlan
where utvp.intIdTipoVenta='".$mTipoVenta."' and ucp.intCuotas='".$mCuota."' and uep.intIdEquipo='".$mMarca."' and upep.intIdPlan = '".$mPlan."' ");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		return $query->fetchAll();
	}

/****************************************/
	public function filterPlan($mIdEquipo=1,$mIdTipoVenta=2,$mIdCuota=2){
		//echo $mIdEquipo.$mIdTipoVenta.$mIdCuota;exit;
		/****************precio menor******alcatel************/
		$query=$this->db->prepare(
"select * from utb_precio_equipo_persona x where x.intIdEquipo = '".$mIdEquipo."' and x.intIdTipoVenta='".$mIdTipoVenta."' and x.intCuotas='".$mIdCuota."'");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		$data=$query->fetchAll();
		$menor=$data[0]['numPrecio'];
		for ($i=1; $i < count($data) ; $i++) { 
			if ($data[$i]['numPrecio']<$menor) {
				$menor=$data[$i]['numPrecio'];
			}
			
		}

		//echo $menor;exit;
		$query=$this->db->prepare(
"select * from utb_precio_equipo_persona x where x.intIdEquipo = '".$mIdEquipo."' and x.intIdTipoVenta='".$mIdTipoVenta."' and x.intCuotas='".$mIdCuota."' and x.numPrecio='".$menor."' limit 1");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		$data=$query->fetchAll();
		$arr=$data[0]['intIdPlan'];
		//print_r($arr);exit();
		/********************$arr= menor plan************/
		return $arr;
	}


		public function numLista($mPlan,$modelo=1){
		$query=$this->db->prepare(
"SELECT utvp.strTipoVenta,upep.numPrecio,uep.strEquipo,ucp.strCuota,upp.strPlan,uep.precioprepago,uep.intIdEquipo,strFoto,strFoto1 from utb_precio_equipo_persona upep 
inner join utb_equipo_persona uep on upep.intIdEquipo = uep.intIdEquipo 
inner join utb_marca_persona ump on uep.intIdMarca = ump.intIdMarca 
inner join utb_tipo_venta_persona utvp on upep.intIdTipoVenta = utvp.intIdTipoVenta 
inner join utb_cuotas_persona ucp on upep.intCuotas = ucp.intCuotas 
inner join utb_plan_persona upp on upp.intIdPlan = upep.intIdPlan
where utvp.strTipoVenta='PORTABILIDAD' and ucp.strCuota='12_CUOTA' and ump.intIdMarca='".$modelo."' and upep.intIdPlan = '".$mPlan."' ");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		$data=$query->fetchAll();
		//print_r($data);exit();
		return $data;
	}

		public function ListaVenta($mPlan,$mMarca,$mTipoVenta=2,$mCuota=2,$flag=1){
		$query=$this->db->prepare(
"SELECT utvp.strTipoVenta,upep.numPrecio,uep.strEquipo,ucp.strCuota,upp.strPlan,uep.precioprepago,uep.intIdEquipo,strFoto,strFoto1 from utb_precio_equipo_persona upep 
inner join utb_equipo_persona uep on upep.intIdEquipo = uep.intIdEquipo 
inner join utb_marca_persona ump on uep.intIdMarca = ump.intIdMarca 
inner join utb_tipo_venta_persona utvp on upep.intIdTipoVenta = utvp.intIdTipoVenta 
inner join utb_cuotas_persona ucp on upep.intCuotas = ucp.intCuotas 
inner join utb_plan_persona upp on upp.intIdPlan = upep.intIdPlan
where utvp.intIdTipoVenta='".$mTipoVenta."' and ucp.intCuotas='".$mCuota."' and uep.intIdEquipo='".$mMarca."' and upep.intIdPlan = '".$mPlan."'");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		return $query->fetchAll();
	}

/*****************************************/

public function llenarComboBoxTipoVenta(){
			$query=$this->db->prepare(
		"SELECT * FROM utb_tipo_venta_persona ");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		$data=$query->fetchAll();
		return $data;
}

public function llenarComboBoxCuota(){
			$query=$this->db->prepare(
		"SELECT * FROM utb_cuotas_persona ");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		$data=$query->fetchAll();
		return $data;
}
public function llenarComboBoxMarca(){
			$query=$this->db->prepare(
		"SELECT * FROM utb_marca_persona");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		$data=$query->fetchAll();
		return $data;
}

public function llenarComboBoxPlan(){
			$query=$this->db->prepare(
		"SELECT * FROM utb_plan_persona");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		$data=$query->fetchAll();
		return $data;
}


/***********************evento change combo box*************************/
	public function countMarca($marca){
				$query=$this->db->prepare(
"select count(*) as can, min(intIdEquipo) as idEquipo from utb_equipo_persona c where c.intIdMarca=(select intIdMarca from utb_marca_persona b where b.intIdMarca='".$marca."')");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		$data=$query->fetchAll();
		//print_r($data);exit;
		return $data;
	}


	public function mTipoVenta($cbxTipoVenta, $cbxCuota, $cbxPlan, $codCelu){
		//echo $cbxPlan;exit;
						$query=$this->db->prepare(
"select utvp.strTipoVenta,upep.numPrecio,uep.strEquipo,ucp.strCuota,upp.strPlan,uep.precioprepago,uep.intIdEquipo
from utb_precio_equipo_persona upep 
inner join utb_equipo_persona uep on upep.intIdEquipo = uep.intIdEquipo 
inner join utb_marca_persona ump on uep.intIdMarca = ump.intIdMarca 
inner join utb_tipo_venta_persona utvp on upep.intIdTipoVenta = utvp.intIdTipoVenta 
inner join utb_cuotas_persona ucp on upep.intCuotas = ucp.intCuotas 
inner join utb_plan_persona upp on upp.intIdPlan = upep.intIdPlan
where utvp.intIdTipoVenta='".$cbxTipoVenta."' and ucp.intCuotas='".$cbxCuota."' and upp.intIdPlan = '".$cbxPlan."' and uep.intIdEquipo ='".$codCelu."' LIMIT 1 ");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		$data=$query->fetchAll();
		return $data;
	}

	public function descripcionEquipo($id){
		$query=$this->db->prepare("select * from utb_equipo_persona where intIdEquipo='".$id."'");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		$data=$query->fetchAll();
		return $data;
	}

	public function planesClaro($id){
		$this->db-> exec("SET CHARACTER SET utf8");
		$query=$this->db->prepare("select * from planesclaromax where id='".$id."'");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		$data=$query->fetchAll();
		return $data;
	}

}