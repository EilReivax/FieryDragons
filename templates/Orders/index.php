<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Order> $orders
 */
?>
<div class="orders index content">
    <?= $this->Html->link(__('New Order'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3 class="order-status-index"><?= __('All Orders') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <?php if ($user && $user->admin): ?>
                        <th><?= $this->Paginator->sort('user_id') ?></th>
                    <?php endif;?>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('delivery_method') ?></th>
                    <!--<th><?php /*= $this->Paginator->sort('suburb') */?></th>
                    <th><?php /*= $this->Paginator->sort('state') */?></th>
                    <th><?php /*= $this->Paginator->sort('postcode') */?></th>
                    <th><?php /*= $this->Paginator->sort('delivery_fee') */?></th>-->
                    <th><?= $this->Paginator->sort('subtotal') ?></th>
                    <!--<th><?php /*= $this->Paginator->sort('created') */?></th>
                    <th><?php /*= $this->Paginator->sort('modified') */?></th>-->
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= h($order->id) ?></td>
                    <?php if ($user && $user->admin): ?>
                        <td><?= $order->hasValue('user') ? $this->Html->link($order->user->given_name, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></td>
                    <?php endif; ?>
                    <td><?= h($order->status) ?></td>
                    <td><?= h($order->delivery_method) ?></td>
                    <!--<td><?php /*= h($order->suburb) */?></td>
                    <td><?php /*= h($order->state) */?></td>
                    <td><?php /*= $this->Number->format($order->postcode) */?></td>
                    <td><?php /*= $this->Number->format($order->delivery_fee) */?></td>-->
                    <td>$<?= $this->Number->format($order->subtotal, ['places' => 2]) ?></td>
                    <!--<td><?php /*= h($order->created->format('d/m/Y, H:i:s')) */?></td>
                    <td><?php /*= h($order->modified->format('d/m/Y, H:i:s')) */?></td>-->

                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $order->id]) ?>

                        <?php if ($user && $user->admin): ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
