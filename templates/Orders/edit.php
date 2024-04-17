<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $items
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $order->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $order->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="orders form content">
            <?= $this->Form->create($order) ?>
            <fieldset>
                <legend><?= __('Edit Order') ?></legend>
                <?php
                echo $this->Form->hidden('status', ['value' => 'Pending']);
                echo $this->Form->control('delivery_method', ['options' => ['Pick-up' => 'Pick-up', 'Delivery' => 'Delivery']]);
                echo $this->Form->control('address');
                echo $this->Form->control('suburb');
                echo $this->Form->control('state', ['options' => ['ACT' => 'ACT', 'NSW' => 'NSW', 'NT' => 'NT','QLD' => 'QLD', 'SA' => 'SA', 'TAS' =>'TAS', 'VIC' => 'VIC', 'WA' => 'WA']]);
                echo $this->Form->control('postcode');
                echo $this->Form->control('note');
                echo $this->Form->hidden('subtotal', ['value' => '0.00']);
                echo $this->Form->hidden('delivery_fee', ['value' => '0.00']);
                echo $this->Form->control('user_id', ['options' => $users]);
                ?>
                <legend><?= __('Select Menu Items:') ?></legend>
                <?php
                    echo $this->Form->control('items._ids', ['options' => $items, 'multiple' => 'checkbox', 'label' => false]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
