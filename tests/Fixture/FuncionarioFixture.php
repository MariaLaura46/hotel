<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FuncionarioFixture
 */
class FuncionarioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'funcionario';
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
                'Nome' => 'Lorem ipsum dolor sit amet',
                'Cpf' => 'Lorem ips',
                'Data_Nacimento' => '2024-10-14',
                'Endereco' => 'Lorem ipsum dolor sit amet',
                'funcao' => 'Lorem ipsum dolor ',
                'Salario' => 1.5,
                'avaliacao' => 'Lorem ipsum dolor sit amet',
                'Data_cadastro' => '2024-10-14',
            ],
        ];
        parent::init();
    }
}
