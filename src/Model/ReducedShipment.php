<?php

namespace Picqer\BolRetailerV10\Model;

// This class is auto generated by OpenApi\ModelGenerator
class ReducedShipment extends AbstractModel
{
    /**
     * Returns the definition of the model: an associative array with field names as key and
     * field definition as value. The field definition contains of
     * model: Model class or null if it is a scalar type
     * array: Boolean whether it is an array
     * @return array The model definition
     */
    public function getModelDefinition(): array
    {
        return [
            'shipmentId' => [ 'model' => null, 'array' => false ],
            'shipmentDateTime' => [ 'model' => null, 'array' => false ],
            'shipmentReference' => [ 'model' => null, 'array' => false ],
            'order' => [ 'model' => ReducedShipmentOrder::class, 'array' => false ],
            'shipmentItems' => [ 'model' => ReducedShipmentItem::class, 'array' => true ],
            'transport' => [ 'model' => ReducedTransport::class, 'array' => false ],
        ];
    }

    /**
     * @var string A unique identifier for this shipment.
     */
    public $shipmentId;

    /**
     * @var string The date and time in ISO 8601 format when the order item was shipped.
     */
    public $shipmentDateTime;

    /**
     * @var string Reference supplied by the user when this item was shipped.
     */
    public $shipmentReference;

    /**
     * @var ReducedShipmentOrder
     */
    public $order;

    /**
     * @var ReducedShipmentItem[]
     */
    public $shipmentItems = [];

    /**
     * @var ReducedTransport
     */
    public $transport;

    public function getShipmentDateTime(): ?\DateTime
    {
        if (empty($this->shipmentDateTime)) {
            return null;
        }

        return \DateTime::createFromFormat(\DateTime::ATOM, $this->shipmentDateTime);
    }

    /**
     * Returns transportId from transport.
     * @return string TransportId from transport.
     */
    public function getTransportId(): string
    {
        return $this->transport->transportId;
    }

    /**
     * Sets transport by transportId.
     * @param string $transportId TransportId for transport.
     */
    public function setTransportId(string $transportId): void
    {
        $this->transport = ReducedTransport::constructFromArray(['transportId' => $transportId]);
    }
}
