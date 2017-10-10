<?php
/**
 * Created by PhpStorm.
 * User: agustin
 * Date: 09/10/17
 * Time: 21:59
 */

namespace App\Entities\Implementations;


use App\Entities\Contracts\User as IUser;

class User implements IUser
{
    private $id;
    private $name;
    private $email;

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
}