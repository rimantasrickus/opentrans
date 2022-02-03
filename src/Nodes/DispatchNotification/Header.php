<?php

namespace Naugrim\OpenTrans\Nodes\DispatchNotification;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\OpenTrans\Nodes\Concerns\HasControlInfo;
use Naugrim\OpenTrans\Nodes\Concerns\HasSourcingInfo;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;
use Naugrim\OpenTrans\Nodes\SourcingInfo;

/**
 * @Serializer\AccessorOrder("custom", custom = {"controlInfo", "sourcingInfo", "info"})
 */
class Header implements NodeInterface
{
    use HasControlInfo, HasSourcingInfo;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\DispatchNotification\Info")
     * @Serializer\SerializedName("DISPATCHNOTIFICATION_INFO")
     *
     * @var Info
     */
    protected $info;

    /**
     * @return Info
     */
    public function getInfo(): Info
    {
        return $this->info;
    }

    /**
     * @param Info $info
     * @return Header
     */
    public function setInfo(Info $info): Header
    {
        $this->info = $info;
        return $this;
    }

    /**
     * @return SourcingInfo
     */
    public function getSourcingInfo(): SourcingInfo
    {
        return $this->sourcingInfo;
    }

    /**
     * @param SourcingInfo $sourcingInfo
     * @return Header
     */
    public function setSourcingInfo(SourcingInfo $sourcingInfo): Header
    {
        $this->sourcingInfo = $sourcingInfo;
        return $this;
    }
}
