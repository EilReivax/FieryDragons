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
                        var displayStyle = deliveryMethod === 'Delivery' ? 'block' : 'none';
                        document.getElementById('addressFields').style.display = displayStyle;
                    }
                </script>
                <?php
                echo $this->Form->control('note');
                echo $this->Form->hidden('subtotal', ['value' => '0.00']);
                echo $this->Form->hidden('delivery_fee', ['value' => '0.00']);
                echo $this->Form->control('user_id', ['options' => $users]);
                ?>
                <legend><?= __('Select Menu Items: *') ?></legend>
                <?php
                    echo $this->Form->control('items._ids', ['options' => $items, 'multiple' => 'checkbox', 'label' => false]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
