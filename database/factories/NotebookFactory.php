<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NotebookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fio'=>$this->faker->name,
            'company'=>$this->faker->text,
            'email'=>$this->faker->email,
            'phone'=>$this->faker->phoneNumber,
            'born_date'=>$this->faker->date,
                ];
    }
}
