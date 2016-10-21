<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 18.10.2016
 * Time: 2:00
 */
class Facade {
	private $_worker;

	public function __construct (IFacadeWorker $worker) {
		$this->_worker = $worker;
	}

	/**
	 * @param $text
	 *
	 * @return string
	 */
	public function Processing($text) {
		return $this->_worker->Processing($text);
	}
}

interface IFacadeWorker {
	/**
	 * @param string $text
	 *
	 * @return string
	 */
	public function Processing($text);
}

class FacadeTagStripper implements IFacadeWorker {

	/**
	 * @param string $text
	 *
	 * @return string
	 */
	public function Processing ($text) {
		return strip_tags($text);
	}
}