<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Estoque> $estoque
 */
?>
<div class="estoque index content">
    <?= $this->Html->link(__('New Estoque'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Estoque') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('funcionario_id') ?></th>
                    <th><?= $this->Paginator->sort('Data_baixa') ?></th>
                    <th><?= $this->Paginator->sort('produto_id') ?></th>
                    <th><?= $this->Paginator->sort('Quantidade') ?></th>
                    <th><?= $this->Paginator->sort('Obs') ?></th>
                    <th><?= $this->Paginator->sort('Data_lanc') ?></th>
                    <th><?= $this->Paginator->sort('Num_fiscal') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estoque as $estoque): ?>
                <tr>
                    <td><?= $this->Number->format($estoque->id) ?></td>
                    <td><?= $estoque->hasValue('funcionario') ? $this->Html->link($estoque->funcionario->Nome, ['controller' => 'Funcionario', 'action' => 'view', $estoque->funcionario->id]) : '' ?></td>
                    <td><?= h($estoque->Data_baixa) ?></td>
                    <td><?= $estoque->hasValue('produto') ? $this->Html->link($estoque->produto->produto, ['controller' => 'Produto', 'action' => 'view', $estoque->produto->id]) : '' ?></td>
                    <td><?= h($estoque->Quantidade) ?></td>
                    <td><?= h($estoque->Obs) ?></td>
                    <td><?= h($estoque->Data_lanc) ?></td>
                    <td><?= $estoque->Num_fiscal === null ? '' : $this->Number->format($estoque->Num_fiscal) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $estoque->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estoque->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estoque->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estoque->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>