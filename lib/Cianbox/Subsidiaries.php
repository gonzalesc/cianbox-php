<?php

namespace Cianbox;

/**
 * Class Products
 *
 * @package Cianbox
 */
class Subsidiaries extends Resource {

	const URL_SUBSIDIARIES = "/productos/sucursales";

	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get($options = NULL) {
		return $this->request("GET", self::URL_SUBSIDIARIES, $this->cianbox->Auth->GetToken(), $options);
	}

}
 