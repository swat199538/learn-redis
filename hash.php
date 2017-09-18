<?php
/**
 * Created by PhpStorm.
 * User: wangl
 * Date: 2017/9/18
 * Time: 17:51
 */
$redis = new Redis();

$redis->connect('localhost');

//在散列里面关联起给定的键值对，返回0表示给定的键已存在
echo $redis->hSet('hash-key', 'sub-key1', 'value1').PHP_EOL;
echo $redis->hSet('hash-key', 'sub-key1', 'value1').PHP_EOL;
echo $redis->hSet('hash-key', 'sub-key3', 'value2').PHP_EOL;
echo $redis->hSet('hash-key', 'sub-key3', 'value2').PHP_EOL;

//获取散列包含的所以键值对，以数组的形式
var_dump($redis->hGetAll('hash-key'));