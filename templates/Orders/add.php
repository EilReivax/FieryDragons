<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $items
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="orders form content">
            <?= $this->Form->create($order) ?>
            <fieldset>
                <legend><?= __('Add Order') ?></legend>
                <?php
                echo $this->Form->hidden('status', ['value' => 'Pending']);
                echo $this->Form->control('delivery_method', ['options' => ['Pick-up' => 'Pick-up', 'Delivery' => 'Delivery']]);
                echo $this->Form->hidden('address');
                echo $this->Form->hidden('suburb');
                echo $this->Form->hidden('state');
                echo $this->Form->hidden('postcode', ['value' => '0']);
                echo $this->Form->control('note');
                echo $this->Form->hidden('delivery_fee', ['value' => '0.00']);
                echo $this->Form->hidden('subtotal', ['value' => '0.00']);
                echo $this->Form->control('user_id', ['options' => $users]);
                ?>
                <legend><?= __('Select Menu Items:') ?></legend>
                <?php
                    echo $this->Form->control('items._ids', ['options' => $items, 'multiple' => 'checkbox', 'label' => false]);
                ?>
<!--                <div class="item-selection">
                    <?php /*foreach ($items as $itemId => $itemName) : */?>
                        <div class="item-row">
                            <div class="item-checkbox">
                                <?php /*= $this->Form->control('items._ids', [
                                    'type' => 'checkbox',
                                    'value' => $itemId,
                                    'label' => $itemName
                                ]) */?>
                            </div>
                            <div class="item-quantity">
                                <?php /*= $this->Form->control('items.' . $itemId . '.quantity', [
                                    'type' => 'number',
                                    'label' => false,
                                    'class' => 'quantity-input',
                                    'min' => 1,
                                    'step' => 1
                                ]) */?>
                            </div>
                        </div>
                    <?php /*endforeach; */?>
                </div>-->
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
