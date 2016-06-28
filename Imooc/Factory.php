<?php
namespace Imooc;
/**
 * 工厂模式类
 * author sucd
 */
class Factory{

	static public function createDatabase($tableName){
		$db = Database::getInstance();
		$db->tableName = $tableName;
		Register::set($tableName,$db);
		return $db;
	}
}


