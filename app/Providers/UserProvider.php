<?php

namespace App\Providers;

use App\Entities\Contracts\Factories\User as UserFactoryInterface;
use App\Entities\Implementations\Factories\User as UserFactory;
use Illuminate\Support\ServiceProvider;

class UserProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(UserFactoryInterface::class,function(){
            $factory = $this->app->make(UserFactory::class);
            return $factory;
        });
    }
}
