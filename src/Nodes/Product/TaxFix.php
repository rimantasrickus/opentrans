<?php

namespace Naugrim\OpenTrans\Nodes\Product;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;

class TaxFix implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:TAX_CATEGORY")
     *
     * @var string
     */
    protected $category;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:TAX_TYPE")
     *
     * @var string
     */
    protected $type;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("float")
     * @Serializer\SerializedName("bmecat:TAX")
     *
     * @var float
     */
    protected $tax;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("float")
     * @Serializer\SerializedName("TAX_AMOUNT")
     *
     * @var float
     */
    protected $amount;

    /**
     * @Serializer\Expose
     * @Serializer\Type("float")
     * @Serializer\SerializedName("TAX_BASE")
     *
     * @var float
     */
    protected $base;
    
    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     * @return TaxFix
     */
    public function setCategory(string $category): TaxFix
    {
        $this->category = $category;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return TaxFix
     */
    public function setType(string $type): TaxFix
    {
        $this->type = $type;
        return $this;
    }
    
    /**
     * @return float
     */
    public function getTax(): float
    {
        return $this->tax;
    }

    /**
     * @param float $tax
     * @return TaxFix
     */
    public function setTax(float $tax): TaxFix
    {
        $this->tax = $tax;
        return $this;
    }
    
    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return TaxFix
     */
    public function setAmount(float $amount): TaxFix
    {
        $this->amount = $amount;
        return $this;
    }
    
    /**
     * @return float
     */
    public function getBase(): float
    {
        return $this->base;
    }

    /**
     * @param float $base
     * @return TaxFix
     */
    public function setBase(float $base): TaxFix
    {
        $this->base = $base;
        return $this;
    }
}
