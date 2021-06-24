<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sell $sell
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">Ações</li>
        <li><?= $this->Html->link(__('Voltar'), ['controller' => 'Sellers', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sells form large-9 medium-8 columns content">
    <?= $this->Form->create($sell) ?>
    <fieldset>
        <legend>Cadastrar Venda</legend>
        <?php
            echo $this->Form->control('seller_id', ['options' => $sellers,'label' => 'Vendedor']);
            echo $this->Form->control('title',['label' => 'Venda']);
            echo $this->Form->control('price',['label' => 'Preço']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Cadastrar')) ?>
    <?= $this->Form->end() ?>
</div>
