<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LabSampleData Entity
 *
 * @property int $sample_id
 * @property int $sample_reg_id
 * @property int $lab_id
 * @property int $tag_no
 * @property int $species_id
 * @property int $breed_id
 * @property int $sample_list_id
 * @property string $sex
 * @property int $age
 * @property string $post_mortum
 * @property string $doc_name
 * @property string $doc_type
 * @property string $doc_size
 * @property int $yearly_lab_id
 * @property int $monthly_lab_id
 * @property int $test_id
 * @property string $instruction_by_level_1
 * @property string $instruction_by_level_2
 * @property string $instruction_by_level_3
 *
 * @property \App\Model\Entity\SampleRegistration $sample_registration
 * @property \App\Model\Entity\Lab $lab
 * @property \App\Model\Entity\Species $species
 * @property \App\Model\Entity\Breed $breed
 * @property \App\Model\Entity\SampleList $sample_list
 * @property \App\Model\Entity\YearlyLab $yearly_lab
 * @property \App\Model\Entity\MonthlyLab $monthly_lab
 * @property \App\Model\Entity\SampleApplicableTest $sample_applicable_test
 */
class LabSampleData extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'sample_reg_id' => true,
        'lab_id' => true,
        'tag_no' => true,
        'species_id' => true,
        'breed_id' => true,
        'sample_list_id' => true,
        'sex' => true,
        'age' => true,
        'post_mortum' => true,
        'doc_name' => true,
        'doc_type' => true,
        'doc_size' => true,
        'yearly_lab_id' => true,
        'monthly_lab_id' => true,
        'test_id' => true,
        'instruction_by_level_1' => true,
        'instruction_by_level_2' => true,
        'instruction_by_level_3' => true,
        'sample_registration' => true,
        'lab' => true,
        'species' => true,
        'breed' => true,
        'sample_list' => true,
        'yearly_lab' => true,
        'monthly_lab' => true,
        'sample_applicable_test' => true
    ];
}
