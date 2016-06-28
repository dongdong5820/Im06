<?php
namespace Imooc;

class Loader{

	static public function autoload($class){
		$file = BASEDIR . '/'.str_replace('\\', '/', $class).'.php';
		require $file;
	}
}