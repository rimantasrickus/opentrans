<?php


namespace Naugrim\BMEcat\Nodes;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;

/**
 * @deprecated
 * @Serializer\XmlRoot("SUPPLIER")
 */
class Supplier implements Contracts\NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("SUPPLIER_ID")
     *
     * @var string
     */
    protected $id;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("SUPPLIER_NAME")
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @param string $id
     * @return Supplier
     */
    public function setId($id) : Supplier
    {
        $this->id = $id;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     * @return Supplier
     */
    public function setName($name) : Supplier
    {
        $this->name = $name;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
