<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SampleApplicableTest[]|\Cake\Collection\CollectionInterface $sampleApplicableTest
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sample Applicable Test'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sample Registration'), ['controller' => 'SampleRegistration', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sample Registration'), ['controller' => 'SampleRegistration', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lab Sample Data'), ['controller' => 'LabSampleData', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lab Sample Data'), ['controller' => 'LabSampleData', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sampleApplicableTest index large-9 medium-8 columns content">
    <h3><?= __('Sample Applicable Test') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('test_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sample_reg_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sample_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('test_list_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('test_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('test_result') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observation_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observation_result') ?></th>
                <th scope="col"><?= $this->Paginator->sort('communication_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('communication_result') ?></th>
                <th scope="col"><?= $this->Paginator->sort('disease_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('action_taken') ?></th>
                <th scope="col"><?= $this->Paginator->sort('test_suggestion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sampleApplicableTest as $sampleApplicableTest): ?>
            <tr>
                <td><?= $this->Number->format($sampleApplicableTest->test_id) ?></td>
                <td><?= $sampleApplicableTest->has('sample_registration') ? $this->Html->link($sampleApplicableTest->sample_registration->sample_reg_id, ['controller' => 'SampleRegistration', 'action' => 'view', $sampleApplicableTest->sample_registration->sample_reg_id]) : '' ?></td>
                <td><?= $sampleApplicableTest->has('lab_sample_data') ? $this->Html->link($sampleApplicableTest->lab_sample_data->sample_id, ['controller' => 'LabSampleData', 'action' => 'view', $sampleApplicableTest->lab_sample_data->sample_id]) : '' ?></td>
                <td><?= $this->Number->format($sampleApplicableTest->test_list_id) ?></td>
                <td><?= h($sampleApplicableTest->test_date) ?></td>
                <td><?= h($sampleApplicableTest->test_result) ?></td>
                <td><?= h($sampleApplicableTest->observation_date) ?></td>
                <td><?= $this->Number->format($sampleApplicableTest->observation_result) ?></td>
                <td><?= h($sampleApplicableTest->communication_date) ?></td>
                <td><?= h($sampleApplicableTest->communication_result) ?></td>
                <td><?= $this->Number->format($sampleApplicableTest->disease_id) ?></td>
                <td><?= h($sampleApplicableTest->action_taken) ?></td>
                <td><?= h($sampleApplicableTest->test_suggestion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sampleApplicableTest->test_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sampleApplicableTest->test_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sampleApplicableTest->test_id], ['confirm' => __('Are you sure you want to delete # {0}?', $sampleApplicableTest->test_id)]) ?>
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
