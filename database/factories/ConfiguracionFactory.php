<?php

namespace Database\Factories;

use App\Models\Configuracion;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ConfiguracionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Configuracion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'seo_title' => $this->faker->word(),
        'seo_description'  => $this->faker->paragraph(),
        'seo_urlfoto'=>$this->faker->imageUrl($width = 640, $height = 480), // 'http://lorempixel.com/640/480/'

        'colorPrimario' => $this->faker->hexcolor (),
        'colorSecundario'=>$this->faker->hexcolor (),
        'urlfavicon'=>$this->faker->imageUrl($width = 640, $height = 480), // 'http://lorempixel.com/640/480/'
        'urllogo'=>$this->faker->imageUrl($width = 640, $height = 480), // 'http://lorempixel.com/640/480/'
        'slogan'=>$this->faker->paragraph(),
        'frase_1'=>$this->faker->word(),
        'frase_2'=>$this->faker->word(),
        'frase_3'=>$this->faker->word(),

        'razonsocial'=>$this->faker->paragraph(),
        'direccion'=>$this->faker->address(),
        'celular'=>$this->faker->PhoneNumber(10),
        'email'=>$this->faker->email(),
        'facebook'=>$this->faker->url(),
        'youtube'=>$this->faker->url(),
        ];
    }
}
