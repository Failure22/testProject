<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 18.10.2016
 * Time: 1:01
 */
class Singleton {
	private $_param1 = 1;
	private $_param2 = 2;

	private static $singleton;

	private static function _init () {
		if (self::$singleton == null)
			self::$singleton = new Singleton();
	}

	private  function __construct(){

	}

	/**
	 * @param int $value = 1
	 *
	 * @return int
	 */
	public function param1 ($value = 1) {
		if (func_num_args() != 0)
			$this->_param1 = $value;

		return $this->_param1;
	}

	/**
	 * @param int $value = 2
	 *
	 * @return int
	 */
	public function param2 ($value = 2) {
		if (func_num_args() != 0)
			$this->_param2 = $value;

		return $this->_param2;
	}

}