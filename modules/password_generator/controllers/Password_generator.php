<?php

final class Password_generator extends Trongate
{
    private const PASSWORD_MAX_LENGTH = 50;
    private const LOWERCASE = 'abcdefghijklmnopqrstuvwxyz';
    private const UPPERCASE = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    private const NUMBERS = '1234567890';
    private const SYMBOLS = '`~!@#$%^&*()-_=+]}[{;:,<.>/?\'"\|';

    // To store password
    private string $password;
    private string $charset;
    private bool $has_error;
    private array $error_message;


    function __construct($module_name = null)
    {
        parent::__construct($module_name);

        $this->password = '';
        $this->charset = '';
        $this->has_error = false;
        $this->error_message = [];

        $this->module('a-api_helper');
    }


    /** Password generator view */
    function index()
    {
        $data['view_file'] = 'index';
        $this->template('clean_starter', $data);
    }

    /** Generate safe password */
    private function _generate_safe_password(array $args): array
    {
        extract($args);

        // Contains specific character groups
        if ($lowercase === true) {
            $this->charset .= self::LOWERCASE;
        }
        if ($uppercase === true) {
            $this->charset .= self::UPPERCASE;
        }
        if ($numbers === true) {
            $this->charset .= self::NUMBERS;
        }
        if ($symbols === true) {
            $this->charset .= self::SYMBOLS;
        }


        if ($this->charset === '') {
            $this->error_message['error'] = 'At least check one of the checkboxes!';
            return $this->error_message;
        }


        try {
            // Loop until the preferred length reached
            for ($i = 0; $i < $length; $i++) {
                // get randomized length
                $_rand = random_int(0, strlen($this->charset) - 1);
                // add one random character from the string
                $this->password .= substr($this->charset, $_rand, 1);
            }
        } catch (Exception $ex) {
            if (ENV === 'dev') {
                json($ex);
            }

            $this->error_message['error'] = 'Appropriate source of randomness not achieved. Please try it again.';
            return $this->error_message;
        }


        return ['password' => $this->password];
    }


    /** Generate password api endpoint */
    function generate()
    {
        api_auth();

        $this->module('a-api_helper');
        $params = $this->api_helper->_get_params_from_url(3);

        extract($params);
        settype($length, 'integer');

        // Validate
        if ($length > self::PASSWORD_MAX_LENGTH) {
            $this->has_error = true;
            $this->error_message['error'] = 'Password length exceeds the maximum allowed ('.self::PASSWORD_MAX_LENGTH.')';

        } else {
            if ($length <= 0) {
                $this->has_error = true;
                $this->error_message['error'] = 'Password length cannot be zero or negative.';
            }
        }

        // Error response
        if ($this->has_error === true) {
            echo $this->api_helper->_response($this->error_message, $this->_get_error_code());
            die;
        }


        $args = [
            'length' => $length,
            'lowercase' => $lowercase == 'true', // boolean
            'uppercase' => $uppercase == 'true',
            'numbers' => $numbers == 'true',
            'symbols' => $symbols == 'true',
        ];


        $result = $this->_generate_safe_password($args);

        if (array_key_exists('error', $result)) {
            echo $this->api_helper->_response($result, $this->_get_error_code());
            die;
        }

        // success
        echo $this->api_helper->_response($result);
        die;
    }


    /** Handle response */
    private function _response(array $response, int $response_code = 200): string
    {
        $output['body'] = json_encode($response);
        $output['code'] = $response_code;

        $code = $output['code'];
        http_response_code($code);
        return $output['body'];
    }

    /** Gets the error codes (400 or 500) */
    private function _get_error_code(): int
    {
        return $this->charset === '' ? 400 : 500;
    }


}
