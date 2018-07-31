<?php 
class Luu {
	private static $pwd_key;
	private static $post;
	public static function init($_post,$_clave){
		self::$post    = $_post;
		self::$pwd_key = $_clave;
	}
	public static function getEncrypt($string) {
		$result = '';
		$string = sprintf('%s%s',date('s:i:s', time()),$string);
		for($i=0; $i<strlen($string); $i++) {
			$char = substr($string, $i, 1);
			$keychar = substr(self::$pwd_key, ($i % strlen(self::$pwd_key))-1, 1);
			$char = chr(ord($char)+ord($keychar));
			$result.=$char;
		}
		return base64_encode($result);
	}
	public static function getDecrypt($string) {
		$result = '';
		$string = base64_decode($string);
		for($i=0; $i<strlen($string); $i++) {
			$char = substr($string, $i, 1);
			$keychar = substr(self::$pwd_key, ($i % strlen(self::$pwd_key))-1, 1);
			$char = chr(ord($char)-ord($keychar));
			$result.=$char;
		}
		$result=substr($result,8,strlen($result)-8);
		return $result;
	}
	public static function getPost($attr){
		if(isset(self::$post[$attr])){$value=self::$post[$attr];}else{$value="";}
		return $value;
	}
}
?>