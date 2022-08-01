<?php

namespace Cianbox;

/**
 * Class Products
 *
 * @package Cianbox
 */
class BankAccounts extends Resource {

	const URL_BANK_ACCOUNTS = "/clientes/ctacte";

	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get($options = NULL) {
		return $this->request("GET", self::URL_BANK_ACCOUNTS, $this->cianbox->Auth->GetToken(), $options);
	}

}
