<?php

namespace Database\Factories;

use Facade\Ignition\Support\FakeComposer;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(mt_rand(2,4)),
            'slug' =>$this->faker->slug(),
            'excerpt' =>$this->faker->sentence(mt_rand(20,25)),
            // 'body' =>'<p>' . implode('<p></p>',$this->faker->paragraphs(mt_rand(10,25))).'</p>',
            'body' => collect($this->faker->paragraphs(mt_rand(5,20)))
                ->map(fn($p)=>"<dd>$p</dd>")
                ->implode(''),
            'user_id' =>mt_rand(1,3),
            'category_id' => mt_rand(1,2)
        ];
    }
}
