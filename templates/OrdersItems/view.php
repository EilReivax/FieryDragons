<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrdersItem $ordersItem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Orders Item'), ['action' => 'edit', $ordersItem->order_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Orders Item'), ['action' => 'delete', $ordersItem->order_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersItem->order_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orders Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Orders Item'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ordersItems view content">
            <h3><?= h($ordersItem->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $ordersItem->hasValue('order') ? $this->Html->link($ordersItem->order->status, ['controller' => 'Orders', 'action' => 'view', $ordersItem->order->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Item') ?></th>
                    <td><?= $ordersItem->hasValue('item') ? $this->Html->link($ordersItem->item->name, ['controller' => 'Items', 'action' => 'view', $ordersItem->item->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($ordersItem->quantity) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
