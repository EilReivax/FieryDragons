<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Order> $orders
 */
?>
<div class="orders index content">
    <?= $this->Html->link(__('New Order'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Orders') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('delivery_method') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('suburb') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('postcode') ?></th>
                    <th><?= $this->Paginator->sort('delivery_fee') ?></th>
                    <th><?= $this->Paginator->sort('subtotal') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= h($order->id) ?></td>
                    <td><?= h($order->delivery_method) ?></td>
                    <td><?= h($order->status) ?></td>
                    <td><?= h($order->suburb) ?></td>
                    <td><?= h($order->state) ?></td>
                    <td><?= $this->Number->format($order->postcode) ?></td>
                    <td><?= $this->Number->format($order->delivery_fee) ?></td>
                    <td><?= $this->Number->format($order->subtotal) ?></td>
                    <td><?= h($order->created) ?></td>
                    <td><?= h($order->modified) ?></td>
                    <td><?= $order->hasValue('user') ? $this->Html->link($order->user->given_name, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $order->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
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
