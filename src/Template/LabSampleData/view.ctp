<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LabSampleData $labSampleData
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lab Sample Data'), ['action' => 'edit', $labSampleData->sample_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lab Sample Data'), ['action' => 'delete', $labSampleData->sample_id], ['confirm' => __('Are you sure you want to delete # {0}?', $labSampleData->sample_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lab Sample Data'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lab Sample Data'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sample Registration'), ['controller' => 'SampleRegistration', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sample Registration'), ['controller' => 'SampleRegistration', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sample Applicable Test'), ['controller' => 'SampleApplicableTest', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sample Applicable Test'), ['controller' => 'SampleApplicableTest', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="labSampleData view large-9 medium-8 columns content">
    <h3><?= h($labSampleData->sample_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sample Registration') ?></th>
            <td><?= $labSampleData->has('sample_registration') ? $this->Html->link($labSampleData->sample_registration->sample_reg_id, ['controller' => 'SampleRegistration', 'action' => 'view', $labSampleData->sample_registration->sample_reg_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sex') ?></th>
            <td><?= h($labSampleData->sex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Post Mortum') ?></th>
            <td><?= h($labSampleData->post_mortum) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doc Name') ?></th>
            <td><?= h($labSampleData->doc_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doc Type') ?></th>
            <td><?= h($labSampleData->doc_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doc Size') ?></th>
            <td><?= h($labSampleData->doc_size) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sample Applicable Test') ?></th>
            <td><?= $labSampleData->has('sample_applicable_test') ? $this->Html->link($labSampleData->sample_applicable_test->test_id, ['controller' => 'SampleApplicableTest', 'action' => 'view', $labSampleData->sample_applicable_test->test_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instruction By Level 1') ?></th>
            <td><?= h($labSampleData->instruction_by_level_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instruction By Level 2') ?></th>
            <td><?= h($labSampleData->instruction_by_level_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instruction By Level 3') ?></th>
            <td><?= h($labSampleData->instruction_by_level_3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sample Id') ?></th>
            <td><?= $this->Number->format($labSampleData->sample_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lab Id') ?></th>
            <td><?= $this->Number->format($labSampleData->lab_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag No') ?></th>
            <td><?= $this->Number->format($labSampleData->tag_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Species Id') ?></th>
            <td><?= $this->Number->format($labSampleData->species_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Breed Id') ?></th>
            <td><?= $this->Number->format($labSampleData->breed_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sample List Id') ?></th>
            <td><?= $this->Number->format($labSampleData->sample_list_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($labSampleData->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Yearly Lab Id') ?></th>
            <td><?= $this->Number->format($labSampleData->yearly_lab_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monthly Lab Id') ?></th>
            <td><?= $this->Number->format($labSampleData->monthly_lab_id) ?></td>
        </tr>
    </table>
</div>
