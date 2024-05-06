<?php

namespace Naugrim\OpenTrans\Nodes\Contact;

use JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Contact\Role;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;
use Naugrim\BMEcat\Nodes\Fax;
use Naugrim\BMEcat\Nodes\Phone;
use Naugrim\OpenTrans\Nodes\Emails;

class Details implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:CONTACT_ID")
     *
     * @var string|null
     */
    public $id;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:CONTACT_NAME")
     *
     * @var string
     */
    protected $name;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:FIRST_NAME")
     *
     * @var string|null
     */
    protected $firstName;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:TITLE")
     *
     * @var string|null
     */
    protected $title;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:ACADEMIC_TITLE")
     *
     * @var string|null
     */
    protected $academicTitle;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\BMEcat\Nodes\Contact\Role")
     * @Serializer\SerializedName("bmecat:CONTACT_ROLE")
     *
     * @var Role|null
     */
    protected $role;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:CONTACT_DESCRIPTION")
     *
     * @var string|null
     */
    protected $description;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\BMEcat\Nodes\Phone")
     * @Serializer\SerializedName("bmecat:PHONE")
     *
     * @var Phone|null
     */
    protected $phone;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\BMEcat\Nodes\Fax")
     * @Serializer\SerializedName("bmecat:FAX")
     *
     * @var Fax|null
     */
    protected $fax;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bmecat:URL")
     *
     * @var string|null
     */
    protected $url;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\Emails")
     * @Serializer\SerializedName("bmecat:EMAILS")
     *
     * @var Emails|null
     */
    protected $emails;


    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): Details
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Details
    {
        $this->name = $name;
        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): Details
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): Details
    {
        $this->title = $title;
        return $this;
    }

    public function getAcademicTitle(): ?string
    {
        return $this->academicTitle;
    }

    public function setAcademicTitle(?string $academicTitle): Details
    {
        $this->academicTitle = $academicTitle;
        return $this;
    }

    public function getRole(): ?Role
    {
        return $this->role;
    }

    public function setRole(?Role $role): Details
    {
        $this->role = $role;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): Details
    {
        $this->description = $description;
        return $this;
    }

    public function getPhone(): ?Phone
    {
        return $this->phone;
    }

    public function setPhone(?Phone $phone): Details
    {
        $this->phone = $phone;
        return $this;
    }

    public function getFax(): ?Fax
    {
        return $this->fax;
    }

    public function setFax(?Fax $fax): Details
    {
        $this->fax = $fax;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): Details
    {
        $this->url = $url;
        return $this;
    }

    public function getEmails(): ?Emails
    {
        return $this->emails;
    }

    public function setEmails(?Emails $emails): Details
    {
        $this->emails = $emails;
        return $this;
    }
}
