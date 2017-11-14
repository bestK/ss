<?php
header('Content-Type: application/json');
header('Content-Type: text/html;charset=utf-8');
require 'vendor/autoload.php';
use QL\QueryList;



$method = QueryList::Query('https://go.ishadowx.net/',array("config"=>array('.hover-text h4','text'),'.row'));


$methoddata = $method->getData(function($x){
	return $x['config'];
});

$methoddata = str_replace("Click to view QR Code","---配置---",$methoddata);

echo json_encode(str_replace("\n","",$methoddata));
