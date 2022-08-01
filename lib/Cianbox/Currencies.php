<?php

namespace Cianbox;

/**
 * Class Products
 *
 * @package Cianbox
 */
class Currencies extends Resource {

	const URL_CURRENCIES = "/general/cotizaciones/lista";

	/**
	 * @param array|null $options
	 *
	 * @return get customers.
	 */
	public function get($options = NULL) {
		return $this->request("GET", self::URL_CURRENCIES, $this->cianbox->Auth->GetToken(), $options);
	}
}
