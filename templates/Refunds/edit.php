<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Refund $refund
 * @var string[]|\Cake\Collection\CollectionInterface $payments
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $refund->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $refund->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Refunds'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="refunds form content">
            <?= $this->Form->create($refund) ?>
            <fieldset>
                <legend><?= __('Edit Refund') ?></legend>
                <?php
                    echo $this->Form->control('method');
                    echo $this->Form->control('amount');
                    echo $this->Form->control('reason');
                    echo $this->Form->control('payment_id', ['options' => $payments]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
