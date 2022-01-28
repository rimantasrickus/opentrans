<?php

namespace Naugrim\OpenTrans\Nodes;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;

class Address implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:NAME")
     *
     * @var string
     */
    protected $name;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:NAME2")
     *
     * @var string
     */
    protected $name2;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:NAME3")
     *
     * @var string
     */
    protected $name3;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:STREET")
     *
     * @var string
     */
    protected $street;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:ZIP")
     *
     * @var string
     */
    protected $zip;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:CITY")
     *
     * @var string
     */
    protected $city;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:COUNTRY")
     *
     * @var string
     */
    protected $country;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:COUNTRY_CODED")
     *
     * @var string
     */
    protected $countryCode;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:PHONE")
     *
     * @var string
     */
    protected $phone;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:EMAIL")
     *
     * @var string
     */
    protected $email;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:ADDRESS_REMARKS")
     *
     * @var string
     */
    protected $packStation;
 

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Party
     */
    public function setName(string $name): Address
    {
        $this->name = $name;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getName2(): string
    {
        return $this->name2;
    }

    /**
     * @param string $name2
     * @return Party
     */
    public function setName2(string $name2): Address
    {
        $this->name2 = $name2;
        return $this;
    }

    /**
     * @return string
     */
    public function getName3(): string
    {
        return $this->name3;
    }

    /**
     * @param string $name3
     * @return Party
     */
    public function setName3(string $name3): Address
    {
        $this->name3 = $name3;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return Party
     */
    public function setStreet(string $street): Address
    {
        $this->street = $street;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getZip(): string
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     * @return Party
     */
    public function setZip(string $zip): Address
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Party
     */
    public function setCity(string $city): Address
    {
        $this->city = $city;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Party
     */
    public function setCountry(string $country): Address
    {
        $this->country = $country;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return Party
     */
    public function setCountryCode(string $countryCode): Address
    {
        $this->countryCode = $countryCode;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return Party
     */
    public function setPhone(string $phone): Address
    {
        $this->phone = $phone;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Party
     */
    public function setEmail(string $email): Address
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackStation(): string
    {
        return $this->packStation;
    }

    /**
     * @param string $packStation
     * @return Party
     */
    public function setPackStation(string $packStation): Address
    {
        $this->packStation = $packStation;
        return $this;
    }
}
