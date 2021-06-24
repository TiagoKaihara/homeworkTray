<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Seller $seller
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar Vendedor'),
                ['action' => 'delete', $seller->id],
                ['confirm' => __('Deseja deletar vendedor ID #{0}?', $seller->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sellers form large-9 medium-8 columns content">
    <?= $this->Form->create($seller) ?>
    <fieldset>
        <legend><?= __('Editar Vendedor') ?></legend>
        <?php
            echo $this->Form->control('name',['label' => 'Nome']);
            echo $this->Form->control('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
