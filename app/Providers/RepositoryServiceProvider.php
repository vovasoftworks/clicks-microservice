<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Read\Click\ClickReadRepository;
use App\Repositories\Write\Click\ClickWriteRepository;
use App\Repositories\Read\Click\ClickReadRepositoryInterface;
use App\Repositories\Write\Click\ClickWriteRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            ClickWriteRepositoryInterface::class,
            ClickWriteRepository::class
        );

        $this->app->bind(
            ClickReadRepositoryInterface::class,
            ClickReadRepository::class
        );
    }

    public function boot(): void
    {
        //
    }
}
