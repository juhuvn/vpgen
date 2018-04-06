<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneDescription $geneDescription
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $geneDescription->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $geneDescription->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Gene Descriptions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Genes'), ['controller' => 'Genes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gene'), ['controller' => 'Genes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="geneDescriptions form large-9 medium-8 columns content">
    <?= $this->Form->create($geneDescription) ?>
    <fieldset>
        <legend><?= __('Edit Gene Description') ?></legend>
        <?php
            echo $this->Form->control('description');
            echo $this->Form->control('source');
            echo $this->Form->control('link');
            echo $this->Form->control('gene_id', ['options' => $genes, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
