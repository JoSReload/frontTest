<?php namespace functional;


class SessionsControllerTest extends \TestCase {

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $this->call('GET', 'admin/login');
        $this->assertResponseOk();
    }

}
 