<?php

namespace App\Http\Controllers\Api;

use App\Entities\Contracts\Factories\User as UserFactoryInterface;
use App\Entities\Contracts\Repositories\User as UserRepositoryInterface;
use App\Http\Controllers\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    private $userRepository;
    private $entityManager;

    public function __construct(UserRepositoryInterface $repository,EntityManagerInterface $em)
    {
        $this->userRepository = $repository;
        $this->entityManager = $em;
    }

    //
    public function index()
    {
        return JsonResponse::create($this->userRepository->findAll(),JsonResponse::HTTP_OK);
    }

    public function store(Request $request, UserFactoryInterface $factory)
    {
        $user = $factory->create($request->all());
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
