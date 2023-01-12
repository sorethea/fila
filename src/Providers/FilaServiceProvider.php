<?php

namespace Sorethea\Fila\Providers;

use Illuminate\Support\ServiceProvider;
use Sorethea\Fila\Commands\FilaResourceMakeCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilaServiceProvider extends PackageServiceProvider
{
    public function register()
    {
        $this->commands([
            FilaResourceMakeCommand::class,
        ]);
    }

    public function boot()
    {

    }

    public function configurePackage(Package $package): void
    {
        $package->name("fila-module");
    }
}
