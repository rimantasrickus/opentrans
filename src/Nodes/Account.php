<?php

namespace Naugrim\OpenTrans\Nodes;

use JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;

class Account implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\SerializedName("HOLDER")
     * @Serializer\Type("string")
     * @var string
     */
    protected $holder;

    /**
     * @Serializer\Expose
     * @Serializer\SerializedName("BANK_ACCOUNT")
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\BankAccount")
     * @var BankAccount
     */
    protected $bankAccount;

    /**
     * @Serializer\Expose
     * @Serializer\SerializedName("BANK_CODE")
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\BankCode")
     * @var BankCode|null
     */
    protected $bankCode;

    /**
     * @Serializer\Expose
     * @Serializer\SerializedName("BANK_NAME")
     * @var string|null
     */
    protected $bankName;

    /**
     * @Serializer\Expose
     * @Serializer\SerializedName("BANK_COUNTRY")
     * @var string|null
     */
    protected $bankCountry;

    /**
     * @return string
     */
    public function getHolder(): string
    {
        return $this->holder;
    }

    /**
     * @param string $holder
     * @return Account
     */
    public function setHolder(string $holder): Account
    {
        $this->holder = $holder;
        return $this;
    }

    /**
     * @return BankAccount
     */
    public function getBankAccount(): BankAccount
    {
        return $this->bankAccount;
    }

    /**
     * @param BankAccount $bankAccount
     * @return Account
     */
    public function setBankAccount(BankAccount $bankAccount): Account
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    public function getBankCode(): ?BankCode
    {
        return $this->bankCode;
    }

    public function setBankCode(?BankCode $bankCode): Account
    {
        $this->bankCode = $bankCode;
        return $this;
    }

    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    public function setBankName(?string $bankName): Account
    {
        $this->bankName = $bankName;
        return $this;
    }

    public function getBankCountry(): ?string
    {
        return $this->bankCountry;
    }

    public function setBankCountry(?string $bankCountry): Account
    {
        $this->bankCountry = $bankCountry;
        return $this;
    }
}
