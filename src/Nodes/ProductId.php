<?php

namespace Naugrim\OpenTrans\Nodes;

use JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\BuyerPid;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;
use Naugrim\BMEcat\Nodes\InternationalPid;
use Naugrim\BMEcat\Nodes\SupplierIdRef;
use Naugrim\BMEcat\Nodes\SupplierPid;

class ProductId implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\BMEcat\Nodes\SupplierPid")
     * @Serializer\SerializedName("bmecat:SUPPLIER_PID")
     *
     * @var SupplierPid
     */
    protected $supplierPid;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\BMEcat\Nodes\SupplierIdRef")
     * @Serializer\SerializedName("bmecat:SUPPLIER_IDREF")
     *
     * @var SupplierIdRef|null
     */
    protected $supplierIdRef;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CONFIG_CODE_FIX")
     *
     * @var string|null
     */
    protected $configCodeFix;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("LOT_NUMBER")
     *
     * @var string|null
     */
    protected $lotNumber;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("SERIAL_NUMBER")
     *
     * @var string|null
     */
    protected $serialNumber;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\BMEcat\Nodes\InternationalPid")
     * @Serializer\SerializedName("bmecat:INTERNATIONAL_PID")
     *
     * @var InternationalPid|null
     */
    protected $internationalPid;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\BMEcat\Nodes\BuyerPid")
     * @Serializer\SerializedName("bmecat:BUYER_PID")
     *
     * @var BuyerPid|null
     */
    protected $buyerPid;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:DESCRIPTION_SHORT")
     *
     * @var string|null
     */
    protected $descriptionShort;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:DESCRIPTION_LONG")
     *
     * @var string|null
     */
    protected $descriptionLong;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:PRODUCT_TYPE")
     *
     * @var string|null
     */
    protected $productType;

    /**
     * @return SupplierPid
     */
    public function getSupplierPid(): SupplierPid
    {
        return $this->supplierPid;
    }

    /**
     * @param SupplierPid $supplierPid
     * @return ProductId
     */
    public function setSupplierPid(SupplierPid $supplierPid): ProductId
    {
        $this->supplierPid = $supplierPid;
        return $this;
    }

    public function getSupplierIdRef(): ?SupplierIdRef
    {
        return $this->supplierIdRef;
    }

    public function setSupplierIdRef(?SupplierIdRef $supplierIdRef): ProductId
    {
        $this->supplierIdRef = $supplierIdRef;
        return $this;
    }

    public function getConfigCodeFix(): ?string
    {
        return $this->configCodeFix;
    }

    public function setConfigCodeFix(?string $configCodeFix): ProductId
    {
        $this->configCodeFix = $configCodeFix;
        return $this;
    }

    public function getLotNumber(): ?string
    {
        return $this->lotNumber;
    }

    public function setLotNumber(?string $lotNumber): ProductId
    {
        $this->lotNumber = $lotNumber;
        return $this;
    }

    public function getSerialNumber(): ?string
    {
        return $this->serialNumber;
    }

    public function setSerialNumber(?string $serialNumber): ProductId
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    public function getInternationalPid(): ?InternationalPid
    {
        return $this->internationalPid;
    }

    public function setInternationalPid(?InternationalPid $internationalPid): ProductId
    {
        $this->internationalPid = $internationalPid;
        return $this;
    }

    public function getBuyerPid(): ?BuyerPid
    {
        return $this->buyerPid;
    }

    public function setBuyerPid(?BuyerPid $buyerPid): ProductId
    {
        $this->buyerPid = $buyerPid;
        return $this;
    }

    public function getDescriptionShort(): ?string
    {
        return $this->descriptionShort;
    }

    public function setDescriptionShort(?string $descriptionShort): ProductId
    {
        $this->descriptionShort = $descriptionShort;
        return $this;
    }

    public function getDescriptionLong(): ?string
    {
        return $this->descriptionLong;
    }

    public function setDescriptionLong(?string $descriptionLong): ProductId
    {
        $this->descriptionLong = $descriptionLong;
        return $this;
    }

    public function getProductType(): ?string
    {
        return $this->productType;
    }

    public function setProductType(?string $productType): ProductId
    {
        $this->productType = $productType;
        return $this;
    }
}
