<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Reserva> $reserva
 */
?>
<div class="reserva index content">
    <?= $this->Html->link(__('New Reserva'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Reserva') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('cliente_id') ?></th>
                    <th><?= $this->Paginator->sort('quarto_id') ?></th>
                    <th><?= $this->Paginator->sort('Data_reserva') ?></th>
                    <th><?= $this->Paginator->sort('Data_entrada') ?></th>
                    <th><?= $this->Paginator->sort('Data_saida') ?></th>
                    <th><?= $this->Paginator->sort('Pessoas') ?></th>
                    <th><?= $this->Paginator->sort('Criancas') ?></th>
                    <th><?= $this->Paginator->sort('Valor_reserva') ?></th>
                    <th><?= $this->Paginator->sort('funcionario_id') ?></th>
                    <th><?= $this->Paginator->sort('Status_reservas') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reserva as $reserva): ?>
                <tr>
                    <td><?= $this->Number->format($reserva->id) ?></td>
                    <td><?= $reserva->hasValue('cliente') ? $this->Html->link($reserva->cliente->endereco, ['controller' => 'Cliente', 'action' => 'view', $reserva->cliente->id]) : '' ?></td>
                    <td><?= $reserva->hasValue('quarto') ? $this->Html->link($reserva->quarto->Tipo_quarto, ['controller' => 'Quarto', 'action' => 'view', $reserva->quarto->id]) : '' ?></td>
                    <td><?= h($reserva->Data_reserva) ?></td>
                    <td><?= h($reserva->Data_entrada) ?></td>
                    <td><?= h($reserva->Data_saida) ?></td>
                    <td><?= $this->Number->format($reserva->Pessoas) ?></td>
                    <td><?= $reserva->Criancas === null ? '' : $this->Number->format($reserva->Criancas) ?></td>
                    <td><?= $this->Number->format($reserva->Valor_reserva) ?></td>
                    <td><?= $reserva->hasValue('funcionario') ? $this->Html->link($reserva->funcionario->Nome, ['controller' => 'Funcionario', 'action' => 'view', $reserva->funcionario->id]) : '' ?></td>
                    <td><?= h($reserva->Status_reservas) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $reserva->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reserva->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reserva->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reserva->id)]) ?>
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