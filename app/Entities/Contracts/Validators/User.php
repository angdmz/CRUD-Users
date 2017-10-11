<?php
/**
 * Created by PhpStorm.
 * User: agustin
 * Date: 10/10/17
 * Time: 22:32
 */

namespace App\Entities\Contracts\Validators;


interface User
{
    public function validate($p) : array;
}