<?php

namespace Cianbox;

/**
 * Class Products
 *
 * @package Cianbox
 */
class Invoices extends Resource {

	const URL_INVOICES = "/clientes/facturas";

	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get($options = NULL) {
		return $this->request("GET", self::URL_INVOICES, $this->cianbox->Auth->GetToken(), $options);
	}

}
