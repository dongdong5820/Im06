<?php
header("Content-type: text/html; charset=utf-8");

echo "类文件的自动载入__autoload<br/>";
Test1::test();
Test2::test();

function __autoload($class){
	require __DIR__.'/'.$class.'.php';	
}

echo "<hr>";

?>