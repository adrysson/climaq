<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersAcces $usersAcces
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usersAcces->access_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usersAcces->access_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users Access'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="usersAccess form large-9 medium-8 columns content">
    <?= $this->Form->create($usersAcces) ?>
    <fieldset>
        <legend><?= __('Edit Users Acces') ?></legend>
        <?php
            echo $this->Form->control('access_login');
            echo $this->Form->control('access_password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
