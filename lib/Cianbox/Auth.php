<?php

namespace Cianbox;

/**
 * Class Auth
 *
 * @package Cianbox
 */
class Auth extends Resource {

	protected $Token = null;

	const URL_AUTH = "/auth/credentials";

	/**
	 *
	 * @return create Token.
	 */
	public function CreateToken() {
		return $this->request("POST", self::URL_AUTH, '', $this->cianbox->options);
	}

	/**
	 *
	 * @return get Token.
	 */
	public function GetToken() {
		
		if( !is_null($this->Token) )
			return $this->Token;

		$this->Token = $this->CreateToken()->body->access_token;
		
		if( !$this->Token )
			throw new Errors\InvalidToken();

		return $this->Token;
	}
}
