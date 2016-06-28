<?php
namespace Imooc;

/**
 * 注册器模式--实现全局共享
 * 
 */
class Register{
	static protected $objects = array();

	static function set($alias, $obj){
		self::$objects[$alias] = $obj;
	}

	static function _unset($name){
		unset(self::$objects[$name]);
	}

	static function get($name){
		return self::$objects[$name];
	}
}