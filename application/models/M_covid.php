<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use GuzzleHttp\Client;

class M_covid extends CI_Model {

    private $_client;

    public function __construct()
    {;
        $this->_client = new Client([
            'base_uri' => 'https://disease.sh/v3/covid-19/' //EndPoints
        ]);   
    }

    public function getWorldData()
    {
        $response = $this->_client->request('GET', 'all');

        $result = json_decode($response->getBody()->getContents(), true);

        $arr = array( $result['updated'], 
                      $result['cases'], 
                      $result['todayCases'],
                      $result['deaths'],
                      $result['todayDeaths'],
                      $result['recovered'], 
                      $result['todayRecovered'],
                      $result['affectedCountries']
        );
        return $arr;
    }

    public function getAllCountry()
    {
        $response = $this->_client->request('GET', 'countries');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function getAllCountries($limit, $start)
    {
        $response = $this->_client->request('GET', 'countries');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function getHistoricalCases()
    {
        $response = $this->_client->request('GET', 'historical/all?lastdays=14');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['cases'];
    }

    public function getHistoricalDeath()
    {
        $response = $this->_client->request('GET', 'historical/all?lastdays=14');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['deaths'];
    }

    public function getHistoricalRecovered()
    {
        $response = $this->_client->request('GET', 'historical/all?lastdays=14');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['recovered'];
    }
    
}