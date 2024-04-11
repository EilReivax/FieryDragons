<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Refund> $refunds
 */
?>
<div class="refunds index content">
    <?= $this->Html->link(__('New Refund'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Refunds') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('method') ?></th>
                    <th><?= $this->Paginator->sort('amount') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('payment_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($refunds as $refund): ?>
                <tr>
                    <td><?= h($refund->id) ?></td>
                    <td><?= h($refund->method) ?></td>
                    <td><?= $this->Number->format($refund->amount) ?></td>
                    <td><?= h($refund->created) ?></td>
                    <td><?= h($refund->modified) ?></td>
                    <td><?= $refund->hasValue('payment') ? $this->Html->link($refund->payment->status, ['controller' => 'Payments', 'action' => 'view', $refund->payment->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $refund->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $refund->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $refund->id], ['confirm' => __('Are you sure you want to delete # {0}?', $refund->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
