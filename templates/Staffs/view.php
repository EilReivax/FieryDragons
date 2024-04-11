<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staff $staff
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Staff'), ['action' => 'edit', $staff->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Staff'), ['action' => 'delete', $staff->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staff->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Staffs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Staff'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="staffs view content">
            <h3><?= h($staff->given_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($staff->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Given Name') ?></th>
                    <td><?= h($staff->given_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Family Name') ?></th>
                    <td><?= h($staff->family_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($staff->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($staff->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= h($staff->role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($staff->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($staff->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Deliveries') ?></h4>
                <?php if (!empty($staff->deliveries)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Suburb') ?></th>
                            <th><?= __('State') ?></th>
                            <th><?= __('Postcode') ?></th>
                            <th><?= __('Fee') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Order Id') ?></th>
                            <th><?= __('Staff Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($staff->deliveries as $delivery) : ?>
                        <tr>
                            <td><?= h($delivery->id) ?></td>
                            <td><?= h($delivery->address) ?></td>
                            <td><?= h($delivery->suburb) ?></td>
                            <td><?= h($delivery->state) ?></td>
                            <td><?= h($delivery->postcode) ?></td>
                            <td><?= h($delivery->fee) ?></td>
                            <td><?= h($delivery->created) ?></td>
                            <td><?= h($delivery->modified) ?></td>
                            <td><?= h($delivery->order_id) ?></td>
                            <td><?= h($delivery->staff_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Deliveries', 'action' => 'view', $delivery->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Deliveries', 'action' => 'edit', $delivery->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Deliveries', 'action' => 'delete', $delivery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $delivery->id)]) ?>
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
