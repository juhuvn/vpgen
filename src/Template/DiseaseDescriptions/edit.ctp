<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DiseaseDescription $diseaseDescription
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $diseaseDescription->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $diseaseDescription->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Disease Descriptions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Diseases'), ['controller' => 'Diseases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disease'), ['controller' => 'Diseases', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="diseaseDescriptions form large-9 medium-8 columns content">
    <?= $this->Form->create($diseaseDescription) ?>
    <fieldset>
        <legend><?= __('Edit Disease Description') ?></legend>
        <?php
            echo $this->Form->control('disease_id', ['options' => $diseases]);
            echo $this->Form->control('description');
            echo $this->Form->control('source');
            echo $this->Form->control('link');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
