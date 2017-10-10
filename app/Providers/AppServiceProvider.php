<?php

namespace App\Providers;

use App\Entities\Contracts\Repositories\User as UserRepositoryInterface;
use App\Entities\Implementations\User;
use App\Entities\Implementations\Repositories\User as UserRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(UserRepositoryInterface::class, function(){
            $em = $this->app->make(EntityManager::class);
            return new UserRepository(
                $em->getRepository(User::class)
            );
        });

        $this->app->bind(EntityManagerInterface::class,function(){
           $em = $this->app->make(EntityManager::class);
           return $em;
        });
    }
}
