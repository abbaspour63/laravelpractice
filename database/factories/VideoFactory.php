<?php

namespace Database\Factories;
use App\Models\video;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=video::class;

    public function definition()
    {
        $persianFaker=\Faker\Factory::create('fa_IR');
        return [
            'name'=>$persianFaker->name(),
            'url'=>$this->faker->imageUrl(446,234,'animals',true),
            'length'=>$this->faker->randomNumber(3),
            'slug'=>$this->faker->slug(),
            'description'=>$persianFaker->realText(),
            'thumbnail'=>'https://loremflickr.com/320/240?random=' .rand(1,100),
        ];
    }
}
