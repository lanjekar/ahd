<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LabSampleData $labSampleData
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $labSampleData->sample_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $labSampleData->sample_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Lab Sample Data'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sample Registration'), ['controller' => 'SampleRegistration', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sample Registration'), ['controller' => 'SampleRegistration', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sample Applicable Test'), ['controller' => 'SampleApplicableTest', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sample Applicable Test'), ['controller' => 'SampleApplicableTest', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="labSampleData form large-9 medium-8 columns content">
    <?= $this->Form->create($labSampleData) ?>
    <fieldset>
        <legend><?= __('Edit Lab Sample Data') ?></legend>
        <?php
            echo $this->Form->control('sample_reg_id', ['options' => $sampleRegistration]);
            echo $this->Form->control('lab_id');
            echo $this->Form->control('tag_no');
            echo $this->Form->control('species_id');
            echo $this->Form->control('breed_id');
            echo $this->Form->control('sample_list_id');
            echo $this->Form->control('sex');
            echo $this->Form->control('age');
            echo $this->Form->control('post_mortum');
            echo $this->Form->control('doc_name');
            echo $this->Form->control('doc_type');
            echo $this->Form->control('doc_size');
            echo $this->Form->control('yearly_lab_id');
            echo $this->Form->control('monthly_lab_id');
            echo $this->Form->control('test_id', ['options' => $sampleApplicableTest]);
            echo $this->Form->control('instruction_by_level_1');
            echo $this->Form->control('instruction_by_level_2');
            echo $this->Form->control('instruction_by_level_3');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
