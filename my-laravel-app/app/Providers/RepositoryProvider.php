<?php


namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    public function register()
    {
        parent::register();

        // 経費インターフェスと経費リポジトリの連結
        $this->app->bind(KeihiInterface::class, KeihiRepository::class);
    }
}