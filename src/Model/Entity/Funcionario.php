<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Funcionario Entity
 *
 * @property int $id
 * @property string $Nome
 * @property string $Cpf
 * @property \Cake\I18n\Date $Data_Nacimento
 * @property string $Endereco
 * @property string $funcao
 * @property string $Salario
 * @property string $avaliacao
 * @property \Cake\I18n\Date $Data_cadastro
 *
 * @property \App\Model\Entity\Estoque[] $estoque
 * @property \App\Model\Entity\Financeiro[] $financeiro
 * @property \App\Model\Entity\Gasto[] $gasto
 * @property \App\Model\Entity\Hospedagem[] $hospedagem
 * @property \App\Model\Entity\Reserva[] $reserva
 * @property \App\Model\Entity\Telefone[] $telefone
 */
class Funcionario extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'Nome' => true,
        'Cpf' => true,
        'Data_Nacimento' => true,
        'Endereco' => true,
        'funcao' => true,
        'Salario' => true,
        'avaliacao' => true,
        'Data_cadastro' => true,
        'estoque' => true,
        'financeiro' => true,
        'gasto' => true,
        'hospedagem' => true,
        'reserva' => true,
        'telefone' => true,
    ];
}
