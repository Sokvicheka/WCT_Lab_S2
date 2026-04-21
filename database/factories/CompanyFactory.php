<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Company;

class CompanyFactory extends Factory
{
    protected $model = Company::class;

    public function definition(): array
    {
        return [
            'name'    => $this->faker->company,
            'address' => $this->faker->address,
            'website' => $this->faker->url,
            'email'   => $this->faker->unique()->safeEmail,
        ];
    }
}