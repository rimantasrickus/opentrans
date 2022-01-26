<?php

namespace Naugrim\OpenTrans\Nodes\Order;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;

class Payment implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("CARD")
     *
     * @var bool
     */
    protected $card;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("DEBIT")
     *
     * @var bool
     */
    protected $debit;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("CHECK")
     *
     * @var bool
     */
    protected $check;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("CASH")
     *
     * @var bool
     */
    protected $cash;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\Order\PaymentTerms")
     * @Serializer\SerializedName("PAYMENT_TERMS")
     *
     * @var PaymentTerms
     */
    protected $paymentTerms;

    /**
     * @return bool
     */
    public function getCard(): bool
    {
        return $this->card;
    }

    /**
     * @param bool $card
     * @return Item
     */
    public function setCard(bool $card): Payment
    {
        $this->card = $card;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDebit(): bool
    {
        return $this->debit;
    }

    /**
     * @param bool $debit
     * @return Item
     */
    public function setDebit(bool $debit): Payment
    {
        $this->debit = $debit;
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getCheck(): bool
    {
        return $this->check;
    }

    /**
     * @param bool $check
     * @return Item
     */
    public function setCheck(bool $check): Payment
    {
        $this->check = $check;
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getCash(): bool
    {
        return $this->cash;
    }

    /**
     * @param bool $cash
     * @return Item
     */
    public function setCash(bool $cash): Payment
    {
        $this->cash = $cash;
        return $this;
    }
    
    /**
     * @return PaymentTerms
     */
    public function getPaymentTerms(): PaymentTerms
    {
        return $this->paymentTerms;
    }

    /**
     * @param PaymentTerms $paymentTerms
     * @return Payment
     */
    public function setPaymentTerms(PaymentTerms $paymentTerms): Payment
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }
}
