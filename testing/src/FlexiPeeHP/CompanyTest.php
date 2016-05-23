<?php
/**
 * FlexiPeeHP - Objekt firmy.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace Test\FlexiPeeHP;

use FlexiPeeHP\Company;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-04-27 at 17:54:36.
 */
class CompanyTest extends FlexiBeeTest
{
    /**
     * @var Company
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Company;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * @covers FlexiPeeHP\Company::performRequest
     */
    public function testPerformRequest()
    {
        $this->object->evidence  = 'c';
        $this->object->prefix    = '';
        $this->object->company   = '';
        $this->object->nameSpace = 'companies';
        $json                    = $this->object->performRequest();
        $this->assertArrayHasKey('company', $json);

        $xml = $this->object->performRequest(null, null, 'xml');
        $this->assertArrayHasKey('company', $xml);

        $err = $this->object->performRequest('error.json');
        $this->assertArrayHasKey('success', $err);
        $this->assertEquals('false', $err['success']);
    }

    /**
     * @covers FlexiPeeHP\Company::getFlexiData
     */
    public function testGetFlexiData()
    {
        $flexidata = $this->object->getFlexiData();
        $this->assertArrayHasKey(0, $flexidata['company']);
        $this->assertArrayHasKey('id', $flexidata['company'][0]);
    }
}