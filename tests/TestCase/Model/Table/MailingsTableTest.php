<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MailingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MailingsTable Test Case
 */
class MailingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MailingsTable
     */
    public $Mailings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mailings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Mailings') ? [] : ['className' => 'App\Model\Table\MailingsTable'];
        $this->Mailings = TableRegistry::get('Mailings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mailings);

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
