<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Quarto $quarto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Quarto'), ['action' => 'edit', $quarto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Quarto'), ['action' => 'delete', $quarto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quarto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Quarto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Quarto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="quarto view content">
            <h3><?= h($quarto->Tipo_quarto) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tipo Quarto') ?></th>
                    <td><?= h($quarto->Tipo_quarto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($quarto->Descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($quarto->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cama') ?></th>
                    <td><?= $this->Number->format($quarto->Cama) ?></td>
                </tr>
                <tr>
                    <th><?= __('Num Quarto') ?></th>
                    <td><?= $this->Number->format($quarto->num_quarto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Diaria') ?></th>
                    <td><?= $this->Number->format($quarto->valor_diaria) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $quarto->status ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Reserva') ?></h4>
                <?php if (!empty($quarto->reserva)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Quarto Id') ?></th>
                            <th><?= __('Data Reserva') ?></th>
                            <th><?= __('Data Entrada') ?></th>
                            <th><?= __('Data Saida') ?></th>
                            <th><?= __('Pessoas') ?></th>
                            <th><?= __('Criancas') ?></th>
                            <th><?= __('Valor Reserva') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th><?= __('Status Reservas') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($quarto->reserva as $reserva) : ?>
                        <tr>
                            <td><?= h($reserva->id) ?></td>
                            <td><?= h($reserva->cliente_id) ?></td>
                            <td><?= h($reserva->quarto_id) ?></td>
                            <td><?= h($reserva->Data_reserva) ?></td>
                            <td><?= h($reserva->Data_entrada) ?></td>
                            <td><?= h($reserva->Data_saida) ?></td>
                            <td><?= h($reserva->Pessoas) ?></td>
                            <td><?= h($reserva->Criancas) ?></td>
                            <td><?= h($reserva->Valor_reserva) ?></td>
                            <td><?= h($reserva->funcionario_id) ?></td>
                            <td><?= h($reserva->Status_reservas) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Reserva', 'action' => 'view', $reserva->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Reserva', 'action' => 'edit', $reserva->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reserva', 'action' => 'delete', $reserva->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reserva->id)]) ?>
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