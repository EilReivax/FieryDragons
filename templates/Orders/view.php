<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<div class="row">
    <!--<aside class="column">
        <div class="side-nav">
            <h3 class="order-status-heading"><?php /*= __('Order Status') */?></h3>
            <?php /*if ($user && $user->admin): */?>
                <?php /*= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->id], ['class' => 'side-nav-item']) */?>
                <?php /*= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id), 'class' => 'side-nav-item']) */?>
            <?php /*endif;*/?>
            <?php /*= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) */?>
            <?php /*= $this->Html->link(__('New Order'), ['action' => 'add'], ['class' => 'side-nav-item']) */?>
        </div>
    </aside>-->
    <div class="column column-80">
        <div class="orders view content">
            <h3><?= h($order->status) . " " . h($order->delivery_method) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($order->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $order->hasValue('user') ? $this->Html->link($order->user->given_name, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($order->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Delivery Method') ?></th>
                    <td><?= h($order->delivery_method) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Note') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($order->note)); ?>
                </blockquote>
            </div>
            <!--<div class="text">
                <strong><?php /*= __('Address') */?></strong>
                <blockquote>
                    <?php /*= $this->Form->input('address', [
                        'maxlength' => '40',
                        'value' => h($order->address),
                        'style' => 'width: 500px;' // Adjust the width as needed
                    ]); */?>
                </blockquote>
            </div>-->
            <table>
                <!--<tr>
                    <th><?php /*= __('Suburb') */?></th>
                    <td><?php /*= h($order->suburb) */?></td>
                </tr>
                <tr>
                    <th><?php /*= __('State') */?></th>
                    <td><?php /*= h($order->state) */?></td>
                </tr>
                <tr>
                    <th><?php /*= __('Postcode') */?></th>
                    <td><?php /*= h($order->postcode) */?></td>
                </tr>-->
                <tr>
                    <th><?= __('Delivery Fee') ?></th>
                    <td>$<?= $this->Number->format($order->delivery_fee, ['places' => 2]) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subtotal') ?></th>
                    <td>$<?= $this->Number->format($order->subtotal, ['places' => 2]) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($order->created->format('d/m/Y, H:i:s')) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($order->modified->format('d/m/Y, H:i:s')) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Items') ?></h4>
                <?php if (!empty($order->items)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Type') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($order->items as $item) : ?>
                        <tr>
                            <td><?= h($item->name) ?></td>
                            <td>$<?= h($item->price) ?></td>
                            <td><?= h($item->type) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Items', 'action' => 'view', $item->id]) ?>
                                <?php /*if ($user && $user->admin): */?><!--
                                    <?php /*= $this->Html->link(__('Edit'), ['controller' => 'Items', 'action' => 'edit', $item->id]) */?>
                                    <?php /*= $this->Form->postLink(__('Delete'), ['controller' => 'Items', 'action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) */?>
                                --><?php /*endif; */?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('PayID - Please pay the full amount to the following PayID') ?></h4>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Name') ?></th>
                            <td><?=__('Apurba') ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Phone Number') ?></th>
                            <td><?= __('0412345678') ?></td>
                        </tr>
                        <tr>
                            <th><a href="https://payid.com.au/how-it-works/" target="_blank" style="color: dodgerblue;"><?= __('What is PayID?') ?></a></th>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- Back Button -->
            <button onclick="goBack()">Back To Orders</button>
            <script>
                function goBack() {
                    window.history.back();
                }
            </script>
        </div>
    </div>
</div>
