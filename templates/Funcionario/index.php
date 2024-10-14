<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Funcionario> $funcionario
 */
?>
<div class="funcionario index content">
    <?= $this->Html->link(__('New Funcionario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Funcionario') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Nome') ?></th>
                    <th><?= $this->Paginator->sort('Cpf') ?></th>
                    <th><?= $this->Paginator->sort('Data_Nacimento') ?></th>
                    <th><?= $this->Paginator->sort('Endereco') ?></th>
                    <th><?= $this->Paginator->sort('funcao') ?></th>
                    <th><?= $this->Paginator->sort('Salario') ?></th>
                    <th><?= $this->Paginator->sort('avaliacao') ?></th>
                    <th><?= $this->Paginator->sort('Data_cadastro') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($funcionario as $funcionario): ?>
                <tr>
                    <td><?= $this->Number->format($funcionario->id) ?></td>
                    <td><?= h($funcionario->Nome) ?></td>
                    <td><?= h($funcionario->Cpf) ?></td>
                    <td><?= h($funcionario->Data_Nacimento) ?></td>
                    <td><?= h($funcionario->Endereco) ?></td>
                    <td><?= h($funcionario->funcao) ?></td>
                    <td><?= $this->Number->format($funcionario->Salario) ?></td>
                    <td><?= h($funcionario->avaliacao) ?></td>
                    <td><?= h($funcionario->Data_cadastro) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $funcionario->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $funcionario->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $funcionario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->id)]) ?>
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