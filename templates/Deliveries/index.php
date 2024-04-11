<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Delivery> $deliveries
 */
?>
<div class="deliveries index content">
    <?= $this->Html->link(__('New Delivery'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Deliveries') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('suburb') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('postcode') ?></th>
                    <th><?= $this->Paginator->sort('fee') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('order_id') ?></th>
                    <th><?= $this->Paginator->sort('staff_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($deliveries as $delivery): ?>
                <tr>
                    <td><?= h($delivery->id) ?></td>
                    <td><?= h($delivery->suburb) ?></td>
                    <td><?= h($delivery->state) ?></td>
                    <td><?= h($delivery->postcode) ?></td>
                    <td><?= $this->Number->format($delivery->fee) ?></td>
                    <td><?= h($delivery->created) ?></td>
                    <td><?= h($delivery->modified) ?></td>
                    <td><?= $delivery->hasValue('order') ? $this->Html->link($delivery->order->status, ['controller' => 'Orders', 'action' => 'view', $delivery->order->id]) : '' ?></td>
                    <td><?= $delivery->hasValue('staff') ? $this->Html->link($delivery->staff->given_name, ['controller' => 'Staffs', 'action' => 'view', $delivery->staff->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $delivery->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $delivery->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $delivery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $delivery->id)]) ?>
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
