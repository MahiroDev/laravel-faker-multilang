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
            // Add new providers
            $faker->addProvider(new FakerAmerika($faker));
            $faker->addProvider(new FakerChina($faker));
            $faker->addProvider(new FakerIndia($faker));
            $faker->addProvider(new FakerPerancis($faker));
            $faker->addProvider(new FakerJerman($faker));
            $faker->addProvider(new FakerItalia($faker));
            $faker->addProvider(new FakerSpanyol($faker));
            $faker->addProvider(new FakerRusia($faker));
            $faker->addProvider(new FakerBrazil($faker));
            $faker->addProvider(new FakerMesir($faker));
            return $faker;
        });
    }

    public function boot()
    {
        // Bisa ditambah fitur lain kalau perlu
    }
}
