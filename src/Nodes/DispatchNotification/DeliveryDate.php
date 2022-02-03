<?php

namespace Naugrim\OpenTrans\Nodes\DispatchNotification;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;

class DeliveryDate implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("DELIVERY_START_DATE")
     *
     * @var string
     */
    protected $startDate;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("DELIVERY_END_DATE")
     *
     * @var string
     */
    protected $endDate;

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     * @return DeliveryDate
     */
    public function setStartDate(string $startDate): DeliveryDate
    {
        $this->startDate = $startDate;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     * @return DeliveryDate
     */
    public function setEndDate(string $endDate): DeliveryDate
    {
        $this->endDate = $endDate;
        return $this;
    }
}
