<?php

namespace Naugrim\OpenTrans\Nodes\Order;

use
    /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;

class PaymentTerms implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\Order\PaymentTerm")
     * @Serializer\SerializedName("PAYMENT_TERM")
     *
     * @var PaymentTerm
     */
    protected $term;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\Order\PaymentTime")
     * @Serializer\SerializedName("TIME_FOR_PAYMENT")
     *
     * @var PaymentTime
     */
    protected $paymentTime;

    /**
     * @return PaymentTerm
     */
    public function getPaymentTerm(): PaymentTerm
    {
        return $this->term;
    }

    /**
     * @param PaymentTerm $term
     * @return Item
     */
    public function setPaymentTerm(PaymentTerm $term): PaymentTerms
    {
        $this->term = $term;
        return $this;
    }

    /**
     * @return PaymentTerm
     */
    public function getPaymentTime(): PaymentTime
    {
        return $this->paymentTime;
    }

    /**
     * @param PaymentTime $paymentTime
     * @return Item
     */
    public function setPaymentTime(PaymentTime $paymentTime): PaymentTerms
    {
        $this->paymentTime = $paymentTime;
        return $this;
    }
}
