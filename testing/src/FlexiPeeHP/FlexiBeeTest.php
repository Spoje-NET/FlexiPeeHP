<?php

namespace Test\FlexiPeeHP;

use FlexiPeeHP\FlexiBee;

/**
 * Class used to test Object To Array Conversion
 */
class objTest extends \stdClass
{
    /**
     * Simple Item
     * @var integer
     */
    public $item = 1;

    /**
     * Array item
     * @var array
     */
    public $arrItem = ['a', 'b' => 'c'];

    /**
     * Simple method
     * 
     * @return boolean
     */
    public function method()
    {
        return true;
    }
}

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-05-04 at 10:08:36.
 */
class FlexiBeeTest extends \Test\Ease\BrickTest
{
    /**
     * @var FlexiBee
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     * @covers FlexiPeeHP\FlexiBee::__construct
     */
    protected function setUp()
    {
        $this->object = new FlexiBee;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    public function testCurlInit()
    {
        $this->object->curlInit();
        $this->assertTrue(is_resource($this->object->curl));
    }

    /**
     * @covers FlexiPeeHP\FlexiBee::setAgenda
     */
    public function testSetAgenda()
    {
        $this->object->setAgenda('nastaveni');
        $this->assertEquals('nastaveni', $this->object->agenda);
    }

    /**
     * @covers FlexiPeeHP\FlexiBee::object2array
     */
    public function testObject2array()
    {
        $this->assertNull($this->object->object2array(new \stdClass()));
        $this->assertEquals(
            [
            'item' => 1,
            'arrItem' => ['a', 'b' => 'c']
            ]
            , $this->object->object2array(new objTest()));
    }

    /**
     * @covers FlexiPeeHP\FlexiBee::performRequest
     */
    public function testPerformRequest()
    {

        if (!is_null($this->object->agenda) && $this->object->agenda != 'test') {
            $json = $this->object->performRequest($this->object->agenda.'.json');
            if (array_key_exists('message', $json)) {
                $this->assertArrayHasKey('@version', $json);
            } else {
                $this->assertArrayHasKey($this->object->agenda, $json);
            }
        } else {
            $this->object->agenda    = 'c';
            $this->object->prefix    = '';
            $this->object->company   = '';
            $this->object->nameSpace = 'companies';
            $json                    = $this->object->performRequest();
            $this->assertArrayHasKey('company', $json);

            $xml = $this->object->performRequest(null, null, 'xml');
            $this->assertArrayHasKey('company', $xml);
        }
    }

    /**
     * @covers FlexiPeeHP\FlexiBee::getLastImportId
     * @todo   Implement testGetLastImportId().
     */
    public function testGetLastImportId()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FlexiPeeHP\FlexiBee::xml2array
     * @todo   Implement testXml2array().
     */
    public function testXml2array()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FlexiPeeHP\FlexiBee::disconnect
     * @todo   Implement testDisconnect().
     */
    public function testDisconnect()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FlexiPeeHP\FlexiBee::__destruct
     * @todo   Implement test__destruct().
     */
    public function test__destruct()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FlexiPeeHP\FlexiBee::loadFlexiData
     * @todo   Implement testLoadFlexiData().
     */
    public function testLoadFlexiData()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FlexiPeeHP\FlexiBee::getFlexiRow
     * @todo   Implement testGetFlexiRow().
     */
    public function testGetFlexiRow()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FlexiPeeHP\FlexiBee::getFlexiData
     * @todo   Implement testGetFlexiData().
     */
    public function testGetFlexiData()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FlexiPeeHP\FlexiBee::loadFromFlexiBee
     * @todo   Implement testLoadFromFlexiBee().
     */
    public function testLoadFromFlexiBee()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FlexiPeeHP\FlexiBee::saveToFlexiBee
     * @todo   Implement testSaveToFlexiBee().
     */
    public function testSaveToFlexiBee()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FlexiPeeHP\FlexiBee::jsonizeData
     */
    public function testJsonizeData()
    {
        $this->assertEquals('{"winstrom":{"@version":"1.0","'.$this->object->agenda.'":{"key":"value"}}}',
            $this->object->jsonizeData(['key' => 'value']));
    }

    /**
     * @covers FlexiPeeHP\FlexiBee::insertToFlexiBee
     * @todo   Implement testInsertToFlexiBee().
     */
    public function testInsertToFlexiBee()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FlexiPeeHP\FlexiBee::idExists
     * @todo   Implement testIdExists().
     */
    public function testIdExists()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FlexiPeeHP\FlexiBee::recordExists
     * @todo   Implement testRecordExists().
     */
    public function testRecordExists()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FlexiPeeHP\FlexiBee::getColumnsFromFlexibee
     * @todo   Implement testGetColumnsFromFlexibee().
     */
    public function testGetColumnsFromFlexibee()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FlexiPeeHP\FlexiBee::getKod
     * @todo   Implement testGetKod().
     */
    public function testGetKod()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FlexiPeeHP\FlexiBee::searchString
     * @todo   Implement testSearchString().
     */
    public function testSearchString()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FlexiPeeHP\FlexiBee::logResult
     * @todo   Implement testLogResult().
     */
    public function testLogResult()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FlexiPeeHP\FlexiBee::flexiUrl
     */
    public function testFlexiUrl()
    {
        $this->assertEquals("a = 1 and b = 'foo'",
            $this->object->flexiUrl(['a' => 1, 'b' => 'foo'], 'and'));
        $this->assertEquals("a = 1 or b = 'bar'",
            $this->object->flexiUrl(['a' => 1, 'b' => 'bar'], 'or'));
    }
}