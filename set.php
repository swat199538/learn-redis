<?php
/**
 * Created by PhpStorm.
 * User: wangl
 * Date: 2017/9/18
 * Time: 13:50
 */
$redis = new Redis();

$redis->connect('localhost');

//尝试讲元素添加到集合，命令返回1表示这个元素返回成功，0表示元素存在
//echo $redis->sAdd('set', 'item').PHP_EOL;
//echo $redis->sAdd('set', 'item').PHP_EOL;
//echo $redis->sAdd('set', 'item2').PHP_EOL;

//获取集合所有内容
//var_dump($redis->sMembers('set'));

//检查一个元素是否存在一个集合,结果bool值
//echo $redis->sIsMember('set', 'item').PHP_EOL;
//var_dump( $redis->sIsMember('set', 'xxx'));

//移除集合中的元素，会返回移除的数量
//var_dump($redis->sRem('set', 'item'));