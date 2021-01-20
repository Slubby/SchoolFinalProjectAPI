<?php

namespace Tests\Feature;

use App\Models\Admin;
use App\Models\School;
use App\Models\User;
use App\Traits\JWTLogin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SchoolTest extends TestCase
{
    use RefreshDatabase, JWTLogin;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetAllSchoolsTest()
    {
        School::Factory()->count(2)->create();

        $response = $this->getJSON('/api/school');

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'data' => [
                [
                    'id',
                    'name',
                ]
            ]
        ]);
    }

    public function testCreateSchoolTest()
    {
        $user = User::factory()->for(Admin::factory(), 'profile')->create();

        $response = $this->authorizationUser($user)->postJson('/api/a/school/create', [
            'name' => 'Noorderpoort'
        ]);

        $response->assertStatus(201);

        $response->assertJsonStructure([
            'data' => [
                'id',
                'name',
            ],
            'message',
        ]);
    }

    public function testUpdateSchoolTest()
    {
        $school = School::Factory()->create();
        $user = User::factory()->for(Admin::factory(), 'profile')->create();

        $response = $this->authorizationUser($user)->patchJson("/api/a/school/{$school->id}/update", [
            'name' => 'Noorderpoort'
        ]);

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'data' => [
                'id',
                'name',
            ],
            'message',
        ]);
    }

    public function testDeleteSchoolTest()
    {
        $school = School::Factory()->create();
        $user = User::factory()->for(Admin::factory(), 'profile')->create();

        $response = $this->authorizationUser($user)->deleteJson("/api/a/school/{$school->id}/delete");

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'message',
        ]);
    }
}
