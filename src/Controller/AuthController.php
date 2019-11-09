<?php

namespace App\Controller;

use App\Service\Auth\Interfaces\AuthServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AuthController extends AbstractController
{
    /**
     * Register user
     * @Route("/auth/register", name="user_register", methods={"POST"})
     * @param Request $request
     * @param AuthServiceInterface $authService
     * @return JsonResponse
     */
    public function register(Request $request, AuthServiceInterface $authService): JsonResponse
    {
        try {
            $user = $authService->register($request);

            return $this->json([
                'user' => $user
            ]);
        } catch (\Exception $exception) {
            return $this->json([
                'message' => $exception->getMessage()
            ]);
        }
    }
}
