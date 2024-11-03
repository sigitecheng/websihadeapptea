<?php

namespace Database\Factories;

use App\Models\Contactus;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contactus>
 */
class ContactusFactory extends Factory
{
    protected $model = Contactus::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Menggunakan Faker dengan locale Indonesia
        $faker = FakerFactory::create('id_ID');

        return [
            'name' => $faker->name, // Nama
            'email' => $faker->unique()->safeEmail, // Email
            'subjek' => $faker->sentence(3), // Subjek
            'pertanyaan' => $faker->text(200), // Pertanyaan
            'telepon' => $faker->phoneNumber, // Telepon
        ];
    }
}
