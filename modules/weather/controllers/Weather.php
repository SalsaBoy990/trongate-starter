<?php

final class Weather extends Trongate
{

    private const API_KEY = '6bd5b850178e2134497c4b965fbaf54e'; // this is not my api key
    private const CURRENT_URL = 'https://api.openweathermap.org/data/2.5/weather';
    private const FORECAST_URL = 'https://api.openweathermap.org/data/2.5/forecast/daily';
    private const LANG = 'hu';
    private const UNITS = 'metric';

    private array $settings;
    private array $params;


    public function __construct($module_name = null)
    {
        parent::__construct($module_name);

        // Weather widget settings
        $this->settings = [
            'weather_url' => self::CURRENT_URL,
            'forecast_url' => self::FORECAST_URL,
            'search_type' => 'city_name',
            'city_name' => 'Szeged',
        ];

        // Query parameters
        $this->params = [
            'q' => $this->settings['city_name'],
            'appid' => self::API_KEY,
            'units' => self::UNITS,
            'lang' => self::LANG,
        ];

        $this->module('a-api_helper');
    }


    /** weather by city name page */
    public function city()
    {
        $data['view_file'] = 'index';
        $this->template('weather', $data);
    }


    /** public endpoint - current weather */
    function current()
    {
        api_auth();

        // get input value; sanitize, and process it
        $this->_input();

        $current_weather = $this->_get_current_weather();
        $forecast = $this->_forecast();

        $results = [
            'current' => json_decode($current_weather),
            'forecast' => json_decode($forecast),
        ];

        echo json_encode($results);
        die;
    }


    /** public endpoint - weather forecast */
    private function _forecast()
    {
        api_auth();

        // get input value; sanitize, and process it
        $this->_input();

        return $this->_get_weather_forecast();
    }


    /** get current weather */
    private function _get_current_weather(): string
    {
        // generate api query with query strings
        $query = $this->_construct_query(self::CURRENT_URL);

        // make get call to the endpoint
        return $this->api_helper->_curl_call($query);
    }


    /** get weather forecast for 1-16 days ahead */
    private function _get_weather_forecast(): string
    {
        $params = array_merge($this->params, ['cnt' => 7]);

        // generate api query with query strings
        $query = $this->_construct_query(self::FORECAST_URL, $params);

        // make get call to the endpoint
        return $this->_curl_call($query);

    }


    /** get user input; sanitize and process it */
    private function _input(): void
    {
        $params = $this->api_helper->_get_params_from_url(3);
        extract($params);

        // Sanitize
        settype($city_name, 'string');
        $city_name = ucfirst(strtolower($city_name));

        $this->settings['city_name'] = $city_name;
        $this->params['q'] = $city_name;
    }


    /** make get call to the endpoint */
    private function _curl_call(string $query): string
    {
        // Initializes a new cURL session
        $curl = curl_init($query);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        // Execute cURL request
        $response = curl_exec($curl);
        // Close cURL session
        curl_close($curl);

        return $response;
    }


    /** construct the query url */
    private function _construct_query(string $url, array|null $params = null): string
    {
        $query = $url.'?';
        $values = array_values($params ?? $this->params);
        $keys = array_keys($params ?? $this->params);
        $max = sizeof($params ?? $this->params);

        for ($i = 0; $i < $max; $i++) {
            $param = $keys[$i].'='.$values[$i];
            $query .= ($i < $max - 1) ? $param.'&' : $param;
        }

        return $query;
    }

}
