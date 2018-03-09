<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DistrictMasterTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DistrictMasterTable Test Case
 */
class DistrictMasterTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DistrictMasterTable
     */
    public $DistrictMaster;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.district_master',
        'app.state_master'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DistrictMaster') ? [] : ['className' => DistrictMasterTable::class];
        $this->DistrictMaster = TableRegistry::get('DistrictMaster', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DistrictMaster);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
