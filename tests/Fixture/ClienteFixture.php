<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClienteFixture
 */
class ClienteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'cliente';
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
                'endereco' => 'Lorem ipsum dolor sit amet',
                'nome' => 'Lorem ipsum dolor sit amet',
                'cidade' => 'Lorem ipsum dolor sit amet',
                'estado' => 1,
                'pais' => 'Lorem ipsum dolor sit amet',
                'Redes_social' => 'Lorem ipsum dolor sit amet',
                'Motivo_visita' => 'Lorem ipsum dolor ',
                'profissao' => 'Lorem ipsum dolor sit amet',
                'Cpf' => 'Lorem ips',
                'Email' => 'Lorem ipsum dolor sit amet',
                'Doc_pessoal' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
