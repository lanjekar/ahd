<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StateMasterTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StateMasterTable Test Case
 */
class StateMasterTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StateMasterTable
     */
    public $StateMaster;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('StateMaster') ? [] : ['className' => StateMasterTable::class];
        $this->StateMaster = TableRegistry::get('StateMaster', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StateMaster);

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
