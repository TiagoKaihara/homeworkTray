<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Seller[]|\Cake\Collection\CollectionInterface $sellers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">Ações</li>
        <li><?= $this->Html->link(__('Cadastrar Vendedor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Cadastrar Venda'), ['controller' => 'Sells', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sellers index large-9 medium-8 columns content">
    <h3><?= __('Vendedores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name','Nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email','E-mail') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sellers as $seller): ?>
            <tr>
                <td><?= h($seller->name) ?></td>
                <td><?= h($seller->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Vendas'), ['action' => 'view', $seller->id]) ?>
		    <?= __('|')?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $seller->id]) ?>
		    <?= __('|')?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $seller->id], ['confirm' => __('Deseja deletar vendedor ID #{0}?', $seller->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ') ?>
            <?= $this->Paginator->prev('< ') ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(' >') ?>
            <?= $this->Paginator->last(' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}')]) ?></p>
    </div>
</div>
