<?php

namespace Awcodes\Dimmer;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DimmerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('dimmer')
            ->hasTranslations()
            ->hasViews();
    }
}
