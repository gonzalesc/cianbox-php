<?php

namespace Cianbox;

/**
 * Class Products
 *
 * @package Cianbox
 */
class Places extends Resource {

	const URL_PLACES = "/general/localidades";

	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get($options = NULL) {
		return $this->request("GET", self::URL_PLACES, $this->cianbox->Auth->GetToken(), $options);
	}

}
