<?php

namespace Naugrim\OpenTrans\Nodes;

use JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;
use Naugrim\BMEcat\Nodes\Crypto\PublicKey;
use Naugrim\BMEcat\Nodes\Fax;
use Naugrim\BMEcat\Nodes\Phone;
use Naugrim\OpenTrans\Nodes\Contact\Details;

class Address implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:NAME")
     *
     * @var string|null
     */
    protected $name;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:NAME2")
     *
     * @var string|null
     */
    protected $name2;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:NAME3")
     *
     * @var string|null
     */
    protected $name3;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:DEPARTMENT")
     *
     * @var string|null
     */
    protected $department;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\Contact\Details")
     * @Serializer\SerializedName("CONTACT_DETAILS")
     *
     * @var Details|null
     */
    protected $contactDetails;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:STREET")
     *
     * @var string|null
     */
    protected $street;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:ZIP")
     *
     * @var string|null
     */
    protected $zip;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:BOXNO")
     *
     * @var string|null
     */
    protected $boxno;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:ZIPBOX")
     *
     * @var string|null
     */
    protected $zipbox;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:CITY")
     *
     * @var string|null
     */
    protected $city;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:COUNTRY")
     *
     * @var string|null
     */
    protected $country;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:COUNTRY_CODED")
     *
     * @var string|null
     */
    protected $countryCoded;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:VAT_ID")
     *
     * @var string|null
     */
    protected $vatId;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\BMEcat\Nodes\Phone")
     * @Serializer\SerializedName("bmecat:PHONE")
     *
     * @var Phone|null
     */
    protected $phone;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\BMEcat\Nodes\Fax")
     * @Serializer\SerializedName("bmecat:FAX")
     *
     * @var Fax|null
     */
    protected $fax;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:EMAIL")
     *
     * @var string|null
     */
    protected $email;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\BMEcat\Nodes\Crypto\PublicKey")
     * @Serializer\SerializedName("bmecat:PUBLIC_KEY")
     *
     * @var PublicKey|null
     */
    protected $publicKey;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:URL")
     *
     * @var string|null
     */
    protected $url;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:ADDRESS_REMARKS")
     *
     * @var string|null
     */
    protected $addressRemarks;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): Address
    {
        $this->name = $name;
        return $this;
    }

    public function getName2(): ?string
    {
        return $this->name2;
    }

    public function setName2(?string $name2): Address
    {
        $this->name2 = $name2;
        return $this;
    }

    public function getName3(): ?string
    {
        return $this->name3;
    }

    public function setName3(?string $name3): Address
    {
        $this->name3 = $name3;
        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(?string $department): Address
    {
        $this->department = $department;
        return $this;
    }

    public function getContactDetails(): ?Details
    {
        return $this->contactDetails;
    }

    public function setContactDetails(?Details $contactDetails): Address
    {
        $this->contactDetails = $contactDetails;
        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): Address
    {
        $this->street = $street;
        return $this;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(?string $zip): Address
    {
        $this->zip = $zip;
        return $this;
    }

    public function getBoxno(): ?string
    {
        return $this->boxno;
    }

    public function setBoxno(?string $boxno): Address
    {
        $this->boxno = $boxno;
        return $this;
    }

    public function getZipbox(): ?string
    {
        return $this->zipbox;
    }

    public function setZipbox(?string $zipbox): Address
    {
        $this->zipbox = $zipbox;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): Address
    {
        $this->city = $city;
        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): Address
    {
        $this->country = $country;
        return $this;
    }

    public function getCountryCoded(): ?string
    {
        return $this->countryCoded;
    }

    public function setCountryCoded(?string $countryCoded): Address
    {
        $this->countryCoded = $countryCoded;
        return $this;
    }

    public function getVatId(): ?string
    {
        return $this->vatId;
    }

    public function setVatId(?string $vatId): Address
    {
        $this->vatId = $vatId;
        return $this;
    }

    public function getPhone(): ?Phone
    {
        return $this->phone;
    }

    public function setPhone(?Phone $phone): Address
    {
        $this->phone = $phone;
        return $this;
    }

    public function getFax(): ?Fax
    {
        return $this->fax;
    }

    public function setFax(?Fax $fax): Address
    {
        $this->fax = $fax;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): Address
    {
        $this->email = $email;
        return $this;
    }

    public function getPublicKey(): ?PublicKey
    {
        return $this->publicKey;
    }

    public function setPublicKey(?PublicKey $publicKey): Address
    {
        $this->publicKey = $publicKey;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): Address
    {
        $this->url = $url;
        return $this;
    }

    public function getAddressRemarks(): ?string
    {
        return $this->addressRemarks;
    }

    public function setAddressRemarks(?string $addressRemarks): Address
    {
        $this->addressRemarks = $addressRemarks;
        return $this;
    }
}
