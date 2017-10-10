<?php
/**
 * Created by PhpStorm.
 * User: agustin
 * Date: 09/10/17
 * Time: 23:40
 */

namespace App\Entities\Implementations\Repositories;


use App\Entities\Contracts\Repositories\User as UserRepositoryInterface;
use App\Entities\Contracts\User as IUser;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Persistence\ObjectRepository;

class User implements UserRepositoryInterface
{

    private $genericRepository;

    /**
     * User constructor.
     * @param ObjectRepository $or
     */
    public function __construct(ObjectRepository $or)
    {
        $this->genericRepository = $or;
    }

    /**
     * @param $id
     * @return IUser
     */
    public function find($id): IUser
    {
        $this->genericRepository->find($id);
    }

    /**
     * @param $name
     * @return IUser
     */
    public function findByName($name): IUser
    {
        $this->genericRepository->findBy(['name'=>$name]);
    }

    /**
     * @param $email
     * @return IUser
     */
    public function findByEmail($email): IUser
    {
        $this->genericRepository->findBy(['email'=>$email]);
    }

    /**
     * @return ArrayCollection
     */
    public function findAll(): ArrayCollection
    {
        return new ArrayCollection($this->genericRepository->findAll());
    }
}