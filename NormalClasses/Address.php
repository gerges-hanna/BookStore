<?php


class Address {
    private $id;
    private $country;   
    private $city;
    private $state;
    private $street_no;
    
    function getId() {
        return $this->id;
    }

    function getCountry() {
        return $this->country;
    }

    function getCity() {
        return $this->city;
    }

    function getState() {
        return $this->state;
    }

    function getStreet_no() {
        return $this->street_no;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCountry($country) {
        $this->country = $country;
    }

    function setCity($city) {
        $this->city = $city;
    }

    function setState($state) {
        $this->state = $state;
    }

    function setStreet_no($street_no) {
        $this->street_no = $street_no;
    }


}

