<?php

namespace Database\Factories;

use App\Models\Property;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->randomElement(['Appartement Moderne','Chambre','Villa de Luxe','Studio Moderne']),
            'description' => $this->faker->paragraphs(10, true),
            'category' => $this->faker->randomElement(['Appartement','Chambre','Villa','Studio','bureau']),
            'price' => $this->faker->randomFloat(2, 25000, 500000),
            'deposit' => $this->faker->randomFloat(2, 50000, 200000),
            'months' => $this->faker->randomElement([3, 6, 12]),
            'photos' => json_encode($this->faker->randomElements(['photo_1.jpg','photo_2.jpg','photo_3.jpg'])),
            'video' => $this->faker->optional(0.5)->url(),
            'address' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'neighborhood' => $this->faker->streetName().'Quartier',
            'lot_size' => $this->faker->numberBetween(50, 1000),
            'rooms' => $this->faker->numberBetween(1, 10),
            'bedrooms' => $this->faker->numberBetween(1, 10),
            'bathrooms' => $this->faker->numberBetween(1, 3),
            'floors' => $this->faker->numberBetween(1, 3),
            'amenities' => json_encode($this->faker->randomElements(
                ['Pool', 'Gym', 'WiFi', 'Parking', 'Air Conditioning', 'Heating', 'Garden', 'Balcony'],
                $this->faker->numberBetween(1, 4)
            )),

        ];
    }
    protected $model = Property::class;
}
