<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disease[]|\Cake\Collection\CollectionInterface $diseases
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Disease'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Disease Descriptions'), ['controller' => 'DiseaseDescriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disease Description'), ['controller' => 'DiseaseDescriptions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="diseases index large-9 medium-8 columns content">
    <h3><?= __('Diseases') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_en') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_vi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($diseases as $disease): ?>
            <tr>
                <td><?= $this->Number->format($disease->id) ?></td>
                <td><?= h($disease->name_en) ?></td>
                <td><?= h($disease->name_vi) ?></td>
                <td><?= $disease->has('category') ? $this->Html->link($disease->category->id, ['controller' => 'Categories', 'action' => 'view', $disease->category->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $disease->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $disease->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $disease->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disease->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
