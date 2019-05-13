<?php

namespace Cianbox;

/**
 * Class Products
 *
 * @package Cianbox
 */
class Products extends Resource {

	const URL_PRODUCTS = "/productos";

	/**
	 * @param array|null $options
	 *
	 * @return all Products.
	 */
	public function all($options = NULL) {
		return $this->request("GET", self::URL_PRODUCTS, $this->Token, $options);
	}

	/**
	 * @param array|null $options
	 *
	 * @return create Product.
	 */
	public function create($options = NULL) {
		return $this->request("POST", self::URL_PRODUCTS, $this->Token, $options);
	}

	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get($id = NULL) {
		return $this->request("GET", self::URL_PRODUCTS . $id . "/", $this->Token);
	}

	/**
	 * @param string|null $id
	 * @param array|null $options
	 *
	 * @return update Product response.
	 */
	public function update($id = NULL, $options = NULL) {
		return $this->request("PATCH", self::URL_PRODUCTS . $id . "/", $this->Token, $options);
	}

}
