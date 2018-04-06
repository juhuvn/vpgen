<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Diseases'), ['controller' => 'Diseases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disease'), ['controller' => 'Diseases', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name En') ?></th>
            <td><?= h($category->name_en) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Vi') ?></th>
            <td><?= h($category->name_vi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($category->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Diseases') ?></h4>
        <?php if (!empty($category->diseases)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name En') ?></th>
                <th scope="col"><?= __('Name Vi') ?></th>
                <th scope="col"><?= __('Description Vi') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($category->diseases as $diseases): ?>
            <tr>
                <td><?= h($diseases->id) ?></td>
                <td><?= h($diseases->name_en) ?></td>
                <td><?= h($diseases->name_vi) ?></td>
                <td><?= h($diseases->description_vi) ?></td>
                <td><?= h($diseases->category_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Diseases', 'action' => 'view', $diseases->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Diseases', 'action' => 'edit', $diseases->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Diseases', 'action' => 'delete', $diseases->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diseases->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
