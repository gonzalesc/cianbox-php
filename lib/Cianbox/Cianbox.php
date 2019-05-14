<?php
namespace Cianbox;

use Cianbox\Error as Errors;

/**
 * Class Cianbox
 *
 * @package Cianbox
 */
class Cianbo {
	public $options;
	public $api_url;
	/**
	 * BASE URL for default
	 */
	const BASE_URL = "https://cianbox.org/";
	/**
	* VERSION URL for default
	*/
	const VERSION_URL = "api/v2/";
	/**
	 * Constructor.
	 *
	 * @param array|null $options
	 *
	 * @throws Error\InvalidOptions
	 *
	 * @example array('account' => "{account}",
	 *					'user' => "{user}",
	 *					'password' => "{password}",
	 *					'app_name' => "{app_name}",
	 *					'app_code' => "{app_code}"
	 *				)
	 */
	public function __construct($options) {
		
		$this->options = $options;
		if ( !isset($this->options['account']) ||
			!isset($this->options['user']) ||
			!isset($this->options['password']) ||
			!isset($this->options['app_name']) ||
			!isset($this->options['app_code'])
		) {
		  throw new Errors\InvalidOptions();
		}

		$this->api_url = BASE_URL . $this->options['account'] . VERSION_URL;

		$this->Auth = new Auth($this);
		$this->Token = $this->Auth->Token();

		if( !$this->Token ) {
			throw new Errors\InvalidToken();
		}

		$this->Products = new Products($this);
	}
}
