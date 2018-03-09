<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LabMaster $labMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lab Master'), ['action' => 'edit', $labMaster->lab_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lab Master'), ['action' => 'delete', $labMaster->lab_id], ['confirm' => __('Are you sure you want to delete # {0}?', $labMaster->lab_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lab Master'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lab Master'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="labMaster view large-9 medium-8 columns content">
    <h3><?= h($labMaster->lab_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Lab Name') ?></th>
            <td><?= h($labMaster->lab_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= h($labMaster->is_active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lab Id') ?></th>
            <td><?= $this->Number->format($labMaster->lab_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($labMaster->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($labMaster->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created On') ?></th>
            <td><?= h($labMaster->created_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified On') ?></th>
            <td><?= h($labMaster->modified_on) ?></td>
        </tr>
    </table>
</div>
