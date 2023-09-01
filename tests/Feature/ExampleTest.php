<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Test appointments.
     *
     * @return void
     */
    public function test_appointments()
    {
        $response = $this->get('/api/appointments/');

        $response->assertStatus(200);

    }


    /**
     * Test credit_infos.
     *
     * @return void
     */
    public function test_credit_infos()
    {
        $response = $this->get('/api/credit-infos/');

        $response->assertStatus(200);
    }

    /**
     * Test types.
     *
     * @return void
     */
    public function test_type()
    {
        $response = $this->get('/api/types/');

        $response->assertStatus(200);
    }

    /**
 * Test vehicles.
 *
 * @return void
 */
    public function test_vehicles()
    {
        $response = $this->get('/api/vehicules/');

        $response->assertStatus(200);
    }

    /**
 * Test family-situations.
 *
 * @return void
 */
    public function test_family_situations()
    {
        $response = $this->get('/api/family-situations/');

        $response->assertStatus(200);
    }

    /**
 * Test professional-situations.
 *
 * @return void
 */
    public function test_professional_situations()
    {
        $response = $this->get('/api/professional-situations');

        $response->assertStatus(200);
    }

    /**
 * Test media.
 *
 * @return void
 */
    public function test_media()
    {
        $response = $this->get('/api/media');

        $response->assertStatus(200);
    }

    /**
 * Test employees.
 *
 * @return void
 */
    public function test_employees()
    {
        $response = $this->get('/api/employees');

        $response->assertStatus(200);
    }

    /**
 * Test users.
 *
 * @return void
 */
    public function test_users()
    {
        $response = $this->get('/api/users');

        $response->assertStatus(200);
    }

    /**
 * Test brands.
 *
 * @return void
 */
    public function test_brands()
    {
        $response = $this->get('/api/brands');

        $response->assertStatus(200);
    }

    /**
 * Test status.
 *
 * @return void
 */
    public function test_status()
    {
        $response = $this->get('/api/status');

        $response->assertStatus(200);
    }

    /**
 * Test leavingVehicules.
 *
 * @return void
 */
    public function test_leavingVehicules()
    {
        $response = $this->get('/api/leavingVehicules');

        $response->assertStatus(200);
    }

    /**
 * Test gearBoxes.
 *
 * @return void
 */
    public function test_gearBoxes()
    {
        $response = $this->get('/api/gearBoxes');

        $response->assertStatus(200);
    }

    /**
 * Test articles.
 *
 * @return void
 */
    public function test_articles()
    {
        $response = $this->get('/api/articles');

        $response->assertStatus(200);
    }

    /**
 * Test articles by vehicules.
 *
 * @return void
 */
    public function test_articles_vehicules()
    {
        $response = $this->get('/api/articles/vehicules');


        $response->assertStatus(200);
    }

    /**
     * Test vehicules by clients.
     *
     * @return void
     */
    public function test_vehicules_clients()
    {
        $response = $this->get('/api/clients/vehicules');

        $response->assertStatus(200);
    }

    /**
     * Test subjects.
     *
     * @return void
     */
    public function test_subjects()
    {
        $response = $this->get('/api/subjects');

        $response->assertStatus(200);
    }

    /**
     * Test clients.
     *
     * @return void
     */
    public function test_clients()
    {
        $response = $this->get('/api/clients');

        $response->assertStatus(200);
    }

    /**
     * Test roles.
     *
     * @return void
     */
    public function test_roles()
    {
        $response = $this->get('/api/roles');

        $response->assertStatus(200);
    }

    /**
     * Test energies.
     *
     * @return void
     */
    public function test_energies()
    {
        $response = $this->get('/api/energies');

        $response->assertStatus(200);
    }

    /**
     * Test models.
     *
     * @return void
     */
    public function test_models()
    {
        $response = $this->get('/api/models');

        $response->assertStatus(200);
    }

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

}
