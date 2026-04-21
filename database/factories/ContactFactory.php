<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;
use App\Models\Company;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name'  => $this->faker->lastName,
            'phone'      => $this->faker->phoneNumber,
            'email'      => $this->faker->unique()->safeEmail,
            'address'    => $this->faker->address,
            'company_id' => Company::factory(),
        ];
    }
}