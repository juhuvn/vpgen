<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disease $disease
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Disease'), ['action' => 'edit', $disease->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Disease'), ['action' => 'delete', $disease->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disease->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Diseases'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disease'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Disease Descriptions'), ['controller' => 'DiseaseDescriptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disease Description'), ['controller' => 'DiseaseDescriptions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="diseases view large-9 medium-8 columns content">
    <h3><?= h($disease->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name En') ?></th>
            <td><?= h($disease->name_en) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Vi') ?></th>
            <td><?= h($disease->name_vi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $disease->has('category') ? $this->Html->link($disease->category->id, ['controller' => 'Categories', 'action' => 'view', $disease->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($disease->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description Vi') ?></h4>
        <?= $this->Text->autoParagraph(h($disease->description_vi)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Disease Descriptions') ?></h4>
        <?php if (!empty($disease->disease_descriptions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Disease Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Source') ?></th>
                <th scope="col"><?= __('Link') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($disease->disease_descriptions as $diseaseDescriptions): ?>
            <tr>
                <td><?= h($diseaseDescriptions->id) ?></td>
                <td><?= h($diseaseDescriptions->disease_id) ?></td>
                <td><?= h($diseaseDescriptions->description) ?></td>
                <td><?= h($diseaseDescriptions->source) ?></td>
                <td><?= h($diseaseDescriptions->link) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DiseaseDescriptions', 'action' => 'view', $diseaseDescriptions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DiseaseDescriptions', 'action' => 'edit', $diseaseDescriptions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DiseaseDescriptions', 'action' => 'delete', $diseaseDescriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diseaseDescriptions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
