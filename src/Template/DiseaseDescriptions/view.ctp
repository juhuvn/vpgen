<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DiseaseDescription $diseaseDescription
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Disease Description'), ['action' => 'edit', $diseaseDescription->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Disease Description'), ['action' => 'delete', $diseaseDescription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diseaseDescription->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Disease Descriptions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disease Description'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Diseases'), ['controller' => 'Diseases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disease'), ['controller' => 'Diseases', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="diseaseDescriptions view large-9 medium-8 columns content">
    <h3><?= h($diseaseDescription->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Disease') ?></th>
            <td><?= $diseaseDescription->has('disease') ? $this->Html->link($diseaseDescription->disease->id, ['controller' => 'Diseases', 'action' => 'view', $diseaseDescription->disease->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Source') ?></th>
            <td><?= h($diseaseDescription->source) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($diseaseDescription->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($diseaseDescription->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($diseaseDescription->description)); ?>
    </div>
</div>
