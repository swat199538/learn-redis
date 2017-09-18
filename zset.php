<?php
/**
 * Created by PhpStorm.
 * User: wangl
 * Date: 2017/9/18
 * Time: 20:14
 */

$redis = new Redis();

$redis->connect('localhost');

//尝试向有序集合添加元素，命令会返回新添加元素的数量
echo $redis->zAdd('zset-key', 728, 'member1').PHP_EOL;
echo $redis->zAdd('zset-key', 828, 'member2').PHP_EOL;
echo $redis->zAdd('zset-key', 128, 'member3').PHP_EOL;
echo $redis->zAdd('zset-key', 1028, 'member4').PHP_EOL;

//获取有序集合包含的所有元素
var_dump($redis->zRange('zset-key', 0, -1, true));

//根据分值来获取部分
var_dump($redis->zRangeByScore('zset-key', 100, 200));

//移除有序集合的元素，返回移除数量
echo $redis->zRem('zset-key', 'member1').PHP_EOL;