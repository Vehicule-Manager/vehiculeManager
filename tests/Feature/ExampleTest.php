<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Test appointments.
     *
     * @return void
     */
    public function test_appointments()
    {
        $response = $this->get('/appointments');

        $response->assertStatus(200);
    }


    /**
     * Test credit_infos.
     *
     * @return void
     */
    public function test_credit_infos()
    {
        $response = $this->get('/credit-infos');

        $response->assertStatus(200);
    }

    /**
     * Test types.
     *
     * @return void
     */
    public function test_type()
    {
        $response = $this->get('/types');

        $response->assertStatus(200);
    }

    /**
 * Test vehicles.
 *
 * @return void
 */
    public function test_vehicles()
    {
        $response = $this->get('/vehicules');

        $response->assertStatus(200);
    }

    /**
 * Test family-situations.
 *
 * @return void
 */
    public function test_family_situations()
    {
        $response = $this->get('/family-situations');

        $response->assertStatus(200);
    }

    /**
 * Test professional-situations.
 *
 * @return void
 */
    public function test_professional_situations()
    {
        $response = $this->get('/professional-situations');

        $response->assertStatus(200);
    }

    /**
 * Test media.
 *
 * @return void
 */
    public function test_media()
    {
        $response = $this->get('/media');

        $response->assertStatus(200);
    }

    /**
 * Test employees.
 *
 * @return void
 */
    public function test_employees()
    {
        $response = $this->get('/employees');

        $response->assertStatus(200);
    }

    /**
 * Test users.
 *
 * @return void
 */
    public function test_users()
    {
        $response = $this->get('/users');

        $response->assertStatus(200);
    }

    /**
 * Test brands.
 *
 * @return void
 */
    public function test_brands()
    {
        $response = $this->get('/brands');

        $response->assertStatus(200);
    }

    /**
 * Test status.
 *
 * @return void
 */
    public function test_status()
    {
        $response = $this->get('/status');

        $response->assertStatus(200);
    }

    /**
 * Test leavingVehicules.
 *
 * @return void
 */
    public function test_leavingVehicules()
    {
        $response = $this->get('/leavingVehicules');

        $response->assertStatus(200);
    }

    /**
 * Test gearBoxes.
 *
 * @return void
 */
    public function test_gearBoxes()
    {
        $response = $this->get('/gearBoxes');

        $response->assertStatus(200);
    }

    /**
 * Test articles.
 *
 * @return void
 */
    public function test_articles()
    {
        $response = $this->get('/articles');

        $response->assertStatus(200);
    }

    /**
 * Test articles by vehicules.
 *
 * @return void
 */
    public function test_articles_vehicules()
    {
        $response = $this->get('/articles/vehicules');

        $response->assertStatus(200);
    }

    /**
     * Test vehicules by clients.
     *
     * @return void
     */
    public function test_vehicules_clients()
    {
        $response = $this->get('/clients/vehicules');

        $response->assertStatus(200);
    }

    /**
     * Test subjects.
     *
     * @return void
     */
    public function test_subjects()
    {
        $response = $this->get('/subjects');

        $response->assertStatus(200);
    }

    /**
     * Test clients.
     *
     * @return void
     */
    public function test_clients()
    {
        $response = $this->get('/clients');

        $response->assertStatus(200);
    }

    /**
     * Test roles.
     *
     * @return void
     */
    public function test_roles()
    {
        $response = $this->get('/roles');

        $response->assertStatus(200);
    }

    /**
     * Test energies.
     *
     * @return void
     */
    public function test_energies()
    {
        $response = $this->get('/energies');

        $response->assertStatus(200);
    }

    /**
     * Test models.
     *
     * @return void
     */
    public function test_models()
    {
        $response = $this->get('/models');

        $response->assertStatus(200);
    }

}
