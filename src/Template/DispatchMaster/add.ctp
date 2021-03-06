<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DispatchMaster $dispatchMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dispatch Master'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dispatchMaster form large-9 medium-8 columns content">
    <?= $this->Form->create($dispatchMaster) ?>
    <fieldset>
        <legend><?= __('Add Dispatch Master') ?></legend>
        <?php
            echo $this->Form->control('dispatch_type');
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
