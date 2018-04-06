<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DiseasesGene $diseasesGene
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Diseases Genes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Diseases'), ['controller' => 'Diseases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disease'), ['controller' => 'Diseases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Genes'), ['controller' => 'Genes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gene'), ['controller' => 'Genes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="diseasesGenes form large-9 medium-8 columns content">
    <?= $this->Form->create($diseasesGene) ?>
    <fieldset>
        <legend><?= __('Add Diseases Gene') ?></legend>
        <?php
            echo $this->Form->control('disease_id', ['options' => $diseases, 'empty' => true]);
            echo $this->Form->control('gene_id', ['options' => $genes, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
