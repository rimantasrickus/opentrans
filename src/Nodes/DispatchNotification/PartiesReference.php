<?php

namespace Naugrim\OpenTrans\Nodes\DispatchNotification;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\OpenTrans\Nodes\DeliveryIdRef;
use Naugrim\OpenTrans\Nodes\DelivererIdRef;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;

class PartiesReference implements NodeInterface
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
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\DeliveryIdRef")
     * @Serializer\SerializedName("DELIVERER_IDREF")
     *
     * @var DelivererIdRef
     */
    protected $delivererIdRef;

    /**
     * @return DeliveryIdRef
     */
    public function getDeliveryIdRef(): DeliveryIdRef
    {
        return $this->deliveryIdRef;
    }

    /**
     * @param DeliveryIdRef $deliveryIdRef
     * @return PartiesReference
     */
    public function setDeliveryIdRef(DeliveryIdRef $deliveryIdRef): PartiesReference
    {
        $this->deliveryIdRef = $deliveryIdRef;
        return $this;
    }
    
    /**
     * @return DelivererIdRef
     */
    public function getDelivererIdRef(): DelivererIdRef
    {
        return $this->delivererIdRef;
    }

    /**
     * @param DelivererIdRef $delivererIdRef
     * @return PartiesReference
     */
    public function setDelivererIdRef(DelivererIdRef $delivererIdRef): PartiesReference
    {
        $this->delivererIdRef = $delivererIdRef;
        return $this;
    }
}
