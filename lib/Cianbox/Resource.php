<?php

namespace Cianbox;

/**
 * Class Resource
 *
 * @package Culqi
 */
class Resource extends Client {

	/**
	 * Constructor.
	 */
	public function __construct($cianbox)
	{
		$this->cianbox = $cianbox;
	}

}
