<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HospedagemFixture
 */
class HospedagemFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'hospedagem';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'funcionario_id' => 1,
                'reserva_id' => 1,
                'Data_hosped' => '2024-10-14 22:23:21',
                'Valor_total' => 1.5,
                'tipo_de_pagamento' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
