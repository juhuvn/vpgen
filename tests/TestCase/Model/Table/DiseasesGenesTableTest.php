<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiseasesGenesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiseasesGenesTable Test Case
 */
class DiseasesGenesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DiseasesGenesTable
     */
    public $DiseasesGenes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.diseases_genes',
        'app.diseases',
        'app.categories',
        'app.disease_descriptions',
        'app.genes',
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
        $config = TableRegistry::exists('DiseasesGenes') ? [] : ['className' => DiseasesGenesTable::class];
        $this->DiseasesGenes = TableRegistry::get('DiseasesGenes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DiseasesGenes);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
