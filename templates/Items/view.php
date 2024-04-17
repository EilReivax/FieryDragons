    <?php
    /**
     * @var \App\View\AppView $this
     * @var \App\Model\Entity\Item $item
     */
    ?>
    <div class="row">
        <aside class="column">
            <div class="side-nav">
                <h4 class="heading"><?= __('Actions') ?></h4>
                <?= $this->Html->link(__('Edit Item'), ['action' => 'edit', $item->id], ['class' => 'side-nav-item']) ?>
                <?= $this->Form->postLink(__('Delete Item'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id), 'class' => 'side-nav-item']) ?>
                <?= $this->Html->link(__('List Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                <?= $this->Html->link(__('New Item'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            </div>
        </aside>
        <div class="column column-80">
            <div class="items view content">
                <h3><?= h($item->name) ?></h3>
                <table>
                    <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= h($item->id) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Name') ?></th>
                        <td><?= h($item->name) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Type') ?></th>
                        <td><?= h($item->type) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Photo') ?></th>
                        <td><?= h($item->photo) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Price') ?></th>
                        <td><?= $this->Number->format($item->price) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Availability') ?></th>
                        <td><?= $item->availability ? __('Yes') : __('No'); ?></td>
                    </tr>
                </table>
                <div class="text">
                    <strong><?= __('Description') ?></strong>
                    <blockquote>
                        <?= $this->Text->autoParagraph(h($item->description)); ?>
                    </blockquote>
                </div>
                <div class="related">
                    <h4><?= __('Related Orders') ?></h4>
                    <?php if (!empty($item->orders)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Delivery Method') ?></th>
                                <th><?= __('Status') ?></th>
                                <th><?= __('Address') ?></th>
                                <th><?= __('Suburb') ?></th>
                                <th><?= __('State') ?></th>
                                <th><?= __('Postcode') ?></th>
                                <th><?= __('Delivery Fee') ?></th>
                                <th><?= __('Subtotal') ?></th>
                                <th><?= __('Note') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th><?= __('User Id') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($item->orders as $order) : ?>
                            <tr>
                                <td><?= h($order->id) ?></td>
                                <td><?= h($order->delivery_method) ?></td>
                                <td><?= h($order->status) ?></td>
                                <td><?= h($order->address) ?></td>
                                <td><?= h($order->suburb) ?></td>
                                <td><?= h($order->state) ?></td>
                                <td><?= h($order->postcode) ?></td>
                                <td><?= h($order->delivery_fee) ?></td>
                                <td><?= h($order->subtotal) ?></td>
                                <td><?= h($order->note) ?></td>
                                <td><?= h($order->created) ?></td>
                                <td><?= h($order->modified) ?></td>
                                <td><?= h($order->user_id) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $order->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $order->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
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
