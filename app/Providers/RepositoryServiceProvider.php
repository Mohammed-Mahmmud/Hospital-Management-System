<?php

namespace App\Providers;

use App\Interfaces\Sections\SectionRepositoryInterface;
use App\Repository\Sections\SectionRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind( abstract:SectionRepositoryInterface::class,concrete:SectionRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
