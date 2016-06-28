<?php
namespace Imooc;

class Database{
	public $sql;
	public $tableName;
	static protected $db;

	/*单例模式：该类只允许实例化一次*/
	private function __construct(){
		// do nothing;
	}

	static public function getInstance(){
		if(!self::$db){
			self::$db = new self();
		}
		return self::$db;
	}

	public function field($field){
		return $this;
	}

	public function where($where){
		return $this;
	}

	public function group($group){
		return $this;
	}

	public function order($order){
		return $this;
	}

	public function limit($limit){
		return $this;
	}

	public function getLastSql(){
		return $this->sql;
	}
}


?>