<?php
header("Content-type: text/html; charset=utf-8");
echo '<title>大话PHP设计模式</title>';

define('BASEDIR', __DIR__);
include BASEDIR.'/Imooc/Loader.php';
// 类的自动加载
spl_autoload_register('\\Imooc\\Loader::autoload');

$db = \Imooc\Factory::createDatabase('user');
var_dump($db);

$db2 = \Imooc\Register::get('user');
var_dump($db2);

/*
魔术方法  __get(),__set(),__call(),__callStatic(),__toString(),__invoke();
$obj = new \Imooc\Object();
$obj->title = 'this is a test';
echo $obj->title;
echo '<br/>';
echo $obj->test('abc',123);
echo '<br/>';
echo \Imooc\Object::test('cmd','java','php');
echo '<br/>';
echo $obj;
echo '<br/>';
echo $obj('1234');
*/

/*
链式编程写法
$db = new \Imooc\Database();
$db->where("id=12")->order("id DESC")->limit(10);
echo $db->getLastSql();	*/

/*PHP的spl标准库*/
/*
// 栈数据结构--先进后出
$stack = new \SplStack();
$stack->push("data1\n");
$stack->push("data2\n");

echo $stack->pop();
echo $stack->pop();
echo "<br/>";

// 队列数据结构--先进先出
$queue = new \SplQueue();
$queue->enqueue("data1\n");
$queue->enqueue("data2\n");

echo $queue->dequeue();
echo $queue->dequeue();
echo "<br/>";

// 堆数据结构（小堆）
$heap = new \SplMinHeap();
$heap->insert("data1\n");
$heap->insert("data2\n");

echo $heap->extract();
echo $heap->extract();
echo "<br/>";

// 固定长度数组
$array = new \SplFixedArray(10);
$array[0] = 10;
$array[9] = 1;
var_dump($array);
*/

?>