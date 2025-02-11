<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gasto $gasto
 * @var string[]|\Cake\Collection\CollectionInterface $funcionario
 * @var string[]|\Cake\Collection\CollectionInterface $produto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gasto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gasto->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Gasto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="gasto form content">
            <?= $this->Form->create($gasto) ?>
            <fieldset>
                <legend><?= __('Edit Gasto') ?></legend>
                <?php
                    echo $this->Form->control('funcionario_id', ['options' => $funcionario]);
                    echo $this->Form->control('produto_id', ['options' => $produto]);
                    echo $this->Form->control('Valor_gastos');
                    echo $this->Form->control('data_gastos');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
