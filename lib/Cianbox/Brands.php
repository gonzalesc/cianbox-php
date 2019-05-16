<?php

namespace Cianbox;

/**
 * Class Products
 *
 * @package Cianbox
 */
class Brands extends Resource {

	const URL_BRANDS = "/productos/marcas";

	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get($options = NULL) {
		return $this->request("GET", self::URL_BRANDS, $this->cianbox->Token, $options);
	}

}
