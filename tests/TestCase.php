<?php

namespace PartridgeRocks\LaraCards\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use PartridgeRocks\LaraCards\LaraCardsServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'PartridgeRocks\\LaraCards\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaracardsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app): void
    {
        config()->set('database.default', 'testing');

        // Include and run the 'create_suits_table' migration
        $suitsMigration = include __DIR__.'/../database/migrations/000_create_suits_table.php';
        $suitsMigration->up();

        // Include and run the 'create_cards_table' migration
        $cardsMigration = include __DIR__.'/../database/migrations/create_cards_table.php';
        $cardsMigration->up();
    }
}
