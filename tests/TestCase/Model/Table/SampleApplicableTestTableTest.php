<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SampleApplicableTestTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SampleApplicableTestTable Test Case
 */
class SampleApplicableTestTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SampleApplicableTestTable
     */
    public $SampleApplicableTest;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sample_applicable_test',
        'app.sample_registration',
        'app.users',
        'app.lab_master',
        'app.yearly_samples',
        'app.monthly_samples',
        'app.states',
        'app.districts',
        'app.dispatches',
        'app.lab_sample_data',
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
        $config = TableRegistry::exists('SampleApplicableTest') ? [] : ['className' => SampleApplicableTestTable::class];
        $this->SampleApplicableTest = TableRegistry::get('SampleApplicableTest', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SampleApplicableTest);

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
