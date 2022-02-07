<?php

namespace Naugrim\OpenTrans\Nodes\OrderChange;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\OpenTrans\Nodes\DeliveryIdRef;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;

class ShipmentPartiesReference implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\DeliveryIdRef")
     * @Serializer\SerializedName("DELIVERY_IDREF")
     *
     * @var DeliveryIdRef
     */
    protected $deliveryIdRef;
    
    /**
     * @return DeliveryIdRef
     */
    public function getDeliveryIdRef(): DeliveryIdRef
    {
        return $this->deliveryIdRef;
    }

    /**
     * @param DeliveryIdRef $deliveryIdRef
     * @return ShipmentPartiesReference
     */
    public function setDeliveryIdRef(DeliveryIdRef $deliveryIdRef): ShipmentPartiesReference
    {
        $this->deliveryIdRef = $deliveryIdRef;
        return $this;
    }
}
