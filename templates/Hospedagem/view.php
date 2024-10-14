<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hospedagem $hospedagem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Hospedagem'), ['action' => 'edit', $hospedagem->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Hospedagem'), ['action' => 'delete', $hospedagem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hospedagem->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Hospedagem'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Hospedagem'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="hospedagem view content">
            <h3><?= h($hospedagem->tipo_de_pagamento) ?></h3>
            <table>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= $hospedagem->hasValue('funcionario') ? $this->Html->link($hospedagem->funcionario->Nome, ['controller' => 'Funcionario', 'action' => 'view', $hospedagem->funcionario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reserva') ?></th>
                    <td><?= $hospedagem->hasValue('reserva') ? $this->Html->link($hospedagem->reserva->id, ['controller' => 'Reserva', 'action' => 'view', $hospedagem->reserva->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo De Pagamento') ?></th>
                    <td><?= h($hospedagem->tipo_de_pagamento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($hospedagem->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Total') ?></th>
                    <td><?= $this->Number->format($hospedagem->Valor_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Hosped') ?></th>
                    <td><?= h($hospedagem->Data_hosped) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Produto') ?></h4>
                <?php if (!empty($hospedagem->produto)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Produto') ?></th>
                            <th><?= __('Tipo Produto') ?></th>
                            <th><?= __('Descricao') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($hospedagem->produto as $produto) : ?>
                        <tr>
                            <td><?= h($produto->id) ?></td>
                            <td><?= h($produto->produto) ?></td>
                            <td><?= h($produto->Tipo_produto) ?></td>
                            <td><?= h($produto->Descricao) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Produto', 'action' => 'view', $produto->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Produto', 'action' => 'edit', $produto->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Produto', 'action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Servico') ?></h4>
                <?php if (!empty($hospedagem->servico)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Tipo Servico') ?></th>
                            <th><?= __('Valor Servico') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($hospedagem->servico as $servico) : ?>
                        <tr>
                            <td><?= h($servico->id) ?></td>
                            <td><?= h($servico->Tipo_servico) ?></td>
                            <td><?= h($servico->Valor_servico) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Servico', 'action' => 'view', $servico->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Servico', 'action' => 'edit', $servico->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Servico', 'action' => 'delete', $servico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servico->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Ganho') ?></h4>
                <?php if (!empty($hospedagem->ganho)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Hospedagem Id') ?></th>
                            <th><?= __('Valor Ganho') ?></th>
                            <th><?= __('Data Ganho') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($hospedagem->ganho as $ganho) : ?>
                        <tr>
                            <td><?= h($ganho->id) ?></td>
                            <td><?= h($ganho->hospedagem_id) ?></td>
                            <td><?= h($ganho->Valor_ganho) ?></td>
                            <td><?= h($ganho->data_ganho) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Ganho', 'action' => 'view', $ganho->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Ganho', 'action' => 'edit', $ganho->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ganho', 'action' => 'delete', $ganho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ganho->id)]) ?>
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