<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payment $payment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Payment'), ['action' => 'edit', $payment->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Payment'), ['action' => 'delete', $payment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Payments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Payment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="payments view content">
            <h3><?= h($payment->status) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($payment->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($payment->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Method') ?></th>
                    <td><?= h($payment->method) ?></td>
                </tr>
                <tr>
                    <th><?= __('Card Number') ?></th>
                    <td><?= h($payment->card_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Card Cvv') ?></th>
                    <td><?= h($payment->card_cvv) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $payment->hasValue('order') ? $this->Html->link($payment->order->status, ['controller' => 'Orders', 'action' => 'view', $payment->order->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Discount') ?></th>
                    <td><?= $this->Number->format($payment->discount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Card Expiry') ?></th>
                    <td><?= h($payment->card_expiry) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($payment->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($payment->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Refunds') ?></h4>
                <?php if (!empty($payment->refunds)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Method') ?></th>
                            <th><?= __('Amount') ?></th>
                            <th><?= __('Reason') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Payment Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($payment->refunds as $refund) : ?>
                        <tr>
                            <td><?= h($refund->id) ?></td>
                            <td><?= h($refund->method) ?></td>
                            <td><?= h($refund->amount) ?></td>
                            <td><?= h($refund->reason) ?></td>
                            <td><?= h($refund->created) ?></td>
                            <td><?= h($refund->modified) ?></td>
                            <td><?= h($refund->payment_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Refunds', 'action' => 'view', $refund->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Refunds', 'action' => 'edit', $refund->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Refunds', 'action' => 'delete', $refund->id], ['confirm' => __('Are you sure you want to delete # {0}?', $refund->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
