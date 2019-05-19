<?php

namespace Cianbox;

/**
 * Class Products
 *
 * @package Cianbox
 */
class Orders extends Resource {

	const URL_ORDERS = "/pedidos/alta";

	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get($options = NULL) {
		return $this->request("GET", self::URL_ORDERS, $this->cianbox->Auth->GetToken(), $options);
	}

	/**
     * @param array|null $options
     *
     * @return create Customer response.
     */
    public function create($options = NULL) {
        return $this->request("POST", self::URL_ORDERS, $this->cianbox->Auth->GetToken(), $options);
    }

}
