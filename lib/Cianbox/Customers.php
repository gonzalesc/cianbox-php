<?php

namespace Cianbox;

/**
 * Class Products
 *
 * @package Cianbox
 */
class Customers extends Resource {

	/**
	 * @param array|null $options
	 *
	 * @return get customers.
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

	/**
	 * @param array|null $options
	 *
	 * @return update Customer response.
	 */
	public function update($options = NULL) {
		return $this->request("PUT", '/clientes/editar', $this->cianbox->Auth->GetToken(), $options);
	}


	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get_cats($options = NULL) {
		return $this->request("GET", '/clientes/categorias', $this->cianbox->Auth->GetToken(), $options);
	}
}
