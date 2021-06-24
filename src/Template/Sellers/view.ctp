<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Seller $seller
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Vendedor'), ['action' => 'edit', $seller->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Vendedor'), ['action' => 'delete', $seller->id], ['confirm' => __('Deseja deletar vendedor ID #{0}?', $seller->id)]) ?> </li>
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?> </li>

    </ul>
</nav>
<div class="sellers view large-9 medium-8 columns content">
    <h3><?= h($seller->name) ?></h3>
    <table class="vertical-table">
	    <tr>
            <th scope="row">Id</th>
            <td><?= $this->Number->format($seller->id) ?></td>
		</tr>
        <tr>
            <th scope="row">Nome</th>
            <td><?= h($seller->name) ?></td>
        </tr>
        <tr>
            <th scope="row">Email</th>
            <td><?= h($seller->email) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Vendas') ?></h4>
        <?php if (!empty($seller->sells)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Venda</th>
                <th scope="col">Valor</th>
				<th scope="col">Comissão</th>
                <th scope="col">Data</th>
            </tr>
            <?php foreach ($seller->sells as $sells): ?>
            <tr>
                <td><?= h($sells->id) ?></td>
                <td><?= h($sells->title) ?></td>
                <td><?= number_format($sells->price,2,',') ?></td>
				<td><?= number_format(round($sells->price * ($comm / 100),2),2,',') ?> </td>
                <td><?= h($sells->created) ?></td>
            </tr>
            <?php endforeach; ?>
			<tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Total</th>
				<th scope="col">Total</th>
                <th scope="col"></th>

            </tr>
			<tr>
                <td>R$</td>
                <td></td>
                <td><?= number_format($totalSells,2,',')?></td>
				<td><?= number_format($totalComm,2,',')?></td>
                <td></td>
            </tr>
        </table>
        <?php endif; ?>
    </div>
</div>
