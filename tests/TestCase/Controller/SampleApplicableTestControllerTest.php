<?php
namespace App\Test\TestCase\Controller;

use App\Controller\SampleApplicableTestController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\SampleApplicableTestController Test Case
 */
class SampleApplicableTestControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
