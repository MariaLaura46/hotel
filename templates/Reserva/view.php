<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reserva $reserva
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Reserva'), ['action' => 'edit', $reserva->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Reserva'), ['action' => 'delete', $reserva->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reserva->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Reserva'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Reserva'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="reserva view content">
            <h3><?= h($reserva->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cliente') ?></th>
                    <td><?= $reserva->hasValue('cliente') ? $this->Html->link($reserva->cliente->endereco, ['controller' => 'Cliente', 'action' => 'view', $reserva->cliente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Quarto') ?></th>
                    <td><?= $reserva->hasValue('quarto') ? $this->Html->link($reserva->quarto->Tipo_quarto, ['controller' => 'Quarto', 'action' => 'view', $reserva->quarto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= $reserva->hasValue('funcionario') ? $this->Html->link($reserva->funcionario->Nome, ['controller' => 'Funcionario', 'action' => 'view', $reserva->funcionario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($reserva->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pessoas') ?></th>
                    <td><?= $this->Number->format($reserva->Pessoas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Criancas') ?></th>
                    <td><?= $reserva->Criancas === null ? '' : $this->Number->format($reserva->Criancas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Reserva') ?></th>
                    <td><?= $this->Number->format($reserva->Valor_reserva) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Reserva') ?></th>
                    <td><?= h($reserva->Data_reserva) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Entrada') ?></th>
                    <td><?= h($reserva->Data_entrada) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Saida') ?></th>
                    <td><?= h($reserva->Data_saida) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Reservas') ?></th>
                    <td><?= $reserva->Status_reservas ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Hospedagem') ?></h4>
                <?php if (!empty($reserva->hospedagem)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th><?= __('Reserva Id') ?></th>
                            <th><?= __('Data Hosped') ?></th>
                            <th><?= __('Valor Total') ?></th>
                            <th><?= __('Tipo De Pagamento') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($reserva->hospedagem as $hospedagem) : ?>
                        <tr>
                            <td><?= h($hospedagem->id) ?></td>
                            <td><?= h($hospedagem->funcionario_id) ?></td>
                            <td><?= h($hospedagem->reserva_id) ?></td>
                            <td><?= h($hospedagem->Data_hosped) ?></td>
                            <td><?= h($hospedagem->Valor_total) ?></td>
                            <td><?= h($hospedagem->tipo_de_pagamento) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Hospedagem', 'action' => 'view', $hospedagem->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Hospedagem', 'action' => 'edit', $hospedagem->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Hospedagem', 'action' => 'delete', $hospedagem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hospedagem->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>