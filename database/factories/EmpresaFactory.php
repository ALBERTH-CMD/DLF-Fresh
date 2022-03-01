<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmpresaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empresa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

        'title'=>$this->faker->title(),
        'description'=>$this->faker->paragraph(),
        'somos'=>$this->faker->paragraph(),
        'urlsomos'=>$this->faker->image('public/img/empresa',640, 480,null,false),
        'historia'=>$this->faker->paragraph(),
        'urlhistoria'=>$this->faker->image('public/img/empresa',640, 480,null,false),
        'mision'=>$this->faker->paragraph(),
        'urlmision'=>$this->faker->image('public/img/empresa',640, 480,null,false),
        'vision'=>$this->faker->paragraph(),
        'urlvision'=>$this->faker->image('public/img/empresa',640, 480,null,false),
        'valores'=>$this->faker->paragraph(),
        'urlvalores'=>$this->faker->image('public/img/empresa',640, 480,null,false),

        ];
    }
}
