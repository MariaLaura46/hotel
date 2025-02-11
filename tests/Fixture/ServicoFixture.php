<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ServicoFixture
 */
class ServicoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'servico';
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
                'Tipo_servico' => 'Lorem ipsum',
                'Valor_servico' => 1.5,
            ],
        ];
        parent::init();
    }
}
