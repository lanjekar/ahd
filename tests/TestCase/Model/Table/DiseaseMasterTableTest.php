<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiseaseMasterTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiseaseMasterTable Test Case
 */
class DiseaseMasterTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DiseaseMasterTable
     */
    public $DiseaseMaster;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.disease_master'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DiseaseMaster') ? [] : ['className' => DiseaseMasterTable::class];
        $this->DiseaseMaster = TableRegistry::get('DiseaseMaster', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DiseaseMaster);

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
