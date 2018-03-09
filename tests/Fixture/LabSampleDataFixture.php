<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LabSampleDataFixture
 *
 */
class LabSampleDataFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'sample_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'sample_reg_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'lab_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tag_no' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'species_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'breed_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'sample_list_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'sex' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => 'M', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'age' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'post_mortum' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => 'NO', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'doc_name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'doc_type' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'doc_size' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'yearly_lab_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'monthly_lab_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'test_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'instruction_by_level_1' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'instruction_by_level_2' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'instruction_by_level_3' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'sample_reg_id_fk' => ['type' => 'index', 'columns' => ['sample_reg_id'], 'length' => []],
            'test_id_fk' => ['type' => 'index', 'columns' => ['test_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['sample_id'], 'length' => []],
            'sample_reg_id_fk' => ['type' => 'foreign', 'columns' => ['sample_reg_id'], 'references' => ['sample_registration', 'sample_reg_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'test_id_fk' => ['type' => 'foreign', 'columns' => ['test_id'], 'references' => ['sample_applicable_test', 'test_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'sample_id' => 1,
            'sample_reg_id' => 1,
            'lab_id' => 1,
            'tag_no' => 1,
            'species_id' => 1,
            'breed_id' => 1,
            'sample_list_id' => 1,
            'sex' => 'Lorem ipsum dolor sit amet',
            'age' => 1,
            'post_mortum' => 'Lorem ipsum dolor sit amet',
            'doc_name' => 'Lorem ipsum dolor sit amet',
            'doc_type' => 'Lorem ipsum dolor sit amet',
            'doc_size' => 'Lorem ipsum dolor sit amet',
            'yearly_lab_id' => 1,
            'monthly_lab_id' => 1,
            'test_id' => 1,
            'instruction_by_level_1' => 'Lorem ipsum dolor sit amet',
            'instruction_by_level_2' => 'Lorem ipsum dolor sit amet',
            'instruction_by_level_3' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
