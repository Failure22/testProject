<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 18.10.2016
 * Time: 2:22
 */

$kitten = array();
$kitten[] = 'Персик';
$kitten[] = 'Пушок';
$kitten[] = 'Говнюк';

foreach ($kitten as $kitty) {
	echo $kitty, "\r\n";
}

class MyEbanyClass {
	public static $svoistvo = 'Hui';
	public $svoistvo2 = 'NeHui';
}

$object1 = new MyEbanyClass();
$object2 = new MyEbanyClass();

MyEbanyClass::$svoistvo = 'BolshoyHui'; // static не относятся к объекту класса, а вызываются из самого класса. Эдакий местный синглтон