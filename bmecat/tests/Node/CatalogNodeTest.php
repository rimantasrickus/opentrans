<?php


namespace Naugrim\BMEcat\Tests\Node;

use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerBuilder;
use Naugrim\BMEcat\DocumentBuilder;
use PHPUnit\Framework\TestCase;
use Naugrim\BMEcat\Nodes\Catalog;
use Naugrim\BMEcat\Nodes\DateTime;


class CatalogNodeTest extends TestCase
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
    public function Set_Get_Id()
    {
        $node = new Catalog();
        $value = sha1(uniqid(microtime(false), true));

        $this->assertNull($node->getId());
        $node->setId($value);
        $this->assertEquals($value, $node->getId());
    }

    /**
     *
     * @test
     */
    public function Set_Get_Version()
    {
        $node = new Catalog();
        $value = sha1(uniqid(microtime(false), true));

        $this->assertNull($node->getVersion());
        $node->setVersion($value);
        $this->assertEquals($value, $node->getVersion());
    }

    /**
     *
     * @test
     */
    public function Set_Get_Language()
    {
        $node = new Catalog();
        $value = sha1(uniqid(microtime(false), true));

        $this->assertNull($node->getLanguage());
        $node->setLanguage($value);
        $this->assertEquals($value, $node->getLanguage());
    }

    /**
     *
     * @test
     */
    public function Set_Get_Date_Time()
    {
        $node = new Catalog();
        $dateTime = new DateTime();

        $this->assertNull($node->getDateTime());
        $node->setDateTime($dateTime);
        $this->assertEquals($dateTime, $node->getDateTime());
    }

    /**
     *
     * @test
     */
    public function Serialize_With_Null_Values()
    {
        $node = new Catalog();
        $context = SerializationContext::create()->setSerializeNull(true);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_catalog_with_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        $this->assertEquals($expected, $actual);
    }

    /**
     *
     * @test
     */
    public function Serialize_Without_Null_Values()
    {
        $node = new Catalog();
        $context = SerializationContext::create()->setSerializeNull(false);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_catalog_without_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        $this->assertEquals($expected, $actual);
    }
}
