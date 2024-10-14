<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estoque $estoque
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Estoque'), ['action' => 'edit', $estoque->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Estoque'), ['action' => 'delete', $estoque->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estoque->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Estoque'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Estoque'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="estoque view content">
            <h3><?= h($estoque->Quantidade) ?></h3>
            <table>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= $estoque->hasValue('funcionario') ? $this->Html->link($estoque->funcionario->Nome, ['controller' => 'Funcionario', 'action' => 'view', $estoque->funcionario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Produto') ?></th>
                    <td><?= $estoque->hasValue('produto') ? $this->Html->link($estoque->produto->produto, ['controller' => 'Produto', 'action' => 'view', $estoque->produto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantidade') ?></th>
                    <td><?= h($estoque->Quantidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Obs') ?></th>
                    <td><?= h($estoque->Obs) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($estoque->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Num Fiscal') ?></th>
                    <td><?= $estoque->Num_fiscal === null ? '' : $this->Number->format($estoque->Num_fiscal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Baixa') ?></th>
                    <td><?= h($estoque->Data_baixa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Lanc') ?></th>
                    <td><?= h($estoque->Data_lanc) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>