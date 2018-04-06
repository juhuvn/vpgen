<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DiseasesGene[]|\Cake\Collection\CollectionInterface $diseasesGenes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Diseases Gene'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Diseases'), ['controller' => 'Diseases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disease'), ['controller' => 'Diseases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Genes'), ['controller' => 'Genes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gene'), ['controller' => 'Genes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="diseasesGenes index large-9 medium-8 columns content">
    <h3><?= __('Diseases Genes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('disease_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gene_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($diseasesGenes as $diseasesGene): ?>
            <tr>
                <td><?= $this->Number->format($diseasesGene->id) ?></td>
                <td><?= $diseasesGene->has('disease') ? $this->Html->link($diseasesGene->disease->id, ['controller' => 'Diseases', 'action' => 'view', $diseasesGene->disease->id]) : '' ?></td>
                <td><?= $diseasesGene->has('gene') ? $this->Html->link($diseasesGene->gene->name, ['controller' => 'Genes', 'action' => 'view', $diseasesGene->gene->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $diseasesGene->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $diseasesGene->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $diseasesGene->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diseasesGene->id)]) ?>
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
