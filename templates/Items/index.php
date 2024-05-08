<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Item> $items
 */
?>
<div class="items index content">
    <?php if ($user && $user->admin): ?>
        <?= $this->Html->link(__('New Item'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <?php endif; ?>
    <?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add'], ['class' => 'button float-right']) ?>
    <h1><?= __('Weeky Menu') ?></h1>
    <div class="item-list">
    <div class="row">
        <?php $counter = 0; ?>
        <?php $totalItems = count($items); ?> <!-- Get total number of items -->
        <?php foreach ($items as $index => $item): ?>
        <div class="col">
            <div class="item">
            <div class="item-image">
        <?= $this->Html->image($item->photo, ['alt' => $item->name, 'height' => 200, 'width' => 300]) ?>
        </div>
                <div class="item-details">
                    <!-- Display item name -->
                    <div>Name: <?= h($item->name) ?></div>
                    <!-- Display item price -->
                    <div>Price: $<?= $this->Number->format($item->price, ['places' => 2]) ?></div>
                    <!-- Display item type -->
                    <div>Type: <?= h($item->type) ?></div>
                </div>
                <div class="item-actions">
                    <!-- Display actions -->
                    <?= $this->Html->link(__('View'), ['action' => 'view', $item->id], ['class' => 'button button-view']) ?>
                    <?php if ($user && $user->admin): ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $item->id], ['class' => 'button button-edit']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete {0}?', $item->name), 'class' => 'button button-delete']) ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php $counter++; ?>
        <?php if ($counter % 4 === 0 || $index === $totalItems - 1): ?>
    </div>
    <?php if ($index !== $totalItems - 1): ?> <!-- Check if it's not the last item -->
        <div class="row bottom-row"> <!-- Add a class to the bottom row -->
    <?php endif; ?>
    <?php endif; ?>
    <?php endforeach; ?>
</div>

    <div class="paginator">
        <!-- Pagination links -->
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <!-- Pagination counter -->
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
