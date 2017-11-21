<?php
/**
 * Created by PhpStorm.
 * User: wangl
 * Date: 2017/11/21
 * Time: 14:11
 */

$redis = new Redis();

$redis->connect('127.0.0.1', 6379);

//redis字符串可以存储3种类型的值 字符串(byte string) 整数 浮点数

//INCR命令 将键存储的值加1(只能操作整数)
//如果没有这个key会把值默认为0然后加上1
$info = $redis->incr('test');
var_dump($info);//返回设置后的值
//如果key对应的value不是一个整型，则返回false
$redis->set('test2', 'a');//字符串
var_dump($redis->incr('test2'));//返回false
$redis->set('test3', 0.21);//浮点
var_dump($redis->incr('test3'));//返回false

//DECR命令 将存储的值减1（只能操作整数）
//如果没有这个key会把值默认为0然后减去1
var_dump($redis->decr('test4'));
//如果key对应的value不是一个整型，则返回false
var_dump($redis->decr('test2'));//false
var_dump($redis->incr('test3'));//返回false

//INCRBY 将键存储的值加上amount
//如果没有这个key会把值默认为0然后加上指定的值
var_dump($redis->incrBy('test5', 10));
//如果key对应的value不是一个整型，则返回false
var_dump($redis->incrBy('test2', 10));//false
var_dump($redis->incrBy('test3', 10));//false


//DECRBY 将键存储的值减去amount
//如果没有这个key会把值默认为0然后减去的值
var_dump($redis->decrBy('test6', 10));
//如果key对应的value不是一个整型，则返回false
var_dump($redis->decrBy('test2', 10));//false
var_dump($redis->decrBy('test3', 10));//false

//INCRBYFLOAT 将键存储的值加上浮点数amount,支持整数和浮点数，string会返回false
var_dump($redis->incrByFloat('test6', 11.1));
var_dump($redis->incrByFloat('test2', 11.1));//false

//redis处理字串和二进制的命令 //会将所有的值当字符串处理

//APPEND 将value追加到给定key当前存储的值的末尾
$redis->set('demo', 'xqcb');
$redis->append('demo', 'g');
var_dump($redis->get('demo'));//ggg
//如果这个key没有就会相当于在空字符串上面追加
var_dump($redis->append('demo1', 'x'));
var_dump($redis->get('demo1'));
$redis->set('demo2', 1);
$redis->append('demo2', 1);
var_dump($redis->get('demo2'));//11

//GETRANGE 获取一个由偏移量start到偏移量end范围内所有字符组成的字串,报告start和end在内（从0开始）
var_dump($redis->getRange('demo', 1, 2));