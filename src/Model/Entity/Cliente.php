<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string $endereco
 * @property string $nome
 * @property string $cidade
 * @property int $estado
 * @property string $pais
 * @property string $Redes_social
 * @property string $Motivo_visita
 * @property string $profissao
 * @property string $Cpf
 * @property string $Email
 * @property string $Doc_pessoal
 *
 * @property \App\Model\Entity\Reserva[] $reserva
 * @property \App\Model\Entity\Telefone[] $telefone
 */
class Cliente extends Entity
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
        'endereco' => true,
        'nome' => true,
        'cidade' => true,
        'estado' => true,
        'pais' => true,
        'Redes_social' => true,
        'Motivo_visita' => true,
        'profissao' => true,
        'Cpf' => true,
        'Email' => true,
        'Doc_pessoal' => true,
        'reserva' => true,
        'telefone' => true,
    ];
}
