<?php

namespace Naugrim\BMEcat\Nodes\Concerns;

use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;

trait HasStringValue
{
    /**
     * @Serializer\Type("string")
     * @Serializer\XmlValue
     * @var string
     */
    protected $value = '';

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return NodeInterface
     */
    public function setValue(string $value): NodeInterface
    {
        $this->value = $value;
        /** @var NodeInterface $this */
        return $this;
    }
}
