<?php
/**
 * Created by PhpStorm.
 * User: agustin
 * Date: 10/10/17
 * Time: 00:15
 */

namespace App\Entities\Implementations\Factories;


use App\Entities\Contracts\Factories\User as UserFactoryInterface;
use App\Entities\Contracts\User as IUser;

class User implements UserFactoryInterface
{

    public function create($args): IUser
    {
        $user = new \App\Entities\Implementations\User($args['name'],$args['email'],$args['password']);
        return $user;
    }
}