<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Delivery $delivery
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Delivery'), ['action' => 'edit', $delivery->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Delivery'), ['action' => 'delete', $delivery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $delivery->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Deliveries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Delivery'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="deliveries view content">
            <h3><?= h($delivery->suburb) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($delivery->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Suburb') ?></th>
                    <td><?= h($delivery->suburb) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($delivery->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postcode') ?></th>
                    <td><?= h($delivery->postcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $delivery->hasValue('order') ? $this->Html->link($delivery->order->status, ['controller' => 'Orders', 'action' => 'view', $delivery->order->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Staff') ?></th>
                    <td><?= $delivery->hasValue('staff') ? $this->Html->link($delivery->staff->given_name, ['controller' => 'Staffs', 'action' => 'view', $delivery->staff->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Fee') ?></th>
                    <td><?= $this->Number->format($delivery->fee) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($delivery->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($delivery->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Address') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($delivery->address)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
