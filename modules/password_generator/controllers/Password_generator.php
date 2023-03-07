<?php

class Password_generator extends Trongate
{
    private const PASSWORD_MAX_LENGTH = 99;
    private const LOWERCASE = 'abcdefghijklmnopqrstuvwxyz';
    private const UPPERCASE  = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    private const NUMBERS = '1234567890';
    private const SYMBOLS = '`~!@#$%^&*()-_=+]}[{;:,<.>/?\'"\|';


    function index() {
        $data['view_file'] = 'index';
        $this->template('clean_starter', $data);
    }


    private function _generate_safe_password(array $args): string {
        extract($args);

        // Contains specific character groups
        $charset = '';

        if ($lowercase === true) {
            $charset .= self::LOWERCASE;
        }
        if ($uppercase === true) {
            $charset .= self::UPPERCASE;
        }
        if ($numbers === true) {
            $charset .= self::NUMBERS;
        }
        if ($symbols === true) {
            $charset .= self::SYMBOLS;
        }

        // to store password
        $password = '';

        try {
            // Loop until the preferred length reached
            for ($i = 0; $i < $length; $i++) {
                // get randomized length
                $_rand = random_int(0, strlen($charset) - 1);
                // returns part of the string
                $password .= substr($charset, $_rand, 1);
            }
        } catch (Exception $ex) {
            return 'Please try again. Appropriate source of randomness not achieved this time.';
        }

        return $password;
    }

    function generate() {
        api_auth();

        $has_error = false;

        $this->module('base');

        $params = $this->base->_get_params_from_url(3);
        extract($params);
        settype($length, 'integer');

        // Validate
        if ($length > self::PASSWORD_MAX_LENGTH) {
            $error_message = 'Password length exceeds the maximum allowed (99)';
            $has_error = true;
        } else if ($length <= 0) {
            $error_message = 'Password length cannot be zero or negative.';
            $has_error = true;
        }

        // Error response
        if ($has_error === true) {
            $output['body'] = json_encode([
                'error' => $error_message
            ]);
            $output['code'] = 400;

            $code = $output['code'];
            http_response_code($code);
            echo $output['body'];
            die;
        }


        $args = [
            'length' => $length,
            'lowercase' => $lowercase == 'true', // boolean
            'uppercase' => $uppercase  == 'true',
            'numbers' => $numbers  == 'true',
            'symbols' => $symbols  == 'true',
        ];


        $result = [
            'password' => $this->_generate_safe_password($args)
        ];

        $output['body'] = json_encode($result);
        $output['code'] = 200;

        $code = $output['code'];
        http_response_code($code);
        echo $output['body'];
        die;
    }



}
