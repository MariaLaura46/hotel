<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EstoqueFixture
 */
class EstoqueFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'estoque';
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
                'Data_baixa' => '2024-10-14 22:14:35',
                'produto_id' => 1,
                'Quantidade' => 'Lorem ',
                'Obs' => 'Lorem ipsum dolor sit amet',
                'Data_lanc' => '2024-10-14 22:14:35',
                'Num_fiscal' => 1,
            ],
        ];
        parent::init();
    }
}
