<?php

namespace Naugrim\OpenTrans\Nodes;

use JMS\Serializer\Annotation as Serializer;
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
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\FinalDeliveryIdRef")
     * @Serializer\SerializedName("FINAL_DELIVERY_IDREF")
     *
     * @var FinalDeliveryIdRef|null
     */
    protected $finalDeliveryIdRef;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\DelivererIdRef")
     * @Serializer\SerializedName("DELIVERER_IDREF")
     *
     * @var DelivererIdRef|null
     */
    protected $delivererIdRef;
}
