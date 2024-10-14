<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reserva Entity
 *
 * @property int $id
 * @property int $cliente_id
 * @property int $quarto_id
 * @property \Cake\I18n\DateTime $Data_reserva
 * @property \Cake\I18n\DateTime $Data_entrada
 * @property \Cake\I18n\DateTime $Data_saida
 * @property int $Pessoas
 * @property int|null $Criancas
 * @property string $Valor_reserva
 * @property int|null $funcionario_id
 * @property bool $Status_reservas
 *
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\Quarto $quarto
 * @property \App\Model\Entity\Funcionario $funcionario
 * @property \App\Model\Entity\Hospedagem[] $hospedagem
 */
class Reserva extends Entity
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
        'cliente_id' => true,
        'quarto_id' => true,
        'Data_reserva' => true,
        'Data_entrada' => true,
        'Data_saida' => true,
        'Pessoas' => true,
        'Criancas' => true,
        'Valor_reserva' => true,
        'funcionario_id' => true,
        'Status_reservas' => true,
        'cliente' => true,
        'quarto' => true,
        'funcionario' => true,
        'hospedagem' => true,
    ];
}
