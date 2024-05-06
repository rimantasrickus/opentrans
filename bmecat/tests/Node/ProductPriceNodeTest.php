<?php


namespace Naugrim\BMEcat\Tests\Node;

use JMS\Serializer\SerializationContext;
use Naugrim\BMEcat\DocumentBuilder;
use Naugrim\BMEcat\Nodes\Product\Price;
use PHPUnit\Framework\TestCase;


class ProductPriceNodeTest extends TestCase
{
    /**
     * @var \JMS\Serializer\SerializerInterface
     */
    private $serializer;

    public function setUp() : void
    {
        $this->serializer = (new DocumentBuilder())->getSerializer();
    }

    /**
     *
     * @test
     */
    public function Set_Get_Price()
    {
        $node = new Price();
        $value = rand(10, 1000);

        $this->assertNull($node->getPrice());
        $node->setPrice($value);
        $this->assertEquals($value, $node->getPrice());
    }

    /**
     *
     * @test
     */
    public function Set_Get_Currency()
    {
        $node = new Price();
        $value = substr(sha1(uniqid(microtime(false), true)), 0, 3);

        $this->assertEquals('EUR', $node->getCurrency());
        $node->setCurrency($value);
        $this->assertEquals($value, $node->getCurrency());
    }

    /**
     *
     * @test
     */
    public function Serialize_With_Null_Values()
    {
        $node = new Price();
        $context = SerializationContext::create()->setSerializeNull(true);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_product_price_with_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        $this->assertEquals($expected, $actual);
    }

    /**
     *
     * @test
     */
    public function Serialize_Without_Null_Values()
    {
        $node = new Price();
        $context = SerializationContext::create()->setSerializeNull(false);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_product_price_without_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        $this->assertEquals($expected, $actual);
    }
}
