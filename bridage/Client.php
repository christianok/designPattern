<?php namespace design\bridge;

$product = new Apple();
$corp = new TencentCorp($product);
$corp->makeMoney();


$product = new Ipod();
$corp = new BaiduCorp($product);
$corp->makeMoney();
