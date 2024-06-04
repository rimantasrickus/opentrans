<?php

namespace Naugrim\OpenTrans\Nodes;

use
    /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;
use Naugrim\BMEcat\Builder\NodeBuilder;
use Naugrim\BMEcat\Exception\InvalidSetterException;
use Naugrim\BMEcat\Exception\UnknownKeyException;
use Naugrim\OpenTrans\Nodes\Concerns\IsRootNode;
use Naugrim\OpenTrans\Nodes\DispatchNotification\Header;
use Naugrim\OpenTrans\Nodes\DispatchNotification\Item;
use Naugrim\OpenTrans\Nodes\DispatchNotification\Summary;

/**
 *
 * @Serializer\XmlRoot("DISPATCHNOTIFICATION")
 * @Serializer\ExclusionPolicy("all")
 */
class DispatchNotification implements NodeInterface
{
    use IsRootNode;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\DispatchNotification\Header")
     * @Serializer\SerializedName("DISPATCHNOTIFICATION_HEADER")
     *
     * @var Header
     */
    protected $header;

    /**
     *
     * @Serializer\Expose
     * @Serializer\SerializedName("DISPATCHNOTIFICATION_ITEM_LIST")
     * @Serializer\Type("array<Naugrim\OpenTrans\Nodes\DispatchNotification\Item>")
     * @Serializer\XmlList(entry = "DISPATCHNOTIFICATION_ITEM")
     *
     * @var Item[]
     */
    protected $items = [];

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\DispatchNotification\Summary")
     * @Serializer\SerializedName("DISPATCHNOTIFICATION_SUMMARY")
     *
     * @var Summary
     */
    protected $summary;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     * @return DispatchNotification
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return Header
     */
    public function getHeader(): Header
    {
        return $this->header;
    }

    /**
     * @param Header $header
     * @return DispatchNotification
     */
    public function setHeader(Header $header): DispatchNotification
    {
        $this->header = $header;
        return $this;
    }

    /**
     * @return Item[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item[] $items
     * @return DispatchNotification
     * @throws InvalidSetterException
     * @throws UnknownKeyException
     */
    public function setItems(array $items): DispatchNotification
    {
        foreach ($items as $item) {
            if (!$item instanceof Item) {
                $item = NodeBuilder::fromArray($item, new Item());
            }
            $this->addItem($item);
        }
        return $this;
    }

    /**
     * @param Item $item
     * @return $this
     */
    public function addItem(Item $item): DispatchNotification
    {
        $this->items[] = $item;
        return $this;
    }

    /**
     * @return Summary
     */
    public function getSummary(): Summary
    {
        return $this->summary;
    }

    /**
     * @param Summary $summary
     * @return DispatchNotification
     */
    public function setSummary(Summary $summary): DispatchNotification
    {
        $this->summary = $summary;
        return $this;
    }
}
