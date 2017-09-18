<?php
/**
 * Created by PhpStorm.
 * User: wangl
 * Date: 2017/9/18
 * Time: 13:34
 */

$redis = new Redis();

$redis->connect('localhost');

//右边推入元素，返回在当前list的索引
//$redis->rPush('t_list', 'item');

//$redis->rPush('t_list', 'item1');

//$redis->rPush('t_list', 'item2');

//echo $redis->rPush('t_list', 'item3');

//从列表出取出单个指定元素
//echo $redis->lIndex('t_list', 2);

//取出范围内的元素，0为起始索引，-1为结束索引
//var_dump($redis->lRange('t_list', 0 , -1));

//从左边弹出一个元素
//echo $redis->lPop('t_list').PHP_EOL;
//var_dump($redis->lRange('t_list', 0 , -1));

echo PHP_EOL;