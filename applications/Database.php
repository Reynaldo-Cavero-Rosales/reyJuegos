<?php 
class Database extends PDO{
	/*private $host='db.netaxxes.com';
	private $user='root';
	private $pass='r0squ3t3';
	private $base='claro';*/
	private $host='localhost';
	private $user='root';
	private $pass='';
	private $base='claro2';


	public function __construct(){
		parent::__construct('mysql:host='.$this->host.';dbname='.$this->base,$this->user,$this->pass);
	}
}