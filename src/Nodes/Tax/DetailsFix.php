<?php

namespace Naugrim\OpenTrans\Nodes\Tax;

use JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;

class DetailsFix implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("int")
     * @Serializer\SerializedName("CALCULATION_SEQUENCE")
     *
     * @var int|null
     */
    protected $calculationSequence;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("TAX_CATEGORY")
     *
     * @var string|null
     */
    protected $category;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("TAX_TYPE")
     *
     * @var string|null
     */
    protected $type;

    /**
     * @Serializer\Expose
     * @Serializer\Type("float")
     * @Serializer\SerializedName("TAX")
     *
     * @var float|null
     */
    protected $tax;

    /**
     * @Serializer\Expose
     * @Serializer\Type("float")
     * @Serializer\SerializedName("TAX_AMOUNT")
     *
     * @var float|null
     */
    protected $amount;

    /**
     * @Serializer\Expose
     * @Serializer\Type("float")
     * @Serializer\SerializedName("TAX_BASE")
     *
     * @var float|null
     */
    protected $base;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("EXEMPTION_REASON")
     *
     * @var string|null
     */
    protected $exemptionReason;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("JURISDICTION")
     *
     * @var string|null
     */
    protected $jurisdiction;

    public function getCalculationSequence(): ?int
    {
        return $this->calculationSequence;
    }

    public function setCalculationSequence(?int $calculationSequence): DetailsFix
    {
        $this->calculationSequence = $calculationSequence;
        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): DetailsFix
    {
        $this->category = $category;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): DetailsFix
    {
        $this->type = $type;
        return $this;
    }

    public function getTax(): ?float
    {
        return $this->tax;
    }

    public function setTax(?float $tax): DetailsFix
    {
        $this->tax = $tax;
        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(?float $amount): DetailsFix
    {
        $this->amount = $amount;
        return $this;
    }

    public function getBase(): ?float
    {
        return $this->base;
    }

    public function setBase(?float $base): DetailsFix
    {
        $this->base = $base;
        return $this;
    }

    public function getExemptionReason(): ?string
    {
        return $this->exemptionReason;
    }

    public function setExemptionReason(?string $exemptionReason): DetailsFix
    {
        $this->exemptionReason = $exemptionReason;
        return $this;
    }

    public function getJurisdiction(): ?string
    {
        return $this->jurisdiction;
    }

    public function setJurisdiction(?string $jurisdiction): DetailsFix
    {
        $this->jurisdiction = $jurisdiction;
        return $this;
    }
}
