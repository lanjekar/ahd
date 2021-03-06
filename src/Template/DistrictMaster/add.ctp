<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DistrictMaster $districtMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List District Master'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List State Master'), ['controller' => 'StateMaster', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State Master'), ['controller' => 'StateMaster', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="districtMaster form large-9 medium-8 columns content">
    <?= $this->Form->create($districtMaster) ?>
    <fieldset>
        <legend><?= __('Add District Master') ?></legend>
        <?php
            echo $this->Form->control('state_id', ['options' => $stateMaster]);
            echo $this->Form->control('district_name');
            echo $this->Form->control('is_active');
            echo $this->Form->control('created_on');
            echo $this->Form->control('created_by');
            echo $this->Form->control('modified_on');
            echo $this->Form->control('modified_by');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
