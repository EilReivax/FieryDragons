<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 * @var \Cake\Collection\CollectionInterface|string[] $orders
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="items form content">
            <?= $this->Form->create($item) ?>
            <fieldset>
                <legend><?= __('Add Item') ?></legend>
                <?php
                    echo $this->Form->control('name', ['label' => ['text' => 'Name *', 'escape' => false]]);
                    echo $this->Form->control('description');
                    echo $this->Form->control('price', ['type' => 'number', 'label' => ['text' => 'Price *', 'escape' => false], 'step' => '0.01', 'min' => '0', 'max' => '9999999999.99']);
                    echo $this->Form->control('type', ['options' => ['Special' => 'Special', 'Main' => 'Main', 'Side' => 'Side', 'Beverage' => 'Beverage', 'Dessert' => 'Dessert', 'Other' => 'Other'], 'label' => ['text' => 'Type *', 'escape' => false]]);
                    echo $this->Form->control('availability');
                    echo $this->Form->control('photo', ['type' => 'file']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
