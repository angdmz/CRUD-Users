<?php
/**
 * Created by PhpStorm.
 * User: agustin
 * Date: 10/10/17
 * Time: 00:13
 */

namespace App\Entities\Contracts\Factories;


use App\Entities\Contracts\User as IUser;

interface User
{
    public function create($args) : IUser;
}