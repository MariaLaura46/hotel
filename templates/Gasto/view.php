<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gasto $gasto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Gasto'), ['action' => 'edit', $gasto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Gasto'), ['action' => 'delete', $gasto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gasto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Gasto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Gasto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="gasto view content">
            <h3><?= h($gasto->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= $gasto->hasValue('funcionario') ? $this->Html->link($gasto->funcionario->Nome, ['controller' => 'Funcionario', 'action' => 'view', $gasto->funcionario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Produto') ?></th>
                    <td><?= $gasto->hasValue('produto') ? $this->Html->link($gasto->produto->produto, ['controller' => 'Produto', 'action' => 'view', $gasto->produto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($gasto->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Gastos') ?></th>
                    <td><?= $this->Number->format($gasto->Valor_gastos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Gastos') ?></th>
                    <td><?= h($gasto->data_gastos) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Financeiro') ?></h4>
                <?php if (!empty($gasto->financeiro)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th><?= __('Gasto Id') ?></th>
                            <th><?= __('Ganho Id') ?></th>
                            <th><?= __('Mes Fechamento') ?></th>
                            <th><?= __('Data Finc') ?></th>
                            <th><?= __('Valor Liquido') ?></th>
                            <th><?= __('Ano') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($gasto->financeiro as $financeiro) : ?>
                        <tr>
                            <td><?= h($financeiro->id) ?></td>
                            <td><?= h($financeiro->funcionario_id) ?></td>
                            <td><?= h($financeiro->gasto_id) ?></td>
                            <td><?= h($financeiro->ganho_id) ?></td>
                            <td><?= h($financeiro->Mes_fechamento) ?></td>
                            <td><?= h($financeiro->data_finc) ?></td>
                            <td><?= h($financeiro->Valor_liquido) ?></td>
                            <td><?= h($financeiro->ano) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Financeiro', 'action' => 'view', $financeiro->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Financeiro', 'action' => 'edit', $financeiro->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Financeiro', 'action' => 'delete', $financeiro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $financeiro->id)]) ?>
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