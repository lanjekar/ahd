<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Lab Master'), ['controller' => 'LabMaster', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lab Master'), ['controller' => 'LabMaster', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('lab_id', ['options' => $labMaster]);
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('email');
            echo $this->Form->control('mobile');
            echo $this->Form->control('user_role');
            echo $this->Form->control('village');
            echo $this->Form->control('taluka');
            echo $this->Form->control('state');
            echo $this->Form->control('district');
            echo $this->Form->control('is_active');
            echo $this->Form->control('created_by');
            echo $this->Form->control('created_on');
            echo $this->Form->control('modified_by');
            echo $this->Form->control('modified_on');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
