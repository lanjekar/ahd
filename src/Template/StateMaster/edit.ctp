<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StateMaster $stateMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $stateMaster->state_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $stateMaster->state_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List State Master'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="stateMaster form large-9 medium-8 columns content">
    <?= $this->Form->create($stateMaster) ?>
    <fieldset>
        <legend><?= __('Edit State Master') ?></legend>
        <?php
            echo $this->Form->control('state_name');
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
