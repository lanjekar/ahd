<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LabMasterTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LabMasterTable Test Case
 */
class LabMasterTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LabMasterTable
     */
    public $LabMaster;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.lab_master'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LabMaster') ? [] : ['className' => LabMasterTable::class];
        $this->LabMaster = TableRegistry::get('LabMaster', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LabMaster);

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
