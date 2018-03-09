<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LabSampleDataTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LabSampleDataTable Test Case
 */
class LabSampleDataTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LabSampleDataTable
     */
    public $LabSampleData;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.lab_sample_data',
        'app.sample_registration',
        'app.users',
        'app.lab_master',
        'app.yearly_samples',
        'app.monthly_samples',
        'app.states',
        'app.districts',
        'app.dispatches',
        'app.labs',
        'app.species',
        'app.breeds',
        'app.sample_lists',
        'app.yearly_labs',
        'app.monthly_labs',
        'app.sample_applicable_test',
        'app.test_lists',
        'app.diseases'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LabSampleData') ? [] : ['className' => LabSampleDataTable::class];
        $this->LabSampleData = TableRegistry::get('LabSampleData', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LabSampleData);

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
