<?php
namespace Cianbox\Error;

/**
 * Cianbox Exceptions
 */

/**
 * Base Cianbox Exception
 */
class CianboxException extends \Exception {
    protected $message = "Base Cianbox Exception";
}
/**
 * Input validation error
 */
namespace Cianbox\Error;

class InputValidationError extends CianboxException {
    protected $message = "Fields validation error";
}
/**
 * Authentication error
 */
namespace Cianbox\Error;

class AuthenticationError extends CianboxException {
    protected $message = "Authentication error";
}
/**
 * Resource not found
 */
namespace Cianbox\Error;

class NotFound extends CianboxException {
    protected $message = "Resource not found";
}
/**
 * Method not allowed
 */
namespace Cianbox\Error;

class MethodNotAllowed extends CianboxException {
    protected $message = "Method not allowed";
}
/**
 * Unhandled error
 */
namespace Cianbox\Error;

class UnhandledError extends CianboxException {
    protected $message = "Unhandled error";
}
/**
 * Invalid Options
 */
namespace Cianbox\Error;

class InvalidOptions extends CianboxException {
    protected $message = "Invalid Options";
}
/**
 * Invalid Token
 */
namespace Cianbox\Error;

class InvalidToken extends CianboxException {
    protected $message = "Invalid token";
}
/**
 * Unable to connect to Cianbox API
 */
namespace Cianbox\Error;

class UnableToConnect extends CianboxException {
    protected $message = "Can not connect to Cianbox API";
}
