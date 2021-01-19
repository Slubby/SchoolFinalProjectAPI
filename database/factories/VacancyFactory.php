<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Education;
use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Factories\Factory;

class VacancyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vacancy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_id' => Company::all()->random()->user->id,
            'type_id' => Education::all()->random()->id,
            'title' => $this->faker->words(5, true),
            'description' => $this->faker->text($this->faker->numberBetween(10, 100)),
            'about_us' => $this->faker->text($this->faker->numberBetween(10, 50)),
            'requirements' => $this->faker->words($this->faker->numberBetween(1, 5)),
            'total' => $this->faker->numberBetween(1, 4),
        ];
    }
}
