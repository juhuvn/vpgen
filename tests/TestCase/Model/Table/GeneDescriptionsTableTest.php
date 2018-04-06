<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeneDescriptionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeneDescriptionsTable Test Case
 */
class GeneDescriptionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GeneDescriptionsTable
     */
    public $GeneDescriptions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.gene_descriptions',
        'app.genes',
        'app.diseases_genes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GeneDescriptions') ? [] : ['className' => GeneDescriptionsTable::class];
        $this->GeneDescriptions = TableRegistry::get('GeneDescriptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeneDescriptions);

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
