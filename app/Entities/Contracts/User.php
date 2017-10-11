<?php
/**
 * Created by PhpStorm.
 * User: agustin
 * Date: 09/10/17
 * Time: 21:53
 */

namespace App\Entities\Contracts;


interface User
{
    public function setName(string $name);
    public function setEmail(string $email);
    public function setId(string $id);
    public function setPassword(string $password);
    public function setCreationDate(\DateTime $dt);

    public function getName() : string;
    public function getEmail() : string;
    public function getId() : string;
    public function getPassword() : string;
    public function getCreationDate() : \DateTime;
}