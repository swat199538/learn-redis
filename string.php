<?php
/**
 * Created by PhpStorm.
 * User: wangl
 * Date: 2017/9/18
 * Time: 13:27
 */

$redis = new Redis();

$redis->connect('localhost');

$info = $redis->set('test', 123);

echo $info;

echo $redis->get('test');

echo PHP_EOL;

$redis->del('test');