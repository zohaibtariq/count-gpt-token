<?php

namespace ZohaibTariq\CountGptToken;

use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class CountGptTokenServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('count-gpt-token');
//            ->hasConfigFile()
//            ->hasViews()
//            ->hasMigration('create_count-gpt-token_table')
//            ->hasCommand(CountGptTokenCommand::class);
    }
}
