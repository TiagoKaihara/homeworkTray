<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sell[]|\Cake\Collection\CollectionInterface $sells
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Cadastrar venda'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Cadastrar vendedor'), ['controller' => 'Sellers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar vendedores'), ['controller' => 'Sellers', 'action' => 'index']) ?></li>

    </ul>
</nav>
<div class="sells index large-9 medium-8 columns content">
    <h3><?= __('Vendas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('seller_id','Vendedor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title','Venda') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price','Valor') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sells as $sell): ?>
            <tr>
                <td><?= $sell->has('seller') ? $this->Html->link($sell->seller->name, ['controller' => 'Sellers', 'action' => 'view', $sell->seller->id]) : '' ?></td>
                <td><?= h($sell->title) ?></td>
                <td><?= $this->Number->format($sell->price) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $sell->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $sell->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $sell->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sell->id)]) ?>
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
