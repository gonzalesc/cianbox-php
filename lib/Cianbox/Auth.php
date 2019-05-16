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
	public function CreateToken() {
		return $this->request("POST", self::URL_AUTH, '', $this->cianbox->options);
	}
}
