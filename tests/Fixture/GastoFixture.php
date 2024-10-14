<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GastoFixture
 */
class GastoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'gasto';
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
                'produto_id' => 1,
                'Valor_gastos' => 1.5,
                'data_gastos' => '2024-10-14',
            ],
        ];
        parent::init();
    }
}
