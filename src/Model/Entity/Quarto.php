<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Quarto Entity
 *
 * @property int $id
 * @property string $Tipo_quarto
 * @property string $Descricao
 * @property int $Cama
 * @property int $num_quarto
 * @property string $valor_diaria
 * @property bool|null $status
 *
 * @property \App\Model\Entity\Reserva[] $reserva
 */
class Quarto extends Entity
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
        'Tipo_quarto' => true,
        'Descricao' => true,
        'Cama' => true,
        'num_quarto' => true,
        'valor_diaria' => true,
        'status' => true,
        'reserva' => true,
    ];
}
