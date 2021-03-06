<?php

namespace Test\FlexiPeeHP;

use FlexiPeeHP\FlexiBeeRW;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-05-04 at 10:08:36.
 */
class FlexiBeeRWTest extends FlexiBeeROTest
{
    /**
     * Poznámka vkládaná do záznamů vytvářených během testů
     * @var string 
     */
    public $poznam = 'Generováno UnitTestem PHP Knihovny https://github.com/Spoje-NET/FlexiPeeHP';

    /**
     *
     * @var array
     */
    public $insertableData = [];

    /**
     * @var FlexiBeeRW
     */
    protected $object;

    /**
     * Gives You data able to insert into current evidence
     *
     * @param string $code custom record code
     *
     * @return array
     */
    public function getDataForInsert($code = 'UnitTest')
    {
        $dataForInsert = [];
        $structure     = $this->object->getColumnsInfo();
        if (count($structure)) {
            if (array_key_exists('typDokl', $structure)) {
                if ($structure['typDokl']['type'] == 'relation') {
                    $relatedEvidence          = basename($structure['typDokl']['url']);
                    $loader                   = new \FlexiPeeHP\FlexiBeeRO(null,
                        ['evidence' => $relatedEvidence]);
                    $typDoklRaw               = $loader->getColumnsFromFlexibee([
                        'kod'], ['limit' => 1]);
                    $dataForInsert['typDokl'] = \FlexiPeeHP\FlexiBeeRO::code($typDoklRaw[0]['kod']);
                }
            }
            if (array_key_exists('poznam', $structure)) {
                $dataForInsert['poznam'] = $this->poznam.' '.$code;
            }

            if (array_key_exists('nazev', $structure)) {
                $dataForInsert['nazev'] = $code.' '.$this->poznam.' ';
            }

            if (array_key_exists('kod', $structure)) {
                $dataForInsert['kod'] = \FlexiPeeHP\FlexiBeeRO::uncode($this->object->getKod($code));
            }
        }
        return $dataForInsert;
    }

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     * @covers FlexiPeeHP\FlexiBeeRW::__construct
     */
    protected function setUp(): void
    {
        $this->object = new FlexiBeeRW(null,
            ['atomic' => false, 'debug' => false]);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
        
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::performAction
     * @expectedException \Exception
     */
    public function testPerformAction()
    {
        $actions = $this->object->getActionsInfo();

        if (!empty($actions) && count($actions)) {
            if (array_key_exists('new', $actions)) {
                $this->object->performAction('new', 'ext');
            }

            if (array_key_exists('storno', $actions)) {
                $this->object->insertToFlexiBee($this->getDataForInsert('StornoTest_'.time()));
                $this->object->performAction('storno', 'int');
            }
        }
        $this->object->performAction('nonexitst');
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::timestampToFlexiDate
     */
    public function testTimestampToFlexiDate()
    {
        $this->assertNull($this->object->timestampToFlexiDate());
        $this->assertEquals('2016-09-16',
            $this->object->timestampToFlexiDate('1474040506'));
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::timestampToFlexiDateTime
     */
    public function testTimestampToFlexiDateTime()
    {
        $this->assertNull($this->object->timestampToFlexiDateTime());
        $flexiDateTime = $this->object->timestampToFlexiDateTime('1474040506');
        $this->assertEquals('2016-09-16', substr($flexiDateTime, 0, 10));
        $this->assertEquals(':41:46', substr($flexiDateTime, -6));
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::objectToID
     */
    public function testObjectToID()
    {
        $id = \Ease\Sand::randomNumber(1, 9999);
        $this->object->setMyKey($id);
        $this->assertEquals([$id], $this->object->objectToID([$this->object]));
        parent::testObjectToID();
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::getRecordID
     */
    public function testGetRecordID()
    {
        parent::testGetRecordID();
        $structure = $this->object->getEvidenceInfo();
        if (!empty($structure) && count($structure) && array_key_exists('kod', $structure)) {
            $this->object->setData(['kod' => 'KOD']);
            $this->assertEquals('code:KOD', $this->object->getRecordID());
        }
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::controlMandatoryColumns
     */
    public function testControlMandatoryColumns()
    {
        $this->object->controlMandatoryColumns();
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::controlReadOnlyColumns
     */
    public function testControlReadOnlyColumns()
    {
        $this->object->controlReadOnlyColumns(['id' => 1]);
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::addArrayToBranch
     */
    public function testAddArrayToBranch()
    {
        $this->object->addArrayToBranch(['nazev' => 'test'], 'podEvidence');
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::addObjectToBranch
     */
    public function testAddObjectToBranch()
    {
        $this->object->addObjectToBranch(new \FlexiPeeHP\FakturaVydanaPolozka(['nazev' => 'test']));
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::vazbaAdd
     */
    public function testVazbaAdd()
    {
        $this->object->vazbaAdd(\Ease\Sand::randomNumber());
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::vazbaDel
     */
    public function testVazbaDel()
    {
        $this->object->vazbaDel(\Ease\Sand::randomNumber());
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::getJsonizedData
     */
    public function testGetJsonizedData()
    {
        $this->object->setData(['id' => time(), 'nazev' => \Ease\Sand::randomString(),
            'stitky' => ['TEST', 'TESTING']]);
        $this->object->getJsonizedData();
    }

 

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::insertToFlexiBee
     */
    public function testInsertToFlexiBee()
    {
        $this->object->insertToFlexiBee(['id' => 'ext:test:'.time()]);
        $this->object->setData(['id' => 'ext:test:'.time()], true);
        $this->object->insertToFlexiBee();
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::parseResponse
     */
    public function testParseResponse()
    {
        $responseDecoded = array(
            '@version' => '1.0',
            'success' => 'true',
            'stats' =>
            array(
                'created' => '1',
                'updated' => '5',
                'deleted' => '0',
                'skipped' => '0',
                'failed' => '0',
            ),
            'results' =>
            array(
                0 =>
                array(
                    'id' => '792',
                    'request-id' => 'EXT:APP:100',
                    'ref' => '/c/flexipeehp/adresar/792',
                ),
                1 =>
                array(
                    'id' => '793',
                    'request-id' => 'EXT:APP:200',
                    'ref' => '/c/flexipeehp/adresar/793',
                ),
                2 =>
                array(
                    'id' => '794',
                    'request-id' => 'EXT:APP:300',
                    'ref' => '/c/flexipeehp/adresar/794',
                ),
                3 =>
                array(
                    'id' => '795',
                    'request-id' => 'EXT:APP:400',
                    'ref' => '/c/flexipeehp/adresar/795',
                ),
                4 =>
                array(
                    'id' => '830',
                    'request-id' => 'EXT:APP:500',
                    'ref' => '/c/flexipeehp/banka/830',
                ),
                5 =>
                array(
                    'id' => '28',
                    'ref' => '/c/flexipeehp/adresar-bankovni-ucet/28',
                ),
            ),
            )
        ;
        $this->object->parseResponse($responseDecoded, 201);
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::assignResultIDs
     */
    public function testAssignResultIDs()
    {
        $ids = array(
            'adresar' =>
            array(
                'EXT:APP:100' => '792',
                'EXT:APP:200' => '793',
                'EXT:APP:300' => '794',
                'EXT:APP:400' => '795',
            ),
            'banka' =>
            array(
                'EXT:APP:500' => '830',
            ),
            'adresar-bankovni-ucet' =>
            array(
                '' => '27',
            ),
        );
        $this->object->assignResultIDs($ids);
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::extractResultIDs
     */
    public function testExtractResultIDs()
    {
        $resultInfo = array(
            0 =>
            array(
                'id' => '792',
                'request-id' => 'EXT:APP:100',
                'ref' => '/c/flexipeehp/adresar/792',
            ),
            1 =>
            array(
                'id' => '793',
                'request-id' => 'EXT:APP:200',
                'ref' => '/c/flexipeehp/adresar/793',
            ),
            2 =>
            array(
                'id' => '794',
                'request-id' => 'EXT:APP:300',
                'ref' => '/c/flexipeehp/adresar/794',
            ),
            3 =>
            array(
                'id' => '795',
                'request-id' => 'EXT:APP:400',
                'ref' => '/c/flexipeehp/adresar/795',
            ),
            4 =>
            array(
                'id' => '830',
                'request-id' => 'EXT:APP:500',
                'ref' => '/c/flexipeehp/banka/830',
            ),
            5 =>
            array(
                'id' => '26',
                'ref' => '/c/flexipeehp/adresar-bankovni-ucet/26',
            ),
        );
        $this->object->extractResultIDs($resultInfo);
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::getLastInsertedId
     */
    public function testGetLastInsertedId()
    {
        $this->object->getLastInsertedId();
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::deleteFromFlexiBee
     */
    public function testDeleteFromFlexiBee()
    {
        $this->object->deleteFromFlexiBee();
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::takeData
     */
    public function testTakeData()
    {
        $this->object->takeData(['id' => \Ease\Sand::randomNumber()]);
    }

    /**
     * @after 
     * @covers FlexiPeeHP\FlexiBeeRW::getDataForJSON
     */
    public function testGetDataForJSON()
    {
        $this->object->setData(['name' => 'test']);
        $this->object->getDataForJSON();
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::addExternalID
     */
    public function testAddExternalID()
    {
        if (empty($this->object->getEvidence())) {
            $this->object->setEvidence('banka');
        }
        $this->object->addExternalID('ext:test:'.\Ease\Sand::randomNumber());
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::changeExternalID
     */
    public function testChangeExternalID()
    {
        $this->object->changeExternalID('test', \Ease\Sand::randomNumber(),
            \Ease\Sand::randomNumber());
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::sync
     */
    public function testSync()
    {
        $code = \Ease\Sand::randomString();
        $this->assertFalse($this->object->sync(['kod' => $code.'X']));
        if ($this->object->getEvidence()) {
            $syncResult = $this->object->sync($this->getDataForInsert($code));
            $this->assertTrue($syncResult);
        }
    }
}
