<?php

namespace App\Providers;

use App\Entities\Contracts\Repositories\User as UserRepositoryInterface;
use App\Entities\Implementations\User;
use App\Entities\Implementations\Repositories\User as UserRepository;
use App\Entities\Contracts\Factories\User as UserFactoryInterface;
use App\Entities\Implementations\Factories\User as UserFactory;
use Doctrine\ORM\EntityManager;
use Illuminate\Support\ServiceProvider;
use App\Entities\Contracts\Validators\User as UserValidatorInterface;
use App\Entities\Implementations\Validators\User as UserValidator;

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

        $this->app->bind(UserRepositoryInterface::class, function(){
            $em = $this->app->make(EntityManager::class);
            return new UserRepository(
                $em->getRepository(User::class)
            );
        });

        $this->app->bind(UserFactoryInterface::class,function(){
            $factory = $this->app->make(UserFactory::class);
            return $factory;
        });

        $this->app->bind(UserValidatorInterface::class,function(){
            $validator = $this->app->make(UserValidator::class);
            return $validator;
        });
    }
}
