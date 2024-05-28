<?php

namespace partridge-rocks\Laracards;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use partridge-rocks\Laracards\Commands\LaracardsCommand;

class LaracardsServiceProvider extends PackageServiceProvider
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
