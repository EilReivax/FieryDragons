<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\OrdersItem> $ordersItems
 */
?>
<div class="ordersItems index content">
    <?= $this->Html->link(__('New Orders Item'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Orders Items') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('order_id') ?></th>
                    <th><?= $this->Paginator->sort('item_id') ?></th>
                    <th><?= $this->Paginator->sort('quantity') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ordersItems as $ordersItem): ?>
                <tr>
                    <td><?= $ordersItem->hasValue('order') ? $this->Html->link($ordersItem->order->status, ['controller' => 'Orders', 'action' => 'view', $ordersItem->order->id]) : '' ?></td>
                    <td><?= $ordersItem->hasValue('item') ? $this->Html->link($ordersItem->item->name, ['controller' => 'Items', 'action' => 'view', $ordersItem->item->id]) : '' ?></td>
                    <td><?= $this->Number->format($ordersItem->quantity) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ordersItem->order_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ordersItem->order_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ordersItem->order_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersItem->order_id)]) ?>
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
