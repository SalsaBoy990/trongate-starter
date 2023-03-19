<?php

function set_value_or_default($var, $default_value)
{
    return empty($var) ? $default_value : $var;
}
