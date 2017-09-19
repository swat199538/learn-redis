<?php
/**
 * Created by PhpStorm.
 * User: wangl
 * Date: 2017/9/18
 * Time: 13:27
 */

$redis = new Redis();

$redis->connect('localhost');

//设置字符串，第一个参数key,第二个参数value。设置成功返回1
$info = $redis->set('test', 'hello redis');
echo $info.PHP_EOL;

//获取对应key的值，没有返回空
echo $redis->get('test').PHP_EOL;

//删除对应的键值对，返回受影响的行数
echo $redis->del('test').PHP_EOL;