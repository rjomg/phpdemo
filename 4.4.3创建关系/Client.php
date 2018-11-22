<?php
/**
 * Created by PhpStorm.
 * User: 11642
 * Date: 2018/11/15
 * Time: 11:57
 */
include_once ('ConcreteCreator.php');
$create = new ConcreteCreator();
$product = $create->factoryMethod('A');
$product->Hello();
$product->AnOperation();

$product = $create->factoryMethod('B');

$product->Hello();



