<?php

namespace App\Http\Controllers\Api;

use App\Entities\Contracts\Factories\User as UserFactoryInterface;
use App\Entities\Contracts\Repositories\User as UserRepositoryInterface;
use App\Http\Controllers\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Entities\Contracts\Validators\User as UserValidatorInterface;

class UsersController extends Controller
{
    private $userRepository;
    private $entityManager;
    private $userFactory;
    private $userValidator;

    public function __construct(UserValidatorInterface $validator, UserRepositoryInterface $repository,UserFactoryInterface $factory, EntityManagerInterface $em)
    {
        $this->userRepository = $repository;
        $this->entityManager = $em;
        $this->userFactory = $factory;
        $this->userValidator = $validator;
    }

    //
    public function index()
    {
        return JsonResponse::create($this->userRepository->findAll(),JsonResponse::HTTP_OK);
    }

    public function store(Request $request)
    {
        $errors = $this->userValidator->validate($request->all());

        if(!empty($errors)){
            return JsonResponse::create($errors,JsonResponse::HTTP_BAD_REQUEST);
        }

        $user = $this->userFactory->create($request->all());
        $this->entityManager->persist($user);
        $this->entityManager->flush();
        $response = ['id'=>$user->getId()];
        return JsonResponse::create($response,JsonResponse::HTTP_OK);
    }

    public function update(Request $request)
    {
        return __METHOD__;
    }

    public function delete(Request $request)
    {
        return __METHOD__;
    }
}
