<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Refund $refund
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Refund'), ['action' => 'edit', $refund->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Refund'), ['action' => 'delete', $refund->id], ['confirm' => __('Are you sure you want to delete # {0}?', $refund->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Refunds'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Refund'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="refunds view content">
            <h3><?= h($refund->method) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($refund->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Method') ?></th>
                    <td><?= h($refund->method) ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment') ?></th>
                    <td><?= $refund->hasValue('payment') ? $this->Html->link($refund->payment->status, ['controller' => 'Payments', 'action' => 'view', $refund->payment->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= $this->Number->format($refund->amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($refund->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($refund->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Reason') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($refund->reason)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
