<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sell $sell
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sell'), ['action' => 'edit', $sell->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sell'), ['action' => 'delete', $sell->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sell->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sells'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sell'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sellers'), ['controller' => 'Sellers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seller'), ['controller' => 'Sellers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sells view large-9 medium-8 columns content">
    <h3><?= h($sell->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Seller') ?></th>
            <td><?= $sell->has('seller') ? $this->Html->link($sell->seller->name, ['controller' => 'Sellers', 'action' => 'view', $sell->seller->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($sell->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sell->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($sell->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sell->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sell->modified) ?></td>
        </tr>
    </table>
</div>
