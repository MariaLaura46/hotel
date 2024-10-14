<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HospedagemProduto Entity
 *
 * @property int $produto_id
 * @property int $hospedagem_id
 *
 * @property \App\Model\Entity\Produto $produto
 * @property \App\Model\Entity\Hospedagem $hospedagem
 */
class HospedagemProduto extends Entity
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
        'hospedagem' => true,
    ];
}
