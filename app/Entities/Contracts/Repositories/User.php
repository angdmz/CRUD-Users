<?php
/**
 * Created by PhpStorm.
 * User: agustin
 * Date: 09/10/17
 * Time: 23:37
 */

namespace App\Entities\Contracts\Repositories;


use App\Entities\Contracts\User as IUser;
use Doctrine\Common\Collections\ArrayCollection;

interface User
{
    public function find($id) : IUser;
    public function findByName($name) : IUser;
    public function findByEmail($email) : IUser;
    public function findAll() : array;
}