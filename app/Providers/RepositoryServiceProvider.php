<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\MataKuliahRepositoryInterface;
use App\Repository\Eloquent\MataKuliahRepository;
use App\Repository\TertarikElektifRepositoryInterface;
use App\Repository\Eloquent\TertarikElektifRepository;
use App\Repository\KomentarRepositoryInterface;
use App\Repository\Eloquent\KomentarRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(MataKuliahRepositoryInterface::class, MataKuliahRepository::class);
        $this->app->bind(TertarikElektifRepositoryInterface::class, TertarikElektifRepository::class);
        $this->app->bind(KomentarRepositoryInterface::class, KomentarRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
