<?php

namespace Naugrim\OpenTrans\Nodes\DispatchNotification;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Builder\NodeBuilder;
use Naugrim\BMEcat\Exception\InvalidSetterException;
use Naugrim\BMEcat\Exception\UnknownKeyException;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;
use Naugrim\OpenTrans\Nodes\Party;
use Naugrim\OpenTrans\Nodes\SupplierIdRef;

/**
 * @Serializer\AccessorOrder("custom", custom = {"id", "date", "deliveryDate", "parties", "partiesReference", "supplierIdRef", "shipmentId", "trackingUrl"})
 */
class Info implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("DISPATCHNOTIFICATION_ID")
     *
     * @var string
     */
    protected $id;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("DISPATCHNOTIFICATION_DATE")
     *
     * @var string
     */
    protected $date;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\DispatchNotification\DeliveryDate")
     * @Serializer\SerializedName("DELIVERY_DATE")
     *
     * @var DeliveryDate
     */
    protected $deliveryDate;

    /**
     *
     * @Serializer\Expose
     * @Serializer\SerializedName("PARTIES")
     * @Serializer\Type("array<Naugrim\OpenTrans\Nodes\Party>")
     * @Serializer\XmlList(entry = "PARTY")
     *
     * @var Party[]
     */
    protected $parties = [];

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\DispatchNotification\PartiesReference")
     * @Serializer\SerializedName("SHIPMENT_PARTIES_REFERENCE")
     *
     * @var PartiesReference
     */
    protected $partiesReference;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\SupplierIdRef")
     * @Serializer\SerializedName("bmecat:SUPPLIER_IDREF")
     *
     * @var SupplierIdRef
     */
    protected $supplierIdRef;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("SHIPMENT_ID")
     *
     * @var string
     */
    protected $shipmentId;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("TRACKING_TRACING_URL")
     *
     * @var string
     */
    protected $trackingUrl;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Info
     */
    public function setId(string $id): Info
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return Info
     */
    public function setDate(string $date): Info
    {
        $this->date = $date;
        return $this;
    }
    
    /**
     * @return DeliveryDate
     */
    public function getDeliveryDate(): DeliveryDate
    {
        return $this->deliveryDate;
    }

    /**
     * @param DeliveryDate $deliveryDate
     * @return Info
     */
    public function setDeliveryDate(DeliveryDate $deliveryDate): Info
    {
        $this->deliveryDate = $deliveryDate;
        return $this;
    }

    /**
     * @return Party[]
     */
    public function getParties(): array
    {
        return $this->parties;
    }

    /**
     * @param Party[] $parties
     * @return Info
     * @throws InvalidSetterException
     * @throws UnknownKeyException
     */
    public function setParties(array $parties): Info
    {
        foreach ($parties as $party) {
            if (!$party instanceof Party) {
                $party = NodeBuilder::fromArray($party, new Party());
            }
            $this->addParty($party);
        }
        return $this;
    }

    /**
     * @param Party $party
     * @return $this
     */
    public function addParty(Party $party)
    {
        $this->parties[] = $party;
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
     * @return Info
     */
    public function setPartiesReference(PartiesReference $partiesReference): Info
    {
        $this->partiesReference = $partiesReference;
        return $this;
    }

    /**
     * @return SupplierIdRef
     */
    public function getSupplierIdRef(): SupplierIdRef
    {
        return $this->supplierIdRef;
    }

    /**
     * @param SupplierIdRef $supplierIdRef
     * @return Info
     */
    public function setSupplierIdRef(SupplierIdRef $supplierIdRef): Info
    {
        $this->supplierIdRef = $supplierIdRef;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getShipmentId(): string
    {
        return $this->shipmentId;
    }

    /**
     * @param string $shipmentId
     * @return Info
     */
    public function setShipmentId(string $shipmentId): Info
    {
        $this->shipmentId = $shipmentId;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getTrackingUrl(): string
    {
        return $this->trackingUrl;
    }

    /**
     * @param string $trackingUrl
     * @return Info
     */
    public function setTrackingUrl(string $trackingUrl): Info
    {
        $this->trackingUrl = $trackingUrl;
        return $this;
    }
}
