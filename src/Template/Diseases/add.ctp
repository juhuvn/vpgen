<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disease $disease
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Diseases'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Disease Descriptions'), ['controller' => 'DiseaseDescriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disease Description'), ['controller' => 'DiseaseDescriptions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="diseases form large-9 medium-8 columns content">
    <?= $this->Form->create($disease) ?>
    <fieldset>
        <legend><?= __('Add Disease') ?></legend>
        <?php
            echo $this->Form->control('name_en');
            echo $this->Form->control('name_vi');
            echo $this->Form->control('description_vi');
            echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
