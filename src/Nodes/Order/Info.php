<?php

namespace Naugrim\OpenTrans\Nodes\Order;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Builder\NodeBuilder;
use Naugrim\BMEcat\Exception\InvalidSetterException;
use Naugrim\BMEcat\Exception\UnknownKeyException;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;
use Naugrim\OpenTrans\Nodes\Party;

class Info implements NodeInterface
{
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
     * @var string
     */
    protected $currency;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\Order\Payment")
     * @Serializer\SerializedName("PAYMENT")
     *
     * @var Payment
     */
    protected $payment;

    /**
     * @Serializer\Expose
     * @Serializer\Type("array<Naugrim\OpenTrans\Nodes\Order\Remarks>")
     * @Serializer\SerializedName("REMARKS")
     * @Serializer\XmlList(inline = true, entry = "REMARKS")
     *
     * @var Remarks[]
     */
    protected $remarks;

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
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return Info
     */
    public function setCurrency(string $currency): Info
    {
        $this->currency = $currency;
        return $this;
    }
    
    /**
     * @return Payment
     */
    public function getPayment(): Payment
    {
        return $this->payment;
    }

    /**
     * @param Payment $payment
     * @return Info
     */
    public function setPayment(Payment $payment): Info
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
