<?php

namespace Tests\Feature;

use App\Models\Company;
use App\Models\Education;
use App\Models\School;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Vacancy;
use App\Traits\JWTLogin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdvertisementTest extends TestCase
{
    use RefreshDatabase, JWTLogin;

    protected function setUp(): void
    {
        parent::setUp();

        Education::factory()->count(2)->create();
        Company::factory()->has(User::factory(), 'user')->count(5)->create();
        Vacancy::factory()->count(10)->create();
    }

    public function testGetAllAdvertisementsTest()
    {
        $response = $this->getjson('/api/advertisement');

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'data' => [
                [
                    'id',
                    'title',
                    'description',
                    'applied',
                    'type' => [
                        'id',
                        'name',
                    ],
                    'company' => [
                        'mobile',
                        'email',
                        'email_verified_at',
                        'profile' => [
                            'id',
                            'number',
                            'name',
                            'country',
                            'region',
                            'city',
                            'street',
                            'house_number',
                            'postal_code',
                        ],
                    ],
                ],
            ],
        ]);
    }

    public function testGetAdvertisementTest()
    {
        $advertisement = Vacancy::first();

        $response = $this->getjson("/api/advertisement/{$advertisement->id}/show");

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'data' => [
                'id',
                'title',
                'description',
                'about_us',
                'applied',
                'type' => [
                    'id',
                    'name',
                ],
                'company' => [
                    'mobile',
                    'email',
                    'email_verified_at',
                    'profile' => [
                        'id',
                        'number',
                        'name',
                        'country',
                        'region',
                        'city',
                        'street',
                        'house_number',
                        'postal_code',
                    ],
                ],
            ],
        ]);
    }

    public function testGetAllAdvertisementsAuthTest()
    {
        School::Factory()->create();
        $advertisement = Vacancy::first();
        User::factory()->for(Teacher::factory(), 'profile')->create();
        $user = User::factory()->for(Student::factory(), 'profile')->create();
        $advertisement->applied()->attach($user->id);

        $response = $this->authorizationUser($user)->getjson('/api/advertisement');

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'data' => [
                [
                    'id',
                    'title',
                    'description',
                    'applied',
                    'status',
                    'applied_at',
                    'job_application_id',
                    'type' => [
                        'id',
                        'name',
                    ],
                    'company' => [
                        'mobile',
                        'email',
                        'email_verified_at',
                        'profile' => [
                            'id',
                            'number',
                            'name',
                            'country',
                            'region',
                            'city',
                            'street',
                            'house_number',
                            'postal_code',
                        ],
                    ],
                ],
            ],
        ]);
    }

    public function testGetAdvertisementAuthTest()
    {
        School::Factory()->create();
        $advertisement = Vacancy::first();
        User::factory()->for(Teacher::factory(), 'profile')->create();
        $user = User::factory()->for(Student::factory(), 'profile')->create();
        $advertisement->applied()->attach($user->id);

        $response = $this->authorizationUser($user)->getjson("/api/advertisement/{$advertisement->id}/show");

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'data' => [
                'id',
                'title',
                'description',
                'about_us',
                'applied',
                'status',
                'applied_at',
                'job_application_id',
                'type' => [
                    'id',
                    'name',
                ],
                'company' => [
                    'mobile',
                    'email',
                    'email_verified_at',
                    'profile' => [
                        'id',
                        'number',
                        'name',
                        'country',
                        'region',
                        'city',
                        'street',
                        'house_number',
                        'postal_code',
                    ],
                ],
            ],
        ]);
    }
}
