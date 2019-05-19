<?php
namespace Cianbox;

use Cianbox\Error as Errors;

/**
 * Class Cianbox
 *
 * @package Cianbox
 */
class Cianbox {
	public $options;
	public $api_url;
	protected $dataToken;
	/**
	 * BASE URL for default
	 */
	const BASE_URL = "https://cianbox.org/";
	/**
	* VERSION URL for default
	*/
	const VERSION_URL = "/api/v2";
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

		$this->api_url = self::BASE_URL . $this->options['account'] . self::VERSION_URL;

		$this->Auth = new Auth($this);
		$this->Products = new Products($this);
		$this->Brands = new Brands($this);
		$this->Prices = new Prices($this);
		$this->Subsidiary = new Subsidiary($this);
	}
}

