<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SampleRegistrationTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SampleRegistrationTable Test Case
 */
class SampleRegistrationTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SampleRegistrationTable
     */
    public $SampleRegistration;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sample_registration',
        'app.users',
        'app.lab_master',
        'app.yearly_samples',
        'app.monthly_samples',
        'app.states',
        'app.districts',
        'app.dispatches'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SampleRegistration') ? [] : ['className' => SampleRegistrationTable::class];
        $this->SampleRegistration = TableRegistry::get('SampleRegistration', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SampleRegistration);

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
