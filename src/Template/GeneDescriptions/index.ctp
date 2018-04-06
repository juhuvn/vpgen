<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneDescription[]|\Cake\Collection\CollectionInterface $geneDescriptions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Gene Description'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Genes'), ['controller' => 'Genes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gene'), ['controller' => 'Genes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="geneDescriptions index large-9 medium-8 columns content">
    <h3><?= __('Gene Descriptions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('source') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gene_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($geneDescriptions as $geneDescription): ?>
            <tr>
                <td><?= $this->Number->format($geneDescription->id) ?></td>
                <td><?= h($geneDescription->source) ?></td>
                <td><?= h($geneDescription->link) ?></td>
                <td><?= $geneDescription->has('gene') ? $this->Html->link($geneDescription->gene->name, ['controller' => 'Genes', 'action' => 'view', $geneDescription->gene->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $geneDescription->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $geneDescription->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $geneDescription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geneDescription->id)]) ?>
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
