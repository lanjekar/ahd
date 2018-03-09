<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LabMaster[]|\Cake\Collection\CollectionInterface $labMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lab Master'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="labMaster index large-9 medium-8 columns content">
    <h3><?= __('Lab Master') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('lab_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lab_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_by') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($labMaster as $labMaster): ?>
            <tr>
                <td><?= $this->Number->format($labMaster->lab_id) ?></td>
                <td><?= h($labMaster->lab_name) ?></td>
                <td><?= h($labMaster->is_active) ?></td>
                <td><?= h($labMaster->created_on) ?></td>
                <td><?= $this->Number->format($labMaster->created_by) ?></td>
                <td><?= h($labMaster->modified_on) ?></td>
                <td><?= $this->Number->format($labMaster->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $labMaster->lab_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $labMaster->lab_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $labMaster->lab_id], ['confirm' => __('Are you sure you want to delete # {0}?', $labMaster->lab_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
