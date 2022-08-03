<?php

namespace Cianbox;

/**
 * Class Products
 *
 * @package Cianbox
 */
class Orders extends Resource {

	const URL_ORDERS_GET = "/pedidos/lista";
	const URL_ORDERS_POST = "/pedidos/alta";
    const URL_ORDERS_DELETE = "/pedidos/eliminar";
	

	/**
     * @param array|null $options
     *
     * @return get Customer response.
     */
    public function get($options = NULL) {
        return $this->request("GET", self::URL_ORDERS_GET, $this->cianbox->Auth->GetToken(), $options);
    }


    /**
     * @param array|null $options
     *
     * @return create Customer response.
     */
    public function create($options = NULL) {
        return $this->request("POST", self::URL_ORDERS_POST, $this->cianbox->Auth->GetToken(), $options);
    }


    /**
     * @param array|null $options
     *
     * @return delete orders
     */
    public function delete($options = NULL) {
        return $this->request("DELETE", self::URL_ORDERS_DELETE, $this->cianbox->Auth->GetToken(), $options);
    }
}
