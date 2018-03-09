<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SampleApplicableTest Entity
 *
 * @property int $test_id
 * @property int $sample_reg_id
 * @property int $sample_id
 * @property int $test_list_id
 * @property \Cake\I18n\FrozenTime $test_date
 * @property string $test_result
 * @property \Cake\I18n\FrozenTime $observation_date
 * @property int $observation_result
 * @property \Cake\I18n\FrozenTime $communication_date
 * @property string $communication_result
 * @property int $disease_id
 * @property string $action_taken
 * @property string $test_suggestion
 *
 * @property \App\Model\Entity\SampleRegistration $sample_registration
 * @property \App\Model\Entity\LabSampleData $lab_sample_data
 * @property \App\Model\Entity\TestList $test_list
 * @property \App\Model\Entity\Disease $disease
 */
class SampleApplicableTest extends Entity
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
        'sample_id' => true,
        'test_list_id' => true,
        'test_date' => true,
        'test_result' => true,
        'observation_date' => true,
        'observation_result' => true,
        'communication_date' => true,
        'communication_result' => true,
        'disease_id' => true,
        'action_taken' => true,
        'test_suggestion' => true,
        'sample_registration' => true,
        'lab_sample_data' => true,
        'test_list' => true,
        'disease' => true
    ];
}
