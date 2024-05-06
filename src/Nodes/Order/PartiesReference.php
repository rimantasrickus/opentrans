<?php

namespace Naugrim\OpenTrans\Nodes\Order;

use JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\BuyerIdRef;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;
use Naugrim\BMEcat\Nodes\SupplierIdRef;
use Naugrim\OpenTrans\Nodes\InvoiceRcptIdRef;
use Naugrim\OpenTrans\Nodes\ShipmentPartiesReference;

class PartiesReference implements NodeInterface
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\BMEcat\Nodes\BuyerIdRef")
     * @Serializer\SerializedName("bmecat:BUYER_IDREF")
     *
     * @var BuyerIdRef
     */
    protected $buyerIdRef;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\BMEcat\Nodes\SupplierIdRef")
     * @Serializer\SerializedName("bmecat:SUPPLIER_IDREF")
     *
     * @var SupplierIdRef
     */
    protected $supplierIdRef;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\InvoiceRcptIdRef")
     * @Serializer\SerializedName("INVOICE_RECIPIENT_IDREF")
     *
     * @var InvoiceRcptIdRef|null
     */
    protected $invoiceRcptIdRef;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\ShipmentPartiesReference")
     * @Serializer\SerializedName("SHIPMENT_PARTIES_REFERENCE")
     *
     * @var ShipmentPartiesReference|null
     */
    protected $shipmentPartiesReference;

    public function getBuyerIdRef(): BuyerIdRef
    {
        return $this->buyerIdRef;
    }

    public function setBuyerIdRef(BuyerIdRef $buyerIdRef): PartiesReference
    {
        $this->buyerIdRef = $buyerIdRef;
        return $this;
    }

    public function getSupplierIdRef(): SupplierIdRef
    {
        return $this->supplierIdRef;
    }

    public function setSupplierIdRef(SupplierIdRef $supplierIdRef): PartiesReference
    {
        $this->supplierIdRef = $supplierIdRef;
        return $this;
    }

    public function getInvoiceRcptIdRef(): ?InvoiceRcptIdRef
    {
        return $this->invoiceRcptIdRef;
    }

    public function setInvoiceRcptIdRef(?InvoiceRcptIdRef $invoiceRcptIdRef): PartiesReference
    {
        $this->invoiceRcptIdRef = $invoiceRcptIdRef;
        return $this;
    }

    public function getShipmentPartiesReference(): ?ShipmentPartiesReference
    {
        return $this->shipmentPartiesReference;
    }

    public function setShipmentPartiesReference(?ShipmentPartiesReference $shipmentPartiesReference): PartiesReference
    {
        $this->shipmentPartiesReference = $shipmentPartiesReference;
        return $this;
    }
}
