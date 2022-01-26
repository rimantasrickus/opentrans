<?php

namespace Naugrim\OpenTrans\Nodes\Order;

use
    /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;

class Payment implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("DEBIT")
     *
     * @var string
     */
    protected $debit;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\Order\PaymentTerms")
     * @Serializer\SerializedName("PAYMENT_TERMS")
     *
     * @var PaymentTerms
     */
    protected $paymentTerms;

    /**
     * @return string
     */
    public function getDebit(): string
    {
        return $this->debit;
    }

    /**
     * @param string $debit
     * @return Item
     */
    public function setDebit(string $debit): Payment
    {
        $this->debit = $debit;
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
