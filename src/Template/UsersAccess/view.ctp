<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersAcces $usersAcces
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Users Acces'), ['action' => 'edit', $usersAcces->access_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Users Acces'), ['action' => 'delete', $usersAcces->access_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersAcces->access_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users Access'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Acces'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usersAccess view large-9 medium-8 columns content">
    <h3><?= h($usersAcces->access_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Access Login') ?></th>
            <td><?= h($usersAcces->access_login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Access Password') ?></th>
            <td><?= h($usersAcces->access_password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Access Id') ?></th>
            <td><?= $this->Number->format($usersAcces->access_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($usersAcces->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($usersAcces->modified) ?></td>
        </tr>
    </table>
</div>
