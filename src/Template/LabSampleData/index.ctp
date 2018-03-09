<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LabSampleData[]|\Cake\Collection\CollectionInterface $labSampleData
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lab Sample Data'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sample Registration'), ['controller' => 'SampleRegistration', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sample Registration'), ['controller' => 'SampleRegistration', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sample Applicable Test'), ['controller' => 'SampleApplicableTest', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sample Applicable Test'), ['controller' => 'SampleApplicableTest', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="labSampleData index large-9 medium-8 columns content">
    <h3><?= __('Lab Sample Data') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('sample_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sample_reg_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lab_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tag_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('species_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('breed_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sample_list_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sex') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('post_mortum') ?></th>
                <th scope="col"><?= $this->Paginator->sort('doc_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('doc_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('doc_size') ?></th>
                <th scope="col"><?= $this->Paginator->sort('yearly_lab_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monthly_lab_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('test_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('instruction_by_level_1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('instruction_by_level_2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('instruction_by_level_3') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($labSampleData as $labSampleData): ?>
            <tr>
                <td><?= $this->Number->format($labSampleData->sample_id) ?></td>
                <td><?= $labSampleData->has('sample_registration') ? $this->Html->link($labSampleData->sample_registration->sample_reg_id, ['controller' => 'SampleRegistration', 'action' => 'view', $labSampleData->sample_registration->sample_reg_id]) : '' ?></td>
                <td><?= $this->Number->format($labSampleData->lab_id) ?></td>
                <td><?= $this->Number->format($labSampleData->tag_no) ?></td>
                <td><?= $this->Number->format($labSampleData->species_id) ?></td>
                <td><?= $this->Number->format($labSampleData->breed_id) ?></td>
                <td><?= $this->Number->format($labSampleData->sample_list_id) ?></td>
                <td><?= h($labSampleData->sex) ?></td>
                <td><?= $this->Number->format($labSampleData->age) ?></td>
                <td><?= h($labSampleData->post_mortum) ?></td>
                <td><?= h($labSampleData->doc_name) ?></td>
                <td><?= h($labSampleData->doc_type) ?></td>
                <td><?= h($labSampleData->doc_size) ?></td>
                <td><?= $this->Number->format($labSampleData->yearly_lab_id) ?></td>
                <td><?= $this->Number->format($labSampleData->monthly_lab_id) ?></td>
                <td><?= $labSampleData->has('sample_applicable_test') ? $this->Html->link($labSampleData->sample_applicable_test->test_id, ['controller' => 'SampleApplicableTest', 'action' => 'view', $labSampleData->sample_applicable_test->test_id]) : '' ?></td>
                <td><?= h($labSampleData->instruction_by_level_1) ?></td>
                <td><?= h($labSampleData->instruction_by_level_2) ?></td>
                <td><?= h($labSampleData->instruction_by_level_3) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $labSampleData->sample_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $labSampleData->sample_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $labSampleData->sample_id], ['confirm' => __('Are you sure you want to delete # {0}?', $labSampleData->sample_id)]) ?>
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
