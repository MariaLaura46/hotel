<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GastoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GastoTable Test Case
 */
class GastoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GastoTable
     */
    protected $Gasto;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Gasto',
        'app.Funcionario',
        'app.Produto',
        'app.Financeiro',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Gasto') ? [] : ['className' => GastoTable::class];
        $this->Gasto = $this->getTableLocator()->get('Gasto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Gasto);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GastoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\GastoTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
