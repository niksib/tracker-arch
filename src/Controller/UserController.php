<?php

namespace App\Controller;

use App\Service\User\Interfaces\UserServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * Ban user account
     * @Route("/user/{userId}/ban", name="user_ban", methods={"PATCH"}, requirements={"id"="\d+"})
     * @param int $userId
     * @param UserServiceInterface $userService
     * @return JsonResponse
     */
    public function ban(int $userId, UserServiceInterface $userService): JsonResponse
    {
        try {
            $userService->ban($userId);

            return $this->json([
                'message' => 'User successful banned'
            ]);
        } catch (\Exception $exception) {
            return $this->json([
                'message' => $exception->getMessage()
            ]);
        }
    }
}
