<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReservaFixture
 */
class ReservaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'reserva';
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
                'cliente_id' => 1,
                'quarto_id' => 1,
                'Data_reserva' => '2024-10-14 22:16:12',
                'Data_entrada' => '2024-10-14 22:16:12',
                'Data_saida' => '2024-10-14 22:16:12',
                'Pessoas' => 1,
                'Criancas' => 1,
                'Valor_reserva' => 1.5,
                'funcionario_id' => 1,
                'Status_reservas' => 1,
            ],
        ];
        parent::init();
    }
}
