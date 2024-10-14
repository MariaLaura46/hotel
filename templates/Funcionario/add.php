<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionario $funcionario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Funcionario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="funcionario form content">
            <?= $this->Form->create($funcionario) ?>
            <fieldset>
                <legend><?= __('Add Funcionario') ?></legend>
                <?php
                    echo $this->Form->control('Nome');
                    echo $this->Form->control('Cpf');
                    echo $this->Form->control('Data_Nacimento');
                    echo $this->Form->control('Endereco');
                    echo $this->Form->control('funcao');
                    echo $this->Form->control('Salario');
                    echo $this->Form->control('avaliacao');
                    echo $this->Form->control('Data_cadastro');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
