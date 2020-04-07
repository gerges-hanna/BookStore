<?php


class Address {
    private $address_id;
    private $country;   
    private $city;
    private $address;
    private $postal;
    private $phone;
    
    function getAddress_id() {
        return $this->address_id;
    }

    function getCountry() {
        return $this->country;
    }

    function getCity() {
        return $this->city;
    }

    function getAddress() {
        return $this->address;
    }

    function getPostal() {
        return $this->postal;
    }

    function getPhone() {
        return $this->phone;
    }

    function setAddress_id($address_id) {
        $this->address_id = $address_id;
    }

    function setCountry($country) {
        $this->country = $country;
    }

    function setCity($city) {
        $this->city = $city;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setPostal($postal) {
        $this->postal = $postal;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }




}

