<?php

namespace Naugrim\OpenTrans\Nodes\DispatchNotification;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;
use Naugrim\OpenTrans\Nodes\ProductId;

class Item implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("LINE_ITEM_ID")
     *
     * @var string
     */
    protected $lineItemId;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\ProductId")
     * @Serializer\SerializedName("PRODUCT_ID")
     *
     * @var ProductId
     */
    protected $productId;

    /**
     * @Serializer\Expose
     * @Serializer\Type("float")
     * @Serializer\SerializedName("QUANTITY")
     *
     * @var float
     */
    protected $quantity;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:ORDER_UNIT")
     *
     * @var string
     */
    protected $orderUnit;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\DispatchNotification\OrderReference")
     * @Serializer\SerializedName("ORDER_REFERENCE")
     *
     * @var OrderReference
     */
    protected $orderReference;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\DispatchNotification\PartiesReference")
     * @Serializer\SerializedName("SHIPMENT_PARTIES_REFERENCE")
     *
     * @var PartiesReference
     */
    protected $partiesReference;

    /**
     * @return string
     */
    public function getLineItemId(): string
    {
        return $this->lineItemId;
    }

    /**
     * @param string $lineItemId
     * @return Item
     */
    public function setLineItemId(string $lineItemId): Item
    {
        $this->lineItemId = $lineItemId;
        return $this;
    }

    /**
     * @return ProductId
     */
    public function getProductId(): ProductId
    {
        return $this->productId;
    }

    /**
     * @param ProductId $productId
     * @return Item
     */
    public function setProductId(ProductId $productId): Item
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * @param float $quantity
     * @return Item
     */
    public function setQuantity(float $quantity): Item
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderUnit(): string
    {
        return $this->orderUnit;
    }

    /**
     * @param string $orderUnit
     * @return Item
     */
    public function setOrderUnit(string $orderUnit): Item
    {
        $this->orderUnit = $orderUnit;
        return $this;
    }

    /**
     * @return PartiesReference
     */
    public function getPartiesReference(): PartiesReference
    {
        return $this->partiesReference;
    }

    /**
     * @param PartiesReference $partiesReference
     * @return Item
     */
    public function setPartiesReference(PartiesReference $partiesReference): Item
    {
        $this->partiesReference = $partiesReference;
        return $this;
    }
    
    /**
     * @return OrderReference
     */
    public function getOrderReference(): OrderReference
    {
        return $this->orderReference;
    }

    /**
     * @param OrderReference $orderReference
     * @return Item
     */
    public function setOrderReference(OrderReference $orderReference): Item
    {
        $this->orderReference = $orderReference;
        return $this;
    }
}
