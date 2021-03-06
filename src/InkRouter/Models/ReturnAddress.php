<?php
/**
 * This file is part of InkRouter-PHP-SDK.
 *
 * Copyright (c) 2012 Opensoft (http://opensoftdev.com)
 */

/**
 * Contains information about shipping address
 *
 * @author Kirill Gusakov
 */
class InkRouter_Models_ReturnAddress
{
    /**
     * @var string
     */
    private $streetAddress;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $middleInitial;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $zip;

    /**
     * @param string $city
     * @return InkRouter_Models_ReturnAddress
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $firstName
     * @return InkRouter_Models_ReturnAddress
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $lastName
     * @return InkRouter_Models_ReturnAddress
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $middleInitial
     * @return InkRouter_Models_ReturnAddress
     */
    public function setMiddleInitial($middleInitial)
    {
        $this->middleInitial = $middleInitial;
        return $this;
    }

    /**
     * @return string
     */
    public function getMiddleInitial()
    {
        return $this->middleInitial;
    }

    /**
     * @param string $state
     * @return InkRouter_Models_ReturnAddress
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $streetAddress
     * @return InkRouter_Models_ReturnAddress
     */
    public function setStreetAddress($streetAddress)
    {
        $this->streetAddress = $streetAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    /**
     * @param string $zip
     * @return InkRouter_Models_ReturnAddress
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param bool $root
     * @return string
     */
    public function pack($root = false)
    {
        $writer = new XMLWriter();
        $writer->openMemory();
        if ($root) {
            $writer->startDocument();
        }

        $writer->startElement('return_address');

        if (isset($this->streetAddress)) {
            $writer->writeElement('street_address', $this->streetAddress);
        }
        
        if (isset($this->firstName)) {
            $writer->writeElement('first_name', $this->firstName);
        }
        
        if (isset($this->middleInitial)) {
            $writer->writeElement('middle_initial', $this->middleInitial);
        }
        
        if (isset($this->lastName)) {
            $writer->writeElement('last_name', $this->lastName);
        }
        
        if (isset($this->city)) {
            $writer->writeElement('city', $this->city);
        }
        
        if (isset($this->state)) {
            $writer->writeElement('state', $this->state);
        }
        
        if (isset($this->zip)) {
            $writer->writeElement('zip', $this->zip);
        }
        
        $writer->endElement();

        return $writer->outputMemory();
    }
}
