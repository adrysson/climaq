<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersAcces[]|\Cake\Collection\CollectionInterface $usersAccess
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Users Acces'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersAccess index large-9 medium-8 columns content">
    <h3><?= __('Users Access') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('access_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('access_login') ?></th>
                <th scope="col"><?= $this->Paginator->sort('access_password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usersAccess as $usersAcces): ?>
            <tr>
                <td><?= $this->Number->format($usersAcces->access_id) ?></td>
                <td><?= h($usersAcces->access_login) ?></td>
                <td><?= h($usersAcces->access_password) ?></td>
                <td><?= h($usersAcces->created) ?></td>
                <td><?= h($usersAcces->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usersAcces->access_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersAcces->access_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersAcces->access_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersAcces->access_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
