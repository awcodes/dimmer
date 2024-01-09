<?php

namespace Awcodes\Dimmer;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Awcodes\Dimmer\Commands\DimmerCommand;

class DimmerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('dimmer')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_dimmer_table')
            ->hasCommand(DimmerCommand::class);
    }
}
