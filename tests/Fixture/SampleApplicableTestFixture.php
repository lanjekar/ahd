<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SampleApplicableTestFixture
 *
 */
class SampleApplicableTestFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'sample_applicable_test';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'test_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'sample_reg_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'sample_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'test_list_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'test_date' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'test_result' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'observation_date' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'observation_result' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'communication_date' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'communication_result' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'disease_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'action_taken' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'test_suggestion' => ['type' => 'string', 'length' => 1000, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'sample_id_fk' => ['type' => 'index', 'columns' => ['sample_id'], 'length' => []],
            'sample_regs_id_fk' => ['type' => 'index', 'columns' => ['sample_reg_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['test_id'], 'length' => []],
            'sample_id_fk' => ['type' => 'foreign', 'columns' => ['sample_id'], 'references' => ['lab_sample_data', 'sample_id'], 'update' => 'restrict', 'delete' => 'noAction', 'length' => []],
            'sample_regs_id_fk' => ['type' => 'foreign', 'columns' => ['sample_reg_id'], 'references' => ['sample_registration', 'sample_reg_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'test_id' => 1,
            'sample_reg_id' => 1,
            'sample_id' => 1,
            'test_list_id' => 1,
            'test_date' => '2018-03-08 11:31:36',
            'test_result' => 'Lorem ipsum dolor sit amet',
            'observation_date' => '2018-03-08 11:31:36',
            'observation_result' => 1,
            'communication_date' => '2018-03-08 11:31:36',
            'communication_result' => 'Lorem ipsum dolor sit amet',
            'disease_id' => 1,
            'action_taken' => 'Lorem ipsum dolor sit amet',
            'test_suggestion' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
