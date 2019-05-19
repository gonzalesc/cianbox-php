<?php

namespace Cianbox;

use Cianbox\Error as Errors;

/**
 * Class Auth
 *
 * @package Cianbox
 */
class Auth extends Resource {

	protected $Token = null;
	protected $DataToken;

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

		$this->DataToken = $this->CreateToken();

		if( !isset($this->DataToken->body->access_token) )
			throw new Errors\InvalidToken();
		
		$this->Token = $this->DataToken->body->access_token;

		return $this->Token;
	}
}
