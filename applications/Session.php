<?php 
class Session{
	public static function init(){
	}
	public static function destroy($clave=''){
		if (isset($_SESSION[$clave])) {
			unset($_SESSION[$clave]);
		}else if($clave==''){
			session_destroy();	
		}

	}
	public static function set($clave,$valor){
		if (!empty($clave)) {
			$_SESSION[$clave]=$valor;
		}
	}
	public static function get($clave=false){
		$var = '';
		if (isset($_SESSION[$clave])){
			$var = $_SESSION[$clave];
		}
		return $var;
	}
	public static function idSession(){
		session_regenerate_id();
		$_SESSION["id"] = session_id();
		$_SESSION["webapp"] = app_name;
		return;
	}

	public static function regenerar(){
		session_regenerate_id();
	}
}
?>