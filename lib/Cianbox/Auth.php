<?php

namespace Cianbox;

/**
 * Class Auth
 *
 * @package Cianbox
 */
class Auth extends Resource {

	const URL_AUTH = "/auth/credentials";

	/**
	 * @param string|null $id
	 *
	 * @return get a Charge.
	 */
	public function Token() {
		return $this->request("GET", self::URL_AUTH, '', $this->cianbox);
	}
}
