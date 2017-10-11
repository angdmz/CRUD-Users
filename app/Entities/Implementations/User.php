<?php
/**
 * Created by PhpStorm.
 * User: agustin
 * Date: 09/10/17
 * Time: 21:59
 */

namespace App\Entities\Implementations;


use App\Entities\Contracts\User as IUser;

class User implements IUser, \JsonSerializable
{
    private $id;
    private $name;
    private $email;
    private $password;
    private $created_at;

    public function __construct($name = '',$email = '',$password = '')
    {
        $this->setName($name);
        $this->setEmail($email);
        $this->setPassword($password);
        $this->setCreationDate(new \DateTime());
    }

    /**
     * @return mixed
     */
    public function getCreationDate(): \DateTime
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreationDate(\DateTime $created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return string
     */
    public function getId(): string
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
    public function getName(): string
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
    public function getEmail(): string
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

    /**
     * @return mixed
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword(string $password)
    {
        $this->password = md5($password);
    }

    public function jsonSerialize()
    {
        return ['id' => $this->getId(), 'name' => $this->getName(), 'email' => $this->getEmail(), 'creation_date' => $this->getCreationDate()];
    }
}