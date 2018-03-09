<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SampleRegistration $sampleRegistration
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sample Registration'), ['action' => 'edit', $sampleRegistration->sample_reg_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sample Registration'), ['action' => 'delete', $sampleRegistration->sample_reg_id], ['confirm' => __('Are you sure you want to delete # {0}?', $sampleRegistration->sample_reg_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sample Registration'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sample Registration'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sampleRegistration view large-9 medium-8 columns content">
    <h3><?= h($sampleRegistration->sample_reg_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $sampleRegistration->has('user') ? $this->Html->link($sampleRegistration->user->user_id, ['controller' => 'Users', 'action' => 'view', $sampleRegistration->user->user_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Institute Name') ?></th>
            <td><?= h($sampleRegistration->institute_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Owner Name') ?></th>
            <td><?= h($sampleRegistration->owner_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Owner Address') ?></th>
            <td><?= h($sampleRegistration->owner_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Owner Mobile') ?></th>
            <td><?= h($sampleRegistration->owner_mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Owner Email') ?></th>
            <td><?= h($sampleRegistration->owner_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Out No') ?></th>
            <td><?= h($sampleRegistration->out_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sample Reg Id') ?></th>
            <td><?= $this->Number->format($sampleRegistration->sample_reg_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Yearly Sample Id') ?></th>
            <td><?= $this->Number->format($sampleRegistration->yearly_sample_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monthly Sample Id') ?></th>
            <td><?= $this->Number->format($sampleRegistration->monthly_sample_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State Id') ?></th>
            <td><?= $this->Number->format($sampleRegistration->state_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('District Id') ?></th>
            <td><?= $this->Number->format($sampleRegistration->district_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dispatch Id') ?></th>
            <td><?= $this->Number->format($sampleRegistration->dispatch_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Letter No') ?></th>
            <td><?= $this->Number->format($sampleRegistration->letter_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('No Of Samples') ?></th>
            <td><?= $this->Number->format($sampleRegistration->no_of_samples) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($sampleRegistration->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Receipt No') ?></th>
            <td><?= $this->Number->format($sampleRegistration->receipt_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Recevied') ?></th>
            <td><?= h($sampleRegistration->date_of_recevied) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Registration') ?></th>
            <td><?= h($sampleRegistration->date_of_registration) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Letter Date') ?></th>
            <td><?= h($sampleRegistration->letter_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Receipt Date') ?></th>
            <td><?= h($sampleRegistration->receipt_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Out Date') ?></th>
            <td><?= h($sampleRegistration->out_date) ?></td>
        </tr>
    </table>
</div>
