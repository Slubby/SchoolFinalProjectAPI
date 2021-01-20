<?php

namespace Database\Factories;

use App\Models\Education;
use App\Models\School;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'number' => $this->faker->randomNumber(6, true),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'birthday' => $this->faker->date(),
            'country' => 'NL',
            'region' => 'GR',
            'city' => $this->faker->city,
            'street' => $this->faker->streetName,
            'house_number' => $this->faker->buildingNumber,
            'postal_code' => $this->faker->postcode,
            'school_id' => School::all()->random()->id,
            'education_id' => Education::all()->random()->id,
            'mentor_id' => Teacher::all()->random()->user->id,
            'started_at' => $this->faker->date(),
            'grade' => $this->faker->numberBetween(1, 4),
        ];
    }
}
