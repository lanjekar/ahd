<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SampleRegistration $sampleRegistration
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sample Registration'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sampleRegistration form large-9 medium-8 columns content">
    <?= $this->Form->create($sampleRegistration) ?>
    <fieldset>
        <legend><?= __('Add Sample Registration') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('yearly_sample_id');
            echo $this->Form->control('monthly_sample_id');
            echo $this->Form->control('date_of_recevied');
            echo $this->Form->control('date_of_registration');
            echo $this->Form->control('institute_name');
            echo $this->Form->control('owner_name');
            echo $this->Form->control('owner_address');
            echo $this->Form->control('owner_mobile');
            echo $this->Form->control('owner_email');
            echo $this->Form->control('state_id');
            echo $this->Form->control('district_id');
            echo $this->Form->control('dispatch_id');
            echo $this->Form->control('letter_no');
            echo $this->Form->control('letter_date');
            echo $this->Form->control('no_of_samples');
            echo $this->Form->control('amount');
            echo $this->Form->control('receipt_no');
            echo $this->Form->control('receipt_date');
            echo $this->Form->control('out_no');
            echo $this->Form->control('out_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
