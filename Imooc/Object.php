<?php
namespace Imooc;

class Object{
	protected $configs = array();

	public function __get($key){
		echo $key.'<br/>';
		return $this->configs[$key];
	}

	public function __set($key, $value){
		echo $key.'//'.$value.'<br/>';
		$this->configs[$key] = $value;
	}

	public function __call($func,$params){
		echo $func.'<br/>';
		var_dump($params);
		return '__call函数被调用了';
	}

	static function __callStatic($func, $params){
		echo $func.'<br/>';
		var_dump($params);
		return '__callStatic函数被调用了';
	}

	public function __toString(){
		echo "__toString函数被调用了<br/>";
		return __CLASS__;
	}

	public function __invoke($params){
		var_dump($params);
		return "__invoke函数被调用了";
	}
}