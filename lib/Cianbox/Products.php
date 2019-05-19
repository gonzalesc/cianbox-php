<?php

namespace Cianbox;

/**
 * Class Products
 *
 * @package Cianbox
 */
class Products extends Resource {

	const URL_PRODUCTS = "/productos";

	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get($options = NULL) {
		return $this->request("GET", self::URL_PRODUCTS, $this->cianbox->Auth->GetToken(), $options);
	}

}
