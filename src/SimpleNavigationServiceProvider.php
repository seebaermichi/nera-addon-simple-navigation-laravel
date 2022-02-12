<?php

namespace nera\SimpleNavigation;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use nera\SimpleNavigation\Commands\SimpleNavigationCommand;

class SimpleNavigationServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('simple-navigation')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_simple-navigation_table')
            ->hasCommand(SimpleNavigationCommand::class);
    }
}
