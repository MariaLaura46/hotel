<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id
 * @property string $produto
 * @property string $Tipo_produto
 * @property string $Descricao
 *
 * @property \App\Model\Entity\Estoque[] $estoque
 * @property \App\Model\Entity\Gasto[] $gasto
 * @property \App\Model\Entity\Hospedagem[] $hospedagem
 */
class Produto extends Entity
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
        'produto' => true,
        'Tipo_produto' => true,
        'Descricao' => true,
        'estoque' => true,
        'gasto' => true,
        'hospedagem' => true,
    ];
}
