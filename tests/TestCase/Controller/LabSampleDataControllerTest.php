<?php
namespace App\Test\TestCase\Controller;

use App\Controller\LabSampleDataController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\LabSampleDataController Test Case
 */
class LabSampleDataControllerTest extends IntegrationTestCase
{

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
