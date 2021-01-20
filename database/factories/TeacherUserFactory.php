<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\School;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'school_id' => School::all()->random()->id,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'short_name' => 'XD',
            'verified' => true,
        ];
    }
}
