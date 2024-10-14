<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuartoFixture
 */
class QuartoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'quarto';
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
                'Tipo_quarto' => 'Lorem ipsum dolor sit amet',
                'Descricao' => 'Lorem ipsum dolor sit amet',
                'Cama' => 1,
                'num_quarto' => 1,
                'valor_diaria' => 1.5,
                'status' => 1,
            ],
        ];
        parent::init();
    }
}
