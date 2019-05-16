<?php

namespace Cianbox;

use Cianbox\Error as Errors;

/**
 * Class Client
 *
 * @package Cianbox
 */
class Client {
	public function request($method, $url, $access_token, $data = NULL) {
		try {
			$url_params = '';
			
			if( is_array($data) ) {
				if( ( !isset($data['access_token']) || empty($data['access_token']) ) &&
					( isset($access_token) && !empty($access_token) )
				) $data['access_token'] = $access_token;

				$url_params = '?'.http_build_query($data);
			}

			$headers = array("Content-Type" => "application/json", "Accept" => "application/json");
			$options = array(
				'timeout' => 120
			);
			if($method == "GET") {
				$response = \Requests::get($this->cianbox->api_url . $url . $url_params, $headers, $options);
			} else if($method == "POST") {
				$response = \Requests::post($this->cianbox->api_url . $url, $headers, json_encode($data), $options);
			} else if($method == "PATCH") {
				$response = \Requests::patch($this->cianbox->api_url . $url, $headers, json_encode($data), $options);
			} else if($method == "DELETE") {
				$response = \Requests::delete($this->cianbox->api_url . $url . $url_params, $headers, $options);
			}
		} catch (\Exception $e) {
			throw new Errors\UnableToConnect();
		}
		if ($response->status_code >= 200 && $response->status_code <= 206) {
			return json_decode($response->body);
		}
		if ($response->status_code == 400) {
			throw new Errors\UnhandledError($response->body, $response->status_code);
		}
		if ($response->status_code == 401) {
			throw new Errors\AuthenticationError();
		}
		if ($response->status_code == 404) {
			throw new Errors\NotFound();
		}
		if ($response->status_code == 403) {
			throw new Errors\InvalidOptions();
		}
		if ($response->status_code == 405) {
			throw new Errors\MethodNotAllowed();
		}
		throw new Errors\UnhandledError($response->body, $response->status_code);
	}
}
