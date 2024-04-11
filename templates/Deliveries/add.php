<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Delivery $delivery
 * @var \Cake\Collection\CollectionInterface|string[] $orders
 * @var \Cake\Collection\CollectionInterface|string[] $staffs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Deliveries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="deliveries form content">
            <?= $this->Form->create($delivery) ?>
            <fieldset>
                <legend><?= __('Add Delivery') ?></legend>
                <?php
                    echo $this->Form->control('address');
                    echo $this->Form->control('suburb');
                    echo $this->Form->control('state');
                    echo $this->Form->control('postcode');
                    echo $this->Form->control('fee');
                    echo $this->Form->control('order_id', ['options' => $orders]);
                    echo $this->Form->control('staff_id', ['options' => $staffs]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
