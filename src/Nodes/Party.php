<?php

namespace Naugrim\OpenTrans\Nodes;

use /** @noinspection PhpUnusedAliasInspection */
    JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;

class Party implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\PartyIdRef")
     * @Serializer\SerializedName("bmecat:PARTY_ID")
     *
     * @var PartyIdRef
     */
    protected $id;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PARTY_ROLE")
     *
     * @var string
     */
    protected $role;
    
    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\Address")
     * @Serializer\SerializedName("ADDRESS")
     *
     * @var Address
     */
    protected $address;

    /**
     * @return PartyIdRef
     */
    public function getId(): PartyIdRef
    {
        return $this->id;
    }

    /**
     * @param PartyIdRef $id
     * @return Party
     */
    public function setId(PartyIdRef $id): Party
    {
        $this->id = $id;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $id
     * @return Party
     */
    public function setRole(string $role): Party
    {
        $this->role = $role;
        return $this;
    }
    
    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $id
     * @return Party
     */
    public function setAddress(Address $address): Party
    {
        $this->address = $address;
        return $this;
    }
}
