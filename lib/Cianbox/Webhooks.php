<?php

namespace Cianbox;

/**
 * Class Products
 *
 * @package Cianbox
 */
class Webhooks extends Resource {

	const URL_WEBHOOKS = "/notificaciones";

	/**
	 * @param string|null $id
	 *
	 * @return get a Product.
	 */
	public function get($options = NULL) {
		return $this->request("GET", self::URL_WEBHOOKS . '/lista', $this->cianbox->Auth->GetToken(), $options);
	}

	/**
     * @param array|null $options
     *
     * @return create Customer response.
     */
    public function create($options = NULL) {
        return $this->request("POST", self::URL_WEBHOOKS . '/alta', $this->cianbox->Auth->GetToken(), $options);
    }

}
