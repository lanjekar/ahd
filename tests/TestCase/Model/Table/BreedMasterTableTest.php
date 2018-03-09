<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BreedMasterTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BreedMasterTable Test Case
 */
class BreedMasterTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BreedMasterTable
     */
    public $BreedMaster;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.breed_master',
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
        $config = TableRegistry::exists('BreedMaster') ? [] : ['className' => BreedMasterTable::class];
        $this->BreedMaster = TableRegistry::get('BreedMaster', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BreedMaster);

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
