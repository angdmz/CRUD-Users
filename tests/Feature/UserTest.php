<?php

namespace Tests\Feature;

use App\Entities\Implementations\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testConstruction()
    {
        $user = new User();
        $user->setId(1);
        $user->setName("angdmz");
        $user->setEmail("angdmz@gmail.com");

        $this->assertEquals(1,$user->getId());
        $this->assertEquals("angdmz",$user->getName());
        $this->assertEquals("angdmz@gmail.com",$user->getEmail());
    }
}
