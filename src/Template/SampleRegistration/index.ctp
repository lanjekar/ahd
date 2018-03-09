<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SampleRegistration[]|\Cake\Collection\CollectionInterface $sampleRegistration
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sample Registration'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sampleRegistration index large-9 medium-8 columns content">
    <h3><?= __('Sample Registration') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('sample_reg_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('yearly_sample_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monthly_sample_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_of_recevied') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_of_registration') ?></th>
                <th scope="col"><?= $this->Paginator->sort('institute_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('owner_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('owner_address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('owner_mobile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('owner_email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('district_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dispatch_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('letter_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('letter_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('no_of_samples') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('receipt_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('receipt_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('out_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('out_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sampleRegistration as $sampleRegistration): ?>
            <tr>
                <td><?= $this->Number->format($sampleRegistration->sample_reg_id) ?></td>
                <td><?= $sampleRegistration->has('user') ? $this->Html->link($sampleRegistration->user->user_id, ['controller' => 'Users', 'action' => 'view', $sampleRegistration->user->user_id]) : '' ?></td>
                <td><?= $this->Number->format($sampleRegistration->yearly_sample_id) ?></td>
                <td><?= $this->Number->format($sampleRegistration->monthly_sample_id) ?></td>
                <td><?= h($sampleRegistration->date_of_recevied) ?></td>
                <td><?= h($sampleRegistration->date_of_registration) ?></td>
                <td><?= h($sampleRegistration->institute_name) ?></td>
                <td><?= h($sampleRegistration->owner_name) ?></td>
                <td><?= h($sampleRegistration->owner_address) ?></td>
                <td><?= h($sampleRegistration->owner_mobile) ?></td>
                <td><?= h($sampleRegistration->owner_email) ?></td>
                <td><?= $this->Number->format($sampleRegistration->state_id) ?></td>
                <td><?= $this->Number->format($sampleRegistration->district_id) ?></td>
                <td><?= $this->Number->format($sampleRegistration->dispatch_id) ?></td>
                <td><?= $this->Number->format($sampleRegistration->letter_no) ?></td>
                <td><?= h($sampleRegistration->letter_date) ?></td>
                <td><?= $this->Number->format($sampleRegistration->no_of_samples) ?></td>
                <td><?= $this->Number->format($sampleRegistration->amount) ?></td>
                <td><?= $this->Number->format($sampleRegistration->receipt_no) ?></td>
                <td><?= h($sampleRegistration->receipt_date) ?></td>
                <td><?= h($sampleRegistration->out_no) ?></td>
                <td><?= h($sampleRegistration->out_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sampleRegistration->sample_reg_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sampleRegistration->sample_reg_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sampleRegistration->sample_reg_id], ['confirm' => __('Are you sure you want to delete # {0}?', $sampleRegistration->sample_reg_id)]) ?>
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
