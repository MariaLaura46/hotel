<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estoque $estoque
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
                ['action' => 'delete', $estoque->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estoque->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Estoque'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="estoque form content">
            <?= $this->Form->create($estoque) ?>
            <fieldset>
                <legend><?= __('Edit Estoque') ?></legend>
                <?php
                    echo $this->Form->control('funcionario_id', ['options' => $funcionario]);
                    echo $this->Form->control('Data_baixa', ['empty' => true]);
                    echo $this->Form->control('produto_id', ['options' => $produto]);
                    echo $this->Form->control('Quantidade');
                    echo $this->Form->control('Obs');
                    echo $this->Form->control('Data_lanc', ['empty' => true]);
                    echo $this->Form->control('Num_fiscal');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
