<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estoque Entity
 *
 * @property int $id
 * @property int $funcionario_id
 * @property \Cake\I18n\DateTime|null $Data_baixa
 * @property int $produto_id
 * @property string $Quantidade
 * @property string|null $Obs
 * @property \Cake\I18n\DateTime|null $Data_lanc
 * @property int|null $Num_fiscal
 *
 * @property \App\Model\Entity\Funcionario $funcionario
 * @property \App\Model\Entity\Produto $produto
 */
class Estoque extends Entity
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
        'funcionario_id' => true,
        'Data_baixa' => true,
        'produto_id' => true,
        'Quantidade' => true,
        'Obs' => true,
        'Data_lanc' => true,
        'Num_fiscal' => true,
        'funcionario' => true,
        'produto' => true,
    ];
}
