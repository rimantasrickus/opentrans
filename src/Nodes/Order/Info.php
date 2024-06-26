<?php

namespace Naugrim\OpenTrans\Nodes\Order;

use Naugrim\OpenTrans\Nodes\Party;
use Naugrim\OpenTrans\Nodes\Remarks;
use Naugrim\BMEcat\Builder\NodeBuilder;
use Naugrim\OpenTrans\Nodes\DeliveryDate;
use Naugrim\OpenTrans\Nodes\UdxAggregate;
use JMS\Serializer\Annotation as Serializer;
use Naugrim\OpenTrans\Nodes\Payment\Payment;
use Naugrim\BMEcat\Exception\UnknownKeyException;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;
use Naugrim\OpenTrans\Nodes\Concerns\HasUdxItems;
use Naugrim\BMEcat\Exception\InvalidSetterException;

class Info implements NodeInterface
{

    use HasUdxItems;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ORDER_ID")
     *
     * @var string
     */
    protected $id;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ORDER_DATE")
     *
     * @var string
     */
    protected $date;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\DeliveryDate")
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
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\Order\PartiesReference")
     * @Serializer\SerializedName("ORDER_PARTIES_REFERENCE")
     *
     * @var PartiesReference
     */
    protected $partiesReference;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:CURRENCY")
     *
     * @var string|null
     */
    protected $currency;

    /**
     * @Serializer\Expose
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("PARTIAL_SHIPMENT_ALLOWED")
     *
     * @var boolean
     */
    protected $partialShipmentAllowed;

    /**
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\Payment\Payment")
     * @Serializer\SerializedName("PAYMENT")
     *
     * @var Payment|null
     */
    protected $payment;

    /**
     * @Serializer\Expose
     * @Serializer\Type("array<Naugrim\OpenTrans\Nodes\Remarks>")
     * @Serializer\SerializedName("REMARKS")
     * @Serializer\XmlList(inline = true, entry = "REMARKS")
     *
     * @var Remarks[]
     */
    protected $remarks;

    /**
     * @see HasUdxItems::$udxItem
     * @Serializer\SerializedName("HEADER_UDX")
     * @var UdxAggregate
     */
    protected $udxItem;

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

    public function getDeliveryDate(): DeliveryDate
    {
        return $this->deliveryDate;
    }

    public function setDeliveryDate(DeliveryDate $deliveryDate): self
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

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): Info
    {
        $this->currency = $currency;
        return $this;
    }

    public function setPartialShipmentAllowed(bool $partialShipmentAllowed): self
    {
        $this->partialShipmentAllowed = $partialShipmentAllowed;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPartialShipmentAllowed(): bool
    {
        return $this->partialShipmentAllowed;
    }

    public function getPayment(): ?Payment
    {
        return $this->payment;
    }

    public function setPayment(?Payment $payment): Info
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * @return Remarks[]
     */
    public function getRemarks(): array
    {
        return $this->remarks;
    }

    /**
     * @param Remarks[] $remarks
     * @return Info
     * @throws InvalidSetterException
     * @throws UnknownKeyException
     */
    public function setRemarks(array $remarks): Info
    {
        foreach ($remarks as $remark) {
            if (!$remark instanceof Remarks) {
                $remark = NodeBuilder::fromArray($remark, new Remarks());
            }
            $this->addRemark($remark);
        }
        return $this;
    }

    /**
     * @param Remarks $remark
     * @return $this
     */
    public function addRemark(Remarks $remark)
    {
        $this->remarks[] = $remark;
        return $this;
    }
}
