<?php
namespace Core;

abstract class Controller {

	protected $container;

	public function __construct($container) {
		$this->container = $container;
	}

}
