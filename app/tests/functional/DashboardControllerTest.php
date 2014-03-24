<?php namespace functional;


class DashboardControllerTest extends \TestCase {

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testDash()
    {
        $this->action('GET', 'Josreload\ChenkaCrud\Controllers\DashController@dashboard');
        $this->assertResponseOk();
    }

}
