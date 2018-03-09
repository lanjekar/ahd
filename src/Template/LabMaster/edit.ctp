<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LabMaster $labMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $labMaster->lab_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $labMaster->lab_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Lab Master'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="labMaster form large-9 medium-8 columns content">
    <?= $this->Form->create($labMaster) ?>
    <fieldset>
        <legend><?= __('Edit Lab Master') ?></legend>
        <?php
            echo $this->Form->control('lab_name');
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
