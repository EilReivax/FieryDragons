<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h3 class="order-status-heading"><?= __('Add User') ?></h3>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('given_name');
                    echo $this->Form->control('family_name');
                    echo $this->Form->control('phone', ['type' => 'number']);
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('admin');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
