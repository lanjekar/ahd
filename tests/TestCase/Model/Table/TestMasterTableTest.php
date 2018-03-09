<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TestMasterTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TestMasterTable Test Case
 */
class TestMasterTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TestMasterTable
     */
    public $TestMaster;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.test_master'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TestMaster') ? [] : ['className' => TestMasterTable::class];
        $this->TestMaster = TableRegistry::get('TestMaster', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TestMaster);

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
}
