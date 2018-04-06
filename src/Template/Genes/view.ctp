<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gene $gene
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Gene'), ['action' => 'edit', $gene->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Gene'), ['action' => 'delete', $gene->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gene->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Genes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gene'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Gene Descriptions'), ['controller' => 'GeneDescriptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gene Description'), ['controller' => 'GeneDescriptions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="genes view large-9 medium-8 columns content">
    <h3><?= h($gene->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($gene->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Full') ?></th>
            <td><?= h($gene->name_full) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Synonyms') ?></th>
            <td><?= h($gene->synonyms) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($gene->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Omim') ?></th>
            <td><?= $this->Number->format($gene->omim) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description Vi') ?></h4>
        <?= $this->Text->autoParagraph(h($gene->description_vi)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Gene Descriptions') ?></h4>
        <?php if (!empty($gene->gene_descriptions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Source') ?></th>
                <th scope="col"><?= __('Link') ?></th>
                <th scope="col"><?= __('Gene Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($gene->gene_descriptions as $geneDescriptions): ?>
            <tr>
                <td><?= h($geneDescriptions->id) ?></td>
                <td><?= h($geneDescriptions->description) ?></td>
                <td><?= h($geneDescriptions->source) ?></td>
                <td><?= h($geneDescriptions->link) ?></td>
                <td><?= h($geneDescriptions->gene_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'GeneDescriptions', 'action' => 'view', $geneDescriptions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'GeneDescriptions', 'action' => 'edit', $geneDescriptions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'GeneDescriptions', 'action' => 'delete', $geneDescriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geneDescriptions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
