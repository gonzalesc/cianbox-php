<?php

namespace Cianbox;

/**
 * Class Products
 *
 * @package Cianbox
 */
class Categories extends Resource {

	const URL_BRANDS = "/productos/categorias";

	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get($options = NULL) {
		return $this->request("GET", self::URL_BRANDS, $this->cianbox->Auth->GetToken(), $options);
	}

}
