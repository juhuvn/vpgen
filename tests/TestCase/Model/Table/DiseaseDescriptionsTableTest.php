<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiseaseDescriptionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiseaseDescriptionsTable Test Case
 */
class DiseaseDescriptionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DiseaseDescriptionsTable
     */
    public $DiseaseDescriptions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.disease_descriptions',
        'app.diseases',
        'app.categories',
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
        $config = TableRegistry::exists('DiseaseDescriptions') ? [] : ['className' => DiseaseDescriptionsTable::class];
        $this->DiseaseDescriptions = TableRegistry::get('DiseaseDescriptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DiseaseDescriptions);

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
