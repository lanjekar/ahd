<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SampleApplicableTest $sampleApplicableTest
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sample Applicable Test'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sample Registration'), ['controller' => 'SampleRegistration', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sample Registration'), ['controller' => 'SampleRegistration', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lab Sample Data'), ['controller' => 'LabSampleData', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lab Sample Data'), ['controller' => 'LabSampleData', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sampleApplicableTest form large-9 medium-8 columns content">
    <?= $this->Form->create($sampleApplicableTest) ?>
    <fieldset>
        <legend><?= __('Add Sample Applicable Test') ?></legend>
        <?php
            echo $this->Form->control('sample_reg_id', ['options' => $sampleRegistration]);
            echo $this->Form->control('sample_id', ['options' => $labSampleData]);
            echo $this->Form->control('test_list_id');
            echo $this->Form->control('test_date');
            echo $this->Form->control('test_result');
            echo $this->Form->control('observation_date');
            echo $this->Form->control('observation_result');
            echo $this->Form->control('communication_date');
            echo $this->Form->control('communication_result');
            echo $this->Form->control('disease_id');
            echo $this->Form->control('action_taken');
            echo $this->Form->control('test_suggestion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
