<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersAccessTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersAccessTable Test Case
 */
class UsersAccessTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersAccessTable
     */
    public $UsersAccess;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users_access'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UsersAccess') ? [] : ['className' => UsersAccessTable::class];
        $this->UsersAccess = TableRegistry::get('UsersAccess', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersAccess);

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
