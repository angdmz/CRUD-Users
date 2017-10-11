<?php
/**
 * Created by PhpStorm.
 * User: agustin
 * Date: 09/10/17
 * Time: 22:00
 */

namespace App\Mappings;

use App\Entities\Implementations\User;
use LaravelDoctrine\Fluent\EntityMapping;
use LaravelDoctrine\Fluent\Fluent;

class UserMapping extends EntityMapping
{
    /** @return string */
    public function mapFor()
    {
        return User::class;
    }

    /** @param Fluent $builder */
    public function map(Fluent $builder)
    {
        $builder->increments('id');

        $builder->string('name');
        $builder->string('email');
        $builder->string('password');
        $builder->dateTime('created_at');
    }
}