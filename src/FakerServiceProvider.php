<?php
namespace FakerMultiLang;

use Illuminate\Support\ServiceProvider;
use Faker\Factory;
use Faker\Generator;

class FakerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Generator::class, function () {
            $faker = Factory::create();
            $faker->addProvider(new FakerIndonesia($faker));
            $faker->addProvider(new FakerJepang($faker));
            $faker->addProvider(new FakerKorea($faker));
            $faker->addProvider(new FakerTokyo($faker));
            return $faker;
        });
    }

    public function boot()
    {
        // Bisa ditambah fitur lain kalau perlu
    }
}
