<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->user_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users Access'), ['controller' => 'UsersAccess', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Acces'), ['controller' => 'UsersAccess', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->user_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User Name') ?></th>
            <td><?= h($user->user_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Email') ?></th>
            <td><?= h($user->user_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Cep') ?></th>
            <td><?= h($user->user_cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User City') ?></th>
            <td><?= h($user->user_city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User State') ?></th>
            <td><?= h($user->user_state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Users Acces') ?></th>
            <td><?= $user->has('users_acces') ? $this->Html->link($user->users_acces->access_id, ['controller' => 'UsersAccess', 'action' => 'view', $user->users_acces->access_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($user->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
</div>
