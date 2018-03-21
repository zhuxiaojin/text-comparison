<?php
/**
 * Created by PhpStorm.
 * User: storm  910194413@qq.com
 * Date: 2018/3/21
 * Time: 下午4:41
 */
require 'vendor/autoload.php';
use Text\TextComparison;
$lcs = new TextComparison();
//返回最长公共子序列
$first_word="党政教育的意义是为了让政府更好的服务人民";
print $first_word;
print '<br>';
$second_word="为了让政府更好的服务人民";
print $second_word;
print '<br>';
//返回相似度
$data=$lcs->setScore(15)->getSimilar($first_word,$second_word);
//echo $similar;
print '<br>';
//$similar=ceil($similar*100);
print_r($data);

