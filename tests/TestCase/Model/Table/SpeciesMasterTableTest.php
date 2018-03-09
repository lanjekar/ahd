<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SpeciesMasterTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SpeciesMasterTable Test Case
 */
class SpeciesMasterTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SpeciesMasterTable
     */
    public $SpeciesMaster;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.species_master'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SpeciesMaster') ? [] : ['className' => SpeciesMasterTable::class];
        $this->SpeciesMaster = TableRegistry::get('SpeciesMaster', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SpeciesMaster);

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
