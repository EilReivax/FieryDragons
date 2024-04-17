<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Item> $items
 */
?>
<div class="items index content">
    <?= $this->Html->link(__('New Menu Item'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Weekly Menu') ?></h3>
    <div class="item-list">
        <div class="row">
            <?php $counter = 0; ?>
            <?php foreach ($items as $item): ?>
            <div class="col">
                <div class="item">
                    <div class="item-image">
                        <!-- Display item image -->
                        <?= $this->Html->image($item->photo, ['alt' => $item->name]) ?>
                    </div>
                    <div class="item-details">
                        <!-- Display item ID -->
                        <div>ID: <?= h($item->id) ?></div>
                        <!-- Display item name -->
                        <div>Name: <?= h($item->name) ?></div>
                        <!-- Display item price -->
                        <div>Price: <?= $this->Number->format($item->price) ?></div>
                        <!-- Display item type -->
                        <div>Type: <?= h($item->type) ?></div>
                        <!-- Display item availability -->
                        <div>Availability: <?= h($item->availability) ?></div>
                    </div>
                    <div class="item-actions">
                        <!-- Display actions -->
                        <?= $this->Html->link(__('View'), ['action' => 'view', $item->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $item->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?>
                    </div>
                </div>
            </div>
            <?php $counter++; ?>
            <?php if ($counter % 4 === 0): ?> 
        </div>
        <div class="row">
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
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
