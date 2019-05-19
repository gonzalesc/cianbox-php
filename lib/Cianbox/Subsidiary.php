<?php

namespace Cianbox;

/**
 * Class Products
 *
 * @package Cianbox
 */
class Subsidiary  extends Resource {

	const URL_SUBSIDIARY = "/productos/sucursales";

	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get($options = NULL) {
		return $this->request("GET", self::URL_SUBSIDIARY, $this->cianbox->Auth->GetToken(), $options);
	}

}
 