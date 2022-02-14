<?php

namespace nera\SimpleNavigation\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use nera\SimpleNavigation\SimpleNavigationServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'nera\\SimpleNavigation\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            SimpleNavigationServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_simple-navigation_table.php.stub';
        $migration->up();
        */
    }
}
