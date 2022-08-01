<?php

namespace Cianbox;

/**
 * Class Products
 *
 * @package Cianbox
 */
class Statuses extends Resource {

	const URL_PRICES = "/pedidos/estados/lista";

	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get($options = NULL) {
		return $this->request("GET", self::URL_PRICES, $this->cianbox->Auth->GetToken(), $options);
	}

}
