<?php

namespace Cianbox;

/**
 * Class Products
 *
 * @package Cianbox
 */
class Prices extends Resource {

	const URL_PRICES = "/productos/listas";

	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get($options = NULL) {
		return $this->request("GET", self::URL_PRICES, $this->cianbox->Auth->GetToken(), $options);
	}

}
