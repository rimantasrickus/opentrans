<?php

namespace Naugrim\OpenTrans\Tests\Nodes;

use DateTime;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;
use Naugrim\OpenTrans\Nodes\Udx;
use Naugrim\OpenTrans\Nodes\Order;
use \JMS\Serializer\SerializerBuilder;
use Naugrim\OpenTrans\SchemaValidator;
use JMS\Serializer\SerializerInterface;
use Naugrim\BMEcat\Builder\NodeBuilder;
use Naugrim\OpenTrans\Nodes\DispatchNotification;
use Naugrim\BMEcat\Exception\SchemaValidationException;

class DispatchNotificationTest extends TestCase
{
    /**
     * @var SerializerInterface
     */
    private $serializer;

    protected function setUp(): void
    {
        $this->serializer = SerializerBuilder::create()->build();
    }

    /**
     * @dataProvider provideDispatchData
     */
    public function testDispatchNotification(string $file, array $data): void
    {
        $node = NodeBuilder::fromArray($data, new DispatchNotification());
        try {
            $xml = $this->serializer->serialize($node, 'xml');
        } catch (\Throwable $exception) {
            $this->fail($exception->getMessage());
        }

        $this->assertEquals(file_get_contents($file), $xml);
        $this->assertTrue(SchemaValidator::isValid($xml, '2.1'));
    }

    public function provideDispatchData(): array
    {
        return [
            [
                'file' => __DIR__ . '/../assets/minimal_valid_dispatch_notification.xml',
                'data' => [
                    'header' => [
                        'info' => [
                            'id' => 'order-id-1_shipment',
                            'date' => (new DateTimeImmutable('2020-01-20'))->format(\DateTimeInterface::W3C),
                            'deliveryDate' => [
                                'startDate' => (new DateTimeImmutable('2020-01-20'))->format(\DateTimeInterface::W3C),
                                'endDate' => (new DateTimeImmutable('2020-01-25'))->format(\DateTimeInterface::W3C),
                            ],
                            'parties' => [
                                [
                                    'id' => ['value' => 'org.de.buyer', 'type' => 'buyer'],
                                    'role' => ['role' => 'delivery'],
                                ],
                                [
                                    'id' => ['value' => 'org.de.supplier'],
                                    'role' => ['role' => 'supplier'],
                                ],
                                [
                                    'id' => ['value' => 'org.de.deliverer', 'type' => 'supplier_specific'],
                                    'role' => ['role' => 'deliverer'],
                                ],
                            ],
                            'supplierIdRef' => ['value' => 'org.de.supplier'],
                            'partiesReference' => [
                                'deliveryIdRef' => ['value' => 'org.de.buyer'],
                                'delivererIdRef' => ['value' => 'org.de.deliverer', 'type' => 'supplier_specific'],
                            ],
                            'shipmentId' => 'shipment.id'
                        ]
                    ],
                    'items' => [
                        [
                            'lineItemId' => 'line-item-id-1',
                            'productId' => [
                                'supplierPid' => [
                                    'value' => 'product-number-1'
                                ],
                                'descriptionShort' => 'short-description'
                            ],
                            'quantity' => 10,
                            'orderUnit' => 'C62',
                            'orderReference' => [
                                'orderId' => 'order-id-1',
                                'lineItemId' => 'line-item-id-1'
                            ],
                            'partiesReference' => [
                                'deliveryIdRef' => ['value' => 'org.de.buyer']
                            ]
                        ]
                    ],
                    'summary' => [
                        'totalItemNum' => 1,
                    ]
                ]
            ],
        ];
    }
}
