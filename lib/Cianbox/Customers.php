<?php

namespace Cianbox;

/**
 * Class Products
 *
 * @package Cianbox
 */
class Customers extends Resource {

	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get($options = NULL) {
		return $this->request("GET", '/clientes', $this->cianbox->Auth->GetToken(), $options);
	}

	/**
     * @param array|null $options
     *
     * @return create Customer response.
     */
    public function create($options = NULL) {
        return $this->request("POST", '/clientes/alta', $this->cianbox->Auth->GetToken(), $options);
    }

}
