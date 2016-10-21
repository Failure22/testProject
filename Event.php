<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 18.10.2016
 * Time: 1:23
 */
class Event {
	private $handlers = array();

	// Подписывает событие на обработчик
	/**
	 * @param $event
	 * @param callable $handler
	 */
	public function Register($event, callable $handler) {
		$this->handlers[$event][] = $handler;
	}


	// Вызывает определенное событие
	/**
	 * @param $event
	 * @param array $data
	 */
	public function Emit($event, $data = []) { // В качестве data можно передать АПСАЛЮТНА любые данные
		if (isset($this->handlers[$event])) {
			foreach ($this->handlers[$event] as $handler)
				$handler($data);
		}
	}

}

// Пример использования

$event = new Event();

$event->Register('e1', function ($data) { echo 'e1'; });
$event->Register('e2', function ($data2) { echo 'e2'; });

$event->Emit('e1', array(
	'Hello' => 'World'
));

$event->Emit('e2', array(
	'Chlen' => 'Bolshoy'
));

$event->Emit('e3', array(
	'Sashok' => 'FURRRRNIKAHHHH'
));