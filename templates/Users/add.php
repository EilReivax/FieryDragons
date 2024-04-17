<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('given_name');
                    echo $this->Form->control('family_name');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('address');
                    echo $this->Form->control('suburb');
                    echo $this->Form->control('state');
                    echo $this->Form->control('postcode');
                    echo $this->Form->control('card_number', ['type' => 'number']);
                    echo $this->Form->control('card_cvv', ['type' => 'number']);
                    echo $this->Form->control('card_expiry', ['type' => 'month', 'empty' => true]);
                    echo $this->Form->control('admin');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
