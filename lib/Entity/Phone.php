<?php

namespace Coinfide\Entity;

class Phone extends Base
{
    protected $validationRules = array(
        'countryCode' => array('type' => 'string', 'max_length' => 3, 'required' => true),
        'number' => array('type' => 'string', 'max_length' => 25, 'required' => true)
    );

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @var string
     */
    protected $number;

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }
}
