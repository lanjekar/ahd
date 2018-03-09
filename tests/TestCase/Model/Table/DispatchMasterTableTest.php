<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DispatchMasterTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DispatchMasterTable Test Case
 */
class DispatchMasterTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DispatchMasterTable
     */
    public $DispatchMaster;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dispatch_master'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DispatchMaster') ? [] : ['className' => DispatchMasterTable::class];
        $this->DispatchMaster = TableRegistry::get('DispatchMaster', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DispatchMaster);

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
