<?php
/**
 * Cianbox PHP
 *
 * Init, cargamos todos los archivos necesarios
 *
 * @version 1.0.0
 * @package Cianbox
 * @copyright Copyright (c) 2015-2017 Cianbox
 * @license MIT
 * @license https://opensource.org/licenses/MIT MIT License
 * @link https://cianbox.org/ Cianbox Developers
 */

// Errors
include_once dirname(__FILE__).'/Cianbox/Error/Errors.php';
include_once dirname(__FILE__).'/Cianbox/Client.php';
include_once dirname(__FILE__).'/Cianbox/Resource.php';

// Cianbox API
include_once dirname(__FILE__).'/Cianbox/Auth.php';
include_once dirname(__FILE__).'/Cianbox/Products.php';
//include_once dirname(__FILE__).'/Cianbox/Prices.php';
//include_once dirname(__FILE__).'/Cianbox/Subsidiaries.php';
