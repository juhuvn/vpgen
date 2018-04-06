<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gene $gene
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gene->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gene->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Genes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Gene Descriptions'), ['controller' => 'GeneDescriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gene Description'), ['controller' => 'GeneDescriptions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="genes form large-9 medium-8 columns content">
    <?= $this->Form->create($gene) ?>
    <fieldset>
        <legend><?= __('Edit Gene') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('name_full');
            echo $this->Form->control('description_vi');
            echo $this->Form->control('synonyms');
            echo $this->Form->control('omim');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
