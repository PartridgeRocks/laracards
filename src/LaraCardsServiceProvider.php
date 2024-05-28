<?php

namespace PartridgeRocks\LaraCards;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use PartridgeRocks\Laracards\Commands\LaraCardsCommand;

class LaraCardsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laracards')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laracards_table')
            ->hasCommand(LaracardsCommand::class);
    }
}
