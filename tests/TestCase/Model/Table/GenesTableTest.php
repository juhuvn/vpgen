<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GenesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GenesTable Test Case
 */
class GenesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GenesTable
     */
    public $Genes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.genes',
        'app.diseases_genes',
        'app.gene_descriptions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Genes') ? [] : ['className' => GenesTable::class];
        $this->Genes = TableRegistry::get('Genes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Genes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
