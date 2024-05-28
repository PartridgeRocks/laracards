<?php

namespace PartridgeRocks\LaraCards;

use PartridgeRocks\LaraCards\Commands\LaraCardsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->name('laraCards')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_lara_cards_table')
            ->hasCommand(LaraCardsCommand::class);
    }
}
