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
                echo $this->Form->control('delivery_method', [
                    'options' => ['Pick-up' => 'Pick-up', 'Delivery' => 'Delivery'],
                    'onchange' => 'toggleAddressVisibility(this.value)',
                    'label' => ['text' => 'Delivery Method *', 'escape' => false]
                ]);

                ?>
                <div id="addressFields" style="display: none;">
                    <?php
                    echo $this->Form->control('address');
                    echo $this->Form->control('suburb');
                    echo $this->Form->control('state', ['options' => ['ACT' => 'ACT', 'NSW' => 'NSW', 'NT' => 'NT','QLD' => 'QLD', 'SA' => 'SA', 'TAS' =>'TAS', 'VIC' => 'VIC', 'WA' => 'WA']]);
                    echo $this->Form->control('postcode');
                    ?>
                </div>
                <script>
                    function toggleAddressVisibility(deliveryMethod) {
                        document.getElementById('addressFields').style.display = deliveryMethod === 'Delivery' ? 'block' : 'none';
                    }
                </script>
                <?php
                echo $this->Form->control('note');
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
