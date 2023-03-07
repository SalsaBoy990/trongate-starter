<?php

class Base extends Trongate {


    /* UTILITIES FOR API ENDPOINTS */
    function _get_params_from_url($params_segment) {
        //params segment is where params might be passed
        $params_str = segment($params_segment);
        $first_char = substr($params_str, 0, 1);
        if ($first_char == '?') {
            $params_str = substr($params_str, 1);
        }

        $data = [];
        parse_str($params_str, $data);

        //convert into json
        $params = [];
        foreach ($data as $key => $value) {
            $key = $this->_prep_key($key);
            $value = $this->_remove_special_characters($value);
            $params[$key] = $value;
        }

        return $params;
    }

    function _prep_key($key) { //php convert json into URL string

        //get last char
        $key = trim($key);
        $str_len = strlen($key);
        $last_char = substr($key, $str_len-1);

        if ($last_char == '!') {
            $key = $key.'=';
        }

        $key = $this->_remove_special_characters($key);

        $ditch = 'OR_';
        $replace = 'OR ';
        $key = str_replace($ditch, $replace, $key);

        $ditch = '_NOT_LIKE';
        $replace = ' NOT LIKE';
        $key = str_replace($ditch, $replace, $key);

        $ditch = '_LIKE';
        $replace = ' LIKE';
        $key = str_replace($ditch, $replace, $key);

        $ditch = '_!=';
        $replace = ' !=';
        $key = str_replace($ditch, $replace, $key);

        $ditch = 'AND_';
        $replace = 'AND ';
        $key = str_replace($ditch, $replace, $key);

        $ditch = '_>';
        $replace = ' >';
        $key = str_replace($ditch, $replace, $key);

        $ditch = '_<';
        $replace = ' <';
        $key = str_replace($ditch, $replace, $key);

        return $key;
    }

    function _remove_special_characters($str) {
        $ditch = '*!underscore!*';
        $replace = '_';
        $str = str_replace($ditch, $replace, $str);

        $ditch = '*!gt!*';
        $replace = '>';
        $str = str_replace($ditch, $replace, $str);

        $ditch = '*!lt!*';
        $replace = '<';
        $str = str_replace($ditch, $replace, $str);

        $ditch = '*!equalto!*';
        $replace = '=';
        $str = str_replace($ditch, $replace, $str);

        return $str;
    }
    /* UTILITIES FOR API ENDPOINTS END */


}
