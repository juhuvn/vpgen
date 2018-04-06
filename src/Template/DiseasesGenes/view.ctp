<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DiseasesGene $diseasesGene
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Diseases Gene'), ['action' => 'edit', $diseasesGene->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Diseases Gene'), ['action' => 'delete', $diseasesGene->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diseasesGene->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Diseases Genes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Diseases Gene'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Diseases'), ['controller' => 'Diseases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disease'), ['controller' => 'Diseases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Genes'), ['controller' => 'Genes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gene'), ['controller' => 'Genes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="diseasesGenes view large-9 medium-8 columns content">
    <h3><?= h($diseasesGene->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Disease') ?></th>
            <td><?= $diseasesGene->has('disease') ? $this->Html->link($diseasesGene->disease->id, ['controller' => 'Diseases', 'action' => 'view', $diseasesGene->disease->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gene') ?></th>
            <td><?= $diseasesGene->has('gene') ? $this->Html->link($diseasesGene->gene->name, ['controller' => 'Genes', 'action' => 'view', $diseasesGene->gene->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($diseasesGene->id) ?></td>
        </tr>
    </table>
</div>
