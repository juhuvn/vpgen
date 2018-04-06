<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneDescription $geneDescription
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Gene Description'), ['action' => 'edit', $geneDescription->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Gene Description'), ['action' => 'delete', $geneDescription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geneDescription->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Gene Descriptions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gene Description'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Genes'), ['controller' => 'Genes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gene'), ['controller' => 'Genes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="geneDescriptions view large-9 medium-8 columns content">
    <h3><?= h($geneDescription->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Source') ?></th>
            <td><?= h($geneDescription->source) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($geneDescription->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gene') ?></th>
            <td><?= $geneDescription->has('gene') ? $this->Html->link($geneDescription->gene->name, ['controller' => 'Genes', 'action' => 'view', $geneDescription->gene->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($geneDescription->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($geneDescription->description)); ?>
    </div>
</div>
