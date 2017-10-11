<?php
/**
 * Created by PhpStorm.
 * User: agustin
 * Date: 10/10/17
 * Time: 22:34
 */

namespace App\Entities\Implementations\Validators;


use App\Entities\Contracts\Validators\User as UserValidatorInterface;
use Illuminate\Support\Facades\Validator;


class User implements UserValidatorInterface
{

    /**
     * @param $p
     * @return array
     */
    public function validate($p) : array
    {
        /** @var \Illuminate\Validation\Validator $validator */
        $validator = Validator::make($p,[
            'name'=>"required",
            'password'=>"required",
            'email'=>"required"
        ]);

        return $validator->fails() ? $validator->errors()->toArray() : [];
    }
}